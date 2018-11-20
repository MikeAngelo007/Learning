var a;
var tick;
function setup(){
  var cambas = createCanvas(1000,500);
  cambas.parent('owntwo');
  background(0);
  a = 0;
  tick = 0;
}
function draw(){
  background(0);
  
  stroke(255);
  noFill();
  rect(100,50,800,400);
  
  
  rect(400,200,200,100);
  line(100,50,400,200);
  line(100,450,400,300);
  line(900,50,600,200);
  line(900,450,600,300);
  
  fill(255);
  ellipse(a+155,height/2,110,110);
  
  ellipse(a+width/2,height/2,110,110);
  
  if(mouseIsPressed == true){
    stroke(255);
    for(var i=0;i<400;i+=40){
      line(50+i,400,200+(i/4));
    }
    for(var i=0;i<400;i+=40){
      line(50+i,600,200+(i/4));
    }
  }
  
  if(keyIsPressed == true){
    
    stroke(247, 50, 7 );
    line(0,195,width,195);
    line(0,305,width,305);
  }
  
  
  if(tick == 0){
    a = a +1;
    
  }
  if(tick == 1){
    a = a - 1;
  }
  
  if(a == 0){
    tick=0;
  }
  
  if(a+155 == width/2){
    tick=1;
  }
  
  
}
