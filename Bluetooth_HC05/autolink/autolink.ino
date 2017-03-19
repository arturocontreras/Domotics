
void setup()
{
  pinMode(9, OUTPUT);  // this pin will pull the HC-05 pin 34 (key pin) HIGH to switch module to AT mode
  digitalWrite(9, HIGH);
  Serial.begin(38400);
  Serial.println("Enter AT commands:");
  Serial3.begin(38400);  // HC-05 default speed in AT command more

  //Autoinicialización y autolink de los bluetooth MAESTRO ESCLAVO
  Serial3.write("AT");
  Serial3.write((char)13);
  Serial3.write((char)10);

  delay(2000);
  
  Serial3.write("AT+LINK=3014,10,91158");
  Serial3.write((char)13);
  Serial3.write((char)10);
  
  delay(2000);
}

void loop()
{

  Serial3.write('a');
  delay(1000);

}
