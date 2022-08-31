<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#001a54" />
    <link rel="icon" href="https://consulta.autonomadeica.edu.pe/views/images/icono.jpg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>Resultados Evalución Docente</title>
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

//$sql1 = "SELECT * FROM docentes WHERE dni = $dni AND email_institucional = '$email'";
$sql1 = "SELECT * FROM vst_docente_evaluacion WHERE dni = $dni and email_institucional = '$email' ORDER BY periodo DESC";
$resulta1 = $link1->prepare($sql1);


// $sql2 = "SELECT * FROM docente_evaluacion WHERE dni = $dni";
// $resulta2 = $link1->prepare($sql2);

$resulta1->execute();
//$resulta2->execute();

$docentes_evaluaciones = $resulta1->fetchAll(PDO::FETCH_ASSOC);
//$evaluaciones = $resulta2->fetchAll(PDO::FETCH_ASSOC);

//Número de filas que tienen esta consulta
$num_rows1 = $resulta1->rowCount();
//$num_rows2 = $resulta2->rowCount();

// echo 'Conexion Ok';
$resulta1->closeCursor();
//$resulta2->closeCursor();

} catch(Exception $e){
    die('Error: '. $e->GetMessage());
}


if($num_rows1>0){
    $acceso = true;
    

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

    <?php 

}
else{
    
    echo '<script>
    
    Swal.fire({
        icon: "error",
        title: "¡ No registrado !",
        text: "El DNI o el correo institucional ingresado no son correctos, si crees que se trata de un error envía un correo con tus datos al siguiente e-mail: aulavirtual.soporte@autonomadeica.edu.pe",
        showCancelButton: false,
        confirmButtonColor: "#3085d6",
        confirmButtonText: "Regresar"
      }).then((result) => {
        if (result.isConfirmed) {
            window.location = "https://autonomadeica.edu.pe/evaluacion-docente";
        }
      })


</script>';
    
}


//FIN CODIGO LIMPIO
?>
 
    

</body>
</html>