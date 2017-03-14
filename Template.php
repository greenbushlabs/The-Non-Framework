=====   Main Template Layout:   =====
<?php
	ob_start();
header("Cache-Control: no-cache, must-revalidate");
error_reporting(0);
require("inc.dbase.php");  // <= Database connection //
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  		<?php
			echo "<font color=red><b>".$displayText."</b></font>";
			 //@@@@@ MAIN CONTENT @@@@@@@@@//
                                        // $p is the page variable that gets passes through the URL string //
 			 // @@@@@@@@@@@@@@@@@@@@@@//
		               if (eregi("(http|ftp)",$p)) { die(); }
			   if(isset($p)){
			           require($p.".php");
			      }else{
			            require("static/main.php");
			       }
		?>

</body>
</hrml>
<?php
    ob_end_flush();
?>
