<?php
$paginaActiva = 0;
include "includes/header.php";
?>

<div class="mt-5">
    <!-- Informacion del trabajo -->
    <div class="row">
        <div class="col-1 px2"></div>

        <div class="col-6 px2">
            <img src="images/Logo.png" alt="Logo i-Lunch" class="img-fluid">
        </div>

        <div class="col-4 px2">
            <h1>Trabajo final de Bases de Datos I</h1>

            <!-- Integrantes -->
            <div class="mt-3">
                <h3>Integrantes</h3>
                <ul>
                    <li>Andres Felipe Aparicio Mestre - <a href="mailto:anapariciom@unal.edu.co">anapariciom@unal.edu.co</a></li>
                    <li>David Esteban Toro Arango - <a href="mailto:datoro@unal.edu.co">datoro@unal.edu.co</a></li>
                    <li>Emmanuel Lopez Rodriguez - <a href="mailto:emlopezr@unal.edu.co">emlopezr@unal.edu.co</a></li>
                </ul>
            </div>

            <!-- Informacion materia -->
            <div class="mt-3">
                <h3>Informacion</h3>
                <ul>
                    <li><b>Materia:</b> Bases de Datos I</li>
                    <li><b>Profesor: </b>Francisco Javier Moreno Arboleda</li>
                    <li><b>Institucion:</b> Universidad Nacional de Colombia sede Medellin</li>
                    <li><b>Semestre:</b> 2022-1</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Consultas -->
    <div class="row mt-5">
        <div class="col-1 px2"></div>

        <div class="col-5 px2">
            <h2>Consulta 1</h2>
            <p class="text-justify">Sea CostoTotal la suma de todos los costos de los restaurantes asociados a una franquicia. Se muestra el NIT y el nombre de las franquicias las cuales su CostoTotal es mayor a USD $500M, su franquicia dueña es dueña de 2 o mas restaurantes y el administrador que gestiona la franquicia no gestiona ningun restaurante.</p>
            <a href="consultas/consulta_1.php" class="btn btn-primary">Realizar consulta</a>
        </div>

        <div class="col-5 px2">
            <h2>Consulta 2</h2>
            <p class="text-justify">Se muestra el NIT y la valoracion comercial de los restaurantes los cuales su valoracion comercial es mayor a la valoracion comercial de su franquicia dueña y a su vez el administrador que gestiona el restaurante es el adminsitrador que gestiona la franquicia dueña.</p>
            <a href="consultas/consulta_2.php" class="btn btn-primary">Realizar consulta</a>
        </div>
    </div>

    <!-- Busquedas -->
    <div class="row mt-5">
        <div class="col-1 px2"></div>

        <div class="col-5 px2">
            <h2>Busqueda 1</h2>
            <p class="text-justify">El usuario ingresa dos fechas F1 y F2 y un número entero N. Se cumple que F1 ≤ F2 y 0 ≤ N. Se muestran los nombres y el telefono de todos los administradores que son gestores de exactamente N restaurantes y dichos restaurantes han abierto el rango de fechas [F1, F2].</p>
            <a href="busquedas/busqueda_1.php" class="btn btn-primary">Realizar busqueda</a>
        </div>

        <div class="col-5 px2">
            <h2>Busqueda 2</h2>
            <p class="text-justify">El usuario ingresa dos numeros enteros N1 y N2. Se cumple que 0 ≤ N1 < N2. Se muestra el NIT y el nombre de todas las franquicias que son dueñas de entre N1 y N2 restaurantes [N1, N2]. <br> &#8203;</p>
            <a href="busquedas/busqueda_2.php" class="btn btn-primary">Realizar busqueda</a>
        </div>
    </div>


</div>

<?php
include "includes/footer.php";
?>