<!DOCTYPE html>
<html lang="en">
<link href="respuesta.css" rel="stylesheet" type="text/css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<script language="JavaScript">
	alert("A continuacion te mostraremos la informacion que nos brindaste");
</script>
    
<center class="imagen"><br><br><img src="soriana_hiper_blanco.png" width="400"></center>

<center><A HREF = "1 Index.html"class="link1">Inicio</A></center>
    <br><br>
<?PHP

$nom = $_GET['nombre'];
$añonac = $_GET['añoNac'];
$diam = $_GET['DiaMes'];
$lugarn = $_GET['LugarNac'];
$celular = $_GET['Cel'];

$iden = $_GET['identificacion'];
$numid = $_GET['NumIden'];
$correo = $_GET['Correo'];
$direccion = $_GET['Direccion'];
$estudios = $_GET['Estudios'];

echo "Tu nombre es ".$nom." naciste en el año ".$añonac." en ".$lugarn."<br>";
echo "Tu numero de telefono es ".$celular. " tu tipo de identificacion es ".$iden." y tu numero de identificacion es ".$numid. " estudiaste hasta la ".$estudios."<br>";
echo "Tu correo es ".$correo." tu direccion es ".$direccion."<br>";

?>

<br><button class="registro" onclick="correcto()"> Siguiente</button>


<script language="JavaScript">
        function correcto() {
        var pregunta = confirm("¿La informacion es correcta?")
        if (pregunta){
            alert("Se ha enviado tus respuestas, te llamaremos si estamos interesados")
             window.location = "1 index.html";
        }
        else{
            alert("Verifica la informacion")
            window.location = "4 trabajo.html";
        }
    }
</script>

<center>
    <footer class="lll">
        <div class="si"> ¿Cómo Compro?</div>                             <div class="sepa">  Recompensas Soriana</div>         <div class="si">Términos y Condiciones de Uso</div><br>
        <div class="si">Cancelaciones y Devoluciones</div>                <div class="sepa1"> Facturación electrónica</div>     <div class="si">Aviso de privacidad</div><br>       
        <div class="si">Servicio al Cliente</div>                         <div class="sepa2"> Soriana Móvil</div>               <div class="si">Políticas Programa Recompensas</div><br>       
        <div class="si">Preguntas Frecuentes</div>                        <div class="sepa3"> Pago de Servicios</div>           <div class="si">Condiciones de las promociones</div><br>             
        <div class="si">55 5062 8019</div>                               <div class="sepa4">  Casa Soriana</div>                <div class="si">Derechos del consumidor</div><br>       
        <div class="si">Chat</div>                                       <div class="sepa5">  Folletos Tiendas</div>            <div class="si">.</div><br>         
        <div class="si">Seguimiento de pedido</div>                      <div class="sepa6">  Directorio de Tiendas</div>       <div class="si">.</div><br>      
    </footer>
    </center>
    
    <center><footer class="iii">
        Organización SorianaDirectorio de TiendasRelación con inversionistas
    Súper en tu CasaProveedoresLocales comercialesBolsa de trabajo
    </footer></center>
</body>
</html>