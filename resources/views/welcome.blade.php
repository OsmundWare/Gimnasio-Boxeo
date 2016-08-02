@extends('inicio.navegador')

@section('panel')
    <nav>

        <ul>
            <li class="active">
                <a href="{!! URL::to('inicio') !!}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Inicio</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-group"></i> <span class="menu-item-parent">Usuario</span></a>
                <ul>
                    <li>
                        <a href="{!! URL::to('usuario') !!}">Crear Usuario</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('usuario/index') !!}">Ver Usuarios</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-institution"></i> <span class="menu-item-parent">Estaciones</span></a>
                <ul>
                    <li>
                        <a href="{!! URL::to('estacion') !!}">Crear Estaciones</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('estacion/index') !!}">Ver Estaciones</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-sitemap"></i> <span class="menu-item-parent">Categorías de Variables</span></a>
                <ul>
                    <li>
                        <a href="{!! URL::to('categoria') !!}">Crear Categoría</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('categoria/index') !!}">Ver Categorias</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-tint"></i> <span class="menu-item-parent">Variables</span></a>                        <ul>
                    <li>
                        <a href="{!! URL::to('afluente') !!}">Crear Variable</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('afluente/index') !!}">Ver Variables</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Muestras</span></a>
                <ul>
                    <li>
                        <a href="{!! URL::to('muestra') !!}">Ingresar Muestra</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('muestra/index') !!}">Ver Muestras</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-flask"></i> <span class="menu-item-parent">Niveles de calidad</span></a>
                <ul>
                    <li>
                        <a href="{!! URL::to('calidad') !!}">Ingresar niveles de calidad</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('calidad/index') !!}">Ver niveles de calidad</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Informes</span></a>
                <ul>
                    <li>
                        <a href="{!! URL::to('informe/index') !!}">Estadisticas de Variables</a>
                    </li>
                    <li>
                        <a href="{!! URL::to('informe/graficos') !!}">Gráfico Lineal</a>
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
    <script type="text/javascript">
        var mapa;
        var mapControls;
        var gmaps = new Array();
        var coord1 = -73.1078594;
        var coord2 = -37.843648;
        mapControls = [
            new OpenLayers.Control.PanZoomBar(),
            new OpenLayers.Control.Navigation(),
            new OpenLayers.Control.ScaleLine(),
            new OpenLayers.Control.LayerSwitcher(),
            new OpenLayers.Control.MousePosition(),
            new OpenLayers.Control.KeyboardDefaults()
        ];
        mapa = new OpenLayers.Map('capaMapa', {controls: mapControls});

        var capaWMS = new OpenLayers.Layer.WMS(
                "OpenLayers WMS",
                "http://vmap0.tiles.osgeo.org/wms/vmap0",
                {layers: "basic", isBaseLayer:false});

        var streets = new OpenLayers.Layer.Google(
                "Google Streets"
        );
        var satellite = new OpenLayers.Layer.Google(
                "Google Satellite",
                {type: google.maps.MapTypeId.SATELLITE}
        );
        var physical = new OpenLayers.Layer.Google(
                "Google Physical",
                {type: google.maps.MapTypeId.TERRAIN}
        );
        var hybrid = new OpenLayers.Layer.Google(
                "Google Hybrid",
                {type: google.maps.MapTypeId.HYBRID}
        );

        var kmlarea = new OpenLayers.Layer.Vector("Areas", {
            strategies: [new OpenLayers.Strategy.Fixed()],
            protocol: new OpenLayers.Protocol.HTTP({
                url: "kml/Areas_Vigilancia_EULA_KML.kml",
                format: new OpenLayers.Format.KML({
                    transparent: true,
                    extractStyles: true,
                    extractAttributes: true,
                    maxDepth: 2
                })
            })
        });

        var kmlmonte = new OpenLayers.Layer.Vector("Monte", {
            strategies: [new OpenLayers.Strategy.Fixed()],
            protocol: new OpenLayers.Protocol.HTTP({
                url: "kml/monte-sano-state-park.kml",
                format: new OpenLayers.Format.KML({
                    extractStyles: true,
                    extractAttributes: true,
                    maxDepth: 2
                })
            })
        });

        var kmlsundials = new OpenLayers.Layer.Vector("Sundials", {
            strategies: [new OpenLayers.Strategy.Fixed()],
            protocol: new OpenLayers.Protocol.HTTP({
                url: "kml/sundials.kml",
                format: new OpenLayers.Format.KML({
                    extractStyles: true,
                    extractAttributes: true,
                    maxDepth: 2
                })
            })
        });

        var kmlus_states = new OpenLayers.Layer.Vector("Us States", {
            strategies: [new OpenLayers.Strategy.Fixed()],
            protocol: new OpenLayers.Protocol.HTTP({
                url: "kml/us_states.kml",
                format: new OpenLayers.Format.KML({
                    extractStyles: true,
                    extractAttributes: true,
                    maxDepth: 2
                })
            })
        });

        var kmlmap = new OpenLayers.Layer.Vector("Map", {
            strategies: [new OpenLayers.Strategy.Fixed()],
            protocol: new OpenLayers.Protocol.HTTP({
                url: "kml/map.kml",
                format: new OpenLayers.Format.KML({
                    extractStyles: true,
                    extractAttributes: true,
                    maxDepth: 2
                })
            })
        });

        kmlarea.setVisibility(false);
        kmlmonte.setVisibility(false);
        kmlsundials.setVisibility(false);
        kmlus_states.setVisibility(false);
        kmlmap.setVisibility(false);

        mapa.addLayers([satellite, physical, streets, hybrid, kmlarea, kmlmonte, kmlsundials, kmlus_states, kmlmap]);

        mapa.setCenter(
                new OpenLayers.LonLat(coord1, coord2).transform(
                        new OpenLayers.Projection("EPSG:4326"),
                        mapa.getProjectionObject()
                ), 8
        );
    </script>
@stop