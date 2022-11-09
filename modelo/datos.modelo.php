<?php
require_once "conexion.php";

class modelodatos{
    static public function mdlnuevaorden($tabla,$datos){
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla (nombre_cliente,marca_auto,placa,modelo,color,empleado_a_cargo,numeroorden,llave,cedula,foto,telefono,numerodeordendown) VALUES(:nombre_cliente,:marca_auto,:placa,:modelo,:color,:empleado_a_cargo,:numeroorden,:llave,:cedula,:foto,:telefono,:numerodeordendown)");
        $stmt->bindParam(":nombre_cliente",$datos["nombre_cliente"],PDO::PARAM_STR);
        $stmt->bindParam(":marca_auto",$datos["marca_auto"],PDO::PARAM_STR);
        $stmt->bindParam(":placa",$datos["placa"],PDO::PARAM_STR);
        $stmt->bindParam(":modelo",$datos["modelo"],PDO::PARAM_STR);
        $stmt->bindParam(":color",$datos["color"],PDO::PARAM_STR);
        $stmt->bindParam(":empleado_a_cargo",$datos["empleado_a_cargo"],PDO::PARAM_STR);
        $stmt->bindParam(":numeroorden",$datos["numeroorden"],PDO::PARAM_STR);
        $stmt->bindParam(":llave",$datos["llave"],PDO::PARAM_STR);
        $stmt->bindParam(":cedula",$datos["cedula"],PDO::PARAM_STR);
        $stmt->bindParam(":foto",$datos["foto"],PDO::PARAM_STR);
        $stmt->bindParam(":telefono",$datos["telefono"],PDO::PARAM_STR);
        $stmt->bindParam(":numerodeordendown",$datos["numerodeordendown"],PDO::PARAM_STR);
        
       
        if($stmt -> execute()){
            return "ok";
        }else{
            print_r(conexion::conectar()-> errorInfo());
        }
    }

