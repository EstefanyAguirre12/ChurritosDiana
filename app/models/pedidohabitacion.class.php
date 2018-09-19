<?php
class Pedidohabitacion extends Validator{
    private $id = null;
    private $idproducto = null;
    private $cantidad = null;
    private $idcuenta = null;
    private $estado = null;
    
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
    
    public function setIdProducto($value){
			if($this->validateId($value)){
				$this->idhabitacion = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getIdProducto(){
			return $this->idhabitacion;
		}
    
    public function setCantidad($value){
		if($this->validateId($value)){
			$this->iddetalleres = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCantidad(){
		return $this->idestadosala;
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
		
		public function setEstado($value){
			if($this->validateDate($value)){
				$this->fechapedido = $value;
				return true;
			}else{
				return false;
			}
		}
		public function getEstado(){
			return $this->fechapedido;
			}

    //Metodos CRUD para cotegoria
		//Obtener categoria
		public function gethabitacion(){
			$sql = "select h.IdUsuario, h.NumeroHab from huespedusuario h, pedidohabitacion pe, cuentatotal c WHERE pe.IdCuenta = c.IdCuenta and h.IdHuesped = c.IdEnte GROUP by h.NumeroHab";
			$params = array(null);
			return Database::getRows($sql, $params);
			}
			public function getPedidos(){
				$sql = "select pe.IdPedido, p.IdProducto, p.NombreProducto, p.Precio, pe.Cantidad FROM productos p, pedidohabitacion pe where pe.IdProducto = p.IdProducto and pe.Estado=1 and pe.IdCuenta=(SELECT c.IdCuenta from cuentatotal c, huespedusuario h where c.IdEnte = h.IdHuesped and h.IdUsuario=?)";
				$params = array($this->id);
				return Database::getRows($sql, $params);
				}
		

    //Insertar categoria
    public function createPedidohabitacion(){
		$sql = "INSERT INTO pedidohabitacion(IdDetalleRes, IdCuenta, FechaPedido) VALUES(?, ?, ?)";
		$params = array($this->id, $this->iddetalle, $this->idcuenta, $this->fechapedido);
		return Database::executeRow($sql, $params);
    }
    //Leer categoria
    public function readPedido(){
		$sql = "SELECT IdProducto, IdCuenta, Estado, Cantidad FROM pedidohabitacion WHERE IdPedido = ?";
		$params = array($this->id);
		$habitacion = Database::getRow($sql, $params);
		if($habitacion){
			$this->idhabitacion = $habitacion['IdProducto'];
			$this->idcuenta = $habitacion['IdCuenta'];
			$this->estado = $habitacion['Estado'];
			$this->cantidad = $habitacion['Cantidad'];
						
			return true;
		}else{
			return null;
		}
    }
    //Modificar categoria
    public function updatePedidohabitacion(){
		$sql = "UPDATE pedidohabitacion SET IdDetalleRes = ?, IdCuenta = ?, FechaPedido = ? WHERE IdHabitacion = ?";
		$params = array($this->iddetalleres, $this->idcuenta, $this->fechapedido, $this->Id);
		return Database::executeRow($sql, $params);
    }
    //Eliminar categoria
	public function deletePedido(){
		$sql = "DELETE FROM pedidohabitacion WHERE IdPedido = ?";
		$params = array($this->id);
		return Database::executeRow($sql, $params);
	}
}
?>