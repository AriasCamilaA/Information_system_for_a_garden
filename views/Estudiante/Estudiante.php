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
        <title>Gestionar Estudiante</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600'
            rel='stylesheet'
            type='text/css'>
        <link
            href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"
            rel="stylesheet">
        <link
            rel='stylesheet'
            href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
        <link
            rel='stylesheet'
            href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'>
        <link
            rel="stylesheet"
            href="<?php echo SERVERURL; ?>assets/css/menu_Lateral.css">
        <link rel="stylesheet" href="<?php echo SERVERURL; ?>assets/css/main.css">
    </head>

    <body>

        <?php include "./views/modules/cargador.php" ?>
        <!-- side-bar -->
        <?php include "./views/modules/navlateral.php" ?>

        <!-- content-page -->

        <section class="full-box dashboard-contentPage">

            <!-- nav-bar -->
            <?php include "./views/modules/navbar.php" ?>

            <div class="container">
                <!-- content-page -->

                <form
                    action="?c=Estudiante&a=guardar_Estudiante"
                    method="post"
                    class="FormularioAjax"
                    data-form="save"
                    autocomplete="off"
                    enctype="multipart/form-data">

                    <!--Par?? crear un contenedor adaptable con los estilos de bootstrap-->

                    <div>
                        <h1 class="page-header tituloa" style="margin-top:20px">
                            <?php echo $alm->id_Usuario != null ? $alm->nombre_Usuario : 'Nuevo Estudiante'; ?>
                        </h1>

                        <!--Par?? establecer t??tulo principal -->
                    </div>
                    <!--para crear contenedor-->
                    <input type="hidden" name="id_Usuario" value="<?php echo $alm->id_Usuario; ?>"/>
                    <!--Par?? mostrar una l??nea horizontal en el documento-->
                    <div class="form-group">

                    <label id="Label4" runat="server" text="Label">Nombre del Usuario:</label>
                    <!--Par?? dar nombre al campo de texto -->

                    <input
                        name="user_Usuario"
                        id="TextBox4"
                        runat="server"
                        class="form-control"
                        type="email"
                        placeholder="Ingrese correo electronico ej: nombre@micorreo.com"
                        value="<?php echo $alm->user_Usuario; ?>"
                        required="required"/>
                    <!--Par?? crear un campo de texto -->

                    </div>


                    <div class="form-group">

                        <label id="Label4" runat="server" text="Label">Nombre del Estudiante:</label>
                        <!--Par?? dar nombre al campo de texto -->

                        <input
                            name="nombre_Usuario"
                            id="TextBox4"
                            runat="server"
                            class="form-control"
                            type="text"
                            placeholder="Ingrese Nombre"
                            value="<?php echo $alm->nombre_Usuario; ?>"
                            required="required"
                            pattern="[a-zA-Z???? ]{1,20}"
                            title="ingrese solo letras"/>
                        <!--Par?? crear un campo de texto -->

                    </div>

                    <div class="form-group">

                        <label id="Label5" runat="server" text="Label">Apellido del Estudiante:</label>
                        <!--Par?? dar nombre al campo de texto -->

                        <input
                            name="apellido_Usuario"
                            id="TextBox5"
                            runat="server"
                            class="form-control"
                            type="text"
                            placeholder="Ingrese Apellido"
                            value="<?php echo $alm->apellido_Usuario; ?>"
                            required="required"
                            pattern="[a-zA-Z???? ]{1,20}"
                            title="ingrese solo letras"/>
                        <!--Par?? crear un campo de texto -->

                    </div>
                    <div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Tipo de Documento</label>
                            </div>
                            <select
                                class="custom-select selects"
                                id="inputGroupSelect01"
                                style="background-color: #ffffff00;"
                                name="tipoDoc_Usuario"
                                required="required">
                                <option selected="selected" value="<?php echo $alm->tipoDoc_Usuario; ?>">
                                    <?php echo $alm->id_Usuario != null ? $alm->tipoDoc_Usuario : '--Seleccione el tipo--'; ?>
                                    </option>
                                <option value="C.C:">C??dula de Ciudadania</option>
                                <option value="T.I.">Tarjeta de Identidad</option>
                                <option value="R.C.">Registro Civil</option>
                                <option value="C.E.">C??dula de Extranjer??a</option>
                                <option value="Otro">Otro</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">

                        <label id="Label6" runat="server" text="Label">Documento Administrador:</label>
                        <!--Par?? dar nombre al campo de texto -->

                        <input
                            name="doc_Usuario"
                            id="TextBox6"
                            runat="server"
                            class="form-control"
                            type="text"
                            placeholder="Ingrese Documento"
                            value="<?php echo $alm->doc_Usuario; ?>"
                            required="required"
                            pattern="[0-9]{1,20}"
                            title="ingrese solo numeros"/>
                        <!--Par?? crear un campo de texto -->

                    </div>

                    <div class="form-group">
                        <div>
                            <!--Para crear contenedor-->
                            <label>Ingrese Contrase??a</label>
                            <!--Par?? dar nombre al campo de texto -->
                            <input
                                name="password_Usuario"
                                class="form-control"
                                type="password"
                                placeholder="Ingrese Contrase??a"
                                value="<?php echo $alm->password_Usuario; ?>"
                                required="required"/>
                            <!--Par?? crear un campo de texto -->
                        </div>
                    </div>

                    <div class="form-group" id="botones">
                        <!--Par?? mostrar una l??nea horizontal en el documento-->
                        <input
                            type="submit"
                            value="Guardar"
                            id="Guardar"
                            class="boton btn btn-info"
                            onclick="javascript:return confirm('??Desea guardar el registro?');
                                "/>
                        <!--Par?? crear un contenedor adaptable con los estilos de bootstrap-->

                    </div>

                </form>
            </div>

            <?php include "./views/modules/fondo_Form.php" ?>

        </section>

        <!-- scripts -->
        <?php include "./views/modules/script.php" ?>

    </body>

</html>