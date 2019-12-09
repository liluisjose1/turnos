<?php
include "fpdf/fpdf.php";
date_default_timezone_set('America/Guatemala');
$fecha  = date("d-m-Y H:i:s");
$ticket = strtoupper($_GET["t"]);
if ($ticket<10) {
    $ticket = "A00".$ticket;
} else if ($ticket<100) {
    $ticket = "A0".$ticket;
} else {
    $ticket = "A".$ticket;
}
$pdf = new FPDF('L','mm', array(80,60));
$pdf->AddPage();
$pdf->Image('./assets/assets/img/logoo.png', 25, 3, 30);
$pdf->SetFont('Arial','B',8);
$pdf->SetY(18);
$pdf->Cell(0,4,'Bienvenido',0,0,'C');
$pdf->ln(3);
$pdf->Cell(0,4,'Su Numero de Ticket es:',0,0,'C');
$pdf->ln(4);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(0,8,$ticket,1,1,'C');
$pdf->ln(2);
$pdf->SetFont('Arial','B',6);
$pdf->Cell(0,0,utf8_decode("Será un honor atenderle"),0,0,'C');
$pdf->ln(2);
$pdf->Cell(0,0,$fecha,0,0,'C');
$pdf->output();
?>