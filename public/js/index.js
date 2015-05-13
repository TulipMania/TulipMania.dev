// Animated Grass
function strToHex(str){
  str=str.replace("#","0x");
  return(str);
}

var Color = net.brehaut.Color;
var grassColor = Color("#009e52");

canvas  = document.getElementById("canvas");
ctx = canvas.getContext('2d');

Blade=function(x,y,w,h,c){
  this.displacement = 0
  this.x=x;
  this.y=y;
  this.w=w;
  this.h=h;
  
  this.tightness=0.3+Math.random();
  this.c=Color(c).shiftHue(Math.random()*5).darkenByAmount(Math.random()/50).desaturateByAmount(Math.random()/5);
}

Blade.prototype.draw=function(){
  ctx.fillStyle=this.c;
  
  ctx.beginPath();
  ctx.moveTo(this.x - this.w/2, this.y); //left point
  ctx.lineTo(this.x + this.displacement*this.tightness, this.y - this.h); //top point
  ctx.lineTo(this.x + this.w/2, this.y); //right point
  ctx.closePath();
  ctx.fill();
}

Blade.prototype.update=function(){
  this.displacement=Math.sin(osc1/20)*10;
}

var osc1=0;
var grass=new Array();

for(var i=0;i<17;i++)
grass.push(new Blade(20+i*30,300,40+Math.random()*10,60+Math.random()*40,"#00644d"));

for(var i=0;i<17;i++){
grass.push(new Blade(5+i*30,300,30+Math.random()*10,60+Math.random()*30,"#009e52"));
}

draw = function(){
  ctx.fillStyle="#00b4ff";
  ctx.fillRect ( 0 , 0 , canvas.width, canvas.height );
  
  for(i=0;i<grass.length;i++)
    grass[i].draw();
}

update=function(){
    osc1++;
    for(i=0;i<grass.length;i++)
      grass[i].update();
}
setInterval( draw, 1000/60);
setInterval( update, 1000/60);

layer2 = document.getElementById("layer2");
ctx2 = layer2.getContext("2d");

function draw2() {
var tulip = new Image();
tulip.src = "../images/new-tulip.png";
ctx2.clearRect(0, 0, 400, 300);
ctx2.drawImage(tulip, 0, 0);
}

draw2();
// Login & Signup Form
$(document).ready(function()
{
  
$(".tab").click(function()
{
var X=$(this).attr('id');
 
if(X=='signup')
{
$("#login").removeClass('select');
$("#signup").addClass('select');
$("#loginbox").slideUp();
$("#signupbox").slideDown();
}
else
{
$("#signup").removeClass('select');
$("#login").addClass('select');
$("#signupbox").slideUp();
$("#loginbox").slideDown();
}
 
});

});
