<?php
    /*$urlCurrent = Request::segment(2);
    $active = 'active';*/
?>
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
    <!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{ asset('components/lte/img/userRoberto.jpg') }}" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p>{{ $currentUser->email }}</p>
				<i class="fa fa-circle text-success"></i> En Línea
			</div>
		</div>
  <!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="header"> Menú</li>
			<li class="active treeview">
				<a href="{{route('home_show_path')}}">
					<i class="fa fa-home"></i>
					<span>Inicio</span>
				</a>
			</li>
      <li class="header"> General</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i>
          <span> Pacientes</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-list"></i>Ver pacientes</a></li>
          <li><a href="#"><i class="fa fa-file"></i>Historial Clinico</a></li>

        </ul>
      </li>
      <li class="header">Plataforma</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-hospital-o"></i>
          <span> Consultas</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-stethoscope"></i>Diagnóstico</a></li>
          <li><a href="#"><i class="fa fa-list-ul"></i>Recetas</a></li>
          <li><a href="#"><i class="fa fa-money"></i>Cotización Virtual</a></li>

        </ul>
      </li>
      <li class="header">Movimientos</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-history"></i>
          <span> Historial</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-credit-card"></i>Movimiento Pagos</a></li>
        </ul>
      </li>
      <li class="header"> Configuración</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-wrench"></i>
          <span> Ajustes</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-user-md"></i>Perfil</a></li>
        </ul>
      </li>

            <!-- Sección de ajustes -->
            <!--<li class="header"> Ajustes</li>
            <li class="">
                <a href="#">
                    <i class="fa fa-users"></i> Usuarios
                </a>
            </li>
            <li class="">
                <a href="#">
                    <i class="fa fa-puzzle-piece"></i> Servicios
                </a>
            </li>
            <li class="">
                <a href="#">
                    <i class="fa fa-ticket"></i> Folios
                </a>
            </li>
            <li class="">
                <a href="#">
                    <i class="fa fa-money"></i> Formas de Pago
                </a>
            </li>-->

            <!-- Sección de Clientes -->
            <!--<li class="header"> Clientes</li>
            <li class="">
                <a href="#">
                    <i class="fa fa-suitcase"></i> Clientes
                </a>
            </li>
            <li class="header"> Ordenes</li>
            <li class="">
                <a href="#">
                    <i class="fa fa-file-o"></i> Ordenes
                </a>
            </li>
            <li class="header"> Facturación</li>
            <li class="">
                <a href="#">
                    <i class="fa fa-file-o"></i> Facturas
                </a>
            </li>-->
		</ul>

	</section>
</aside>
