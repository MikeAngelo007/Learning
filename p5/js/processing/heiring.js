function setup() {
    var cambas = createCanvas(1000, 1000);
    cambas.parent('heiring');
  }
  
 function draw() {
  
    background(0, 0, 0);
    stroke(255);
  
  
    
  
    //Ilusion 1
    for (var i = 0; i <= 400; i+=25 ) {
      line(150, 50+i, 350, 450-i);
    }
  
  
  
    line(200, 80, 200, 420);
    line(300, 80, 300, 420);
  
  
  
    //Ilusion 2
    for (var i = 0; i <= 400; i+=25 ) {
      line(650, 250, 750, 50+i);
      line(850, 250, 750, 450-i);
    }
  
    line(700, 80, 700, 420);
    line(800, 80, 800, 420);
  
  
    //Ilusion 3
  
  
    for (var i = 0; i <= 400; i+=25 ) {
      line(300, 550+i, 500, 950-i);
      line(500, 950-i, 600, 750);
      line(600, 750, 700, 950-i);
    }
  
    line(350, 580, 350, 920);
    line(450, 580, 450, 920);
  
    line(550, 580, 550, 920);
    line(650, 580, 650, 920);
  
    if (mouseIsPressed == true) {
      for (var i = 0; i <= 400; i+=10 ) {
        line(150, 50+i, 350, 450-i);
      }
  
      for (var i = 0; i <= 400; i+=10 ) {
        line(650, 250, 750, 50+i);
        line(850, 250, 750, 450-i);
      }
  
      for (var i = 0; i <= 400; i+=10 ) {
        line(300, 550+i, 500, 950-i);
        line(500, 950-i, 600, 750);
        line(600, 750, 700, 950-i);
      }
    }
  }
  