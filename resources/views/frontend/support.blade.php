@extends('layouts.frontend')

@section('page-title', 'About-us')


@section('content')

  <div class="site-breadcrumb">
    <div class="container wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
      <h2 class="breadcrumb-title">Support</h2>
      <ul class="breadcrumb-menu">
        <li><a href="{{ route('home') }}"><i class="far fa-home"></i> Home</a></li>
        <li class="active">Support</li>
      </ul>
    </div>
  </div>


  <div class="contact-area py-120">
    <div class="container">
      <div class="contact-wrapper">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-content wow animate__animated animate__fadeInUp" data-wow-duration="1s"
              data-wow-delay=".25s">
              <div class="contact-info">
                <div class="contact-info-icon">
                  <i class="fal fa-map-marker-alt"></i>
                </div>
                <div class="contact-info-content">
                  <h5>Office Address</h5>
                  <p>25/B Milford, New York, USA</p>
                </div>
              </div>
              <div class="contact-info">
                <div class="contact-info-icon">
                  <i class="fal fa-phone"></i>
                </div>
                <div class="contact-info-content">
                  <h5>Call Us</h5>
                  <p>+2 123 654 7898</p>
                </div>
              </div>
              <div class="contact-info">
                <div class="contact-info-icon">
                  <i class="fal fa-envelope"></i>
                </div>
                <div class="contact-info-content">
                  <h5>Email Us</h5>
                  <p><a href="https://live.themewild.com/cdn-cgi/l/email-protection" class="__cf_email__"
                      data-cfemail="1a73747c755a7f627b776a767f34797577">[email&#160;protected]</a></p>
                </div>
              </div>
              <div class="contact-info">
                <div class="contact-info-icon">
                  <i class="fal fa-clock"></i>
                </div>
                <div class="contact-info-content">
                  <h5>Office Open</h5>
                  <p>Sun - Fri (08AM - 10PM)</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form wow animate__animated animate__fadeInUp" data-wow-duration="1s"
              data-wow-delay=".50s">
              <div class="contact-form-header">
                <h2>Get In Touch</h2>
                <p>It is a long established fact that a reader will be distracted by the readable
                  content of a page when looking at its layout. </p>
              </div>
              <form method="post" action="https://live.themewild.com/cryptox/assets/php/contact.php" id="contact-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" placeholder="Your Subject" required>
                </div>
                <div class="form-group">
                  <textarea name="message" cols="30" rows="5" class="form-control"
                    placeholder="Write Your Message"></textarea>
                </div>
                <button type="submit" class="theme-btn">Send
                  Message <i class="far fa-paper-plane"></i></button>
                <div class="col-md-12 mt-3">
                  <div class="form-messege text-success"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-map wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96708.34194156103!2d-74.03927096447748!3d40.759040329405195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a01c8df6fb3cb8!2sSolomon%20R.%20Guggenheim%20Museum!5e0!3m2!1sen!2sbd!4v1619410634508!5m2!1sen!2s"
          style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>s
@endsection
