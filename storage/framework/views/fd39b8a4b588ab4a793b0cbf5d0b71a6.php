<?php
if(!empty($_GET["module"])){
	include_once($_GET["module"].".php");
	
}else{
	@include('home.php');
}
?><?php /**PATH C:\laragon\www\berita-ml\resources\views/include/content.blade.php ENDPATH**/ ?>