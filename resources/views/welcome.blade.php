<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <title>Rádio Desopila - Página Inicial</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="imgR/icons/faviconRA.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap"
        rel="stylesheet">

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
            <a href="/" class="navbar-brand text-secondary">
                <h1 class="display-4 text-uppercase">Rádio Desopila</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0 pr-3 border-right">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/login" class="nav-item nav-link">Login</a>
                    <a href="/register" class="nav-item nav-link">Cadastro</a>
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


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 px-0" style="margin-bottom: 90px;">
        <div class="row mx-0 align-items-center">
            <div class="col-lg-6 px-md-5 text-center text-lg-left">
                <h1 class="display-2 text-uppercase mb-3">A melhor emissora de Rádio do Campus Caicó</h1>
                <!-- <a href="" class="btn btn-dark text-uppercase mt-1 py-3 px-5">Learn More</a> -->
            </div>
            <div class="col-lg-6 px-0 text-right">
                <img class="img-fluid mt-5 mt-lg-0" src="img/SquareRadio.jpeg" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img class="img-fluid mb-4 mb-lg-0" src="img/RadInter.jpeg" alt="">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-4 text-uppercase mb-4">Sintonize com a gente!</h1>
                    <h5 class="text-uppercase text-primary mb-3"></h5>
                    <p class="mb-4">Estamos desde de algum tempo tentando alegrando os seus intervalos e sua vida, mais precisamente desde do dia que fomos destruidos</p>
                    <a href="" class="btn btn-primary text-uppercase py-3 px-5"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Contact Start -->  
    <div class="container-fluid py-5 px-0">
        <div class="row mt-5 mx-0">
            <div class="col-12 px-0" style="height: 500px;">
                <div class="position-relative h-100">
                    <iframe class="position-relative w-100 h-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5987082937395!2d-37.071242984788334!3d-6.4455398953368555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7afec3b2216fb6d%3A0xfd0a7ee7ca8257a9!2sIFRN%20Campus%20Caic%C3%B3!5e0!3m2!1spt-BR!2sbr!4v1660653009098!5m2!1spt-BR!2sbr"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                   
                </div>
            </div>
        </div>          
        <div class="row mx-0 justify-content-center" style="margin-top: -200px;">
        <div class="col-lg-6 col-md-8 col-sm-10 px-0">
            <div class="contact-form bg-white rounded p-5">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" action="https://api.staticforms.xyz/submit" method="POST">
                    <input type="hidden" name="redirectTo" value="welcome.blade.php" />
					<input type="hidden" name="accessKey" value="15e2b8b3-fb82-4285-93ec-aef88b9e346d">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="control-group">
                                <input type="text" class="form-control bg-light border-0 p-4" id="name" name="name" placeholder="Nome" required="required"/>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="control-group">
                                <input type="email" class="form-control bg-light border-0 p-4" id="email" name="email" placeholder="Email" required="required"/>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control bg-light border-0 py-3 px-4" rows="5" id="message" name="message" placeholder="Messagem" required="required"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Enviar
							</button>
						</div>
					</div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- Contact End -->


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
                    <a class="text-white-50 mb-2" href="/login"><i class="fa fa-angle-right text-white mr-2"></i>Login</a>
                    <a class="text-white-50 mb-2" href=""><i class="fa fa-angle-right text-white mr-2"></i>Cadastro</a>
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
                <!-- <i>Lorem sit sed elitr sed kasd et</i> -->
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