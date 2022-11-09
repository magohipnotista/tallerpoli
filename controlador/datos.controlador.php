<?php
class controladordatos
{
    static public function ctrnuevaorden()
    {
        if (isset($_POST["nombre_cliente"])) {
            $nombreraw = $_POST["nombre_cliente"];
            $search = " ";
            $replace = "";
            $origin = $nombreraw;
            $nombrefinal = str_replace($search, $replace, $origin);
            if (isset($_FILES["foto"]["tmp_name"]) && !empty($_FILES["foto"]["tmp_name"])) {
                list($ancho, $alto) = getimagesize($_FILES["foto"]["tmp_name"]);
                $nuevoancho = 800;
                $nuevoalto = 600;
                $directorio = "vista/imagenes/autos/";
                if ($_FILES["foto"]["type"] == "image/jpeg") {
                    $aleatorio = $nombrefinal;
                    $ruta = $directorio . $aleatorio . ".jpg";
                    $origen = imagecreatefromjpeg($_FILES["foto"]["tmp_name"]);
                    $destino = imagecreatetruecolor($nuevoancho, $nuevoalto);
                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoancho, $nuevoalto, $ancho, $alto);
                    imagejpeg($destino, $ruta);
                } else if ($_FILES["foto"]["type"] == "image/png") {
                    $aleatorio = $nombrefinal;
                    $ruta = $directorio . $aleatorio . ".png";
                    $origen = imagecreatefrompng($_FILES["foto"]["tmp_name"]);
                    $destino = imagecreatetruecolor($nuevoancho, $nuevoalto);
                    imagealphablending($destino, FALSE);
                    imagesavealpha($destino, TRUE);
                    imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoancho, $nuevoalto, $ancho, $alto);
                    imagepng($destino, $ruta);
                } else {
                    return "format-error";
                }
            } else {
                $ruta = "vista/imagenes/auto.jpg";
            }
            $tabla = "ingreso";
            $nombreraw = $_POST["empleado_a_cargo"];
            $search = " ";
            $replace = "";
            $origin = $nombreraw;
            $nombrefinal = str_replace($search, $replace, $origin);
            $llave = $nombrefinal . $_POST["numeroorden"] . 'edit';
            $datos = array(
                "nombre_cliente" => $_POST["nombre_cliente"],
                "marca_auto" => $_POST["marca_auto"],
                "placa" => $_POST["placa"],
                "modelo" => $_POST["modelo"],
                "color" => $_POST["color"],
                "empleado_a_cargo" => $_POST["empleado_a_cargo"],
                "numeroorden" => $_POST["numeroorden"],
                "numerodeordendown" => $_POST["numeroorden"]."down",
                "llave" => $llave,
                "cedula" => $_POST["cedula"],
                "foto" => $ruta,
                "telefono" => $_POST["telefono"],

            );
            $respuesta = modelodatos::mdlnuevaorden($tabla, $datos);
            return $respuesta;
        }
    }
    static public function ctrnuevaorden2()
    {
        if (isset($_POST["ProductoAbro"])) {
            $tabla = "ingreso";
            if($_POST["ProductoAbro"] == "SI" && $_POST["cntProductoAbro"] == 0 || $_POST["FajasSuperbelt"] =="SI" && $_POST["cntFajasSuperbelt"] == 0 || $_POST["FajasGates"] =="SI" && $_POST["cntFajasGates"]== 0 && $_POST["BujiasChampion"] == "SI" &&  $_POST["cntBujiasChampion"] == 0 || $_POST["PastillasHPS"] == "SI" && $_POST["cntPastillasHPS"] == 0 ||  $_POST["Abrazaderasideal"] == "SI" &&  $_POST["cntAbrazaderasideal"] == 0 || $_POST["LiquidodefrenosWagner"] == "SI" && $_POST["cntLiquidodefrenosWagner"] == 0 || $_POST["FiltrosFram"] == "SI" && $_POST["cntFiltrosFram"] == 0 || $_POST["CablesBB"] == "SI" && $_POST["cntCablesBB"] == 0||
            
            
            $_POST["ProductoAbro"] == "NO" && $_POST["cntProductoAbro"] >= 1 || $_POST["FajasSuperbelt"] =="NO" && $_POST["cntFajasSuperbelt"]  >= 1 || $_POST["FajasGates"] =="NO" && $_POST["cntFajasGates"] >= 1 && $_POST["BujiasChampion"] == "NO" &&  $_POST["cntBujiasChampion"]  >= 1 || $_POST["PastillasHPS"] == "NO" && $_POST["cntPastillasHPS"]  >= 1 ||  $_POST["Abrazaderasideal"] == "NO" &&  $_POST["cntAbrazaderasideal"]  >= 1 || $_POST["LiquidodefrenosWagner"] == "NO" && $_POST["cntLiquidodefrenosWagner"]  >= 1 || $_POST["FiltrosFram"] == "NO" && $_POST["cntFiltrosFram"]  >= 1 || $_POST["CablesBB"] == "NO" && $_POST["cntCablesBB"] >= 1
            
            
            
            
            ){
                echo '
                <div class="alert alert-danger mt-2 ">Error!!! El formulario se debe diligenciar correctamente los items que lleven la seleccion "SI" deben llevar al menos "1" en cantidad lo que diccen "NO" deben llevar la cantidad en "0" </div>';
               return;
            }
            $datos = array(
               
                "ProductoAbro" => $_POST["ProductoAbro"],
                "cntProductoAbro" => $_POST["cntProductoAbro"],
                "FajasSuperbelt" => $_POST["FajasSuperbelt"],
                "cntFajasSuperbelt" => $_POST["cntFajasSuperbelt"],
                "FajasGates" => $_POST["FajasGates"],
                "cntFajasGates" => $_POST["cntFajasGates"],
                "BujiasChampion" => $_POST["BujiasChampion"],
                "cntBujiasChampion" => $_POST["cntBujiasChampion"],
                "PastillasHPS" => $_POST["PastillasHPS"],
                "cntPastillasHPS" => $_POST["cntPastillasHPS"],
                "Abrazaderasideal" => $_POST["Abrazaderasideal"],
                "cntAbrazaderasideal" => $_POST["cntAbrazaderasideal"],
                "LiquidodefrenosWagner" => $_POST["LiquidodefrenosWagner"],
                "cntLiquidodefrenosWagner" => $_POST["cntLiquidodefrenosWagner"],
                "FiltrosFram" => $_POST["FiltrosFram"],
                "cntFiltrosFram" => $_POST["cntFiltrosFram"],
                "CablesBB" => $_POST["CablesBB"],
                "cntCablesBB" => $_POST["cntCablesBB"],
                "hora" => $_POST["hora"],
                "valor_hora" => $_POST["valor_hora"],
                "id" => $_POST["id"],


            );
            $respuesta = modelodatos::mdlnuevaorden2($tabla, $datos);
            return $respuesta;
        }
    }
    static public function traerregistros()
    {
        $tabla = "ingreso";
        $respuesta = modelodatos::mdltraerregistros($tabla);
        return $respuesta;
    }
    static public function ctrgenerarfactura()
    {
        if (isset($_POST["nombrecliente"])) {
            $nombreraw = $_POST["vendedor"];
            $search = " ";
            $replace = "";
            $origin = $nombreraw;
            $nombrefinal = str_replace($search, $replace, $origin);
            $llave = $nombrefinal . $_POST["numeroorden"] . 'edit';
            $tabla = "facturas";
            $datos = array(
                "nombrecliente" => $_POST["nombrecliente"],
                "telefono" => $_POST["telefono"],
                "cedula" => $_POST["cedula"],
                "fechafinal" => $_POST["fechafinal"],
                "numeroorden" => $_POST["numeroorden"],
                "numerodeordendown" => $_POST["numeroorden"]."down",
                "fechainicio" => $_POST["fechainicio"],
                "metododepago" => $_POST["metododepago"],
                "vendedor" => $_POST["vendedor"],
                "total_antes_iva" => $_POST["total_antes_iva"],
                "iva" => $_POST["iva"],
                "total_despues_iva" => $_POST["total_despues_iva"],
                "llave" => $llave,
            );
            $respuesta = modelodatos::mdlgenerarfactura($tabla, $datos);
            return $respuesta;
        }
    }
    static public function ctrtraerfacturas(){
        $tabla = "facturas";
        $respuesta = modelodatos::mdltraerfacturas($tabla);
        return $respuesta;
    }
    static public function ctrtraerfacturas2($item,$valor){
        $tabla = "facturas";
        $respuesta = modelodatos::mdltraerfacturas2($tabla,$item,$valor);
        return $respuesta;
    }
    static public function ctrequipo(){
        $tabla = "equipo";
        $respuesta = modelodatos::mdlequipo($tabla);
        return $respuesta;
    }
}
