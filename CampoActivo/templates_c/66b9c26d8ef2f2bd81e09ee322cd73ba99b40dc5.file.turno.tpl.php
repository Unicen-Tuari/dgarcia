<?php /* Smarty version Smarty-3.1.14, created on 2014-11-23 01:44:39
         compiled from ".\templates\turno.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148845470e111c00945-18054647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66b9c26d8ef2f2bd81e09ee322cd73ba99b40dc5' => 
    array (
      0 => '.\\templates\\turno.tpl',
      1 => 1416696402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148845470e111c00945-18054647',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5470e111c6b789_16558660',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5470e111c6b789_16558660')) {function content_5470e111c6b789_16558660($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>'foo'), 0);?>


<div class="container" onload = "diasCalendario(enero)">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                        <h2 class="intro-text text-center"><strong>Solicitud de Turno</strong>
                        </h2>
                    <hr>
                </div>
                <div class="col-md-12">
                    <!-- <img class="img-responsive img-border-left" src="img/solicitarTurno.png" alt=""> -->
                    <style type="text/css">

            .calendario{
                width: 80%;
                height: 600px;
                margin-left: 10%;
                margin-top: 10%;
                background-color: magenta;

            }
            .diaCalender{
                width: 14.2%;
                height: 100px;
                float: left;
                background-color: grey;
                opacity: 0.5;
                border: left 0.5% black;
                border: right 0.5% black;
                border-style: solid;
            }
        

        </style>

        <script type="text/javascript">
            
            function diasCalendario(nombreMes)
            {
                var arrmes = new Array();
                arrmes = { enero: 31, febrero: 28, marzo: 31, abril:30 , mayo:31 , junio:30, julio: 31, agosto: 31 , septiembre:30, octubre: 31, noviembre: 30, diciembre: 31 };            
           
                for (var i = 0; i < arrmes[nombreMes]; i++) 
                {
                    // document.getElementById("calendarioContainer").innerHTML = "<div class = 'diaCalender' id = '2' data-estado = 'desocupado'>=+'i'<div>";
                    $("#calendarioContainer").html("<div class = 'diaCalender' id = '2' data-estado = 'desocupado'>lalalla</div>");
                }
            };

        </script>


            <div id="calendarioContainer" class = "calendario">
                <!-- <div class = "diaCalender" id = "1" data-estado = "desocupado" onclick = "dia"></div>
                <div class = "diaCalender" id = "2" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "3" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "4" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "5" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "6" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "7" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "8" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "9" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "10" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "11" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "12" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "13" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "14" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "15" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "16" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "17" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "18" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "19" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "20" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "21" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "22" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "23" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "24" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "25" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "26" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "27" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "28" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "29" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "30" data-estado = "desocupado"></div>
                <div class = "diaCalender" id = "31" data-estado = "desocupado"></div> -->
            </div>
                </div>
                <div class="col-md-6">
                    


                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Calendario 2014</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-sm-4 text-center"> -->
                    <!-- <img class="img-responsive" src="img/equipo.jpg" alt="">
                    <h3><small>Equipo de la empresa.</small></h3> -->
                <!-- </div>
                <div class="col-sm-4 text-center">
                    <img class="img-responsive" src="img/calendario.jpg" alt=""> -->
                    <!-- <h3><small>En la f&aacutebrica.</small></h3> -->
                <!-- </div>
                <div class="col-sm-4 text-center"> -->
                    <!-- <img class="img-responsive" src="img/taller.jpg" alt="">
                    <h3><small>Nuestro Taller.</small></h3> -->
                <!-- </div>
                <div class="clearfix"></div>
            </div>
        </div> -->

    </div>
    <!-- /.container -->
    <script src="js/jquery-1.11.0.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>