
jQuery(document).ready(function($){
  var custom_fields;
  custom_fields = '<tr class="form-field form-required">';
  custom_fields += '<th scope="row">';
  custom_fields += '<label for="billing_puesto">Puesto</label>';
  custom_fields += '</th>';
  custom_fields += '<td>';
  custom_fields += '<input type="text" id="user_puesto" name="user_puesto">';
  custom_fields += '</td>';
  custom_fields += '</tr>';
 
  custom_fields += '<tr class="form-field">';
  custom_fields += '<th scope="row">';
  custom_fields += '<label for="user_telefono_movil">Teléfono móvil</label>';
  custom_fields += '</th>';
  custom_fields += '<td>';
  custom_fields += '<input type="text" id="user_telefono_movil" name="user_telefono_movil">';
  custom_fields += '</td>';
  custom_fields += '</tr>';
  $('#createuser .form-table tbody').append(custom_fields);

  var frame_pdf;


$('#boton_promociones').click(function(e){
  e.preventDefault();

        if (frame_pdf) {
            frame_pdf.open();
            return;
        }

        frame_pdf = wp.media.frames.frame_pdf = wp.media({
            title: 'Agregar Imagen',
            button: { text:  'Agregar Imagen', },
            library: { type: 'image' }
        });


        frame_pdf.on('select', function(){
            var media_attachment = frame_pdf.state().get('selection').first().toJSON();
            $('#promociones').val(media_attachment.url);
        });


        frame_pdf.open();







                });







  });