<?php
class Detallerestaurante extends Validator{
	private $id = null;
	private $idcliente = null;
    private $idmesa = null;
    private $idproducto = null;
    private $idcuenta = null;
	private $cantidad = null;
	private $IdTproducto = null;
	private $IdCproducto = null;
	private $numb_cuenta = null;
	private $Fecha = null;
	private $pnombre = null;
	private $pdescripcion = null;
	private $pprecio = null;
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
	
	public function setIdTproducto($value){
        if($this->validateId($value)){
            $this->IdTproducto = $value;
            return true;  
        }
        else{
            return false;
        }
	}
	public function getIdTproducto(){
		return $this->IdTproducto;
	}
	public function setIdCproducto($value){
        if($this->validateId($value)){
            $this->IdCproducto = $value;
            return true;  
        }
        else{
            return false;
        }
	}
	public function getIdCproducto(){
		return $this->IdCproducto;
	}
	public function setIdCliente($value){
        if($this->validateId($value)){
            $this->idcliente = $value;
            return true;  
        }
        else{
            return false;
        }
    }
    public function getIdCliente(){
			return $this->idcliente;
    }
    
    public function setIdmesa($value){
			if($this->validateId($value)){
				$this->idmesa = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getIdmesa(){
			return $this->idmesa;
		}
    
    public function setIdproducto($value){
		if($this->validateId($value)){
			$this->idproducto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdproducto(){
		return $this->idproducto ;
    }

    public function setIdCuenta($value){
		if($this->validateId($value)){
			$this->idcuenta = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdCuenta(){
		return $this->idcuenta;
		}
		
		public function setCantida ($value){
			if($this->validateEnteros($value, 2)){
				$this->cantidad = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getCantidad(){
			return $this->cantidad;
		}
		public function getPnombre(){
			return $this->pnombre;
		}
		public function getPdescripcion(){
			return $this->pdescripcion;
		}
		public function getpprecio(){
			return $this->pprecio;
		}

    //Metodos CRUD para cotegoria
		//Obtener categoria
		public function getDetallerestaurante(){
			$sql = "SELECT IdDetalle, IdMesa, IdProducto, IdCuenta, Cantidad FROM detallerestaurante ORDER BY IdDetalle";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
	
    //Buscar categoria con parametros
    public function searchDetallerestaurante($value){
		$sql = "SELECT * FROM detallerestaurante WHERE IdDetalle LIKE ? OR IdProducto LIKE ? ORDER BY IdDetalle";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $paramsProducto);
		}
    //Insertar categoria
    public function createDetallerestaurante(){
		$sql = "INSERT INTO detallerestaurante(IdDetalle, IdMesa, IdProducto, IdCuenta, Cantidad) VALUES(?, ?, ?, ?, ?)";
		$params = array($this->id, $this->idmesa, $this->idproducto, $this->idcuenta, $this->cantidad);
		return Database::executeRow($sql, $params);
		}
		public function createCuentaTotal($nbcuenta,$fecha){
			$sql = "INSERT INTO `cuentatotal`( `numb_cuenta`, `estado_cuenta`, `total`, `IdEnte`, `Fecha`) VALUES (?,0,0,?,?)";
			$params = array($nbcuenta,$this->idcliente,$fecha);
			return Database::executeRow($sql, $params);
		}
		public function InserDetalleProducto($numbcuenta){
			$sql1 = "SELECT `IdCuenta` FROM `cuentatotal` WHERE `numb_cuenta`=?";
			$params1 = array($numbcuenta);
			$this->idcuenta = Database::getRows($sql1, $params1);
			$sql = "INSERT INTO `detallerestaurante`( `Cantidad`, `IdProducto`, `IdCuenta`, `IdMesa`) VALUES (?,?,?,0)";
			$params = array($this->cantidad,$this->idproducto,$this->idcuenta);
			return Database::executeRow($sql, $params);
		}
		//Buscar categoria con parametros
		public function searchEnte($value){
			$sql = "SELECT IdEnte, Nombres, Apellidos, Correo, DocIdentidad, g.NombreGenero, t.TipoEnte , Telefono FROM entes e, genero g, tipoente t WHERE e.IdGenero=g.IdGenero and e.IdTipo=t.IdTipo and (Nombres LIKE ? OR DocIdentidad LIKE ?) ORDER BY Nombres";
			$params = array("%$value%", "%$value%");
			return Database::getRows($sql, $params);
			}
    //Leer categoria
    public function  readDetallerestaurante(){
		$sql = "SELECT IdMesa, IdProducto, IdCuenta, Cantidad FROM detallerestaurante WHERE IdDetalle = ?";
		$params = array($this->id);
		$detalle = Database::getRow($sql, $params);
			if($detalle){
				$this->idmesa = $detalle['IdMesa'];
				$this->idproducto = $detalle['IdProducto'];
				$this->idcuenta = $detalle['IdCuenta'];
				$this->cantidad = $detalle['Cantidad'];
							
				return true;
			}else{
				return null;
			}
		}
	public function  readCuenta($numbcuenta){
		$sql = "SELECT `IdCuenta` FROM `cuentatotal` WHERE `numb_cuenta`=?";
		$params = array($numbcuenta);
		$detalle = Database::getRow($sql, $params);
			if($detalle){
				$this->idcuenta = $detalle['IdCuenta'];
				return true;
			}else{
				return null;
			}
		}	
	
	public function addDettalleRestaurante(){
		$sql = "INSERT INTO `detallerestaurante`( `Cantidad`, `IdProducto`, `IdCuenta`, `IdMesa`) VALUES (?,?,?,1)";
		$params = array($this->cantidad,$this->idproducto,$this->idcuenta);
		return Database::executeRow($sql, $params);
	}

		public function readClientes(){
			$sql = "SELECT `IdEnte`, `Nombres`, `Apellidos`, `DocIdentidad`, genero.NombreGenero, tipoente.TipoEnte 
			FROM `entes` INNER JOIN tipoente on entes.IdTipo=tipoente.IdTipo INNER JOIN genero on entes.IdGenero=genero.IdGenero";
			$params = array(null);
			return Database::getRows($sql, $params);
		}
		public function readProductos(){
			$sql = "SELECT `IdEnte`, `Nombres`, `Apellidos`, `DocIdentidad`, genero.NombreGenero, tipoente.TipoEnte 
			FROM `entes` INNER JOIN tipoente on entes.IdTipo=tipoente.IdTipo INNER JOIN genero on entes.IdGenero=genero.IdGenero";
			$params = array(null);
			return Database::getRows($sql, $params);
		}
		public function readTiposProductos(){
			$sql = "SELECT `IdProducto`, `NombreProducto`, `Descripcion`, `Precio` 
			FROM `productos` INNER JOIN tipoproducto on productos.IdTipo = tipoproducto.IdTipo 
			WHERE tipoproducto.IdTipo =?";
			$params = array($this->IdTproducto);
			return Database::getRows($sql, $params);
		}
		public function readCategoriaProductos(){
			$sql = "SELECT `IdProducto`, `NombreProducto`, `Descripcion`, `Precio` 
			FROM `productos` INNER JOIN categoriaproducto on categoriaproducto.IdCategoria = productos.IdCategoria 
			WHERE productos.IdCategoria =? ";
			$params = array($this->IdCproducto);
			return Database::getRows($sql, $params);
		}
		public function readCuentaProducto(){
			$sql = "SELECT productos.NombreProducto ,productos.Precio ,detallerestaurante.Cantidad
			 FROM `detallerestaurante` INNER JOIN productos ON detallerestaurante.IdProducto = productos.IdProducto 
			 WHERE detallerestaurante.IdCuenta =? ";
			$params = array($this->idcuenta);
			return Database::getRows($sql, $params);
		}
		public function readProducto(){
			$sql = "SELECT `IdProducto`, `NombreProducto`, `Descripcion`, `Precio` FROM `productos` WHERE productos.IdProducto=? ";
			$params = array($this->idproducto);
			$detalle = Database::getRow($sql, $params);
			if($detalle){
				$this->pnombre = $detalle['NombreProducto'];
				$this->pprecio = $detalle['Precio'];
				$this->pdescripcion = $detalle['Descripcion'];
				return true;
			}else{
				return null;
			}
		}
		public function readTiposPro(){
			$sql = "SELECT `IdTipo`, `TipoProducto` FROM `tipoproducto`";
			$params = array(null);
			return Database::getRows($sql, $params);
		}
		public function readCategoriaPro(){
			$sql = " SELECT `IdCategoria`, `CategoriaProducto` FROM `categoriaproducto`  ";
			$params = array(null);
			return Database::getRows($sql, $params);
		}
		
		public function readCuentasClientes(){
			$sql = "SELECT `IdCuenta`, entes.Nombres, `numb_cuenta`, `Fecha`,`estado_cuenta`, `total`, cuentatotal.costo_h,cuentatotal.costo_r,cuentatotal.costo_e FROM `cuentatotal` INNER JOIN entes on entes.IdEnte= cuentatotal.IdEnte WHERE entes.IdEnte= ? AND estado_cuenta =0";
			$params = array($this->idcliente);
			return Database::getRows($sql, $params);
		}
		
    //Modificar categoria
    public function updateDetallerestaurante(){
		$sql = "UPDATE detallerestaurante SET IdMesa = ?, IdProducto = ?, IdCuenta = ?, Cantidad = ? WHERE IdDetalle = ?";
		$params = array($this->iddetalleres, $this->idcuenta, $this->fechapedido, $this->Id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deleteDetallerestaurante(){
		$sql = "DELETE FROM detallerestaurante WHERE IdDetalle = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>