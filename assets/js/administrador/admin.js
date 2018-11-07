jQuery(document).ready(function($){

    var meta_audio_frame;
    var meta_audio_frame_2;
    var meta_audio_frame_3;
    var meta_audio_frame_4;
    var meta_audio_frame_5;
    var meta_audio_frame_6;
    var meta_audio_frame_7;
    var meta_audio_frame_8;
    var meta_audio_frame_9;
    var meta_audio_frame_10;
    var meta_audio_frame_11;
    var meta_audio_frame_12;
    var meta_audio_frame_13;
    var meta_audio_frame_14;
    var meta_audio_frame_15;
    var meta_audio_frame_16;
    var meta_audio_frame_17;
    var meta_audio_frame_18;
    var meta_audio_frame_19;
    var meta_audio_frame_20;
    var meta_audio_frame_21;
    var meta_audio_frame_22;
    var meta_audio_frame_23;
    var meta_audio_frame_24;
    var meta_audio_frame_25;
    var meta_audio_frame_26;
    var meta_audio_frame_27;
    var meta_audio_frame_28;
    var meta_audio_frame_29;
    var meta_audio_frame_30;
    var meta_audio_frame_31;

    var meta_audio_frame_32;
    var meta_audio_frame_33;
    var meta_audio_frame_34;

    var meta_audio_frame_35;
    var meta_audio_frame_36;
    var meta_audio_frame_37;

    var meta_audio_frame_38;
    var meta_audio_frame_39;
    var meta_audio_frame_40;

    $('#boton_img_rosa').click(function(e){
        e.preventDefault();
        if ( meta_audio_frame ) {
            meta_audio_frame.open();
            return;
        }
        meta_audio_frame = wp.media.frames.meta_audio_frame = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame.on('select', function(){
            var media_attachment = meta_audio_frame.state().get('selection').first().toJSON();
            $('#rosa_mas_img1').val(media_attachment.url);
        });
        meta_audio_frame.open();
    });


  $('#boton_img_rosa_2').click(function(e){
        e.preventDefault();
        if ( meta_audio_frame_3 ) {
            meta_audio_frame_3.open();
            return;
        }
        meta_audio_frame_3 = wp.media.frames.meta_audio_frame_3 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_3.on('select', function(){
            var media_attachment = meta_audio_frame_3.state().get('selection').first().toJSON();
            $('#rosa_mas_img2').val(media_attachment.url);
        });
        meta_audio_frame_3.open();
    });

  $('#boton_img_rosa_3').click(function(e){
        e.preventDefault();
        if ( meta_audio_frame_4 ) {
            meta_audio_frame_4.open();
            return;
        }
        meta_audio_frame_4 = wp.media.frames.meta_audio_frame_4 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_4.on('select', function(){
            var media_attachment = meta_audio_frame_4.state().get('selection').first().toJSON();
            $('#rosa_mas_img3').val(media_attachment.url);
        });
        meta_audio_frame_4.open();
    });


 $('#boton_img_amarillo_1').click(function(e){
        e.preventDefault();
        if ( meta_audio_frame_2 ) {
            meta_audio_frame_2.open();
            return;
        }
        meta_audio_frame_2 = wp.media.frames.meta_audio_frame_2 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_2.on('select', function(){
            var media_attachment = meta_audio_frame_2.state().get('selection').first().toJSON();
            $('#amarillo_mas_img1').val(media_attachment.url);
        });
        meta_audio_frame_2.open();
    });


 $('#boton_img_amarillo_2').click(function(e){
        e.preventDefault();
        if ( meta_audio_frame_5 ) {
            meta_audio_frame_5.open();
            return;
        }
        meta_audio_frame_5 = wp.media.frames.meta_audio_frame_5 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_5.on('select', function(){
            var media_attachment = meta_audio_frame_5.state().get('selection').first().toJSON();
            $('#amarillo_mas_img2').val(media_attachment.url);
        });
        meta_audio_frame_5.open();
    });

 $('#boton_img_amarillo_3').click(function(e){
        e.preventDefault();
        if ( meta_audio_frame_6 ) {
            meta_audio_frame_6.open();
            return;
        }
        meta_audio_frame_6 = wp.media.frames.meta_audio_frame_6 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_6.on('select', function(){
            var media_attachment = meta_audio_frame_6.state().get('selection').first().toJSON();
            $('#amarillo_mas_img3').val(media_attachment.url);
        });
        meta_audio_frame_6.open();
    });




  $('#boton_img_verde').click(function(e){
        e.preventDefault();
        if ( meta_audio_frame_7 ) {
            meta_audio_frame_7.open();
            return;
        }
        meta_audio_frame_7 = wp.media.frames.meta_audio_frame_7 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_7.on('select', function(){
            var media_attachment = meta_audio_frame_7.state().get('selection').first().toJSON();
            $('#verde_mas_img1').val(media_attachment.url);
        });
        meta_audio_frame_7.open();
    });



    $('#boton_img_verde2').click(function(e){
        e.preventDefault();
        if ( meta_audio_frame_8 ) {
            meta_audio_frame_8.open();
            return;
        }
        meta_audio_frame_8 = wp.media.frames.meta_audio_frame_8 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_8.on('select', function(){
            var media_attachment = meta_audio_frame_8.state().get('selection').first().toJSON();
            $('#verde_mas_img2').val(media_attachment.url);
        });
        meta_audio_frame_8.open();
    });


 $('#boton_img_verde3').click(function(e){
        e.preventDefault();
        if ( meta_audio_frame_9 ) {
            meta_audio_frame_9.open();
            return;
        }
        meta_audio_frame_9 = wp.media.frames.meta_audio_frame_9 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_9.on('select', function(){
            var media_attachment = meta_audio_frame_9.state().get('selection').first().toJSON();
            $('#verde_mas_img3').val(media_attachment.url);
        });
        meta_audio_frame_9.open();
    });



 $('#boton_img_naranja').click(function(e){
        e.preventDefault();
        if ( meta_audio_frame_10 ) {
            meta_audio_frame_10.open();
            return;
        }
        meta_audio_frame_10 = wp.media.frames.meta_audio_frame_10 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_10.on('select', function(){
            var media_attachment = meta_audio_frame_10.state().get('selection').first().toJSON();
            $('#naranja_mas_img1').val(media_attachment.url);
        });
        meta_audio_frame_10.open();
    });



 $('#boton_img_naranja_2').click(function(e){
        e.preventDefault();
        if ( meta_audio_frame_11 ) {
            meta_audio_frame_11.open();
            return;
        }
        meta_audio_frame_11 = wp.media.frames.meta_audio_frame_11 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_11.on('select', function(){
            var media_attachment = meta_audio_frame_11.state().get('selection').first().toJSON();
            $('#naranja_mas_img2').val(media_attachment.url);
        });
        meta_audio_frame_11.open();
    });




$('#boton_img_naranja3').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_12 ) {
            meta_audio_frame_12.open();
            return;
        }
        meta_audio_frame_12 = wp.media.frames.meta_audio_frame_12 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_12.on('select', function(){
            var media_attachment = meta_audio_frame_12.state().get('selection').first().toJSON();
            $('#naranja_mas_img3').val(media_attachment.url);
        });
        meta_audio_frame_12.open();
    });




