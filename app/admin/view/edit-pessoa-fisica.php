<?php include_once 'app/partlals/header.php';?>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>83</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Custom</b>83</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="app/assets/imgs/user9-640x640.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="app/assets/imgs/user9-640x640.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?=$_SESSION['nome']?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="app/assets/imgs/user9-640x640.jpg" class="img-circle" alt="User Image">

                <p>
                  <?=$_SESSION['nome']?> - Web Developer
                  <small><?=$_SESSION['email']?></small>
                  <small>Member since Nov. 2017</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="app/assets/imgs/user9-640x640.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$_SESSION['nome']?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU NAVEGAÇÃO</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="dashboard.html"><i class="fa fa-home"></i> <span>DashBoard</span></a></li>
        <li><a href="#"><i class="fa fa-sliders"></i> <span>Sliders</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Editar</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="dashboard-admin-listagem-usuarios">Usuários Registrados</a></li>
            <li><a href="dashboard-admin-pessoa-fisica">Pessoa Física</a></li>
            <li><a href="dashboard-admin-pessoa-juridica">Pessoa Juridica</a></li>
            <li><a href="dashboard-admin-usuarios-desabilitados">Desabilitados</a></li>
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-university"></i> <span>Lojas</span></a></li>
        <li><a href="#"><i class="fa fa-bars"></i> <span>Categorias</span></a></li>
        <li><a href="#"><i class="fa fa-cart-arrow-down"></i> <span>Produtos</span></a></li>
        <li><a href="#"><i class="fa fa-exclamation-triangle"></i> <span>Alertas</span></a></li>
        <li><a href="#"><i class="fa fa fa-envelope-open"></i> <span>Newsletter</span></a></li>
        <li><a href="#"><i class="fa fa-commenting"></i> <span>Depoimentos</span></a></li>
        <li><a href="#"><i class="fa fa-comments-o"></i> <span>Comentários</span></a></li>
        <li><a href="#"><i class="fa fa-tags"></i> <span>Ofertas</span></a></li>
        <li><a href="#"><i class="fa fa-address-card"></i> <span>Usuários</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar
        <small>Cliente</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Editar</a></li>
        <li class="active">Clientes</li>
        <li class="active">Pessoa Física</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
          <div class="col-md-12">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Sobre a Conta</h3>
                </div>
                <form action="update" method="post">
                  <input id="usuario" name="type" type="hidden" value="pf">
                  <input id="usuario" name="id" type="hidden" value="<?=$user['id']?>">
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="formUser">Usuário</label>
                        <input class="form-control" id="formUser" placeholder="Nome" type="text" name="usuario" value="<?=$user['usuario']?>">
                      </div>
                      <div class="form-group">
                        <label for="formCpf">CPF</label>
                        <input class="form-control" id="formCpf" placeholder="cpf" name="cpf" type="text" value="<?=$user['identificador']?>">
                      </div>
                      <div class="form-group">
                        <label for="formTelCel">Telefone Celular</label>
                        <input class="form-control" id="formTelCel" placeholder="00 00000000" name="celular" type="text" value="<?=$user['celular']?>">
                      </div>
                      <div class="form-group">
                        <label for="formInstagram">Instagram</label>
                        <input class="form-control" id="formInstagram" placeholder="Instagram" name="instagram" type="text" value="<?=$user['instagram']?>">
                      </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="formNome">Nome</label>
                          <input class="form-control" id="formNome" placeholder="Nome" type="text" name="nome" value="<?=$user['nome']?>">
                        </div>
                        <div class="form-group">
                          <label>Categoria</label>
                            <select class="form-control" name="categoria" required="">
                            <<option selected="<?=$user['categoria']?>"><?=$user['categoria']?></option>
                            <option value="pintor">Pintor</option>
                            <option value="funileiro">Funileiro</option>
                            <option value="Mecanico">Mecanico</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="formSite">Site</label>
                          <input class="form-control" id="formSite" placeholder="" name="site" type="text" value="<?=$user['site']?>">
                        </div>
                        <div class="form-group">
                          <label for="formSenha">Senha</label>
                          <input class="form-control" id="formSenha" placeholder="" name="senha" type="text">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                          <label for="fomrMail">Email</label>
                          <input class="form-control" id="fomrMail" placeholder="" type="email" name="email" value="<?=$user['email']?>">
                        </div>
                        <div class="form-group">
                          <label for="formTelFixo">Telefone Fixo</label>
                          <input class="form-control" id="formTelFixo" placeholder="00 0000000" name="telefone" type="text" value="<?=$user['telefone']?>">
                        </div>
                        <div class="form-group">
                          <label for="formFacebook">Facebook</label>
                          <input class="form-control" id="formFacebook" placeholder="Facebook" name="facebook" type="text" value="<?=$user['facebook']?>">
                        </div>
                        <div class="form-group">
                          <label for="fomrLogo">Logomarca</label>
                          <input id="fomrLogo" name="logomarca" type="file">
                        </div>
                    </div>
                  </div>
                </div>
                <div class="box-footer">
                  <!-- <button type="submit" class="btn btn-primary">Pesquisar</button> -->
                </div>
            </div>
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Endereço</h3>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                          <label for="formCep">Cep</label>
                          <input class="form-control" id="formCep" placeholder="Cep" name="cep" type="text" value="<?=$user['cep']?>">
                      </div>
                      <div class="form-group">
                          <label for="formNumero">Número</label>
                          <input class="form-control" id="formNumero" placeholder="" name="numero" type="text" value="<?=$user['numero']?>">
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label>Estado</label>
                        <select class="form-control" name="estado" required="">
                            <option selected="<?=$user['estado']?>"><?=$user['estado']?></option>
                            <option value="Paraiba">Paraíba</option>
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="formEnd">Endereço</label>
                          <input class="form-control" id="formEnd" placeholder="" name="rua" required="" type="text" value="<?=$user['rua']?>">
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label>Cidade</label>
                        <select class="form-control" name="cidade" required="">
                            <option selected="<?=$user['cidade']?>"><?=$user['cidade']?></option>
                            <option value="João_Pessoa">João Pessoa</option>
                        </select>
                      </div>
                      <div class="form-group">
                          <label>Bairro</label>
                          <select class="form-control" name="bairro" required="">
                              <option selected="<?=$user['bairro']?>"><?=$user['bairro']?></option>
                              <option value="Torre">Torre</option>
                          </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="box-footer">
                  <!-- <button type="submit" class="btn btn-primary">Pesquisar</button> -->
                </div>
            </div>
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Informações financeiras</h3>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                          <label>Data de Vencimento</label>
                            <select class="form-control" name="data_vencimento" required="">
                            <option selected="<?=$user['data_vencimento']?>"><?=$user['data_vencimento']?></option>
                            <option value="5">05</option>
                            <option value="20">20</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                          <label>Plano</label>
                            <select class="form-control" name="plano" required="">
                            <option selected="<?=$user['plano']?>"><?=$user['plano']?></option>
                            <option value="Plano 1">Plano 1</option>
                            <option value="Plano 2">Plano 2</option>
                          </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="box-footer">
                  <button type="button" class="btn btn-secondary">Cancelar</button>
                  <input class="btn btn-primary pull-right" type="submit" value="Salvar e atualizar">
                </div>
            </div>
            </form>
          </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->
        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>
          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>
            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="app/libs/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="app/libs/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="app/libs/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="app/libs/plugins/input-mask/jquery.inputmask.js"></script>
<script src="app/libs/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="app/libs/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="app/libs/bower_components/moment/min/moment.min.js"></script>
<script src="app/libs/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="app/libs/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="app/libs/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="app/libs/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="app/libs/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="app/libs/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="app/libs/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="app/assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="app/assets/js/demo.js"></script> -->
<!-- Page script -->
<script>
  $(function () {
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
  })
</script>
<?php
    if(!empty($_SESSION['msg'])) {
          echo "<script>alert('Usuario atualizado!')</script>";
          unset($_SESSION['msg']);
    }
?>
</body>
</html>
