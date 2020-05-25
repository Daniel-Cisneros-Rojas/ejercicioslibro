<HTML>
<HEAD>
<META HTTP-EQUIV="content-Type"CONTENT="text/html;
CHARSET=utf-8"/>
<TITLE>Formulario de Modificaciones de Especialidades</TITLE>
<LINK HREF="estiloEspecialidad.css"
REL="stylesheet" TYPE="text/css"/>
<SCRIPT LANGUAJE="Javascript" TYPE="text/Javascript">
funcion modificar()
{
if(confirm('¿Confirma cambios?'))
document.formCambios.submit()
}
</SCRIPT>
</HEAD>
<BODY>
<?php
include"conectar.php";
$vCveEsp=$_POST['cveEspecialidad'];
$vNomEsp=$_POST['nomEspecialidad'];
$vNomArea=$_POST['nomArea'];
$resConectar=conecta();
if(isset($_POST['botonG'])=='Modificar'){
echo'<FORM ID="formCambios" NAME="formCambios"
METHOD="post" ACTION="actBase.php" ENCTYPE="multipart/form-data">';
echo'<P CLASS="titulo">Cambios de Especialidades:</P>
<BR/></BR>';
echo'<LABEL FOR="clave">'."Clave:".'</LABEL>';
echo'<INPUT NAME="cveEspecialidad" TYPE="text"
ID="claveEspecialidad" SIZE="100px" MAXLENGHT="6"
VALUE='.$vCveEsp.'READONLY="readonly"><BR/>';
echo'<LABEL FOR="nombre">'."Nombre:".'</LABEL>';
echo'<INPUT NAME="nomEspecialidad" TYPE="text"
ID="nombreEspecialidad" SIZE="100"
MAXLENGTH="25" VALUE='.$vNomEsp.'><BR/>';
echo'<LABEL FOR="area">'."Area:".'</LABEL>';
echo'<SELECT NAME="nombreArea" ID="nombreArea">';
$sqlAreas="SELCT*FROM AREA";
$tablaArea=mysql_query($sqlAreas);
$numfilasAreas=mysql_num_rows($tablaArea);
for($i=0;$i<$numfilasAreas;$i++){
if($filaArea['nomArea']==$vNomArea){
echo'<OPTION SELECTED="selected">'
.$filaArea['nomArea'].'</OPTION>';
}
else
echo'<OPTION>'.$filaArea['nomArea'].'</OPTION>';
}
echo'</SELECT><BR/><BR/>';
echo'<INPUT TYPE="button" NAME="boton"
ID="botonModificar" VALUE="Modificar"
ONCLICK="modificar();"/>';
echo'<INPUT TYPE="reset" NAME="botonCancelar"
ID="botonCancelar" VALUE="cancelar"/><BR/>';
}
else{
$sqlElimEsp="DELETE FROM ESPECIALIDAD WHERE cveEsp='$vCveEsp'";
$regEli=mysql_query($sqlElimEsp,$resConectar);
if(!$regEli)
echo"<SCRIPT LANGUAJE='Javascript'TYPE='text/Javascript'>
alert('Error al intentar eliminar una especialidad')
Javascript:history.back(1)
</SCRIPT>";
else
echo"<SCRIPT LANGUAJE='Javascript'TYPE='text/Javascript'>
alert('Especialidad borrada...')
window.location='consultaEspecialidad.php'
</SCRIPT>";
}

?>
</BODY>
</HTML>