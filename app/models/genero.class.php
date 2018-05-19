<?php
class Genero extends Validator{
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
    public function getGenero(){
		$sql = "SELECT IdGenero, NombreGenero FROM genero ORDER BY NombreGenero";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function searchGenero($value){
			$sql = "SELECT * FROM genero WHERE NombreGenero LIKE ?  ORDER BY NombreGenero";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
    //Insertar Ocasion
    public function createGenero(){
		$sql = "INSERT INTO genero(NombreGenero) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readGenero(){
		$sql = "SELECT NombreGenero FROM genero WHERE IdGenero = ?";
		$params = array($this->id);
		$genero = Database::getRow($sql, $params);
		if($genero){
			$this->nombre = $genero['NombreGenero'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateGenero(){
		$sql = "UPDATE genero SET NombreGenero = ? WHERE IdGenero = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteGenero(){
		$sql = "DELETE FROM genero WHERE IdGenero = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>