<?php
session_start();
session_destroy();

require_once('TCPDF/tcpdf.php');



class MYPDF extends TCPDF {
    //Page header
    public function Header() {
       
        $bMargin = $this->getBreakMargin();
        
        $auto_page_break = $this->AutoPageBreak;
       
        $this->SetAutoPageBreak(false, 0);
        // set bacground image
        $img_file = K_PATH_IMAGES.'sertifikat6.jpg';
        $this->Image($img_file, 0, 0, 210, 297, '', '', '', false, 300, '', false, false, 0);
      
        $this->SetAutoPageBreak($auto_page_break, $bMargin);
        
        $this->setPageMark();
    }
}


$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// remove default header
$pdf->setPrintHeader(false);

// add a page
$pdf->AddPage('L','A4');

$bMargin = $pdf->getBreakMargin();

$auto_page_break = $pdf->getAutoPageBreak();

$pdf->SetAutoPageBreak(false, 0);

$img_file = K_PATH_IMAGES.'sertifikat6.jpg';
$pdf->Image($img_file, 0, 0, 297, 210, '', '', '', false, 300, '', false, false, 0);

$pdf->SetAutoPageBreak($auto_page_break, $bMargin);

$pdf->setPageMark();

$pdf->SetFont('test', 100, 12, '', false);

$html = '
<style>
span{
    color:black;
    text-align:center;
    font-weight:700px;
    font-size:60px;
    vertical-align : middle
}
p{
    opacity:0;
}
</style>

<br>

<br>

<br>

<br>

<br>

<br>

<br>

<br>

<br>

<br>

<br>

<br>

<br>

<br>

<span>'.$_POST["nama"].'</span>';



$pdf->writeHTML($html, true, false, true, false, '');

// ---------------------------------------------------------

$pdf->Output('Sertifikat_'.$_POST["nama"].'_Pondok_Romadhon.pdf', 'I');

?>
