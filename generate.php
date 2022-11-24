<?php

require("fpdf.php");

$pdf = new FPDF();

if (isset($POST['create'])) {

    $theatre = $_POST['theatre'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $hour = $_POST['hour'];
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];





    $pdf->AddPage();
    $pdf->SetFont("Arial", "B", 19);

    $pdf->Cell(50,10,"Theatre",1,0);
    $pdf->Cell(50,10,$theatre,1,1);

    $pdf->Cell(50,10,"Type",1,0);
    $pdf->Cell(50,10,$type,1,1);

    $pdf->Cell(50,10,"Date",1,0);
    $pdf->Cell(50,10,$date,1,1);

    $pdf->Cell(50,10,"Hour",1,0);
    $pdf->Cell(50,10,$hour,1,1);

    $pdf->Cell(50,10,"First Name",1,0);
    $pdf->Cell(50,10,$fname,1,1);

    $pdf->Cell(50,10,"Last Name",1,0);
    $pdf->Cell(50,10,$lname,1,1);


    $pdf->Output();
}


?>