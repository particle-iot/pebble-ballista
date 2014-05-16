Servo myservo;

int firePos = 0;
int resetPos = 180;

void setup() 
{ 
	myservo.attach(D0);  // attaches the servo on pin 0 to the servo object
	Spark.function("fire", fire);
} 


int fire(String command) {
	myservo.write(firePos);
	delay(1000);
	reset();
}

void reset() {
	myservo.write(resetPos);
}

void loop() {
}
