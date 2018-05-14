<?php
class Salas extends Validator{
    private $id = null;
    private $idhabitacion = null;
    private $iddetallesres = null;
    private $idcuenta = null;
    private $fechapedido = null;
    
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
    
    public function setIdHabitacion($value){
			if($this->validateId($value)){
				$this->idhabitacion = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getIdHabitacion(){
			return $this->nombre;
		}
    
    public function setIdDetallesRes($value){
		if($this->validateId($value)){
			$this->iddetalleres = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdDetallesRes(){
		return $this->idestadosala;
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
		
		public function setFechapedido($value){
			if($this->validateDate($value)){
				$this->fechapedido = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getFechapedido(){
			return $this->fechapedido;
			}

    //Metodos CRUD para cotegoria
		//Obtener categoria
		public function getPedidohabitacion(){
			$sql = "SELECT IdHabitacion, IdDetalleRes, IdCuenta, FechaPedido FROM pedidohabitacion ORDER BY IdHabitacion";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
	
    //Buscar categoria con parametros
    public function searchPedidohabitacion($value){
		$sql = "SELECT * FROM pedidohabitacion WHERE IdDetalleRes LIKE ? OR IdCuenta LIKE ? ORDER BY Idhabitacio";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $paramsProducto
    //Insertar categoria
    public function createPedidohabitacion(){
		$sql = "INSERT INTO pedidohabitacion(IdDetalleRes, IdCuenta, FechaPedido) VALUES(?, ?, ?)";
		$params = array($this->id, $this->iddetalle, $this->idcuenta, $this->fechapedido);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readPedidohabitacion(){
		$sql = "SELECT IdHabitacion, IdDetalleRes, IdCuenta, FechaPedido FROM pedidohabitacion WHERE IdPHabitacion = ?";
		$params = array($this->id);
		$habitacion = Database::getRow($sql, $params);
		if($habitacion){
			$this->iddetalleres = $habitacion['IdDetalleRes'];
            $this->idcuenta = $habitacion['IdCuenta'];
						$this->fechapedido = $habitacion['FechaPedido'];
						
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updatePedidohabitacion(){
		$sql = "UPDATE pedidohabitacion SET idDetalleRes = ?, IdCuenta = ?, FechaPedido = ? WHERE IdHabitacion = ?";
		$params = array($this->iddetalleres, $this->idcuenta, $this->fechapedido, $this->Id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deletePedidohabitacion(){
		$sql = "DELETE FROM pedidohabitacion WHERE IdHabitacion = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>