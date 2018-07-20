<?php
class Producto extends Validator{
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
			$this->idtipo = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdTipo(){
		return $this->idtipo;
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
				$this->descripcion = $value;
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
		$page = (isset($_GET['page'])) ? $_GET['page'] : 1;

    $limite = 5;

    $limite_inicio = ($page - 1)* $limite;
		$sql = "SELECT IdProducto, NombreProducto, tipoproducto.TipoProducto, categoriaproducto.CategoriaProducto, Descripcion, Precio FROM productos	INNER JOIN tipoproducto ON tipoproducto.IdTipo=productos.IdTipo INNER JOIN categoriaproducto ON productos.IdCategoria=categoriaproducto.IdCategoria ORDER BY IdProducto LIMIT $limite_inicio , $limite";
				$params = array(null);
		return Database::getRows($sql, $params);
		}

		public function countProductos()
    {
        $sql = "SELECT COUNT(*) AS Numero FROM productos";
        $params = array(null);
        return database::getRow($sql, $params);
    }

		public function getTipo(){
			$sql = "SELECT * FROM TipoProducto";
			$params = array(null);
			return Database::getRows($sql, $params);
		}
		public function getCategoria(){
			$sql = "SELECT * FROM categoriaproducto";
			$params = array(null);
			return Database::getRows($sql, $params);
		}
    //Buscar categoria con parametros
    public function searchProducto($value){
		$sql = "SELECT IdProducto, NombreProducto, t.TipoProducto, c.CategoriaProducto, Descripcion, Precio FROM productos p, categoriaproducto c, tipoproducto t WHERE p.IdTipo=t.IdTipo and p.IdCategoria=c.IdCategoria and (NombreProducto LIKE ? OR Precio LIKE ?)";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
		}
    //Insertar categoria
    public function createProducto(){
		$sql = "INSERT INTO productos(NombreProducto, IdTipo, IdCategoria, Descripcion, Precio) VALUES(?, ?, ?, ?, ?)";
		$params = array($this->nombre, $this->idtipo, $this->idcategoria, $this->descripcion, $this->precio);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readProducto(){
		$sql = "SELECT NombreProducto, IdTipo, IdCategoria, Descripcion, Precio FROM productos WHERE IdProducto = ?";
		$params = array($this->id);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre = $producto['NombreProducto'];
			$this->idtipo = $producto['IdTipo'];
			$this->idcategoria = $producto['IdCategoria'];
			$this->descripcion = $producto['Descripcion'];
			$this->precio = $producto['Precio'];
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updateProducto(){
		$sql = "UPDATE productos SET NombreProducto = ?, IdTipo = ?, IdCategoria = ?, Descripcion = ?, Precio = ? WHERE IdProducto = ?";
		$params = array($this->nombre, $this->idtipo, $this->idcategoria, $this->descripcion, $this->precio, $this->id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteProducto(){
		$sql = "DELETE FROM productos WHERE IdProducto = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
	
}
?>