$('#boton_img_azul1').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_13 ) {
            meta_audio_frame_13.open();
            return;
        }
        meta_audio_frame_13 = wp.media.frames.meta_audio_frame_13 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_13.on('select', function(){
            var media_attachment = meta_audio_frame_13.state().get('selection').first().toJSON();
            $('#azul_mas_img1').val(media_attachment.url);
        });
        meta_audio_frame_13.open();
    });



$('#boton_img_azul2').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_14 ) {
            meta_audio_frame_14.open();
            return;
        }
        meta_audio_frame_14 = wp.media.frames.meta_audio_frame_14 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_14.on('select', function(){
            var media_attachment = meta_audio_frame_14.state().get('selection').first().toJSON();
            $('#azul_mas_img2').val(media_attachment.url);
        });
        meta_audio_frame_14.open();
    });



$('#boton_img_azul3').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_15 ) {
            meta_audio_frame_15.open();
            return;
        }
        meta_audio_frame_15 = wp.media.frames.meta_audio_frame_15 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_15.on('select', function(){
            var media_attachment = meta_audio_frame_15.state().get('selection').first().toJSON();
            $('#azul_mas_img3').val(media_attachment.url);
        });
        meta_audio_frame_15.open();
    });


$('#boton_img_morado1').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_16 ) {
            meta_audio_frame_16.open();
            return;
        }
        meta_audio_frame_16 = wp.media.frames.meta_audio_frame_16 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_16.on('select', function(){
            var media_attachment = meta_audio_frame_16.state().get('selection').first().toJSON();
            $('#morado_mas_img1').val(media_attachment.url);
        });
        meta_audio_frame_16.open();
    });



