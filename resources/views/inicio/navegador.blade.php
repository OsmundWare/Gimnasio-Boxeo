<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title> Eula </title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- datepicker -->
    <link rel="stylesheet" href="{{URL::to('//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{URL::to('jquery.datetimepicker.css')}}">


    <!-- Basic Styles -->
    {!! Html::style('css/bootstrap.min.css',array('media'=>'screen')) !!}
    {!! Html::style('css/font-awesome.min.css',array('media'=>'screen')) !!}

            <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    {!! Html::style('css/smartadmin-skins.min.css',array('media'=>'screen')) !!}
    {!! Html::style('css/smartadmin-production.min.css',array('media'=>'screen')) !!}

            <!-- SmartAdmin RTL Support is under construction
             This RTL CSS will be released in version 1.5
        <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> -->

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    {!! Html::style('css/demo.min.css',array('media'=>'screen')) !!}

            <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ URL::to('img/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ URL::to('img/favicon/favicon.ico') }}" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- Specifying a Webpage Icon for Web Clip
         Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="{{ URL::to('img/splash/sptouch-icon-iphone.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::to('img/splash/touch-icon-ipad.png') }}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::to('img/splash/touch-icon-iphone-retina.png') }}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::to('img/splash/touch-icon-ipad-retina.png') }}}">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="{{ URL::to('img/splash/ipad-landscape.png') }}}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="{{ URL::to('img/splash/ipad-portrait.png') }}}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="{{ URL::to('img/splash/iphone.png') }}}" media="screen and (max-device-width: 320px)">

</head>
<body class="">
<!-- possible classes: minified, fixed-ribbon, fixed-header, fixed-width-->

<!-- HEADER -->
<header id="header">
    <div id="logo-group">

        <!-- PLACE YOUR LOGO HERE -->

        <span id="logo"> {!! Html::image('img/eula/logo_eula.png',"SmartAdmin") !!} </span>
        <!-- END LOGO PLACEHOLDER -->

        <!-- Note: The activity badge color changes when clicked and resets the number to 0
        Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->

    </div>

    <!-- pulled right: nav area -->
    <div class="pull-right">

        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- #MOBILE -->
        <!-- Top menu profile link : this shows only when top menu is active -->
        <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
            <li class="">
                <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">

                    {!! Html::image('img/avatars/sunny.png',"John Doe",array("class"=>'online')) !!}

                </a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{!! Url::to('logout') !!}" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                    </li>


                </ul>
            </li>
        </ul>

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="{!! URL::to('logout') !!}" title="Sign Out" data-action="userLogout" data-logout-msg="¿Está seguro que desea cerrar su sesión?"><i class="fa fa-sign-out"></i></a> </span>
        </div>
        <!-- end logout button -->

        <!-- fullscreen button -->
        <div id="fullscreen" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
        </div>
        <!-- end fullscreen button -->

    </div>
    <!-- end pulled right: nav area -->

</header>
<!-- END HEADER -->

<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->

					<a>
                        {!! Html::image('img/avatars/sunny.png',"me",array("class"=>'online')) !!}
                        <span>

						</span>
                    </a>

				</span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive

    To make this navigation dynamic please make sure to link the node
    (the reference to the nav > ul) after page load. Or the navigation
    will not initialize.
    -->
    @yield('panel')

    <span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
			</span>

</aside>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

				<span class="ribbon-button-alignment">
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span>
				</span>

        @yield('Breadcrumb')

                <!-- You can also add more buttons to the
				ribbon for further usability

				Example below:

				<span class="ribbon-button-alignment pull-right">
				<span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
				<span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
				<span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
				</span> -->
    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">
        <div class="row">
            @yield('content')
        </div>

    </div>

</div>
<!-- END MAIN PANEL -->

<!-- PAGE FOOTER -->
<div class="page-footer">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <span class="txt-color-white">Proyecto Eula 2015-2016</span>
        </div>

    </div>
</div>
<!-- END PAGE FOOTER -->

<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
    }
</script>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

