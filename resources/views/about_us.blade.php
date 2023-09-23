@extends('layouts.app')

@section('content')

  <!-- Featured Section Start -->
  <section class="featured-bg p-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h2 class="section-title">À propos de nous</h2>
            {{-- <p>Duis aute irure dolor in reprehed in volupted velit esse dolore</p> --}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-6 col-xs-12">
          <img class="img-fluid" src="https://lh3.googleusercontent.com/p/AF1QipMdx6h4fV-DRRJVg7jFBBtG2KLTMZ0J4KgnwYc=s680-w680-h510" alt="">
        </div>


        <div class="col-md-12 col-lg-6 col-xs-12">
          <div class="container ">
            <h1 class=" intro-title">Découvrez Notre Agence de Location de Voiture à Berrechid, Maroc</h1>
            <p class="lead  intro-sub">Votre partenaire de confiance pour tous vos besoins de mobilité.</p>
        
            <div id="flotte" class="mt-3">
                <h2><i class="lni-medall"></i>Notre Flotte de Voitures</h2>
                <p>Nous proposons une vaste flotte de véhicules, allant des voitures compactes et économiques aux SUV spacieux, pour répondre à tous vos besoins de déplacement. Toutes nos voitures sont bien entretenues et régulièrement vérifiées pour garantir votre sécurité et votre confort pendant votre voyage.</p>
            </div>
        
            <div id="tarifs" class="mt-3">
                <h2> <i class="lni-medall"></i> Des Tarifs Compétitifs</h2>
                <p>Chez notre agence, nous croyons en la transparence et en l'honnêteté. Nos tarifs de location de voitures sont compétitifs et sans frais cachés. Vous saurez exactement ce que vous payez dès le début de votre réservation.</p>
            </div>
         </div>
        </div>

        <div class="col-lg- 10 mt-5 mx-auto">
          <div id="contact" class="mt-3">
            <h2>  <i class="lni-medall"></i> Contactez-nous</h2>
            <p>N'hésitez pas à nous contacter pour toute demande de renseignements ou pour réserver votre voiture dès aujourd'hui. Chez notre agence de location de voiture à Berrechid, votre satisfaction est notre priorité numéro un.</p>
        </div>
        </div>

       {{-- <div class="col-md-12 col-lg-6 col-xs-12">
          <h2 class="intro-title">Who We Are</h2>
          <h3 class="title-sub">Best and Award Winning <br>Real Estate Business in USA 2019</h3>
          <p class="intro-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum, doloremque quaerat sit tempora eius est reiciendis accusamus magnam quae. Explicabo dolore officia, iure a ullam aliquam nemo excepturi, repellat. uod ut delectus ad tempora.
          </p>
          <div class="row">
            <div class="col-lg-6 col-md-12 col-xs-12">
              <div class="featured-item">
                <div class="icon">
                  <i class="lni-medall"></i>
                </div>
                <h3><a href="#">Cretified Company</a></h3>
                <div class="featured-content">
                  <p>We'll generate a sitemap for your site, submit it to search engine is and track crawler access.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12">
              <div class="featured-item">
                <div class="icon">
                  <i class="lni-thumbs-up"></i>
                </div>
                <h3><a href="#">Highly experienced</a></h3>
                <div class="featured-content">
                  <p>We'll generate a sitemap for your site, submit it to search engine is and track crawler access.</p>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>
 <!-- Featured Section End -->




    <!-- Services Section Start -->
    <section class="services section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title">Nos Valeurs</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lni-bolt-alt"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Service Client Rapide et Exceptionnel </a></h3>
                <p>Notre priorité est de vous offrir un service client exceptionnel et rapide. Nous sommes là pour répondre à vos besoins en un clin d'œil</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.4s">
              <div class="icon">
                <i class="lni-leaf"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Transparence Totale</a></h3>
                <p> Chez nous, tout est clair. Vous ne trouverez pas de frais cachés. Notre transparence signifie que vous savez exactement ce que vous payez, sans surprises.</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni-medall"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Flotte de Qualité</a></h3>
                <p>Notre flotte de voitures est régulièrement entretenue pour votre sécurité et votre satisfaction. Des voitures propres et bien entretenues sont prêtes à être louées à tout moment.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->



<!-- Map Section Start -->
<section id="google-map-area my-5">
  <div class="container-fluid">
    <div class="row">
        <iframe class="col-12" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13342.441397606752!2d-7.5856643!3d33.2766919!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda63dcaa2953921%3A0x94c8cc49218f7837!2sAnis%20Auto%20Location%20de%20voitures!5e0!3m2!1sen!2sma!4v1695430084706!5m2!1sen!2sma" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
    </div>
  </div>
</section>
<!-- Map Section End -->
 
@endsection