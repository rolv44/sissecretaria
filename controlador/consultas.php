<?php
	

	function validar($user,$pass)
	{
		$val= "select sissecretaria.FC_VALIDAR('$user','$pass')";
		return $val;
	}
	function Usuario_Mostrar_uno($user)
	{
		$val= "call sissecretaria.SP_USUARIO_MOSTRARUNO('$user');";
		return $val;
	}
	function Persona_Insertar($dni,$name,$dir,$tel,$fec)
	{
		$val= "call sissecretaria.SP_PERSONA_INSERTAR('$dni','$name','$dir','$tel','$fec');";
		return $val;
	}
	function Usuario_Crear($dni,$tipo)
	{
		$val= "call sissecretaria.SP_USUARIO_INSERTAR('$dni',$tipo);";
		return $val;
	}
	function Persona_Mostrar()
	{
		$val= "call sissecretaria.SP_PERSONA_MOSTRAR();";
		return $val;
	}
	function Persona_Update($dni,$nombre,$dir,$tel,$fec)
	{
		$val= "call sissecretaria.`SP_PERSONA_UPDATE`('$dni','$nombre','$dir','$tel','$fec');";
		return $val;
	}
	function Usuario_Mostrar()
	{
		$val= "call sissecretaria.SP_USUARIO_MOSTRAR();";
		return $val;
	}
	function Oficina_Crear($nombre)
	{
		$val= "select sissecretaria.FC_OFICINA_CREAR('$nombre');";
		return $val;
	}
	function Oficina_Mostrar()
	{
		$val= "call sissecretaria.SP_OFICINA_MOSTRAR();";
		return $val;
	}
	function Oficina_Asignar($dni,$id)
	{
		$val= "call sissecretaria.SP_OFI_ENCAR_ASIGNAR('$dni','$id');";
		return $val;
	}
	function Oficina_Encargado()
	{
		$val= "call sissecretaria.SP_OFI_ENCAR_MOSTRAR();";
		return $val;
	}
	



	
	
	


?>