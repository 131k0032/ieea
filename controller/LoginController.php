<?php 
	
	class LoginController{

	public function loginUserController(){

		if(isset($_POST["emailacceso"])){
			    
      		
      		$encriptar = crypt($_POST['passwordacceso'], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');      		
     
			$datoController=array(
			"email"=>$_POST["emailacceso"],
			"password"=>$encriptar
			);
			$respuesta = LoginModel::loginUserModel($datoController,"user");
		 	 var_dump($respuesta);		
			if($respuesta["email"]==$_POST["emailacceso"] && $respuesta["password"]==$encriptar){
				// echo "Hola perro".$respuesta["usuario"];

					// inicia la sesion de nombre "validar" con valor verdadero
					session_start();
					$_SESSION["validar"]=true;
					$_SESSION["usuario"] = $respuesta["email"];			
				  	echo '<script>							
				 			swal({
				 					title: "Success",
										text:"Welcome at the sistem controller",
										type:"success",
										confirmButtonText:"Ok",
				 					closeOnConfirm:false
				 				},
				 				function(isConfirm){
				 					if(isConfirm){
				 						window.location="welcome";
				 					}
				 				});
				 		</script>';

					echo '<div class="notice notice-info notice-sm">
							<button class="btn m-progress btn-xs btn-default">Button</button>
								<strong >Loading views please wait</strong>
								<strong><meta http-equiv="refresh" content="2; url=welcome"></strong>	
						 </div>';
					}else{
						// header("location:index.php?action=fallo");
					print "<script>alert('Error al ingresar\nUsuario no reconocido.\nVuelva a intentarlo.');</script>";
					print "<script>window.location='index.php?action=fallo';</script>";

				}
			}
		
		}
	
	}

	
 ?>