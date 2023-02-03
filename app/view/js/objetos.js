/*
function btnAgregarCancha(){
    alert('si abre')
    jQuery.ajax({       
        url:"../../controller/agregarCanchas.php",
        type: "POST",    
    })
    alert('si llega')
}
*/
function btnAgregarCancha(){
    var objetoAJAX = $.get( "../../controller/agregarCanchas.php", function() {
    });
}

/*
$('.button').click(function() {

    $.ajax({
     type: "POST",
     url: "../../controller/agregarCanchas.php",
     data: { name: "John" }
   }).done(function( msg ) {
     alert( "Data Saved: " + msg );
   });    
   
       });
       */
      /*
$('#Enviar').click(function(){
    $.ajax({
        url: "../../controller/agregarCanchas.php",
        type: "POST",
        data: $('Formajax').serialize(),
    })
    .done(function(res){
        $('#respuesta').html(res)
    })
    .done(function(){
        console.log("success");
    })
    .fail(function(){
        console.log("error");
    })
})
*/