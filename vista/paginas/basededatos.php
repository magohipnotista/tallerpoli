<div class="content-wrapper">
    <?php
    $registros = controladordatos::traerregistros();
    $total = count($registros);
    include "vista/modulos/breadcrumb.php";
    ?>
    <section class="content">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Base de datos de todos los registros del sistema total registros <?php echo $total?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body d-none d-lg-none d-md-none d-sm-none d-xl-block">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Numero De Orden</th>
                                        <th>Nombre Cliente</th>
                                        <th>Marca Auto</th>
                                        <th>Placa</th>
                                        <th>Modelo</th>
                                        <th>color</th>
                                        <th>Empleado a Cargo</th>
                                        <th>Hora inicio</th>
                                        <th>Detalles</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($registros); $i++) : ?>
                                        <tr>
                                            <td><?php echo $registros[$i]["numeroorden"] ?></td>
                                            <td><?php echo $registros[$i]["nombre_cliente"] ?></td>
                                            <td><?php echo $registros[$i]["marca_auto"] ?></td>
                                            <td><?php echo $registros[$i]["placa"] ?></td>
                                            <td><?php echo $registros[$i]["modelo"] ?></td>
                                            <td><?php echo $registros[$i]["color"] ?></td>
                                            <td><?php echo $registros[$i]["empleado_a_cargo"] ?></td>
                                            <td><?php echo $registros[$i]["fecha"] ?></td>
                                            <td><a href="<?php echo $registros[$i]["llave"] ?>"><i class="fas fa-sharp fa-solid fa-circle-info iconifno"></i></a></td>
                                        </tr>
                                    <?php endfor ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-header -->
                        <div class="card-body d-none d-sm-none d-md-none d-lg-block d-xl-none">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Numero De Orden</th>
                                        <th>Nombre Cliente</th>
                                        <th>Marca Auto</th>
                                        <th>Placa</th>
                                        <th>Modelo</th>
                                        <th>color</th>
                                        <th>Empleado a Cargo</th>
                                        <th>Hora inicio</th>
                                        <th>Detalles</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($registros); $i++) : ?>
                                        <tr>
                                            <td><?php echo $registros[$i]["numeroorden"] ?></td>
                                            <td><?php echo $registros[$i]["nombre_cliente"] ?></td>
                                            <td><?php echo $registros[$i]["marca_auto"] ?></td>
                                            <td><?php echo $registros[$i]["placa"] ?></td>
                                            <td><?php echo $registros[$i]["modelo"] ?></td>
                                            <td><?php echo $registros[$i]["color"] ?></td>
                                            <td><?php echo $registros[$i]["empleado_a_cargo"] ?></td>
                                            <td><?php echo $registros[$i]["fecha"] ?></td>
                                            <td><a href="<?php echo $registros[$i]["llave"] ?>"><i class="fas fa-sharp fa-solid fa-circle-info iconifno"></i></a></td>
                                        </tr>
                                    <?php endfor ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-header -->
                        <div class="card-body d-none d-sm-none d-md-block d-lg-none d-xl-none">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Numero De Orden</th>
                                        <th>Nombre Cliente</th>
                                        <th>Marca Auto</th>
                                        <th>Placa</th>
                                        <th>Modelo</th>
                                        <th>color</th>
                                        <th>Empleado a Cargo</th>
                                        <th>Detalles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($registros); $i++) : ?>
                                        <tr>
                                            <td><?php echo $registros[$i]["numeroorden"] ?></td>
                                            <td><?php echo $registros[$i]["nombre_cliente"] ?></td>
                                            <td><?php echo $registros[$i]["marca_auto"] ?></td>
                                            <td><?php echo $registros[$i]["placa"] ?></td>
                                            <td><?php echo $registros[$i]["modelo"] ?></td>
                                            <td><?php echo $registros[$i]["color"] ?></td>
                                            <td><?php echo $registros[$i]["empleado_a_cargo"] ?></td>
                                           
                                            <td><a href="<?php echo $registros[$i]["llave"] ?>"><i class="fas fa-sharp fa-solid fa-circle-info iconifno"></i></a></td>
                                        </tr>
                                    <?php endfor ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-header -->
                        <div class="card-body d-none d-sm-block d-md-none d-lg-none d-xl-none">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Numero De Orden</th>
                                        <th>Nombre Cliente</th>
                                        <th>Marca Auto</th>
                                        <th>Detalles</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($registros); $i++) : ?>
                                        <tr>
                                            <td><?php echo $registros[$i]["numeroorden"] ?></td>
                                            <td><?php echo $registros[$i]["nombre_cliente"] ?></td>
                                            <td><?php echo $registros[$i]["marca_auto"] ?></td>
                                            <td><a href="<?php echo $registros[$i]["llave"] ?>"><i class="fas fa-sharp fa-solid fa-circle-info iconifno"></i></a></td>
                                        </tr>
                                    <?php endfor ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <!-- /.card-header -->
                        <div class="card-body d-block d-sm-none d-md-none d-lg-none d-xl-none">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Numero De Orden</th>
                                        <th>Nombre Cliente</th>
                                        <th>Detalles</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($registros); $i++) : ?>
                                        <tr>
                                            <td><?php echo $registros[$i]["numeroorden"] ?></td>
                                            <td><?php echo $registros[$i]["nombre_cliente"] ?></td>
                                            <td><a href="<?php echo $registros[$i]["llave"] ?>"><i class="fas fa-sharp fa-solid fa-circle-info iconifno"></i></a></td>
                                        </tr>
                                    <?php endfor ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                    </div>


                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </section>
</div>