 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
     <?php include "vista/modulos/breadcrumb.php";?>
     <!-- Main content -->
     <section class="content">
         <div class="container ">
        
             <button class="btn btn-primary  btn-block" id="btnform">NUEVO INGRESO</button>
             <div class="col-lg-12 mt-3 p-0">
                 <div class="card card-primary fornnuevo p-0" style="display:none;">
                     <div class="card-header">
                        
                         <h3 class="card-title">Ingreso Nuevo Cliente</h3>
                     </div>
                     <!-- /.card-header -->
                     <!-- form start -->
                     <form method="post" enctype="multipart/form-data">
                         <div class="card-body">
                             <div class="row text-center">
                                 <div class="col-lg-4">
                                     <div class="form-group">
                                         <label>Nombre Cliente</label>
                                         <input type="text" class="form-control" style="text-transform:uppercase;" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre Cliente" required name="nombre_cliente">
                                     </div>
                                 </div>
                                 <div class="col-lg-3">
                                     <div class="form-group">
                                         <label>Cedula Cliente</label>
                                         <input type="text" class="form-control" style="text-transform:uppercase;" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Cedula Cliente" required name="cedula">
                                     </div>
                                 </div>
                                 <div class="col-lg-3">
                                     <div class="form-group">
                                         <label>Telefono Cliente</label>
                                         <input type="number" class="form-control" style="text-transform:uppercase;" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Telefono Cliente" required name="telefono">
                                     </div>
                                 </div>
                                 <div class="col-lg-2">
                                     <div class="form-group">
                                         <label>Marca del Vehículo</label>
                                         <input type="text" class="form-control" style="text-transform:uppercase;" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Marca Vehiculo" required name="marca_auto">
                                     </div>
                                 </div>
                                 <div class="col-lg-2">
                                     <div class="form-group">
                                         <label>Placa Vehiculo</label>
                                         <input type="text" class="form-control" style="text-transform:uppercase;" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Placa Vehiculo" required name="placa">
                                     </div>
                                 </div>
                                 <div class="col-lg-3">
                                     <div class="form-group">
                                         <label>Modelo Vehiculo</label>
                                         <input type="text" class="form-control" style="text-transform:uppercase;" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Modelo Vehiculo" required name="modelo">
                                     </div>
                                 </div>
                                 <div class="col-lg-3">
                                     <div class="form-group">
                                         <label>Color Vehiculo</label>
                                         <input type="text" class="form-control" style="text-transform:uppercase;" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Color Vehiculo" required name="color">
                                     </div>
                                     <div class="form-group d-none">
                                         <label>Numero Orden</label>
                                         <input type="text" class="form-control" value="<?php echo rand(1, 999999)?>" placeholder="Color Vehiculo" required name="numeroorden">
                                     </div>
                                 </div>
                              
                                 <div class="col-lg-3">
                                     <div class="form-group">
                                        <?php $equipo = controladordatos::ctrequipo();?>
                                         <label>Empleado a cargo</label>
                                         <select name="empleado_a_cargo" style="text-transform:uppercase;" value="" onkeyup="javascript:this.value=this.value.toUpperCase();" class="custom-select" placeholder="profile">
                                             <option selected></option>
                                             <?php for($i=0;$i<count($equipo);$i++):?>
                                             <option><?php echo $equipo[$i]["nombre"]?></option>
                                             <?php endfor?>
                                             
                                         </select>
                                     </div>
                                 </div>
                                 <div class="col-lg-3">
                                 <h3>Foto Auto</h3>
                                 <div class="input-group mb-3 ">
                                     <input type="file" class="d-none" id="foto" name="foto">
                                     <label for="foto">
                                         <img src="vista/imagenes/subirfoto.png" class="img-fluid prevfotousuario " alt="">
                                     </label>
                                 </div>
                                 </div>
                                 
                             </div>
                             <!--ROW-->
                             <div class="row">


                             </div>
                             <!--row-->
                         </div>
                         <!-- /.card-body -->

                         <div class="card-footer">
                             <button type="submit" class="btn btn-primary">Enviar</button>
                         </div>
                         <?php $nuevaorden = controladordatos::ctrnuevaorden()?>
                     </form>

                 </div>
             </div>
         </div>
     </section>
     <?php if ($nuevaorden == "ok"):?>
         <script>
             setTimeout(function() {
                 if (window.history.replaceState) {
                     window.history.replaceState(null, null, window.location.assign("inicio2"));
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