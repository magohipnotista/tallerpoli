<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?php
    $registros = controladordatos::traerregistros();
    ?>
    <?php for ($i = 0; $i < count($registros); $i++):?>
        <?php $id = $registros[$i]["id"];?>
    <?php endfor?>

    <!-- Main content -->
    <section class="content">
        <div class="container ">

            <div class="col-lg-12 mt-3">
                <div class="card card-primary fornnuevo">
                    <div class="card-header">
                        <h3 class="card-title">Ingreso Servicios </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>#1 Producto Abro</label>
                                        <select class="custom-select" id="1"required name="ProductoAbro">
                                            <option></option>
                                            <option>SI</option>
                                            <option>NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <label>Cnt #1</label>
                                        <input type="number" class="form-control" id="ct1"value="0" name="cntProductoAbro">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>#2 Fajas Superbelt</label>
                                        <select class="custom-select" id ="2"required  name="FajasSuperbelt">
                                            <option></option>
                                            <option>SI</option>
                                            <option>NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <label>Cnt #2</label>
                                        <input type="number" class="form-control" id ="ct2" value="0" name="cntFajasSuperbelt">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>#3 Fajas Gates</label>
                                        <select class="custom-select" id ="3" required name="FajasGates">
                                            <option></option>
                                            <option>SI</option>
                                            <option>NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <label>Cnt #3</label>
                                        <input type="number" class="form-control" id ="ct3" value="0" name="cntFajasGates">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>#4 Bujías Champion</label>
                                        <select class="custom-select" required id ="4" placeholder="profile" name="BujiasChampion">
                                            <option></option>
                                            <option>SI</option>
                                            <option>NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <label>Cnt #4 </label>
                                        <input type="number" class="form-control" id ="ct4" value="0" name="cntBujiasChampion">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>#5 Pastillas HPS</label>
                                        <select class="custom-select" required id ="5" name="PastillasHPS">
                                            <option></option>
                                            <option>SI</option>
                                            <option>NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <label>Cnt #5</label>
                                        <input type="number" class="form-control" id ="ct5" value="0" name="cntPastillasHPS">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>#6 Abrazaderas ideal</label>
                                        <select class="custom-select" required  id ="6" name="Abrazaderasideal">
                                            <option></option>
                                            <option>SI</option>
                                            <option>NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <label>Cnt #6</label>
                                        <input type="number" class="form-control" id ="ct6" value="0" name="cntAbrazaderasideal">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>#7 Liquido de frenos </label>
                                        <select class="custom-select" required  id ="7" name="LiquidodefrenosWagner">
                                            <option></option>
                                            <option>SI</option>
                                            <option>NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <label>Cnt #7</label>
                                        <input type="number" class="form-control"  id ="ct7" value="0" name="cntLiquidodefrenosWagner">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>#8 Filtros Fram</label>
                                        <select class="custom-select" id ="8" required name="FiltrosFram">
                                            <option></option>
                                            <option>SI</option>
                                            <option>NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <label>Cnt #8</label>
                                        <input type="number" class="form-control"  id ="ct8" value="0" name="cntFiltrosFram">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>#9 Cables B&B</label>
                                        <select class="custom-select"  id ="9" required name="CablesBB">
                                            <option></option>
                                            <option>SI</option>
                                            <option>NO</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <label>Cnt #9</label>
                                        <input type="number" class="form-control" id ="ct9" value="0" name="cntCablesBB">
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <label>Total horas labor</label>
                                        <input type="text" class="form-control" required placeholder="Ingrese Total Horas" name="hora">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Valor hora</label>
                                        <input type="text" class="form-control" required placeholder="Ingrese Valor de la hora de trabajo" name="valor_hora">
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group d-none">
                                        <label>id</label>
                                        <input type="text" value="<?php echo $id?>" name="id">
                                    </div>
                                </div>
                                
                            </div>
                            <!--row-->
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                        <?php $nuevaorden2 = controladordatos::ctrnuevaorden2();?>
                    </form>

                </div>
            </div>
        </div>
    </section>
   
    <?php if ($nuevaorden2 == "ok"):?>
        <script>
            setTimeout(function() {
                if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.assign("basededatos"));
                }
            }, 2000);
        </script>
        <div class="container">
            <div class="col-lg-12">
                <div class="alert alert-success mt-1">Registro Guardado</div>
            </div>
        </div> 
    <?php endif?>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->