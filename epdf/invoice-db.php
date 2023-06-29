<?php
require('fpdf17/fpdf.php');

//db connection
$con = mysqli_connect('localhost','root','','train_sys');
//get invoices data
$query = mysqli_query($con,"select * from persons ORDER BY ticket_id DESC LIMIT 1");

$invoice = mysqli_fetch_array($query);

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

		

$pdf = new FPDF('P','mm','A4');


$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Times','B',14);

//Cell(width , height , text , border , end line , [align] )
$pdf->Image ('logo-main.png',10,0,70);
$pdf->Cell(130	,43,'Online Train Ticket Reservation',0,0);

$pdf->Cell(59	,41,'INVOICE',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','b',12);

$pdf->Cell(130	,-30,'University Of Colombo',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->SetFont('Arial','',12);
$pdf->Cell(130	,-30,'Colombo,SriLanka',0,0);
$pdf->Cell(25	,-30,'Date',0,0);
$pdf->Cell(34	,-30,$invoice['date_book'],0,1);//end of line

$pdf->Cell(130	,40,'Phone [011 2240222]',0,0);
$pdf->Cell(25	,40,'Invoice #',0,0);
$pdf->Cell(34	,40,$invoice['ticket_id'],0,1);//end of line

$pdf->Cell(130	,-25,'Fax [+12345678]',0,0);
$pdf->Cell(25	,-25,'Customer ID',0,0);
$pdf->Cell(34	,-25,$invoice['ticket_id'],0,1);//end of line



//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//billing address
$pdf->Cell(100	,20,'Bill to',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,0,$invoice['full_name'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,'-------------------------',0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$invoice['nic'],0,1);

//$pdf->Cell(130	,5,$invoice['city'], $invoice['country'], $invoice['zip'],0,0);
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$invoice['address1'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$invoice['address2'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$invoice['city'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$invoice['country'],0,1);


$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$invoice['contact'],0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130	,5,'Description',1,0);
$pdf->Cell(25	,5,'Taxable',1,0);
$pdf->Cell(37	,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

//items
$amount = 700;
$tax=0;
$pdf->Cell(130	,5,'Train Ticket',1,0);
$pdf->Cell(25	,5,'-',1,0);
$pdf->Cell(37	,5,$amount,1,1,'R');//end of line

//summary
$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Subtotal',0,0);
$pdf->Cell(7	,5,'Rs.',1,0);
$pdf->Cell(30	,5,number_format($amount),1,1,'R');//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Taxable',0,0);
$pdf->Cell(7	,5,'Rs.',1,0);
$pdf->Cell(30	,5,number_format($tax),1,1,'R');//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Tax Rate',0,0);
$pdf->Cell(7	,5,'Rs.',1,0);
$pdf->Cell(30	,5,'0%',1,1,'R');//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Total Due',0,0);
$pdf->Cell(7	,5,'Rs.',1,0);
$pdf->Cell(30	,5,number_format($amount + $tax),1,1,'R');//end of line





















$pdf->Output();
?>
