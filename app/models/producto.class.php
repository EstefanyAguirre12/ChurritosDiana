<?php
class Salas extends Validator{
    private $id = null;
    private $nombre = null;
    private $idtipo = null;
    private $idcategoria = null;
    private $descripcion = null;
    private $precio = null;
    
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
    
    public function setIdTipo($value){
		if($this->validateId($value)){
			$this->idestadosala = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdTipo(){
		return $this->idestadosala;
    }

    public function setIdCategoria($value){
		if($this->validateId($value)){
			$this->idcategoria = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdCategoria(){
		return $this->idcategoria;
		}
		
		public function setDescripcion($value){
			if($this->validateAlphanumeric($value, 1, 200)){
				$this-> = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getDescripcion(){
			return $this->descripcion;
			}

			public function setPrecio($value){
				if($this->validateMoney($value,2)){
					$this->precio = $value;
					return true;
				}else{
					return false;
				}
			}
			public function getPrecio(){
				return $this->precio;
				}
    
    //Metodos CRUD para cotegoria
		//Obtener categoria
		public function getProducto(){
			$sql = "SELECT IdProducto, NombreProducto, IdTipo, IdCategoria, Descripcion, Precio FROM producto ORDER BY IdProducto";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
	
    //Buscar categoria con parametros
    public function searchProducto($value){
		$sql = "SELECT * FROM productos WHERE NombreProducto LIKE ? OR Precio LIKE ? ORDER BY NombreProducto";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $paramsProducto
    //Insertar categoria
    public function createProducto(){
		$sql = "INSERT INTO producto(NombreProducto, IdTipo, IdCategoria, Descripcion, Precio) VALUES(?, ?, ?, ?, ?)";
		$params = array($this->id, $this->nombre, $this->idtipo, $this->idcategoria, $this->descripcion, $this->Precio);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readProducto(){
		$sql = "SELECT NombreProducto, IdTipo, IdCategoria, Descripcion, Precio FROM producto WHERE IdProducto = ?";
		$params = array($this->id);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre = $producto['NombreProducto'];
            $this->idtipo = $producto['IdTipo'];
						$this->idcategoria = $producto['IdCategaria'];
						$this->descripcion = $producto['Descripcion'];
                        $this->precio = $producto['Precio'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updateProducto(){
		$sql = "UPDATE producto SET NombreProducto = ?, IdTipo = ?, IdCategoria = ?, Descripcion = ?, Precio = ? WHERE IdProdcuto = ?";
		$params = array($this->nombre, $this->idtipo, $this->idcategoria, $this->descripcion, $this->precio, $this->Id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteProducto(){
		$sql = "DELETE FROM producto WHERE IdProducto = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>