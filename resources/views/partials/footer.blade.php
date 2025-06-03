
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
            <h5 class="widget-title">e-shop</h5>
            <ul class="menu-list list-unstyled">
              <li class="menu-item"><a href="{{ route('about') }}">À propos</a></li>
              <li class="menu-item"><a href="#">Conditions</a></li>
              <li class="menu-item"><a href="{{ route('blog') }}">Nos Articles</a></li>
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
              <li class="menu-item"><a href="">FAQ</a></li>
              <li class="menu-item"><a href="{{ route('contact') }}">Contact</a></li>
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
            <p>Une question ou suggestion ? <a href="mailto:ourservices@ultras.com" class="email">djagbaveronique@gmail.com</a></p>
            <p>Besoin d’aide ? Appelez-nous : <br><strong>+228 70 20 34 10</strong></p>
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

{{-- <!-- Footer bas -->
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

  <footer id="footer">
      <div class="container">
        <div class="footer-menu-list">
          <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Ultras</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="about.html">About us</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Conditions </a>
                  </li>
                  <li class="menu-item">
                    <a href="blog.html">Our Journals</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Careers</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Affiliate Programme</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Ultras Press</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Customer Service</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="faqs.html">FAQ</a>
                  </li>
                  <li class="menu-item">
                    <a href="contact.html">Contact</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Privacy Policy</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Returns & Refunds</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Cookie Guidelines</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Delivery Information</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Contact Us</h5>
                <p>Do you have any questions or suggestions? <a href="#" class="email">ourservices@ultras.com</a>
                </p>
                <p>Do you need assistance? Give us a call. <br>
                  <strong>+57 444 11 00 35</strong>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Forever 2018</h5>
                <p>Cras mattis sit ornare in metus eu amet adipiscing enim. Ullamcorper in orci, ultrices integer eget arcu. Consectetur leo dignissim lacus, lacus sagittis dictumst.</p>
                <div class="social-links">
                  <ul class="d-flex list-unstyled">
                    <li>
                      <a href="#">
                        <i class="icon icon-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-youtube-play"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="icon icon-behance-square"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </footer>

    <div id="footer-bottom">
      <div class="container">
        <div class="d-flex align-items-center flex-wrap justify-content-between">
          <div class="copyright">
            <p>Freebies by <a href="https://templatesjungle.com/">Templates Jungle</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
            </p>
          </div>
          <div class="payment-method">
            <p>Payment options :</p>
            <div class="card-wrap">
              <img src="images/visa-icon.jpg" alt="visa">
              <img src="images/mastercard.png" alt="mastercard">
              <img src="images/american-express.jpg" alt="american-express">
            </div>
          </div>
        </div>
      </div>
    </div>
>>>>>>> dda8ac4ee198f86dc43f57f9fa57777b11523c12 --}}
