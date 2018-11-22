/* var sizer;
function setup() {
  var cambas=createCanvas(500, 500,WEBGL);
    cambas.parent('cubos');
  fill(130);

  sizer = 50;
}

function draw() {
  background(0);
  translate(200, 200, 0); 
  
  camera(-width/0.857, -height/1.3, -(height/2.0) / tan(PI*30.0 / 180.0), -width/5, height/5.0, 50, 0, 1, 0);
  rotateY(-2*PI/4);
  ortho();
  rotateY(((PI + mouseX/width) * PI)*2);
//ambientLight ( 200, 200, 200, -width/2,-height/2,height/2);
directionalLight (200, 200, 200, -width/2,-height/2,height/2);
    
pointLight (200, 200, 200, -width/2,-height/2,height/2);
  
  for (var i=0; i<4; i++) {
    box(sizer);
    translate(0, sizer, 0);
  }
  box(sizer);
  for (var i = 0; i<4; i++) {
    translate(sizer, 0, 0);
    box(sizer);
  }
  translate(-(sizer*4), -(sizer*4), sizer);
  box(sizer);
  translate(0, 0, sizer);
  box(sizer);
  
  stroke(0);
  
  beginShape();
  vertex(-(sizer/2),-(sizer/2),(sizer/2));
  vertex((sizer/2),-(sizer/2),(sizer/2));
  vertex((sizer/2),-(sizer/2),((3*sizer)/2));
  vertex(-(sizer/2),-(sizer/2),((3*sizer)/2));
  endShape();
  beginShape();
  stroke(0);
  vertex((sizer/2),-(sizer/2),(sizer/2));
  vertex((sizer/2),(sizer/2),(sizer/2));
  vertex((sizer/2),-(sizer/2),((3*sizer)/2));
  endShape();
  
  beginShape();
  stroke(0);
  vertex(-(sizer/2),-(sizer/2),(sizer/2));
  vertex(-(sizer/2),(sizer/2),(sizer/2));
  vertex(-(sizer/2),-(sizer/2),((3*sizer)/2));
  endShape();
  
  beginShape();
  vertex(-(sizer/2),(sizer/2),(sizer/2));
  vertex((sizer/2),(sizer/2),(sizer/2));
  vertex((sizer/2),-(sizer/2),((3*sizer)/2));
  vertex(-(sizer/2),-(sizer/2),((3*sizer)/2));
  endShape();
  
  stroke(0);
  line(-(sizer/2),-(sizer/2),25,-(sizer/2),-(sizer/2),75);
  
  
}
 */
var sizer;
function setup() {
    var cambas=createCanvas(500, 500,WEBGL);
    cambas.parent('cubos');

    sizer = 50;
  }
  
  function draw() {
    background(0);
    //camera(-width/0.857, -height/1.3, -(height/2.0) / tan(PI*30.0 / 180.0), -width/5, height/5.0, 50, 0, 1, 0);
    //camera(0, 0, (height/2.0) / tan(PI*30.0 / 180.0), 0, 0, 0, 0, 1, 0);
    /* rotateX((PI + mouseY/float(height) * PI)*2); */
  rotateY(-2*PI/4); 
  orbitControl();
  ortho(-width / 2, width / 2, height / 2, -height / 2, 0, 500);
  translate(0, 0, 0);
  //rotateY(((PI + mouseX/width) * PI)*2);
    for (var i=0; i<4; i++) {
        box(sizer);
        translate(0, sizer, 0);
      }
      box(sizer);
      for (var i = 0; i<4; i++) {
        translate(sizer, 0, 0);
        box(sizer);
      }
      translate(-(sizer*4), -(sizer*4), sizer);
      box(sizer);
      translate(0, 0, sizer);
      box(sizer);

      stroke(0);
  
  beginShape();
  vertex(-(sizer/2),-(sizer/2),(sizer/2));
  vertex((sizer/2),-(sizer/2),(sizer/2));
  vertex((sizer/2),-(sizer/2),((3*sizer)/2));
  vertex(-(sizer/2),-(sizer/2),((3*sizer)/2));
  endShape();
  beginShape();
  stroke(0);
  vertex((sizer/2),-(sizer/2),(sizer/2));
  vertex((sizer/2),(sizer/2),(sizer/2));
  vertex((sizer/2),-(sizer/2),((3*sizer)/2));
  endShape();
  
  beginShape();
  stroke(0);
  vertex(-(sizer/2),-(sizer/2),(sizer/2));
  vertex(-(sizer/2),(sizer/2),(sizer/2));
  vertex(-(sizer/2),-(sizer/2),((3*sizer)/2));
  endShape();
  
  beginShape();
  vertex(-(sizer/2),(sizer/2),(sizer/2));
  vertex((sizer/2),(sizer/2),(sizer/2));
  vertex((sizer/2),-(sizer/2),((3*sizer)/2));
  vertex(-(sizer/2),-(sizer/2),((3*sizer)/2));
  endShape();
  
  stroke(0);
  line(-(sizer/2),-(sizer/2),25,-(sizer/2),-(sizer/2),75);

  
  
  }