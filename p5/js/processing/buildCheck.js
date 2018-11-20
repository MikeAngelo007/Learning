var c;
///Cuadrante 1
//blanco1
var velocity;
var c1b1x;
var c1b1y;
//blanco2
var c1b2x;
var c1b2y;
//negro1
var c1n1x;
var c1n1y;
//negro2
var c1n2x;
var c1n2y;

///Cuadrante 2
//blanco1
var c2b1x;
var c2b1y;
//blanco2
var c2b2x;
var c2b2y;
//negro1
var c2n1x;
var c2n1y;
//negro2
var c2n2x;
var c2n2y;



///mitad vertical superior
//blanco1
var mvsb1x;
var mvsb1y;
//blanco2
var mvsb2x;
var mvsb2y;
//negro1
var mvsn1x;
var mvsn1y;
//negro2
var mvsn2x;
var mvsn2y;

///mitad vertical inferior
//blanco1
var mvib1x;
var mvib1y;
//blanco2
var mvib2x;
var mvib2y;
//negro1
var mvin1x;
var mvin1y;
//negro2
var mvin2x;
var mvin2y;


///mitad horizontal izquierda
//blanco1
var mhib1x;
var mhib1y;
//blanco2
var mhib2x;
var mhib2y;
//negro1
var mhin1x;
var mhin1y;
//negro2
var mhin2x;
var mhin2y;


///mitad horizontal derecha
//blanco1
var mhdb1x;
var mhdb1y;
//blanco2
var mhdb2x;
var mhdb2y;
//negro1
var mhdn1x;
var mhdn1y;
//negro2
var mhdn2x;
var mhdn2y;

var delay;

function setup() {
  var cambas=createCanvas(660, 660);
  cambas.parent('builCheck');
  background(255);
  c = 0;

  //velocity = 0.125;
  //velocity = 0.25;
  velocity = 0.5;
  delay = 2000;
  ///Cuadrante 1
  //blanco1
  c1b1x=0;
  c1b1y=0;
  //blanco2
  c1b2x=0;
  c1b2y=0;
  //negro1
  c1n1x=0;
  c1n1y=0;
  //negro2
  c1n2x=0;
  c1n2y=0;

  ///Cuadrante 2
  //blanco1
  c2b1x=0;
  c2b1y=0;
  //blanco2
  c2b2x=0;
  c2b2y=0;
  //negro1
  c2n1x=0;
  c2n1y=0;
  //negro2
  c2n2x=0;
  c2n2y=0;

  

  ///mitad vertical superior
  //blanco1
  mvsb1x=0;
  mvsb1y=0;
  //blanco2
  mvsb2x=0;
  mvsb2y=0;
  //negro1
  mvsn1x=0;
  mvsn1y=0;
  //negro2
  mvsn2x=0;
  mvsn2y=0;

  ///mitad vertical inferior
  //blanco1
  mvib1x=0;
  mvib1y=0;
  //blanco2
  mvib2x=0;
  mvib2y=0;
  //negro1
  mvin1x=0;
  mvin1y=0;
  //negro2
  mvin2x=0;
  mvin2y=0;


  ///mitad horizontal izquierda
  //blanco1
  mhib1x=0;
  mhib1y=0;
  //blanco2
  mhib2x=0;
  mhib2y=0;
  //negro1
  mhin1x=0;
  mhin1y=0;
  //negro2
  mhin2x=0;
  mhin2y=0;


  ///mitad horizontal derecha
  //blanco1
  mhdb1x=0;
  mhdb1y=0;
  //blanco2
  mhdb2x=0;
  mhdb2y=0;
  //negro1
  mhdn1x=0;
  mhdn1y=0;
  //negro2
  mhdn2x=0;
  mhdn2y=0;
}

