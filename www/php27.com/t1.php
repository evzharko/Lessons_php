<?php
function uploadphoto ($maxthumbsize,$maxlargesize,$name,$path,$field) {
    $result=array();
    if ($_FILES[$field]['error']==0) {
        $types=array("image/pjpeg", "image/jpeg");
        if (in_array($_FILES[$field]['type'],$types)) {
            $tmpname="tmp_".md5(date("U")).".jpg";
            $relpath=($path=="") ? PHOTOPATH : PHOTOPATH.$path."/";
            $locpath=($path=="") ? UPLOAD : UPLOAD.$path."\\"; // Винды!!!


            if (move_uploaded_file($_FILES[$field]['tmp_name'], $locpath.$tmpname)) {
                $message="Файл успешно загружен на сервер.";

                list($width,$height,$type,$attr) = getimagesize($relpath.$tmpname);
                $quality=70; // Качество
                $source=imagecreatefromjpeg($relpath.$tmpname);

                if ($maxthumbsize>0) {
                    $ratiothumb=($height/$width > 1) ? $height/$maxthumbsize : $width/$maxthumbsize;
                    $thumbwidth=intval($width/$ratiothumb);
                    $thumbheight=intval($height/$ratiothumb);
                    $thumb=imagecreatetruecolor($thumbwidth,$thumbheight);
                    imagecopyresampled($thumb,$source,0,0,0,0,$thumbwidth,$thumbheight,$width,$height);
                    imagejpeg($thumb,$relpath."thumb_".$name.".jpg",$quality);
                    imagedestroy($thumb);
                    $message.="\nСоздано изображение с именем thumb_".$name.".jpg";
                }

                if ($maxlargesize>0) {
                    $ratiolarge=($height/$width > 1) ? $height/$maxlargesize : $width/$maxlargesize;
                    if ($height<$maxlargesize&&$width<$maxlargesize) $ratiolarge=1;
                    $largewidth=intval($width/$ratiolarge);
                    $largeheight=intval($height/$ratiolarge);
                    $large=imagecreatetruecolor($largewidth,$largeheight);
                    imagecopyresampled($large,$source,0,0,0,0,$largewidth,$largeheight,$width,$height);
                    imagejpeg($large,$relpath."large_".$name.".jpg",$quality);
                    imagedestroy($large);
                    $message.="\nСоздано изображение с именем large_".$name.".jpg";
                }