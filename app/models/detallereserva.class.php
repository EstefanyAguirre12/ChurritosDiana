<?php
class Detallereserva extends Validator{
    private $id = null;
    private $idhabitacion = null;
    private $idcuenta = null;
    private $horainicio = null;
    private $horafin = null;
    private $fechainicio = null;
    private $fechafin = null;
    
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
    
    public function setIdhabitacion($value){
			if($this->validateId($value)){
				$this->idhabitacion = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getIdhabitacion(){
			return $this->idhabitacion;
		}
    
    public function setIdcuenta($value){
		if($this->validateId($value)){
			$this->idcuenta = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdcuenta(){
		return $this->idcuenta;
    }

    public function setHorainicio($value){
		if($this->validateDate($value)){
			$this->horainicio = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getHorainicio(){
		return $this->horainicio;
		}
		
		public function setHorafin($value){
			if($this->validateDate($value)){
				$this->horafin = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getHorafin(){
			return $this->horafin;
			}

			public function setFechainicio($value){
				if($this->validateDate($value)){
					$this->fechainicio = $value;
					return true;
				}else{
					return false;
				}
			}
			public function getFechainicio(){
				return $this->fechainicio;
                }
                
                public function setFechafin($value){
                    if($this->validateDate($value)){
                        $this->fechafin = $value;
                        return true;
                    }else{
                        return false;
                    }
                }
                public function getFechafin(){
                    return $this->fechafin;
                    }

    //Metodos CRUD para cotegoria
		//Obtener categoria
		public function getDetalleres(){
			$sql = "SELECT IdDetalle, IdHabitacion, IdCuenta, HoraInicio, HoraFin, FechaInicio, FechaFin FROM detallereserva ORDER BY IdDetalle";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
	
    //Buscar categoria con parametros
    public function searchDetalleres($value){
		$sql = "SELECT * FROM detallereserva WHERE IdCuenta LIKE ? OR IdDetalle LIKE ? ORDER IdDetalle";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar categoria
    public function createDetalleres(){
		$sql = "INSERT INTO detallereserva(IdDetalle, IdHabitacion, IdCuenta, HoraInicio, HoraFin, FechaInicio, FechaFin) VALUES(?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->id, $this->idhabitacion, $this->idcuenta, $this->horainicio, $this->horafin, $this->fechainicio, $this->fechafin);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readDetalleres(){
		$sql = "SELECT IdHabitacion, IdCuenta, HoraInicio, HoraFin, FechaInicio, FechaFin FROM detallereserva WHERE IdDetalle = ?";
		$params = array($this->id);
		$deta = Database::getRow($sql, $params);
		if($deta){
			$this->idhabitacion = $ente['IdHabitacion'];
            $this->idcuenta = $ente['IdCuenta'];
						$this->horainicio = $ente['HoraInicio'];
						$this->horafin = $ente['HoraFin'];
                        $this->fechainicio = $ente['FechaInicio'];
                        $this->fechafin = $ente['FechaFin'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updateDetalleres(){
		$sql = "UPDATE detallereserva SET IdHabitacion = ?, IdCuenta = ?, HoraInicio = ?, HoraFin = ?, FechaInicio = ?, FechaFin = ? WHERE IdDetalle = ?";
		$params = array($this->idhabitacion, $this->idcuenta, $this->horainicio, $this->horafin, $this->fechainicio, $this->fechafin, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteEnte(){
		$sql = "DELETE FROM detallereserva WHERE IdDetalle = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>