var distances=[];
var maxDistance;
var spacer;

function setup() {
  var cambas = createCanvas(800, 800);
  cambas.parent('moire');
  maxDistance = dist(width/2, height/2, width, height);
  distances = new Array(width);

  for(var i=0; i < width; i++){
      distances[i]=new Array(height);
  }
  for (var y = 0; y < height; y++) {
    for (var x = 0; x < width; x++) {
      var distance = dist(width/2, height/2, x, y);
      distances[x][y] = distance/maxDistance * 255;
    }
  }
  spacer = 17;
  strokeWeight(8);
}

function draw() {
  background(255);
  for (var y = 0; y < height; y += spacer) {
    for (var x = 0; x < width; x += spacer) {
      stroke(distances[x][y], 122, 122);
      //povar(x + spacer/2, y + spacer/2);
    }
  }
  
  rotate(TWO_PI/(mouseX/4));
  translate((mouseX-(width)),(mouseY-(height)));
  for (var y = 0; y < height*2; y += spacer) {
    for (var x = 0; x < width*2; x += spacer) {
      stroke(0);
      //povar(x + spacer/2, y + spacer/2);
    }
  }
}
