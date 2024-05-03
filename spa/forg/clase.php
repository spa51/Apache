
<?php
class Principal{
      function Principal(){

	  }
	  function definitiva($A,$B,$C){


      $raizc=sqrt($B*$B-4*$A*$C);
        $x1=(-$B+$raizc)/(2*$A);

                return $x1;


	  }
    function definitiva2($A,$B,$C){


      $raizc=sqrt($B*$B-4*$A*$C);
    $x2=(-$B-$raizc)/(2*$A);


                return $x2;



	  }
}


/*class Segunda extends Principal{
	    function Segunda{

            echo "el constructor";
	   }
}*/

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
</body>
</html>
