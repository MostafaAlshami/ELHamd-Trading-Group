<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf();
    $mpdf->debug = true;
    $prid = $_POST['prid'];
    $prname = $_POST['prname'];
    $prq = $_POST['prq'];
    $prd = $_POST['prd'];
    $prqin = $_POST['prqin'];
    $prqout = $_POST['prqout'];

    $mpdf->WriteHTML('<h1  align="center">Product Storage Report </h1>');
    $mpdf->WriteHTML('<div align="center">');
    $mpdf->WriteHTML('<h2 align="center"><Strong>Product ID </Strong><br />' . $prid . '</h2></center><br />' );
    $mpdf->WriteHTML('<h2 align="center"><Strong>Product Name </Strong><br />' . $prname . '</center><br />' );
    $mpdf->WriteHTML('<h2 align="center"><Strong>Product Quantity</Strong><br />' . $prq . '</center><br />' );
    $mpdf->WriteHTML('<h2 align="center"><Strong>Product Addition Date </Strong><br />' . $prd . '</center><br />' );
    $mpdf->WriteHTML('<h2 align="center"><Strong>Product Quantity In </Strong><br />' . $prqin . '</center><br />' );
    $mpdf->WriteHTML('<h2 align="center"><Strong>Product Quantity Out </Strong><br />' . $prqout . '</center><br />' );
    $mpdf->WriteHTML('</div>');



    $mpdf->Output($prname.'Report.pdf', 'D');
