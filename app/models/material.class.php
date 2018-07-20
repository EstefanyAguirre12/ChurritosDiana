<?php
class Material extends Validator{
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
    public function getMaterial(){
    	$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

        $limite = 5;
 
        $limite_inicio = ($page - 1)* $limite;
		$sql = "SELECT IdMaterial, Material FROM material ORDER BY Material LIMIT $limite_inicio , $limite";
		$params = array(null);
		return Database::getRows($sql, $params);
		}

	public function countMaterial()
    {
        $sql = "SELECT COUNT(*) AS Numero FROM Material";
        $params = array(null);
        return database::getRow($sql, $params);
    }
    
	public function searchMaterial($value){
		$sql = "SELECT * FROM material WHERE Material LIKE ?  ORDER BY Material";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
    //Insertar Ocasion
    public function createMaterial(){
		$sql = "INSERT INTO material(Material) VALUES(?)";
		$params = array($this->nombre);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readMaterial(){
		$sql = "SELECT Material FROM material WHERE IdMaterial = ?";
		$params = array($this->id);
		$material = Database::getRow($sql, $params);
		if($material){
			$this->nombre = $material['Material'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateMaterial(){
		$sql = "UPDATE material SET Material = ? WHERE IdMaterial = ?";
		$params = array($this->nombre, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteMaterial(){
		$sql = "DELETE FROM material WHERE IdMaterial = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
	public function GetReporteMaterial($value){
		$sql = "SELECT lavanderia.Nombre , lavanderia.Cantidad ,lavanderia.Color ,categorialavanderia.Categoria 
		FROM categorialavanderia , lavanderia , material
		WHERE lavanderia.IdMaterial = material.IdMaterial AND lavanderia.IdCategoria = categorialavanderia.IdCategoria AND categorialavanderia.IdCategoria =?";
		$params = array($value);
		return Database::getRows($sql, $params);
	}
	public function getMaterial22($value){
		$sql = "SELECT material.Material
		 FROM material 
		 WHERE material.IdMaterial=?";
		$params = array($value);
		return Database::getRow($sql, $params);
	}
}
?>