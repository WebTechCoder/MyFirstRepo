<?php
/*
	$electronics=array();
	$electronics[0]=$laptops;
	$electronics[1]=$mobiles;


	$laptops=array();
	$laptops[0].['model']="A18TY";
	$laptops[0].['price']="10,000";

	$laptops[1].['model']="B53UR";
	$laptops[1].['price']="20,000";

	$laptops[2].['model']="A1e1Y";
	$laptops[2].['price']="10,000";

	$Moblie=array();
	$Moblie[0].['model']="asas1";
	$Moblie[0].['price']="5000";

	$Moblie[1].['model']="asRTWas1";
	$Moblie[1].['price']="12000";

	$Moblie[2].['model']="aMGHsas1";
	$Moblie[2].['price']="14000"; 
*/
	$product=array();
	$product['electronics']['laptops'][0]=array('model'=>'abc','price'=>'12000');
	$product['electronics']['laptops'][1]=array('model'=>'xyz','price'=>'10000');
	$product['electronics']['laptops'][2]=array('model'=>'almn','price'=>'21000');
	$product['electronics']['Moblie'][0]=array('model'=>'sams','price'=>'1200');
	$product['electronics']['mobile'][1]=array('model'=>'nok','price'=>'1100');
	$product['electronics']['mobile'][2]=array('model'=>'assa','price'=>'2000');

	$product['fashion']['shirt'][0]=array('model'=>'abc','price'=>'12000');
	$product['fashion']['shirt'][1]=array('model'=>'xyz','price'=>'10000');
	$product['fashion']['shirt'][2]=array('model'=>'almn','price'=>'21000');
	$product['fashion']['jen'][0]=array('model'=>'sams','price'=>'1200');
	$product['fashion']['jen'][1]=array('model'=>'nok','price'=>'1100');
	$product['fashion']['jen'][2]=array('model'=>'assa','price'=>'2000');

	foreach ($product as $category => $categorydata) {
		echo $category."<br><br>";
		foreach ($categorydata as $key => $value) {
			echo $key."<br>";
			foreach($value as $prod) {
				echo $prod['model'].$prod['price']."<br>";
			}
		}
	}





?>
