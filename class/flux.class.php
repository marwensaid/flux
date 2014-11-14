<?php
class Flux
{
	private $data;
	private $url;

	public function __construct($url)
	{
		$this->url = $url;
		$this->data = array();	//Tableau à construire afin de récupérer les liens en fonction d'une catégorie
	}

	/*
	* Récupère le xml distant	
	*/
	public function getFlux()
	{
		if (($response_xml_data = file_get_contents($this->url)) === false){
	    	die("Error fetching XML");
		} else {
		   $xml = simplexml_load_string($response_xml_data);
		}

		return $xml;
	}

	/*
	* Parse le xml récupéré
	* Dans cet exemple, on s'occupera de trier les liens en fonction de la première catégorie de chaque item (un item contient plusieur catégories)
	*/
	public function parseFlux($xml)
	{
		
	}

	/*
	* Genere la page html à l'aide du tableau data afin de sauvegarder la page dans le cache par la suite
	*/
	public function generateFlux()
	{
		
	}
}