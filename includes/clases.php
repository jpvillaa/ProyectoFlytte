<?php
//Clases a utilizar en el sitio web.


//Conexión a una Base de Datos usando PHP y la Herencia de las Clase MySQLi

include 'Connection.php';
class registro
{
	function __construct()
	{
		 $this->c = new Connection();

	}

	private $nombre;
	private $empresa;
	private $telefono;
	private $correo;
	private $contrasena;
	private $nuevaContrasena;


	public function getnombre(){
	 return $this->nombre;}

	public function setnombre($nombre){
	 $this->nombre = $nombre;}


	public function getempresa(){
	 return $this->empresa;}

	public function setempresa($empresa){
	 $this->empresa = $empresa;}

	 public function gettelefono(){
	 return $this->telefono;}

	public function settelefono($telefono){
	 $this->telefono = $telefono;}


	public function getcorreo(){
	 return $this->correo;}

	public function setcorreo($correo){
	 $this->correo = $correo;}


	public function getcontrasena(){
	 return $this->contrasena;}

	public function setcontrasena($contrasena){
	 $this->contrasena = $contrasena;}

	 public function getnuevaContrasena(){
	 return $this->nuevaContrasena;}

	public function setnuevaContrasena($nuevaContrasena){
	 $this->nuevaContrasena = $nuevaContrasena;}


	

	function Datos($nombre,$empresa,$telefono,$correo,$contrasena)
	{
		$c = new Connection();
		$this->nombre = $nombre;
		$this->empresa = $empresa;
		$this->telefono = $telefono;
		$this->correo = $correo;
		$this->contrasena = $contrasena;
		$resp = $this->c->Registrarusu($this);
		return $resp;
	}

	function Buscar($correo, $contrasena)
	{
		$this->correo = $correo;
		$this->contrasena = $contrasena;
		$resp = $this->c->validacionusu($this);
		return $resp;
	}
	function mostrar($cedula)
	{
		$resp = $this->c->mostrar($cedula);
		return $resp;
	}
	function Actualizar($correo,$nuevaContrasena)
	{
		$this->correo = $correo;
		$this->nuevaContrasena = $nuevaContrasena;
		$resp= $this->c->nuevaContrasena($this);
		return$resp;
	}
	function ActualizarNombre($nombre)
	{
		$this->nombre = $nombre;
		$resp= $this->c->modificarNombre($this);
		return$resp;
	}
	function ActualizarEmpresa($empresa)
	{
		$this->empresa = $empresa;
		$resp= $this->c->modificarEmpresa($this);
		return$resp;
	}
	function ActualizarTelefono($telefono)
	{
		$this->telefono = $telefono;
		$resp= $this->c->modificarTelefono($this);
		return$resp;
	}
	function ActualizarCorreo($correo)
	{
		$this->correo = $correo;
		$resp= $this->c->modificarCorreo($this);
		return$resp;
	}
}
	class carro
	{
		function __construct()
		{
		 $this->c = new Connection();
		}

		private $placa;
		private $correo;
		private $modelo;
		private $color;
		private $lugarSalida;
		private $lugarLlegada;
		private $hora;
		private $precio;

		public function getplaca(){
		return $this->placa;}

		public function setplaca($placa){
		$this->placa = $placa;}

		public function getcorreo(){
		return $this->correo;}

		public function setcorreo($correo){
		$this->correo = $correo;}

		 	public function getmodelo(){
		return $this->modelo;}

		public function setmodelo($modelo){
		 $this->modelo = $modelo;}

		public function getcolor(){
		return $this->color;}

		public function setcolor($color){
		 $this->color = $color;}

		 public function getlugarSalida(){
		return $this->lugarSalida;}

		public function setlugarSalida($lugarSalida){
		 $this->lugarSalida = $lugarSalida;}

		public function getlugarLlegada(){
		return $this->lugarLlegada;}

		public function setlugarLlegada($lugarLlegada){
		 $this->lugarLlegada = $lugarLlegada;}

		public function gethora(){
		return $this->hora;}

		public function sethora($hora){
		 $this->hora = $hora;}

		public function getprecio(){
		return $this->precio;}

		public function setprecio($precio){
		 $this->precio = $precio;}


		
		function Datos($placa,$correo, $modelo, $color, $lugarSalida, $lugarLlegada, $hora, $precio)
		{
			$c = new Connection();
			$this->placa = $placa;
			$this->correo = $correo;
			$this->modelo = $modelo;
			$this->color = $color;
			$this->lugarSalida = $lugarSalida;
			$this->lugarLlegada = $lugarLlegada;
			$this->hora = $hora;
			$this->precio = $precio;
			$resp = $c->Registrarcarro($this);
			return $resp;
		}
		function EliminarVehiculo()
	    {
			$resp= $this->c->eliminarCarro();
			return$resp;
	    }
		function ActualizarVehiculo($modelo,$color)
	    {
			$this->modelo = $modelo;
			$this->color = $color;
			$resp= $this->c->modificarVehiculo($this);
			return$resp;
	    }
		function ActualizarLugarSalida($lugarSalida)
		{
			$this->lugarSalida = $lugarSalida;
			$resp= $this->c->modificarLugarSalida($this);
			return$resp;
		}
		function ActualizarLugarLlegada($lugarLlegada)
		{
			$this->lugarLlegada = $lugarLlegada;
			$resp= $this->c->modificarLugarLlegada($this);
			return$resp;
		}
		function ActualizarHora($hora)
		{
			$this->hora = $hora;
			$resp= $this->c->modificarHora($this);
			return$resp;
		}
		function ActualizarPrecio($precio)
		{
			$this->precio = $precio;
			$resp= $this->c->modificarPrecio($this);
			return$resp;
		}
    }
    class empresa
{
	function __construct()
	{
	 $this->c = new Connection();
	}

