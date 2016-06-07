<?php
$folder = './../../uploads/';
$w_dst = 100;	// Max width thumbnail
$h_dst = 100;	// Max heigh thumbnail


if(isset($_FILES['files_upl']) && $_FILES['files_upl']['error'] == 0){

	$new_file_name = time();
	$file_tmp = explode(".",$_FILES['files_upl']['name']);
	$new_file = $folder.$new_file_name.'.'.$file_tmp[1];
	$new_thumb = $folder.$new_file_name.'_tm.jpg';
	
	if( move_uploaded_file($_FILES['files_upl']['tmp_name'], $new_file) ){

		// We create the thumbnail
		list($w_src, $h_src, $type) = getimagesize($new_file);	// create new dimensions, keeping aspect ratio
		$ratio = $w_src/$h_src;
		if ($w_dst/$h_dst > $ratio) {$w_dst = floor($h_dst*$ratio);} else {$h_dst = floor($w_dst/$ratio);}

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
		$img_dst = imagecreatetruecolor($w_dst, $h_dst);	//  resample
	  
		imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $w_dst, $h_dst, $w_src, $h_src);
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

/*
****************************************************** Upload and resize ******************************************************
htaccess file:
php_value post_max_size 16M
php_value upload_max_filesize 6M


//  $img_base = base directory structure for thumbnail images
//  $w_dst = maximum width of thumbnail
//  $h_dst = maximum height of thumbnail
//  $n_img = new thumbnail name
//  $o_img = old thumbnail name
*/

function convertPic($img_base, $w_dst, $h_dst, $n_img, $o_img){

	ini_set('memory_limit', '100M');	//  handle large images
	unlink($img_base.$n_img);			//  remove old images if present
	unlink($img_base.$o_img);
	$new_img = $img_base.$n_img;
    
	$file_src = $img_base."img.jpg";	//  temporary safe image storage
	unlink($file_src);
	move_uploaded_file($_FILES['Filedata']['tmp_name'], $file_src);

	list($w_src, $h_src, $type) = getimagesize($file_src);     // create new dimensions, keeping aspect ratio
	$ratio = $w_src/$h_src;
	if ($w_dst/$h_dst > $ratio) {$w_dst = floor($h_dst*$ratio);} else {$h_dst = floor($w_dst/$ratio);}

	switch ($type){
		case 1:   //   gif -> jpg
			$img_src = imagecreatefromgif($file_src);
		break;
		case 2:   //   jpeg -> jpg
			$img_src = imagecreatefromjpeg($file_src);
		break;
		case 3:  //   png -> jpg
			$img_src = imagecreatefrompng($file_src);
		break;
	}
	$img_dst = imagecreatetruecolor($w_dst, $h_dst);	//  resample
  
	imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $w_dst, $h_dst, $w_src, $h_src);
	imagejpeg($img_dst, $new_img);    //  save new image

	unlink($file_src);  //  clean up image storage
	imagedestroy($img_src);       
	imagedestroy($img_dst);
}

//$p_id = (Integer) $_POST[uid];
//$ver = (Integer) $_POST[ver];
//$delver = (Integer) $_POST[delver];
//convertPic("your/file/structure/", 150, 150, "u".$p_id."v".$ver.".jpg", "u".$p_id."v".$delver.".jpg");

?>
