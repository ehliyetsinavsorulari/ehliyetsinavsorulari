
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png">

    <title>Feka Türkai</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>assets/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/jquery.gritter/css/jquery.gritter.css" />

    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/font-awesome-4/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/html5shiv.js"></script>
    <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/jquery.nanoscroller/nanoscroller.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/jquery.easypiechart/jquery.easy-pie-chart.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/bootstrap.switch/bootstrap-switch.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/jquery.select2/select2.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/js/bootstrap.slider/css/slider.css" />
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet" />



</head>

<body>

<!-- Fixed navbar -->
<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-gear"></span>
            </button>
            <a class="navbar-brand" href="#"><span></span></a>
        </div>

        <ul class="nav navbar-nav navbar-right user-nav">
            <li class="dropdown profile_menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="Avatar" src="<?=base_url()?>assets/images/avatar2.jpg" /> <i>muaz</i><b class="caret"></b></a>
                <ul class="dropdown-menu">

                    <li class="divider"></li>
                    <li><a href="<?=base_url()?>index.php/user_authentication/logout">Çıkış</a></li>
                </ul>
            </li>
        </ul>

    </div><!--/.nav-collapse -->
</div>


<div id="cl-wrapper">
    <div class="cl-sidebar">
        <div class="cl-toggle"><i class="fa fa-bars"></i></div>
        <div class="cl-navblock">
            <div class="menu-space">
                <div class="content">
                    <div class="side-user">
                        <div class="avatar"><img src="<?=base_url()?>assets/images/favicon.png" alt="Avatar" /></div>
                        <div class="info">
                            <?php echo "Hoşgeldin <b id='welcome'><i>Muaz</i> !</b>"; ?>
                            <img src="<?=base_url()?>assets/images/state_online.png" alt="Status" /> <span>Online</span>
                        </div>
                    </div>
                    <ul class="cl-vnavigation">
                        <li><a href="<?=base_url()?>index.php/kaizen/kaizennedir"<span>Kaizen Nedir?</span></a>
                        </li>
                        <li><a href="<?=base_url()?>index.php/kaizen/mesajgonder"<span>İstek ve şikayetler</span></a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="text-right collapse-button" style="padding:7px 9px;">
                <input type="text" class="form-control search" placeholder="Search..." />
                <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="pcont">

        <div class="cl-mcont">
            <?php
            $messages = view::get_messages('error');
            if ( $messages != "" ) {
                ?>
                <div class="alert alert-danger alert-white rounded" style="margin: 10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <div class="icon"><i class="fa fa-times-circle"></i></div>
                    <?= $messages ?>
                </div>
            <? } ?>
            <?php
            $messages = view::get_messages('success');
            if ( $messages != "" ) {
                ?>
                <div class="alert alert-success alert-white rounded" style="margin: 10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <div class="icon"><i class="fa fa-times-circle"></i></div>
                    <?= $messages ?>
                </div>
            <? } ?>
            <?= $content ?>
        </div>


    </div>

</div>

<script src="<?=base_url()?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
<script src="<?=base_url()?>assets/js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.nestable/jquery.nestable.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?=base_url()?>assets/js/jquery.select2/select2.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/behaviour/general.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        //initialize the javascript
        App.init();
    });
</script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?=base_url()?>assets/js/behaviour/voice-commands.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.flot/jquery.flot.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.flot/jquery.flot.labels.js"></script>
</body>
</html>
