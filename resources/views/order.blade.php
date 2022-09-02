<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <title>Rádio Desopila - Cadastro de Música</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="imgR/icons/faviconRA.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-white position-relative">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="index.html" class="navbar-brand text-secondary">
                <h1 class="display-4 text-uppercase">Rádio Desopila - {{auth()->user()->name}}</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0 pr-3 border-right">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">Meus pedidos</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                        <button type="submit" class="nav-item nav-link">Sair</button>
                    </form>
                    <div class="nav-item dropdown">
                    </div>
                </div>
                <div class="d-none d-lg-flex align-items-center pl-4">
                    <i class="fa fa-2x fa-mobile-alt text-primary mr-3"></i>
                    <div>
                        <h6 class="text-body text-uppercase mb-1"><small>Contato</small></h6>
                        <h6 class="m-0">+55 84 99918-4012</h6>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
    
    @include('flash-message')


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 px-0" style="margin-bottom: 90px;">
        <div class="row mx-0 align-items-center">
            <div class="col-lg-6 px-md-5 text-center text-lg-left">
                <h1 class="display-2 text-uppercase mb-3" >Envie sua música predileta!</h1>
            </div>
            <div class="col-lg-6 px-0 text-right">
                <img class="img-fluid mt-5 mt-lg-0" src="imgR/RadOrder.jpeg" width="500px">
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Register Order Start -->
    <div class="container-fluid py-5 px-0">   
        <div class="row mx-0 justify-content-center" style="margin-top: -200px;">
        <div class="col-lg-6 col-md-8 col-sm-10 px-0">
            <div class="contact-form bg-white rounded p-5">
                <div id="success">

                </div>

                <form action="{{url('/music/cadastrar')}}" id="contactForm" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="control-group">
                                {!!
                                    Form::text('mus_nome', null, array(
                                        'class' => 'form-control bg-light border-0 p-4',
                                        'placeholder' => 'Nome da música',
                                        'id' => 'nomeMusic',
                                        'required' => 'true'
                                    ))    
                                !!}
                            <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="control-group">
                                {!!
                                    Form::text('mus_link', null, array(
                                        'class' => 'form-control bg-light border-0 p-4',
                                        'placeholder' => 'URL da música',
                                        'id' => 'linkMusic',
                                        'required' => 'true'
                                    ))    
                                !!}
                            <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    {!! Form::label('generos-musicais', 'Gêneros Musicais', array('style' => 'font-family: "fontelogo", sans-serif; font-weight: bold')) !!}
                        {!! Form::select('mus_genero', array(
                            'rock' => 'Rock',
                            'hiphop' => 'Hip Hop',
                            'funk' => 'Funk',
                            'gospel' => 'Gospel',
                            'eletronica' => 'Eletrônica',
                            'pagode' => 'Pagode',
                            'forro' => 'Forró',
                            'sertanejo' => 'Sertanejo',
                            'samba' => 'Samba',
                            'reggae' => 'Reggae',
                            'classica' => 'Clássica',
                            'jazz' => 'Jazz',
                            'mpb' => 'Mpb',
                            'pop' => 'Pop',
                            'reggaetrap' => 'Reggae Trap',
                            'country' => 'Country',
                            'blues' => 'Blues',
                            'axe' => 'Axé',
                        )) !!}
                        <p class="help-block text-danger"></p>
                        <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="cadastrar">
								Cadastrar
							</button>
						</div>
					</div>
                </form>
            </div>
        </div>
    </div>
</div>


    <!-- Register Order End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n2 text-white display-4">Rádio Desopila</h1>
                </a>
                <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <h6 class="text-uppercase text-white py-2">Siga-nos</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-white mb-4">Entre em contato</h4>
                <p><i class="fa fa-map-marker-alt text-white mr-2"></i>IFRN-CAMPUS Caicó</p>
                <p><i class="fa fa-phone-alt text-white mr-2"></i>+55 84 99918-4012</p>
                <p><i class="fa fa-envelope text-white mr-2"></i>radiodesopila@ifrn.edu.br</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-white mb-4">Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="/"><i class="fa fa-angle-right text-white mr-2"></i>Home</a>
                    <a class="text-white-50 mb-2" href="/login"><i class="fa fa-angle-right text-white mr-2"></i>login</a>
                    <a class="text-white-50 mb-2" href=""><i class="fa fa-angle-right text-white mr-2"></i>Registre-se</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <!-- <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
                <p class="mb-4">Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed
                    kasd et</p> -->
                    
                <div class="w-100 mb-3">
                    <div class="input-group">
                        <!-- <input type="text" class="form-control border-light" style="padding: 25px;"
                            placeholder="Email"> -->
                        <div class="input-group-append">
                            <!-- <button class="btn btn-primary text-uppercase px-3">Registre-se</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="mb-2 text-center text-white-50">&copy; <a href="/">Rádio Desopila</a>. Todos os direitos reservados.</p>
        <p class="m-0 text-center text-white-50">Designed by <a href="https://carlosqueiroz.netlify.app/">Carlos Queiroz</a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>