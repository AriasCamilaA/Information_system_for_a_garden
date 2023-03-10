<?php 
session_start();
$nombre=$_SESSION['nombre'];
$id=$_SESSION['id'];
if (isset($_SESSION['Admin'])){
    $sesion = 'A';
}elseif (isset($_SESSION['Profe'])){
    $sesion = 'P';
}elseif (isset($_SESSION['Estudiante'])){
    $sesion = 'E';
}
if(!isset($sesion)){
    header("location:?c=Login&a=Index");
    
}else {
    
}

?>
<?php
require_once "./core/configGeneral.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Acerca de</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'>
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo SERVERURL; ?>assets/css/menu_Lateral.css">
    
</head>

<body>
<?php include "./views/modules/cargador.php" ?>
    <!-- side-bar -->
    <?php include "./views/modules/navlateral.php" ?>

    <!-- content-page -->

    <section class="full-box dashboard-contentPage">

        <!-- nav-bar -->
        <?php include "./views/modules/navbar.php" ?>


        <!-- content-page -->
        <div class="ejemplo">
<link rel="stylesheet" href="<?php echo SERVERURL;?>assets/css/Redes.css">
<!--seccion de la mision-->
<section class="card" id="Servicios">
    <!--Para crear contenedor de clase tarjeta-->
    <div class="card-header">
        <!--Para poner emcabezado a la tarjeta-->
        <h1>Servicios</h1>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <!---Para escribir una cita textual del parrafo-->
            <p>
                <!--Para crear parrafo-->
                <ul>
                    <li>Transporte</li>
                    <li>Clases extracurriculares</li>
                    <li>Alimentaci??n</li>
                    <li>Otros beneficios</li>
                </ul>
            </p>

        </blockquote>
    </div>
</section>

<!--seccion de la mision-->
<section class="card" id="Mision">
    <!--Para crear contenedor de clase tarjeta-->
    <div class="card-header">
        <!--Para poner emcabezado a la tarjeta-->
        <h1>Misi??n</h1>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <!---Para escribir una cita textual del parrafo-->
            <p>
                <!--Para crear parrafo-->
                El Jard??n Fundaci??n Sue??os de Luz brinda a los ni??os y a las ni??as una educaci??n inicial
                de calidad y calidez;
                que les permita un desarrollo arm??nico e integral y reconoci??ndolos como sujetos de
                derechos capaces de crear y
                participar con libertad, teniendo como principal fundamento los valores y pilares como:
                El arte, la literatura,
                el juego y la exploraci??n del medio.
            </p>

        </blockquote>
    </div>
</section>

<!--seccion de la vision-->
<section class="card" id="Vision">
    <!--Para crear contenedor de clase tarjeta-->
    <div class="card-header">
        <!--Para poner emcabezado a la tarjeta-->
        <h1>Visi??n</h1>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <!---Para escribir una cita textual del parrafo-->
            <p>
                <!--Para crear parrafo-->
                El Jard??n fundaci??n Sue??os de Luz ser?? reconocido al 2020 como una instituci??n que
                brinda a los ni??os y a las ni??as
                una pedagog??a basada en el amor y el reconocimiento de los derechos, contando para esto
                con espacios adecuados y
                seguros que permitan e pleno desarrollo de todas las habilidades y con un equipo de
                personas comprometidas por el
                desarrollo integral de los ni??os y las ni??as de los diferentes niveles.
            </p>


        </blockquote>
    </div>
</section>

