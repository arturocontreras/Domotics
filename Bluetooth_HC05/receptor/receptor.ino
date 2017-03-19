
void setup()
{
  Serial.begin(9600);
  Serial.println("Receptor");
  Serial3.begin(38400);  // HC-05 default speed in AT command more
}

void loop()
{

  // Keep reading from HC-05 and send to Arduino Serial Monitor
  if (Serial3.available())
    Serial.write(Serial3.read());

}
