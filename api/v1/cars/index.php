<?php

$car1->id=1231;
$car1->title = "2019 Suzuki Ertiga";
$car1->gear = "manual";
$car1->price = "124 Juta";
$car1->location = "Bantul";
$car1->image="";

$car2->id=1232;
$car2->title = "Toyota Avanza 2019";
$car2->gear = "automatic";
$car2->price = "224 Juta";
$car2->location = "Sleman";
$car2->image="";

$cars = array($car1,$car2);

$carsObject = json_encode($cars);

if($_GET["id"]){
	$requestedCarId = $_GET["id"];
	for($i=0;$i<count($cars);$i++){
		if($cars[$i]->id==$requestedCarId){
			$carsObject = json_encode($cars[$i]);
			echo $carsObject;
		}
	}
}else if($_POST["title"] 
	&& $_POST["gear"] 
	&& $_POST["price"] 
	&& $_POST["location"] ){
		$newCar->id = rand(1230,9999);
		$newCar->title = $_POST["title"];
		$newCar->gear = $_POST["gear"];
		$newCar->price = $_POST["price"];
		$newCar->location = $_POST["location"];
		$newCar->image = "";

		if(isset(($_FILES['image']))){
			$file_tmp =$_FILES['image']['tmp_name'];
			$file_name = $_FILES['image']['name'];
			$moved = move_uploaded_file($file_tmp,"../../../images/".$file_name);
			$newCar->image = $_SERVER['HTTP_HOST']."/images/".$file_name;
		}

		array_push($cars,$newCar);
		$carsObject = json_encode($cars);
		echo $carsObject;
}else{
	echo $carsObject;
}
?>