$('#boton_img_morado2').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_17 ) {
            meta_audio_frame_17.open();
            return;
        }
        meta_audio_frame_17 = wp.media.frames.meta_audio_frame_17 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_17.on('select', function(){
            var media_attachment = meta_audio_frame_17.state().get('selection').first().toJSON();
            $('#morado_mas_img2').val(media_attachment.url);
        });
        meta_audio_frame_17.open();
    });


$('#boton_img_morado3').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_18 ) {
            meta_audio_frame_18.open();
            return;
        }
        meta_audio_frame_18 = wp.media.frames.meta_audio_frame_18 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_18.on('select', function(){
            var media_attachment = meta_audio_frame_18.state().get('selection').first().toJSON();
            $('#morado_mas_img3').val(media_attachment.url);
        });
        meta_audio_frame_18.open();
    });


$('#boton_img_rojo1').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_19 ) {
            meta_audio_frame_19.open();
            return;
        }
        meta_audio_frame_19 = wp.media.frames.meta_audio_frame_19 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_19.on('select', function(){
            var media_attachment = meta_audio_frame_19.state().get('selection').first().toJSON();
            $('#rojo_mas_img1').val(media_attachment.url);
        });
        meta_audio_frame_19.open();
    });



$('#boton_img_rojo2').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_20 ) {
            meta_audio_frame_20.open();
            return;
        }
        meta_audio_frame_20 = wp.media.frames.meta_audio_frame_20 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_20.on('select', function(){
            var media_attachment = meta_audio_frame_20.state().get('selection').first().toJSON();
            $('#rojo_mas_img2').val(media_attachment.url);
        });
        meta_audio_frame_20.open();
    });



$('#boton_img_rojo3').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_21 ) {
            meta_audio_frame_21.open();
            return;
        }
        meta_audio_frame_21 = wp.media.frames.meta_audio_frame_21 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_21.on('select', function(){
            var media_attachment = meta_audio_frame_21.state().get('selection').first().toJSON();
            $('#rojo_mas_img3').val(media_attachment.url);
        });
        meta_audio_frame_21.open();
    });

$('#boton_img_negro1').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_22 ) {
            meta_audio_frame_22.open();
            return;
        }
        meta_audio_frame_22 = wp.media.frames.meta_audio_frame_22 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_22.on('select', function(){
            var media_attachment = meta_audio_frame_22.state().get('selection').first().toJSON();
            $('#negro_mas_img1').val(media_attachment.url);
        });
        meta_audio_frame_22.open();
    });


$('#boton_img_negro2').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_23 ) {
            meta_audio_frame_23.open();
            return;
        }
        meta_audio_frame_23 = wp.media.frames.meta_audio_frame_23 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_23.on('select', function(){
            var media_attachment = meta_audio_frame_23.state().get('selection').first().toJSON();
            $('#negro_mas_img2').val(media_attachment.url);
        });
        meta_audio_frame_23.open();
    });


$('#boton_img_negro3').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_24 ) {
            meta_audio_frame_24.open();
            return;
        }
        meta_audio_frame_24 = wp.media.frames.meta_audio_frame_24 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_24.on('select', function(){
            var media_attachment = meta_audio_frame_24.state().get('selection').first().toJSON();
            $('#negro_mas_img3').val(media_attachment.url);
        });
        meta_audio_frame_24.open();
    });


$('#boton_img_blanco1').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_25 ) {
            meta_audio_frame_25.open();
            return;
        }
        meta_audio_frame_25 = wp.media.frames.meta_audio_frame_25 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_25.on('select', function(){
            var media_attachment = meta_audio_frame_25.state().get('selection').first().toJSON();
            $('#blanco_mas_img1').val(media_attachment.url);
        });
        meta_audio_frame_25.open();
    });


$('#boton_img_blanco2').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_26 ) {
            meta_audio_frame_26.open();
            return;
        }
        meta_audio_frame_26 = wp.media.frames.meta_audio_frame_26 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_26.on('select', function(){
            var media_attachment = meta_audio_frame_26.state().get('selection').first().toJSON();
            $('#blanco_mas_img2').val(media_attachment.url);
        });
        meta_audio_frame_26.open();
    });


$('#boton_img_blanco3').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_27 ) {
            meta_audio_frame_27.open();
            return;
        }
        meta_audio_frame_27 = wp.media.frames.meta_audio_frame_27 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_27.on('select', function(){
            var media_attachment = meta_audio_frame_27.state().get('selection').first().toJSON();
            $('#blanco_mas_img3').val(media_attachment.url);
        });
        meta_audio_frame_27.open();
    });


