//var dias, horas, minutos;
var d = new Date();
var dia = new Array(7);
dia[0] ="Domingo";
dia[1] ="Lunes";
dia[2] ="Martes";
dia[3] ="Miercoles";
dia[4] ="Jueves";
dia[5] ="Viernes";
dia[6] ="Sabado";

var m2 = d.getMonth() +1;
var mesok = (m2<10) ? '0' + m2 : m2;
var mesok = new Array(12);
mesok[0] ="Enero";
mesok[1] ="Febrero";
mesok[2] ="Marzo";
mesok[3] ="Abril";
mesok[4] ="Mayo";
mesok[5] ="Junio";
mesok[6] ="Julio";
mesok[7] ="Agosto";
mesok[8] ="Septiembre";
mesok[9] ="Octubre";
mesok[10] ="Noviembre";
mesok[11] ="Diciembre";
document.write(dia[d.getDay()]+ " de " +mesok[d.getMonth()]);

//reloj digital insertar
function startTime(){
	today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}

function checkTime(i){
	if (i<10) {
		i="0" + i;
	}return i;
}
window.onload=function(){
	startTime();
}

//duracion - duracion actual fecha
function durationTime(){
	
}
