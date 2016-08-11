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
        <li>Inicio</li><li><a href="{!! URL::to('/usuario') !!}">Ingresar Usuario</a></li><li>Listado de Usuarios</li>
    </ol>
@endsection
@section('content')

    <section id="widget-grid" class="">

        <!-- NEW WIDGET START -->
        <article class="col-sm-12 col-md-12 col-lg-12">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-greenDark" id="wid-id-2" data-widget-editbutton="false">
                <!-- widget options:
                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                data-widget-colorbutton="false"
                data-widget-editbutton="false"
                data-widget-togglebutton="false"
                data-widget-deletebutton="false"
                data-widget-fullscreenbutton="false"
                data-widget-custombutton="false"
                data-widget-collapsed="true"
                data-widget-sortable="false"

                -->
                <header>
                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                    <h2>Listado de usuarios</h2>

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

                        <div class="table-responsive">

                            <table class="js-dynamitable table table-hover">
                                <thead>
                                <tr>
                                    <th class="hasinput">
                                        <input class="js-filter  form-control" type="text" placeholder="Filtrar nombre">
                                    </th>
                                    <th class="hasinput">
                                        <input class="js-filter  form-control" type="text" placeholder="Filtrar rut">
                                    </th>
                                    <th class="hasinput">
                                        <input class="js-filter  form-control" type="text" placeholder="Filtrar telefono">
                                    </th>
                                    <th class="hasinput">
                                        <input class="js-filter  form-control" type="text" placeholder="Filtrar correo">
                                    </th>
                                    <th>

                                    </th>
                                </tr>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Rut</th>
                                    <th>Tel�fono</th>
                                    <th>Correo</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($usuarios as $usuario)
                                    <tr>
                                        <td>{!! $usuario->nombre_usuario.' '.$usuario->apellido_paterno_usuario.' '.$usuario->apellido_materno_usuario !!}</td>
                                        <td>{!! $usuario->rut_usuario !!}</td>
                                        <td>{!! $usuario->telefono_usuario !!}</td>
                                        <td>{!! $usuario->correo_usuario !!}</td>
                                        <td>
                                            <a class='btn btn-xs btn-default' data-original-title='Edit Row' href="{!! URL::to('/usuario/'.$usuario->id_usuario.'/editar') !!}">  <i class='fa fa-pencil'></i></a>
                                            <a class='btn btn-xs btn-default' data-original-title='Save Row' href="{!! URL::to('/usuario/'.$usuario->id_usuario) !!}">            <i class='fa fa-search'></i></a>
                                            <a class='btn btn-xs btn-default' onclick="return confirm('�Est� seguro que desea eliminar este registro?')" data-original-title='Cancel'  href="{!! URL::to('/usuario/'.$usuario->id_usuario.'/eliminar') !!}"><i class='fa fa-times'></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->
                {!! $usuarios->render() !!}
            </div>
            <!-- end widget -->
        </article>
        <!-- WIDGET END -->

    </section>
    <!-- end widget grid -->
@endsection
@section('scripts')
    {!! Html::script('js/dynamitable.jquery.min.js')  !!}
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
@stop