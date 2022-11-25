<?php

if(isset($_POST['asunto']) && !empty($_POST['asunto']) &&
	isset($_POST['email']) && !empty($_POST['email']) &&
	isset($_POST['mensaje']) && !empty($_POST['mensaje']))
	 	{  
			$asunto = $_POST['asunto'];
			$desde = "From:" . $_POST['email'];
			$mensaje = $_POST['mensaje'];
			
	ini_set(sendmail_from, 'informes@nymtravel.com');//solo windows
	mail("informes@nymtravel.com", $asunto, $mensaje, $desde);

				echo "correo enviado";

	 	}else	{
	 			echo "correo  no enviado";		}


?>	 		
