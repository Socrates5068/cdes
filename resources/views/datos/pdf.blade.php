<?php
    $mi_pdf = 'C:\laragon\www\sedes\public\storage\reportes\prueba.pdf';
    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="'.$mi_pdf.'"');
    readfile($mi_pdf);
?>