<?php
require('./fpdf/fpdf.php');
require('../config/conexion.php');

$fecha = $_POST["f_desde"];
$sql="SELECT * FROM `tickets` WHERE fh_llegada BETWEEN '$fecha 07:50:00' AND '$fecha 16:30:00'";
$resultado = $conexion->query($sql);

//print_r($sql);
class PDF extends FPDF
{
    function Header()
    {
        setlocale(LC_TIME, "spanish");
        $fecha = $_POST["f_desde"];
        $this->Image('../assets/assets/img/icon2.png', 5, 5, 30 );
        $this->SetFont('Arial','B',15);
        $this->Cell(0,0, 'ACOGUADALUPANA DE R. L.',0,1,'C');
        $this->SetFont('Arial','B',8);
        $this->Ln(5);
        $this->SetFont('Arial','B',14);
        $this->Cell(0,0, 'Reporte de Atencion a Clientes',0,1,'C');
        $this->Ln(5);
        $this->SetFont('Arial','',12);
        $this->Cell(0,0, strftime('%A %d de %B de %Y', strtotime($fecha)),0,1,'C');
        $this->Ln(15);
    }
    
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I', 8);
        $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
    }		
}

$pdf = new PDF('P','mm','A4');
//$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetX(25);
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'N',1,0,'C',1);
$pdf->Cell(30,6,'Ticket',1,0,'C',1);
$pdf->Cell(30,6,'Escritorio',1,0,'C',1);
$pdf->Cell(30,6,'Tipo',1,0,'C',1);
$pdf->Cell(50,6,'Llegada',1,1,'C',1);


$pdf->SetFont('Arial','',10);
$cont=0;
while($row = $resultado->fetch_assoc())
{
    $pdf->SetX(25);
    $cont++;
    $pdf->Cell(20,6,$cont,1,0,'C');
    $pdf->Cell(30,6,utf8_decode($row['ticket']),1,0,'C');
    $pdf->Cell(30,6,utf8_decode($row['escritorio']),1,0,'C');
    $tipo = ($row['tipo_ticket']==1) ? "Normal" : "Preferencial" ;
    $pdf->Cell(30,6,utf8_decode($tipo),1,0,'C');
    $pdf->Cell(50,6,utf8_decode($row['fh_llegada']),1,1,'C');
}

$pdf->Output();
?>