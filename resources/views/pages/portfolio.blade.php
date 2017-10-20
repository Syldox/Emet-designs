@section('title', '| Portfolio')

<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/contact/contact.css">
    <link rel="stylesheet" href="../../../css/font-awesome.css">
    <link rel="stylesheet" href="../../css/style.css">
    <script src="js/scrollreveal.min.js"></script>
    {{--<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>--}}
    @yield('stylesheets')
    <link rel="shortcut icon"  href="{{ asset('../img/emet.png') }}">
    <title>
        Emet @yield('title')

    </title>
  </head>
  <body id="page-top">
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <a class="navbar-brand" href="/"><img id="logo" class="box-shadow" src="img/logo/emet-designs.jpg" alt=""></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Home</a></li>
            <!-- <li><a href="#showcase">Website</a></li> -->
            <li><a href="#info1"> Compétences</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </body>

<div class="col-md-8 col-md-offset-2 text-center" style="margin-bottom:100px" data-scrollreveal="enter top and move 100px, wait 0.3s" data-scrollreveal-initialized="true" data-scrollreveal-complete="true">
    <h1>Qui Je Suis ?</h1>
</div>

<!-- <div class="container-fluid">
    <hr>
</div> -->

<section id="info2">
<div class="container">
  <div class="row">
    <div class="col-md-6 col-sm-6">
      <div class="info-left">
      <img src="img/isma.jpg" class="isma img-responsive">
        <h2>A propo de Moi ?</h2>
        <p class="well text-muted">
            Je suis analyste-programmeur et diplômé d'une licence en programation Appliqué suivi d'une licence professionnelle informatique.
            Je travaille actuellement en tant que développeur freelance sous mon entreprise nomé (Emet-Designs), situé à Niarela.
            Je suis également le pilote du processus 'Systèmes informatiques'.
            Ce portfolio a pour but de présenter les différents projets sur lesquels j'ai eu à travaillé ces dernières années.
            Si vous avez une question, ou si vous avez simplement besoin d'un renseignement, vous pouvez me contacter en cliquant ici: Contact.

        </p>
      </div>
    </div>
    <div class="col-md-6 col-sm-6">
      <div class="info-right">
        <h2>Ce Quoi Emet?</h2>
        <p class="well text-muted">Emet-Designs Pvt. Ltd est une société de développement web et de développement de logiciels à service complet certifiée , basée à Bamako/Niaréla, au Mali.</p>
        {{--  <img src="img/responsive2.png" class="design img-responsive" style="margin-left: 30px;">  --}}
         <img src="img/main-img.png" class="img-responsive">
      </div>
    </div>
  </div>
</div>
</section>

<section id="contact" class="info-left">
<div class="container">
  <div class="row">
    <div class="col-md-5 col-sm-5">
    <form action="{{url('contact')}}" method="POST">
    {{csrf_field()}}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">
                    Email Address</label>
                <div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
</span>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" name="email"/></div>
            </div>
            <div class="form-group">
                <label for="subject">
                    Subject</label>
                <select id="subject" name="subject" class="form-control" required="required">
                    <option value="na" selected="">Choose One:</option>
                    <option value="service">General Customer Service</option>
                    <option value="suggestions">Suggestions</option>
                    <option value="product">Product Support</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">
                    Message</label>
                <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                          placeholder="Message"></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-warning pull-right" id="btnContactUs" style="background-color: #03080f; border-color: #d1d1d1;">
                Send Message</button>
        </div>
    </div>
</form>
    </div>
    <div class="col-md-7 col-sm-7">

    </div>
  </div>
</div>
</section>



<section>
<section id="SECTION_1" class="showcase-btn">
	<div id="DIV_2">
		<h2 id="H2_3">  
            Les Technologies Que Nous Utilisons pour nos services de développement d'applications Web / mobiles
        </h2>
		<section class="showcase-btn"
        <div class="container">

        <!-- <h1 style="margin-bottom:100px;"><b>Votre Site Internet Sur-Mesure</b></h1> -->
          <img src="img/stacks.jpg" class="img-responsive" alt="" style="width: 1380px; margin-top: 45px;">
          <!-- <p class="customer" style="margin-top: 35px;">- Emet-Designs</p> -->
        </div>
      </section>
</section>


<!-- <section class="footer info-right" id="info1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4  col-md-4 col-sm-4">
                <div class="container">
                <div class="row">
                <h2>Mes Compétences<a href="http://gridgum.com/author/agez" target="_blank">  </a></h2>
                     
                        <div class="progress skill-bar ">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                <span class="skill">HTML <i class="val">100%</i></span>
                            </div>
                        </div>
                            
                        <div class="progress skill-bar">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" >
                                <span class="skill">CSS<i class="val">90%</i></span>
                            </div>
                        </div>
                        
                        <div class="progress skill-bar">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <span class="skill">JavaScript<i class="val">75%</i></span>
                            </div>
                        </div>  
                        
                        <div class="progress skill-bar">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                                <span class="skill">Photoshop<i class="val">55%</i></span>
                            </div>
                        </div>  
                        
                </div>
            </div>
            </div>

        </div>
    </div>


</section> -->


</section>


<footer class="showcase-btn">
<p class="text-center">Emet-Designs Copyright &copy; 2017</p>
</footer>

<!-- <section class="footer" style="margin-top: 100px"> -->
<section class="footer">
<div class="container">
  <div class="row">
      <div class="col-lg-4  col-md-4 col-sm-4">
          <div class="footer_dv info-left">
              <h4>Aide Et Support</h4>
              <ul>

                  <li><a class="footer_text" href="#">Offres mobile</a>  ......      <a class="footer_text" href="#">Offres fixe</a></li>
                  <li><a class="footer_text" href="#">Services mobile</a>  ......      <a class="footer_text" href="#">La 4G</a></li>
                  <li><a class="footer_text" href="#">Téléphones mobile</a>  ......      <a class="footer_text" href="#">C'est quoi?</a></li>
                  <li><a class="footer_text" href="#">Internet à domicile</a>  ......      <a class="footer_text" href="#">Comment en profiter?</a></li>
                  <li><a class="footer_text" href="#">Internet mobile</a>  ......      <a class="footer_text" href="#">Forfaits appels Orange</a></li>
                  <li><a class="footer_text" href="#">Promotion Séwa</a>  ......      <a class="footer_text" href="#">Service</a></li>

              </ul>
          </div>
      </div>
      <div class="col-lg-4  col-md-4 col-sm-4">
          <div class="footer_dv showcase-btn">
              <h4 style="margin-left: 65px;">Localiser / Emet-Designs</h4>
              <ul>
                  <a href="/map"><img src="img/emet-marker.png" alt="hotline" height="100px" style="margin-left: 140px"></a>
                  <p class="footer_text">Pour Nous Localiser Acceder au Map ........</p>

              </ul>
          </div>
      </div>


        <div class="col-lg-4  col-md-4 col-sm-4">
            <div class="footer_dv info-right">
                <h4 style="margin-left: 100px;">Contactez Nous</h4>
                <a href="/contact"><img src="img/corp-help.png" alt="hotline" height="100px" style="margin-left: 140px;"></a>
                <p class="footer_text">Aide Et Support Disponible  24/24 Hotline ........</p>
                {{--<p>Orange Mali Aci 2000 ........</p>--}}
                {{--<p>Bamako, Mali P: +223 44 99 99 03</p>--}}
            </div>
        </div>

  </div>
</div>


</section>






<script src="../../../js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="../../../js/bootstrap.min.js"></script>
<script src="../../../js/script.js"></script>
<!-- @yield('scripts') -->



@include('includes.scroll')
