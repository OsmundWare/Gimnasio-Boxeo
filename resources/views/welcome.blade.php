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
                    <li>
                        <a href="{!! URL::to('#') !!}">Ingresar Usuario</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('#') !!}">Ver Usuarios</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-institution"></i> <span class="menu-item-parent">Pago</span></a>
                <ul>
                    <li>
                        <a href="{!! URL::to('#') !!}">Ingresar Pago</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('#') !!}">Ver Pagos</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-sitemap"></i> <span class="menu-item-parent">Asistencia</span></a>
                <ul>
                    <li>
                        <a href="{!! URL::to('#') !!}">Ingresar Asistencia</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('#') !!}">Ver Asistencias</a>
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

@section('content')

    <section id="widget-grid" class="">

        <!-- NEW WIDGET START -->
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <!-- Widget ID (each widget will need unique ID)-->
            <div class="jarviswidget jarviswidget-color-white" id="wid-id-0" data-widget-editbutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false">

                <header>
                    <span class="widget-icon"> <i class="fa fa-map-marker"></i> </span>
                    <h2>XML Generated</h2>

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
                        <div id='capaMapa' style="width: 100%; height: 500px;"> </div><!-- dimensiones del mapa -->
                    </div>
                    <!-- end widget content -->

                </div>
                <!-- end widget div -->

            </div>
            <!-- end widget -->

        </article>
        <!-- WIDGET END -->

    </section>
    <!-- end widget grid -->

@stop

@section('scripts')

@stop