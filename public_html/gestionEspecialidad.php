<HTML>
<HEAD>
<META HTTP-EQUIV="content-Type"CONTENT="text/html;
CHARSET=utf-8"/>
<TITLE>Formulario de Gestion de Especialidades</TITLE>
<LINK HREF="estiloEspecialidad.css" REL="stylesheet" TYPE="text/css"/>
<SCRIPT LANGUAJE="Javascript" TYPE="text/Javascript">
funcion eliminar()
{
if(confirm('¡confirmar la baja?'))
document.formGestionEsp.submit()
}
</SCRIPT>
</HEAD>
<BODY>
<FORM ID="formGestionEsp"NAME="formGestionEsp" METHOD="post" ACTION="gestionBase.php"ENCTYPE="multipart/form-data">
<P CLASS="titulo">Gestion de Especialidades</P>
<BR/><BR/>
<?php
include"conectar.php";
$vCveEsp=$_POST['cveEspe'];
$resConectar=conecta();
$sqlEspe="SELECT cveEsp,nomEsp,nomArea
FROM ESPCIALIDAD,AREA
WHERE cveEsp='$vCveEsp'
AND ESPCIALIDAD.cveArea=Area.cveArea;";
$tablaEspe=mysql_query($sqlEspe);
$numfilasEspe=mysql_num_rows($tablaEspe);
if($numfilasEspe>0){
$filaEspe=mysql_fetch_array($tabalaEspe);
echo'<LABEL FOR="clave">'."Clave:".'</LABEL>';
echo'<INPUT NAME="nomEspecialidad" TYPE="text"
ID="nombreEspecialidad"READONLY="readonly"
VALUE='.$filaEspe['nomEsp'].'><Br/>';
echo'<LABEL FOR="area">'."Area:".'</LABEL>
echo'<INPUT NAME="nomArea" TYPE="text"
ID="nombreArea" READONLY="readonly"
VALUE='.$filaEspe['nomArea'].'><BR/>';
}
echo'<INPUT TYPE="button" NAME="botonG"
ID="botonG" VALUE="Eliminar" ONCLICK="eliminar();"/>';
echo'<INPUT TYPE="submit"NAME="botonG"
ID="botonModificar" VALUE="Modificar"/><BR/>';
?>
</FORM>
<BR/>
<IMG SRC="imagEscuela/regresar.gif"
WITH="60" HEIGHT="40" ONCLICK="history.back()"/>
</BODY>
</HTML>