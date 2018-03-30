<?php
$title = "Destinos";

$section_styles = "
<link href='./public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css' rel='stylesheet'>
<link href='./public/plugins/jquery-datatable/extensions/select/css/select.bootstrap.css' rel='stylesheet'>
";

$content = "
<div class='block-header'>
    <h2>Listado de Destinos</h2>
</div>
<div class='row clearfix'>
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
        <div class='card'>
            <div class='header'>
                <h2>
                    Destinos
                </h2>
                <ul class='header-dropdown m-r--5'>
                    <li class='dropdown'>
                        <a href='javascript:void(0);' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>
                            <i class='material-icons'>more_vert</i>
                        </a>
                        <ul class='dropdown-menu pull-right'>
                            <li><a href='javascript:void(0);' id='btnAdd'>Agregar</a></li>
                            <li><a href='javascript:void(0);' id='btnUpdate'>Modificar</a></li>
                            <li><a href='javascript:void(0);' id='btnDelete'>Eliminar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class='body'>
                <table class='table table-bordered table-striped table-hover dataTable' id='tablaDestino'></table>
            </div>
        </div>
    </div>
</div>
";

$section_scripts = "
<script src='./public/plugins/jquery-datatable/jquery.dataTables.js'></script>
<script src='./public/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js'></script>
<script src='./public/plugins/jquery-datatable/extensions/select/js/dataTables.select.js'></script>
<script src='./public/js/jquery-datatable.config.js'></script>
<script src='./public/js/pages/destino/index.js'></script>
";
