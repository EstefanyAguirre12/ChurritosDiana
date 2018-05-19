<?php
class Mesarestaurante extends Validator{
    private $id = null;
    private $idestado = null;
    private $capacidad = null;
    private $numeromesa = null;
    
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
    
    public function setIdestado($value){
			if($this->validate($value)){
				$this->idestado = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getIdestado(){
			return $this->idestado;
		}
    
    public function setCapacidad($value){
		if($this->validateNumeric($value, 1, 200)){
			$this->capacidad = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCapacidad(){
		return $this->capacidad;
    }

    public function setNumeromesa($value){
		if($this->validateNumeric($value, 3)){
			$this->numeromesa = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNumeromesa(){
		return $this->numeromesa;
    }
    
    //Metodos CRUD para cotegoria
		//Obtener categoria
		public function getMesarestaurante(){
			$sql = "SELECT IdMesaRes, IdEstado, NumeroMesa, Capacidad FROM mesarestaurante ORDER BY IdMesaRes";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
	
    //Buscar categoria con parametros
    public function searchMesarestaurante($value){
		$sql = "SELECT * FROM mesarestaurante WHERE IdMesaRes LIKE ? OR Capacidad LIKE ? ORDER BY NumeroMesa";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar categoria
    public function createMesarestaurante(){
		$sql = "INSERT INTO mesarestaurante(IdEstado, NumeroMesa, Capacidad) VALUES(?, ?, ?)";
		$params = array($this->idestado, $this->numeromesa, $this->capacidad);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readMesarestaurante(){
		$sql = "SELECT IdEstado, NumeroMesa, Capacidad FROM mesarestaurante WHERE IdMesaRes = ?";
		$params = array($this->id);
		$mesares = Database::getRow($sql, $params);
		if($mesares){
			$this->idestado = $mesares['IdEstado'];
            $this->numeromesa = $mesares['NumeroMesa'];
            $this->capacidad = $mesares['Capacidad'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updateMesarestaurante(){
		$sql = "UPDATE mesarestaurante SET IdEstado = ?, NumeroMesa = ?, Capacidad = ? WHERE IdMesaRes = ?";
		$params = array($this->idestado, $this->numeromesa, $this->capacidad, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteMesarestaurante(){
		$sql = "DELETE FROM mesarestaurante WHERE IdMesaRes = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>