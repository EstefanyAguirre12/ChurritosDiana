<?php
class Sillas extends Validator{
    private $id = null;
    private $nombre = null;
    private $cantidad = null;
    
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
        
		public function setCantidad($value){
			if($this->validateInt($value)){
				$this->cantidad = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getCantidad(){
			return $this->cantidad;
		}
    
    //Metodos CRUD
    //Obtener Ocasion
    public function getSillas(){
			$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

			$limite = 5;

			$limite_inicio = ($page - 1)* $limite;
		$sql = "SELECT * FROM sillas ORDER BY Nombre LIMIT $limite_inicio , $limite";
		$params = array(null);
		return Database::getRows($sql, $params);
		}
		public function countSillas()
    {
        $sql = "SELECT COUNT(*) AS Numero FROM sillas";
        $params = array(null);
        return database::getRow($sql, $params);
    }
		public function searchSillas($value){
			$sql = "SELECT * FROM sillas WHERE Nombre LIKE ?  ORDER BY IdSilla";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
    //Insertar Ocasion
    public function createSillas(){
		$sql = "INSERT INTO sillas(Nombre, Cantidad) VALUES(?, ?)";
		$params = array($this->nombre, $this->cantidad);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readSillas(){
		$sql = "SELECT Nombre, Cantidad FROM sillas WHERE IdSilla = ?";
		$params = array($this->id);
		$sillas = Database::getRow($sql, $params);
		if($sillas){
			$this->nombre = $sillas['Nombre'];
			$this->cantidad = $sillas['Cantidad'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateSillas(){
		$sql = "UPDATE sillas SET Nombre = ?, Cantidad = ? WHERE IdSilla = ?";
		$params = array($this->nombre, $this->cantidad, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteSillas(){
		$sql = "DELETE FROM sillas WHERE IdSilla = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>