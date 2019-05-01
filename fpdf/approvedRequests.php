<?php
require 'fpdf.php';
require '..\connections/connect.php';
require '..\connections/session.php';
$id=$_SESSION['id'];

$date=date("jS M Y" );
 $requests="SELECT * FROM requests WHERE status= 'finalapproved' OR status='paused' OR status='ordered' ORDER BY request_date DESC";
$result=$con -> query($requests);
$row=mysqli_fetch_array($result);

$userDetails="SELECT * FROM login WHERE employeenumber=$id";
$resultDet=$con ->query($userDetails);
$feedback=mysqli_fetch_array($resultDet);


//A4 width 219mm 
// default margin: 10 mm each side
//writable horizontal: 219 -(10*2)=189
 $pdf=new FPDF('p','mm','A4');
 $pdf->AddPage();

 	//set font to Arial,bold ,14pt
 $pdf->setFont('Arial','B',14);

 	//cell (width,Height,text,Border,end line, align)
 $pdf->Cell(130,5,"TECHNICAL UNIVERSITY OF MOMBASA",0,0);
 $pdf->Cell(59,5,"APPROVED REQUESTS",0,1); //end of line

 	//set font to arial, regular, 12pt
 $pdf->SetFont('Arial','',12);
 $pdf->Cell(130,5,"Street Address",0,0);
 $pdf->Cell(59,5,"",0,1); //end of line

 $pdf->Cell(130,5,"[City, Country, ZIP]",0,0);
 $pdf->Cell(25,5,"Date :",0,0);
 $pdf->Cell(34,5,$date,0,1);//end of line

 $pdf->Cell(130,5,$feedback['email'],0,1);//end of line

 	//Dummy vertical cell for spacer
 $pdf->Cell(189,10,'',0,1);//end of line


 	//billing address
 $pdf->Cell(100,5,"Report By",0,1);//end of line

 	//Dummy cell at beginning for indentation
 $pdf->Cell(10,5,'',0,0);
 $pdf->Cell(90,5,$feedback['firstname'],0,1);

 $pdf->Cell(10,5,'',0,0);
 $pdf->Cell(90,5,$feedback['faculty'],0,1);
 

 //Dummy vertical cell for spacer
 $pdf->Cell(189,10,'',0,1);
 $pdf->Cell(189,10,'',0,1);//end of line

 //invoice contents
 $pdf->SetFont('Arial','B','12');
 $pdf->Cell(55,5,"Item",1,0);
 $pdf->Cell(75,5,"Description",1,0);
 $pdf->Cell(25,5,"Department",1,0);
 $pdf->Cell(34,5,"Quantity",1,1,'R');//end of line

 $pdf->SetFont('Arial','','12');

 //Numbers are right aligned so we  add an R
 	
 foreach ($con->query($requests) as $rows) {
 
 $pdf->Cell(55,5,$rows['item'],1,0);
 $pdf->Cell(75,5,$rows['description'],1,0);
 $pdf->Cell(25,5,$rows['faculty'],1,0);
 $pdf->Cell(34,5,$rows['quantity'],1,1,'R');//end of line

}

 $pdf->Output();
header('refresh:1;url=../manReports.php');
?>