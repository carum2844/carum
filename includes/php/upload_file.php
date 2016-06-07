<?php

/*
**********************************************************************************************************
htaccess file:
php_value post_max_size 16M
php_value upload_max_filesize 6M
**********************************************************************************************************
*/
$folder = './../../uploads/';

$i_w_dst = $_POST['image_width'];	// Max width image
$i_h_dst = $_POST['image_heigh'];	// Max heigh image
$t_w_dst = $_POST['thumb_width'];	// Max width thumbnail
$t_h_dst = $_POST['thumb_heigh'];	// Max heigh thumbnail

if(isset($_FILES['files_upl']) && $_FILES['files_upl']['error'] == 0){

	$new_file_name = time();
	$file_tmp = explode(".",$_FILES['files_upl']['name']);
	$new_file = $folder.$new_file_name.'.'.$file_tmp[1];
	$new_thumb = $folder.$new_file_name.'_t.jpg';

	if( move_uploaded_file($_FILES['files_upl']['tmp_name'], $new_file) ){

		// First we create the resized image
		list($w_src, $h_src, $type) = getimagesize($new_file);	// create new dimensions, keeping aspect ratio
		$ratio = $w_src/$h_src;
		if ($i_w_dst/$i_h_dst > $ratio) {$i_w_dst = floor($i_h_dst*$ratio);} else {$i_h_dst = floor($i_w_dst/$ratio);}

		switch ($type){
			case 1:   //   gif -> jpg
				$img_src = imagecreatefromgif($new_file);
			break;
			case 2:   //   jpeg -> jpg
				$img_src = imagecreatefromjpeg($new_file);
			break;
			case 3:  //   png -> jpg
				$img_src = imagecreatefrompng($new_file);
			break;
		}
		$img_dst = imagecreatetruecolor($i_w_dst, $i_h_dst);	//  resample
	  
		imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $i_w_dst, $i_h_dst, $w_src, $h_src);
		imagejpeg($img_dst, $new_thumb);	//  save new thumbnail

		//unlink($file_src);  //  clean up image storage
		imagedestroy($img_src);       
		imagedestroy($img_dst);
		
		// We create the thumbnail
		list($w_src, $h_src, $type) = getimagesize($new_file);	// create new dimensions, keeping aspect ratio
		$ratio = $w_src/$h_src;
		if ($t_w_dst/$t_h_dst > $ratio) {$t_w_dst = floor($t_h_dst*$ratio);} else {$t_h_dst = floor($t_w_dst/$ratio);}

		switch ($type){
			case 1:   //   gif -> jpg
				$img_src = imagecreatefromgif($new_file);
			break;
			case 2:   //   jpeg -> jpg
				$img_src = imagecreatefromjpeg($new_file);
			break;
			case 3:  //   png -> jpg
				$img_src = imagecreatefrompng($new_file);
			break;
		}
		$img_dst = imagecreatetruecolor($t_w_dst, $t_h_dst);	//  resample
	  
		imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $t_w_dst, $t_h_dst, $w_src, $h_src);
		imagejpeg($img_dst, $new_thumb);	//  save new thumbnail

		//unlink($file_src);  //  clean up image storage
		imagedestroy($img_src);       
		imagedestroy($img_dst);

		echo '{"status":"success","new_file_name":"'.$new_file_name.'","ext_name":"'.$file_tmp[1].'"}';
		exit;
	}
}

echo '{"status":"error"}';
exit;
