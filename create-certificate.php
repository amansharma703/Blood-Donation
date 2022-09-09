<?php

function genCertificate($fullname)
{
    $font1 = './AlexBrush-Regular.ttf';
    $font2 = './arial.ttf';
    $image = imagecreatefromjpeg("format.jpg");
    $color = imagecolorallocate($image, 19, 20, 21);
    $date = date('d F, Y');
    imagettftext($image, 56, 0, 2250, 2670, $color, $font2, $date);
    imagettftext($image, 200, 0, 1650, 2160, $color, $font2, $fullname);

    $file_path = "certificate/$fullname.jpg";
    $file_path_pdf = "certificate/$fullname.pdf";
    imagejpeg($image, $file_path);

// convert jpg to pdf
    require 'fpdf.php';
    $pdf = new FPDF('L', 'in', [11.7, 8.27]);
    $pdf->AddPage();
    $pdf->Image($file_path, 0, 0, 11.7, 8.27);
    $pdf->Output($file_path_pdf, "F");
    imagedestroy($image);
    unlink($file_path);

    return $file_path_pdf;

}