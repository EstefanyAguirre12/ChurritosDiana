<?php
class Detalleconferencia extends Validator{
    private $id = null;
    private $idsala = null;
    private $idmesa = null;
    private $idcuenta = null;
    private $idsilla = null;
    private $horain = null;
    private $horafi = null;
    private $fecha = null;
    private $cantidadm = null;
    private $cantidads = null;
    

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
    
    public function setIdsala($value){
			if($this->validateId($value)){
				$this->idsala = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getIdsala(){
			return $this->idsala;
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
		
		public function setIdsilla($value){
			if($this->validateId($value)){
				$this->idsilla = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getIdsila(){
			return $this->idsilla;
			}

			public function setHorain($value){
				if($this->validateNumeric($value)){
					$this->horain = $value;
					return true;
				}else{
					return false;
				}
			}
			public function getHorain(){
				return $this->horain;
                }
                
                public function setHorafi($value){
                    if($this->validateNumeric($value)){
                        $this->horafi = $value;
                        return true;
                    }else{
                        return false;
                    }
                }
                public function getHorafi(){
                    return $this->horafi;
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

                    public function setCantidadm($value){
                        if($this->validateNumeric($value)){
                            $this->cantidadm = $value;
                            return true;
                        }else{
                            return false;
                        }
                    }
                    public function getCantidadm(){
                        return $this->cantidadm;
                        }

                        public function setCantidads($value){
                            if($this->validateNumeric($value)){
                                $this->cantidads = $value;
                                return true;
                            }else{
                                return false;
                            }
                        }
                        public function getCantidads(){
                            return $this->cantidads;
                            }
    
    //Metodos CRUD para cotegoria
	public function getReservas(){
		$sql = "SELECT `IdReserva`, salas.NombreSala `IdMesa`, `CantidadMesas`, `CantidadSillas`, `HoraInicio`, `HoraFin`, detalleconferencia.Fecha,entes.Nombres 
		FROM detalleconferencia , salas ,cuentatotal,entes
		WHERE detalleconferencia.IdSala = salas.IdSala AND detalleconferencia.IdCuenta = cuentatotal.IdCuenta AND cuentatotal.IdEnte = entes.IdEnte";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	
    //Buscar categoria con parametros
    public function searchReserva($value){
		$sql = "SELECT `IdReserva`, salas.NombreSala `IdMesa`, `CantidadMesas`, `CantidadSillas`, `HoraInicio`, `HoraFin`, detalleconferencia.Fecha,entes.Nombres 
		FROM detalleconferencia , salas ,cuentatotal,entes
		WHERE detalleconferencia.IdSala = salas.IdSala AND detalleconferencia.IdCuenta = cuentatotal.IdCuenta AND cuentatotal.IdEnte = entes.IdEnte AND entes.Nombres LIKE ?";
		$params = array("%$value%");
        echo Database::getRows($sql, $params);
        return false;
    }
    //Obtener Salas
    public function getSalas(){
		$sql = "SELECT `IdSala`, `NombreSala`, `Descripcion`, `Capacidad`, `Costo` FROM `salas` WHERE `IdEstadoSala`=1";
		$params = array(null);
		return Database::getRows($sql, $params);
    }
    //Obtener Salas
    public function getCuentas(){
        $sql = "SELECT `IdCuenta`, entes.Nombres, `Fecha` FROM `cuentatotal` INNER JOIN entes ON cuentatotal.IdEnte = entes.IdEnte";
        $params = array(null);
        return Database::getRows($sql, $params);
    }
        //Obtener mesas
        public function getMesas(){
            $sql = "SELECT `IdMesa`,  `Nombre` FROM `mesas";
            $params = array(null);
            return Database::getRows($sql, $params);
        }
        //Obtener sillas
        public function getSillas(){
            $sql = "SELECT `IdSilla`, `Nombre` FROM `sillas`";
            $params = array(null);
            return Database::getRows($sql, $params);
        }
    //Insertar categoria
    public function createRconferencia(){
		$sql = "INSERT INTO `detalleconferencia`(`IdReserva`, `IdSala`, `IdMesa`, `CantidadMesas`, `IdSilla`, `CantidadSillas`, `HoraInicio`, `HoraFin`, `Fecha`, `IdCuenta`) VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $params = array( $this->idsala, $this->idmesa, $this->cantidadm, $this->idsilla,$this->cantidads,  $this->horain, $this->horafi, $this->fecha,$this->idcuenta );
        var_dump( $params);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readDetalleconferencia(){
		$sql = "SELECT `IdReserva`, `IdSala`, `IdMesa`, `CantidadMesas`, `IdSilla`, `CantidadSillas`, `HoraInicio`, `HoraFin`, `Fecha`, `IdCuenta` 
        FROM `detalleconferencia` WHERE `IdReserva`=?";
		$params = array($this->id);
		$confe = Database::getRow($sql, $params);
		if($confe){
			$this->idsala = $confe['IdSala'];
            $this->idmesa = $confe['IdMesa'];
            $this->idsilla = $confe['IdSilla'];
            $this->idcuenta = $confe['IdCuenta'];
            $this->horain = $confe['HoraInicio'];
            $this->horafin = $confe['HoraFin'];
            $this->fecha = $confe['Fecha'];
            $this->cantidads = $confe['CantidadSillas'];
            $this->cantidadm = $confe['CantidadMesas'];
                        
			return true;
		}else{
			return false;
		}
    }
    //Modificar categoria
    public function updateDetalleconferencia(){
		$sql = "UPDATE detalleconferencia SET IdSala = ?, IdMesa = ?, IdSilla = ?, IdCuenta = ?, HoraInicio = ?, HoraFin = ?, Fecha = ?, CantidadSillas = ?, CantidadMesas = ? WHERE IdReserva  = ?";
		$params = array($this->idsala, $this->idmesa, $this->idsilla, $this->idcuenta, $this->horain, $this->horafi, $this->fecha, $this->cantidads, $this->cantidadm, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteConferencia($value){
		$sql = "DELETE FROM `detalleconferencia` WHERE `IdReserva` = ?";
		$params = array($value);
		return Database::executeRow($sql, $params);
	}
}
?>