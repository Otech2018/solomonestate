<?php


$targetFolder = '/storage/app/public/';
$linkFolder = '/storage/';
if (symlink('/home/solomjup/solomonestate/storage/app/public', '/home/solomjup/public_html/storage') ){
echo 'Symlink process successfully completed';
}else{
   echo 'error'; 
}




?>