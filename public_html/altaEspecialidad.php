<HTML XMLNS="http://www.w3.org/1999/xhtml">
<HEAD>
<META HTTP-EQUIV="content-Type"CONTENT="text/html;CHARSET=utf-8"/>
<TITLE>Formulario de Altas de Especialidades</TITLE>
<LINK HREF="estiloEspecialidad.css" REL="Stylesheet" TYPE="text/css"/>
</HEAD>
<BODY>
<FORM ID="form1" NAME="form1" METHOD="post" ACTION="actBase.php">
<P CLASS="titulo">Altas de Especialidades</P>
<BR/><BR/>
<LABEL FOR="clave">Clave:</LABEL>
<INPUT NAME="cveEspecialidad"TYPE="text" ID="claveEspecialidad" SIZE="100px" MAXLENGTH="6"/><BR/>
<LABEL FOR="nombre">Nombre:</LABEL>
<INPUT NAME="nomEspecialidad"TYPE="text" ID="nombreEspecialidad" SIZE="100px" MAXLENGTH="25"/><BR/>
<LABEL FOR="area">Area:</LABEL>
<SELECT NAME="nombreArea" ID="nombreArea">
<?php
include"conectar.php";
$resConectar=conecta();
$sqlAreas="SELECT*FROM AREA";
$tablaArea=mysql_query($sqlAreas);
$numfilasAreas=mysql_num_rows($tablaArea);
for($i=0;$i<$numfilasAreas;$i++){
$filaArea=mysql_fetch_array($tablaArea);
echo´<OPTION>´.$filaArea[´nomArea´].´</OPTION>´;
}
?>
</SELECT><BR/><BR/>
<INPUT TYPE="sumit" NAME="boton" ID="botonGuardar" VALUE="Guardar/">
<INPUT TYPE="reset" NAME="botonNuevo" ID="botonNuevo" Value="Nuevo"/><BR/>
</FORM>
<IMG SRC="escuela.jpg" WIDTH="60" HEIGHT="40"ONCLICK="history.back()"/>
</BODY>
</HTML>