<?php 
	
	class LoginController{

	public function loginUserController(){

		if(isset($_POST["usuarioacceso"])
			){
			$datoController=array(
			"usuario"=>$_POST["usuarioacceso"],
			"password"=>$_POST["passwordacceso"]			
			);
		$respuesta = LoginModel::loginUserModel($datoController,"usuario");
		 // var_dump($respuesta);
		if($respuesta["usuario"]==$_POST["usuarioacceso"] && $respuesta["password"]==$_POST["passwordacceso"]){
			// echo "Hola perro".$respuesta["usuario"];

			// inicia la sesion de nombre "validar" con valor verdadero
			session_start();
			$_SESSION["validar"]=true;
			$_SESSION["usuario"] = $respuesta["usuario"];

			// header("location:welcome");
			print "<script>window.location='welcome';</script>";
		}else{
			// header("location:index.php?action=fallo");
			print "<script>alert('Error al ingresar\nUsuario no reconocido.\nVuelva a intentarlo.');</script>";
			print "<script>window.location='index.php?action=fallo';</script>";

		}
		}
	
	}
	
	}

	
 ?>