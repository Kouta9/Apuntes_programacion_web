<?php

class Crud {
    private $conexion;
    private $host = "localhost";
    private $user = "root";
    private $pass = "00279";
    private $bd = "abarrotes";

    public function __construct()
    {
        $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->bd",$this->user, $this->pass);
    }

    public function read()
    {
        $query = "SELECT * FROM productos";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }

    public function create($datos_contacto) {
        $query = "INSERT INTO productos (codigoProducto, nombreProducto, precio, idProvedor) VALUES (:codigoProducto, :nombreProducto, :precio, :idProvedor)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":codigoProducto", $datos_contacto["codigoProducto"]);
        $stmt->bindParam(":nombreProducto", $datos_contacto["nombreProducto"]);
        $stmt->bindParam(":precio", $datos_contacto["precio"]);
        $stmt->bindParam(":idProvedor", $datos_contacto["idProvedor"]);
        $stmt->execute();

        unset($this->conexion);
        return json_encode($stmt);
    }

    public function update($datos_contacto) {
        $query = "UPDATE productos SET codigoProducto = :codigoProducto, nombreProducto = :nombreProducto, precio = :precio, idProvedor = :idProvedor WHERE codigoProducto = :codigoProducto";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":codigoProducto", $datos_contacto["codigoProducto"]);
        $stmt->bindParam(":nombreProducto", $datos_contacto["nombreProducto"]);
        $stmt->bindParam(":precio", $datos_contacto["precio"]);
        $stmt->bindParam(":idProvedor", $datos_contacto["idProvedor"]);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }

    public function delete($id_contacto) {
        $query = "DELETE FROM productos WHERE codigoProducto = :codigoProducto";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":codigoProducto", $id_contacto);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }

    public function show($id_contacto) {
        $query = "SELECT * FROM productos WHERE codigoProducto = :codigoProducto";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":codigoProducto", $id_contacto);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        unset($this->conexion);
        return $result;
    }
}

?>