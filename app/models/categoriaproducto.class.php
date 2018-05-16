<?php
class Categoriaproducto extends Validator{
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
    public function getCategoriaproducto(){
		$sql = "SELECT IdCategoria, CategoriaProducto FROM categoriaproducto ORDER BY CategoriaProducto";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function searchCategoriaproducto($value){
			$sql = "SELECT * FROM categoriaproducto WHERE CategoriaProducto LIKE ?  ORDER BY CategoriaProducto";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
    //Insertar Ocasion
    public function createCategoriaproducto(){
		$sql = "INSERT INTO categoriaproducto(CategoriaProducto) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readCategoriaproducto(){
		$sql = "SELECT CategoriaProducto FROM categoriaproducto WHERE IdCategoria = ?";
		$params = array($this->id);
		$cat = Database::getRow($sql, $params);
		if($cat){
			$this->nombre = $cat['CategoriaProducto'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateCategoriaproducto(){
		$sql = "UPDATE categoriaproducto SET CategoriaProducto = ? WHERE IdCategoria = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteCategoriaproducto(){
		$sql = "DELETE FROM categoriaproducto WHERE IdCategoria = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>