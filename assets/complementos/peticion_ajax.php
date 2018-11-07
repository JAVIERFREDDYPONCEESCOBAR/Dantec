<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1); 
define('WP_USE_THEMES', false);
require('../../../../../wp-load.php');

$img__1   = $_REQUEST['img1'];
$img__2   = $_REQUEST['img2'];
$img__3   = $_REQUEST['img3'];
$mis_id   = $_REQUEST['mi_id'];

$image_resize1 = aq_resize( $img__1, 440, 256, true ); 
$image_resi1   = aq_resize( $img__1, 78, 78, true ); 

$image_resize2 = aq_resize( $img__2, 440, 256, true );
$image_resi2   = aq_resize( $img__2, 78, 78, true );  

$image_resize3 = aq_resize( $img__3, 440, 256, true ); 
$image_resi3   = aq_resize( $img__3, 78, 78, true ); 



?>



          <a href="<?php echo$img__1;?>" class="cloud-zoom" id="cloud-zoom" rel="zoomWidth:&#039;auto&#039;, zoomHeight:&#039;auto&#039;, position:&#039;inside&#039;, adjustX:0, adjustY:0, tint:&#039;#ffffff&#039;, tintOpacity:&#039;0.6&#039;, lensOpacity:&#039;0.6&#039;, softFocus:false, smoothMove:&#039;3&#039;, showTitle:false, titleOpacity:&#039;0.5&#039;">
            <img src="<?php echo$img__1;?>" width="440" height="256" alt="" /></a>

          <div class="cloud-zoom-gallery-thumbs">


<?php if (empty($img__1)) { }else{ ?>
            <a href="<?php echo$img__1;?>" class="cloud-zoom-gallery" rel="useZoom: &#039;cloud-zoom&#039;,smallImage: &#039;<?php echo$img__1;?>&#039;">
              <img src="<?php echo$img__1;?>" width="78" height="78" alt="" /></a>

<?php } ?>
<?php if (empty($img__2)) { }else{ ?>
              <a href="<?php echo$img__2;?>" class="cloud-zoom-gallery" rel="useZoom: &#039;cloud-zoom&#039;,smallImage: &#039;<?php echo$img__2;?>&#039;">
                <img src="<?php echo$img__2;?>" width="78" height="78" alt="" /></a>

<?php } ?>
<?php if (empty($img__3)) { }else{ ?>
  
              <a href="<?php echo$img__3;?>" class="cloud-zoom-gallery" rel="useZoom: &#039;cloud-zoom&#039;,smallImage: &#039;<?php echo$img__3;?>&#039;">
                <img src="<?php echo$img__3;?>" width="78" height="78" alt="" /></a>


<?php } ?>

              </div>


