@extends('inicio.navegador')
@section('panel')
    <nav>

        <ul>
            <li class="active">
                <a href="{!! URL::to('#') !!}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Inicio</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent">Usuario</span></a>
                <ul>
                    <li class="active">
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
                    <li>
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
        <li>Inicio</li><li><a href="{!! URL::to('/usuario/index') !!}">Listado de Usuarios</a></li> <li>Editar Usuario</li>
    </ol>
@endsection
@include('alertas.request')
@section('content')
    <section id="widget-grid" class="">

        <article class="col-sm-12 col-md-12 col-lg-12">

            <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">

                <header>
                    <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                    <h2>Formulario para editar usuarios</h2>

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
                        {!! Form::model($usuario, ['url' => ['usuario', $usuario->id_usuario ], 'method'=>'PUT','files'=> true, 'class'=>'smart-form','id'=>'checkout-form', 'novalidate'=>'novalidate', ]) !!}
                                <!--<form id="checkout-form" class="smart-form" novalidate="novalidate">-->
                        <header>Informacion personal del usuario</header>
                        <fieldset>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Rut:</label>
                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                        {!! Form::text('rut', '',['placeholder'=>'11.111.111-1']) !!}
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Nombre: </label>
                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                        {!! Form::text('nombre', '',['placeholder'=>'Nombre']) !!}
                                    </label>
                                </section>

                            </div>
                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Apellido Paterno: </label>
                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                        {!! Form::text('apellido_paterno', '',['placeholder'=>'Apellido Paterno']) !!}
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Apellido Materno: </label>
                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                        {!! Form::text('apellido_materno', '',['placeholder'=>'Apellido Materno']) !!}
                                    </label>
                                </section>
                            </div>

                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Direccion: </label>
                                    <label class="input"> <i class="icon-prepend fa fa-home"></i>
                                        {!! Form::text('direccion', '',['placeholder'=>'Direccion']) !!}
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Comuna: </label>
                                    <label class="input"> <i class="icon-prepend fa fa-home"></i>
                                        {!! Form::text('comuna', '',['placeholder'=>'Comuna']) !!}
                                    </label>
                                </section>
                            </div>

                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Correo: </label>
                                    <label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
                                        {!! Form::text('correo', '',['placeholder'=>'Correo']) !!}
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Telefono: </label>
                                    <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                        {!! Form::text('telefono', '',['placeholder'=>'Telefono']) !!}
                                    </label>
                                </section>
                            </div>

                            <div class="row">
                                <section class="col col-6">
                                    <label class="label">Genero: </label>
                                    <label class="select">
                                        {!!  Form::select('genero', array('masculino' => 'Masculino', 'femenino' => 'Femenino',),['class' => 'form-control']) !!}
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Perfil de usuario: </label>
                                    <label class="select">
                                        {!!  Form::select('perfil', array('administrador' => 'Administrador', 'profesor' => 'Profesor','boxeador' => 'Boxeador'),['class' => 'form-control']) !!}
                                    </label>
                                </section>
                            </div>

                            <div class="row">
                                <section class="col col-6">
                                    <section>
                                        <label class="label">Foto de perfil: </label>
                                        <div class="input input-file">
                                            <span class="button">
                                                <input type="file" id="file" name="imagen" onchange="this.parentNode.nextSibling.value = this.value">Buscar</span><input type="text" placeholder="Seleccione una foto de perfil" readonly="">
                                        </div>
                                    </section>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Certificado Medico: </label>
                                    <label class="input"> <i class="icon-prepend fa fa-file-image-o"></i>
                                        <div class="input input-file">
                                            <span class="button">
                                                <input type="file" id="file" name="certificado" onchange="this.parentNode.nextSibling.value = this.value">Buscar</span><input type="text" placeholder="Seleccione un certificado fisico" readonly="">
                                        </div>
                                    </label>
                                </section>
                            </div>

                            <div class="row">
                                <section class="col col-6">

                                    <label class="label">Fecha de Nacimiento: </label>
                                    <label class="input"> <i class="icon-prepend fa fa-calendar"></i>
                                        <input type="date" name="fecha">
                                    </label>
                                </section>
                                <section class="col col-6">
                                    <label class="label">Password: </label>
                                    <label class="input"> <i class="icon-prepend fa fa-lock"></i>
                                        {!! Form::password('password', ['placeholder'=>'************']) !!}
                                    </label>
                                </section>
                            </div>
                        </fieldset>

                        <footer>
                            {!! Form::submit('Editar Usuario',['class'=>'btn btn-primary']) !!}
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