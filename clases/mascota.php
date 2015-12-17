<?php
class mascota
{
	public $id;
	public $nombre;
	public $clase;
	public $clave;
	public $tipo;

public function InsertarMascota()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("CALL InsertarMascota(:nombre,:clase,:clave,:tipo)");
				$consulta->bindvalue(':nombre',$this->nombre,PDO::PARAM_STR);
				$consulta->bindValue(':clase',$this->clase, PDO::PARAM_STR);
				$consulta->bindValue(':clave',$this->clave, PDO::PARAM_STR);
				$consulta->bindValue(':tipo',$this->tipo, PDO::PARAM_STR);
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }
	public function BorrarMascota()
	 {
	 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL BorrarMascota(:id)");	
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
			$consulta->execute();
			return $consulta->rowCount();
	 } 
	 public function ModificarMascota()
	 {
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL ModificarMascota(:nombre,:clase,:clave,:tipo,:id)");
			$consulta->bindvalue(':nombre',$this->nombre,PDO::PARAM_STR);
			$consulta->bindValue(':clase',$this->clase, PDO::PARAM_STR);
			$consulta->bindValue(':clave',$this->clave, PDO::PARAM_STR);
			$consulta->bindValue(':tipo',$this->tipo, PDO::PARAM_STR);
			$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);
			return $consulta->execute();
			return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }

	public function GuardarMascota()
	 {

	 	if($this->id>0)
	 		{
	 			$this->ModificarMascota();
	 		}else {
	 			$this->InsertarMascota();
	 		}

	 }
	
	public static function TraerMascotas()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerMascotas()");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "mascota");		
	}

	public static function TraerMascotasId($id) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerMascotasId(:id)");
			$consulta->bindvalue(':id',$id,PDO::PARAM_INT);
			$consulta->execute();
			$buscado= $consulta->fetchObject('mascota');
			return $buscado;			

	}
	public static function validarMascota($nombre,$clase,$clave)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta=$objetoAccesoDato->RetornarConsulta("CALL validarMascota(:nombre,:clase,:clave)");
		$consulta->bindvalue(':nombre',$nombre,PDO::PARAM_STR);
		$consulta->bindvalue(':clase',$clase,PDO::PARAM_STR);
		$consulta->bindvalue(':clave',$clave,PDO::PARAM_STR);
		$consulta->execute();
		$buscado=$consulta->fetchObject('mascota');
		return $buscado;
	}

}//class
?>