<!--seccion de principios-->
<section class="card" id="Principios">
    <!--Para crear contenedor de clase tarjeta-->
    <div class="card-header">
        <!--Para poner emcabezado a la tarjeta-->
        <h1>Principios</h1>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <!---Para escribir una cita textual del parrafo-->
            <ul>
                <!--Para crear lista desordenada-->
                <li>
                    <h3>Principio de integralidad</h3>

                    <p>
                        El Jard??n Fundaci??n Sue??os de Luz concibe la acci??n pedag??gica como un proceso
                        integral en ??l se abarca
                        todas las dimensiones del desarrollo del ni??o y la ni??a, la personal social, lo
                        espiritual, lo cognitivo,
                        lo comunicativo, lo corporal y lo art??stico, para potencializarlas y alcanzar
                        niveles de acciones y aprendizajes
                        significativos, necesarios para su desenvolvimiento en sociedad como un ser
                        humano digno, pleno, aut??nomo y libre.
                        Para lograr un desarrollo integral en los ni??os y ni??as es necesario, en los
                        primeros a??os de vida, contar con
                        una apropiada nutrici??n, atenci??n en salud, amor, estimulaci??n psicol??gica e
                        interacciones significativas con
                        sus padres y con otros adultos que ejercen alg??n tipo de influencia en su
                        proceso de crianza.
                    </p>

                    <p>
                        Es importante que las maestras en el jard??n infantil les motiven e inviten a
                        conocer un mundo, m??gico donde
                        ellos y ellas pueden explorar, experimentar, descubrir nuevas posibilidades de
                        aprendizajes por medio de juego
                        que es el eje dinamizador en los aprendizajes de los ni??os y ni??as en la primera
                        infancia, donde se les fortaleza
                        cada ??rea de desarrollo. Se lleva un hilo conductor en el trabajo pedag??gico con
                        ellos y ellas, potenciando sus
                        capacidades que les faciliten el aprendizaje y se vean reflejados en su
                        desarrollo integral como seres humanos
                        plenos, por tanto, se den orientar a la soluci??n de problemas abiertos,
                        sencillos y se van complejizando seg??n
                        las edades, caracter??sticas y ritmos de aprendizaje que tienen los ni??os y las
                        ni??as y van aprendiendo a resolver
                        situaciones en los contextos naturales relacionados con su mundo f??sico,
                        afectivo, cognitivo, social y cultural,
                        con una clara intencionalidad pedag??gica y did??ctica.
                    </p>
                </li>


                <li>
                    <h3>Principio de participaci??n</h3>

                    <p>
                        El jard??n infantil busca una intervenci??n activa, consciente y permanente de las
                        familias y el talento humano
                        que labora en el jard??n infantil con el objeto de garantizar a los ni??os y las
                        ni??as su desarrollo arm??nico e
                        integral y el ejercicio pleno de sus derechos. Se parte de reconocer que la
                        familia, cualquiera que sea su tipolog??a,
                        es el n??cleo primario en el cual los ni??os han iniciado sus procesos de
                        comunicaci??n, aprendizaje, socializaci??n
                        y participaci??n; al igual que ha sido el espacio en el que se han construido los
                        primeros v??nculos, relaciones
                        afectivas y significaciones hacia si mismo y hacia los otros.
                    </p>
                </li>

                <li>
                    <h3>Principio de la L??dica </h3>

                    <p>
                        Para el jard??n Fundaci??n Sue??os de Luz el principio de la l??dica se centra en el
                        juego como dinamizador de
                        la vida de los ni??os y de las ni??as mediante el cual constituye conocimientos,
                        se encuentra consigo mismo, con
                        el mundo f??sico y social, desarrolla iniciativas propias, comparte sus
                        intereses, desarrolla habilidades de
                        comunicaci??n, construye y se apropia de normas. Asimismo, reconoce que el gozo,
                        el entusiasmo, el placer de
                        crear, recrear y de generar significados deben construir el centro de toda
                        acci??n realizada por y para el ni??o
                        y ni??a, en sus entornos familiar, natural, social, ??tnico y cultural.
                    </p>

                </li>
            </ul>

        </blockquote>
    </div>
</section>

<!--seccion de objetivo general-->
<section class="card" id="Obj_G">
    <div class="card-header">
        <h1>Objetivo General</h1>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p>
                Fomentar en los ni??os y las ni??as el amor y el respeto en igualdad de condiciones a
                trav??s de diversas actividades
                l??dicas que conlleven al reconocimiento del yo y del otro como sujetos activos de
                derechos, de esta manera se
                garantizan ambientes propicios llenos de amor y respeto. As?? mismo se buscar??
                sensibilizar a las familias de la
                importancia durante el proceso de desarrollo integral de sus hijos e hijas.

            </p>


        </blockquote>
    </div>

</section>

<!--seccion de objetivos especificos-->
<section class="card" id="Obj_E">
    <div class="card-header">
        <h1>Objetivos Espec??ficos</h1>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <ul>
                <li>
                    <p>
                        Atender integralmente a los ni??os y a las ni??as articulando acciones
                        relacionadas con el cuidado calificado.
                    </p>
                </li>


                <li>
                    <p>
                        Brindar espacios adecuados y seguros, provistos de calidad en recursos humanos,
                        f??sicos y material did??ctico.
                    </p>
                </li>


                <li>
                    <p>
                        Crear ambientes enriquecidos que desarrollen en los ni??os y las ni??as su
                        creatividad e imaginaci??n.
                    </p>
                </li>


                <li>
                    <p>
                        Favorecer el desarrollo de la identidad de los ni??os y las ni??as, mediante el
                        buen trato que reconozca la
                        diversidad y sus diferencias de g??nero, sociales y culturales.
                    </p>
                </li>

                <li>
                    <p>
                        Garantizar la presencia del juego, el arte, la literatura y la exploraci??n del
                        medio como condici??n
                        indispensable para el potenciamiento del desarrollo de los ni??os y las ni??as.
                    </p>
                </li>

                <li>
                    <p>
                        Proporcionar con el buen ejemplo el cumplimiento de los derechos y los deberes
                        fundamentales que establecemos
                        en nuestro proyecto por medio del afecto, el respeto y la interacci??n a trav??s
                        de la l??dica.
                    </p>
                </li>
            </ul>

        </blockquote>
    </div>
</section>

<div>
    <!-- Redes Sociales -->
    <ul class="social-networks square spin-icon">
        <li><a href="https://twitter.com/pasitoapasoch" class="icon-twitter" target="_Blank" id="Tw">Twitter</a></li>
        <li><a href="https://www.facebook.com/ARCAsoft-110012580371484" class="icon-facebook" target="_Blank"
                id="Fc">Facebook</a></li>
        <li><a href="https://www.pinterest.es/pin/740701469936704769/" class="icon-pinterest" target="_Blank"
                id="Pt">Pinterest</a></li>
        <li><a href="https://www.instagram.com/origami_jardines/?hl=es-la" class="icon-instagram" target="_Blank"
                id="Ig">Instagram</a></li>
    </ul>
   
</div>
</div>

        <?php include "./views/modules/fondo_Form.php" ?>


    </section>

    <!-- scripts -->
    <?php include "./views/modules/script.php" ?>

</body>

</html>
