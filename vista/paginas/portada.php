<?php 
$equipo = controladordatos::ctrequipo();

?>
<div class="content-wrapper">
    <?php include "vista/modulos/breadcrumb.php"; ?>
    <section class="content">
        <div class="container">
            <h1>POLITECNICO GRAN COLOMBIANO</h1>
            <h2>Grupo P1</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Código</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for($i=0;$i<count($equipo);$i++):?>
                    <tr>
                        <td><?php echo $equipo[$i]["nombre"]?></td>
                        <td><?php echo $equipo[$i]["codigo"]?></td>
                    </tr>
                    <?php endfor?>
                </tbody>
            </table>
        </div>
    </section>
</div>