function draw() {
  background(255);
  strokeWeight(0);
  fill(0);
  for (var i = 0; i < width; i+=120) {
    for (var j =0; j < height; j+=120) {
      rect(i, j, 60, 60);
    }
  }
  for (var i = 0; i < width; i+=120) {
    for (var j =0; j < height; j+=120) {
      rect(i+60, j+60, 60, 60);
    }
  }
  
  //Nota: Los cuadritos deben recorrer 30px, por lo tanto las coordenadas deben cambiar 30px en cada movimiento
  //////////////////////////////////////////////////////////////////////// Cuadros pequeños ///////////////////////////////////////////////////////77
  //////////////Cuadrante 1
  /// Blanco 1
  
  for (var i = 0; i < 300; i+=120) {
    for (var j =0; j < 300; j+=120) {
      fill(255);
      rect(c1b1x+i+1, c1b1y+j+1, 20, 20);
    }
  }
  for (var i = 0; i < 200; i+=120) {
    for (var j =0; j < 200; j+=120) {
      rect(c1b1x+i+61, c1b1y+j+61, 20, 20);
    }
  }
  
  ///Blanco 2
  for (var i = 0; i < 300; i+=120) {
    for (var j =0; j < 300; j+=120) {
      fill(255);
      rect(c1b2x+i+39, c1b2y+j+39, 20, 20);
    }
  }
  for (var i = 0; i < 200; i+=120) {
    for (var j =0; j < 200; j+=120) {
      rect(c1b2x+i+99, c1b2y+j+99, 20, 20);
    }
  }
  
  ///Negro 1
  for (var i = 0; i < 201; i+=120) {
    for (var j =0; j < 300; j+=120) {
      fill(0);
      rect(c1n1x+i+61, c1n1y+j+1, 20, 20);
    }
  }
  for (var i = 0; i < 261; i+=120) {
    for (var j =0; j < 200; j+=120) {
      rect(c1n1x+i+1, c1n1y+j+61, 20, 20);
    }
  }
  
  ///Negro 2
  for (var i = 0; i < 240; i+=120) {
    for (var j =0; j < 300; j+=120) {
      fill(0);
      rect(c1n2x+i+99, c1n2y+j+39, 20, 20);
    }
  }
  for (var i = 0; i < 291; i+=120) {
    for (var j =0; j < 201; j+=120) {
      rect(c1n2x+i+39, c1n2y+j+99, 20, 20);
    }
  }
  
  
  
  
  
  
  
  
  
  
  
  //////////////Cuadrante 2
  /// Blanco 1
  
 for (var i = 360; i < 660; i+=120) {
    for (var j =0; j < 300; j+=120) {
      fill(255);
      rect(c2b1x+i+39, c2b1y+j+1, 20, 20);
    }
  }
  for (var i = 360; i < 660; i+=120) {
    for (var j =0; j < 200; j+=120) {
      rect(c2b1x+i+99, c2b1y+j+61, 20, 20);
    }
  }
  
  
  
  ///Blanco 2
  for (var i = 360; i < 660; i+=120) {
    for (var j =0; j < 300; j+=120) {
      fill(255);
      rect(c2b2x+i+1, c2b2y+j+39, 20, 20);
    }
  }
  for (var i = 360; i < 660; i+=120) {
    for (var j =0; j < 200; j+=120) {
      rect(c2b2x+i+61, c2b2y+j+99, 20, 20);
    }
  }
  
  ///Negro 1
  for (var i = 360; i < 660; i+=120) {
    for (var j =0; j < 300; j+=120) {
      fill(0);
      rect(c2n1x+i+99, c2n1y+j+1, 20, 20);
    }
  }
  for (var i = 360; i < 660; i+=120) {
    for (var j =0; j < 200; j+=120) {
      rect(c2n1x+i+39, c2n1y+j+61, 20, 20);
    }
  }
  
  ///Negro 2
  for (var i = 360; i < 660; i+=120) {
    for (var j =0; j < 300; j+=120) {
      fill(0);
      rect(c2n2x+i+61, c2n2y+j+39, 20, 20);
    }
  }
  for (var i = 360; i < 660; i+=120) {
    for (var j =0; j < 201; j+=120) {
      rect(c2n2x+i+1, c2n2y+j+99, 20, 20);
    }
  }
  
  //////////////Cuadrante 3
  /// Blanco 1
  
  for (var i = 0; i < 300; i+=120) {
    for (var j =360; j < 660; j+=120) {
      fill(255);
      rect(c2b1x+i+39, c2b1y+j+1, 20, 20);
    }
  }
  for (var i = 0; i < 200; i+=120) {
     for (var j =360; j < 660; j+=120) {
      rect(c2b1x+i+99, c2b1y+j+61, 20, 20);
    }
  }
  
  ///Blanco 2
  for (var i = 0; i < 300; i+=120) {
     for (var j =360; j < 660; j+=120) {
      fill(255);
      rect(c2b2x+i+1, c2b2y+j+39, 20, 20);
    }
  }
  for (var i = 0; i < 200; i+=120) {
     for (var j =360; j < 660; j+=120) {
      rect(c2b2x+i+61, c2b2y+j+99, 20, 20);
    }
  }
  
  ///Negro 1
  for (var i = 0; i < 201; i+=120) {
     for (var j =360; j < 660; j+=120) {
      fill(0);
      rect(c2n1x+i+99, c2n1y+j+1, 20, 20);
    }
  }
  for (var i = 0; i < 261; i+=120) {
     for (var j =360; j < 660; j+=120) {
      rect(c2n1x+i+39, c2n1y+j+61, 20, 20);
    }
  }
  
  ///Negro 2
  for (var i = 0; i < 240; i+=120) {
     for (var j =360; j < 660; j+=120) {
      fill(0);
      rect(c2n2x+i+61, c2n2y+j+39, 20, 20);
    }
  }
  for (var i = 0; i < 291; i+=120) {
    for (var j =360; j < 660; j+=120) {
      rect(c2n2x+i+1, c2n2y+j+99, 20, 20);
    }
  }
  
  //////////////Cuadrante 4
  /// Blanco 1
  
  for (var i = 360; i < 660; i+=120) {
    for (var j =360; j < 660; j+=120) {
      fill(255);
      rect(c1b1x+i+1, c1b1y+j+1, 20, 20);
    }
  }
  for (var i = 360; i < 660; i+=120) {
    for (var j =360; j < 660; j+=120) {
      rect(c1b1x+i+61, c1b1y+j+61, 20, 20);
    }
  }
  
  ///Blanco 2
  for (var i = 360; i < 660; i+=120) {
    for (var j =360; j < 660; j+=120) {
      fill(255);
      rect(c1b2x+i+39, c1b2y+j+39, 20, 20);
    }
  }
  for (var i = 360; i < 660; i+=120) {
    for (var j =360; j < 660; j+=120) {
      rect(c1b2x+i+99, c1b2y+j+99, 20, 20);
    }
  }
  
  ///Negro 1
  for (var i = 360; i < 660; i+=120) {
    for (var j =360; j < 660; j+=120) {
      fill(0);
      rect(c1n1x+i+61, c1n1y+j+1, 20, 20);
    }
  }
  for (var i = 360; i < 660; i+=120) {
    for (var j =360; j < 660; j+=120) {
      rect(c1n1x+i+1, c1n1y+j+61, 20, 20);
    }
  }
  
  ///Negro 2
  for (var i = 360; i < 660; i+=120) {
    for (var j =360; j < 660; j+=120) {
      fill(0);
      rect(c1n2x+i+99, c1n2y+j+39, 20, 20);
    }
  }
  for (var i = 360; i < 660; i+=120) {
    for (var j =360; j < 660; j+=120) {
      rect(c1n2x+i+39, c1n2y+j+99, 20, 20);
    }
  }
  
  
  
  
  
  
  ///Mitad horizontal izquierda
  //Blancos
  for (var i = 0; i < 180; i+=120) {
      fill(255);
      rect(mhib1x+i+61, mhib1y+301, 20, 20);
    
  }
  
  for (var i = 0; i < 180; i+=120) {
      fill(255);
      rect(mhib2x+i+99, mhib2y+301, 20, 20);
    
  }
  //Negros
  for (var i = 0; i < 300; i+=120) {
      fill(0);
      rect(mhin1x+i+1, mhin1y+301, 20, 20);
    
  }
  
  for (var i = 0; i < 300; i+=120) {
      fill(0);
      rect(mhin2x+i+39, mhin2y+301, 20, 20);
    
  }
  
  ///Mitad horizontal derecha
  //Blancos
  for (var i = 360; i < 660; i+=120) {
      fill(255);
      rect(mhdb1x+i+61, mhdb1y+339, 20, 20);
    
  }
  
  for (var i = 360; i < 660; i+=120) {
      fill(255);
      rect(mhdb2x+i+99, mhdb2y+339, 20, 20);
    
  }
  //Negros
  for (var i = 360; i < 660; i+=120) {
      fill(0);
      rect(mhdn1x+i+1, mhdn1y+339, 20, 20);
    
  }
  
  for (var i = 360; i < 660; i+=120) {
      fill(0);
      rect(mhdn2x+i+39, mhdn2y+339, 20, 20);
    
  }
  
  ///Mitad vertical superior 
  
  //Blancos
  for (var i = 0; i < 180; i+=120) {
      fill(255);
      rect(mvsb1x+339, mvsb1y+i+61, 20, 20);
    
  }
  for (var i = 0; i < 180; i+=120) {
      fill(255);
      rect(mvsb2x+339, mvsb2y+i+99, 20, 20);
    
  }
  
  //Negros
  for (var i = 0; i < 300; i+=120) {
      fill(0);
      rect(mvsn1x+339, mvsn1y+i+1, 20, 20);
    
  }
  
  for (var i = 0; i < 300; i+=120) {
      fill(0);
      rect(mvsn2x+339, mvsn2y+i+39, 20, 20);
    
  }
  
  ///Mitad vertical inferior
  
  //Blancos
  for (var i = 360; i < 660; i+=120) {
      fill(255);
      rect(mvib1x+301, mvib1y+i+61, 20, 20);
    
  }
  for (var i = 360; i < 660; i+=120) {
      fill(255);
      rect(mvib2x+301, mvib2y+i+99, 20, 20);
    
  }
  
  //Negros
  for (var i = 360; i < 660; i+=120) {
      fill(0);
      rect(mvin1x+301, mvin1y+i+1, 20, 20);
    
  }
  
  for (var i = 360; i < 660; i+=120) {
      fill(0);
      rect(mvin2x+301, mvin2y+i+39, 20, 20);
    
  }
  
  /* //Movimiento inferior
  //Movimiento cuadrante 1 y 4
  if(c1b1x ==0 && c1b1y==0 ){
    delay(delay);
  }
  
  if(c1b1x>=0 && c1b1y == 0 && c1b1x < 38){
    c1b1x = c1b1x + velocity;
  }
  
  if(c1b1x == 38 && c1b1y== 0){
    delay(delay);
  }
  if(c1b1x==38 && c1b1y >= 0 && c1b1y < 38){
    c1b1y = c1b1y + velocity;
  }
  
  if(c1b1x == 38 && c1b1y== 38 ){
    delay(delay);
  }
   if(c1b1x<=38 && c1b1y == 38 && c1b1x > 0){
    c1b1x = c1b1x - velocity;
  }
  
  if(c1b1x == 0 && c1b1y== 38 ){
    delay(delay);
  }
  if(c1b1x==0 && c1b1y <= 38 && c1b1y > 0){
    c1b1y = c1b1y - velocity;
  }
  
  if(c1b2x > -38 && c1b2x <= 0 && c1b2y == 0){
    c1b2x = c1b2x - velocity;
  }
  if(c1b2x==-38 && c1b2y <= 0 && c1b2y > -38){
    c1b2y = c1b2y - velocity;
  }
  if(c1b2y>=-38 && c1b2x == 0 && c1b2y < 0){
    c1b2y = c1b2y + velocity;
  }
  if(c1b2y==-38 && c1b2x >= -38 && c1b2x < 0){
    c1b2x = c1b2x + velocity;
  }
  
  
  
  if(c1n1x>=0 && c1n1y == 0 && c1n1x < 38){
    c1n1x = c1n1x + velocity;
  }
  if(c1n1x==38 && c1n1y >= 0 && c1n1y < 38){
    c1n1y = c1n1y + velocity;
  }
   if(c1n1x<=38 && c1n1y == 38 && c1n1x > 0){
    c1n1x = c1n1x - velocity;
  }
  if(c1n1x==0 && c1n1y <= 38 && c1n1y > 0){
    c1n1y = c1n1y - velocity;
  }
  
  if(c1n2x > -38 && c1n2x <= 0 && c1n2y == 0){
    c1n2x = c1n2x - velocity;
  }
  if(c1n2x==-38 && c1n2y <= 0 && c1n2y > -38){
    c1n2y = c1n2y - velocity;
  }
  if(c1n2y>=-38 && c1n2x == 0 && c1n2y < 0){
    c1n2y = c1n2y + velocity;
  }
  if(c1n2y==-38 && c1n2x >= -38 && c1n2x < 0){
    c1n2x = c1n2x + velocity;
  }
  
  
  
  
  
  
  
  
  //Movimiento cuadrante 2 y 3
  if(c2b1x>=-38 && c2b1y == 0 && c2b1x < 0){
    c2b1x = c2b1x + velocity;
  }
  if(c2b1x==0 && c2b1y >= 0 && c2b1y < 38){
    c2b1y = c2b1y + velocity;
  }
   if(c2b1x<=0 && c2b1y == 38 && c2b1x > -38){
    c2b1x = c2b1x - velocity;
  }
  if(c2b1x==-38 && c2b1y <= 38 && c2b1y > 0){
    c2b1y = c2b1y - velocity;
  }
  
  if(c2b2x > 0 && c2b2x <= 38 && c2b2y == 0){
    c2b2x = c2b2x - velocity;
  }
  if(c2b2x==0 && c2b2y <= 0 && c2b2y > -38){
    c2b2y = c2b2y - velocity;
  }
  if(c2b2y >=-38 && c2b2x == 38 && c2b2y < 0){
    c2b2y = c2b2y + velocity;
  }
  if(c2b2y==-38 && c2b2x >= 0 && c2b2x < 38){
    c2b2x = c2b2x + velocity;
  }
  
  
  
  if(c2n1x>=-38 && c2n1y == 0 && c2n1x < 0){
    c2n1x = c2n1x + velocity;
  }
  if(c2n1x==0 && c2n1y >= 0 && c2n1y < 38){
    c2n1y = c2n1y + velocity;
  }
   if(c2n1x<=0 && c2n1y == 38 && c2n1x > -38){
    c2n1x = c2n1x - velocity;
  }
  if(c2n1x==-38 && c2n1y <= 38 && c2n1y > 0){
    c2n1y = c2n1y - velocity;
  }
  
  if(c2n2x > 0 && c2n2x <= 38 && c2n2y == 0){
    c2n2x = c2n2x - velocity;
  }
  if(c2n2x==0 && c2n2y <= 0 && c2n2y > -38){
    c2n2y = c2n2y - velocity;
  }
  if(c2n2y >=-38 && c2n2x == 38 && c2n2y < 0){
    c2n2y = c2n2y + velocity;
  }
  if(c2n2y==-38 && c2n2x >= 0 && c2n2x < 38){
    c2n2x = c2n2x + velocity;
  }
  
  
  //Movimiento medio lateral izquierda
  if(mhdb1x <= 38 && mhdb1x > 0 && mhdb1y == 0){
    mhdb1x = mhdb1x - velocity;
  }
  if(mhdb1x >= 0 && mhdb1x < 38 && mhdb1y == -38){
    mhdb1x = mhdb1x + velocity;
  }
  if(mhdb1y <= 0 && mhdb1y > -38 && mhdb1x == 0){
    mhdb1y = mhdb1y - velocity;
  }
  if(mhdb1y >= -38 && mhdb1y < 0 && mhdb1x == 38){
    mhdb1y = mhdb1y + velocity;
  }
  
  if(mhdb2x <= 0 && mhdb2x > -38 && mhdb2y == 0){
    mhdb2x = mhdb2x - velocity;
  }
  if(mhdb2x >= -38 && mhdb2x < 0 && mhdb2y == -38){
    mhdb2x = mhdb2x + velocity;
  }
  if(mhdb2y <= 0 && mhdb2y > -38 && mhdb2x == -38 ){
    mhdb2y = mhdb2y - velocity;
  }
  if(mhdb2y >= -38 && mhdb2y < 0 && mhdb2x == 0){
    mhdb2y = mhdb2y + velocity;
  }
  
  
  
  if(mhdn1x <= 38 && mhdn1x > 0 && mhdn1y == 0){
    mhdn1x = mhdn1x - velocity;
  }
  if(mhdn1x >= 0 && mhdn1x < 38 && mhdn1y == -38){
    mhdn1x = mhdn1x + velocity;
  }
  if(mhdn1y <= 0 && mhdn1y > -38 && mhdn1x == 0){
    mhdn1y = mhdn1y - velocity;
  }
  if(mhdn1y >= -38 && mhdn1y < 0 && mhdn1x == 38){
    mhdn1y = mhdn1y + velocity;
  }
  
  if(mhdn2x <= 0 && mhdn2x > -38 && mhdn2y == 0){
    mhdn2x = mhdn2x - velocity;
  }
  if(mhdn2x >= -38 && mhdn2x < 0 && mhdn2y == -38){
    mhdn2x = mhdn2x + velocity;
  }
  if(mhdn2y <= 0 && mhdn2y > -38 && mhdn2x == -38 ){
    mhdn2y = mhdn2y - velocity;
  }
  if(mhdn2y >= -38 && mhdn2y < 0 && mhdn2x == 0){
    mhdn2y = mhdn2y + velocity;
  }
  
  //Movimiento lateral izquierdo
  if(mhib1x <= 38 && mhib1x > 0 && mhib1y == 38){
    mhib1x = mhib1x - velocity;
  }
  if(mhib1x >= 0 && mhib1x < 38 && mhib1y == 0){
    mhib1x = mhib1x + velocity;
  }
  if(mhib1y <= 38 && mhib1y > 0 && mhib1x == 0){
    mhib1y = mhib1y - velocity;
  }
  if(mhib1y >= 0 && mhib1y < 38 && mhib1x == 38){
    mhib1y = mhib1y + velocity;
  }
  
  if(mhib2x <= 0 && mhib2x > -38 && mhib2y == 38){
    mhib2x = mhib2x - velocity;
  }
  if(mhib2x >= -38 && mhib2x < 0 && mhib2y == 0){
    mhib2x = mhib2x + velocity;
  }
  if(mhib2y <= 38 && mhib2y > 0 && mhib2x == -38 ){
    mhib2y = mhib2y - velocity;
  }
  if(mhib2y >= 0 && mhib2y < 38 && mhib2x == 0){
    mhib2y = mhib2y + velocity;
  }
  
  
  
  if(mhin1x <= 38 && mhin1x > 0 && mhin1y == 38){
    mhin1x = mhin1x - velocity;
  }
  if(mhin1x >= 0 && mhin1x < 38 && mhin1y == 0){
    mhin1x = mhin1x + velocity;
  }
  if(mhin1y <= 38 && mhin1y > 0 && mhin1x == 0){
    mhin1y = mhin1y - velocity;
  }
  if(mhin1y >= 0 && mhin1y < 38 && mhin1x == 38){
    mhin1y = mhin1y + velocity;
  }
  
  if(mhin2x <= 0 && mhin2x > -38 && mhin2y == 38){
    mhin2x = mhin2x - velocity;
  }
  if(mhin2x >= -38 && mhin2x < 0 && mhin2y == 0){
    mhin2x = mhin2x + velocity;
  }
  if(mhin2y <= 38 && mhin2y > 0 && mhin2x == -38 ){
    mhin2y = mhin2y - velocity;
  }
  if(mhin2y >= 0 && mhin2y < 38 && mhin2x == 0){
    mhin2y = mhin2y + velocity;
  }
  
  
  //Movimiento superior
  if(mvsb1x <= 0 && mvsb1x > -38 && mvsb1y == 38){
    mvsb1x = mvsb1x - velocity;
  }
  if(mvsb1x >= -38 && mvsb1x < 0 && mvsb1y == 0){
    mvsb1x = mvsb1x + velocity;
  }
  if(mvsb1y <= 38 && mvsb1y > 0 && mvsb1x == -38 ){
    mvsb1y = mvsb1y - velocity;
  }
  if(mvsb1y >= 0 && mvsb1y < 38 && mvsb1x == 0){
    mvsb1y = mvsb1y + velocity;
  }
  
  if(mvsb2x <= 0 && mvsb2x > -38 && mvsb2y == 0){
    mvsb2x = mvsb2x - velocity;
  }
  if(mvsb2y <= 0 && mvsb2y > -38 && mvsb2x == -38 ){
    mvsb2y = mvsb2y - velocity;
  }
  if(mvsb2x >= -38 && mvsb2x < 0 && mvsb2y == -38){
    mvsb2x = mvsb2x + velocity;
  }
  
  if(mvsb2y >= -38 && mvsb2y < 0 && mvsb2x == 0){
    mvsb2y = mvsb2y + velocity;
  }
  
  if(mvsn1x <= 0 && mvsn1x > -38 && mvsn1y == 38){
    mvsn1x = mvsn1x - velocity;
  }
  if(mvsn1x >= -38 && mvsn1x < 0 && mvsn1y == 0){
    mvsn1x = mvsn1x + velocity;
  }
  if(mvsn1y <= 38 && mvsn1y > 0 && mvsn1x == -38 ){
    mvsn1y = mvsn1y - velocity;
  }
  if(mvsn1y >= 0 && mvsn1y < 38 && mvsn1x == 0){
    mvsn1y = mvsn1y + velocity;
  }
  
  if(mvsn2x <= 0 && mvsn2x > -38 && mvsn2y == 0){
    mvsn2x = mvsn2x - velocity;
  }
  if(mvsn2y <= 0 && mvsn2y > -38 && mvsn2x == -38 ){
    mvsn2y = mvsn2y - velocity;
  }
  if(mvsn2x >= -38 && mvsn2x < 0 && mvsn2y == -38){
    mvsn2x = mvsn2x + velocity;
  }
  
  if(mvsn2y >= -38 && mvsn2y < 0 && mvsn2x == 0){
    mvsn2y = mvsn2y + velocity;
  }

  
  
  //Movimiento inferior
  if(mvib1x >= 0 && mvib1x < 38 && mvib1y == 0){
     mvib1x = mvib1x + velocity;
  }
  if(mvib1x <= 38 && mvib1x > 0 && mvib1y == 38){
     mvib1x = mvib1x - velocity;
  }
  if(mvib1y >= 0 && mvib1y < 38 && mvib1x == 38 ){
     mvib1y = mvib1y + velocity;
  }
  if(mvib1y <= 38 && mvib1y > 0 && mvib1x == 0){
     mvib1y = mvib1y - velocity;
  }
  
  if(mvib2x <= 38 && mvib2x > 0 && mvib2y == 0){
     mvib2x = mvib2x - velocity;
  }
  if(mvib2y <= 0 && mvib2y > -38 && mvib2x == 0 ){
     mvib2y = mvib2y - velocity;
  }
  if(mvib2x >= 0 && mvib2x < 38 && mvib2y == -38){
     mvib2x = mvib2x + velocity;
  }
  
  if(mvib2y >= -38 && mvib2y < 0 && mvib2x == 38){
     mvib2y = mvib2y + velocity;
  }
  
 if(mvin1x >= 0 && mvin1x < 38 && mvin1y == 0){
     mvin1x = mvin1x + velocity;
  }
  if(mvin1x <= 38 && mvin1x > 0 && mvin1y == 38){
     mvin1x = mvin1x - velocity;
  }
  if(mvin1y >= 0 && mvin1y < 38 && mvin1x == 38 ){
     mvin1y = mvin1y + velocity;
  }
  if(mvin1y <= 38 && mvin1y > 0 && mvin1x == 0){
     mvin1y = mvin1y - velocity;
  }
  
  if(mvin2x <= 38 && mvin2x > 0 && mvin2y == 0){
     mvin2x = mvin2x - velocity;
  }
  if(mvin2y <= 0 && mvin2y > -38 && mvin2x == 0 ){
     mvin2y = mvin2y - velocity;
  }
  if(mvin2x >= 0 && mvin2x < 38 && mvin2y == -38){
     mvin2x = mvin2x + velocity;
  }
  
  if(mvin2y >= -38 && mvin2y < 0 && mvin2x == 38){
     mvin2y = mvin2y + velocity;
  } */
  
  
  
  
  
  if(mouseIsPressed == true){
    //Movimiento inferior
  //Movimiento cuadrante 1 y 4
  /* if(c1b1x ==0 && c1b1y==0 ){
    delay(delay);
  } */
  
  if(c1b1x>=0 && c1b1y == 0 && c1b1x < 38){
    c1b1x = c1b1x + velocity;
  }
  
  /* if(c1b1x == 38 && c1b1y== 0){
    delay(delay);
  } */
  if(c1b1x==38 && c1b1y >= 0 && c1b1y < 38){
    c1b1y = c1b1y + velocity;
  }
  
  /* if(c1b1x == 38 && c1b1y== 38 ){
    delay(delay);
  } */
   if(c1b1x<=38 && c1b1y == 38 && c1b1x > 0){
    c1b1x = c1b1x - velocity;
  }
  
  /* if(c1b1x == 0 && c1b1y== 38 ){
    delay(delay);
  } */
  if(c1b1x==0 && c1b1y <= 38 && c1b1y > 0){
    c1b1y = c1b1y - velocity;
  }
  
  if(c1b2x > -38 && c1b2x <= 0 && c1b2y == 0){
    c1b2x = c1b2x - velocity;
  }
  if(c1b2x==-38 && c1b2y <= 0 && c1b2y > -38){
    c1b2y = c1b2y - velocity;
  }
  if(c1b2y>=-38 && c1b2x == 0 && c1b2y < 0){
    c1b2y = c1b2y + velocity;
  }
  if(c1b2y==-38 && c1b2x >= -38 && c1b2x < 0){
    c1b2x = c1b2x + velocity;
  }
  
  
  
  if(c1n1x>=0 && c1n1y == 0 && c1n1x < 38){
    c1n1x = c1n1x + velocity;
  }
  if(c1n1x==38 && c1n1y >= 0 && c1n1y < 38){
    c1n1y = c1n1y + velocity;
  }
   if(c1n1x<=38 && c1n1y == 38 && c1n1x > 0){
    c1n1x = c1n1x - velocity;
  }
  if(c1n1x==0 && c1n1y <= 38 && c1n1y > 0){
    c1n1y = c1n1y - velocity;
  }
  
  if(c1n2x > -38 && c1n2x <= 0 && c1n2y == 0){
    c1n2x = c1n2x - velocity;
  }
  if(c1n2x==-38 && c1n2y <= 0 && c1n2y > -38){
    c1n2y = c1n2y - velocity;
  }
  if(c1n2y>=-38 && c1n2x == 0 && c1n2y < 0){
    c1n2y = c1n2y + velocity;
  }
  if(c1n2y==-38 && c1n2x >= -38 && c1n2x < 0){
    c1n2x = c1n2x + velocity;
  }
  
  
  
  
  
  
  
  
  //Movimiento cuadrante 2 y 3
  if(c2b1x>=-38 && c2b1y == 0 && c2b1x < 0){
    c2b1x = c2b1x + velocity;
  }
  if(c2b1x==0 && c2b1y >= 0 && c2b1y < 38){
    c2b1y = c2b1y + velocity;
  }
   if(c2b1x<=0 && c2b1y == 38 && c2b1x > -38){
    c2b1x = c2b1x - velocity;
  }
  if(c2b1x==-38 && c2b1y <= 38 && c2b1y > 0){
    c2b1y = c2b1y - velocity;
  }
  
  if(c2b2x > 0 && c2b2x <= 38 && c2b2y == 0){
    c2b2x = c2b2x - velocity;
  }
  if(c2b2x==0 && c2b2y <= 0 && c2b2y > -38){
    c2b2y = c2b2y - velocity;
  }
  if(c2b2y >=-38 && c2b2x == 38 && c2b2y < 0){
    c2b2y = c2b2y + velocity;
  }
  if(c2b2y==-38 && c2b2x >= 0 && c2b2x < 38){
    c2b2x = c2b2x + velocity;
  }
  
  
  
  if(c2n1x>=-38 && c2n1y == 0 && c2n1x < 0){
    c2n1x = c2n1x + velocity;
  }
  if(c2n1x==0 && c2n1y >= 0 && c2n1y < 38){
    c2n1y = c2n1y + velocity;
  }
   if(c2n1x<=0 && c2n1y == 38 && c2n1x > -38){
    c2n1x = c2n1x - velocity;
  }
  if(c2n1x==-38 && c2n1y <= 38 && c2n1y > 0){
    c2n1y = c2n1y - velocity;
  }
  
  if(c2n2x > 0 && c2n2x <= 38 && c2n2y == 0){
    c2n2x = c2n2x - velocity;
  }
  if(c2n2x==0 && c2n2y <= 0 && c2n2y > -38){
    c2n2y = c2n2y - velocity;
  }
  if(c2n2y >=-38 && c2n2x == 38 && c2n2y < 0){
    c2n2y = c2n2y + velocity;
  }
  if(c2n2y==-38 && c2n2x >= 0 && c2n2x < 38){
    c2n2x = c2n2x + velocity;
  }
  
  
  //Movimiento medio lateral izquierda
  if(mhdb1x <= 38 && mhdb1x > 0 && mhdb1y == 0){
    mhdb1x = mhdb1x - velocity;
  }
  if(mhdb1x >= 0 && mhdb1x < 38 && mhdb1y == -38){
    mhdb1x = mhdb1x + velocity;
  }
  if(mhdb1y <= 0 && mhdb1y > -38 && mhdb1x == 0){
    mhdb1y = mhdb1y - velocity;
  }
  if(mhdb1y >= -38 && mhdb1y < 0 && mhdb1x == 38){
    mhdb1y = mhdb1y + velocity;
  }
  
  if(mhdb2x <= 0 && mhdb2x > -38 && mhdb2y == 0){
    mhdb2x = mhdb2x - velocity;
  }
  if(mhdb2x >= -38 && mhdb2x < 0 && mhdb2y == -38){
    mhdb2x = mhdb2x + velocity;
  }
  if(mhdb2y <= 0 && mhdb2y > -38 && mhdb2x == -38 ){
    mhdb2y = mhdb2y - velocity;
  }
  if(mhdb2y >= -38 && mhdb2y < 0 && mhdb2x == 0){
    mhdb2y = mhdb2y + velocity;
  }
  
  
  
  if(mhdn1x <= 38 && mhdn1x > 0 && mhdn1y == 0){
    mhdn1x = mhdn1x - velocity;
  }
  if(mhdn1x >= 0 && mhdn1x < 38 && mhdn1y == -38){
    mhdn1x = mhdn1x + velocity;
  }
  if(mhdn1y <= 0 && mhdn1y > -38 && mhdn1x == 0){
    mhdn1y = mhdn1y - velocity;
  }
  if(mhdn1y >= -38 && mhdn1y < 0 && mhdn1x == 38){
    mhdn1y = mhdn1y + velocity;
  }
  
  if(mhdn2x <= 0 && mhdn2x > -38 && mhdn2y == 0){
    mhdn2x = mhdn2x - velocity;
  }
  if(mhdn2x >= -38 && mhdn2x < 0 && mhdn2y == -38){
    mhdn2x = mhdn2x + velocity;
  }
  if(mhdn2y <= 0 && mhdn2y > -38 && mhdn2x == -38 ){
    mhdn2y = mhdn2y - velocity;
  }
  if(mhdn2y >= -38 && mhdn2y < 0 && mhdn2x == 0){
    mhdn2y = mhdn2y + velocity;
  }
  
  //Movimiento lateral izquierdo
  if(mhib1x <= 38 && mhib1x > 0 && mhib1y == 38){
    mhib1x = mhib1x - velocity;
  }
  if(mhib1x >= 0 && mhib1x < 38 && mhib1y == 0){
    mhib1x = mhib1x + velocity;
  }
  if(mhib1y <= 38 && mhib1y > 0 && mhib1x == 0){
    mhib1y = mhib1y - velocity;
  }
  if(mhib1y >= 0 && mhib1y < 38 && mhib1x == 38){
    mhib1y = mhib1y + velocity;
  }
  
  if(mhib2x <= 0 && mhib2x > -38 && mhib2y == 38){
    mhib2x = mhib2x - velocity;
  }
  if(mhib2x >= -38 && mhib2x < 0 && mhib2y == 0){
    mhib2x = mhib2x + velocity;
  }
  if(mhib2y <= 38 && mhib2y > 0 && mhib2x == -38 ){
    mhib2y = mhib2y - velocity;
  }
  if(mhib2y >= 0 && mhib2y < 38 && mhib2x == 0){
    mhib2y = mhib2y + velocity;
  }
  
  
  
  if(mhin1x <= 38 && mhin1x > 0 && mhin1y == 38){
    mhin1x = mhin1x - velocity;
  }
  if(mhin1x >= 0 && mhin1x < 38 && mhin1y == 0){
    mhin1x = mhin1x + velocity;
  }
  if(mhin1y <= 38 && mhin1y > 0 && mhin1x == 0){
    mhin1y = mhin1y - velocity;
  }
  if(mhin1y >= 0 && mhin1y < 38 && mhin1x == 38){
    mhin1y = mhin1y + velocity;
  }
  
  if(mhin2x <= 0 && mhin2x > -38 && mhin2y == 38){
    mhin2x = mhin2x - velocity;
  }
  if(mhin2x >= -38 && mhin2x < 0 && mhin2y == 0){
    mhin2x = mhin2x + velocity;
  }
  if(mhin2y <= 38 && mhin2y > 0 && mhin2x == -38 ){
    mhin2y = mhin2y - velocity;
  }
  if(mhin2y >= 0 && mhin2y < 38 && mhin2x == 0){
    mhin2y = mhin2y + velocity;
  }
  
  
  //Movimiento superior
  if(mvsb1x <= 0 && mvsb1x > -38 && mvsb1y == 38){
    mvsb1x = mvsb1x - velocity;
  }
  if(mvsb1x >= -38 && mvsb1x < 0 && mvsb1y == 0){
    mvsb1x = mvsb1x + velocity;
  }
  if(mvsb1y <= 38 && mvsb1y > 0 && mvsb1x == -38 ){
    mvsb1y = mvsb1y - velocity;
  }
  if(mvsb1y >= 0 && mvsb1y < 38 && mvsb1x == 0){
    mvsb1y = mvsb1y + velocity;
  }
  
  if(mvsb2x <= 0 && mvsb2x > -38 && mvsb2y == 0){
    mvsb2x = mvsb2x - velocity;
  }
  if(mvsb2y <= 0 && mvsb2y > -38 && mvsb2x == -38 ){
    mvsb2y = mvsb2y - velocity;
  }
  if(mvsb2x >= -38 && mvsb2x < 0 && mvsb2y == -38){
    mvsb2x = mvsb2x + velocity;
  }
  
  if(mvsb2y >= -38 && mvsb2y < 0 && mvsb2x == 0){
    mvsb2y = mvsb2y + velocity;
  }
  
  if(mvsn1x <= 0 && mvsn1x > -38 && mvsn1y == 38){
    mvsn1x = mvsn1x - velocity;
  }
  if(mvsn1x >= -38 && mvsn1x < 0 && mvsn1y == 0){
    mvsn1x = mvsn1x + velocity;
  }
  if(mvsn1y <= 38 && mvsn1y > 0 && mvsn1x == -38 ){
    mvsn1y = mvsn1y - velocity;
  }
  if(mvsn1y >= 0 && mvsn1y < 38 && mvsn1x == 0){
    mvsn1y = mvsn1y + velocity;
  }
  
  if(mvsn2x <= 0 && mvsn2x > -38 && mvsn2y == 0){
    mvsn2x = mvsn2x - velocity;
  }
  if(mvsn2y <= 0 && mvsn2y > -38 && mvsn2x == -38 ){
    mvsn2y = mvsn2y - velocity;
  }
  if(mvsn2x >= -38 && mvsn2x < 0 && mvsn2y == -38){
    mvsn2x = mvsn2x + velocity;
  }
  
  if(mvsn2y >= -38 && mvsn2y < 0 && mvsn2x == 0){
    mvsn2y = mvsn2y + velocity;
  }

  
  
  //Movimiento inferior
  if(mvib1x >= 0 && mvib1x < 38 && mvib1y == 0){
     mvib1x = mvib1x + velocity;
  }
  if(mvib1x <= 38 && mvib1x > 0 && mvib1y == 38){
     mvib1x = mvib1x - velocity;
  }
  if(mvib1y >= 0 && mvib1y < 38 && mvib1x == 38 ){
     mvib1y = mvib1y + velocity;
  }
  if(mvib1y <= 38 && mvib1y > 0 && mvib1x == 0){
     mvib1y = mvib1y - velocity;
  }
  
  if(mvib2x <= 38 && mvib2x > 0 && mvib2y == 0){
     mvib2x = mvib2x - velocity;
  }
  if(mvib2y <= 0 && mvib2y > -38 && mvib2x == 0 ){
     mvib2y = mvib2y - velocity;
  }
  if(mvib2x >= 0 && mvib2x < 38 && mvib2y == -38){
     mvib2x = mvib2x + velocity;
  }
  
  if(mvib2y >= -38 && mvib2y < 0 && mvib2x == 38){
     mvib2y = mvib2y + velocity;
  }
  
 if(mvin1x >= 0 && mvin1x < 38 && mvin1y == 0){
     mvin1x = mvin1x + velocity;
  }
  if(mvin1x <= 38 && mvin1x > 0 && mvin1y == 38){
     mvin1x = mvin1x - velocity;
  }
  if(mvin1y >= 0 && mvin1y < 38 && mvin1x == 38 ){
     mvin1y = mvin1y + velocity;
  }
  if(mvin1y <= 38 && mvin1y > 0 && mvin1x == 0){
     mvin1y = mvin1y - velocity;
  }
  
  if(mvin2x <= 38 && mvin2x > 0 && mvin2y == 0){
     mvin2x = mvin2x - velocity;
  }
  if(mvin2y <= 0 && mvin2y > -38 && mvin2x == 0 ){
     mvin2y = mvin2y - velocity;
  }
  if(mvin2x >= 0 && mvin2x < 38 && mvin2y == -38){
     mvin2x = mvin2x + velocity;
  }
  
  if(mvin2y >= -38 && mvin2y < 0 && mvin2x == 38){
     mvin2y = mvin2y + velocity;
  }
  }
  
  if(keyIsPressed == true){
    stroke(130,130,130);
    strokeWeight(3);
    for(var i = 0; i< width;i+=60){
      line(i+60,0,i+60,height);
      
    }
    for(var i = 0; i< width;i+=60){
      line(0,i+60,width,i+60);
      
    }
    
  }
  
  
  
  
 
}

















