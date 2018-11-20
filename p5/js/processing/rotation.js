function setup() {
    var cambas = createCanvas(500, 500);
    cambas.parent('rotation');
  }
  
function draw() {
    background(0);
    
    push();
    fill(0,249,0);
    translate(width/2, height/2);
    rotate(frameCount / 100.0);
    polygon(0, 0, 200, 4);
    pop();
    
    var sizeBox = (mouseX%250);
    fill(255,249,0);
    noStroke();
    rect(0,0,sizeBox,sizeBox);
    rect(0,height-sizeBox,sizeBox,sizeBox);
    rect(width-sizeBox,0,sizeBox,sizeBox);
    rect(width-sizeBox,height-sizeBox,sizeBox,sizeBox);
   
  }
  
 function polygon( x,  y,  radius,  npoints) {
    var angle = TWO_PI / npoints;
    beginShape();
    for (var a = 0; a < TWO_PI; a += angle) {
      var sx = x + cos(a) * radius;
      var sy = y + sin(a) * radius;
      vertex(sx, sy);
    }
    endShape(CLOSE);
  }
  