    static public function mdlnuevaorden2($tabla,$datos){
        
        $stmt = conexion::conectar()->prepare("UPDATE $tabla SET ProductoAbro=:ProductoAbro,cntProductoAbro=:cntProductoAbro,FajasSuperbelt=:FajasSuperbelt,cntFajasSuperbelt=:cntFajasSuperbelt,FajasGates=:FajasGates,cntFajasGates=:cntFajasGates,BujiasChampion=:BujiasChampion,cntBujiasChampion=:cntBujiasChampion,PastillasHPS=:PastillasHPS,cntPastillasHPS=:cntPastillasHPS,Abrazaderasideal=:Abrazaderasideal,cntAbrazaderasideal=:cntAbrazaderasideal,LiquidodefrenosWagner=:LiquidodefrenosWagner,cntLiquidodefrenosWagner=:cntLiquidodefrenosWagner,FiltrosFram=:FiltrosFram,cntFiltrosFram=:cntFiltrosFram,CablesBB=:CablesBB,cntCablesBB=:cntCablesBB,hora=:hora,valor_hora=:valor_hora WHERE id =:id");
        
        $stmt->bindParam(":ProductoAbro",$datos["ProductoAbro"],PDO::PARAM_STR);
        $stmt->bindParam(":cntProductoAbro",$datos["cntProductoAbro"],PDO::PARAM_STR);
        $stmt->bindParam(":FajasSuperbelt",$datos["FajasSuperbelt"],PDO::PARAM_STR);
        $stmt->bindParam(":cntFajasSuperbelt",$datos["cntFajasSuperbelt"],PDO::PARAM_STR);
        $stmt->bindParam(":FajasGates",$datos["FajasGates"],PDO::PARAM_STR);
        $stmt->bindParam(":cntFajasGates",$datos["cntFajasGates"],PDO::PARAM_STR);
        $stmt->bindParam(":BujiasChampion",$datos["BujiasChampion"],PDO::PARAM_STR);
        $stmt->bindParam(":cntBujiasChampion",$datos["cntBujiasChampion"],PDO::PARAM_STR);
        $stmt->bindParam(":PastillasHPS",$datos["PastillasHPS"],PDO::PARAM_STR);
        $stmt->bindParam(":cntPastillasHPS",$datos["cntPastillasHPS"],PDO::PARAM_STR);
        $stmt->bindParam(":Abrazaderasideal",$datos["Abrazaderasideal"],PDO::PARAM_STR);
        $stmt->bindParam(":cntAbrazaderasideal",$datos["cntAbrazaderasideal"],PDO::PARAM_STR);
        $stmt->bindParam(":LiquidodefrenosWagner",$datos["LiquidodefrenosWagner"],PDO::PARAM_STR);
        $stmt->bindParam(":cntLiquidodefrenosWagner",$datos["cntLiquidodefrenosWagner"],PDO::PARAM_STR);
        $stmt->bindParam(":FiltrosFram",$datos["FiltrosFram"],PDO::PARAM_STR);
        $stmt->bindParam(":cntFiltrosFram",$datos["cntFiltrosFram"],PDO::PARAM_STR);
        $stmt->bindParam(":CablesBB",$datos["CablesBB"],PDO::PARAM_STR);
        $stmt->bindParam(":cntCablesBB",$datos["cntCablesBB"],PDO::PARAM_STR);
        $stmt->bindParam(":hora",$datos["hora"],PDO::PARAM_STR);
        $stmt->bindParam(":valor_hora",$datos["valor_hora"],PDO::PARAM_STR);
        $stmt->bindParam(":id",$datos["id"],PDO::PARAM_INT);
        if($stmt -> execute()){
            return "ok";
        }else{
            print_r(conexion::conectar()-> errorInfo());
        }
    }
    static public function mdltraerregistros($tabla){
        $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY numeroorden DESC");
        $stmt-> execute();
        return $stmt-> fetchAll();
        $stmt = null;
    }
    static public function mdlgenerarfactura($tabla, $datos){
        $stmt = conexion::conectar()->prepare("INSERT INTO $tabla (nombrecliente,telefono,cedula,fechafinal,numeroorden,fechainicio,metododepago,vendedor,total_antes_iva,iva,total_despues_iva,llave,numerodeordendown) VALUES (:nombrecliente,:telefono,:cedula,:fechafinal,:numeroorden,:fechainicio,:metododepago,:vendedor,:total_antes_iva,:iva,:total_despues_iva,:llave,:numerodeordendown) ");
        $stmt-> bindParam(":nombrecliente",$datos["nombrecliente"],PDO::PARAM_STR);
        $stmt-> bindParam(":telefono",$datos["telefono"],PDO::PARAM_STR);
        $stmt-> bindParam(":cedula",$datos["cedula"],PDO::PARAM_STR);
        $stmt-> bindParam(":fechafinal",$datos["fechafinal"],PDO::PARAM_STR);
        $stmt-> bindParam(":numeroorden",$datos["numeroorden"],PDO::PARAM_STR);
        $stmt-> bindParam(":fechainicio",$datos["fechainicio"],PDO::PARAM_STR);
        $stmt-> bindParam(":metododepago",$datos["metododepago"],PDO::PARAM_STR);
        $stmt-> bindParam(":vendedor",$datos["vendedor"],PDO::PARAM_STR);
        $stmt-> bindParam(":total_antes_iva",$datos["total_antes_iva"],PDO::PARAM_STR);
        $stmt-> bindParam(":iva",$datos["iva"],PDO::PARAM_STR);
        $stmt-> bindParam(":total_despues_iva",$datos["total_despues_iva"],PDO::PARAM_STR);
        $stmt-> bindParam(":llave",$datos["llave"],PDO::PARAM_STR);
        $stmt-> bindParam(":numerodeordendown",$datos["numerodeordendown"],PDO::PARAM_STR);
        if($stmt -> execute()){
            return "ok";
        }else{
            print_r(conexion::conectar()-> errorInfo());
        }
    }
    static public function mdltraerfacturas($tabla){
        $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY numeroorden DESC");
        $stmt-> execute();
        return $stmt->fetchAll();
        $stmt = null;
    }
    static public function mdltraerfacturas2($tabla,$item,$valor){
        $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item =:$item");
        $stmt-> bindParam(":".$item,$valor,PDO::PARAM_STR);
        $stmt-> execute();
        return $stmt->fetch();
        $stmt = null;
    }
    static public function mdlequipo($tabla){
        $stmt = conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt-> execute();
        return $stmt->fetchAll();
        $stmt = null;
    }
}
