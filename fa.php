<?php
require_once __DIR__ . '\vendor\autoload.php';

$mpdf = new mPDF();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->Output();
?>
<!--
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="/factura.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura</title>
</head>
<body>
    <center>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-10 ">
            <h1>Factura</h1>
        </div>
        <div class="col-xs-2">
            <img class="img" src="/img/logo1.svg" alt="MarBlue" value="MarBlue">
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xs-10">
            <h1 class="h6"></h1>
            <h1 class="h6"></h1>
        </div>
        <div class="col-xs-2 text-center">
            <strong>Fecha</strong>
            <br>
            
            <br>
            <strong>Factura No.</strong>
            <br>
            
        </div>
    </div>
    <hr>
    <div class="row text-center" style="margin-bottom: 2rem;">
        <div class="col-xs-6">
            <h1 class="h2">Cliente</h1>
            <strong></strong>
        </div>
        <div class="col-xs-6">
            <h1 class="h2">MarBlue</h1>
            <strong></strong>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-condensed table-bordered table-striped">
                <thead>
                <tr>
                    <th>DescripciÃ³n</th>
                    <th>Cantidad</th>
                   
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                
                    <tr>
                        <td></td>
                        <td></td>
                        <td>$</td>
                        <td>$</td>
                    </tr>
              
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3" class="text-right">Subtotal</td>
                    <td>$</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">Descuento</td>
                    <td>$</td>
                </tr>
                
                <tr>
                    <td colspan="3" class="text-right">Impuestos</td>
                    <td>$</td>
                </tr>
                <tr>
                    <td colspan="3" class="text-right">
                        <h4>Total</h4></td>
                    <td>
                        <h4>$</h4>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center">
            <p class="h5"></p>
        </div>
    </div>
</div>
<button>Descarga tu factura</button>
</center>
</body>
</html>
                -->