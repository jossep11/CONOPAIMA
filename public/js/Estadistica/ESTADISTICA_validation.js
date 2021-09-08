//

$('select[name=Documento_ID]').on('click', function(e) {
let Documento_P_Academico_Pregrado = $('select[name=Documento_ID]').val();

let inputnrocedulaPAPregrado = document.querySelector('input[name=NroCedula]');
if(Documento_P_Academico_Pregrado==='C'){

   inputnrocedulaPAPregrado.disabled=false; 
   inputnrocedulaPAPregrado.setAttribute("minlength", "8");
   inputnrocedulaPAPregrado.setAttribute("maxlength", "8");
   $(inputnrocedulaPAPregrado).keypress(function (event) {
    //with this we prevent the insertion of charts that are not numbers
      if (event.which < 48 || event.which > 57) {
        return false;
    }
  });  
 
}

else if(Documento_P_Academico_Pregrado==='P'){    
   let inputnrocedulaPAPregrado1 = document.querySelector('input[name=NroCedula]');
    inputnrocedulaPAPregrado1.value='';
    inputnrocedulaPAPregrado1.disabled=false;
    inputnrocedulaPAPregrado1.setAttribute("minlength", "9");
    inputnrocedulaPAPregrado1.setAttribute("maxlength", "9");

    $(inputnrocedulaPAPregrado1).keypress(function (event2) {
       //with this we prevent the insertion of charts that are not numbers
        if (event2.which < 48 || event2.which > 57) {
                
         return false;
        }
      });
    
}else{
   inputnrocedulaPAPregrado.disabled=true;
}


});

