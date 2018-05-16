<?php
class Categoriainmueble extends Validator{
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
    public function getCategoriainmueble(){
		$sql = "SELECT IdCategoria, Categoria FROM categoriainmueble ORDER BY Categoria";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function searchCategoriainmueble($value){
			$sql = "SELECT * FROM categoriainmueble WHERE Categoria LIKE ?  ORDER BY Categoria";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
    //Insertar Ocasion
    public function createCategoriainmueble(){
		$sql = "INSERT INTO categoriainmueble(Categoria) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readCategoriainmueble(){
		$sql = "SELECT Categoria FROM categoriainmueble WHERE IdCategoria = ?";
		$params = array($this->id);
		$inm = Database::getRow($sql, $params);
		if($inm){
			$this->nombre = $inm['Categoria'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateCategoriainmueble(){
		$sql = "UPDATE categoriainmueble SET Categoria = ? WHERE IdCategoria = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteCategoriainmueble(){
		$sql = "DELETE FROM categoriainmueble WHERE IdCategoria = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>