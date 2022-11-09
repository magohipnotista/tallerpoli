<?php
$facturas = controladordatos::ctrtraerfacturas();
$registros = controladordatos::traerregistros();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .factura {
        border: 2px solid black;
    }
</style>
<div class="modal-body text-center">
    <?php if (isset($_GET["pagina"])) : ?>
        <?php for ($i = 0; $i < count($registros); $i++) : ?>
            <?php if ($_GET["pagina"] == $registros[$i]["numeroorden"]) : ?>
                <?php
                $valorhora = $registros[$i]["valor_hora"];
                $totalhoras = $registros[$i]["hora"];
                $totallabor = $valorhora * $totalhoras;
                ?>
            <?php endif ?>
        <?php endfor ?>
    <?php endif ?>
    <?php if (isset($_GET["pagina"])) : ?>
        <?php for ($i = 0; $i < count($facturas); $i++) : ?>
            <?php if ($_GET["pagina"] == $facturas[$i]["numeroorden"]) : ?>
                <!-- <img src="http://<?php $_SERVER['HTTP_HOST']; ?>/contabilidadpoli/vista/img/Poligramlogo.png" alt="" > -->
                <div class="titulo">
                    <h1><strong>Empresa Ejemplo</strong></h1>
                </div>

                <h3>2558896556-8</h3>
                <h4>Avenida quinta</h4>
                <h4><strong>Teléfono: </strong>3104018593</h4>
                <h4>empresa@ejemplo.com</h4>
                <h4><strong>Sitio Web:</strong> www.empresaejemplo.com</h4>
                <h4><strong>Régimen:</strong> Régimen Común</h4>
                <hr class="factura">
                <h1><strong>Cliente: <?php echo $facturas[$i]["nombrecliente"] ?></strong></h1>
                <h4><strong>Télefono Cliente: </strong><?php echo $facturas[$i]["telefono"] ?></h4>
                <h4><strong>Identificación: </strong><?php echo $facturas[$i]["cedula"] ?></h4>
                <hr class="factura">
                <h3>Factura</h3>
                <h3># <?php echo $facturas[$i]["numeroorden"] ?></h3>
                <h3><span>Fecha Inicio: </span><?php echo $facturas[$i]["fechainicio"] ?></h3>
                <h3><span>Fecha Final: </span><?php echo $facturas[$i]["fechafinal"] ?></h3>
                <h3><span>Metodo de Pago: </span><?php echo $facturas[$i]["metododepago"] ?></h3>
                <h3><strong>Vendedor:</strong> <?php echo $facturas[$i]["vendedor"] ?></h3>
                <hr class="factura">
                <br><br> <br><br> <br><br> <br><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cntd</th>
                            <th>Precio und</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <h6>Valor Hora</h6>
                                <!-- PRODUCTO ABRO -->
                                <?php if ($registros[$i]["ProductoAbro"] == "SI") : ?>
                                    <h6>Producto Abro</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- PRODUCTO ABRO -->

                                <!-- FAJAS SUPERBELT -->
                                <?php if ($registros[$i]["FajasSuperbelt"] == "SI") : ?>
                                    <h6>Fajas Super Belt</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- FAJAS SUPERBELT -->
                                <!-- FAJAS GATES -->
                                <?php if ($registros[$i]["FajasGates"] == "SI") : ?>
                                    <h6>Fajas Gates</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- FAJAS GATES -->
                                <!-- BUJIAS CHAMPION -->
                                <?php if ($registros[$i]["BujiasChampion"] == "SI") : ?>
                                    <h6>Bujias Champion</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- BUJIAS CHAMPION -->
                                <!-- PASTILLAS HPS -->
                                <?php if ($registros[$i]["PastillasHPS"] == "SI") : ?>
                                    <h6>Pastillas Hps</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- PASTILLAS HPS -->
                                <!-- ABRAZADERA SIDEAL -->
                                <?php if ($registros[$i]["Abrazaderasideal"] == "SI") : ?>
                                    <h6>Abrazadera Sideal</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- ABRAZADERA SIDEAL -->
                                <!-- LIQUIDO DE FRENOS WAGNER -->
                                <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                    <h6>Liquido de Frenos </h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- LIQUIDO DE FRENOS WAGNER -->
                                <!-- FILTROS FRAM -->
                                <?php if ($registros[$i]["FiltrosFram"] == "SI") : ?>
                                    <h6>Filtros Fram</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- FILTROS FRAM -->
                                <!-- CABLESBB -->
                                <?php if ($registros[$i]["CablesBB"] == "SI") : ?>
                                    <h6>Cables BB</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- CABLESBB -->
                            </td>
                            <td>
                                <h6><?php echo $registros[$i]["hora"] ?></h6>
                                <!-- PRODUCTO ABRO -->
                                <?php if ($registros[$i]["ProductoAbro"] == "SI") : ?>
                                    <h6> <?php echo $registros[$i]["cntProductoAbro"] ?></h6>
                                    <?php $ctn1 = $registros[$i]["cntProductoAbro"] ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- PRODUCTO ABRO -->

                                <!-- FAJAS SUPERBELT -->
                                <?php if ($registros[$i]["FajasSuperbelt"] == "SI") : ?>
                                    <h6> <?php echo $registros[$i]["cntFajasSuperbelt"] ?></h6>
                                    <?php $ctn2 = $registros[$i]["cntFajasSuperbelt"] ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- FAJAS SUPERBELT -->
                                <!-- FAJAS GATES -->
                                <?php if ($registros[$i]["FajasGates"] == "SI") : ?>
                                    <h6> <?php echo $registros[$i]["cntFajasGates"] ?></h6>
                                    <?php $ctn3 = $registros[$i]["cntFajasGates"] ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- FAJAS GATES -->
                                <!-- BUJIAS CHAMPION -->
                                <?php if ($registros[$i]["BujiasChampion"] == "SI") : ?>
                                    <h6> <?php echo $registros[$i]["cntBujiasChampion"] ?></h6>
                                    <?php $ctn4 = $registros[$i]["cntBujiasChampion"] ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- BUJIAS CHAMPION -->
                                <!-- PASTILLAS HPS -->
                                <?php if ($registros[$i]["PastillasHPS"] == "SI") : ?>
                                    <h6> <?php echo $registros[$i]["cntPastillasHPS"] ?></h6>
                                    <?php $ctn5 = $registros[$i]["cntPastillasHPS"] ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- PASTILLAS HPS -->
                                <!-- ABRAZADERA SIDEAL -->
                                <?php if ($registros[$i]["Abrazaderasideal"] == "SI") : ?>
                                    <h6> <?php echo $registros[$i]["cntAbrazaderasideal"] ?></h6>
                                    <?php $ctn6 = $registros[$i]["cntAbrazaderasideal"] ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- ABRAZADERA SIDEAL -->
                                <!-- LIQUIDO DE FRENOS WAGNER -->
                                <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                    <h6> <?php echo $registros[$i]["cntLiquidodefrenosWagner"] ?></h6>
                                    <?php $ctn7 = $registros[$i]["cntLiquidodefrenosWagner"] ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- LIQUIDO DE FRENOS WAGNER -->
                                <!-- FILTROS FRAM -->
                                <?php if ($registros[$i]["FiltrosFram"] == "SI") : ?>
                                    <h6> <?php echo $registros[$i]["cntFiltrosFram"] ?></h6>
                                    <?php $ctn8 = $registros[$i]["cntFiltrosFram"] ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- FILTROS FRAM -->
                                <!-- CABLESBB -->
                                <?php if ($registros[$i]["CablesBB"] == "SI") : ?>
                                    <h6> <?php echo $registros[$i]["cntCablesBB"] ?></h6>
                                    <?php $ctn9 = $registros[$i]["cntCablesBB"] ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- CABLESBB -->
                            </td>
                            <td>
                                <h6>$ <?php echo $registros[$i]["valor_hora"] ?></h6>
                                <!-- PRODUCTO ABRO -->
                                <?php if ($registros[$i]["ProductoAbro"] == "SI") : ?>
                                    <h6>$ 642400</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- PRODUCTO ABRO -->
                                <!-- FAJAS SUPERBELT -->
                                <?php if ($registros[$i]["FajasSuperbelt"] == "SI") : ?>
                                    <h6>$ 800000</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- FAJAS SUPERBELT -->
                                <!-- FAJAS GATES -->
                                <?php if ($registros[$i]["FajasGates"] == "SI") : ?>
                                    <h6>$ 481800</h6>

                                <?php else : ?>
                                <?php endif ?>
                                <!-- FAJAS GATES -->
                                <!-- BUJIAS CHAMPION -->
                                <?php if ($registros[$i]["BujiasChampion"] == "SI") : ?>
                                    <h6>$ 401500</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- BUJIAS CHAMPION -->
                                <!-- PASTILLAS HPS -->
                                <?php if ($registros[$i]["PastillasHPS"] == "SI") : ?>
                                    <h6>$ 96360</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- PASTILLAS HPS -->
                                <!-- ABRAZADERA SIDEAL -->
                                <?php if ($registros[$i]["Abrazaderasideal"] == "SI") : ?>
                                    <h6>$ 80300</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- ABRAZADERA SIDEAL -->
                                <!-- LIQUIDO DE FRENOS WAGNER -->
                                <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                    <h6>$ 80300</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- LIQUIDO DE FRENOS WAGNER -->
                                <!-- FILTROS FRAM -->
                                <?php if ($registros[$i]["FiltrosFram"] == "SI") : ?>
                                    <h6>$ 120450</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- FILTROS FRAM -->
                                <!-- CABLESBB -->
                                <?php if ($registros[$i]["CablesBB"] == "SI") : ?>
                                    <h6>$ 160600</h6>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- CABLESBB -->
                            </td>
                            <td>
                                <h6>$ <?php echo $totallabor ?></h6>
                                <?php if ($registros[$i]["ProductoAbro"] == "SI") : ?>
                                    <h6>$<?php echo $registros[$i]["cntProductoAbro"] * 62400 ?></h6>
                                    <?php $gt1 = $registros[$i]["cntProductoAbro"] * 62400 ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- PRODUCTO ABRO -->
                                <!-- FAJAS SUPERBELT -->
                                <?php if ($registros[$i]["FajasSuperbelt"] == "SI") : ?>
                                    <h6>$ <?php echo $registros[$i]["cntFajasSuperbelt"] * 80000 ?></h6>
                                    <?php $gt2 = $registros[$i]["cntFajasSuperbelt"] * 80000 ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- FAJAS SUPERBELT -->
                                <!-- FAJAS GATES -->
                                <?php if ($registros[$i]["FajasGates"] == "SI") : ?>
                                    <h6>$ <?php echo $registros[$i]["cntFajasGates"] * 48000 ?></h6>
                                    <?php $gt3 = $registros[$i]["cntFajasGates"] * 48000 ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- FAJAS GATES -->
                                <!-- BUJIAS CHAMPION -->
                                <?php if ($registros[$i]["BujiasChampion"] == "SI") : ?>
                                    <h6>$ <?php echo $registros[$i]["cntBujiasChampion"] * 40500 ?></h6>
                                    <?php $gt4 = $registros[$i]["cntBujiasChampion"] * 40500 ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- BUJIAS CHAMPION -->
                                <!-- PASTILLAS HPS -->
                                <?php if ($registros[$i]["PastillasHPS"] == "SI") : ?>
                                    <h6>$ <?php echo $registros[$i]["cntPastillasHPS"] * 90000 ?></h6>
                                    <?php $gt5 = $registros[$i]["cntPastillasHPS"] * 90000 ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- PASTILLAS HPS -->
                                <!-- ABRAZADERA SIDEAL -->
                                <?php if ($registros[$i]["Abrazaderasideal"] == "SI") : ?>
                                    <h6>$ <?php echo $registros[$i]["cntAbrazaderasideal"] * 80000 ?></h6>
                                    <?php $gt6 = $registros[$i]["cntAbrazaderasideal"] * 80000 ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- ABRAZADERA SIDEAL -->
                                <!-- LIQUIDO DE FRENOS WAGNER -->
                                <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                    <h6>$ <?php echo $registros[$i]["cntLiquidodefrenosWagner"] * 90500 ?></h6>
                                    <?php $gt7 = $registros[$i]["cntLiquidodefrenosWagner"] * 90500 ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- LIQUIDO DE FRENOS WAGNER -->
                                <!-- FILTROS FRAM -->
                                <?php if ($registros[$i]["FiltrosFram"] == "SI") : ?>
                                    <h6>$ <?php echo $registros[$i]["cntFiltrosFram"] * 30000 ?></h6>
                                    <?php $gt8 = $registros[$i]["cntFiltrosFram"] * 30000 ?>
                                <?php else : ?>
                                <?php endif ?>
                                <!-- FILTROS FRAM -->
                                <!-- CABLESBB -->
                                <?php if ($registros[$i]["CablesBB"] == "SI") : ?>
                                    <h6>$ <?php echo $registros[$i]["cntCablesBB"] * 160000 ?></h6>
                                    <?php $gt9 = $registros[$i]["cntCablesBB"] * 160000 ?>
                                <?php else : ?>
                                <?php endif ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row text-center mt-4">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-11">
                        <?php
                        $subtotalantes = $totallabor + $gt1 + $gt2 + $gt3 + $gt4 + $gt5 + $gt6 + $gt7 + $gt8 + $gt9;
                        $iva = round($subtotalantes * 19 / 100); ?>
                        <h5><strong>Sub total:</strong> $ <?php echo $totallabor + $gt1 + $gt2 + $gt3 + $gt4 + $gt5 + $gt6 + $gt7 + $gt8 + $gt9 ?> </h5>
                        <input type="text" class="d-none" value="<?php echo $subtotalantes ?>" name="total_antes_iva">
                        <h5><strong>Iva(19.00%):</strong> $ <?php echo $iva ?> </h5>
                        <input type="text" class="d-none" value="<?php echo $iva ?>" name="iva">
                        <h4><strong>Total</strong> $ <?php echo $subtotalantes + $iva ?></h4>
                        <input type="text" class="d-none" value="<?php echo $subtotalantes + $iva ?>" name="total_despues_iva">
                    </div>
                </div>
            <?php endif ?>
        <?php endfor ?>
    <?php endif ?>
</div>

<?php
$html = ob_get_clean();
//echo $html;
?>
<?php
use Dompdf\Dompdf;
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);
$dompdf->loadHtml($html);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('letter');
// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF to Browser
if (isset($_GET["pagina"])) {
    for ($i = 0; $i < count($facturas); $i++) {
        if ($_GET["pagina"] == $facturas[$i]["numeroorden"]) {
            $dompdf->stream($facturas[$i]["nombrecliente"] . '-' . $facturas[$i]["numeroorden"] . ".pdf", array("Attachment" => false));
            echo $dompdf->output();
        }
    }
}
?>