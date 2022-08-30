<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
THEMES USAGE
    <title>Resultados</title>
</head>
<body>
    <!-- tailwind.config.js -->
<!-- module.exports = {
    plugins: [require('@tailwindcss/forms'),]
};
 -->


<!-- component -->

<?php
//$dni = $_POST["dni"];
$dni = str_pad($_POST["dni"], 8, "0", STR_PAD_LEFT);
$dni7 = $_POST["dni"];
$email = $_POST['email'];
//INICIO CODIGO LIMPIO

try{

//conexion a bd pagina web
$link1 = new PDO('mysql:host=localhost;dbname=unpabedu_cms','unpabedu_admin','UAI2020VA$');
$link1->setAttribute("PDO::ATTR_ERRMODE", PDO::ERRMODE_EXCEPTION);
$link1->exec("SET CHARACTER SET utf8");

//conexion a bd moodle
// $link2 = new PDO('mysql:host=localhost;dbname=aula4ica_autonoma','aula4ica_autonom','Ma13-280116Uv');
// $link2->setAttribute("PDO::ATTR_ERRMODE", PDO::ERRMODE_EXCEPTION);
// $link2->exec("SET CHARACTER SET utf8");

$sql1 = "SELECT * FROM docentes WHERE dni = '$dni' AND email_institucional = $email";
$resulta1 = $link1->prepare($sql1);



// $sql2 = "SELECT  idata.userid,us.lastname, us.firstname, us.username,
// SUM(CASE WHEN ifield.shortname = 'DNI_CE' THEN idata.data ELSE NULL END) as dni,
// GROUP_CONCAT(CASE WHEN ifield.shortname = 'CODIGO_DE_MATRICULA' THEN idata.data ELSE NULL END) as codigo,
// GROUP_CONCAT(CASE WHEN ifield.shortname = 'CORREO_INSTITUCIONAL' THEN idata.data ELSE NULL END) as correo_institucional,
// GROUP_CONCAT(CASE WHEN ifield.shortname = 'TIPO_USUARIO' THEN idata.data ELSE NULL END) as tipo_usuario
// FROM `mdl_user_info_data` as idata INNER JOIN `mdl_user_info_field` as ifield ON
// idata.fieldid = ifield.id JOIN mdl_user as us ON 
// us.id = idata.userid WHERE us.skype='$dni' AND suspended = 0";

// $resulta2 = $link2->prepare($sql2);



$resulta1->execute();
// $resulta2->execute();



$res1 = $resulta1->fetchAll(PDO::FETCH_ASSOC);
// $res2 = $resulta2->fetchAll(PDO::FETCH_ASSOC);

//Número de filas que tienen esta consulta
$num_rows1 = $resulta1->rowCount();
// $num_rows2 = $resulta2->rowCount();

// echo 'Conexion Ok';
$resulta1->closeCursor();
// $resulta2->closeCursor();

} catch(Exception $e){
    die('Error: '. $e->GetMessage());
}


if($num_rows1){
    $acceso = true;
    echo 'hola';
}

else{
    
    echo '<script>

						swal({

						title:"¡ El DNI '.$dni.' no está registrado !",
						text: "El DNI ingresado no está registrado, si se trata de un error envía un correo con tus datos al siguiente e-mail: aulavirtual.soporte@autonomadeica.edu.pe",
						type: "error",
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
						},

						function(isConfirm){

							if (isConfirm) {

								window.location = "https://consulta.autonomadeica.edu.pe/consulta.php";

							}

					})

					</script>';
    
}


//FIN CODIGO LIMPIO
?>
 

    <div>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200">
            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
        
            <?php
            include 'includes/aside.php';
            ?>
            <div class="flex-1 flex flex-col overflow-hidden">
                <?php
                    include 'includes/header.php';


                    include 'includes/contenido.php';
                ?>
                
            </div>
        </div>
    </div>
</body>
</html>