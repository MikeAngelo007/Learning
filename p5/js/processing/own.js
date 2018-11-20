var a;
var b;
var c;
var d;
function setup() {
  var cambas = createCanvas(600, 600);
  cambas.parent('own');
  background(0);

  b = 0;
  d = 0;

  a = (-1)*(height/2);
  c = (-1)*(height/2);
}
function draw() {
  stroke(255);
  noFill();

  for (var i=600; i >0; i-=25) {
    if (i%2 == 0) {
      fill(255);
      ellipse(300, 300, 0+i, 0+i);
    } else {
      fill(0);
      ellipse(300, 300, 0+i, 0+i);
    }
  }

  fill(255, 255, 255);

  ellipse(b, 260, 30, 15);
  ellipse(d, 340, 30, 15);

  fill(0, 0, 0);
  stroke(0);
  ellipse(260, c, 15, 30);
  ellipse(340, a, 15, 30);

  b = b + 5;
  if (b > width+(width/2)) { 
    b = 0;
  }
  d = d + 5;
  if (d > width+(width/2)) { 
    d = 0;
  }

  a = a + 5;
  if (a > height) {
    a = (-1)*(height/2);
  }
  c = c + 5;
  if (c > height) {
    c = (-1)*(height/2);
  }

  if (mouseIsPressed == true) {
    stroke(247, 50, 7);
    line(0, 252.5, width, 252.5);
    line(0, 267.5, width, 267.5);
    
    line(0, 332.5, width, 332.5);
    line(0, 347.5, width, 347.5);
    
    
    
    
    
    line(252.5, 0, 252.5, height );
    line(267.5, 0, 267.5, height);
    
    line(332.5, 0, 332.5, height);
    line(347.5, 0, 347.5, height);
    
  }

}
