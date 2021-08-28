	<?php 
	class Connection extends MySQLi
	{
		public $estado;
		
		function __construct()
		{
			$con = parent::__construct('localhost','root','','flytte'); //Acceder al constructor de la clase padre MySQLi.
			$this->query("Set Names 'utf8';"); //Configurar que la transacción de datos se haga usando el cotejamiento UTF8.
			$this->connect_errno ? $this->estado = 'Error' : $this->estado = 'Conectado';
			//$this->connect_errno ? die('Error con la conexión') : $estado = 'Conectado';//Ejemplo de uso del Operador Ternario; el cual permite evaluar una condición. Si la condiciónse se cumple, entonces se ejecuta lo que se ponga después del signo de interrogación (?); de lo contrario, se ejecuta lo que se ponga después de los dos puntos (:).
			// = (condición) ? true : false;
			//echo $estado;
			return $this->estado;
			//unset ($estado); //Para eliminar la variable y liberar memoria.
		}


		function cerrar(){
			$this->close(); //Cerrar la conexión.
		}
		
		function Registrarusu(registro $p)
		{
			
			$c = new Connection();
			$sql_usuario = $c->query("SELECT *  FROM registro  where correo = '".$p->getcorreo()."'");
				$result_register = mysqli_fetch_array($sql_usuario);
				if($result_register)
				{
					return 1;
					$c->cerrar();
				}
				else
				{
					$sql_usuario = $c->query("SELECT *  FROM empresa where codigo = '".$p->getempresa()."'");
					$result_register = mysqli_fetch_array($sql_usuario);
					if ($result_register) {
						$sql = ("INSERT INTO `registro` VALUES('','".$p->getnombre()."','".$p->getempresa()."','".$p->gettelefono()."','".$p->getcorreo()."','".$p->getcontrasena()."')");
						
						$resultado = $c->query($sql);
						return 2;
					}else return 3;
					
				}
				$c->cerrar();
		}

		function Registrarcarro(carro $p)
		{
			
			$c = new Connection();
			$sql_usuario = $c->query("SELECT *  FROM carro where placa = '".$p->getplaca()."'");
				$result_register = mysqli_fetch_array($sql_usuario);
				if($result_register)
				{
					return true;
					$c->cerrar();
				}
				else
				{
					$sql_usuario = $c->query("SELECT *  FROM registro where correo = '".$p->getcorreo()."'");
				$result_register = mysqli_fetch_array($sql_usuario);
				if ($result_register) {
					$sql = ("INSERT INTO `carro` VALUES('".$p->getplaca()."','".$p->getmodelo()."','".$p->getcolor()."','".$p->getlugarSalida()."','".$p->getlugarLlegada()."','".$p->gethora()."','".$p->getprecio()."','".$result_register[0]."')");
					$resultado = $c->query($sql);
				}
					return false;
				}
				$c->cerrar();
		}

		function Registrarempresa(empresa $p)
		{
			
			$c = new Connection();
			$sql_usuario = $c->query("SELECT *  FROM empresa where codigo = '".$p->getcodigo()."'");
				$result_register = mysqli_fetch_array($sql_usuario);
				if($result_register)
				{
					return true;
					$c->cerrar();
				}
				else
				{
					$sql_usuario = $c->query("SELECT *  FROM registro where correo = '".$p->getcorreo()."'");
				$result_register = mysqli_fetch_array($sql_usuario);
				if ($result_register) {
					$sql = ("INSERT INTO `empresa` VALUES('".$p->getnombre()."','".$p->getcodigo()."','".$result_register[0]."')");
					$resultado = $c->query($sql);
				}
					

					return false;
				}
				$c->cerrar();
		}

		function validarced($cedula)
		{
			$c = new Connection();
			$sql_usuario = $c->query("SELECT cedula  FROM clientes  where cedula = '".$cedula."'");
			$result_register = mysqli_fetch_array($sql_usuario);
			if($result_register[0]==$cedula)
			{
				return true;
			}else
			{
				return false;
			}
		}


		function unico($usuario)
		{
			$c = new Connection();
			$sql_usuario = $c->query("SELECT usuario  FROM clientes  where usuario = '".$usuario."'");
			$result_register = mysqli_fetch_array($sql_usuario);
			if($result_register[0]==$usuario)
			{
				return true;
			}else
			{
				return false;
			}
		}

		function mostrar($cedula)
		{
			$c = new Connection();
			$sql_usuario = $c->query("SELECT *  FROM usuarios  where cedula = '".$cedula."'");
			$result_register = mysqli_fetch_array($sql_usuario);
			return $result_register;
		}

		function validacionusu(registro $p)
		{
		
			$c = new Connection();
			$sw=0;
			$sql_usuario = $c->query("SELECT * FROM registro WHERE correo='".$p->getcorreo()."'");
			$result_register = mysqli_fetch_array($sql_usuario);
			/*print_r($result_register);
			exit();*/
			if($result_register[4]==$p->getcorreo())
			{	
				 if($result_register[4]==$p->getcorreo() && $result_register[5]==$p->getcontrasena())
				 {	
					$_SESSION['USUARIO']=$result_register[1];
					$_SESSION['CORREO']=$result_register[4];
					return 	$sw=1;
				 }else
				 {
				 	if($result_register[5]!=$p->getcontrasena())
				 	{
				 		return $sw=3;
				 	}
				 }
			}else{ return $sw=2;
			}	
			exit();
		}

		

		function nuevaContrasena(registro $a)
		{
			$c = new Connection();
			$sw=0;

			$sql_usuario = $c->query("SELECT * FROM registro WHERE correo='".$a->getcorreo()."'");
			$result_register = mysqli_fetch_array($sql_usuario);
			/*print_r($result_register);
			exit();*/
			if($result_register[4]==$a->getcorreo()){	
				 $sql = "UPDATE registro SET contrasena='".$a->getnuevaContrasena()."' WHERE correo = '".$a->getcorreo()."'";
				$c->query($sql);
				return 	$sw=1;
				// }elseif($result_register[1]!=$a->getnombre()){
				//  		return $sw=3;
			}else{ return $sw=2;
			}	
			exit();
		}

	     function SeleccionarUsuario($cedula)
		{
			$c = new Connection();
			$this->cedula = $cedula;
			$sql = "SELECT * FROM clientes where cedula = '$cedula'";
			$resultado = $c->query($sql);
			$row = $resultado->fetch_array(/*MYSQL_ASSOC*/);//SOLO VA A SELECCIONAR UN REGISTRO ENTONCES NO ES NECESARIO COLOCAR EL WHILE
			return $row;
		}
		function SeleccionarCita($cedula)
		{
			$c = new Connection();
			$this->cedula = $cedula;
			$sql = "SELECT * FROM factura where numero = '$cedula'";
			$resultado = $c->query($sql);
			$row = $resultado->fetch_array(/*MYSQL_ASSOC*/);//SOLO VA A SELECCIONAR UN REGISTRO ENTONCES NO ES NECESARIO COLOCAR EL WHILE
			return $row;
		}


		function ModificarUsuario(Usuario $a)
		{
			$c = new Connection();
			$sql = "UPDATE clientes SET nombres='".$a->getnombre()."', apellidos='".$a->getapellidos()."',correo='".$a->getcorreo()."',telefono='".$a->gettelefono()."',celular='".$a->getcelular()."', direccion='".$a->getdireccion()."',edad='".$a->getedad()."', usuario='".$a->getusuario()."',contrasena='".$a->getcontrasena()."', lugar='".$a->getlugar()."',tipo='".$a->gettipo()."' WHERE cedula = '".$a->getcedula()."'";
			$c->query($sql);
			$resultado = 1;
		    return $resultado;
		}
		

		// function CrearCotizacion(cotiza $p)
		// {
		// 	$c = new Connection();
		// 		//vamos a cambiar el fomrato de d-m-y a y-m-d porque asi lo acepta mysql
		// 		date_default_timezone_set('America/bogota');
		// 		$fecha_actual = date('Y-m-d');
		// 		$sql = ("INSERT INTO `cotizacion` VALUES('','".$p->getcorreo()."','".$p->getorigen()."','".$p->getdestino()."','".$p->gethotel()."','".$p->getintegrantes()."','".$p->gettotal()."')");
		// 		$resultado = $c->query($sql);
		// 		return false;
		// 	$c->cerrar();
		// }

		function modificarNombre(registro $p){
			$c = new Connection();
			$sql = "UPDATE registro SET nombre='".$p->getnombre()."' WHERE correo = '".$_SESSION['CORREO']."'";
			$c->query($sql);
			return 1;
		}

		function modificarEmpresa(registro $p){
			$c = new Connection();
			$sql_usuario = $c->query("SELECT *  FROM empresa where codigo = '".$p->getempresa()."'");
			$result_register = mysqli_fetch_array($sql_usuario);
			if ($result_register) {
				$sql = "UPDATE registro SET codEmpresa='".$p->getempresa()."' WHERE correo = '".$_SESSION['CORREO']."'";
				$c->query($sql);
				return 1;
			}else return 2;
		}

		function modificarTelefono(registro $p){
			$c = new Connection();
			$sql = "UPDATE registro SET telefono='".$p->gettelefono()."' WHERE correo = '".$_SESSION['CORREO']."'";
			$c->query($sql);
			return 1;
		}

		function modificarCorreo(registro $p){
			$c = new Connection();
			$sql = "UPDATE registro SET correo='".$p->getcorreo()."' WHERE correo = '".$_SESSION['CORREO']."'";
			$c->query($sql);
			return 1;
		}

		function modificarVehiculo(carro $p){
			$c = new Connection();
			$sql_usuario = $c->query("SELECT *  FROM registro  where correo = '".$_SESSION['CORREO']."'");
			$result_register = mysqli_fetch_array($sql_usuario);
			$sql = "UPDATE carro SET modelo='".$p->getmodelo()."', color='".$p->getcolor()."' WHERE idconductor = '".$result_register[0]."'";
			$c->query($sql);
			return 1;
		}

		function modificarLugarSalida(carro $p){
			$c = new Connection();
			$sql_usuario = $c->query("SELECT *  FROM registro  where correo = '".$_SESSION['CORREO']."'");
			$result_register = mysqli_fetch_array($sql_usuario);
			$sql = "UPDATE carro SET lugarSalida='".$p->getlugarSalida()."' WHERE idconductor = '".$result_register[0]."'";
			$c->query($sql);
			return 1;
		}

		function modificarLugarLlegada(carro $p){
			$c = new Connection();
			$sql_usuario = $c->query("SELECT *  FROM registro  where correo = '".$_SESSION['CORREO']."'");
			$result_register = mysqli_fetch_array($sql_usuario);
			$sql = "UPDATE carro SET lugarLlegada='".$p->getlugarLlegada()."' WHERE idconductor = '".$result_register[0]."'";
			$c->query($sql);
			return 1;
		}

		function modificarHora(carro $p){
			$c = new Connection();
			$sql_usuario = $c->query("SELECT *  FROM registro  where correo = '".$_SESSION['CORREO']."'");
			$result_register = mysqli_fetch_array($sql_usuario);
			$sql = "UPDATE carro SET hora='".$p->gethora()."' WHERE idconductor = '".$result_register[0]."'";
			$c->query($sql);
			return 1;
		}

		function modificarPrecio(carro $p){
			$c = new Connection();
			$sql_usuario = $c->query("SELECT *  FROM registro  where correo = '".$_SESSION['CORREO']."'");
			$result_register = mysqli_fetch_array($sql_usuario);
			$sql = "UPDATE carro SET precio='".$p->getprecio()."' WHERE idconductor = '".$result_register[0]."'";
			$c->query($sql);
			return 1;
		}

		function eliminarCarro(){
			$c = new Connection();
			$sql_usuario = $c->query("SELECT *  FROM registro  where correo = '".$_SESSION['CORREO']."'");
			$result_register = mysqli_fetch_array($sql_usuario);
			$sql = "DELETE FROM carro where idconductor = '".$result_register[0]."'";
			$c->query($sql);
			return 1;
		}
	} 
		
		


