<?php
class Tipohabitacion extends Validator{
    private $id = null;
    private $nombre = null;
    
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
    
    //Metodos CRUD
    //Obtener Ocasion
    public function getTipohabitacion(){
    	$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

        $limite = 5;
 
        $limite_inicio = ($page - 1)* $limite;
		$sql = "SELECT IdTipoHabitacion, TipoHabitacion FROM tipohabitacion ORDER BY TipoHabitacion LIMIT $limite_inicio , $limite";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function searchTipohabitacion($value){
			$sql = "SELECT * FROM tipohabitacion WHERE TipoHabitacion LIKE ?  ORDER BY TipoHabitacion";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}

	public function countTipoHabitaciones()
    {
        $sql = "SELECT COUNT(*) AS Numero FROM TipoHabitacion";
        $params = array(null);
        return database::getRow($sql, $params);
    }

    //Insertar Ocasion
    public function createTipohabitacion(){
		$sql = "INSERT INTO tipohabitacion(TipoHabitacion) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readTipohabitacion(){
		$sql = "SELECT TipoHabitacion FROM tipohabitacion WHERE IdTipoHabitacion = ?";
		$params = array($this->id);
		$tipohabitacion = Database::getRow($sql, $params);
		if($tipohabitacion){
			$this->nombre = $tipohabitacion['TipoHabitacion'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateTipohabitacion(){
		$sql = "UPDATE tipohabitacion SET TipoHabitacion = ? WHERE IdTipoHabitacion = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteTipohabitacion(){
		$sql = "DELETE FROM tipohabitacion WHERE IdTipoHabitacion = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>