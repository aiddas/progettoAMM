<?php
include_once 'Immagine.php';
class Gallery {

	public static function getImage()
	{
		$img_array[] = new Immagine();
		$img_array[0]->setId(0);
		$img_array[0]->setUrl("public/image/foto0.jpg");

		$img_array[] = new Immagine();
		$img_array[1]->setId(0);
		$img_array[1]->setUrl("public/image/foto1.jpg");

		$img_array[] = new Immagine();
		$img_array[2]->setId(0);
		$img_array[2]->setUrl("public/image/foto2.jpg");


		return $img_array;
	}
}
?>
