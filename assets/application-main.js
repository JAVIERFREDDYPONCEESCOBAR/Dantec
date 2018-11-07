jQuery(document).ready(function(){

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

  $(".nav-item.searcher a").on("click", function(){

    $(".nav-search").toggleClass("d-none");

  });

  $("#video_single").on("click", function(){

    var url = $(this).attr("data-target-popvid");
    url = "https://www.youtube.com/embed/" + url;
    $("#videoPopupModal .modal-body").html('<iframe width="100%" height="350" src="'+url+'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>');

  });

  $('#videoPopupModal').on('hidden.bs.modal', function (e) {
    $("#videoPopupModal .modal-body").html("");
  });

  $('.holder-popover').tooltip({
    container: 'body'
  });

  $( "ul.menu_pag_tax" ).clone().appendTo( ".nav-replicated" );

});
