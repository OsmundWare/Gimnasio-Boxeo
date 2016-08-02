@extends('inicio.librerias')
@section('content')
    <div id="content" class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 hidden-xs hidden-sm">
                <div id="myCarousel-2" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel-2" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel-2" data-slide-to="1" class=""></li>
                        <li data-target="#myCarousel-2" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <!-- Slide 1 -->
                        <div class="item active">
                            {!! Html::image('img/eula/inicio.jpg',"SmartAdmin") !!}
                            <div class="carousel-caption caption-right">
                            </div>
                        </div>
                        <!-- Slide 2 -->
                        <div class="item">
                            {!! Html::image('img/eula/Udec.jpg',"SmartAdmin") !!}
                            <div class="carousel-caption caption-left">
                            </div>
                        </div>
                        <!-- Slide 3 -->
                        <div class="item">
                            <img src="img/eula/inicio.jpg" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
                    <a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                <div class="well no-padding">
                    {!!Form::open(['route'=>'login.store', 'method'=>'POST','class'=>'smart-form client-form', 'id'=>'login-form', 'action'=>'']) !!}

                    <header>
                        Login
                    </header>

                    <fieldset>

                        <section>
                            <label class="label">Nombre</label>
                            <label class="input"> <i class="icon-append fa fa-user"></i>
                                {!! form::text('nombre_usuario',null,['class' => 'form-control']) !!}
                                <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
                        </section>

                        <section>
                            <label class="label">clave</label>
                            <label class="input"> <i class="icon-append fa fa-user"></i>
                                {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contrase?a'])!!}
                                <b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
                        </section>


                        <section>
                            <label class="checkbox">
                                <input type="checkbox" name="remember" checked="">
                                <i></i>Stay signed in</label>
                        </section>
                    </fieldset>
                    <footer>
                        <button type="submit" class="btn btn-primary">
                            Sign in
                        </button>
                    </footer>
                    {!! Form::close() !!}

                </div>

                <h5 class="text-center"> - Or sign in using -</h5>

                <ul class="list-inline text-center">
                    <li>
                        <a href="javascript:void(0);" class="btn btn-primary btn-circle"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="btn btn-info btn-circle"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="btn btn-warning btn-circle"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>

            </div>
        </div>
    </div>

@endsection

@section('script')

    runAllForms();

    $(function() {
    // Validation
    $("#login-form").validate({
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
    });

@stop
