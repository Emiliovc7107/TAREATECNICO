<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('images/icono.png',20,8,20);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(40,10,'gene',1,0,'C');
    // Salto de línea
    $this->Ln(20);


    $this->cell(50,10, 'aas',1,0, 'c',0);
    $this->cell(70,10, 'bases',1,0, 'c',0);
    $this->cell(50,10, 'gene',1,0, 'c',0);
    $this->cell(50,10, 'GeneLenth',1,0, 'c',0);
    $this->cell(30,10, 'Gene',1,0, 'c',0);
    $this->cell(30,10, 'Gene',1,0, 'c',0);
    $this->Ln(10);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
require 'bd.php';
$consulta="SELECT * From gene";
$resultado=$conn->query($consulta);

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AddPage('landscape','legal');
$pdf->AliasNbPages();
$pdf->SetFont('Times','',13);
while($row=$resultado->fetch_Assoc()){
    $pdf->cell(50,10,$row['aas'],1,0,'c',0);
    $pdf->cell(70,10,$row['Gene_id'],1,0,'c',0);
    $pdf->cell(50,10,$row['strand'],1,0,'c',0);
    $pdf->cell(50,10,$row['GeneLenth'],1,0,'c',0);
    $pdf->cell(30,10,$row['Gene'],1,0,'c',0);
    $pdf->Ln(10);

}

$pdf->Output();
?>