<?php
class Mesas extends Validator{
    private $id = null;
    private $idtipo = null;
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
    
    public function setIdtipo($value){
			if($this->validateId($value)){
				$this->idtipo = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getIdtipo(){
			return $this->idtipo;
        }
        
        public function setCantidad($value){
			if($this->validateNumeric($value, 1, 200)){
				$this->cantidad = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getCantidad(){
			return $this->cantidad;
		}
    
    //Metodos CRUD
    //Obtener Ocasion
    public function getMesa(){
		$sql = "SELECT IdTipoMesa, Cantidad FROM mesas ORDER BY IdTipo";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function searchMesas($value){
			$sql = "SELECT * FROM mesas WHERE IdTipoMesa LIKE ?  ORDER BY Cantidad";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
    //Insertar Ocasion
    public function createMesas(){
		$sql = "INSERT INTO mesas(IdTipoMesa, Cantidad) VALUES(?, ?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readMesas(){
		$sql = "SELECT IdTipoMesa FROM mesas WHERE IdTipo = ?";
		$params = array($this->id);
		$mesita = Database::getRow($sql, $params);
		if($mesita){
            $this->idtipo = $mesita['IdTipoMesa'];
            $this->cantidad = $mesita['Cantidad'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateMesas(){
		$sql = "UPDATE mesas SET IdTipoMesa, Cantidad = ? WHERE IdMesa = ?";
		$params = array($this->idtipo, $this->cantidad, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteMesas(){
		$sql = "DELETE FROM mesas WHERE IdTipoMesa = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>