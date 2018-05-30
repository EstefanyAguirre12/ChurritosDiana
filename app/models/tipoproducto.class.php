<?php
class Tipoproducto extends Validator{
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
    public function getTiproducto(){
    	$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

        $limite = 1;
 
        $limite_inicio = ($page - 1)* $limite;
		$sql = "SELECT IdTipo, TipoProducto FROM tipoproducto ORDER BY TipoProducto LIMIT $limite_inicio , $limite";
		$params = array(null);
		return Database::getRows($sql, $params);
		}

	public function countTipoProducto()
    {
        $sql = "SELECT COUNT(*) AS Numero FROM tipoproducto";
        $params = array(null);
        return database::getRow($sql, $params);
    }

	public function searchTiproducto($value){
		$sql = "SELECT * FROM tipoproducto WHERE TipoProducto LIKE ?  ORDER BY TipoProducto";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
    //Insertar Ocasion
    public function createTiproducto(){
		$sql = "INSERT INTO tipoproducto(TipoProducto) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readTiproducto(){
		$sql = "SELECT TipoProducto FROM tipoproducto WHERE IdTipo = ?";
		$params = array($this->id);
		$tipoproducto = Database::getRow($sql, $params);
		if($tipoproducto){
			$this->nombre = $tipoproducto['TipoProducto'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateTipoProducto(){
		$sql = "UPDATE tipoproducto SET TipoProducto = ? WHERE IdTipo = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteTipoProducto(){
		$sql = "DELETE FROM tipoproducto WHERE IdTipo = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>