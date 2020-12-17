<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(65,15,'Mensualidad',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina '.$this->PageNo()).'/{nb}',0,0,'C');
}
}

//Conexion a la base de datos

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',7);

foreach($data as $factura){
    $pdf->Cell(45,10, $factura->Id , 1, 1, 'C', 0); 
    $pdf->Cell(45,10, $factura->costo_mensual , 1, 1, 'C', 0);
    $pdf->Cell(45,10, $factura->incremento , 1, 1, 'C', 0);
    $pdf->Cell(45,10, $factura->fecha_pago_mensual, 1, 1, 'C', 0);
    $pdf->Cell(45,10, $factura->usuario , 1, 1, 'C', 0);
    $pdf->Cell(45,10, $factura->estado, 1, 1, 'C', 0);
}
    

$pdf->Output();
?>