$('#boton_img_blanco3').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_27 ) {
            meta_audio_frame_27.open();
            return;
        }
        meta_audio_frame_27 = wp.media.frames.meta_audio_frame_27 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_27.on('select', function(){
            var media_attachment = meta_audio_frame_27.state().get('selection').first().toJSON();
            $('#blanco_mas_img3').val(media_attachment.url);
        });
        meta_audio_frame_27.open();
    });



$('#boton_img_b_y_n1').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_28 ) {
            meta_audio_frame_28.open();
            return;
        }
        meta_audio_frame_28 = wp.media.frames.meta_audio_frame_28 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_28.on('select', function(){
            var media_attachment = meta_audio_frame_28.state().get('selection').first().toJSON();
            $('#byn_mas_img1').val(media_attachment.url);
        });
        meta_audio_frame_28.open();
    });

$('#boton_img_b_y_n_2').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_29 ) {
            meta_audio_frame_29.open();
            return;
        }
        meta_audio_frame_29 = wp.media.frames.meta_audio_frame_29 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_29.on('select', function(){
            var media_attachment = meta_audio_frame_29.state().get('selection').first().toJSON();
            $('#byn_mas_img2').val(media_attachment.url);
        });
        meta_audio_frame_29.open();
    });

$('#boton_img_b_y_n_3').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_30 ) {
            meta_audio_frame_30.open();
            return;
        }
        meta_audio_frame_30 = wp.media.frames.meta_audio_frame_30 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_30.on('select', function(){
            var media_attachment = meta_audio_frame_30.state().get('selection').first().toJSON();
            $('#byn_mas_img3').val(media_attachment.url);
        });
        meta_audio_frame_30.open();
    });

