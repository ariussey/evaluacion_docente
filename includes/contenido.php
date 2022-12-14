<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">Resultados de la Evaluación Docente</h3>

        <div class="mt-8">

        </div>

        <div class="flex flex-col mt-8">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Apellidos y Nombres</th>
                                <th
                                    class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                    Semestre</th>

                                <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Descargar</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            <?php
                            
                            foreach($docentes_evaluaciones as $docente_evaluacion){
                                echo '
                                <tr>
                                <td class="px-2 whitespace-no-wrap border-b border-gray-200">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm leading-5 font-medium text-gray-900">'.$docente_evaluacion['apellidos']." ". $docente_evaluacion['nombres'].'</div>
                                            <div class="text-sm leading-5 text-gray-500">'.$docente_evaluacion['email_institucional'].'</div>
                                        </div>
                                    </div>
                                </td>


                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-bold rounded-full bg-blue-200 text-blue-900">'.$docente_evaluacion['periodo'].'</span>
                                </td>


                                <td
                                    class="px-6 py-4 text-center whitespace-no-wrap border-b border-gray-200 text-sm leading-5 font-medium">
                                    <a href="'.$docente_evaluacion['url'].'" class="text-indigo-600 hover:text-indigo-900"><i class="fa-solid fa-2x fa-file-arrow-down text-red-500 hover:text-red-800 hover:scale-110"></i></a>
                                </td>
                            </tr>
                                ';
                            }
                            
                            ?>
                            
            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>