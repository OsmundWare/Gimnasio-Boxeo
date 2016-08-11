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
        <li>Inicio</li><li><a href="{!! URL::to('/usuario/index') !!}">Listado de Usuarios</a></li> <li>Ver Usuario</li>
    </ol>
@endsection
@section('content')
    <section id="widget-grid" class="">
        <!-- NEW COL START -->
        <article class="col-sm-12 col-md-12 col-lg-12">
            <!-- widget content -->
            <div class="well well-sm">
                <h1 class="text-primary">Usuario {!! $usuario->nombre_usuario.' '.$usuario->apellido_paterno_usuario.' '.$usuario->apellido_materno_usuario !!}</h1>
                <div class="bs-example">
                    <dl class="dl-horizontal">
                        <h2 class="text-primary"><dt>Rut: </dt></h2>
                        <h2><dd>{!! $usuario->rut_usuario !!}</dd></h2>
                        <h2 class="text-primary"><dt>Direccion: </dt></h2>
                        <h2><dd>{!! $usuario->direccion_usuario !!}</dd></h2>
                        <h2 class="text-primary"><dt>Comuna: </dt></h2>
                        <h2><dd>{!! $usuario->comuna_usuario !!}</dd></h2>
                        <h2 class="text-primary"><dt>Telefono: </dt></h2>
                        <h2><dd>{!! $usuario->telefono_usuario !!}</dd></h2>
                        <h2 class="text-primary"><dt>Correo: </dt></h2>
                        <h2><dd>{!! $usuario->correo_usuario !!}</dd></h2>
                        <h2 class="text-primary"><dt>Fecha de Nacimiento: </dt></h2>
                        <h2><dd>{!! $usuario->fecha_nacimiento_usuario !!}</dd></h2>
                        <h2 class="text-primary"><dt>Genero: </dt></h2>
                        <h2><dd>{!! $usuario->genero_usuario !!}</dd></h2>
                        <h2 class="text-primary"><dt>Certificado Medico: </dt></h2>
                        <h2><dd>{!! $usuario->certificado_medico_usuario !!}</dd></h2>
                        <h2 class="text-primary"><dt>Imagen Perfil: </dt></h2>
                        <h2><dd>{!! $usuario->imagen_perfil_usuario !!}</dd></h2>
                        <h2 class="text-primary"><dt>Perfil: </dt></h2>
                        <h2><dd>{!! $usuario->perfil_usuario !!}</dd></h2>

                    </dl>
                </div>
            </div>
            <!-- end widget content -->
        </article>
    </section>
@endsection