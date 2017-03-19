//**********************Proyecto domotico ---- Controlador receptor ******************************************************

//Orden asumido, cambiar cuando tenga el orden correcto
//a Abrir puerta
//b Cerrar puerta
//c Abrir ventana
//d Cerrar ventana
//e prender luces
//f apagar luces
//g abrir persiana
//h cerrar persiana
//i encender calefaccion
//j apagar calefaccion
//k Alarma

#include "SoftwareSerial.h"
#include <Stepper.h>

SoftwareSerial rasp(51, 53);
 
#define calefaccion 48
#define luces 52
#define alarma 50
#define pasos_ventana 200
#define pasos_persiana 200
#define pasos_puerta 50

int ibyte,val;
char comando;
//flags para cuidado del movimiento
boolean puertaf = false;
boolean persianaf = false;
boolean ventanaf = false;
//
boolean flag;
const int stepsPerRevolution = 200; //número de pasos por vuelta del motor de pasos

//Stepper mpersiana(stepsPerRevolution, 47, 49, 51, 53);
Stepper mventana(stepsPerRevolution, 4, 5, 6, 7);
//Stepper mpuerta(stepsPerRevolution, 26, 27, 28, 29);
#define A  31
#define B  29
#define C  28
#define D  30
#define tiempo 5 

#define LED1 33
#define LED2 35
#define LED3 37
#define LED4 39

void setup() {

mventana.setSpeed(60); //Seteando velocidad de los stepper
//mpersiana.setSpeed(60);
//mpuerta.setSpeed(60);

pinMode(calefaccion, OUTPUT);
pinMode(luces, OUTPUT);
pinMode(alarma, OUTPUT);

digitalWrite(calefaccion, HIGH);
digitalWrite(luces, HIGH);
digitalWrite(alarma, HIGH);

pinMode(A, OUTPUT);
pinMode(B, OUTPUT);
pinMode(C, OUTPUT);
pinMode(D, OUTPUT);

pinMode(LED1, OUTPUT);
pinMode(LED2, OUTPUT);
pinMode(LED3, OUTPUT);
pinMode(LED4, OUTPUT);

pinMode(4, OUTPUT);
pinMode(5, OUTPUT);
pinMode(6, OUTPUT);
pinMode(7, OUTPUT);

digitalWrite(4, LOW);
digitalWrite(5, LOW);
digitalWrite(6, LOW);
digitalWrite(7, LOW);

Serial.begin(9600); //PC para pruebas
Serial1.begin(38400); //Módulo Bluetooth
rasp.begin(9600); //raspberry

}

