<div class="content-wrapper">
    <?php
    include "vista/modulos/breadcrumb.php";
    $registros = controladordatos::traerregistros();
    ?>
    <section class="content">
        <?php if (isset($_GET["pagina"])) : ?>
            <?php for ($i = 0; $i < count($registros); $i++) : ?>
                <?php if ($_GET["pagina"] == $registros[$i]["llave"]) : ?>
                    <div class="container-fluid ">
                        <div class="row text-center">
                            <div class="col-lg-4 col-12 mt-3">
                                <h1>Cliente</h1>
                                <h2><?php echo $registros[$i]["nombre_cliente"] ?></h2>
                                <hr class="separador">
                                <h1>Detalles del vehiculo</h1>
                                <div class="row mt-3 rowdetails">
                                    <div class="col-lg-3">
                                        <h4>Marca Auto</h4>
                                        <h5><?php echo $registros[$i]["marca_auto"] ?></h5>
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Placa</h4>
                                        <h5><?php echo $registros[$i]["placa"] ?></h5>
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Modelo</h4>
                                        <h5><?php echo $registros[$i]["modelo"] ?></h5>
                                    </div>
                                    <div class="col-lg-3">
                                        <h4>Color</h4>
                                        <h5><?php echo $registros[$i]["color"] ?></h5>
                                    </div>
                                </div>
                                <div class="row mt-4 rowdetails gallery mx-auto d-block">
                                    <a id="single_image" href="<?php echo $registros[$i]["foto"] ?>">
                                        <img src="<?php echo $registros[$i]["foto"] ?>" class="img-fluid img-thumbnail " alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- DESKTOP -->
                            <div class="col-lg-4 col-12 mt-3 d-none d-sm-none d-md-block d-lg-block d-xl-block">
                                <h1>Empleado A Cargo</h1>
                                <h2><?php echo $registros[$i]["empleado_a_cargo"] ?></h2>
                                <hr class="separador">
                                <h1>Orden de Trabajo # <?php echo $registros[$i]["numeroorden"] ?></h1>
                                <div class="row mt-3 rowdetails">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Producto</th>
                                                <th>cntd</th>
                                                <th>precio unidad</th>
                                                <th>total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <!-- PRODUCTO ABRO -->
                                                    <?php if ($registros[$i]["ProductoAbro"] == "SI") : ?>
                                                        <h5>Producto Abrio</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PRODUCTO ABRO -->
                                                    <!-- FAJAS SUPERBELT -->
                                                    <?php if ($registros[$i]["FajasSuperbelt"] == "SI") : ?>
                                                        <h5>Fajas Super Belt</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS SUPERBELT -->
                                                    <!-- FAJAS GATES -->
                                                    <?php if ($registros[$i]["FajasGates"] == "SI") : ?>
                                                        <h5>Fajas Gates</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS GATES -->
                                                    <!-- BUJIAS CHAMPION -->
                                                    <?php if ($registros[$i]["BujiasChampion"] == "SI") : ?>
                                                        <h5>Bujias Champion</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- BUJIAS CHAMPION -->
                                                    <!-- PASTILLAS HPS -->
                                                    <?php if ($registros[$i]["PastillasHPS"] == "SI") : ?>
                                                        <h5>Pastillas Hps</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PASTILLAS HPS -->
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <?php if ($registros[$i]["Abrazaderasideal"] == "SI") : ?>
                                                        <h5>Abrazadera Sideal</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                                        <h5>Liquido de Frenos</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <!-- FILTROS FRAM -->
                                                    <?php if ($registros[$i]["FiltrosFram"] == "SI") : ?>
                                                        <h5>Filtros Fram</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FILTROS FRAM -->
                                                    <!-- CABLESBB -->
                                                    <?php if ($registros[$i]["CablesBB"] == "SI") : ?>
                                                        <h5>Cables BB</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- CABLESBB -->
                                                </td>
                                                <td>
                                                    <!-- PRODUCTO ABRO -->
                                                    <?php if ($registros[$i]["ProductoAbro"] == "SI") : ?>
                                                        <h5> <?php echo $registros[$i]["cntProductoAbro"] ?></h5>
                                                        <?php $ctn1 = $registros[$i]["cntProductoAbro"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PRODUCTO ABRO -->
                                                    <!-- FAJAS SUPERBELT -->
                                                    <?php if ($registros[$i]["FajasSuperbelt"] == "SI") : ?>
                                                        <h5> <?php echo $registros[$i]["cntFajasSuperbelt"] ?></h5>
                                                        <?php $ctn2 = $registros[$i]["cntFajasSuperbelt"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS SUPERBELT -->
                                                    <!-- FAJAS GATES -->
                                                    <?php if ($registros[$i]["FajasGates"] == "SI") : ?>
                                                        <h5><?php echo $registros[$i]["cntFajasGates"] ?></h5>
                                                        <?php $ctn3 = $registros[$i]["cntFajasGates"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS GATES -->
                                                    <!-- BUJIAS CHAMPION -->
                                                    <?php if ($registros[$i]["BujiasChampion"] == "SI") : ?>

                                                        <h5><?php echo $registros[$i]["cntBujiasChampion"] ?></h5>
                                                        <?php $ctn4 = $registros[$i]["cntBujiasChampion"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- BUJIAS CHAMPION -->
                                                    <!-- PASTILLAS HPS -->
                                                    <?php if ($registros[$i]["PastillasHPS"] == "SI") : ?>
                                                        <h5><?php echo $registros[$i]["cntPastillasHPS"] ?></h5>
                                                        <?php $ctn5 = $registros[$i]["cntPastillasHPS"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PASTILLAS HPS -->
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <?php if ($registros[$i]["Abrazaderasideal"] == "SI") : ?>
                                                        <h5><?php echo $registros[$i]["cntAbrazaderasideal"] ?></h5>
                                                        <?php $ctn6 = $registros[$i]["cntAbrazaderasideal"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                                        <h5><?php echo $registros[$i]["cntLiquidodefrenosWagner"] ?></h5>
                                                        <?php $ctn7 = $registros[$i]["cntLiquidodefrenosWagner"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <!-- FILTROS FRAM -->
                                                    <?php if ($registros[$i]["FiltrosFram"] == "SI") : ?>
                                                        <h5><?php echo $registros[$i]["cntFiltrosFram"] ?></h5>
                                                        <?php $ctn8 = $registros[$i]["cntFiltrosFram"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FILTROS FRAM -->
                                                    <!-- CABLESBB -->
                                                    <?php if ($registros[$i]["CablesBB"] == "SI") : ?>
                                                        <h5><?php echo $registros[$i]["cntCablesBB"] ?></h5>
                                                        <?php $ctn9 = $registros[$i]["cntCablesBB"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- CABLESBB -->
                                                </td>
                                                <td>
                                                    <!-- PRODUCTO ABRO -->
                                                    <?php if ($registros[$i]["ProductoAbro"] == "SI") : ?>
                                                        <h5>$ 62400 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PRODUCTO ABRO -->
                                                    <!-- FAJAS SUPERBELT -->
                                                    <?php if ($registros[$i]["FajasSuperbelt"] == "SI") : ?>
                                                        <h5>$ 80000 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS SUPERBELT -->
                                                    <!-- FAJAS GATES -->
                                                    <?php if ($registros[$i]["FajasGates"] == "SI") : ?>
                                                        <h5>$ 48000 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS GATES -->
                                                    <!-- BUJIAS CHAMPION -->
                                                    <?php if ($registros[$i]["BujiasChampion"] == "SI") : ?>
                                                        <h5>$ 40500 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- BUJIAS CHAMPION -->
                                                    <!-- PASTILLAS HPS -->
                                                    <?php if ($registros[$i]["PastillasHPS"] == "SI") : ?>
                                                        <h5>$ 90000 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PASTILLAS HPS -->
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <?php if ($registros[$i]["Abrazaderasideal"] == "SI") : ?>
                                                        <h5>$ 80000 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                                        <h5>$ 90500 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <!-- FILTROS FRAM -->
                                                    <?php if ($registros[$i]["FiltrosFram"] == "SI") : ?>
                                                        <h5>$ 30000 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FILTROS FRAM -->
                                                    <!-- CABLESBB -->
                                                    <?php if ($registros[$i]["CablesBB"] == "SI") : ?>
                                                        <h5>$ 160000 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- CABLESBB -->
                                                </td>
                                                <td>
                                                    <!-- PRODUCTO ABRO -->
                                                    <?php if ($registros[$i]["ProductoAbro"] == "SI") : ?>
                                                        <h5>$<?php echo $registros[$i]["cntProductoAbro"] * 62400 ?></h5>
                                                        <?php $gt1 = $registros[$i]["cntProductoAbro"] * 62400 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PRODUCTO ABRO -->
                                                    <!-- FAJAS SUPERBELT -->
                                                    <?php if ($registros[$i]["FajasSuperbelt"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntFajasSuperbelt"] * 80000 ?></h5>
                                                        <?php $gt2 = $registros[$i]["cntFajasSuperbelt"] * 80000 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS SUPERBELT -->
                                                    <!-- FAJAS GATES -->
                                                    <?php if ($registros[$i]["FajasGates"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntFajasGates"] * 48000 ?></h5>
                                                        <?php $gt3 = $registros[$i]["cntFajasGates"] * 48000 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS GATES -->
                                                    <!-- BUJIAS CHAMPION -->
                                                    <?php if ($registros[$i]["BujiasChampion"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntBujiasChampion"] * 40500 ?></h5>
                                                        <?php $gt4 = $registros[$i]["cntBujiasChampion"] * 40500 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- BUJIAS CHAMPION -->
                                                    <!-- PASTILLAS HPS -->
                                                    <?php if ($registros[$i]["PastillasHPS"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntPastillasHPS"] * 90000 ?></h5>
                                                        <?php $gt5 = $registros[$i]["cntPastillasHPS"] * 90000 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PASTILLAS HPS -->
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <?php if ($registros[$i]["Abrazaderasideal"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntAbrazaderasideal"] * 80000 ?></h5>
                                                        <?php $gt6 = $registros[$i]["cntAbrazaderasideal"] * 80000 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntLiquidodefrenosWagner"] * 90500 ?></h5>
                                                        <?php $gt7 = $registros[$i]["cntLiquidodefrenosWagner"] * 90500 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <!-- FILTROS FRAM -->
                                                    <?php if ($registros[$i]["FiltrosFram"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntFiltrosFram"] * 30000 ?></h5>
                                                        <?php $gt8 = $registros[$i]["cntFiltrosFram"] * 30000 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FILTROS FRAM -->
                                                    <!-- CABLESBB -->
                                                    <?php if ($registros[$i]["CablesBB"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntCablesBB"] * 160000 ?></h5>
                                                        <?php $gt9 = $registros[$i]["cntCablesBB"] * 160000 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- CABLESBB -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row rowdetails mt-4">
                                    <div class="col-lg-6">
                                        <h1>TOTAL ITEMS</h1>
                                        <h3><?php echo $ctn1 + $ctn2 + $ctn3 + $ctn4 + $ctn5 + $ctn6 + $ctn7 + $ctn8 + $ctn9 ?></h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <h1>SUB TOTAL</h1>
                                        <h3>$ <?php echo $gt1 + $gt2 + $gt3 + $gt4 + $gt5 + $gt6 + $gt7 + $gt8 + $gt9 ?></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- TABLET -->
                            <div class="col-lg-4 col-12 mt-3 d-none d-sm-block d-md-none d-lg-none d-xl-none">
                                <h1>Empleado A Cargo</h1>
                                <h2><?php echo $registros[$i]["empleado_a_cargo"] ?></h2>
                                <hr class="separador">
                                <h1>Orden de Trabajo # <?php echo $registros[$i]["numeroorden"] ?></h1>
                                <div class="row mt-3 rowdetails">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Producto</th>
                                                <th>cntd</th>
                                                <th>precio unidad</th>
                                                <th>total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <!-- PRODUCTO ABRO -->
                                                    <?php if ($registros[$i]["ProductoAbro"] == "SI") : ?>
                                                        <h5>Producto Abrio</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PRODUCTO ABRO -->
                                                    <!-- FAJAS SUPERBELT -->
                                                    <?php if ($registros[$i]["FajasSuperbelt"] == "SI") : ?>
                                                        <h5>Fajas Super Belt</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS SUPERBELT -->
                                                    <!-- FAJAS GATES -->
                                                    <?php if ($registros[$i]["FajasGates"] == "SI") : ?>
                                                        <h5>Fajas Gates</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS GATES -->
                                                    <!-- BUJIAS CHAMPION -->
                                                    <?php if ($registros[$i]["BujiasChampion"] == "SI") : ?>
                                                        <h5>Bujias Champion</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- BUJIAS CHAMPION -->
                                                    <!-- PASTILLAS HPS -->
                                                    <?php if ($registros[$i]["PastillasHPS"] == "SI") : ?>
                                                        <h5>Pastillas Hps</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PASTILLAS HPS -->
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <?php if ($registros[$i]["Abrazaderasideal"] == "SI") : ?>
                                                        <h5>Abrazadera Sideal</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                                        <h5>Liquido de Frenos</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <!-- FILTROS FRAM -->
                                                    <?php if ($registros[$i]["FiltrosFram"] == "SI") : ?>
                                                        <h5>Filtros Fram</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FILTROS FRAM -->
                                                    <!-- CABLESBB -->
                                                    <?php if ($registros[$i]["CablesBB"] == "SI") : ?>
                                                        <h5>Cables BB</h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- CABLESBB -->
                                                </td>
                                                <td>
                                                    <!-- PRODUCTO ABRO -->
                                                    <?php if ($registros[$i]["ProductoAbro"] == "SI") : ?>
                                                        <h5> <?php echo $registros[$i]["cntProductoAbro"] ?></h5>
                                                        <?php $ctn1 = $registros[$i]["cntProductoAbro"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PRODUCTO ABRO -->
                                                    <!-- FAJAS SUPERBELT -->
                                                    <?php if ($registros[$i]["FajasSuperbelt"] == "SI") : ?>
                                                        <h5> <?php echo $registros[$i]["cntFajasSuperbelt"] ?></h5>
                                                        <?php $ctn2 = $registros[$i]["cntFajasSuperbelt"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS SUPERBELT -->
                                                    <!-- FAJAS GATES -->
                                                    <?php if ($registros[$i]["FajasGates"] == "SI") : ?>
                                                        <h5><?php echo $registros[$i]["cntFajasGates"] ?></h5>
                                                        <?php $ctn3 = $registros[$i]["cntFajasGates"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS GATES -->
                                                    <!-- BUJIAS CHAMPION -->
                                                    <?php if ($registros[$i]["BujiasChampion"] == "SI") : ?>

                                                        <h5><?php echo $registros[$i]["cntBujiasChampion"] ?></h5>
                                                        <?php $ctn4 = $registros[$i]["cntBujiasChampion"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- BUJIAS CHAMPION -->
                                                    <!-- PASTILLAS HPS -->
                                                    <?php if ($registros[$i]["PastillasHPS"] == "SI") : ?>
                                                        <h5><?php echo $registros[$i]["cntPastillasHPS"] ?></h5>
                                                        <?php $ctn5 = $registros[$i]["cntPastillasHPS"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PASTILLAS HPS -->
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <?php if ($registros[$i]["Abrazaderasideal"] == "SI") : ?>
                                                        <h5><?php echo $registros[$i]["cntAbrazaderasideal"] ?></h5>
                                                        <?php $ctn6 = $registros[$i]["cntAbrazaderasideal"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                                        <h5><?php echo $registros[$i]["cntLiquidodefrenosWagner"] ?></h5>
                                                        <?php $ctn7 = $registros[$i]["cntLiquidodefrenosWagner"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <!-- FILTROS FRAM -->
                                                    <?php if ($registros[$i]["FiltrosFram"] == "SI") : ?>
                                                        <h5><?php echo $registros[$i]["cntFiltrosFram"] ?></h5>
                                                        <?php $ctn8 = $registros[$i]["cntFiltrosFram"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FILTROS FRAM -->
                                                    <!-- CABLESBB -->
                                                    <?php if ($registros[$i]["CablesBB"] == "SI") : ?>
                                                        <h5><?php echo $registros[$i]["cntCablesBB"] ?></h5>
                                                        <?php $ctn9 = $registros[$i]["cntCablesBB"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- CABLESBB -->
                                                </td>
                                                <td>
                                                    <!-- PRODUCTO ABRO -->
                                                    <?php if ($registros[$i]["ProductoAbro"] == "SI") : ?>
                                                        <h5>$ 62400 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PRODUCTO ABRO -->
                                                    <!-- FAJAS SUPERBELT -->
                                                    <?php if ($registros[$i]["FajasSuperbelt"] == "SI") : ?>
                                                        <h5>$ 80000 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS SUPERBELT -->
                                                    <!-- FAJAS GATES -->
                                                    <?php if ($registros[$i]["FajasGates"] == "SI") : ?>
                                                        <h5>$ 48000 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS GATES -->
                                                    <!-- BUJIAS CHAMPION -->
                                                    <?php if ($registros[$i]["BujiasChampion"] == "SI") : ?>
                                                        <h5>$ 40500 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- BUJIAS CHAMPION -->
                                                    <!-- PASTILLAS HPS -->
                                                    <?php if ($registros[$i]["PastillasHPS"] == "SI") : ?>
                                                        <h5>$ 90000 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PASTILLAS HPS -->
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <?php if ($registros[$i]["Abrazaderasideal"] == "SI") : ?>
                                                        <h5>$ 80000 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                                        <h5>$ 90500 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <!-- FILTROS FRAM -->
                                                    <?php if ($registros[$i]["FiltrosFram"] == "SI") : ?>
                                                        <h5>$ 30000 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FILTROS FRAM -->
                                                    <!-- CABLESBB -->
                                                    <?php if ($registros[$i]["CablesBB"] == "SI") : ?>
                                                        <h5>$ 160000 </h5>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- CABLESBB -->
                                                </td>
                                                <td>
                                                    <!-- PRODUCTO ABRO -->
                                                    <?php if ($registros[$i]["ProductoAbro"] == "SI") : ?>
                                                        <h5>$<?php echo $registros[$i]["cntProductoAbro"] * 62400 ?></h5>
                                                        <?php $gt1 = $registros[$i]["cntProductoAbro"] * 62400 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PRODUCTO ABRO -->
                                                    <!-- FAJAS SUPERBELT -->
                                                    <?php if ($registros[$i]["FajasSuperbelt"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntFajasSuperbelt"] * 80000 ?></h5>
                                                        <?php $gt2 = $registros[$i]["cntFajasSuperbelt"] * 80000 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS SUPERBELT -->
                                                    <!-- FAJAS GATES -->
                                                    <?php if ($registros[$i]["FajasGates"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntFajasGates"] * 48000 ?></h5>
                                                        <?php $gt3 = $registros[$i]["cntFajasGates"] * 48000 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS GATES -->
                                                    <!-- BUJIAS CHAMPION -->
                                                    <?php if ($registros[$i]["BujiasChampion"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntBujiasChampion"] * 40500 ?></h5>
                                                        <?php $gt4 = $registros[$i]["cntBujiasChampion"] * 40500 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- BUJIAS CHAMPION -->
                                                    <!-- PASTILLAS HPS -->
                                                    <?php if ($registros[$i]["PastillasHPS"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntPastillasHPS"] * 90000 ?></h5>
                                                        <?php $gt5 = $registros[$i]["cntPastillasHPS"] * 90000 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PASTILLAS HPS -->
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <?php if ($registros[$i]["Abrazaderasideal"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntAbrazaderasideal"] * 80000 ?></h5>
                                                        <?php $gt6 = $registros[$i]["cntAbrazaderasideal"] * 80000 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntLiquidodefrenosWagner"] * 90500 ?></h5>
                                                        <?php $gt7 = $registros[$i]["cntLiquidodefrenosWagner"] * 90500 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <!-- FILTROS FRAM -->
                                                    <?php if ($registros[$i]["FiltrosFram"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntFiltrosFram"] * 30000 ?></h5>
                                                        <?php $gt8 = $registros[$i]["cntFiltrosFram"] * 30000 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FILTROS FRAM -->
                                                    <!-- CABLESBB -->
                                                    <?php if ($registros[$i]["CablesBB"] == "SI") : ?>
                                                        <h5>$ <?php echo $registros[$i]["cntCablesBB"] * 160000 ?></h5>
                                                        <?php $gt9 = $registros[$i]["cntCablesBB"] * 160000 ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- CABLESBB -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row rowdetails mt-4">
                                    <div class="col-lg-6">
                                        <h1>TOTAL ITEMS</h1>
                                        <h3><?php echo $ctn1 + $ctn2 + $ctn3 + $ctn4 + $ctn5 + $ctn6 + $ctn7 + $ctn8 + $ctn9 ?></h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <h1>SUB TOTAL</h1>
                                        <h3>$ <?php echo $gt1 + $gt2 + $gt3 + $gt4 + $gt5 + $gt6 + $gt7 + $gt8 + $gt9 ?></h3>
                                    </div>
                                </div>
                            </div>
                            <!-- MOBIL -->
                            <div class="col-lg-4 col-12 mt-3 d-block d-sm-none d-md-none d-lg-none d-xl-none">
                                <h1>Empleado A Cargo</h1>
                                <h2><?php echo $registros[$i]["empleado_a_cargo"] ?></h2>
                                <hr class="separador">
                                <h1>Orden de Trabajo # <?php echo $registros[$i]["numeroorden"] ?></h1>
                                <div class="row mt-3 rowdetails">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Producto</th>
                                                <th>cntd</th>
                                                <th>total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <!-- PRODUCTO ABRO -->
                                                    <?php if ($registros[$i]["ProductoAbro"] == "SI") : ?>
                                                        <h6>Producto A</h6>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PRODUCTO ABRO -->
                                                    <!-- FAJAS SUPERBELT -->
                                                    <?php if ($registros[$i]["FajasSuperbelt"] == "SI") : ?>
                                                        <h6>Fajas Super B</h6>
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
                                                        <h6>Bujias Ch</h6>
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
                                                        <h6>Abrazadera S</h6>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                                        <h6>Liquido de F</h6>
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
                                                        <h6><?php echo $registros[$i]["cntFajasGates"] ?></h6>
                                                        <?php $ctn3 = $registros[$i]["cntFajasGates"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS GATES -->
                                                    <!-- BUJIAS CHAMPION -->
                                                    <?php if ($registros[$i]["BujiasChampion"] == "SI") : ?>

                                                        <h6><?php echo $registros[$i]["cntBujiasChampion"] ?></h6>
                                                        <?php $ctn4 = $registros[$i]["cntBujiasChampion"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- BUJIAS CHAMPION -->
                                                    <!-- PASTILLAS HPS -->
                                                    <?php if ($registros[$i]["PastillasHPS"] == "SI") : ?>
                                                        <h6><?php echo $registros[$i]["cntPastillasHPS"] ?></h6>
                                                        <?php $ctn5 = $registros[$i]["cntPastillasHPS"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PASTILLAS HPS -->
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <?php if ($registros[$i]["Abrazaderasideal"] == "SI") : ?>
                                                        <h6><?php echo $registros[$i]["cntAbrazaderasideal"] ?></h6>
                                                        <?php $ctn6 = $registros[$i]["cntAbrazaderasideal"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                                        <h6><?php echo $registros[$i]["cntLiquidodefrenosWagner"] ?></h6>
                                                        <?php $ctn7 = $registros[$i]["cntLiquidodefrenosWagner"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <!-- FILTROS FRAM -->
                                                    <?php if ($registros[$i]["FiltrosFram"] == "SI") : ?>
                                                        <h6><?php echo $registros[$i]["cntFiltrosFram"] ?></h6>
                                                        <?php $ctn8 = $registros[$i]["cntFiltrosFram"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FILTROS FRAM -->
                                                    <!-- CABLESBB -->
                                                    <?php if ($registros[$i]["CablesBB"] == "SI") : ?>
                                                        <h6><?php echo $registros[$i]["cntCablesBB"] ?></h6>
                                                        <?php $ctn9 = $registros[$i]["cntCablesBB"] ?>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- CABLESBB -->
                                                </td>
                                                
                                                <td>
                                                    <!-- PRODUCTO ABRO -->
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
                                                    <!-- CABLESBB -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row rowdetails mt-4">
                                    <div class="col-lg-6">
                                        <h1>TOTAL ITEMS</h1>
                                        <h3><?php echo $ctn1 + $ctn2 + $ctn3 + $ctn4 + $ctn5 + $ctn6 + $ctn7 + $ctn8 + $ctn9 ?></h3>
                                    </div>
                                    <div class="col-lg-6">
                                        <h1>SUB TOTAL</h1>
                                        <h3>$ <?php echo $gt1 + $gt2 + $gt3 + $gt4 + $gt5 + $gt6 + $gt7 + $gt8 + $gt9 ?></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 ">
                                <h1>Hora Inicial Del Trabajo</h1>
                                <h2><?php echo $registros[$i]["fecha"] ?></h2>
                                <hr class="separador">
                                <h1>Detalles de Obra Labor</h1>
                                <div class="row rowdetails mt-3">
                                    <div class="col-lg-6">
                                        <h4>Valor Hora</h4>
                                        <h4>Total Horas Labor</h4>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4>$<?php echo $registros[$i]["valor_hora"] ?></h4>
                                        <h4><?php echo $registros[$i]["hora"] ?></h4>
                                        <?php
                                        $valorhora = $registros[$i]["valor_hora"];
                                        $totalhoras = $registros[$i]["hora"];
                                        $totallabor = $valorhora * $totalhoras;
                                        ?>
                                    </div>
                                </div>
                                <div class="row rowdetails mt-4">
                                    <div class="col-12">
                                        <h1>Gran Total Antes De Iva</h1>
                                        <h3>$ <?php echo $totallabor + $gt1 + $gt2 + $gt3 + $gt4 + $gt5 + $gt6 + $gt7 + $gt8 + $gt9 ?> </h3>
                                    </div>
                                </div>
                                <div class="row p-3">
                                    <?php
                                    $item = "llave";
                                    $valor = $rutas[0];
                                    $facturas2 = controladordatos::ctrtraerfacturas2($item, $valor);

                                    ?>
                                    <!-- <pre class="bg-light"><?php print_r($facturas2) ?></pre> -->
                                    <?php if (isset($_GET["pagina"])) : ?>

                                        <?php if ($_GET["pagina"] == $facturas2[13]) : ?>
                                            <div class="col-lg-12 mt-5">
                                                <a href="<?php echo $facturas2[1] ?>" data-toggle="modal" data-target="#facturagenerada" class="btn btn-danger">FACTURA GENERADA</a>
                                                <a href="<?php echo $facturas2[1] ?>" class="btn btn-success">VER EN PDF</a>
                                            </div>
                                        <?php else : ?>
                                            <div class="col-lg-12 mt-5">
                                                <button class="btn btn-primary" data-toggle="modal" data-target="#generarfactura">GENERAR FACTURA</button>
                                            </div>
                                        <?php endif ?>

                                    <?php endif ?>

                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->

                        <div class="modal" id="generarfactura">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Factura de venta orden # <?php echo $registros[$i]["numeroorden"] ?></h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <form method="post">
                                        <div class="modal-body text-center">
                                            <img src="vista/dist/img/Poligramlogo.png" alt="" class="img-fluid  mx-auto d-block" style="width:20%" ;>

                                            <h1><strong>Empresa Ejemplo</strong></h1>
                                            <h3>2558896556-8</h3>
                                            <h4>Avenida quinta</h4>
                                            <h4><strong>Teléfono: </strong>3104018593</h4>
                                            <h4>empresa@ejemplo.com</h4>
                                            <h4><strong>Sitio Web:</strong> www.empresaejemplo.com</h4>
                                            <h4><strong>Régimen:</strong> Régimen Común</h4>
                                            <hr class="factura">
                                            <input type="text" class="d-none" value="<?php echo $registros[$i]["nombre_cliente"] ?>" name="nombrecliente">
                                            <h1><strong>Cliente: <?php echo $registros[$i]["nombre_cliente"] ?></strong></h1>
                                            <input type="text" class="d-none" value="<?php echo $registros[$i]["telefono"] ?>" name="telefono">
                                            <h4><strong>Télefono Cliente: </strong><?php echo $registros[$i]["telefono"] ?></h4>
                                            <input type="text" class="d-none" value="<?php echo $registros[$i]["cedula"] ?>" name="cedula">
                                            <h4><strong>Identificación: </strong><?php echo $registros[$i]["cedula"] ?></h4>
                                            <hr class="factura">
                                            <h3>Factura</h3>
                                            <?php
                                            date_default_timezone_set('America/Bogota');
                                            $hoy = getdate();
                                            $fechafinal = $hoy["year"] . '-' . $hoy["mon"] . '-' . $hoy["mday"] . ' ' . $hoy["hours"] . ':' . $hoy["minutes"] . ':' . $hoy["seconds"]; ?>
                                            <input type="text" class="d-none" value="<?php echo  $fechafinal ?>" name="fechafinal">
                                            <h3><span>&#8470;</span> <?php echo $registros[$i]["numeroorden"] ?></h3>
                                            <input type="text" class="d-none" value="<?php echo $registros[$i]["numeroorden"] ?>" name="numeroorden">
                                            <h3><span>Fecha Inicio: </span><?php echo $registros[$i]["fecha"] ?></h3>
                                            <input type="text" class="d-none" value="<?php echo $registros[$i]["fecha"] ?>" name="fechainicio">
                                            <h3><span>Fecha Final: </span><?php echo $fechafinal ?></h3>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h3><span>Metodo de Pago:</span></h3>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <select class="custom-select" required name="metododepago">
                                                            <option></option>
                                                            <option>Tarjeta Credito</option>
                                                            <option>Tarjeta Debito</option>
                                                            <option>Efectivo</option>
                                                            <option>Nequi</option>
                                                            <option>Daviplata</option>
                                                            <option>Binance</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--row-->
                                            <h3><strong>Vendedor:</strong> <?php echo $registros[$i]["empleado_a_cargo"] ?></h3>
                                            <input type="text" class="d-none" value="<?php echo $registros[$i]["empleado_a_cargo"] ?>" name="vendedor">
                                            <div class="row mt-5 text-center">
                                                <div class="col-lg-4">
                                                    <h6>producto</h6>
                                                    <hr class="factura">
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
                                                </div>
                                                <div class="col-lg-2">
                                                    <h5>Cntd</h5>

                                                    <hr class="factura">
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
                                                </div>
                                                <div class="col-lg-3">
                                                    <h5>Precio und</h5>
                                                    <hr class="factura">
                                                    <h6>$ <?php echo $registros[$i]["valor_hora"] ?></h6>
                                                    <!-- PRODUCTO ABRO -->
                                                    <?php if ($registros[$i]["ProductoAbro"] == "SI") : ?>
                                                        <h6>$ 62400</h6>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PRODUCTO ABRO -->
                                                    <!-- FAJAS SUPERBELT -->
                                                    <?php if ($registros[$i]["FajasSuperbelt"] == "SI") : ?>
                                                        <h6>$ 80000</h6>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS SUPERBELT -->
                                                    <!-- FAJAS GATES -->
                                                    <?php if ($registros[$i]["FajasGates"] == "SI") : ?>
                                                        <h6>$ 48000</h6>

                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FAJAS GATES -->
                                                    <!-- BUJIAS CHAMPION -->
                                                    <?php if ($registros[$i]["BujiasChampion"] == "SI") : ?>
                                                        <h6>$ 40500</h6>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- BUJIAS CHAMPION -->
                                                    <!-- PASTILLAS HPS -->
                                                    <?php if ($registros[$i]["PastillasHPS"] == "SI") : ?>
                                                        <h6>$ 90000</h6>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- PASTILLAS HPS -->
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <?php if ($registros[$i]["Abrazaderasideal"] == "SI") : ?>
                                                        <h6>$ 80000</h6>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- ABRAZADERA SIDEAL -->
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                                        <h6>$ 90500</h6>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- LIQUIDO DE FRENOS WAGNER -->
                                                    <!-- FILTROS FRAM -->
                                                    <?php if ($registros[$i]["FiltrosFram"] == "SI") : ?>
                                                        <h6>$ 30000</h6>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- FILTROS FRAM -->
                                                    <!-- CABLESBB -->
                                                    <?php if ($registros[$i]["CablesBB"] == "SI") : ?>
                                                        <h6>$ 160000</h6>
                                                    <?php else : ?>
                                                    <?php endif ?>
                                                    <!-- CABLESBB -->
                                                </div>
                                                <div class="col-lg-3">
                                                    <h5>Total</h5>
                                                    <hr class="factura">
                                                    <!-- PRODUCTO ABRO -->
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
                                                    <!-- CABLESBB -->
                                                </div>
                                            </div>
                                            <!--row-->
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
                                            <!--ROW-->
                                            <div class="row mt-2">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-primary">GENERAR</button>
                                                </div>
                                            </div>

                                        </div>
                                        <?php $guardadfactura = controladordatos::ctrgenerarfactura(); ?>
                                    </form>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($guardadfactura == "ok") : ?>
                            <script>
                                setTimeout(function() {
                                    if (window.history.replaceState) {
                                        window.history.replaceState(null, null, window.location.assign("facturas"));
                                    }
                                }, 2000);
                            </script>
                            <div class="container">
                                <div class="col-lg-12">
                                    <div class="alert alert-success mt-1">Factura Creada</div>
                                </div>
                            </div>

                        <?php endif ?>
                    </div>
                    <!-- The Modal -->
                    <!-- FACTUA GENERADA -->
                    <div class="modal" id="facturagenerada">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Factura Generada orden # <?php echo $registros[$i]["numeroorden"] ?></h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->

                                <div class="modal-body text-center">
                                    <img src="vista/dist/img/Poligramlogo.png" alt="" class="img-fluid  mx-auto d-block" style="width:20%" ;>

                                    <h1><strong>Empresa Ejemplo</strong></h1>
                                    <h3>2558896556-8</h3>
                                    <h4>Avenida quinta</h4>
                                    <h4><strong>Teléfono: </strong>3104018593</h4>
                                    <h4>empresa@ejemplo.com</h4>
                                    <h4><strong>Sitio Web:</strong> www.empresaejemplo.com</h4>
                                    <h4><strong>Régimen:</strong> Régimen Común</h4>
                                    <hr class="factura">
                                    <h1><strong>Cliente: <?php echo $registros[$i]["nombre_cliente"] ?></strong></h1>
                                    <h4><strong>Télefono Cliente: </strong><?php echo $registros[$i]["telefono"] ?></h4>
                                    <h4><strong>Identificación: </strong><?php echo $registros[$i]["cedula"] ?></h4>
                                    <hr class="factura">
                                    <h3>Factura</h3>


                                    <h3><span>&#8470;</span> <?php echo $registros[$i]["numeroorden"] ?></h3>

                                    <h3><span>Fecha Inicio: </span><?php echo $registros[$i]["fecha"] ?></h3>
                                    <?php $facturas = controladordatos::ctrtraerfacturas(); ?>
                                    <?php if (isset($_GET["pagina"])) : ?>
                                        <?php for ($i = 0; $i < count($facturas); $i++) : ?>
                                            <?php if ($_GET["pagina"] == $facturas[$i]["llave"]) : ?>
                                                <h3><span>Fecha Final: </span><?php echo $facturas[$i]["fechafinal"] ?></h3>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h3><span>Metodo de Pago:</span></h3>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">

                                                            <h2><?php echo $facturas[$i]["metododepago"] ?></h2>

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--row-->
                                                <h3><strong>Vendedor:</strong> <?php echo $facturas[$i]["vendedor"] ?></h3>
                                            <?php endif ?>
                                        <?php endfor ?>
                                    <?php endif ?>
                                    <?php if (isset($_GET["pagina"])) : ?>
                                        <?php for ($i = 0; $i < count($registros); $i++) : ?>
                                            <?php if ($_GET["pagina"] == $registros[$i]["llave"]) : ?>
                                                <div class="row mt-5 text-center">
                                                    <div class="col-lg-4">
                                                        <h5>producto</h5>
                                                        <hr class="factura">
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
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <h5>Cntd</h5>

                                                        <hr class="factura">
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
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <h5>Precio und</h5>
                                                        <hr class="factura">
                                                        <h6>$ <?php echo $registros[$i]["valor_hora"] ?></h6>
                                                        <!-- PRODUCTO ABRO -->
                                                        <?php if ($registros[$i]["ProductoAbro"] == "SI") : ?>
                                                            <h6>$ 62400</h6>
                                                        <?php else : ?>
                                                        <?php endif ?>
                                                        <!-- PRODUCTO ABRO -->
                                                        <!-- FAJAS SUPERBELT -->
                                                        <?php if ($registros[$i]["FajasSuperbelt"] == "SI") : ?>
                                                            <h6>$ 80000</h6>
                                                        <?php else : ?>
                                                        <?php endif ?>
                                                        <!-- FAJAS SUPERBELT -->
                                                        <!-- FAJAS GATES -->
                                                        <?php if ($registros[$i]["FajasGates"] == "SI") : ?>
                                                            <h6>$ 48000</h6>

                                                        <?php else : ?>
                                                        <?php endif ?>
                                                        <!-- FAJAS GATES -->
                                                        <!-- BUJIAS CHAMPION -->
                                                        <?php if ($registros[$i]["BujiasChampion"] == "SI") : ?>
                                                            <h6>$ 40500</h6>
                                                        <?php else : ?>
                                                        <?php endif ?>
                                                        <!-- BUJIAS CHAMPION -->
                                                        <!-- PASTILLAS HPS -->
                                                        <?php if ($registros[$i]["PastillasHPS"] == "SI") : ?>
                                                            <h6>$ 90000</h6>
                                                        <?php else : ?>
                                                        <?php endif ?>
                                                        <!-- PASTILLAS HPS -->
                                                        <!-- ABRAZADERA SIDEAL -->
                                                        <?php if ($registros[$i]["Abrazaderasideal"] == "SI") : ?>
                                                            <h6>$ 80000</h6>
                                                        <?php else : ?>
                                                        <?php endif ?>
                                                        <!-- ABRAZADERA SIDEAL -->
                                                        <!-- LIQUIDO DE FRENOS WAGNER -->
                                                        <?php if ($registros[$i]["LiquidodefrenosWagner"] == "SI") : ?>
                                                            <h6>$ 90500</h6>
                                                        <?php else : ?>
                                                        <?php endif ?>
                                                        <!-- LIQUIDO DE FRENOS WAGNER -->
                                                        <!-- FILTROS FRAM -->
                                                        <?php if ($registros[$i]["FiltrosFram"] == "SI") : ?>
                                                            <h6>$ 30000</h6>
                                                        <?php else : ?>
                                                        <?php endif ?>
                                                        <!-- FILTROS FRAM -->
                                                        <!-- CABLESBB -->
                                                        <?php if ($registros[$i]["CablesBB"] == "SI") : ?>
                                                            <h6>$ 160000</h6>
                                                        <?php else : ?>
                                                        <?php endif ?>
                                                        <!-- CABLESBB -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <h5>Total</h5>
                                                        <hr class="factura">
                                                        <!-- PRODUCTO ABRO -->
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
                                                        <!-- CABLESBB -->
                                                    </div>
                                                </div>
                                            <?php endif ?>
                                        <?php endfor ?>
                                    <?php endif ?>
                                    <!--row-->
                                    <div class="row text-center mt-4">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-11">
                                            <?php
                                            $subtotalantes = $totallabor + $gt1 + $gt2 + $gt3 + $gt4 + $gt5 + $gt6 + $gt7 + $gt8 + $gt9;
                                            $iva = round($subtotalantes * 19 / 100); ?>
                                            <h5><strong>Sub total:</strong> $ <?php echo $totallabor + $gt1 + $gt2 + $gt3 + $gt4 + $gt5 + $gt6 + $gt7 + $gt8 + $gt9 ?> </h5>

                                            <h5><strong>Iva(19.00%):</strong> $ <?php echo $iva ?> </h5>

                                            <h4><strong>Total</strong> $ <?php echo $subtotalantes + $iva ?></h4>

                                        </div>
                                    </div>
                                    <!--ROW-->
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endfor ?>
            <?php endif ?>
    </section>

</div>