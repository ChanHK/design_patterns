<?php


 
#interface that stores concrete factory products
#abstract factory

interface furnitureFactory{
	public function tableProduct();
	public function chairProduct();
}


#concrete factory
class italyFactory implements furnitureFactory{
	
	public function tableProduct(){
		return new tableProductA1;
	}
	
	public function chairProduct(){
		return new chairProductB1;
	}
}


class canadaFactory implements furnitureFactory{
	
	public function tableProduct(){
		return new tableProductA2;
	}
	
	public function chairProduct(){
		return new chairProductB2;
	}
}

#inheritance class 
#product
interface table{
	public function createTable():string;
}

interface chair{
	public function createChair():string;
}


#concrete product
class tableProductA1 implements table{
	public function createTable():string
	{
		return "italian  style table is created." . "<br>";
	}
}

class tableProductA2 implements table{
	public function createTable():string
	{
		return "canadian style table is created." . "<br>";
	}
}


class chairProductB1 implements chair{
	public function createChair():string
	{
		return "italian style chair is created." . "<br>";
	}
}

class chairProductB2 implements chair{
	public function createChair():string
	{
		return "canadian style chair is created." . "<br>";
	}
}

function client(furnitureFactory $fur){
	$Table = $fur->tableProduct();
	$Chair = $fur->chairProduct();
	
	echo $Table->createTable();
	echo $Chair->createChair();


}

client(new italyFactory);
client(new canadaFactory);



?>