var estado = document.getElementById("estado");
var progreso = 0;

      var idIterval = setInterval(function(){
        // Aumento en 10 el progeso

        progreso +=10;
        $('#bar').css('width', progreso + '%');
       
      //Si llegó a 100 elimino el interval
        if(progreso == 100){
       clearInterval(idIterval);
       estado = document.inputHTML("Completado");
      }
      },1000);

 