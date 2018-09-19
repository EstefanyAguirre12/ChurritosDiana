<?php
class Cargos extends Validator{
    private $id = null;
    private $nombre = null;
	private $descripcion = null;
	private $perm1 = null;
	private $perm2 = null;
	private $perm3 = null;
	private $perm4 = null;
	private $perm5 = null;
	private $perm6 = null;
	private $perm7 = null;
	private $perm8 = null;
	private $perm9 = null;
	private $perm10 = null;
	private $perm11 = null;
	private $perm12 = null;
	private $perm13 = null;
	private $perm14 = null;


    
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
	

	public function setPerm1($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->perm1 = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getPerm1(){
			return $this->perm1;
	}


	public function setPerm2($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->perm2 = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getPerm2(){
			return $this->perm2;
	}
	
	public function setPerm3($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->perm3 = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getPerm3(){
			return $this->perm3;
	}
	
	public function setPerm4($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->perm4 = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getPerm4(){
			return $this->perm4;
	}
	
	public function setPerm5($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->perm5 = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getPerm5(){
			return $this->perm5;
	}

	public function setPerm6($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->perm6 = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getPerm6(){
			return $this->perm6;
	}
	
	public function setPerm7($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->perm7 = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getPerm7(){
			return $this->perm7;
	}
	
	public function setPerm8($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->perm8 = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getPerm8(){
			return $this->perm8;
	}
	
	public function setPerm9($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->perm9 = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getPerm9(){
			return $this->perm9;
	}
	
	public function setPerm10($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->perm10 = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getPerm10(){
			return $this->perm10;
	}
	
	public function setPerm11($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->perm11 = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getPerm11(){
			return $this->perm11;
	}
	
	public function setPerm12($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->perm12 = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getPerm12(){
			return $this->perm12;
	}
	
	public function setPerm13($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->perm13 = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getPerm13(){
			return $this->perm13;
	}
	
	public function setPerm14($value){
        if($this->validateAlphanumeric($value, 1, 200)){
            $this->perm14 = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getPerm14(){
			return $this->perm14;
	}
	


    public function setNombre($value){
			if($this->validateAlphanumeric($value, 1, 200)){
				$this->nombre = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getNombre(){
			return $this->nombre;
        }
        
        public function setDescripcion($value){
			if($this->validateAlphanumeric($value, 1, 200)){
				$this->descripcion = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
    
    //Metodos CRUD
    //Obtener Ocasion
    public function getCargo(){
    	$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

        $limite = 5;
 
        $limite_inicio = ($page - 1)* $limite;
		$sql = "SELECT IdCargo, NombreCargo, Descripcion FROM cargos ORDER BY IdCargo LIMIT $limite_inicio , $limite";
		$params = array(null);
		return Database::getRows($sql, $params);
		}

	public function countCargos()
    {
        $sql = "SELECT COUNT(*) AS Numero FROM cargos";
        $params = array(null);
        return database::getRow($sql, $params);
    }

		public function searchCargo($value){
			$sql = "SELECT * FROM cargos WHERE NombreCargo LIKE ?  ORDER BY IdCargo";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
    //Insertar Ocasion
    public function createCargo(){
		$sql = "INSERT INTO cargos(NombreCargo, Descripcion, h_reserva, h_servicio, h_habitaciones, h_registros, r_mesas, r_ordenes, r_registros, e_reservacion, e_salones, e_registro, l_registros, rr_registro, b_datos, g_registros) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
		$params = array($this->nombre, $this->descripcion, $this->perm1, $this->perm2, $this->perm3, $this->perm4, $this->perm5, $this->perm6, $this->perm7, $this->perm8, $this->perm9, $this->perm10, $this->perm11, $this->perm12, $this->perm13, $this->perm14);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readCargo(){
		$sql = "SELECT NombreCargo, Descripcion FROM cargos WHERE IdCargo = ?";
		$params = array($this->id);
		$krgo = Database::getRow($sql, $params);
		if($krgo){
			$this->nombre = $krgo['NombreCargo'];
			$this->descripcion = $krgo['Descripcion'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateCargo(){
		$sql = "UPDATE cargos SET NombreCargo = ?, Descripcion = ?, h_reserva = ?, h_servicio = ?, h_habitaciones = ?, h_registros = ?, r_mesas = ?, r_ordenes = ?, r_registros = ?, e_reservacion = ?, e_salones = ?, e_registro = ?, l_registros = ?, rr_registro = ?, b_datos = ?, g_registros = ? WHERE IdCargo = ?";
		$params = array($this->nombre, $this->descripcion, $this->perm1, $this->perm2, $this->perm3, $this->perm4, $this->perm5, $this->perm6, $this->perm7, $this->perm8, $this->perm9, $this->perm10, $this->perm11, $this->perm12, $this->perm13, $this->perm14, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteCargo(){
		$sql = "DELETE FROM cargos WHERE IdCargo = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}

	public function GetReporteCargos($value){
		$sql = "SELECT usuarios.NombreUsuario,empleados.NombreEmpleado,empleados.ApellidosEmpleado,empleados.DUIEmpleado,empleados.DireccionEmpleado, empleados.TelefonoEmpleado,empleados.FotoEmpleado, cargos.NombreCargo
		FROM `empleados`,usuarios , cargos  WHERE usuarios.IdEmpleado= empleados.IdEmpleado AND empleados.IdCargo=cargos.IdCargo  AND cargos.IdCargo=?";
		$params = array($value);
		return Database::getRows($sql, $params);
	}
	public function getCargo11($value){
		$sql = "SELECT cargos.NombreCargo FROM  cargos  WHERE cargos.IdCargo = ?";
		$params = array($value);
		return Database::getRow($sql, $params);
	}
}
?>