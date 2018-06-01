<?php
class Mesas extends Validator{
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
    public function getMesa(){
		$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

        $limite = 5;
 
        $limite_inicio = ($page - 1)* $limite;
		$sql = "SELECT * FROM mesas ORDER BY IdMesa LIMIT $limite_inicio , $limite";
		$params = array(null);
		return Database::getRows($sql, $params);
		}

		public function countMesa()
    {
        $sql = "SELECT COUNT(*) AS Numero FROM mesas";
        $params = array(null);
        return database::getRow($sql, $params);
    }
		public function searchMesas($value){
			$sql = "SELECT * FROM mesas WHERE Nombre LIKE ?  ORDER BY Cantidad";
			$params = array("%$value%");
			return Database::getRows($sql, $params);
		}
    //Insertar Ocasion
    public function createMesas(){
		$sql = "INSERT INTO mesas(Nombre, Cantidad) VALUES(?, ?)";
		$params = array($this->nombre, $this->cantidad);
		return Database::executeRow($sql, $params);
    }
    //Leer Ocasion
    public function readMesas(){
		$sql = "SELECT Nombre, Cantidad FROM mesas WHERE IdMesa = ?";
		$params = array($this->id);
		$mesita = Database::getRow($sql, $params);
		if($mesita){
            $this->nombre = $mesita['Nombre'];
            $this->cantidad = $mesita['Cantidad'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar Ocasion
    public function updateMesas(){
		$sql = "UPDATE mesas SET Nombre=?, Cantidad = ? WHERE IdMesa = ?";
		$params = array($this->nombre, $this->cantidad, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar Ocasion
	public function deleteMesas(){
		$sql = "DELETE FROM mesas WHERE IdMesa = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>