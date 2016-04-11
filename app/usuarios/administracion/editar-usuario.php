<?php
	require_once "../../../assets/php/includes/comun.php";
?>
<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <!-- head -->
    <?php include_once('../../../assets/zlib/head.php'); ?>
    <!-- END head-->
    <body>
        <!-- Page Container -->
        <div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
            <!-- Side Overlay-->
            <?php include_once('../../../assets/zlib/sideContent.php'); ?>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <?php include_once('../../../assets/zlib/menu.php'); ?>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <?php include_once('../../../assets/zlib/headerNavigation.php'); ?>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <?php include_once('../../../assets/zlib/headerNavigationLeft.php'); ?>
                <!-- END Header Navigation Left -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Header -->
                <div class="content bg-gray-lighter">
                    <div class="row items-push">
                        <div class="col-sm-7">
                            <h1 class="page-heading">
                                Crear/Editar usuario<small></small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Administrar</li>
                                <li><a class="link-effect" href="./">Usuarios</a></li>
                                <li>Crear/Editar</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END Page Header -->

                <!-- Page Content -->
                <div class="content">
                    <div class="block">
                        <ul class="nav nav-tabs" data-toggle="tabs">
                            <li class="active">
                                <a href="#search-datos">Datos generales</a>
                            </li>
                            <li>
                                <a href="#search-escolaridad">Escolaridad</a>
                            </li>
                            <li>
                                <a href="#search-habilidades">Habilidades</a>
                            </li>
                            <li>
                                <a href="#search-certificaciones">Certificaciones</a>
                            </li>
                            <li>
                                <a href="#search-cursos">Cursos</a>
                            </li>
                            <li>
                                <a href="#search-exp">Experiencia profesional</a>
                            </li>
                            <li>
                                <a href="#search-areas">Áreas de experiencia</a>
                            </li>
                            <li class="pull-right">
                                <ul class="block-options push-10-t push-10-r">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="block-content tab-content bg-white">
                            <!-- Usuario generales -->
                            <div class="tab-pane fade fade-up in active" id="search-datos">
                                <div class="border-b push-30">
                                    <h2 class="push-10">5 <span class="h5 font-w400 text-muted">Usuarios encontrados</span></h2>
                                </div>
                    
                                <form id="frm_usuario_datos_generales" name="frm_usuario_datos_generales" class="js-validation-material form-horizontal push-10-t" action="" method="post">
                                    <fieldset>
                                        <legend>Datos generales</legend>
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="id_usuario" name="id_usuario" value="006">
                                                    <label for="val1">Numero de Usuario</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="usuario" name="usuario" value="">
                                                    <label for="val1">Usario</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="password" id="contrasenia" name="contrasenia" value="">
                                                    <label for="val1">Contraseña</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="nombre" name="nombre">
                                                    <label for="val4">Nombre</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="apellido_paterno" name="apellido_paterno">
                                                    <label for="val5">Apellido Paterno</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="apellido_materno" name="apellido_materno">
                                                    <label for="val6">Apellido Materno</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <label for="fdn">Fecha de nacimiento</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="dia_nacimiento" name="dia_nacimiento">
                                                        <option></option>
                                                        <option value="01">1</option>
                                                        <option value="02">2</option>
                                                        <option value="03">3</option>
                                                        <option value="04">4</option>
                                                        <option value="05">5</option>
                                                        <option value="06">6</option>
                                                        <option value="07">7</option>
                                                        <option value="08">8</option>
                                                        <option value="09">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                    <label for="dia">Día</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="mes_nacimiento" name="mes_nacimiento">
                                                        <option></option>
                                                        <option value="01">1</option>
                                                        <option value="02">2</option>
                                                        <option value="03">3</option>
                                                        <option value="04">4</option>
                                                        <option value="05">5</option>
                                                        <option value="06">6</option>
                                                        <option value="07">7</option>
                                                        <option value="08">8</option>
                                                        <option value="09">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                    <label for="mes">Mes</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="anio_nacimiento" name="anio_nacimiento">
                                                        <option></option>
                                                        <option value="2000">2000</option>
                                                        <option value="1999">1999</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1989">1989</option>
                                                    </select>
                                                    <label for="ona">Año</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="sexo" name="sexo">
                                                        <option></option>
                                                        <option value="f">Femenino</option>
                                                        <option value="m">Masculino</option>
                                                    </select>
                                                    <label for="sexo">Sexo</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="rfc" name="rfc">
                                                    <label for="rfc">RFC</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend>Datos laborales</legend>

                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="form-material form-material-primary floating">
                                                    <input class="form-control input-sm" type="text" id="numero_expediente" name="numero_expediente" value="---">
                                                    <label for="val2">No. Expediente</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-material form-material-primary floating">
                                                    <select class="form-control input-sm" id="id_area" name="id_area">
                                                        <option></option>
                                                        <option value="1">Organo Interno de Control</option>
                                                        <option value="2">Área de Auditoria Interna</option>
                                                        <option value="3">AADMGP</option>
                                                        <option value="4">AQyR</option>
                                                    </select>
                                                    <label for="val3">Área</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend>Datos escolaridad</legend>
                                    </fieldset>
                                    

                                    

                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="id_cargo" name="id_cargo">
                                                    <option></option>
                                                    <option value="1">Titular del OIC</option>
                                                    <option value="1">Apoyo administrativo</option>
                                                </select>
                                                <label for="val7">Cargo</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="id_nivel" name="id_nivel">
                                                    <option></option>
                                                    <option value="1">Presidente</option>
                                                    <option value="2">Vicepresidente</option>
                                                    <option value="3">Director general adjunto</option>
                                                    <option value="4">Director de área</option>
                                                    <option value="5">Subdirector de área</option>
                                                    <option value="6">Jefe de departamento</option>
                                                    <option value="7">Operativo</option>
                                                    <option value="8">Honorarios</option>
                                                </select>
                                                <label for="val8">Nivel</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="" id="codigo" name="codigo">
                                                <label for="val9">Cod</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="id_estatus" name="id_estatus">
                                                    <option></option>
                                                    <option value="1">Operativo</option>
                                                    <option value="2">SPC</option>
                                                    <option value="3">Nombramiento directo</option>
                                                </select>
                                                <label for="val10">Estatus</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="id_codigo_puesto" name="id_codigo_puesto">
                                                    <option></option>
                                                    <option value="1">i1</option>
                                                    <option value="2">i2</option>
                                                    <option value="3">i3</option>
                                                </select>
                                                <label for="codigopuesto">Codigo puesto</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="id_grado" name="id_grado">
                                                    <option></option>
                                                    <option value="1">Licenciado</option>
                                                    <option value="2">Maestro</option>
                                                    <option value="3">Doctor</option>
                                                </select>
                                                <label for="grado">Grado</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="" id="cod_nivel" name="cod_nivel">
                                                <label for="codnivel">Cod</label>
                                            </div>
                                        </div>
                                    </div>

