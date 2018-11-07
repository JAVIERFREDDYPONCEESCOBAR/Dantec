<?php
require('pdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();

$params = array(
 'p' => $_GET["id"],
 'post_type' => 'product'
);

$wc_query = new WP_Query($params); 

if ($wc_query->have_posts()) :
	while ($wc_query->have_posts()) : $wc_query->the_post();

		$id_producto  = get_post_meta($post->ID, 'id_producto', true);
		$des = utf8_decode("Descripción: ");
		$titulo = utf8_decode(strip_tags($post->post_title));
		if(empty($post->post_content)){
		  $descripcion = utf8_decode(strip_tags(apply_filters( 'woocommerce_short_description', $post->post_excerpt )));
		}else{
		  $descripcion = utf8_decode(strip_tags(apply_filters( 'woocommerce_short_description', $post->post_content )));
		}

		$dimensiones         = utf8_decode(get_post_meta($post->ID, 'dimenciones', true));
		$cerdas              = utf8_decode(get_post_meta($post->ID, 'cerdas', true));
		$temperatura         = utf8_decode(get_post_meta($post->ID, 'temperatura', true));
		$material            = utf8_decode(get_post_meta($post->ID, 'material', true));
		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
		$image = esc_url($featured_img_url);


$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(68,68,68);
$pdf->Cell(20,10,$id_producto,0,1);
$pdf->SetFont('Arial','B',16);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(20,10,$titulo,0,1);

$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,6,$des,0);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(150,6,$descripcion,1);
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,6,"Dimensiones: ",0);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(150,6,$dimensiones,1);
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,6,"Cerdas: ",0);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(150,6,$cerdas,1);
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,6,"Temp. Max: ",0);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(150,6,$temperatura,1);
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(40,6,"Material: ",0);
$pdf->SetFont('Arial','',12);
$pdf->MultiCell(150,6,$material,1);
$pdf->Ln();

$pdf->Image($image,10,140,65);

$pdf->Ln(110);

$pdf->SetFont('Arial','',8);
$pdf->Cell(130);
$pdf->Cell(65,5,$tel, 0, 1, 'R');
$pdf->Cell(130);
$pdf->Cell(65,5,$inter, 0, 1, 'R');
$pdf->Cell(130);
$pdf->Cell(65,5,$mail, 0, 1, 'R');
$pdf->Cell(130);
$pdf->MultiCell(65,5,$dir, 0, 'R');
$pdf->Cell(130);

	endwhile;
	wp_reset_postdata();
endif;

$pdf->Output("I", "", false);

?>