	private $nombre;
	private $correo;
	private $codigo;


	public function getnombre(){
	 return $this->nombre;}

	public function setnombre($nombre){
	 $this->nombre = $nombre;}


	public function getcorreo(){
	 return $this->correo;}

	public function setcorreo($correo){
	 $this->correo = $correo;}


	public function getcodigo(){
	 return $this->codigo;}

	public function setcodigo($codigo){
	 $this->codigo = $codigo;}

	

	function Datos($nombre,$correo,$codigo)
	{
		$c = new Connection();
		$this->nombre = $nombre;
		$this->correo = $correo;
		$this->codigo = $codigo;
		$resp = $c->Registrarempresa($this);
		return $resp;
	}
}

    class entrada
	{

		private $codigo;
		private $titulo;
		private $contenido;
		private $fechai;
		private $fechaf;

		public function getcodigo(){
		return $this->codigo;}

		public function setcodigo($codigo){
		$this->codigo = $codigo;}

		public function gettitulo(){
		return $this->titulo;}

		public function settitulo($titulo){
		$this->titulo = $titulo;}

		 	public function getcontenido(){
		return $this->contenido;}

		public function setcontenido($contenido){
		 $this->contenido = $contenido;}

		public function getfechai(){
		return $this->fechai;}

		public function setfechai($fechai){
		$this->fechai = $fechai;}

		public function getfechaf(){
		return $this->fechaf;}

		public function setfechaf($fechaf){
		$this->fechaf = $fechaf;}

		function Datos($titulo, $contenido, $fechai, $fechaf)
		{
			$c = new Connection();
			$this->titulo = $titulo;
			$this->contenido = $contenido;
			$this->fechai = $fechai;
			$this->fechaf = $fechaf;
			$resp = $c->Entrada($this);
			return $resp;
		}
		function Actualizar($codigo,$titulo, $contenido, $fechai, $fechaf)
		{
			$c = new Connection();
			$this->codigo = $codigo;
			$this->titulo = $titulo;
			$this->contenido = $contenido;
			$this->fechai = $fechai;
			$this->fechaf = $fechaf;
			$resp = $c->ModificarEntrada($this);
			return $resp;
		}
    }

//-------------------------------------------------
?>