{!! Html::script('js/jquery.js') !!}

        <!-- IMPORTANT: APP CONFIG -->
{!! Html::script('js/app.config.js') !!}

        <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
{!! Html::script('js/plugin/jquery-touch/jquery.ui.touch-punch.min.js') !!}

        <!-- BOOTSTRAP JS -->
{!!  Html::script('js/bootstrap/bootstrap.min.js') !!}

        <!-- CUSTOM NOTIFICATION -->
{!!  Html::script('js/notification/SmartNotification.min.js') !!}

        <!-- JARVIS WIDGETS -->
{!! Html::script('js/smartwidgets/jarvis.widget.min.js') !!}

        <!-- SPARKLINES -->
{!! Html::script('js/plugin/sparkline/jquery.sparkline.min.js') !!}

        <!-- JQUERY VALIDATE -->
{!! Html::script('js/plugin/jquery-validate/jquery.validate.min.js') !!}

        <!-- JQUERY MASKED INPUT -->
{!! Html::script('js/plugin/masked-input/jquery.maskedinput.min.js') !!}

        <!-- JQUERY SELECT2 INPUT -->
{!! Html::script('js/plugin/select2/select2.min.js') !!}

        <!-- JQUERY UI + Bootstrap Slider -->
{!! Html::script('js/plugin/bootstrap-slider/bootstrap-slider.min.js') !!}

        <!-- browser msie issue fix -->
{!! Html::script('js/plugin/msie-fix/jquery.mb.browser.min.js') !!}

        <!-- FastClick: For mobile devices -->
{!! Html::script('js/plugin/fastclick/fastclick.min.js') !!}

        <!-- Demo purpose only -->
{!! Html::script('js/demo.min.js') !!}

        <!-- MAIN APP JS FILE -->
{!! Html::script('js/app.min.js') !!}

        <!-- PAGE RELATED PLUGIN(S) -->
{!! Html::script('js/plugin/jquery-form/jquery-form.min.js') !!}

{!! Html::script('http://www.openlayers.org/api/OpenLayers.js') !!}
        <!-- <script type="text/javascript" src="http://www.openlayers.org/api/OpenLayers.js">-->
{!! Html::script('http://maps.googleapis.com/maps/api/js') !!}
        <!--<script src="http://maps.google.com/maps/api/js?v=3&sensor=false"></script>-->

@yield('scripts')

        <!-- Your GOOGLE ANALYTICS CODE Below -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>

