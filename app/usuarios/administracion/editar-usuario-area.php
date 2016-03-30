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
                                Crear/Editar usuario de área<small></small>
                            </h1>
                        </div>
                        <div class="col-sm-5 text-right hidden-xs">
                            <ol class="breadcrumb push-10-t">
                                <li>Administrar</li>
                                <li><a class="link-effect" href="./">Usuarios</a></li>
                                <li>Crear/Editar usuario de área</li>
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
                            <li class="pull-right">
                                <ul class="block-options push-10-t push-10-r">
                                    <li>
                                        <button type="button" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="block-content tab-content bg-white">
                            <!-- Datos generales -->
                            <div class="tab-pane fade fade-up in active" id="search-datos">
                                <div class="border-b push-30">
                                    <h2 class="push-10">5 <span class="h5 font-w400 text-muted">Usuarios encontrados</span></h2>
                                </div>
                    
                                <form class="js-validation-material form-horizontal push-10-t" action="#" method="post">

                                    <div class="form-group">
                                        <div class="col-sm-1">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="val1" name="val1">
                                                <label for="val1">#</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="entidad" name="entidad">
                                                <label for="entidad">Entidad</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="val2" name="val2">
                                                <label for="val2">No. Expediente</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="val3" name="val3">
                                                    <option></option>
                                                    <option value="oic">Organo Interno de Control</option>
                                                    <option value="aai">Área de Auditoria Interna</option>
                                                    <option value="aadmgp">AADMGP</option>
                                                    <option value="aqyr">AQyR</option>
                                                </select>
                                                <label for="val3">Área</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="val4" name="val4">
                                                <label for="val4">Nombre</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="val5" name="val5">
                                                <label for="val5">Apellido Paterno</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="val6" name="val6">
                                                <label for="val6">Apellido Materno</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="val7" name="val7">
                                                    <option></option>
                                                    <option selected value="toic">Titular del OIC</option>
                                                    <option value="ad">Apoyo administrativo</option>
                                                </select>
                                                <label for="val7">Cargo</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="val8" name="val8">
                                                    <option></option>
                                                    <option value="a1">Presidente</option>
                                                    <option selected value="a2">Vicepresidente</option>
                                                    <option value="a3">Director general adjunto</option>
                                                    <option value="a4">Director de área</option>
                                                    <option value="a5">Subdirector de área</option>
                                                    <option value="a6">Jefe de departamento</option>
                                                    <option value="a7">Operativo</option>
                                                    <option value="a8">Honorarios</option>
                                                </select>
                                                <label for="val8">Nivel</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="NA1" id="val9" name="val9">
                                                <label for="val9">Cod</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="nivel" name="nivel">
                                                    <option></option>
                                                    <option selected value="b1">Licenciado</option>
                                                    <option value="b2">Maestro</option>
                                                    <option value="b3">Doctor</option>
                                                </select>
                                                <label for="nivel">Grado</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" value="Lic" id="codnivel" name="codnivel">
                                                <label for="codnivel">Cod</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <label for="fdn">Fecha de nacimiento</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="dia" name="dia">
                                                    <option></option>
                                                    <option value="e1">1</option>
                                                    <option value="e2">2</option>
                                                    <option value="e3">3</option>
                                                    <option value="e4">4</option>
                                                    <option value="e5">5</option>
                                                    <option value="e6">6</option>
                                                    <option value="e7">7</option>
                                                    <option value="e8">8</option>
                                                    <option value="e9">9</option>
                                                    <option value="e10">10</option>
                                                </select>
                                                <label for="dia">Día</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="mes" name="mes">
                                                    <option></option>
                                                    <option value="f1">1</option>
                                                    <option value="f2">2</option>
                                                    <option value="f3">3</option>
                                                    <option value="f4">4</option>
                                                    <option value="f5">5</option>
                                                    <option value="f6">6</option>
                                                    <option value="f7">7</option>
                                                    <option value="f8">8</option>
                                                    <option value="f9">9</option>
                                                    <option value="f10">10</option>
                                                    <option value="f11">11</option>
                                                    <option value="f12">12</option>
                                                </select>
                                                <label for="mes">Mes</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="ona" name="ona">
                                                    <option></option>
                                                    <option value="g1">2000</option>
                                                    <option value="g2">1999</option>
                                                    <option value="g3">1998</option>
                                                    <option value="g4">1997</option>
                                                    <option value="g5">1996</option>
                                                    <option value="g6">1995</option>
                                                    <option value="g7">1994</option>
                                                    <option value="g8">1993</option>
                                                    <option value="g9">1992</option>
                                                    <option value="g10">1991</option>
                                                    <option value="g11">1990</option>
                                                    <option value="g12">1989</option>
                                                </select>
                                                <label for="ona">Año</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="sexo" name="sexo">
                                                    <option></option>
                                                    <option value="c1">Femenino</option>
                                                    <option value="c2">Masculino</option>
                                                </select>
                                                <label for="sexo">Sexo</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="rfc" name="rfc">
                                                <label for="rfc">RFC</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="curp" name="curp">
                                                <label for="curp">CURP</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="lugar" name="lugar">
                                                <label for="lugar">Lugar de nacimiento</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <select class="form-control input-sm" id="nacionalidad" name="nacionalidad">
                                                    <option></option>
                                                    <option value="mex">Mexicano</option>
                                                    <option value="can">Candiense</option>
                                                </select>
                                                <label for="nacionalidad">Nacionalidad</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="ccnbv" name="ccnbv">
                                                <label for="ccnbv">Correo electronico CNBV</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="ext" name="ext">
                                                <label for="ext">Extención</label>
                                            </div>
                                        </div>
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
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-2">
                                            <div class="form-material form-material-primary floating">
                                                <input class="form-control input-sm" type="text" id="coo" name="coo">
                                                <label for="coo">Coordenada</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <label class="col-sm-12" for="example-file-input">Fotografía</label>
                                            <div class="col-sm-12">
                                                <input type="file" id="example-file-input" name="example-file-input">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <button class="btn btn-sm btn-primary" type="submit">Guardar</button>
                                            <button class="btn btn-sm btn-default" type="reset">Cancelar</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <!-- End Datos generales -->
                        </div>
                    </div>

                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <?php include_once('footer.php'); ?>
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