void loop() {

if(rasp.available()>0){

   digitalWrite(LED1, HIGH);
   val=(char)rasp.read();
   if(val=='x'){
   while(rasp.available()==0){};
   comando=rasp.read();
   flag = true;     
   }            
}

if(Serial1.available()>0){

   digitalWrite(LED1, HIGH);
   val=Serial1.read();
   //Serial.println(val);
   if(val=='x'){
   while(Serial1.available()==0){};
   comando=Serial1.read();
   //Serial.println(comando);
   flag = true;     
   }            
}


if(Serial.available()>0){

   digitalWrite(LED2, HIGH);
   comando=Serial.read();
   flag = true;                 
}
   
if(flag){
  
  switch (comando){
    
    case 'a':
    if(!puertaf){
      Serial.println("Abriendo puerta ");
      //mpuerta.step(pasos_puerta);
      abre(pasos_puerta);
      digitalWrite(LED2, HIGH);
      puertaf= true;
    }
    else{
      Serial.println("Puerta abierta");
    }
    break;
    
    case 'b':
    if(puertaf){
      Serial.println("Cerrando puerta");
      //mpuerta.step(-pasos_puerta);
      cierra(pasos_puerta);
      digitalWrite(LED2, LOW);
      puertaf= false;
    }
    else{
      Serial.println("Puerta cerrada");
    }
    
    break;
  
    case 'c':
    if(!ventanaf){
      Serial.println("Abriendo ventana");
      mventana.step(pasos_ventana);
      desactivar();
      digitalWrite(LED3, HIGH);
      ventanaf= true;
    }
    else{
      Serial.println("Ventana abierta");
    }
    break;
  
    case 'd':
    if(ventanaf){
      Serial.println("Cerrando ventana");
      mventana.step(-pasos_ventana);
      desactivar();
      digitalWrite(LED3, LOW);
      ventanaf= false;
    }
    else{
      Serial.println("Ventana cerrada");
    }
    break;
  
    case 'e':
    Serial.println("Luces on");
    digitalWrite(luces, HIGH);
    break;
    
    case 'f':
    Serial.println("Luces off");
    digitalWrite(luces, LOW);
    break;
    
    case 'g':
    if(!persianaf){
      Serial.println("Subiendo persiana");
      //mpersiana.step(pasos_persiana);
      digitalWrite(LED4, HIGH);
      persianaf = true;
    }
    else{
      Serial.println("Persiana Subida");
    }
    break;
    
    case 'h':
    if(persianaf){
      Serial.println(" Bajando persiana");
      //mpersiana.step(-pasos_persiana);
      digitalWrite(LED4, LOW);
      persianaf = false;
    }
    else{
      Serial.println("Persiana Bajada");
    }
    break;
  
    case 'i':
    Serial.println("calefaccion on");
    digitalWrite(calefaccion, LOW);
    break;
  
    case 'j':
    Serial.println("calefaccion off");
    digitalWrite(calefaccion, HIGH);
    break;
  
    case 'k':
    Serial.println("alarma");
    digitalWrite(alarma, LOW);
    delay(3000);
    digitalWrite(alarma, HIGH);
    break;
  
  }

  flag = false;
  digitalWrite(LED1, LOW);
}   

}

void abre(int pasos){

  for(int i = 0; i <= pasos; i++){
    digitalWrite(A, HIGH);
    digitalWrite(B, HIGH);
    digitalWrite(C, HIGH);
    digitalWrite(D, HIGH);
    delay(tiempo);
    
    digitalWrite(A, HIGH);
    digitalWrite(B, LOW);
    digitalWrite(C, HIGH);
    digitalWrite(D, HIGH);
    delay(tiempo);
    
    digitalWrite(A, HIGH);
    digitalWrite(B, LOW);
    digitalWrite(C, HIGH);
    digitalWrite(D, LOW);
    delay(tiempo);
  //  
    digitalWrite(A, HIGH);
    digitalWrite(B, HIGH);
    digitalWrite(C, HIGH);
    digitalWrite(D, LOW);
  
    delay(tiempo);
  }

  apagar();
}

void cierra(int pasos){

  for(int i = 0; i <= pasos; i++){
    
    digitalWrite(A, HIGH);
    digitalWrite(B, HIGH);
    digitalWrite(C, HIGH);
    digitalWrite(D, LOW);
  
    delay(tiempo);

    digitalWrite(A, HIGH);
    digitalWrite(B, LOW);
    digitalWrite(C, HIGH);
    digitalWrite(D, LOW);
    delay(tiempo);

    digitalWrite(A, HIGH);
    digitalWrite(B, LOW);
    digitalWrite(C, HIGH);
    digitalWrite(D, HIGH);
    delay(tiempo);

    digitalWrite(A, HIGH);
    digitalWrite(B, HIGH);
    digitalWrite(C, HIGH);
    digitalWrite(D, HIGH);
    delay(tiempo);
    

  }

  apagar();
}

void apagar(){
    digitalWrite(A, LOW);
    digitalWrite(B, LOW);
    digitalWrite(C, LOW);
    digitalWrite(D, LOW);
}

void desactivar(){
  digitalWrite(4, LOW);
  digitalWrite(5, LOW);
  digitalWrite(6, LOW);
  digitalWrite(7, LOW);

}

