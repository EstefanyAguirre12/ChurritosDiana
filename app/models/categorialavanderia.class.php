<?php
class Categorialavanderia extends Validator{
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
    public function getCategoria(){
    	$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

        $limite = 1;
 
        $limite_inicio = ($page - 1)* $limite;
		$sql = "SELECT IdCategoria, Categoria FROM categorialavanderia ORDER BY Categoria LIMIT $limite_inicio , $limite";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function searchCategoria($value){
			$sql = "SELECT * FROM categorialavanderia WHERE Categoria LIKE ?  ORDER BY Categoria";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}

		public function countCategorialavanderia()
    {
        $sql = "SELECT COUNT(*) AS Numero FROM categorialavanderia";
        $params = array(null);
        return database::getRow($sql, $params);
    }
    //Insertar Ocasion
    public function createCategoria(){
		$sql = "INSERT INTO categorialavanderia(Categoria) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readCategoria(){
		$sql = "SELECT Categoria FROM categorialavanderia WHERE IdCategoria = ?";
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
    public function updateCategoria(){
		$sql = "UPDATE categorialavanderia SET Categoria = ? WHERE IdCategoria = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteCategoria(){
		$sql = "DELETE FROM categorialavanderia WHERE IdCategoria = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>