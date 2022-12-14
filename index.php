<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#001a54" />
    <link rel="icon" href="https://consulta.autonomadeica.edu.pe/views/images/icono.jpg">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Resultados Evalución Docente</title>
</head>
<body>
<!-- component -->
<div class="bg-white dark:bg-gray-900">
        <div class="flex justify-center h-screen">
            <!-- https://images.unsplash.com/photo-1616763355603-9755a640a287?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80) -->
            <div class="hidden bg-cover lg:block lg:w-2/3" style="background-image: url(img/fondo-uai.png)">
                <div class="flex items-center h-full px-20 bg-gray-900 bg-opacity-40">
                    <div>
                        <h2 class="text-4xl font-bold text-white">Evaluación Docente</h2>
                        
                        <p class="max-w-xl mt-3 text-gray-300">Resultados de Evaluación Docente - Universidad Autónoma de Ica</p>
                    </div>
                </div>
            </div>
            
            <div class="flex items-center w-full max-w-md px-6 mx-auto lg:w-2/6">
                <div class="flex-1">
                <img class="w-100 p-8 m-auto" src="https://autonomadeica.edu.pe/images/logo_negro_v2.png" alt="">
                <hr>    
                <div class="text-center mt-4">
                        <h2 class="text-4xl font-semibold text-center text-gray-700 dark:text-white">Validación UAI</h2>
                        
                        <p class="mt-3 text-gray-500 dark:text-gray-300">Ingrese sus datos para validar su identidad</p>
                    </div>

                    <div class="mt-8">
                        <form action="resultado.php" method="post" id="formValidacion">
                            <div>
                                <label for="email" class="block font-semibold mb-2 text-sm text-gray-600 dark:text-gray-200">Correo Institucional</label>
                                <input type="email" name="email" id="email" required placeholder="example@autonomadeica.edu.pe" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="mt-6">
                                <div class="flex justify-between mb-2">
                                    <label for="dni" class="font-semibold text-sm text-gray-600 dark:text-gray-200">N° de DNI</label>
                                    <!-- <a href="#" class="text-sm text-gray-400 focus:text-blue-500 hover:text-blue-500 hover:underline">Forgot password?</a> -->
                                </div>

                                <input type="password" name="dni" id="dni" required placeholder="Ingrese su número de DNI" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md dark:placeholder-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-700 focus:border-blue-400 dark:focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40" />
                            </div>

                            <div class="mt-6">
                                <input type="submit" name="validar" value="VALIDAR"
                                    class="formValidacion font-semibold w-full px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-blue-800 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-600 focus:ring focus:ring-blue-700 focus:ring-opacity-20">
                            </div>

                        </form>

                        <?php /* <p class="mt-6 text-sm text-center text-gray-400">Don&#x27;t have an account yet? <a href="#" class="text-blue-500 focus:outline-none focus:underline hover:underline">Sign up</a>.</p> */ ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>