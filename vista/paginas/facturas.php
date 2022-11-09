<div class="content-wrapper">
    <?php
    include "vista/modulos/breadcrumb.php";
    $facturas = controladordatos::ctrtraerfacturas();
    $total = count($facturas);
    ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Total Facturas Generadas <?php echo $total?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body d-none d-lg-none d-md-none d-sm-none d-xl-block">
                            <table id="example2" class="table table-bordered table-hover ">
                                <thead>
                                    <tr>
                                        <th>Numero De Orden</th>
                                        <th>Nombre Cliente</th>
                                        <th>Telefono</th>
                                        <th>Cedula</th>
                                        <th>Fecha inicio</th>
                                        <th>Fecha Finalizacion</th>
                                        <th>Metodo de pago</th>
                                        <th>Vendedor</th>
                                        <th>Total antes de iva</th>
                                        <th>Iva</th>
                                        <th>Gran total</th>
                                        <th>ver</th>
                                        <th>Descargar pdf</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($facturas); $i++) : ?>
                                        <tr>
                                            <td><?php echo $facturas[$i]["numeroorden"] ?></td>
                                            <td><?php echo $facturas[$i]["nombrecliente"] ?></td>
                                            <td><?php echo $facturas[$i]["telefono"] ?></td>
                                            <td><?php echo $facturas[$i]["cedula"] ?></td>
                                            <td><?php echo $facturas[$i]["fechainicio"] ?></td>
                                            <td><?php echo $facturas[$i]["fechafinal"] ?></td>
                                            <td><?php echo $facturas[$i]["metododepago"] ?></td>
                                            <td><?php echo $facturas[$i]["vendedor"] ?></td>
                                            <td><?php echo $facturas[$i]["total_antes_iva"] ?></td>
                                            <td><?php echo $facturas[$i]["iva"] ?></td>
                                            <td><?php echo $facturas[$i]["total_despues_iva"] ?></td>
                                            <td><a href="<?php echo $facturas[$i]["llave"] ?>"><i class="fas fa-sharp fa-solid fa-circle-info iconifno"></i></a></td>
                                            <td><a href="<?php echo $facturas[$i]["numeroorden"] ?>down"><i class="fa-solid fa-file-pdf iconifno"></i></a></td>
                                        </tr>
                                    <?php endfor ?>
                                </tbody>
                            </table>
                            <!-- 1024 -->
                            <table id="example2" class="table table-bordered table-hover d-none d-sm-none d-md-none d-lg-block d-xl-none">
                                <thead>
                                    <tr>
                                        <th>Numero De Orden</th>
                                        <th>Nombre Cliente</th>
                                        <th>Telefono</th>
                                        <th>Cedula</th>
                                        <th>Vendedor</th>
                                        <th>ver</th>
                                        <th>Descargar pdf</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($facturas); $i++) : ?>
                                        <tr>
                                            <td><?php echo $facturas[$i]["numeroorden"] ?></td>
                                            <td><?php echo $facturas[$i]["nombrecliente"] ?></td>
                                            <td><?php echo $facturas[$i]["telefono"] ?></td>
                                            <td><?php echo $facturas[$i]["cedula"] ?></td>
                                            <td><?php echo $facturas[$i]["vendedor"] ?></td>
                                            <td><a href="<?php echo $facturas[$i]["llave"] ?>"><i class="fas fa-sharp fa-solid fa-circle-info iconifno"></i></a></td>
                                            <td><a href="<?php echo $facturas[$i]["numeroorden"] ?>down"><i class="fa-solid fa-file-pdf iconifno"></i></a></td>
                                        </tr>
                                    <?php endfor ?>
                                </tbody>
                            </table>
                            <!-- TABLETHOR -->
                            <table id="example2" class="table table-bordered table-hover d-none d-sm-none d-md-block d-lg-none d-xl-none">
                                <thead>
                                    <tr>
                                        <th>Numero De Orden</th>
                                        <th>Nombre Cliente</th>
                                        <th>Telefono</th>
                                        <th>Cedula</th>
                                        <th>Vendedor</th>
                                        <th>ver</th>
                                        <th>Descargar pdf</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($facturas); $i++) : ?>
                                        <tr>
                                            <td><?php echo $facturas[$i]["numeroorden"] ?></td>
                                            <td><?php echo $facturas[$i]["nombrecliente"] ?></td>
                                            <td><?php echo $facturas[$i]["telefono"] ?></td>
                                            <td><?php echo $facturas[$i]["cedula"] ?></td>
                                            <td><?php echo $facturas[$i]["vendedor"] ?></td>
                                            <td><a href="<?php echo $facturas[$i]["llave"] ?>"><i class="fas fa-sharp fa-solid fa-circle-info iconifno"></i></a></td>
                                            <td><a href="<?php echo $facturas[$i]["numeroorden"] ?>down"><i class="fa-solid fa-file-pdf iconifno"></i></a></td>
                                        </tr>
                                    <?php endfor ?>
                                </tbody>
                            </table>
                            <!-- TABLET -->
                            <table id="example2" class="table table-bordered table-hover d-none d-sm-block d-md-none d-lg-none d-xl-none">
                                <thead>
                                    <tr>
                                        <th>Numero De Orden</th>
                                        <th>Nombre Cliente</th>
                                        <th>Telefono</th>
                                        <th>ver</th>
                                        <th>Descargar pdf</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($facturas); $i++) : ?>
                                        <tr>
                                            <td><?php echo $facturas[$i]["numeroorden"] ?></td>
                                            <td><?php echo $facturas[$i]["nombrecliente"] ?></td>
                                            <td><?php echo $facturas[$i]["telefono"] ?></td>
                                            <td><a href="<?php echo $facturas[$i]["llave"] ?>"><i class="fas fa-sharp fa-solid fa-circle-info iconifno"></i></a></td>
                                            <td><a href="<?php echo $facturas[$i]["numeroorden"] ?>down"><i class="fa-solid fa-file-pdf iconifno"></i></a></td>
                                        </tr>
                                    <?php endfor ?>
                                </tbody>
                            </table>
                            <!-- MOBIL -->
                            <table id="example2" class="table table-bordered table-hover d-block d-sm-none d-md-none d-lg-none d-xl-none">
                                <thead>
                                    <tr>
                                        <th>Numero De Orden</th>


                                        <th>ver</th>
                                        <th>Descargar pdf</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($facturas); $i++) : ?>
                                        <tr>
                                            <td><?php echo $facturas[$i]["numeroorden"] ?></td>

                                            <td><a href="<?php echo $facturas[$i]["llave"] ?>"><i class="fas fa-sharp fa-solid fa-circle-info iconifno"></i></a></td>
                                            <td><a href="<?php echo $facturas[$i]["numeroorden"] ?>down"><i class="fa-solid fa-file-pdf iconifno"></i></a></td>
                                        </tr>
                                    <?php endfor ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-header -->
                        <div class="card-body d-none d-sm-none d-md-none d-lg-block d-xl-none">
                            <!-- 1024 -->
                            <table id="example2" class="table table-bordered table-hover ">
                                <thead>
                                    <tr>
                                        <th>Numero De Orden</th>
                                        <th>Nombre Cliente</th>
                                        <th>Telefono</th>
                                        <th>Cedula</th>
                                        <th>Vendedor</th>
                                        <th>ver</th>
                                        <th>Descargar pdf</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($facturas); $i++) : ?>
                                        <tr>
                                            <td><?php echo $facturas[$i]["numeroorden"] ?></td>
                                            <td><?php echo $facturas[$i]["nombrecliente"] ?></td>
                                            <td><?php echo $facturas[$i]["telefono"] ?></td>
                                            <td><?php echo $facturas[$i]["cedula"] ?></td>
                                            <td><?php echo $facturas[$i]["vendedor"] ?></td>
                                            <td><a href="<?php echo $facturas[$i]["llave"] ?>"><i class="fas fa-sharp fa-solid fa-circle-info iconifno"></i></a></td>
                                            <td><a href="<?php echo $facturas[$i]["numeroorden"] ?>down"><i class="fa-solid fa-file-pdf iconifno"></i></a></td>
                                        </tr>
                                    <?php endfor ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-header -->
                        <div class="card-body d-none d-sm-none d-md-block d-lg-none d-xl-none">
                            <!-- TABLETHOR -->
                            <table id="example2" class="table table-bordered table-hover ">
                                <thead>
                                    <tr>
                                        <th>Numero De Orden</th>
                                        <th>Nombre Cliente</th>
                                        <th>Telefono</th>
                                        <th>Cedula</th>
                                        <th>Vendedor</th>
                                        <th>ver</th>
                                        <th>Descargar pdf</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($facturas); $i++) : ?>
                                        <tr>
                                            <td><?php echo $facturas[$i]["numeroorden"] ?></td>
                                            <td><?php echo $facturas[$i]["nombrecliente"] ?></td>
                                            <td><?php echo $facturas[$i]["telefono"] ?></td>
                                            <td><?php echo $facturas[$i]["cedula"] ?></td>
                                            <td><?php echo $facturas[$i]["vendedor"] ?></td>
                                            <td><a href="<?php echo $facturas[$i]["llave"] ?>"><i class="fas fa-sharp fa-solid fa-circle-info iconifno"></i></a></td>
                                            <td><a href="<?php echo $facturas[$i]["numeroorden"] ?>down"><i class="fa-solid fa-file-pdf iconifno"></i></a></td>
                                        </tr>
                                    <?php endfor ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                         <!-- /.card-header -->
                         <div class="card-body d-none d-sm-block d-md-none d-lg-none d-xl-none">
                            <!-- TABLET -->
                            <table id="example2" class="table table-bordered table-hover ">
                                <thead>
                                    <tr>
                                        <th>Numero De Orden</th>
                                        <th>Nombre Cliente</th>
                                        <th>Telefono</th>
                                        <th>ver</th>
                                        <th>Descargar pdf</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($facturas); $i++) : ?>
                                        <tr>
                                            <td><?php echo $facturas[$i]["numeroorden"] ?></td>
                                            <td><?php echo $facturas[$i]["nombrecliente"] ?></td>
                                            <td><?php echo $facturas[$i]["telefono"] ?></td>
                                            <td><a href="<?php echo $facturas[$i]["llave"] ?>"><i class="fas fa-sharp fa-solid fa-circle-info iconifno"></i></a></td>
                                            <td><a href="<?php echo $facturas[$i]["numeroorden"] ?>down"><i class="fa-solid fa-file-pdf iconifno"></i></a></td>
                                        </tr>
                                    <?php endfor ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                         <!-- /.card-header -->
                         <div class="card-body d-block d-sm-none d-md-none d-lg-none d-xl-none">
                            <!-- MOBIL -->
                            <table id="example2" class="table table-bordered table-hover ">
                                <thead>
                                    <tr>
                                        <th>Numero De Orden</th>
                                        <th>ver</th>
                                        <th>Descargar pdf</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($facturas); $i++) : ?>
                                        <tr>
                                            <td><?php echo $facturas[$i]["numeroorden"] ?></td>

                                            <td><a href="<?php echo $facturas[$i]["llave"] ?>"><i class="fas fa-sharp fa-solid fa-circle-info iconifno"></i></a></td>
                                            <td><a href="<?php echo $facturas[$i]["numeroorden"] ?>down"><i class="fa-solid fa-file-pdf iconifno"></i></a></td>
                                        </tr>
                                    <?php endfor ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>



    </section>
</div>