<?php

$sparepart1->id=3131;
$sparepart1->title="Oli Lupromax";
$sparepart1->price=50000;
$sparepart1->location = "Jakarta";

$sparepart2->id=3132;
$sparepart2->title="Wiper Avanza";
$sparepart2->price=24000;
$sparepart2->location = "Yogyakarta";

$sparepart3->id=3133;
$sparepart3->title="Compresor AC";
$sparepart3->price=1050000;
$sparepart3->location = "Sleman";

$spareparts = array($sparepart1,$sparepart2,$sparepart3);

if($_GET["id"]){
	$requestedSparepartId = $_GET["id"];
	for($i=0;$i<count($spareparts);$i++){
		if($spareparts[$i]->id==$requestedSparepartId){
            echo json_encode($spareparts[$i]);
		}
	}
}else{
	echo json_encode($spareparts);
}

?>