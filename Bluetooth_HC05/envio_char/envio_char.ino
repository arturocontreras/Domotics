String inputString = "";         // a string to hold incoming data
boolean stringComplete = false;  // whether the string is complete

void setup() {
  // initialize serial:
  Serial3.begin(9600);
  Serial.begin(9600);

}

void loop() {
  if (Serial3.available()) {
    // get the new byte:
    char inChar = (char)Serial3.read();
    Serial.print(inChar);
  }
}



