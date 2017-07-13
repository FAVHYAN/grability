<?php

class GetModel{

// Atributos
private $id;
private $name;
public $keyPublic = 'b3113aaf033bc17284797879a577d209';
private $keyPrivate = 'efe2978ae17eeeec13ccdf560096fdeb0b46042e';
private $ts = 1;
public $hash = md5($ts.$keyPrivate.$keyPublic);

// Constructor
public function GetModel($id,$name){
	$this->id = $id;
	$this->name = $name;
}

// Metodos
	public function getId(){
		return $this->id;
	}	

	public function getName(){
		return $this->name;
	}
	public function getAll(){
		$url = "https://gateway.marvel.com:443/v1/public/characters?ts=1&name=".$name."&apikey=".$keyPublic."&hash=".$hash;
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_URL, $url);
			// $result = curl_exec($curl);

			curl_close ($curl);


			$json = file_get_contents($url);
			$obj = json_decode($json);
			
			echo $obj->data->results[0]->id;
			
			echo $obj->data->results[0]->name;
			
			echo $obj->data->results[0]->description;
			
			echo  '<img src="'.$obj->data->results[0]->thumbnail->path.'.'.$obj->data->results[0]->thumbnail->extension.'" />';
			
			
		return $obj;
	}


}

?>