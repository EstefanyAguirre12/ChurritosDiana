<?php
class Cuentatotal extends Validator{
    private $id = null;
    private $idente = null;
    private $fecha = null;
    
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
    
    public function setIdente($value){
			if($this->validateId($value)){
				$this->idente = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getIdente(){
			return $this->idente;
        }
        
        public function setFecha($value){
			if($this->validateDate($value)){
				$this->fecha = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getFecha(){
			return $this->fecha;
		}
    
    //Metodos CRUD
    //Obtener Ocasion
    public function getCuenta(){
		$sql = "SELECT IdCuenta, IdEnte, Fecha FROM cuentatotal ORDER BY IdCuenta";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function searchCuenta($value){
			$sql = "SELECT * FROM cuentatotal WHERE IdCuenta LIKE ?  ORDER BY IdCuenta";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
    //Insertar Ocasion
    public function createCuenta(){
		$sql = "INSERT INTO cuentatotal(IdEnte, Fecha) VALUES(?, ?)";
		$params = array($this->idente, $this->fecha);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readCuenta(){
		$sql = "SELECT IdCuenta FROM cuentatotal WHERE IdCuenta = ?";
		$params = array($this->id);
		$qenta = Database::getRow($sql, $params);
		if($qenta){
			$this->idcuenta = $qenta['IdCuenta'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateCuenta(){
		$sql = "UPDATE cuentatotal SET IdEnte = ?, Fecha = ? WHERE IdCuenta = ?";
		$params = array($this->idente, $this->fecha, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteCuenta(){
		$sql = "DELETE FROM cuentatotal WHERE IdCuenta = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>