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
			return $this->nombre;
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
		return $this->direccion;
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
			return $this->dui;
			}

			public function setHorain($value){
				if($this->validateDate($value)){
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
                    if($this->validateDate($value)){
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
                        if($this->validateNumeric($value,10)){
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
                            if($this->validateNumeric($value,10)){
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
		//Obtener categoria
		public function getDetalleconferencia(){
			$sql = "SELECT `IdReserva`, salas.NombreSala `IdMesa`, `CantidadMesas`, `IdSilla`, `CantidadSillas`, `HoraInicio`, `HoraFin`, detalleconferencia.Fecha,entes.Nombres 
            FROM detalleconferencia , salas ,cuentatotal,entes
            WHERE detalleconferencia.IdSala = salas.IdSala AND detalleconferencia.IdCuenta = cuentatotal.IdCuenta AND cuentatotal.IdEnte = entes.IdEnte";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
	
    //Buscar categoria con parametros
    public function searchDetalleconferencia($value){
		$sql = "SELECT `IdReserva`, salas.NombreSala `IdMesa`, `CantidadMesas`, `IdSilla`, `CantidadSillas`, `HoraInicio`, `HoraFin`, detalleconferencia.Fecha,entes.Nombres 
        FROM detalleconferencia , salas ,cuentatotal,entes
        WHERE detalleconferencia.IdSala = salas.IdSala AND detalleconferencia.IdCuenta = cuentatotal.IdCuenta AND cuentatotal.IdEnte = entes.IdEnte AND entes.Nombres LIKE ? ";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar categoria
    public function createDetalleconferencia(){
		$sql = "INSERT INTO detalleconferencia(IdReserva, IdSala, IdMesa, IdSilla, IdCuenta, HoraInicio, HoraFin, Fecha, CantidadSilas, CantidadMesas) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->id, $this->idsala, $this->idmesa, $this->idsilla, $this->idcuenta, $this->horain, $this->horafin, $this->fecha, $this->cantidads, $this->cantidadm);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readDetalleconferencia(){
		$sql = "SELECT IdSala, IdMesa, IdSilla, IdCuenta, HoraInicio, HoraFin, Fecha, CantidadSilas, CantidadMesas FROM detalleconferencia WHERE IdReserva = ?";
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
			return null;
		}
    }
    //Modificar categoria
    public function updateDetalleconferencia(){
		$sql = "UPDATE detalleconferencia SET IdSala = ?, IdMesa = ?, IdSilla = ?, IdCuenta = ?, HoraInicio = ?, HoraFin = ?, Fecha = ?, CantidadSillas = ?, CantidadMesas = ? WHERE IdReserva  = ?";
		$params = array($this->idsala, $this->idmesa, $this->idsilla, $this->idcuenta, $this->horain, $this->horafi, $this->fecha, $this->cantidads, $this->cantidadm, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteEmpleado(){
		$sql = "DELETE FROM detalleconferencia WHERE IdReserva = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>