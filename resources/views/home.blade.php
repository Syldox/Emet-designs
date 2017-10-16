
@extends('layouts.main')
@section('title', '| Home')

@section('content')


    <section id="showcase">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="showcase-left">
              <!-- <img src="img/image1.jpg"> -->
              <img src="img/corsair.png">
          
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="showcase-right">
              <h1>Vous cherchez un développeur web ?</h1>
              <h2>Ça tombe bien! Pour mieux vous comprendre et mieux vous servir...</h2>
                <p>Ensemble, nous prendrons donc le temps nécessaire d'analyse de vos besoins. Parce que votre entreprise est unique, votre site internet doit l'être également.
                  En me confiant la création de votre site internet, vous aurez donc l'assurance d'un véritable support de communication qui vous aidera à booster la réputation de votre entreprise..
                </p>
            </div>
            <br>
            <a class="btn btn-default btn-lg showcase-btn">Prendre Rendez-Vous</a>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonial">
      <div class="container">
      <h1><b>Votre Site Internet Sur-Mesure</b></h1>
        <p>Un site internet, c’est un formidable outil de communication. A condition qu'il témoigne du professionnalisme de votre entreprise. Voilà pourquoi le développement de votre site web nécessite un travail en amont, pour bien cerner l'univers de votre structure et l’image que vous souhaitez défendre.

</p>
        <p class="customer">- Emet-Designs</p>
      </div>
    </section>

    <section id="info1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="info-left" style="margin-left: -40px;;">
              <!-- <img src="img/msi.png"> -->
              <img src="img/responsive.jpg" class="design">
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="info-right">
            <h2>Emet-Designs Société de développement Web</h2>
            <p class="well text-muted">
            Emet-Designs (Mali) Pvt. Ltd. est une société de développement web basée au Mali, Bamako.
            Nous acceptons les clients partout dans le monde qui sont prêts à externaliser les besoins de développement Web tels que le développement d'applications logicielles,
            conception et développement d'applications mobiles, optimisation de moteur de recherche, conception Web sensible et hébergement Web.
            Notre portefeuille riche justifie le fait que nous fonctionnons comme une entreprise de développement web offshore de classe mondiale.
            Nous concentrons les besoins de nos clients pour fournir une satisfaction à 100%. Nos services s'appuient sur l'expertise approfondie du secteur dans l'industrie,
            sur l'expertise technique des principales technologies Internet et sur un modèle de livraison de solutions global rentable.</p>
              <br>
              <a href="/portfolio" class="btn btn-default btn-lg">Savoir Plus</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr>
    <section id="info2">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="info-left">
            <img src="img/dev.png" class="dev">
              <h2>Bienvenu!</h2>
              <p>
                  Je suis analyste-programmeur et diplômé d'une licence en programation Appliqué suivi d'une licence professionnelle informatique.
                  Je travaille actuellement en tant que développeur freelance sous mon entreprise nomé (Emet-Designs), situé à Niarela.
                  Je suis également le pilote du processus 'Systèmes informatiques'.
                  Ce portfolio a pour but de présenter les différents projets sur lesquels j'ai eu travaillé ces dernières années.
                  Vous pouvez également visualiser mon CV et le télécharger.
                  Si vous avez une question, ou si vous avez simplement besoin d'un renseignement, vous pouvez me contacter en cliquant ici: Contact.

              </p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="info-right">
              <h2>Vous Voulez un Site-Web ?</h2>
              <p>
              Vous tombe bien ! Je suis passionné par le web.
              Nous offrons une large gamme de produits et Solutions.
              Si mon profil vous intéresse n'hésitez pas à Nous contacter ou regardez mes réalisations →
              
              </p>
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

    

    @endsection