<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function() {

        pageSetUp();

        var $checkoutForm = $('#checkout-form').validate({
            // Rules for form validation
            rules : {
                fname : {
                    required : true
                },
                lname : {
                    required : true
                },
                email : {
                    required : true,
                    email : true
                },
                phone : {
                    required : true
                },
                country : {
                    required : true
                },
                city : {
                    required : true
                },
                code : {
                    required : true,
                    digits : true
                },
                address : {
                    required : true
                },
                name : {
                    required : true
                },
                card : {
                    required : true,
                    creditcard : true
                },
                cvv : {
                    required : true,
                    digits : true
                },
                month : {
                    required : true
                },
                year : {
                    required : true,
                    digits : true
                }
            },

            // Messages for form validation
            messages : {
                fname : {
                    required : 'Please enter your first name'
                },
                lname : {
                    required : 'Please enter your last name'
                },
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                phone : {
                    required : 'Please enter your phone number'
                },
                country : {
                    required : 'Please select your country'
                },
                city : {
                    required : 'Please enter your city'
                },
                code : {
                    required : 'Please enter code',
                    digits : 'Digits only please'
                },
                address : {
                    required : 'Please enter your full address'
                },
                name : {
                    required : 'Please enter name on your card'
                },
                card : {
                    required : 'Please enter your card number'
                },
                cvv : {
                    required : 'Enter CVV2',
                    digits : 'Digits only'
                },
                month : {
                    required : 'Select month'
                },
                year : {
                    required : 'Enter year',
                    digits : 'Digits only please'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });

        var $registerForm = $("#smart-form-register").validate({

            // Rules for form validation
            rules : {
                username : {
                    required : true
                },
                email : {
                    required : true,
                    email : true
                },
                password : {
                    required : true,
                    minlength : 3,
                    maxlength : 20
                },
                passwordConfirm : {
                    required : true,
                    minlength : 3,
                    maxlength : 20,
                    equalTo : '#password'
                },
                firstname : {
                    required : true
                },
                lastname : {
                    required : true
                },
                gender : {
                    required : true
                },
                terms : {
                    required : true
                }
            },

            // Messages for form validation
            messages : {
                login : {
                    required : 'Please enter your login'
                },
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                password : {
                    required : 'Please enter your password'
                },
                passwordConfirm : {
                    required : 'Please enter your password one more time',
                    equalTo : 'Please enter the same password as above'
                },
                firstname : {
                    required : 'Please select your first name'
                },
                lastname : {
                    required : 'Please select your last name'
                },
                gender : {
                    required : 'Please select your gender'
                },
                terms : {
                    required : 'You must agree with Terms and Conditions'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });

        var $reviewForm = $("#review-form").validate({
            // Rules for form validation
            rules : {
                name : {
                    required : true
                },
                email : {
                    required : true,
                    email : true
                },
                review : {
                    required : true,
                    minlength : 20
                },
                quality : {
                    required : true
                },
                reliability : {
                    required : true
                },
                overall : {
                    required : true
                }
            },

            // Messages for form validation
            messages : {
                name : {
                    required : 'Please enter your name'
                },
                email : {
                    required : 'Please enter your email address',
                    email : '<i class="fa fa-warning"></i><strong>Please enter a VALID email addres</strong>'
                },
                review : {
                    required : 'Please enter your review'
                },
                quality : {
                    required : 'Please rate quality of the product'
                },
                reliability : {
                    required : 'Please rate reliability of the product'
                },
                overall : {
                    required : 'Please rate the product'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });

        var $commentForm = $("#comment-form").validate({
            // Rules for form validation
            rules : {
                name : {
                    required : true
                },
                email : {
                    required : true,
                    email : true
                },
                url : {
                    url : true
                },
                comment : {
                    required : true
                }
            },

            // Messages for form validation
            messages : {
                name : {
                    required : 'Enter your name',
                },
                email : {
                    required : 'Enter your email address',
                    email : 'Enter a VALID email'
                },
                url : {
                    email : 'Enter a VALID url'
                },
                comment : {
                    required : 'Please enter your comment'
                }
            },

            // Ajax form submition
            submitHandler : function(form) {
                $(form).ajaxSubmit({
                    success : function() {
                        $("#comment-form").addClass('submited');
                    }
                });
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });

        var $contactForm = $("#contact-form").validate({
            // Rules for form validation
            rules : {
                name : {
                    required : true
                },
                email : {
                    required : true,
                    email : true
                },
                message : {
                    required : true,
                    minlength : 10
                }
            },

            // Messages for form validation
            messages : {
                name : {
                    required : 'Please enter your name',
                },
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                message : {
                    required : 'Please enter your message'
                }
            },

            // Ajax form submition
            submitHandler : function(form) {
                $(form).ajaxSubmit({
                    success : function() {
                        $("#contact-form").addClass('submited');
                    }
                });
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });

        var $loginForm = $("#login-form").validate({
            // Rules for form validation
            rules : {
                email : {
                    required : true,
                    email : true
                },
                password : {
                    required : true,
                    minlength : 3,
                    maxlength : 20
                }
            },

            // Messages for form validation
            messages : {
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                password : {
                    required : 'Please enter your password'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });

        var $orderForm = $("#order-form").validate({
            // Rules for form validation
            rules : {
                name : {
                    required : true
                },
                email : {
                    required : true,
                    email : true
                },
                phone : {
                    required : true
                },
                interested : {
                    required : true
                },
                budget : {
                    required : true
                }
            },

            // Messages for form validation
            messages : {
                name : {
                    required : 'Please enter your name'
                },
                email : {
                    required : 'Please enter your email address',
                    email : 'Please enter a VALID email address'
                },
                phone : {
                    required : 'Please enter your phone number'
                },
                interested : {
                    required : 'Please select interested service'
                },
                budget : {
                    required : 'Please select your budget'
                }
            },

            // Do not change code below
            errorPlacement : function(error, element) {
                error.insertAfter(element.parent());
            }
        });

        // START AND FINISH DATE
        $('#startdate').datepicker({
            dateFormat : 'dd.mm.yy',
            prevText : '<i class="fa fa-chevron-left"></i>',
            nextText : '<i class="fa fa-chevron-right"></i>',
            onSelect : function(selectedDate) {
                $('#finishdate').datepicker('option', 'minDate', selectedDate);
            }
        });

        $('#finishdate').datepicker({
            dateFormat : 'dd.mm.yy',
            prevText : '<i class="fa fa-chevron-left"></i>',
            nextText : '<i class="fa fa-chevron-right"></i>',
            onSelect : function(selectedDate) {
                $('#startdate').datepicker('option', 'maxDate', selectedDate);
            }
        });



    })

</script>

<script>
    $(document).ready(function() {

        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        pageSetUp();

        /*
         * PAGE RELATED SCRIPTS
         */

        $(".js-status-update a").click(function() {
            var selText = $(this).text();
            var $this = $(this);
            $this.parents('.btn-group').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
            $this.parents('.dropdown-menu').find('li').removeClass('active');
            $this.parent().addClass('active');
        });

        /*
         * TODO: add a way to add more todo's to list
         */

        // initialize sortable
        $(function() {
            $("#sortable1, #sortable2").sortable({
                handle : '.handle',
                connectWith : ".todo",
                update : countTasks
            }).disableSelection();
        });

        // check and uncheck
        $('.todo .checkbox > input[type="checkbox"]').click(function() {
            var $this = $(this).parent().parent().parent();

            if ($(this).prop('checked')) {
                $this.addClass("complete");

                // remove this if you want to undo a check list once checked
                //$(this).attr("disabled", true);
                $(this).parent().hide();

                // once clicked - add class, copy to memory then remove and add to sortable3
                $this.slideUp(500, function() {
                    $this.clone().prependTo("#sortable3").effect("highlight", {}, 800);
                    $this.remove();
                    countTasks();
                });
            } else {
                // insert undo code here...
            }

        })
        // count tasks
        function countTasks() {

            $('.todo-group-title').each(function() {
                var $this = $(this);
                $this.find(".num-of-tasks").text($this.next().find("li").size());
            });

        }

        /*
         * RUN PAGE GRAPHS
         */

        /* TAB 1: UPDATING CHART */
        // For the demo we use generated data, but normally it would be coming from the server

        var data = [], totalPoints = 200, $UpdatingChartColors = $("#updating-chart").css('color');

        function getRandomData() {
            if (data.length > 0)
                data = data.slice(1);

            // do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50;
                var y = prev + Math.random() * 10 - 5;
                if (y < 0)
                    y = 0;
                if (y > 100)
                    y = 100;
                data.push(y);
            }

            // zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i)
                res.push([i, data[i]])
            return res;
        }

        // setup control widget
        var updateInterval = 1500;
        $("#updating-chart").val(updateInterval).change(function() {

            var v = $(this).val();
            if (v && !isNaN(+v)) {
                updateInterval = +v;
                $(this).val("" + updateInterval);
            }

        });

        // setup plot
        var options = {
            yaxis : {
                min : 0,
                max : 100
            },
            xaxis : {
                min : 0,
                max : 100
            },
            colors : [$UpdatingChartColors],
            series : {
                lines : {
                    lineWidth : 1,
                    fill : true,
                    fillColor : {
                        colors : [{
                            opacity : 0.4
                        }, {
                            opacity : 0
                        }]
                    },
                    steps : false

                }
            }
        };

        var plot = $.plot($("#updating-chart"), [getRandomData()], options);

        /* live switch */
        $('input[type="checkbox"]#start_interval').click(function() {
            if ($(this).prop('checked')) {
                $on = true;
                updateInterval = 1500;
                update();
            } else {
                clearInterval(updateInterval);
                $on = false;
            }
        });

        function update() {
            if ($on == true) {
                plot.setData([getRandomData()]);
                plot.draw();
                setTimeout(update, updateInterval);

            } else {
                clearInterval(updateInterval)
            }

        }

        var $on = false;

        /*end updating chart*/

        /* TAB 2: Social Network  */

        $(function() {
            // jQuery Flot Chart
            var twitter = [[1, 27], [2, 34], [3, 51], [4, 48], [5, 55], [6, 65], [7, 61], [8, 70], [9, 65], [10, 75], [11, 57], [12, 59], [13, 62]], facebook = [[1, 25], [2, 31], [3, 45], [4, 37], [5, 38], [6, 40], [7, 47], [8, 55], [9, 43], [10, 50], [11, 47], [12, 39], [13, 47]], data = [{
                label : "Twitter",
                data : twitter,
                lines : {
                    show : true,
                    lineWidth : 1,
                    fill : true,
                    fillColor : {
                        colors : [{
                            opacity : 0.1
                        }, {
                            opacity : 0.13
                        }]
                    }
                },
                points : {
                    show : true
                }
            }, {
                label : "Facebook",
                data : facebook,
                lines : {
                    show : true,
                    lineWidth : 1,
                    fill : true,
                    fillColor : {
                        colors : [{
                            opacity : 0.1
                        }, {
                            opacity : 0.13
                        }]
                    }
                },
                points : {
                    show : true
                }
            }];

            var options = {
                grid : {
                    hoverable : true
                },
                colors : ["#568A89", "#3276B1"],
                tooltip : true,
                tooltipOpts : {
                    //content : "Value <b>$x</b> Value <span>$y</span>",
                    defaultTheme : false
                },
                xaxis : {
                    ticks : [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"], [13, "JAN+1"]]
                },
                yaxes : {

                }
            };

            var plot3 = $.plot($("#statsChart"), data, options);
        });

        // END TAB 2

        // TAB THREE GRAPH //
        /* TAB 3: Revenew  */

        $(function() {

            var trgt = [[1354586000000, 153], [1364587000000, 658], [1374588000000, 198], [1384589000000, 663], [1394590000000, 801], [1404591000000, 1080], [1414592000000, 353], [1424593000000, 749], [1434594000000, 523], [1444595000000, 258], [1454596000000, 688], [1464597000000, 364]], prft = [[1354586000000, 53], [1364587000000, 65], [1374588000000, 98], [1384589000000, 83], [1394590000000, 980], [1404591000000, 808], [1414592000000, 720], [1424593000000, 674], [1434594000000, 23], [1444595000000, 79], [1454596000000, 88], [1464597000000, 36]], sgnups = [[1354586000000, 647], [1364587000000, 435], [1374588000000, 784], [1384589000000, 346], [1394590000000, 487], [1404591000000, 463], [1414592000000, 479], [1424593000000, 236], [1434594000000, 843], [1444595000000, 657], [1454596000000, 241], [1464597000000, 341]], toggles = $("#rev-toggles"), target = $("#flotcontainer");

            var data = [{
                label : "Target Profit",
                data : trgt,
                bars : {
                    show : true,
                    align : "center",
                    barWidth : 30 * 30 * 60 * 1000 * 80
                }
            }, {
                label : "Actual Profit",
                data : prft,
                color : '#3276B1',
                lines : {
                    show : true,
                    lineWidth : 3
                },
                points : {
                    show : true
                }
            }, {
                label : "Actual Signups",
                data : sgnups,
                color : '#71843F',
                lines : {
                    show : true,
                    lineWidth : 1
                },
                points : {
                    show : true
                }
            }]

            var options = {
                grid : {
                    hoverable : true
                },
                tooltip : true,
                tooltipOpts : {
                    //content: '%x - %y',
                    //dateFormat: '%b %y',
                    defaultTheme : false
                },
                xaxis : {
                    mode : "time"
                },
                yaxes : {
                    tickFormatter : function(val, axis) {
                        return "$" + val;
                    },
                    max : 1200
                }

            };

            plot2 = null;

            function plotNow() {
                var d = [];
                toggles.find(':checkbox').each(function() {
                    if ($(this).is(':checked')) {
                        d.push(data[$(this).attr("name").substr(4, 1)]);
                    }
                });
                if (d.length > 0) {
                    if (plot2) {
                        plot2.setData(d);
                        plot2.draw();
                    } else {
                        plot2 = $.plot(target, d, options);
                    }
                }

            };

            toggles.find(':checkbox').on('change', function() {
                plotNow();
            });
            plotNow()

        });

        /*
         * VECTOR MAP
         */

        data_array = {
            "US" : 4977,
            "AU" : 4873,
            "IN" : 3671,
            "BR" : 2476,
            "TR" : 1476,
            "CN" : 146,
            "CA" : 134,
            "BD" : 100
        };

        $('#vector-map').vectorMap({
            map : 'world_mill_en',
            backgroundColor : '#fff',
            regionStyle : {
                initial : {
                    fill : '#c4c4c4'
                },
                hover : {
                    "fill-opacity" : 1
                }
            },
            series : {
                regions : [{
                    values : data_array,
                    scale : ['#85a8b6', '#4d7686'],
                    normalizeFunction : 'polynomial'
                }]
            },
            onRegionLabelShow : function(e, el, code) {
                if ( typeof data_array[code] == 'undefined') {
                    e.preventDefault();
                } else {
                    var countrylbl = data_array[code];
                    el.html(el.html() + ': ' + countrylbl + ' visits');
                }
            }
        });

        /*
         * FULL CALENDAR JS
         */

        if ($("#calendar").length) {
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            var calendar = $('#calendar').fullCalendar({

                editable : true,
                draggable : true,
                selectable : false,
                selectHelper : true,
                unselectAuto : false,
                disableResizing : false,

                header : {
                    left : 'title', //,today
                    center : 'prev, next, today',
                    right : 'month, agendaWeek, agenDay' //month, agendaDay,
                },

                select : function(start, end, allDay) {
                    var title = prompt('Event Title:');
                    if (title) {
                        calendar.fullCalendar('renderEvent', {
                                    title : title,
                                    start : start,
                                    end : end,
                                    allDay : allDay
                                }, true // make the event "stick"
                        );
                    }
                    calendar.fullCalendar('unselect');
                },

                events : [{
                    title : 'All Day Event',
                    start : new Date(y, m, 1),
                    description : 'long description',
                    className : ["event", "bg-color-greenLight"],
                    icon : 'fa-check'
                }, {
                    title : 'Long Event',
                    start : new Date(y, m, d - 5),
                    end : new Date(y, m, d - 2),
                    className : ["event", "bg-color-red"],
                    icon : 'fa-lock'
                }, {
                    id : 999,
                    title : 'Repeating Event',
                    start : new Date(y, m, d - 3, 16, 0),
                    allDay : false,
                    className : ["event", "bg-color-blue"],
                    icon : 'fa-clock-o'
                }, {
                    id : 999,
                    title : 'Repeating Event',
                    start : new Date(y, m, d + 4, 16, 0),
                    allDay : false,
                    className : ["event", "bg-color-blue"],
                    icon : 'fa-clock-o'
                }, {
                    title : 'Meeting',
                    start : new Date(y, m, d, 10, 30),
                    allDay : false,
                    className : ["event", "bg-color-darken"]
                }, {
                    title : 'Lunch',
                    start : new Date(y, m, d, 12, 0),
                    end : new Date(y, m, d, 14, 0),
                    allDay : false,
                    className : ["event", "bg-color-darken"]
                }, {
                    title : 'Birthday Party',
                    start : new Date(y, m, d + 1, 19, 0),
                    end : new Date(y, m, d + 1, 22, 30),
                    allDay : false,
                    className : ["event", "bg-color-darken"]
                }, {
                    title : 'Smartadmin Open Day',
                    start : new Date(y, m, 28),
                    end : new Date(y, m, 29),
                    className : ["event", "bg-color-darken"]
                }],

                eventRender : function(event, element, icon) {
                    if (!event.description == "") {
                        element.find('.fc-event-title').append("<br/><span class='ultra-light'>" + event.description + "</span>");
                    }
                    if (!event.icon == "") {
                        element.find('.fc-event-title').append("<i class='air air-top-right fa " + event.icon + " '></i>");
                    }
                }
            });

        };

        /* hide default buttons */
        $('.fc-header-right, .fc-header-center').hide();

        // calendar prev
        $('#calendar-buttons #btn-prev').click(function() {
            $('.fc-button-prev').click();
            return false;
        });

        // calendar next
        $('#calendar-buttons #btn-next').click(function() {
            $('.fc-button-next').click();
            return false;
        });

        // calendar today
        $('#calendar-buttons #btn-today').click(function() {
            $('.fc-button-today').click();
            return false;
        });

        // calendar month
        $('#mt').click(function() {
            $('#calendar').fullCalendar('changeView', 'month');
        });

        // calendar agenda week
        $('#ag').click(function() {
            $('#calendar').fullCalendar('changeView', 'agendaWeek');
        });

        // calendar agenda day
        $('#td').click(function() {
            $('#calendar').fullCalendar('changeView', 'agendaDay');
        });

        /*
         * CHAT
         */

        $.filter_input = $('#filter-chat-list');
        $.chat_users_container = $('#chat-container > .chat-list-body')
        $.chat_users = $('#chat-users')
        $.chat_list_btn = $('#chat-container > .chat-list-open-close');
        $.chat_body = $('#chat-body');

        /*
         * LIST FILTER (CHAT)
         */

        // custom css expression for a case-insensitive contains()
        jQuery.expr[':'].Contains = function(a, i, m) {
            return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
        };

        function listFilter(list) {// header is any element, list is an unordered list
            // create and add the filter form to the header

            $.filter_input.change(function() {
                var filter = $(this).val();
                if (filter) {
                    // this finds all links in a list that contain the input,
                    // and hide the ones not containing the input while showing the ones that do
                    $.chat_users.find("a:not(:Contains(" + filter + "))").parent().slideUp();
                    $.chat_users.find("a:Contains(" + filter + ")").parent().slideDown();
                } else {
                    $.chat_users.find("li").slideDown();
                }
                return false;
            }).keyup(function() {
                // fire the above change event after every letter
                $(this).change();

            });

        }

        // on dom ready
        listFilter($.chat_users);

        // open chat list
        $.chat_list_btn.click(function() {
            $(this).parent('#chat-container').toggleClass('open');
        })

        $.chat_body.animate({
            scrollTop : $.chat_body[0].scrollHeight
        }, 500);

    });

</script>

</body>

</html>