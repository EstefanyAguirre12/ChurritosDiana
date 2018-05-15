<?php
class Detallerestaurante extends Validator{
    private $id = null;
    private $idmesa = null;
    private $idproducto = null;
    private $idcuenta = null;
    private $cantidad = null;
    
    //Métodos para sobrecarga de propiedades
    public function setId($value){
        if($this->validateId($value)){
            $this->id = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getId(){
			return $this->id;
    }
    
    public function setIdmesa($value){
			if($this->validateId($value)){
				$this->idmesa = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getIdmesa(){
			return $this->idmesa;
		}
    
    public function setIdproducto($value){
		if($this->validateId($value)){
			$this->idproducto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdproducto(){
		return $this->idproducto ;
    }

    public function setIdCuenta($value){
		if($this->validateId($value)){
			$this->idcuenta = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdCuenta(){
		return $this->idcuenta;
		}
		
		public function setCantida ($value){
			if($this->validateNumeric($value, 2)){
				$this->cantidad = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getCantidad(){
			return $this->cantidad;
			}

    //Metodos CRUD para cotegoria
		//Obtener categoria
		public function getDetallerestaurante(){
			$sql = "SELECT IdDetalle, IdMesa, IdProducto, IdCuenta, Cantidad FROM detallerestaurante ORDER BY IdDetalle";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
	
    //Buscar categoria con parametros
    public function searchDetallerestaurante($value){
		$sql = "SELECT * FROM detallerestaurante WHERE IdDetalle LIKE ? OR IdProducto LIKE ? ORDER BY IdDetalle";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $paramsProducto
    //Insertar categoria
    public function createDetallerestaurante(){
		$sql = "INSERT INTO detallerestaurante(IdDetalle, IdMesa, IdProducto, IdCuenta, Cantidad) VALUES(?, ?, ?, ?, ?)";
		$params = array($this->id, $this->idmesa, $this->idproducto, $this->idcuenta, $this->cantidad);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readDetallerestaurante(){
		$sql = "SELECT IdMesa, IdProducto, IdCuenta, Cantidad FROM detallerestaurante WHERE IdDetalle = ?";
		$params = array($this->id);
		$detalle = Database::getRow($sql, $params);
		if($detalle){
			$this->idmesa = $detalle['IdMesa'];
            $this->idproducto = $detalle['IdProducto'];
                        $this->idcuenta = $detalle['IdCuenta'];
                        $this->cantidad = $detalle['Cantidad'];
						
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updateDetallerestaurante(){
		$sql = "UPDATE detallerestaurante SET IdMesa = ?, IdProducto = ?, IdCuenta = ?, Cantidad = ? WHERE IdDetalle = ?";
		$params = array($this->iddetalleres, $this->idcuenta, $this->fechapedido, $this->Id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteDetallerestaurante(){
		$sql = "DELETE FROM detallerestaurante WHERE IdDetalle = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>