$('#boton_img_uso_producto').click(function(e){
     e.preventDefault();
        if ( meta_audio_frame_31 ) {
            meta_audio_frame_31.open();
            return;
        }
        meta_audio_frame_31 = wp.media.frames.meta_audio_frame_31 = wp.media({
            title: meta_imagen_descarga.title,
            button: { text:  meta_imagen_descarga.button },
            library: { type: 'image' }
        });
        meta_audio_frame_31.on('select', function(){
            var media_attachment = meta_audio_frame_31.state().get('selection').first().toJSON();
            $('#img_uso_product').val(media_attachment.url);
        });
        meta_audio_frame_31.open();
    });

    $('#boton_img_cafe1').click(function(e){
         e.preventDefault();
            if ( meta_audio_frame_32 ) {
                meta_audio_frame_32.open();
                return;
            }
            meta_audio_frame_32 = wp.media.frames.meta_audio_frame_32 = wp.media({
                title: meta_imagen_descarga.title,
                button: { text:  meta_imagen_descarga.button },
                library: { type: 'image' }
            });
            meta_audio_frame_32.on('select', function(){
                var media_attachment = meta_audio_frame_32.state().get('selection').first().toJSON();
                $('#cafe_mas_img1').val(media_attachment.url);
            });
            meta_audio_frame_32.open();
        });


        $('#boton_img_cafe2').click(function(e){
             e.preventDefault();
                if ( meta_audio_frame_33 ) {
                    meta_audio_frame_33.open();
                    return;
                }
                meta_audio_frame_33 = wp.media.frames.meta_audio_frame_33 = wp.media({
                    title: meta_imagen_descarga.title,
                    button: { text:  meta_imagen_descarga.button },
                    library: { type: 'image' }
                });
                meta_audio_frame_33.on('select', function(){
                    var media_attachment = meta_audio_frame_33.state().get('selection').first().toJSON();
                    $('#cafe_mas_img2').val(media_attachment.url);
                });
                meta_audio_frame_33.open();
            });


            $('#boton_img_cafe3').click(function(e){
                 e.preventDefault();
                    if ( meta_audio_frame_34 ) {
                        meta_audio_frame_34.open();
                        return;
                    }
                    meta_audio_frame_34 = wp.media.frames.meta_audio_frame_34 = wp.media({
                        title: meta_imagen_descarga.title,
                        button: { text:  meta_imagen_descarga.button },
                        library: { type: 'image' }
                    });
                    meta_audio_frame_34.on('select', function(){
                        var media_attachment = meta_audio_frame_34.state().get('selection').first().toJSON();
                        $('#cafe_mas_img3').val(media_attachment.url);
                    });
                    meta_audio_frame_34.open();
                });



                $('#boton_img_limon1').click(function(e){
                     e.preventDefault();
                        if ( meta_audio_frame_35 ) {
                            meta_audio_frame_35.open();
                            return;
                        }
                        meta_audio_frame_35 = wp.media.frames.meta_audio_frame_35 = wp.media({
                            title: meta_imagen_descarga.title,
                            button: { text:  meta_imagen_descarga.button },
                            library: { type: 'image' }
                        });
                        meta_audio_frame_35.on('select', function(){
                            var media_attachment = meta_audio_frame_35.state().get('selection').first().toJSON();
                            $('#limon_mas_img1').val(media_attachment.url);
                        });
                        meta_audio_frame_35.open();
                    });

                    $('#boton_img_limon2').click(function(e){
                         e.preventDefault();
                            if ( meta_audio_frame_36 ) {
                                meta_audio_frame_36.open();
                                return;
                            }
                            meta_audio_frame_36 = wp.media.frames.meta_audio_frame_36 = wp.media({
                                title: meta_imagen_descarga.title,
                                button: { text:  meta_imagen_descarga.button },
                                library: { type: 'image' }
                            });
                            meta_audio_frame_36.on('select', function(){
                                var media_attachment = meta_audio_frame_36.state().get('selection').first().toJSON();
                                $('#limon_mas_img2').val(media_attachment.url);
                            });
                            meta_audio_frame_36.open();
                        });



                        $('#boton_img_limon3').click(function(e){
                             e.preventDefault();
                                if ( meta_audio_frame_37 ) {
                                    meta_audio_frame_37.open();
                                    return;
                                }
                                meta_audio_frame_37 = wp.media.frames.meta_audio_frame_37 = wp.media({
                                    title: meta_imagen_descarga.title,
                                    button: { text:  meta_imagen_descarga.button },
                                    library: { type: 'image' }
                                });
                                meta_audio_frame_37.on('select', function(){
                                    var media_attachment = meta_audio_frame_37.state().get('selection').first().toJSON();
                                    $('#limon_mas_img3').val(media_attachment.url);
                                });
                                meta_audio_frame_37.open();
                            });


                            $('#boton_img_gris1').click(function(e){
                                 e.preventDefault();
                                    if ( meta_audio_frame_38 ) {
                                        meta_audio_frame_38.open();
                                        return;
                                    }
                                    meta_audio_frame_38 = wp.media.frames.meta_audio_frame_38 = wp.media({
                                        title: meta_imagen_descarga.title,
                                        button: { text:  meta_imagen_descarga.button },
                                        library: { type: 'image' }
                                    });
                                    meta_audio_frame_38.on('select', function(){
                                        var media_attachment = meta_audio_frame_38.state().get('selection').first().toJSON();
                                        $('#gris_mas_img1').val(media_attachment.url);
                                    });
                                    meta_audio_frame_38.open();
                                });

                                $('#boton_img_gris2').click(function(e){
                                     e.preventDefault();
                                        if ( meta_audio_frame_39 ) {
                                            meta_audio_frame_39.open();
                                            return;
                                        }
                                        meta_audio_frame_39 = wp.media.frames.meta_audio_frame_39 = wp.media({
                                            title: meta_imagen_descarga.title,
                                            button: { text:  meta_imagen_descarga.button },
                                            library: { type: 'image' }
                                        });
                                        meta_audio_frame_39.on('select', function(){
                                            var media_attachment = meta_audio_frame_39.state().get('selection').first().toJSON();
                                            $('#gris_mas_img2').val(media_attachment.url);
                                        });
                                        meta_audio_frame_39.open();
                                    });

                                    $('#boton_img_gris3').click(function(e){
                                         e.preventDefault();
                                            if ( meta_audio_frame_40 ) {
                                                meta_audio_frame_40.open();
                                                return;
                                            }
                                            meta_audio_frame_40 = wp.media.frames.meta_audio_frame_40 = wp.media({
                                                title: meta_imagen_descarga.title,
                                                button: { text:  meta_imagen_descarga.button },
                                                library: { type: 'image' }
                                            });
                                            meta_audio_frame_40.on('select', function(){
                                                var media_attachment = meta_audio_frame_40.state().get('selection').first().toJSON();
                                                $('#gris_mas_img3').val(media_attachment.url);
                                            });
                                            meta_audio_frame_40.open();
                                        });

});
