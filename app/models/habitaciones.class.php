<?php
class Habitaciones extends Validator{
    private $id = null;
    private $numero = null;
    private $idtipo = null;
    private $idestado = null;
    private $capacidad = null;
    private $precio = null;
    
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
    
    public function setNumero($value){
			if($this->validateInt($value)){
				$this->numero = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getNumero(){
			return $this->numero;
		}
    
    public function setIdTipo($value){
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

    public function setIdestado($value){
		if($this->validateId($value)){
			$this->idestado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdestado(){
		return $this->idestado;
		}
		
		public function setPrecio($value){
			if($this->validateMoney($value,2)){
				$this->precio = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getPrecio(){
			return $this->precio;
			}

			public function setCapacidad($value){
				if($this->validateInt($value)){
					$this->capacidad = $value;
					return true;
				}else{
					return false;
				}
			}
			public function getCapacidad(){
				return $this->capacidad;
				}
    
		//Metodos CRUD para cotegoria
		public function getTipo(){
			$sql = "SELECT * FROM TipoHabitacion";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
		//Obtener categoria
		public function getHabitacion(){
			$sql = "SELECT IdHabitacion, NumeroHabitacion, t.TipoHabitacion, Precio, Capacidad, e.Estado FROM habitaciones h, tipohabitacion t, estado e Where t.IdTipoHabitacion=h.IdTipoHabitacion and e.IdEstado=h.IdEstado ORDER BY IdHabitacion";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
	
    //Buscar categoria con parametros
    public function searchHabitacion($value){
		$sql = "SELECT IdHabitacion, NumeroHabitacion, t.TipoHabitacion, Precio, Capacidad, e.Estado FROM habitaciones h, tipohabitacion t, estado e Where t.IdTipoHabitacion=h.IdTipoHabitacion and e.IdEstado=h.IdEstado and (NumeroHabitacion LIKE ? OR Precio LIKE ?)";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar categoria
    public function createHabitacion(){
		$sql = "INSERT INTO habitaciones(NumeroHabitacion, IdTipoHabitacion, Precio, Capacidad, IdEstado) VALUES(?, ?, ?, ?, 1)";
		$params = array($this->numero, $this->idtipo, $this->precio, $this->capacidad);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readHabitacion(){
		$sql = "SELECT NumeroHabitacion, IdEstado, IdTipoHabitacion, Precio, Capacidad FROM salas WHERE IdHabitacion = ?";
		$params = array($this->id);
		$habitacion = Database::getRow($sql, $params);
		if($habitacion){
			$this->numero = $habitacion['NumeroHabitacion'];
            $this->idestado = $habitacion['IdEstado'];
						$this->idtipo = $habitacion['IdTipoHabitacion'];
						$this->precio = $habitacion['Precio'];
						$this->capacidad = $habitacion['Capacidad'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updateHabitacion(){
		$sql = "UPDATE habitaciones SET NumeroHabitacion = ?, IdEstado = ?, IdTipoHabitacion = ?, Precio = ?, Capacidad = ? WHERE IdHabitacion = ?";
		$params = array($this->numero, $this->idestado, $this->idtipo, $this->precio, $this->capacidad, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteHabitacion(){
		$sql = "DELETE FROM habitaciones WHERE IdHabitacion = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>