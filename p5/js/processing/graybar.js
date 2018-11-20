var coswave=[]; 

function setup() {
  var cambas = createCanvas(800, 500);
  cambas.parent('graybar');
  background(255);
}

function draw() {
  paintBackground();
  fill(128,128,128);
  stroke(128,128,128);
  rect(100, height/2, 600,100);
 
}

function paintBackground() {
  
  coswave = new Array(width);
  for (var i = 0; i < width; i++) {
    var amount = map(i, 0, width, 0, PI);
    coswave[i] = abs(cos(amount));
  }
  
  for(var i = 0; i < mouseX; i++){
    stroke(255 - coswave[i/2]*255);
    line(i, 0, i, height);
  }
  
  for(var i = mouseX; i < width; i++){
    stroke(255);
    line(i, 0, i, height);
  }
}
