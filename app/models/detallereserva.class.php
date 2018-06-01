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
	public function getReservas(){
		$sql = "SELECT `IdDetalle`, `FechaInicio`, `FechaFin`, `HoraInicio`, `HoraFin`, habitaciones.NumeroHabitacion, entes.Nombres
		FROM `detallereserva`,habitaciones,cuentatotal,entes 
		WHERE detallereserva.IdHabitacion= habitaciones.IdHabitacion AND detallereserva.IdCuenta = cuentatotal.IdCuenta AND cuentatotal.IdEnte = entes.IdEnte";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	
	//Buscar categoria con parametros
	public function searchReserva($value){
		$sql = "SELECT `IdDetalle`, `FechaInicio`, `FechaFin`, `HoraInicio`, `HoraFin`, habitaciones.NumeroHabitacion, entes.Nombres 
		FROM `detallereserva`,habitaciones,cuentatotal,entes 
		WHERE detallereserva.IdHabitacion= habitaciones.IdHabitacion AND detallereserva.IdCuenta = cuentatotal.IdCuenta AND cuentatotal.IdEnte = entes.IdEnte AND  entes.Nombres LIKE ? ";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
    //Insertar categoria
    public function createDetalleres(){
		$sql = "INSERT INTO `detallereserva`(`IdDetalle`, `FechaInicio`, `FechaFin`, `HoraInicio`, `IdHabitacion`, `HoraFin`, `IdCuenta`) VALUES (null, ?, ?, ?, ?, ?, ?)";
		$params = array( $this->fechainicio, $this->fechafin,$this->horainicio, $this->idhabitacion, $this->horafin, $this->idcuenta );
		var_dump($params);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readDetalleres(){
		$sql = "SELECT `IdDetalle`, `FechaInicio`, `FechaFin`, `HoraInicio`, `IdHabitacion`, `HoraFin`, `IdCuenta` 
		FROM `detallereserva` WHERE `IdDetalle` = ?";
		$params = array($this->id);
		$ente = Database::getRow($sql, $params);
		if($ente){
			$this->idhabitacion = $ente['IdHabitacion'];
            $this->idcuenta = $ente['IdCuenta'];
			$this->horainicio = $ente['HoraInicio'];
			$this->horafin = $ente['HoraFin'];
			$this->fechainicio = $ente['FechaInicio'];
			$this->fechafin = $ente['FechaFin'];
			return true;
		}else{
			return false;
		}
	}
	//Obtener sillas
	public function gethabitacion(){
		$sql = "SELECT `IdHabitacion`, `NumeroHabitacion`, `Capacidad`, `Precio`, `IdTipoHabitacion`, `IdEstado` FROM `habitaciones`";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	    //Obtener Salas
		public function getCuentas(){
			$sql = "SELECT `IdCuenta`, entes.Nombres, `Fecha` FROM `cuentatotal` INNER JOIN entes ON cuentatotal.IdEnte = entes.IdEnte";
			$params = array(null);
			return Database::getRows($sql, $params);
		}
    //Modificar categoria
    public function updateDetalleres(){
		$sql = "UPDATE detallereserva SET IdHabitacion = ?, IdCuenta = ?, HoraInicio = ?, HoraFin = ?, FechaInicio = ?, FechaFin = ? WHERE IdDetalle = ?";
		$params = array($this->idhabitacion, $this->idcuenta, $this->horainicio, $this->horafin, $this->fechainicio, $this->fechafin, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteEnte($value){
		$sql = "DELETE FROM detallereserva WHERE IdDetalle = ?";
		$params = array($value);
		return Database::executeRow($sql, $params);
	}
}
?>