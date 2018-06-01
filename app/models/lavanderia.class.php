<?php
class Lavanderia extends Validator{
    private $id = null;
    private $nombre = null;
    private $idmaterial = null;
    private $idestado = null;
    private $idcategoria = null;
    private $color = null;
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
    
    public function setIdmaterial($value){
		if($this->validateId($value)){
			$this->idmaterial = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdmaterial(){
		return $this->idmaterial;
    }		
		public function setIdcategoria($value){
			if($this->validateId($value)){
				$this->idcategoria = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getIdcategoria(){
			return $this->idcategoria;
			}

			public function setColor($value){
				if($this->validateAlphanumeric($value, 1, 200)){
					$this->color = $value;
					return true;
				}else{
					return false;
				}
			}
			public function getColor(){
				return $this->color;
                }
                
                public function setCantidad($value){
                    if($this->validateAlphanumeric($value, 1, 200)){
                        $this->cantidad = $value;
                        return true;
                    }else{
                        return false;
                    }
                }
                public function getCantidad(){
                    return $this->cantidad;
                    }
    
    //Metodos CRUD para cotegoria
	//Obtener categoria
	public function getLavanderia(){
		$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

        $limite = 5;
 
        $limite_inicio = ($page - 1)* $limite;
		$sql = "SELECT Id, Nombre, Cantidad, Color, c.Categoria, m.Material FROM lavanderia l, material m, categorialavanderia c WHERE l.IdCategoria = c.IdCategoria and l.IdMaterial=m.IdMaterial  LIMIT $limite_inicio , $limite";
		$params = array(null);
		return Database::getRows($sql, $params);
		}

	public function countLavanderia()
    {
        $sql = "SELECT COUNT(*) AS Numero FROM lavanderia";
        $params = array(null);
        return database::getRow($sql, $params);
    }

	public function getCategoria(){
		$sql = "SELECT * FROM categorialavanderia";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getMaterial(){
		$sql = "SELECT * FROM Material";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	//Buscar categoria con parametros
    public function searchLavanderia($value){
		$sql = "SELECT Id, l.Nombre, l.Cantidad, l.Color, c.Categoria, m.Material FROM lavanderia l, material m, categorialavanderia c WHERE l.IdCategoria = c.IdCategoria and l.IdMaterial=m.IdMaterial and (Nombre LIKE ? OR Color LIKE ?) ORDER BY Nombre";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
    }
    //Insertar categoria
    public function createLavanderia(){
		$sql = "INSERT INTO lavanderia(Nombre, IdMaterial, IdCategoria, Color, Cantidad) VALUES(?, ?, ?, ?, ?)";
		$params = array($this->nombre, $this->idmaterial, $this->idcategoria, $this->color, $this->cantidad);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readLavanderia(){
		$sql = "SELECT Nombre, IdMaterial, IdCategoria, Color, Cantidad FROM lavanderia WHERE Id = ?";
		$params = array($this->id);
		$inmueble = Database::getRow($sql, $params);
		if($inmueble){
			$this->nombre = $inmueble['Nombre'];
			$this->idmaterial = $inmueble['IdMaterial'];
			$this->idcategoria = $inmueble['IdCategoria'];
			$this->color = $inmueble['Color'];
			$this->cantidad = $inmueble['Cantidad'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updateLavanderia(){
		$sql = "UPDATE lavanderia SET Nombre = ?, IdMaterial = ?, IdCategoria = ?, Color = ?, Cantidad = ? WHERE Id = ?";
		$params = array($this->nombre, $this->idmaterial, $this->idcategoria, $this->color, $this->cantidad, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteLavanderia(){
		$sql = "DELETE FROM lavanderia WHERE Id = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>