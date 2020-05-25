<HEAD>
<META HTTP-EQUIV="content-Type"CONTENT="text/html;
CHARSET=utf-8"/>
<TITLE>formulario de consulta de Especialidades</TITLE>
<LINK HREF="estiloEspecialidad.css"
REL="stylesheet" TYPE="text/css"/>
</HEAD>
<BODY>
<FORM ID="form1"NAME="form1" METHOD="post"
ACTION="gestionEspecialidad.php">
<P CLASS="titulo">Selecciona la Especialidad</P>
<BR/><BR/>
<LABEL FOR="clave">Clave:</LABEL>
<SELECT NAME="cveEspe" ID="cveEspecialidad">
<?php
include"conectar.php";
$resConectar=conecta();
$sqlEspe="SELECT*FROM ESPECIALIDAD";
$tablaEspe=mysql_query($sqlEspe);
$numfilasEspe=mysql_num_rows($tablaEspe);
for($i=0; $i<$numfilasEspe;$i++){
$filaEspe=mysql_fetch_array($tablaEsp);
echo'<option>'.$filaEspe['cveEsp'].'</option>';

}
?>
</SELECT><BR/><BR/>
<INPUT TYPE="submit" NAME="btnConsultar" ID="botonConsultar" VALUE="Consultar"/><BR/><BR/>
</FORM>
<a href="index.html"><IMG SRC="escuela.jpg" WIDTH="60" HEIGHT="40"/></a>
</BODY>