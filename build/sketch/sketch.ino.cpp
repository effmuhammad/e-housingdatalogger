#include <Arduino.h>
#line 1 "d:\\TA PA LJ\\webapp_streamlit\\sketch.ino"
#define LED_CH_1 14
#define LED_CH_2 12
#define LED_CH_3 15


void setup() {
  // initialize digital pin LED_BUILTIN as an output.
  pinMode(LED_CH_1, OUTPUT);
  pinMode(LED_CH_2, OUTPUT);
  pinMode(LED_CH_3, OUTPUT);
  digitalWrite(LED_CH_1, LOW);
  digitalWrite(LED_CH_2, LOW);
  digitalWrite(LED_CH_3, LOW);

}

// the loop function runs over and over again forever
void loop() {
  
}

