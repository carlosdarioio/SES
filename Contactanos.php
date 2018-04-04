<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SES</title>
<link rel="StyleSheet" href="ses.css" type="text/css">
<style>

	  
</style>

<script type="text/javascript" src="zepto.min.js" > </script>



</head>

<body bgcolor="#DDE8F3">




<div class="div_principal">

<div class="div_principal_con"style="background-color:#DDE8F3; float:left;">

<div align="left" class="cont_img">
 <p><a  href="menu.html" ><img src="img.png" width="240"></a> </p>
 
  
      
</div>
<div class="cont_menu">
<ul class="menu">
<!-- Me gusta mas sin el menu de arriba solo dejalo en servicios pa mostrarlo-
<li  class="aaa"><a href="menu.html" class="link">Principal</a></li>



<li  class="aaa"><a href="Servicios.html" class="link">Servicios</a></li>

<li  class="aaa"><a href="Productos.html" class="link">Productos</a></li>

<li  class="aaa"><a href="Nosotros.html" class="link">Aserca de nosotros</a></li>

-->
</ul>

</div>


<div class="contt" align="left">

<div id="div_cont" style="border:solid 12px;"></div>


<div id="indice" align="left">
<nav>
         <h1 align="right">Menu </h1>
        <ul>
<a  href="menu.html" class="hr">Principal</a>
<br><br><br><br>
<a href="Servicios.html" class="hr">Servicios</a>
<br><br><br><br>

<a href="Productos.html" class="hr">Productos</a>
<br><br><br><br>

<a href="Nosotros.html" class="hr">Nosotros</a>
<br><br><br><br>
<a href="Contactanos.php" class="hr">Contactanos</a>

 </ul>
      </nav>
 
    

</div>


<div id="inf">
<div ><img src="contactanos.png" width="532" align="right" style="margin-top:-200px; margin-right:190px;">
<div align="center" style="margin-top:-338px; margin-right:-80px;">

<p> Si deseas saber mas de nosotro puedes llamarnos al celular 95 91 25 13.</p>
<p> o a nuestro telefono 2440 02 54.</p>

<p>te danos una opcion mas mandanos un mensaje por este medio:  </p>

      <form action="Contactanos.php" method="post" class="registro">
      <label id = "1">Nombre:</label>
      <label><input type="text" name="nombre" id="nombre" placeholder="Nombre"/>      </label>
         <p>
         <label id = "2">Asunto:</label>
		 <input type="text" value="Informacion" name="asunto" id="asunto" placeholder="Asunto"/>
         </p>
          <p>
         <label id = "1">Correo:</label>
		 <input type="text" name="correo" id="correo" placeholder="Correo"/>
           </p>
           <p>
         <label id = "1">Cuerpo del correo :</label>
          <label>  <textarea name="cuerpo" cols="30" rows="5" id="cuerpo" placeholder="Cuerpo del mensaje"></textarea>  </label>
          </p>
		
		  
      

 
   <input type="submit" name="enviar" value="Enviar"> 

       </form>
	    <!-- Inicio php -->
 
    <div id="msj"></div>
 <?php
/*INICIAMOS EL CODIGO PHP*/
if($_REQUEST[nombre]!="" and $_REQUEST[asunto]!="" and $_REQUEST[correo]!="" and $_REQUEST[cuerpo]!="")
  {
     $header="From: Prueba<$_REQUEST[correo]>\n";
     $header.="MIME-Version: 1.0\n";
     $header.="Content-type: text/html; charset=iso-8859-1";
     $msj="$_REQUEST[cuerpo]";
     $dest="cdfn3@hotmail.com";
     $asunto="$_REQUEST[asunto]";
     mail($dest,$asunto,$msj,$header);
     //echo "Mensaje enviado";
	 echo '<script>document.getElementById("msj").innerHTML="Mensaje Enviado"</script>';
  }
  else
  {
     echo '<script>document.getElementById("msj").innerHTML="Llenar todos los datos"</script>';
	 echo '<script>document.getElementById("nombre").value="'.$_REQUEST[nombre].'";</script>';
	 echo '<script>document.getElementById("asunto").value="'.$_REQUEST[asunto].'";</script>';
	 echo '<script>document.getElementById("correo").value="'.$_REQUEST[correo].'";</script>';
	 echo '<script>document.getElementById("cuerpo").value="'.$_REQUEST[cuerpo].'";</script>';
	 
//	    echo '<script>document.getElementById("NCuenta").value = "'.$_REQUEST[NCuenta].'";</script>';
	 
  }
?>
 
 <!-- fin php-->
</div>

</div>
</div>



</div>

<footer align="center">
      
      <p><a href="menu.html">Principal</a> | <a href="Servicios.html">Servicios</a> | <a href="Productos.html">Productos</a> | <a href="Nosotros.html">Nosotros</a> | <a href="Contactanos.php">Contactanos</a></p>
      <p>Copyright &copy; 2014 SES</p>
    </footer>
</div>
</div>
</body>
</html>