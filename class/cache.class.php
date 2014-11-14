<?php
class Cache
{
	private $file;
	private $expire;

	public function __construct($file, $expire)
	{
		$this->file = $file;
		$this->expire = $expire;
	}

	/*
	* Initialisation du cache
	*/ 
	public function startCache()
	{
		ob_start();
	}

	/* 
	* Retourne un bool en fonction de la date d'expiration du cache
	*/
	public function isCacheExistAndNotExpire()
	{
		
	}

	/* 
	* Sauvegarde les données dans le cache
	*/
	public function saveCache()
	{
		
	}

	/* 
	* Affiche le html contenu dans le cache
	*/
	public function showCache()
	{
		readfile($this->file);
	}

	/* 
	* Vide le cache
	*/
	public function clearCache()
	{
		if(file_exists($this->file))
		{
			unlink($this->file);
		}
	}
}