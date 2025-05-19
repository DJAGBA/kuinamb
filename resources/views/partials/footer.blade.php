<footer id="footer">
  <div class="container">
    <div class="footer-menu-list">
      <div class="row d-flex flex-wrap justify-content-between">
        <div class="col-lg-3 col-md-6 col-sm-6">
          {{-- <div class="footer-menu">
            <h5 class="widget-title">Ultras</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item"><a href="{{ url('about') }}">About us</a></li>
              <li class="menu-item"><a href="#">Conditions</a></li>
              <li class="menu-item"><a href="{{ url('blog') }}">Our Journals</a></li>
              <li class="menu-item"><a href="#">Careers</a></li>
              <li class="menu-item"><a href="#">Affiliate Programme</a></li>
              <li class="menu-item"><a href="#">Ultras Press</a></li>
            </ul>
          </div>
        </div> --}}
        <!-- Tu peux continuer avec les autres colonnes du footer -->
      </div>
    </div>
  </div>
</footer>
<footer id="footer">
  <div class="container">
    <div class="footer-menu-list">
      <div class="row d-flex flex-wrap justify-content-between">

        <!-- Première colonne -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Ultras</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item"><a href="{{ url('about') }}">À propos</a></li>
              <li class="menu-item"><a href="#">Conditions</a></li>
              <li class="menu-item"><a href="{{ url('blog') }}">Nos Articles</a></li>
              <li class="menu-item"><a href="#">Carrières</a></li>
              <li class="menu-item"><a href="#">Programme d'affiliation</a></li>
              <li class="menu-item"><a href="#">Presse Ultras</a></li>
            </ul>
          </div>
        </div>

        <!-- Deuxième colonne -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Service Client</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item"><a href="{{ url('faqs') }}">FAQ</a></li>
              <li class="menu-item"><a href="{{ url('contact') }}">Contact</a></li>
              <li class="menu-item"><a href="#">Politique de confidentialité</a></li>
              <li class="menu-item"><a href="#">Retours & Remboursements</a></li>
              <li class="menu-item"><a href="#">Cookies</a></li>
              <li class="menu-item"><a href="#">Livraison</a></li>
            </ul>
          </div>
        </div>

        <!-- Troisième colonne -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Nous contacter</h5>
            <p>Une question ou suggestion ? <a href="mailto:ourservices@ultras.com" class="email">ourservices@ultras.com</a></p>
            <p>Besoin d’aide ? Appelez-nous : <br><strong>+57 444 11 00 35</strong></p>
          </div>
        </div>

        <!-- Quatrième colonne -->
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="footer-menu">
            <h5 class="widget-title">Forever 2018</h5>
            <p>Cras mattis sit ornare in metus eu amet adipiscing enim. Ullamcorper in orci, ultrices integer eget arcu. Consectetur leo dignissim lacus, lacus sagittis dictumst.</p>
            <div class="social-links">
              <ul class="d-flex list-unstyled">
                <li><a href="#"><i class="icon icon-facebook"></i></a></li>
                <li><a href="#"><i class="icon icon-twitter"></i></a></li>
                <li><a href="#"><i class="icon icon-youtube-play"></i></a></li>
                <li><a href="#"><i class="icon icon-behance-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <hr>
</footer>

<!-- Footer bas -->
<div id="footer-bottom">
  <div class="container">
    <div class="d-flex align-items-center flex-wrap justify-content-between">
      <div class="copyright">
        <p>&copy; {{ date('Y') }} Freebies par <a href="https://templatesjungle.com/">Templates Jungle</a> distribué par <a href="https://themewagon.com">ThemeWagon</a></p>
      </div>
      <div class="payment-method">
        <p>Méthodes de paiement :</p>
        <div class="card-wrap">
          <img src="{{ asset('images/visa-icon.jpg') }}" alt="visa">
          <img src="{{ asset('images/mastercard.png') }}" alt="mastercard">
          <img src="{{ asset('images/american-express.jpg') }}" alt="american express">
        </div>
      </div>
    </div>
  </div>
</div>
