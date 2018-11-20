var a;
var b;
function setup() {
  var cambas = createCanvas(800, 800);
  cambas.parent('cafewall');
  background(255);
  a=0;
  b=0;
}
function draw() {
  background(255);
  strokeWeight(1);
  fill(0);

  for (var i = -width; i < width; i+=40) {
    for (var j = 0; j < height; j+=40) {
      rect(a+i, j, 20, 20);
    }
  }
  for (var i = width*2; i > -width; i-=40) {
    for (var j = -20; j < height; j+=40) {
      rect(b+i-15, j, 20, 20);
    }
  }
  for (var j = 0; j < height; j+=20) {
    stroke(130, 130, 130);
    line(0, j, width, j);
  }

  if (mouseIsPressed == true) {
    a = a+2;
    if (a > width) {
      a = 0;
    }
    //b = b-2;
    //if (b < -width) {
    //  b = 0;
    //}

    b = b+2;
    if (b > width) {
      b = 0;
    }
  }
  
  if (keyIsPressed == true) {
    a = a+2;
    if (a > width) {
      a = 0;
    }
    b = b-2;
    if (b < -width) {
      b = 0;
    }
  }
}
