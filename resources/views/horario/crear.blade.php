@extends('inicio.navegador')
@section('panel')
    <nav>

        <ul>
            <li>
                <a href="{!! URL::to('#') !!}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Inicio</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent">Usuario</span></a>
                <ul>
                    <li>
                        <a href="{!! URL::to('usuario') !!}">Ingresar Usuario</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('usuario/index') !!}">Ver Usuarios</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-institution"></i> <span class="menu-item-parent">Pago</span></a>
                <ul>
                    <li>
                        <a href="{!! URL::to('pago') !!}">Ingresar Pago</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('pago/index') !!}">Ver Pagos</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-sitemap"></i> <span class="menu-item-parent">Asistencia</span></a>
                <ul>
                    <li class="active">
                        <a href="{!! URL::to('horario') !!}">Ingresar Asistencia</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('horario/index') !!}">Ver Asistencias</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Ficha Boxeador</span></a>                        <ul>
                    <li>
                        <a href="{!! URL::to('#') !!}">Ingresar  Ficha de Boxeador</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('#') !!}">Ver Ficha de Boxeador</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Informes</span></a>
                <ul>
                    <li>
                        <a href="{!! URL::to('#') !!}">Gestionar informes </a>
                    </li>
                    <li>
                        <a href="{!! URL::to('#') !!}">Ver Estadisticas</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('#') !!}">Descargar documentos</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
@endsection
@section('Breadcrumb')
    <ol class="breadcrumb">
        <li>Inicio</li><li>Horario</li><li>Crear Registro de Asistencia</li>
    </ol>

@endsection
@include('alertas.request')
@section('content')

    <section id="widget-grid" class="">

        <article class="col-sm-12 col-md-12 col-lg-12">

            <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">

                <header>
                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                    <h2>Formulario de registro de Asistencia</h2>

                </header>

                <!-- widget div-->
                <div>

                    <!-- widget edit box -->
                    <div class="jarviswidget-editbox">
                        <!-- This area used as dropdown edit box -->

                    </div>
                    <!-- end widget edit box -->

                    <!-- widget content -->
                    <div class="widget-body no-padding">
                        {!! Form::open(['url' => 'horario','files'=> true, 'class'=>'smart-form','id'=>'checkout-form', 'novalidate'=>'novalidate']) !!}
                                <!--<form id="checkout-form" class="smart-form" novalidate="novalidate">-->
                        <header>Informacion de asistencia del usuario</header>

                        <fieldset>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Nombre: </label>
                                    <label class="select">
                                        {!!  Form::select('nombre_usuario',$nombre) !!}<i></i>
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Rut: </label>
                                    <label class="select">
                                        {!!  Form::select('rut_usuario',$rut) !!}<i></i>
                                    </label>
                                </section>
                            </div>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Asistio: </label>
                                    <label class="select">
                                        {!!  Form::select('asistio', array('si' => 'SI', 'no' => 'NO'),['class' => 'form-control']) !!}
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Fecha: </label>
                                    <label class="input"> <i class="icon-prepend fa fa-calendar"></i>
                                        <input type="date" name="fecha">
                                    </label>
                                </section>

                            </div>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Hora Ingreso: </label>
                                    <label class="select">
                                        {!!  Form::select('hora_ingreso', array('17:00:00' => '17:00', '18:00:00' => '18:00','19:00:00' => '19:00'),['class' => 'form-control']) !!}
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Hora Salida: </label>
                                    <label class="select">
                                        {!!  Form::select('hora_salida', array('19:00:00' => '19:00', '20:00:00' => '20:00','21:00:00' => '21:00'),['class' => 'form-control']) !!}
                                    </label>
                                </section>
                            </div>
                        </fieldset>

                        <footer>
                            {!! Form::submit('Registrar Usuario',['class'=>'btn btn-primary']) !!}
                        </footer>
                        <!--</form>-->
                        {!! Form::close() !!}
                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->

            </div>

        </article>
    </section>
@endsection