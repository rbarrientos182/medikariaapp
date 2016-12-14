<?php
    /*$urlCurrent = Request::segment(2);
    $active = 'active';*/
?>
<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{ asset('components/lte/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p>{{ Auth::user()->name }}</p>
				<i class="fa fa-circle text-success"></i> En Linea
			</div>
		</div>

		<ul class="sidebar-menu">

			<li class="header"> Navegación</li>
			<li class="{{ $urlCurrent=='' ? 'active' : '' }}">
				<a href="/{{ Session::get('pathUrl') }}">
					<i class="fa fa-dashboard"></i>
					<span>Inicio</span>
				</a>
			</li>
            <!-- Sección de ajustes -->
            <li class="header"> Ajustes</li>
            <li class="{{ $urlCurrent=='users' ? 'active' : '' }}">
                <a href="{{ route('admin.users.index') }}">
                    <i class="fa fa-users"></i> Usuarios
                </a>
            </li>
            <li class="{{ $urlCurrent=='services' ? 'active' : '' }}">
                <a href="{{ route('admin.services.index') }}">
                    <i class="fa fa-puzzle-piece"></i> Servicios
                </a>
            </li>
            <li class="{{ $urlCurrent=='folios' ? 'active' : '' }}">
                <a href="{{ route('admin.folios.index') }}">
                    <i class="fa fa-ticket"></i> Folios
                </a>
            </li>
            <li class="{{ $urlCurrent=='payments' ? 'active' : '' }}">
                <a href="{{ route('admin.payments.index') }}">
                    <i class="fa fa-money"></i> Formas de Pago
                </a>
            </li>

            <!-- Sección de Clientes -->
            <li class="header"> Clientes</li>
            <li class="{{ $urlCurrent=='customers' ? 'active' : '' }}">
                <a href="{{ route('admin.customers.index') }}">
                    <i class="fa fa-suitcase"></i> Clientes
                </a>
            </li>
            {{-- <li class="{{ $urlCurrent=='customers' ? 'active' : '' }}">
                <a href="{{ route('admin.customers.create') }}">
                    <i class="fa fa-plus-square-o"></i> Nuevo Cliente
                </a>
            </li> --}}

            <!-- Sección de Ordenes -->
            <li class="header"> Ordenes</li>
            <li class="{{ $urlCurrent=='orders' ? 'active' : '' }}">
                <a href="{{ route('admin.orders.index') }}">
                    <i class="fa fa-file-o"></i> Ordenes
                </a>
            </li>
            {{-- <li class="{{ $urlCurrent=='orders' ? 'active' : '' }}">
                <a href="{{ route('admin.orders.create') }}">
                    <i class="fa fa-plus-square-o"></i> Nueva Orden
                </a>
            </li> --}}

            <!-- Sección de Facturas -->
            <li class="header"> Facturación</li>
            <li class="{{ $urlCurrent=='invoices' ? 'active' : '' }}">
                <a href="{{ route('admin.users.index') }}">
                    <i class="fa fa-file-o"></i> Facturas
                </a>
            </li>
            {{-- <li class="{{ $urlCurrent=='invoices' ? 'active' : '' }}">
                <a href="{{ route('admin.users.index') }}">
                    <i class="fa fa-plus-square-o"></i> Nueva Factura
                </a>
            </li> --}}

            <!-- Sección de Reportes
            <li class="header"> Reportes</li>
            <li class="{{ $urlCurrent=='users' ? 'active' : '' }}">
                <a href="{{ route('admin.users.index') }}">
                    <i class="fa fa-circle-o"></i> Usuarios
                </a>
            </li>-->

		</ul>

	</section>
</aside>
