<?php
require('./fpdf/fpdf.php');
require('../config/conexion.php');

$ventanilla = $_POST["ventanilla"];
$f_desde = $_POST["f_desde"];
$h_desde = $_POST["h_desde"];
$f_hasta = $_POST["f_hasta"];
$h_hasta = $_POST["h_hasta"];
$sql="SELECT * FROM `tickets` WHERE fh_llegada BETWEEN '$f_desde $h_desde' AND '$f_hasta $h_hasta' AND escritorio='$ventanilla'";
$resultado = $conexion->query($sql);

//print($sql);
class PDF extends FPDF
{
    function Header()
    {
        setlocale(LC_ALL,"es_SV");
        $f_desde = date("d/m/Y", strtotime($_POST["f_desde"]));
        $f_hasta = date("d/m/Y", strtotime($_POST["f_hasta"]));
        $ventanilla = $_POST["ventanilla"];
        $h_desde = $_POST["h_desde"];
        $h_hasta = $_POST["h_hasta"];
        $this->Image('../assets/assets/img/icon2.png', 5, 5, 30 );
        $this->SetFont('Arial','B',15);
        $this->Cell(0,0, 'ACOGUADALUPANA DE R. L.',0,1,'C');
        $this->SetFont('Arial','B',8);
        $this->Ln(5);
        $this->SetFont('Arial','B',14);
        $this->Cell(0,0, "Reporte de atencion en ventanilla $ventanilla ",0,1,'C');
        $this->Ln(5);
        $this->SetFont('Arial','',12);
        $this->Cell(0,0, "Desde $f_desde $h_desde Hasta $f_hasta $h_hasta ",0,1,'C');
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

$pdf->SetX(40);
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'N',1,0,'C',1);
$pdf->Cell(30,6,'Ticket',1,0,'C',1);
$pdf->Cell(30,6,'Tipo',1,0,'C',1);
$pdf->Cell(50,6,'Llegada',1,1,'C',1);


$pdf->SetFont('Arial','',10);
$cont=0;
while($row = $resultado->fetch_assoc())
{
    $pdf->SetX(40);
    $cont++;
    $pdf->Cell(20,6,$cont,1,0,'C');
    $pdf->Cell(30,6,utf8_decode($row['ticket']),1,0,'C');
    $tipo = ($row['tipo_ticket']==1) ? "Normal" : "Preferencial" ;
    $pdf->Cell(30,6,utf8_decode($tipo),1,0,'C');
    $pdf->Cell(50,6,utf8_decode($row['fh_llegada']),1,1,'C');
}

$pdf->Output();
?>