<!--                                     <div class="form-group"> -->
<!--                                         <div class="col-sm-3"> -->
<!--                                             <div class="form-material form-material-primary floating"> -->
<!--                                                 <label for="fdn">Fecha de nacimiento</label> -->
<!--                                             </div> -->
<!--                                         </div> -->
<!--                                         <div class="col-sm-1"> -->
<!--                                             <div class="form-material form-material-primary floating"> -->
<!--                                                 <select class="form-control input-sm" id="dia_nacimiento" name="dia_nacimiento"> -->
<!--                                                     <option></option> -->
<!--                                                     <option value="e1">1</option> -->
<!--                                                     <option value="e2">2</option> -->
<!--                                                     <option value="e3">3</option> -->
<!--                                                     <option value="e4">4</option> -->
<!--                                                     <option value="e5">5</option> -->
<!--                                                     <option value="e6">6</option> -->
<!--                                                     <option value="e7">7</option> -->
<!--                                                     <option value="e8">8</option> -->
<!--                                                     <option value="e9">9</option> -->
<!--                                                     <option value="e10">10</option> -->
<!--                                                 </select> -->
<!--                                                 <label for="dia">Día</label> -->
<!--                                             </div> -->
<!--                                         </div> -->
<!--                                         <div class="col-sm-1"> -->
<!--                                             <div class="form-material form-material-primary floating"> -->
<!--                                                 <select class="form-control input-sm" id="mes_nacimiento" name="mes_nacimiento"> -->
<!--                                                     <option></option> -->
<!--                                                     <option value="f1">1</option> -->
<!--                                                     <option value="f2">2</option> -->
<!--                                                     <option value="f3">3</option> -->
<!--                                                     <option value="f4">4</option> -->
<!--                                                     <option value="f5">5</option> -->
<!--                                                     <option value="f6">6</option> -->
<!--                                                     <option value="f7">7</option> -->
<!--                                                     <option value="f8">8</option> -->
<!--                                                     <option value="f9">9</option> -->
<!--                                                     <option value="f10">10</option> -->
<!--                                                     <option value="f11">11</option> -->
<!--                                                     <option value="f12">12</option> -->
<!--                                                 </select> -->
<!--                                                 <label for="mes">Mes</label> -->
<!--                                             </div> -->
<!--                                         </div> -->
<!--                                         <div class="col-sm-2"> -->
<!--                                             <div class="form-material form-material-primary floating"> -->
<!--                                                 <select class="form-control input-sm" id="anio_nacimiento" name="anio_nacimiento"> -->
<!--                                                     <option></option> -->
<!--                                                     <option value="g1">2000</option> -->
<!--                                                     <option value="g2">1999</option> -->
<!--                                                     <option value="g3">1998</option> -->
<!--                                                     <option value="g4">1997</option> -->
<!--                                                     <option value="g5">1996</option> -->
<!--                                                     <option value="g6">1995</option> -->
<!--                                                     <option value="g7">1994</option> -->
<!--                                                     <option value="g8">1993</option> -->
<!--                                                     <option value="g9">1992</option> -->
<!--                                                     <option value="g10">1991</option> -->
<!--                                                     <option value="g11">1990</option> -->
<!--                                                     <option value="g12">1989</option> -->
<!--                                                 </select> -->
<!--                                                 <label for="ona">Año</label> -->
<!--                                             </div> -->
<!--                                         </div> -->
<!--                                         <div class="col-sm-2"> -->
<!--                                             <div class="form-material form-material-primary floating"> -->
<!--                                                 <select class="form-control input-sm" id="sexo" name="sexo"> -->
<!--                                                     <option></option> -->
<!--                                                     <option value="c1">Femenino</option> -->
<!--                                                     <option value="c2">Masculino</option> -->
<!--                                                 </select> -->
<!--                                                 <label for="sexo">Sexo</label> -->
<!--                                             </div> -->
<!--                                         </div> -->
<!--                                         <div class="col-sm-3"> -->
<!--                                             <div class="form-material form-material-primary floating"> -->
<!--                                                 <input class="form-control input-sm" type="text" id="rfc" name="rfc"> -->
<!--                                                 <label for="rfc">RFC</label> -->
<!--                                             </div> -->
<!--                                         </div> -->
<!--                                     </div> -->

                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="curp" name="curp">
                                                <label for="curp">CURP</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="lugar_nacimiento" name="lugar_nacimiento">
                                                <label for="lugar">Lugar de nacimiento</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="id_nacionalidad" name="id_nacionalidad">
                                                    <option></option>
                                                    <option value="1">Mexicano</option>
                                                    <option value="2">Candiense</option>
                                                </select>
                                                <label for="nacionalidad">Nacionalidad</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="iniciales" name="iniciales">
                                                <label for="ini">Iniciales</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="correo_cnbv" name="correo_cnbv">
                                                <label for="ccnbv">Correo electronico CNBV</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="correo_personal" name="correo_personal">
                                                <label for="cpersonal">Correo electronico personal</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="telefono_celular" name="telefono_celular">
                                                <label for="celular">Celular</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="telefono_fijo" name="telefono_fijo">
                                                <label for="tel">Teléfono</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="direccion" name="direccion">
                                                <label for="dir">Dirección</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="extencion" name="extencion">
                                                <label for="ext">Extención</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="torre" name="torre">
                                                <label for="torre">Torre</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="piso" name="piso">
                                                <label for="piso">Piso</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="coordenada" name="coordenada">
                                                <label for="coo">Coordenada</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="cedula" name="cedula">
                                                <label for="ced">Cedula</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-5">
                                            <label class="col-sm-12" for="example-file-input">Curriculum</label>
                                            <div class="col-sm-12">
                                                <input type="file" id="input-file-curriculum" name="input-file-curriculum">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <label class="col-sm-12" for="example-file-input">Perfil de puesto</label>
                                            <div class="col-sm-12">
                                                <input type="file" id="example-file-perfil" name="input-file-perfil">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="id_estado_civil" name="id_estado_civil">
                                                    <option></option>
                                                    <option value="1">Casado(a)</option>
                                                    <option value="2">Soltero(a)</option>
                                                    <option value="3">Viudo(a)</option>
                                                    <option value="4">Divorciado(a)</option>
                                                    <option value="5">Union libre</option>
                                                </select>
                                                <label for="civil">Estado civil</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="desempenio" name="desempenio">
                                                <label for="des">Desempeño</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <label class="col-sm-12" for="example-file-input">Documento del desempeño</label>
                                            <div class="col-sm-12">
                                                <input type="file" id="input-file-desempenio" name="input-file-desempenio">
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <label class="col-sm-12" for="example-file-input">Fotografía</label>
                                            <div class="col-sm-12">
                                                <input type="file" id="input-file-fotografia" name="input-file-fotografia">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                        	<input type="hidden" id="accion" name="accion" value="guardar">
                                        	<input type="hidden" id="id" name="id" value="0">
                                            <button type="button" id="btn_guardar_datos_generales" name="btn_guardar_datos_generales" class="btn btn-sm btn-primary">Guardar</button>
                                            <button type="reset" class="btn btn-sm btn-default">Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End Usuario generales -->
                            <!-- Escolaridad -->
                            <div class="tab-pane fade fade-up" id="search-escolaridad">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar escolaridad</h3>
                                    </div>
                                    <div class="block-content">
                                        <form id="frm_usuario_escolaridad" name="frm_usuario_escolaridad" class="form-horizontal push-10-t" action="" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="id_institucion" name="id_institucion">
                                                            <option></option>
                                                            <option value="1">UNAM</option>
                                                            <option value="2">IPN</option>
                                                            <option value="3">UAM</option>
                                                        </select>
                                                        <label for="institucion">Institución</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="id_titulo_escolaridad" name="id_titulo_escolaridad">
                                                            <option></option>
                                                            <option value="1">Doctorado en XXXXX</option>
                                                            <option value="2">Maestría en XXXXX</option>
                                                            <option value="3">Licenciatura en XXXXX</option>
                                                        </select>
                                                        <label for="titulo">Título</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Desde</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="dia_desde" name="dia_desde">
                                                            <option></option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                        <label for="dia">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="mes_desde" name="mes_desde">
                                                            <option></option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        <label for="mes">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="anio_desde" name="anio_desde">
                                                            <option></option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1089">1989</option>
                                                        </select>
                                                        <label for="ona">Año</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Hasta</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="dia_hasta" name="dia_hasta">
                                                            <option></option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                        <label for="dia">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="mes_hasta" name="mes_hasta">
                                                            <option></option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        <label for="mes">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="anio_hasta" name="anio_hasta">
                                                            <option></option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1089">1989</option>
                                                        </select>
                                                        <label for="ona">Año</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="id_anios" name="id_anios">
                                                            <option></option>
                                                            <option value="1">10</option>
                                                            <option value="2">9</option>
                                                            <option value="3">8</option>
                                                            <option value="4">7</option>
                                                            <option value="5">6</option>
                                                            <option value="6">5</option>
                                                            <option value="7">4</option>
                                                            <option value="8">3</option>
                                                            <option value="9">2</option>
                                                            <option value="10">1</option>
                                                        </select>
                                                        <label for="val10">Años</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="id_documento_obtenido" name="id_documento_obtenido">
                                                            <option></option>
                                                            <option value="1">Título</option>
                                                            <option value="2">Cédula</option>
                                                            <option value="3">Otro</option>
                                                        </select>
                                                        <label for="doc">Documento obtenido</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="id_estatus_escolaridad" name="id_estatus_escolaridad">
                                                            <option></option>
                                                            <option value="1">Terminado</option>
                                                            <option value="2">En curso</option>
                                                            <option value="3">Otro</option>
                                                        </select>
                                                        <label for="estatus">Estatus</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                	<input type="hidden" id="accion" name="accion" value="guardar">
                                                	<input type="hidden" id="id_u_e" name="id_u_e" value="0">
                                                	<input type="hidden" id="id_e" name="id_e" value="0">
                                                    <button type="button" id="btn_guardar_escolaridad" name="btn_guardar_escolaridad" class="btn btn-sm btn-primary">Guardar</button>
                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <!-- End Agregar -->
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Institución</th>
                                                <th class="text-left">Título</th>
                                                <th class="text-center">Desde</th>
                                                <th class="text-center">Hasta</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Años en la carrera">Años</th>
                                                <th class="text-left" data-toggle="tooltip" data-placement="top" title="Documento obtenido">Documento</th>
                                                <th class="text-center">Estatus</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="text-left">UNAM</td>
                                                <td class="text-left">Doctorado en XXXXX</td>
                                                <td class="text-center">12/12/2005</td>
                                                <td class="text-center">12/12/2008</td>
                                                <td class="text-center">3</td>
                                                <td class="text-left">Título</td>
                                                <td class="text-center">Terminado</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td class="text-left">UNAM</td>
                                                <td class="text-left">Maestría en XXXXX</td>
                                                <td class="text-center">12/12/2003</td>
                                                <td class="text-center">12/12/2005</td>
                                                <td class="text-center">2</td>
                                                <td class="text-left">Título</td>
                                                <td class="text-left">Terminado</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Lista -->
                            </div>
                            <!-- End Escolaridad -->
                            <!-- Habilidades -->
                            <div class="tab-pane fade fade-up" id="search-habilidades">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar habilidad</h3>
                                    </div>
                                    <div class="block-content">
                                        <form id="frm_usuario_habilidad" name="frm_usuario_habilidad" class="form-horizontal push-10-t" action="" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="habilidad_1" name="habilidad_1">
                                                        <label for="hab1">Habilidad</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="habilidad_2" name="habilidad_2">
                                                            <option></option>
                                                            <option value="1">Conocimiento de las regulaciones estatales y federales</option>
                                                            <option value="2">Administración de información</option>
                                                            <option value="3">Políticas y planeamiento</option>
                                                        </select>
                                                        <label for="hab2">Habilidad</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-3">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="id_nivel" name="id_nivel">
                                                            <option></option>
                                                            <option value="1">Básico</option>
                                                            <option value="2">Intermedio</option>
                                                            <option value="3">Experto</option>
                                                        </select>
                                                        <label for="nivel1">Nivel</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="id_anios" name="id_anios">
                                                            <option></option>
                                                            <option value="1">10</option>
                                                            <option value="2">9</option>
                                                            <option value="3">8</option>
                                                            <option value="4">7</option>
                                                            <option value="5">6</option>
                                                            <option value="6">5</option>
                                                            <option value="7">4</option>
                                                            <option value="8">3</option>
                                                            <option value="9">2</option>
                                                            <option value="10">1</option>
                                                        </select>
                                                        <label for="val10">Años</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                	<input type="hidden" id="accion" name="accion" value="guardar">
                                                	<input type="hidden" id="id_u_h" name="id_u_h" value="0">
                                                	<input type="hidden" id="id_h" name="id_h" value="0">
                                                    <button type="button" id="btn_guardar_habilidad" name="btn_guardar_habilidad" class="btn btn-sm btn-primary">Guardar</button>
                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <!-- End Agregar -->
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Habilidad</th>
                                                <th class="text-center">Nivel</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Años de experiencia">Años</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-left">Conocimiento de las regulaciones estatales y federales</td>
                                                <td class="text-center">Básico</td>
                                                <td class="text-center">3</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td class="text-left">Administración de información</td>
                                                <td class="text-center">Intermedio</td>
                                                <td class="text-center">5</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Lista -->
                            </div>
                            <!-- End Habilidades -->
                            <!-- Certificaciones -->
                            <div class="tab-pane fade fade-up" id="search-certificaciones">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar certificación</h3>
                                    </div>
                                    <div class="block-content">
                                        <form id="frm_usuario_certificacion" name="frm_usuario_certificacion" class="form-horizontal push-10-t" action="#" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="certificacion_1" name="certificacion_1">
                                                        <label for="cer1">Certificación</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-5">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="certificacion_2" name="certificacion_2">
                                                            <option></option>
                                                            <option value="1">ITIL</option>
                                                            <option value="2">COBIT 5</option>
                                                        </select>
                                                        <label for="cer2">Certificación</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="id_anio" name="id_anio">
                                                            <option></option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                        </select>
                                                        <label for="val10">Año</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                	<input type="hidden" id="accion" name="accion" value="guardar">
                                                	<input type="hidden" id="id_u_c" name="id_u_c" value="0">
                                                	<input type="hidden" id="id_c" name="id_c" value="0">
                                                    <button type="button" id="btn_guardar_certificacion" name="btn_guardar_certificacion" class="btn btn-sm btn-primary">Guardar</button>
                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <!-- End Agregar -->
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Certificación</th>
                                                <th class="text-center" data-toggle="tooltip" data-placement="top" title="Años de certificación">Año</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-left">ITIL</td>
                                                <td class="text-center">2010</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="text-left">COBYT 5</td>
                                                <td class="text-center">2014</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Lista -->
                            </div>
                            <!-- End Certificaciones -->
                            <!-- Cursos -->
                            <div class="tab-pane fade fade-up" id="search-cursos">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar curso</h3>
                                    </div>
                                    <div class="block-content">
                                        <form id="frm_usuario_curso" name="frm_usuario_curso" class="form-horizontal push-10-t" action="#" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="curso" name="curso">
                                                        <label for="cur1">Curso</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="id_curso" name="id_curso">
                                                            <option></option>
                                                            <option value="1">Curso en XXXXXXXX</option>
                                                            <option value="2">Curso en XXXXXXXX</option>
                                                        </select>
                                                        <label for="cur2">Curso</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Inicio</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="dia_desde" name="dia_desde">
                                                            <option></option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                        <label for="dia1">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="mes_desde" name="mes_desde">
                                                            <option></option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="0f5">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        <label for="mes1">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="anio_desde" name="anio_desde">
                                                            <option></option>
                                                            <option value="01">2000</option>
                                                            <option value="02">1999</option>
                                                            <option value="03">1998</option>
                                                            <option value="04">1997</option>
                                                            <option value="05">1996</option>
                                                            <option value="06">1995</option>
                                                            <option value="07">1994</option>
                                                            <option value="08">1993</option>
                                                            <option value="09">1992</option>
                                                            <option value="10">1991</option>
                                                            <option value="11">1990</option>
                                                            <option value="12">1989</option>
                                                        </select>
                                                        <label for="ona1">Año</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Fin</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="dia_hasta" name="dia_hasta">
                                                            <option></option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                        <label for="dia2">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="mes_hasta" name="mes_hasta">
                                                            <option></option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        <label for="mes2">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="anio_hasta" name="anio_hasta">
                                                            <option></option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                        </select>
                                                        <label for="ona2">Año</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="duracion_horas" name="duracion_horas">
                                                            <option></option>
                                                            <option value="120">120</option>
                                                            <option value="100">100</option>
                                                            <option value="80">80</option>
                                                            <option value="60">60</option>
                                                            <option value="40">40</option>
                                                            <option value="20">20</option>
                                                            <option value="10">10</option>
                                                        </select>
                                                        <label for="duracion1">Duración (Horas)</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-10">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="id_institucion" name="id_institucion">
                                                            <option></option>
                                                            <option value="1">Institución XXXXXXXX</option>
                                                            <option value="2">Institución XXXXXXXX</option>
                                                            <option value="3">Institución XXXXXXXX</option>
                                                        </select>
                                                        <label for="imparte">Institución que imparte el curso</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                	<input type="hidden" id="accion" name="accion" value="guardar">
                                                	<input type="hidden" id="id_u_cu" name="id_u_cu" value="0">
                                                	<input type="hidden" id="id_cu" name="id_cu" value="0">
                                                    <button type="button" id="btn_guardar_curso" name="btn_guardar_curso" class="btn btn-sm btn-primary"">Guardar</button>
                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <!-- End Agregar -->
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Curso</th>
                                                <th class="text-center">Inicio</th>
                                                <th class="text-center">Fin</th>
                                                <th class="text-center">Duración</th>
                                                <th class="text-left">Institución</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-left">Curso en XXXXXXXX</td>
                                                <td class="text-center">12-12-2012</td>
                                                <td class="text-center">12-12-2012</td>
                                                <td class="text-center">30 Hrs</td>
                                                <td class="text-left">Institución XXXXXXXX</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="text-left">Curso en XXXXXXXX</td>
                                                <td class="text-center">12-12-2012</td>
                                                <td class="text-center">12-12-2012</td>
                                                <td class="text-center">30 Hrs</td>
                                                <td class="text-left">Institución XXXXXXXX</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Lista -->
                            </div>
                            <!-- End Cursos -->
                            <!-- Experiencia profesional -->
                            <div class="tab-pane fade fade-up" id="search-exp">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar experiencia profesional</h3>
                                    </div>
                                    <div class="block-content">
                                        <form id="frm_usuario_experiencia_profesional" name="frm_usuario_experiencia_profesional" class="form-horizontal push-10-t" action="#" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="empresa" name="empresa">
                                                        <label for="empresa">Empresa</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="giro" name="giro">
                                                        <label for="giro">Giro</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <input class="form-control input-sm" type="text" id="puesto" name="puesto">
                                                        <label for="puesto">Puesto</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Desde</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="dia_desde" name="dia_desde">
                                                            <option></option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="010">10</option>
                                                        </select>
                                                        <label for="dia">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="mes_desde" name="mes_desde">
                                                            <option></option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="010">10</option>
                                                            <option value="011">11</option>
                                                            <option value="012">12</option>
                                                        </select>
                                                        <label for="mes">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="anio_desde" name="anio_desde">
                                                            <option></option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                        </select>
                                                        <label for="ona">Año</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <label for="fdn">Hasta</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="dia_hasta" name="dia_hasta">
                                                            <option></option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="010">10</option>
                                                        </select>
                                                        <label for="dia">Día</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="mes_hasta" name="mes_hasta">
                                                            <option></option>
                                                            <option value="01">1</option>
                                                            <option value="02">2</option>
                                                            <option value="03">3</option>
                                                            <option value="04">4</option>
                                                            <option value="05">5</option>
                                                            <option value="06">6</option>
                                                            <option value="07">7</option>
                                                            <option value="08">8</option>
                                                            <option value="09">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                        <label for="mes">Mes</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="anio_hasta" name="anio_hasta">
                                                            <option></option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                        </select>
                                                        <label for="ona">Año</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="form-material form-material-primary floating">
                                                        <textarea class="form-control input-sm" id="actividades" name="actividades" rows="6"></textarea>
                                                        <label for="actividades">Actividades</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                	<input type="hidden" id="accion" name="accion" value="guardar">
                                                	<input type="hidden" id="id_u_e_p" name="id_u_e_p" value="0">
                                                	<input type="hidden" id="id_e_p" name="id_e_p" value="0">
                                                    <button type="button" id="btn_guardar_experiencia_profesional" name="btn_guardar_experiencia_profesional" class="btn btn-sm btn-primary">Guardar</button>
                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- End Agregar -->
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Empresa</th>
                                                <th class="text-left">Giro</th>
                                                <th class="text-left">Puesto</th>
                                                <th class="text-center">Desde</th>
                                                <th class="text-center">Hasta</th>
                                                <th class="text-left">Actividades</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-left">Empresa XXXXXXXX</td>
                                                <td class="text-left">Giro</td>
                                                <td class="text-left">Puesto</td>
                                                <td class="text-center">12-12-2012</td>
                                                <td class="text-center">12-12-2015</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="text-left">Empresa XXXXXXXX</td>
                                                <td class="text-left">Giro</td>
                                                <td class="text-left">Puesto</td>
                                                <td class="text-center">12-12-2010</td>
                                                <td class="text-center">12-12-2012</td>
                                                <td class="text-left">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Lista -->
                            </div>
                            <!-- End Experiencia profesional -->
                            <!-- Áreas de experiencia -->
                            <div class="tab-pane fade fade-up" id="search-areas">
                                <!-- Agregar -->
                                <div class="block block-themed block-opt-hidden">
                                    <div class="block-header bg-primary">
                                        <ul class="block-options">
                                            <li>
                                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                            </li>
                                        </ul>
                                        <h3 class="block-title">Agregar área de experiencia</h3>
                                    </div>
                                    <div class="block-content">
                                        <form id="frm_usuario_area_experiencia" name="frm_usuario_area_experiencia" class="form-horizontal push-10-t" action="#" method="post">

                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="id_area" name="id_area">
                                                            <option></option>
                                                            <option value="1">Administrativos</option>
                                                        </select>
                                                        <label for="area1">Área</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="id_subarea" name="id_subarea">
                                                            <option></option>
                                                            <option value="1">Administración de oficina</option>
                                                            <option value="2">Administración de riesgo</option>
                                                            <option value="3">Administración de seguros y fianzas</option>
                                                            <option value="4">Administración General</option>
                                                        </select>
                                                        <label for="subarea1">Subárea</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-material form-material-primary floating">
                                                        <select class="form-control input-sm" id="id_tiempo" name="id_tiempo">
                                                            <option></option>
                                                            <option value="1">Menos de 1 año</option>
                                                            <option value="2">De 1 a 3 años</option>
                                                            <option value="3">De 4 a 5 años</option>
                                                            <option value="4">De 6 a 8 años</option>
                                                            <option value="5">De 9 a 15 años</option>
                                                            <option value="6">Más de 15 años</option>
                                                        </select>
                                                        <label for="tiempo1">Tiempo</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-xs-12">
                                                	<input type="hidden" id="accion" name="accion" value="guardar">
                                                	<input type="hidden" id="id_u_a_e" name="id_u_a_e" value="0">
                                                	<input type="hidden" id="id_a_e" name="id_a_e" value="0">
                                                    <button type="button" id="btn_guardar_area_experiencia" name="btn_guardar_area_experiencia" class="btn btn-sm btn-primary">Guardar</button>
                                                    <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <!-- End Agregar -->
                                <div class="row">&nbsp;</div>
                                <!-- Lista -->
                                <div class="table-responsive">
                                    <div class="border-b push-30">
                                        <h2 class="push-10">2 <span class="h5 font-w400 text-muted">Elementos encontrados</span></h2>
                                    </div>
                                    <table class="table table-striped table-vcenter table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-left">Área</th>
                                                <th class="text-left">Subárea</th>
                                                <th class="text-left">Tiempo</th>
                                                <th class="text-center">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-left">Administrativos</td>
                                                <td class="text-left">Administración de oficina</td>
                                                <td class="text-left">De 1 a 3 años</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center">2</td>
                                                <td class="text-left">Administrativos</td>
                                                <td class="text-left">Administración de riesgo</td>
                                                <td class="text-left">De 4 a 5 años</td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <a class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="#">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <button class="btn btn-danger btn-xs" type="button" data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                            <i class="fa fa-times"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- End Lista -->
                            </div>
                            <!-- End Certificaciones -->
                        </div>
                    </div>

                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <?php include_once('../../../assets/zlib/footer.php'); ?>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
        <?php include_once('../../../assets/zlib/oneuiCore.php'); ?>
        <!-- END OneUI Core -->

        <!-- Page JS Plugins -->
        <script src="../../../assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <script src="../../../assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- Page JS Code -->
        <script src="../../../assets/js/pages/base_forms_wizard.js"></script>

        <!-- Page JS Code -->
        <script src="../../../assets/js/pages/base_forms_validation.js"></script>

        <!-- Page JS Plugins -->
        <script src="../../../assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="../../../assets/js/plugins/bootstrap-datetimepicker/moment.min.js"></script>
        <script src="../../../assets/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="../../../assets/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="../../../assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="../../../assets/js/plugins/select2/select2.full.min.js"></script>
        <script src="../../../assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
        <script src="../../../assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="../../../assets/js/plugins/dropzonejs/dropzone.min.js"></script>
        <script src="../../../assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
        
        <script src="../../../assets/js/cnbv-editar-usuario.js"></script>

        <!-- Page JS Code -->
        <script>
            $(function () {
                // Init page helpers (BS Datepicker + BS Datetimepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins)
                App.initHelpers(['datepicker', 'datetimepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']);
            });

            $('.mp10').addClass('active');
        </script>
    </body>
</html>