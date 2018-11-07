
$('#exampleModalCenter').modal('show');
jQuery(document).ready(function($) {








var contadorm = 1;
$('#lupa_buscar').on("click",function(e){

if (contadorm == 1) {

    $('#mi_buscador').removeClass("animated fadeInUp");
    $('#mi_buscador').addClass("animated fadeInDown");
    $('#mi_buscador').show();

           contadorm = 0;

        } else {

    $('#mi_buscador').removeClass("animated fadeInDown");
    $('#mi_buscador').addClass("animated fadeInUp");
    $('#mi_buscador').hide();
          contadorm = 1;

             }
})















	if($("div[title='Indefinido']").length){
		$("label[for='edit-attributes-field-colorcode']").hide()
		$("div.prod_print").css("top","-80px");
	}
     updateRelated();


$('#edit-quantity').on("click", function(e){

$('#direccion_carrito').attr('data-quantity',$("#edit-quantity").val());
     });

$('.freddy').on("click", function(e){

var img1  = $(this).attr("data-image1");
var img2  = $(this).attr("data-image2");
var img3  = $(this).attr("data-image3");
var mi_id = $(this).attr("data-el_id");
var mi_id_col = $(this).attr("data-el_id");
var mi_id_fil = $(this).attr("data-fil");
var contenido1 = $('#direccion_carrito').attr('data-url_1');
var el_eslug = $('#relacionados_color').attr("data-slug");
var el_id_rel = $('#relacionados_color').attr("data-id_re");

if (mi_id==68) {
$('#direccion_carrito').attr('href',contenido1+'&attribute_color=rosa');
var mi_color='#F94F8E';
}else if (mi_id==12) {
$('#direccion_carrito').attr('href',contenido1+'&attribute_color=verde');
var mi_color='#007C59';
}else if (mi_id==13) {
$('#direccion_carrito').attr('href',contenido1+'&attribute_color=azul');
 var mi_color='#0084C9';
}else if (mi_id==14) {
$('#direccion_carrito').attr('href',contenido1+'&attribute_color=rojo');
 var mi_color='#CE1126';
}else if (mi_id==15) {
$('#direccion_carrito').attr('href',contenido1+'&attribute_color=blanco');
 var mi_color='#FFFFFF';
}else if (mi_id==16) {
$('#direccion_carrito').attr('href',contenido1+'&attribute_color=amarillo');
 var mi_color='#F9E814';
}else if (mi_id==17) {
$('#direccion_carrito').attr('href',contenido1+'&attribute_color=naranja');
 var mi_color='#F77F00';
}else if (mi_id==18) {
$('#direccion_carrito').attr('href',contenido1+'&attribute_color=morado');
 var mi_color='#8977BA';
}else if (mi_id==19) {
$('#direccion_carrito').attr('href',contenido1+'&attribute_color=negro');
 var mi_color='#000000';
}else if (mi_id==66) {
  $('#direccion_carrito').attr('href',contenido1+'&attribute_color=cafe');
   var mi_color='#675543';
}else if (mi_id==77) {
  $('#direccion_carrito').attr('href',contenido1+'&attribute_color=limon');
   var mi_color='#98D219';
}else if (mi_id==88) {
  $('#direccion_carrito').attr('href',contenido1+'&attribute_color=gris');
   var mi_color='#9A9A9A';
}

$.ajax({
            type : 'POST',
            url : '/wp-content/themes/storefront/assets/complementos/relacionados_color.php',
            data : {"mi_id_col":mi_id_col,'el_eslug':el_eslug,'el_id_rel':el_id_rel,'mi_id_fil':mi_id_fil},
            success:function(responsees_data){
            	//alert(responsees_data);
                 $('#relacionados_color').html(responsees_data);

}
})


$("#nuevo_color").css("background-color",mi_color);


$.ajax({
            type : 'POST',
            url : '/wp-content/themes/storefront/assets/complementos/peticion_ajax.php',
            data : {"img1":img1,"img2":img2,"img3":img3,"mi_id":mi_id},
            success:function(responsees){
            	//alert(responsees);
            	 //$("#gal_contenidos").html("");
                 $('#gal_contenidos').html(responsees);
                 $('.cloud-zoom, .cloud-zoom-gallery').CloudZoom();
                 Drupal.attachBehaviors(document, Drupal.settings);

}
})



});


// $('#register_id').on("click", function(e){


//   var v = grecaptcha.getResponse();
//   var contra1= $('#reg_password').val();
//   var contra2= $('#conf_password').val();

// if((contra1=='')&&(contra2=='')){
//   $('#reg_password').attr('style', 'border:1px solid red');
//   $('#conf_password').attr('style','border:1px solid red');
//   $('.error_contrasena').show();

// }else if((v!='')&&(contra1==contra2)){
//   $('#reg_password').attr('style', 'border:1px solid transparent');
//   $('#conf_password').attr('style','border:1px solid transparent');
//   $('.error_contrasena').hide();
//   $('#regist_per').submit();
//  }else{
//   $('#reg_password').attr('style', 'border:1px solid red');
//   $('#conf_password').attr('style','border:1px solid red');
//    $('.error_contrasena').show();
//  }





// if(v.length == 0){
//   $( "#recaptcha > div > div" ).children('iframe').attr('style', 'border:1px solid red');
//           // alert("No completado");
//         return false;
//     }else{
//       $( "#recaptcha > div > div" ).children('iframe').attr('style', 'border:1px solid transparent');
//         //alert("Captcha completado");
//         return true;
//     }

// //alert(v);




// });




$('#or_register_id').on("click", function(e){

 var el_formu = $("#regist_per").serialize();
$.ajax({
            type : 'POST',
            url : themeurl+'/assets/complementos/usuarios_registro.php',
            data : el_formu,
            success:function(responsees){
              //alert(responsees);

 setTimeout(function(){ window.location='mi-cuenta';}, 1000);

}
})

})


var onloadCallback = function() {
    grecaptcha.render('recaptcha', {
      'sitekey' : '6LdnHWAUAAAAABo3kLaS79wHsEvX75yKT5wRWmcN',
      'callback' : correctCaptcha
    });
  }


  var correctCaptcha = function(response) {
    alert(response);
}



$("#regist_per").hide();
$('#register_one').on("click", function(e){

            $("#el_login").hide();
            $("#titulo_web").hide();
            $("#regist_per").show();


});


$('#filtro_tres').on('change', function() {

  var fil_tres = $(this).val();

 $.ajax({
            type :'POST',
            url :'/wp-content/themes/storefront/assets/complementos/filtro_cat.php',
            data :{"fil_uno":fil_tres},
            success:function(resp){
                  $('#filtro_final').html(resp);
                 $(".change-color").on("click", function(){


   var eliid    = $(this).attr("data-cc");
    var color    = $(this).attr("data-image-color");
    var ir_color = $(this).attr("data-image-set-color");

    var contt='?add-to-cart='+eliid+'&attribute_color='+ir_color;

     $('#'+eliid).attr("href", contt);



    var obj = $(this).parent().parent().prev().children().children();
    $(obj).attr("src", color);
    $(obj).removeAttr("srcset");
    var color = $(this).attr("data-image-set-color");
    var obj = $(this).parent().next().children().children("span");
    $(obj).removeClass();
    $(obj).addClass("colour-"+color);





})

  }

})


});
$('#filtro_dos').on('change', function() {

  var fil_dos = $(this).val();

 $.ajax({
            type :'POST',
            url :'/wp-content/themes/storefront/assets/complementos/filtro_cat.php',
            data :{"fil_uno":fil_dos},
            success:function(resp){
                  $('#filtro_final').html(resp);
                 $(".change-color").on("click", function(){


   var eliid    = $(this).attr("data-cc");
    var color    = $(this).attr("data-image-color");
    var ir_color = $(this).attr("data-image-set-color");

    var contt='?add-to-cart='+eliid+'&attribute_color='+ir_color;

     $('#'+eliid).attr("href", contt);



    var obj = $(this).parent().parent().prev().children().children();
    $(obj).attr("src", color);
    $(obj).removeAttr("srcset");
    var color = $(this).attr("data-image-set-color");
    var obj = $(this).parent().next().children().children("span");
    $(obj).removeClass();
    $(obj).addClass("colour-"+color);





})

  }

})


});



$("#filtro_uno").change(function (e) {

var fil_uno = $(this).val();

//alert(fil_uno);

$.ajax({
            type :'POST',
            url :'/wp-content/themes/storefront/assets/complementos/filtro_cat.php',
            data :{"fil_uno":fil_uno},
            success:function(responsees){

                 $('#filtro_final').html(responsees);
                 $(".change-color").on("click", function(){

    var eliid    = $(this).attr("data-cc");
    var color    = $(this).attr("data-image-color");
    var ir_color = $(this).attr("data-image-set-color");

    var contt='?add-to-cart='+eliid+'&attribute_color='+ir_color;

     $('#'+eliid).attr("href", contt);



    var obj = $(this).parent().parent().prev().children().children();
    $(obj).attr("src", color);
    $(obj).removeAttr("srcset");
    var color = $(this).attr("data-image-set-color");
    var obj = $(this).parent().next().children().children("span");
    $(obj).removeClass();
    $(obj).addClass("colour-"+color);


  });



  $(".quantity_item_quantity").change(function(){
    var value = $(this).val();
    $(this).parent().next().children().attr("data-quantity", value);
  });

  $(".add-to-cart-link").on("click", function(e){
    e.preventDefault();
    var url = $(this).attr("data-quantity");
    if(url == "" || url == 0 || url == null){
      url = 1;
    }
    window.location.href = $(this).attr("href") + '&quantity='+url;
  });





}
})


});


$(".page-item").on("click", function(e){

    var ttt1   = $('#menu_pag').attr("data-select");

    if (ttt1=='') {

     $(".page-item").removeClass("active");
         // alert('uno');
    }else{

     $('#con'+ttt1).removeClass("active");
      // alert('data-select '+ttt1);
    }


   var   cat_total = $(this).attr("data-cm");
   var   cant_en   = $(this).attr("data-cantidad");
   var   cant_id   = $(this).attr("data-idd");


 //alert(cat_total+'  '+cant_en+ '  ' + cant_id);

  //var cont_mas = parseFloat(cant_en) + parseFloat(8) ;

     $.ajax({
            type :'POST',
            url :'/wp-content/themes/storefront/assets/complementos/paginacion.php',
            data :{"cat_total":cat_total,"cant_en":cant_en},
            success:function(resees){


           $('#menu_pag').attr("data-select", cant_id);
           $('#menu_pag').attr("data-t-cantidad", cat_total);
           $( '#con'+cant_id ).addClass( "active" );

            //alert(resees);
            $('#contendio_pag').html(resees);


    $(".change-color").on("click", function(){
    var color = $(this).attr("data-image-color");
    var obj = $(this).parent().parent().prev().children().children();
    $(obj).attr("src", color);
    $(obj).removeAttr("srcset");
    var color = $(this).attr("data-image-set-color");
    var obj = $(this).parent().next().children().children("span");
    $(obj).removeClass();
    $(obj).addClass("colour-"+color);

    var eliid = $(this).attr("data-cc");
    var color = $(this).attr("data-image-color");
    var ir_color = $(this).attr("data-image-set-color");
    var contt='?add-to-cart='+eliid+'&attribute_color='+ir_color;

     $('#'+eliid).attr("href", contt);


  });

  $(".quantity_item_quantity").change(function(){
    var value = $(this).val();
    $(this).parent().next().children().attr("data-quantity", value);
  });

  $(".add-to-cart-link").on("click", function(e){
    e.preventDefault();
    var url = $(this).attr("data-quantity");
    if(url == "" || url == 0 || url == null){
      url = 1;
    }
    window.location.href = $(this).attr("href") + '&quantity='+url;
  });






//------------------------------

if((cant_id==10)|| (cant_id==11)){

   for (i = 0; i < 11; i++) {

     $('#con'+i).hide();

 }

for (i = 10; i < 21; i++) {

    $('#con'+i).show();

}



}else if((cant_id==20)|| (cant_id==21)){

   for (i = 10; i < 21; i++) {

     $('#con'+i).hide();

 }

for (i = 20; i < 31; i++) {

    $('#con'+i).show();

}
// //------------------------------
 }else if((cant_id==30)|| (cant_id==31)){

 for (i = 20; i < 31; i++) {

    $('#con'+i).hide();

 }

for (i = 30; i < 41; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if((cant_id==40)|| (cant_id==41)){

 for (i = 30; i < 41; i++) {

    $('#con'+i).hide();

 }

for (i = 40; i < 51; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if((cant_id==50)|| (cant_id==51)){

 for (i = 40; i < 51; i++) {

    $('#con'+i).hide();

 }

for (i = 50; i < 61; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if((cant_id==60)|| (cant_id==61)){

 for (i = 50; i < 61; i++) {

    $('#con'+i).hide();

 }

for (i = 60; i < 71; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if((cant_id==70)|| (cant_id==71)){

 for (i = 60; i < 71; i++) {

    $('#con'+i).hide();

 }

for (i = 70; i < 81; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if((cant_id==80)|| (cant_id==81)){

 for (i = 70; i < 81; i++) {

    $('#con'+i).hide();

 }

for (i = 80; i < 91; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if((cant_id==90)|| (cant_id==91)){

 for (i = 80; i < 91; i++) {

    $('#con'+i).hide();

 }

for (i = 90; i < 101; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if((cant_id==100)|| (cant_id==111)){

 for (i = 90; i < 101; i++) {

    $('#con'+i).hide();

 }

for (i = 100; i < 111; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}








}
})




});

$("#anterior").on("click",function(){



  var ttt   = $('#menu_pag').attr("data-select");
    $('#con'+ttt).removeClass("active");
      total = (parseInt(ttt) - parseInt(1));
    $('#menu_pag').attr("data-select", total);

if (ttt==''){

 }else{
 setTimeout(function(){ $('#con'+total).addClass("active"); }, 500);
}
   var   cat_totall = $('#con'+total).attr("data-cm");
   var   cant_enn   = $('#con'+total).attr("data-cantidad");
   var   rest       = (parseInt(cant_enn) - parseInt(8));

//alert(total);
//------------------------------
if( (total==10)|| (total==9)&&(total>=8) ){

   for (i = 10; i < 21; i++) {

     $('#con'+i).hide();

 }

for (i = 0; i < 11; i++) {

    $('#con'+i).show();

}



}else if((total==20)|| (total==19)&&(total>=18) ){

   for (i = 20; i < 31; i++) {

     $('#con'+i).hide();

 }

for (i = 10; i < 21; i++) {

    $('#con'+i).show();

}
// //------------------------------
 }else if((total==30)|| (total==29)&&(total>=28) ){

 for (i = 30; i <41; i++) {

    $('#con'+i).hide();

 }

for (i = 20; i < 31; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if((total==40)|| (total==39)&&(total>=38)){

 for (i = 40; i < 51; i++) {

    $('#con'+i).hide();

 }

for (i = 30; i < 41; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if( (total==50)|| (total==49)&&(total>=48)){

 for (i = 50; i < 61; i++) {

    $('#con'+i).hide();

 }

for (i = 40; i < 51; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if((total==60)|| (total==59)&&(total>=58)){

 for (i = 60; i < 71; i++) {

    $('#con'+i).hide();

 }

for (i = 50; i < 61; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if((total==70)|| (total==69)&&(total>=68)){

 for (i = 70; i < 81; i++) {

    $('#con'+i).hide();

 }

for (i = 60; i < 71; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if((total==80)|| (total==79)&&(total>=78)){

 for (i =80; i < 91; i++) {

    $('#con'+i).hide();

 }

for (i = 70; i < 81; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if((total==90)|| (total==89)&&(total>=88)){

 for (i = 90; i < 101; i++) {

    $('#con'+i).hide();

 }

for (i = 80; i < 91; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if((total==100)|| (total==99)&&(total>=98)){

 for (i = 100 ; i < 111 ; i++) {

    $('#con'+i).hide();

 }

for (i = 90; i < 101; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}




  $.ajax({
            type :'POST',
            url :'/wp-content/themes/storefront/assets/complementos/paginacion.php',
            data :{"cat_total":cat_totall,"cant_en":cant_enn},
            success:function(reses){

            $('#contendio_pag').html(reses);

    $(".change-color").on("click", function(){
    var color = $(this).attr("data-image-color");
    var obj = $(this).parent().parent().prev().children().children();
    $(obj).attr("src", color);
    $(obj).removeAttr("srcset");
    var color = $(this).attr("data-image-set-color");
    var obj = $(this).parent().next().children().children("span");
    $(obj).removeClass();
    $(obj).addClass("colour-"+color);

    var eliid = $(this).attr("data-cc");
    var color = $(this).attr("data-image-color");
    var ir_color = $(this).attr("data-image-set-color");
    var contt='?add-to-cart='+eliid+'&attribute_color='+ir_color;

     $('#'+eliid).attr("href", contt);


  });

  $(".quantity_item_quantity").change(function(){
    var value = $(this).val();
    $(this).parent().next().children().attr("data-quantity", value);
  });

  $(".add-to-cart-link").on("click", function(e){
    e.preventDefault();
    var url = $(this).attr("data-quantity");
    if(url == "" || url == 0 || url == null){
      url = 1;
    }
    window.location.href = $(this).attr("href") + '&quantity='+url;
  });









}



})







});




$("#siguiente").on("click",function(){
var ttt2   = $('#menu_pag').attr("data-select");




    $('#con'+ttt2).removeClass("active");
      total2 = (parseInt(ttt2) + parseInt(1));

 //alert(total2);
    $('#menu_pag').attr("data-select", total2);
//   alert('#con'+total);
if (ttt2==''){
  $('#menu_pag').attr("data-select", 1);
 var yu =  $('#menu_pag').attr("data-select");
   var   cat_totall2 = $('#con'+yu).attr("data-cm");
      var   cant_enn2   = $('#con'+yu).attr("data-cantidad");
      setTimeout(function(){ $('#con'+yu).addClass("active"); }, 500);
 }else{
 setTimeout(function(){ $('#con'+total2).addClass("active"); }, 500);
  var   cat_totall2 = $('#con'+total2).attr("data-cm");
      var   cant_enn2   = $('#con'+total2).attr("data-cantidad");
}
//------------------------------

if(total2==10){

   for (i = 0; i < 11; i++) {

     $('#con'+i).hide();

 }

for (i = 10; i < 20; i++) {

    $('#con'+i).show();

}



}else if(total2==20){

   for (i = 10; i < 21; i++) {

     $('#con'+i).hide();

 }

for (i = 20; i < 31; i++) {

    $('#con'+i).show();

}
// //------------------------------
 }else if(total2==30){

 for (i = 20; i < 31; i++) {

    $('#con'+i).hide();

 }

for (i = 30; i < 41; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if(total2==40){

 for (i = 30; i < 41; i++) {

    $('#con'+i).hide();

 }

for (i = 40; i < 51; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if(total2==50){

 for (i = 40; i < 51; i++) {

    $('#con'+i).hide();

 }

for (i = 50; i < 61; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if(total2==60){

 for (i = 50; i < 61; i++) {

    $('#con'+i).hide();

 }

for (i = 60; i < 71; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if(total2==70){

 for (i = 60; i < 71; i++) {

    $('#con'+i).hide();

 }

for (i = 70; i < 81; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if(total2==80){

 for (i = 70; i < 81; i++) {

    $('#con'+i).hide();

 }

for (i = 80; i < 91; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if(total2==90){

 for (i = 80; i < 91; i++) {

    $('#con'+i).hide();

 }

for (i = 90; i < 101; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}else if(total2==100){

 for (i = 90; i < 101; i++) {

    $('#con'+i).hide();

 }

for (i = 100; i < 111; i++) {

     $('#con'+i).show();

 }
// //------------------------------
}



  $.ajax({
            type :'POST',
            url :'/wp-content/themes/storefront/assets/complementos/paginacion.php',
            data :{"cat_total":cat_totall2,"cant_en":cant_enn2},
            success:function(resest){
              //alert(resest);
            $('#contendio_pag').html(resest);
            $('#menu_pag').attr("data-t-cantidad", cat_totall2);



    $(".change-color").on("click", function(){
    var color = $(this).attr("data-image-color");
    var obj = $(this).parent().parent().prev().children().children();
    $(obj).attr("src", color);
    $(obj).removeAttr("srcset");
    var color = $(this).attr("data-image-set-color");
    var obj = $(this).parent().next().children().children("span");
    $(obj).removeClass();
    $(obj).addClass("colour-"+color);

    var eliid = $(this).attr("data-cc");
    var color = $(this).attr("data-image-color");
    var ir_color = $(this).attr("data-image-set-color");
    var contt='?add-to-cart='+eliid+'&attribute_color='+ir_color;

     $('#'+eliid).attr("href", contt);


  });

  $(".quantity_item_quantity").change(function(){
    var value = $(this).val();
    $(this).parent().next().children().attr("data-quantity", value);
  })

  $(".add-to-cart-link").on("click", function(e){
    e.preventDefault();
    var url = $(this).attr("data-quantity");
    if(url == "" || url == 0 || url == null){
      url = 1;
    }
    window.location.href = $(this).attr("href") + '&quantity='+url;
  })









}
})

//---------------------------------------------------------------------------------------------





});



var num_pag = $("#menu_pag").attr('data-select');
var num_en_tot = $("#menu_pag").attr('data-t-cantidad');


if (num_pag==0) {

//result_div = parseInt(num_en_tot) / parseInt(8);
//alert('hhh');

for (i = 11; i < num_en_tot+1; i++) {

    $('#con'+i).hide();

}




 }





 function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


   var username = getCookie("micokkie");
    if (username != "") {
      console.log('funciona');
        //alert("bienvenido " + username);
    } else {
         console.log("no funciona");
         $('#form_footer').show();
   
    }



 $("#uso_kookie").on("click",function(){

  document.cookie = "micokkie=inicio_cokie";
  $('#form_footer').hide();

 });



$( ".wpcf7-form" ).on( "submit",function(event) {
//$("#newslet").on("click",function(){
//console.log( $( this ).serialize() );
  event.preventDefault();
  
 $.ajax({
            type :'POST',
            url :'/wp-content/themes/storefront/assets/complementos/neswlleter.php',
            data :$(this).serialize(),
            success:function(resp){
              console.log('si funciona el neswlleter');

            }


          })


});





});

function updateRelated() {
  var alerter=""
  var alerter2=""
  //var activeColor = jQuery("div.commerce-fancy-attributes-color").attr( "title" ).substr(1,1);
  var activeSKU = jQuery("div.commerce-product-sku").text().replace(/ /g,'').replace(/(\r\n|\n|\r)/gm,'').substring(4);
  var activeColor = activeSKU.substr(activeSKU.length - 1);
  jQuery( "div#ds_related" ).each(function() {

    var foundSKU = ''
    var SKUtag=jQuery( this ).find("#ds_related_sku").find(".field-type-commerce-product-reference")
    if(SKUtag.length>1){
      SKUtag.each(function() {

        var activeSKU=jQuery( this ).text().replace(/ /g,'').replace(/(\r\n|\n|\r)/gm,'')

        if(activeSKU.substr(activeSKU.length - 1)==activeColor){
          foundSKU=activeSKU

        }

      });
    }
    if(foundSKU!=''){
      var imgSRC = jQuery( this ).find("img").attr("src")
      var activeClave = foundSKU.substring(0,foundSKU.length - 1)
      var imgArr = imgSRC.split(activeClave)
      if(imgArr.length>0){
        imgArr[1] = activeColor+imgArr[1].substring(1)
         jQuery( this ).find("img").attr("src", imgArr[0]+activeClave+imgArr[1]);
         jQuery( this ).find("a").each(function() {
          jQuery( this ).attr("href", jQuery( this ).attr("href")+'?sku='+foundSKU);
         });
      }
    }
  });
}
