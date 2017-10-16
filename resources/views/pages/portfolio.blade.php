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
        <link rel="shortcut icon"  href="{{ asset('images/orange-ico.jpg') }}">
    <title>
        Blog @yield('title')

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
            <!-- <li><a href="#showcase">Mes réalisations</a></li> -->
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
      <img src="img/isma.jpg" class="isma">
        <h2>A propo de Moi!</h2>
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
        <img src="img/responsive2.png" class="design" style="margin-left: 30px;">
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
            <button type="submit" class="btn btn-warning pull-right" id="btnContactUs" style="background-color: #03080f">
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



</section>


@include('partials.footer')


