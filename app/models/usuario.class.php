<?php
class Usuario extends Validator {
    private $id = null;
    private $id_Cargo = null;
    private $nombre = null;
    private $idempleado = null;
    private $clave = null;
    private $TIPOusuario = null;
	private $FechaContra = null;	
	private $numb_ingresos = null;	
	private $tiempo_intentos = null;
	private $estado_sesion = null;	
	
	//Métodos para sobrecarga de propiedades
	public function settiempo_intentos($value){
		if($this->validateDateTime($value)){
			$this->tiempo_intentos = $value;
			return true;
		}else{
			return false;
		}
	}
	public function gettiempo_intentos(){
		return $this->tiempo_intentos;
	}
	public function setestado_sesion($value){
		if($this->validateEnteros($value)){
			$this->estado_sesion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getestado_sesion(){
		return $this->estado_sesion;
	}

	public function setnumb_ingresos($value){
		if($this->validateEnteros($value)){
			$this->numb_ingresos = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getnumb_ingresos(){
		return $this->numb_ingresos;
	}
	public function setFechaContra($value){
		if($this->validateFecha($value)){
			$this->FechaContra = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFechaContra(){
		return $this->FechaContra;
	}
	public function setTIPOusuario($value){
		if($this->validateId($value)){
			$this->TIPOusuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTIPOusuario(){
		return $this->TIPOusuario;
	}
	public function setId_usuario($value){
		if($this->validateId($value)){
			$this->id_usuario = $value;
			return true;
		}else{
			return false;
		}
	}
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
    
    public function setNombre($value){
			if($this->validateAlphanumeric($value, 1, 50)){
				$this->nombre = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getNombre(){
			return $this->nombre;
		}
    
    public function setIdempleado($value){
		if($this->validateId($value)){
			$this->idempleado = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdempleado(){
		return $this->idempleado;
    }
    public function getCargo(){
		return $this->id_Cargo;
    }

    public function setClave($value){
		if($this->validatePassword($value)){
			$this->clave = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getClave(){
		return $this->clave;
    }
    
    //Metodos CRUD para cotegoria
    public function checkContra(){
        $sql = "SELECT ClaveUsuario FROM usuarios WHERE IdUsuario = ?";
        $params = array($this->id);
        $data = Database::getRow($sql, $params);
        if(password_verify($this->clave, $data['ClaveUsuario'])){
            return true;
        }else{
            return false;
        }
    }
    public function updateNumeroIntentos(){
		$sql = "UPDATE `usuarios` SET `numb_ingresos`= ? WHERE `IdUsuario`=?";
		$params = array($this->numb_ingresos, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function updateEstadoSesion(){
		$sql = "UPDATE `usuarios` SET `estado_sesion`=? WHERE `IdUsuario`=?";
		$params = array($this->estado_sesion, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function updateLastNumeroIntentos(){
		$sql = "UPDATE `usuarios` SET `numb_ingresos`= ?,`tiempo_intentos`=? WHERE `IdUsuario`=?";
		$params = array($this->numb_ingresos,$this->tiempo_intentos, $this->id);
		return Database::executeRow($sql, $params);
	}
	public function readEstadoSesion(){
		$sql = "SELECT `estado_sesion` FROM `usuarios` WHERE `IdUsuario`=?";
		$params = array($this->id);
		$user = Database::getRow($sql, $params);
		if($user){
			$this->estado_sesion=$user['estado_sesion'];
			return true;
		}else{
			return null;
		}
	}
    //cambiar contrasena
        public function changePassword(){
            $hash = password_hash($this->clave, PASSWORD_DEFAULT);
            $sql = "UPDATE usuarios SET ClaveUsuario = ? WHERE IdUsuario = ?";
            $params = array($hash, $this->id);
            return Database::executeRow($sql, $params);
        }
    // Verificar contraseña
    public function checkClaveUsuario()
    {
        
        $sql = "SELECT ClaveUsuario,cargos.IdCargo FROM usuarios,empleados,cargos WHERE  IdUsuario = ? AND usuarios.IdEmpleado = empleados.IdEmpleado  AND empleados.IdCargo = cargos.IdCargo ";
        $params = array($this->id);
        $data = Database::getRow($sql, $params);
        if(password_verify($this->clave, $data['ClaveUsuario']))
        {
            $this->id_Cargo = $data['IdCargo'];
            return true;
        }
        else
        {
            return false;
        }
    }

    public function countTipoProducto()
    {
        $sql = "SELECT COUNT(*) AS Numero FROM usuarios";
        $params = array(null);
        return database::getRow($sql, $params);
    }
    //Verificar usuarios
    public function checkUsuario()
    {
        $sql = "SELECT IdUsuario ,numb_ingresos,`tiempo_intentos`,estado_sesion,DATE(`tiempo_clave`)as FechaContra FROM usuarios WHERE NombreUsuario = ? ";
        $params = array($this->nombre);
        $data = Database::getRow($sql, $params);
        if($data)
        {
            $this->id = $data['IdUsuario']; 
			$this->FechaContra=$data['FechaContra'];
			$this->numb_ingresos=$data['numb_ingresos'];			
			$this->tiempo_intentos=$data['tiempo_intentos'];
			$this->estado_sesion=$data['estado_sesion'];	
            return true;
        }
        else
        {
            return false;
        }
    }
	//Obtener categoria
	public function getUsuario(){
        $page = (isset($_GET['page'])) ? $_GET['page'] : 1;

        $limite = 5;
 
        $limite_inicio = ($page - 1)* $limite;  
        $sql = "SELECT `NombreUsuario`  FROM `usuarios` LIMIT $limite_inicio , $limite";
        $params = array(null);
        $data = Database::getRows($sql, $params);
        if($data){
            return true;
        }else{
            return false;
        }
    }

    public function logOut(){
        return session_destroy();
    }
    
    public function getEmpleado(){
        $sql = "SELECT  * FROM empleados";
        $params = array(null);
        return Database::getRows($sql, $params);
        }
        public function getUsuarios(){
            $page = (isset($_GET['page'])) ? $_GET['page'] : 1;

            $limite = 5;
 
            $limite_inicio = ($page - 1)* $limite;
            $sql = "SELECT  IdUsuario,NombreUsuario,empleados.NombreEmpleado ,empleados.ApellidosEmpleado FROM usuarios INNER JOIN empleados ON usuarios.IdEmpleado = empleados.IdEmpleado ORDER BY IdUsuario LIMIT $limite_inicio , $limite";
            $params = array(null);
            return Database::getRows($sql, $params);
            }

            public function countusuario()
    {
        $sql = "SELECT COUNT(*) AS Numero FROM usuarios";
        $params = array(null);
        return database::getRow($sql, $params);
    }
    //Buscar categoria con parametros
    public function searchUsuario($value){
		$sql = "SELECT * FROM usuarios WHERE NombreUsuario LIKE ? OR IdEmpleado LIKE ? ORDER BY NombreUsuario";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar categoria
    public function createUsuario(){
        $hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "INSERT INTO usuarios(NombreUsuario, IdEmpleado, ClaveUsuario) VALUES(?, ?, ?)";
		$params = array($this->nombre, $this->idempleado, $hash);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readUsuario(){
		$sql = "SELECT NombreUsuario, IdEmpleado, ClaveUsuario FROM usuarios WHERE IdUsuario = ?";
		$params = array($this->id);
		$usuario = Database::getRow($sql, $params);
		if($usuario){
			$this->nombre = $usuario['NombreUsuario'];
            $this->idempleado = $usuario['IdEmpleado'];
            $this->clave = $usuario['ClaveUsuario'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updateUsuario(){
		$sql = "UPDATE usuarios SET NombreUsuario = ?, IdEmpleado = ?, ClaveUsuario = ? WHERE IdUsuario = ?";
		$params = array($this->nombre, $this->idempleado, $this->clave, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteUsuario(){
		$sql = "DELETE FROM usuarios WHERE IdUsuario = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>