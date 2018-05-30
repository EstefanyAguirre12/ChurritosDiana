<?php
class Tipoente extends Validator{
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
	public function getTipoente(){
		$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

	    $limite = 1;

	    $limite_inicio = ($page - 1)* $limite;
		$sql = "SELECT IdTipo, TipoEnte FROM tipoente ORDER BY Tipoente LIMIT $limite_inicio , $limite";
		$params = array(null);
		return Database::getRows($sql, $params);
		}

	public function searchTipoente($value){
		$sql = "SELECT * FROM tipoente WHERE TipoEnte LIKE ?  ORDER BY TipoEnte";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}

	public function countTipoEnte()
    {
        $sql = "SELECT COUNT(*) AS Numero FROM tipoente";
        $params = array(null);
        return database::getRow($sql, $params);
    }

    //Insertar Ocasion
    public function createTipoente(){
		$sql = "INSERT INTO tipoente(TipoEnte) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readTipoente(){
		$sql = "SELECT TipoEnte FROM tipoente WHERE IdTipo = ?";
		$params = array($this->id);
		$tipoente = Database::getRow($sql, $params);
		if($tipoente){
			$this->nombre = $tipoente['TipoEnte'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateTipoente(){
		$sql = "UPDATE tipoente SET TipoEnte = ? WHERE IdTipo = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteTipoente(){
		$sql = "DELETE FROM tipoente WHERE IdTipo = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>