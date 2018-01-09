@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">Contact Us
      </h1>
    </div>
  </div>
  <!-- /.row -->

  <!-- Content Row -->
  <div class="row">
    <!-- Map Column -->
    <div class="col-md-8">
      <!-- Embedded Google Map -->
      <h3>Send us a Message</h3>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="control-group form-group">
          <div class="controls">
            <label>Full Name:</label>
            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block"></p>
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Phone Number:</label>
            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Email Address:</label>
            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Message:</label>
            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
          </div>
        </div>
        <div id="success"></div>
        <!-- For success/fail messages -->
        <button type="submit" class="btn btn-primary">Send Message</button>
      </form>
    </div>
    <!-- Contact Details Column -->
    <div class="col-md-4">
      <div id="contact-details">
        <h3>Contact Details</h3>
        <p>
          3481 Watt Ave<br>Sacramento, CA 90210<br>
        </p>
        <p><i class="fa fa-phone"></i>
          <abbr title="Phone">P</abbr>: (123) 456-7890</p>
        <p><i class="fa fa-envelope-o"></i>
          <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
        </p>
        <p><i class="fa fa-clock-o"></i>
          <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
        </p>
      </div>
    </div>
  </div>
  <!-- /.row -->

  <!-- Contact Form -->
  <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <div class="row">
    <div class="col-md-8">
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d26948082.11134383!2d-113.1075394978413!3d34.463295087408305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shomes+for+sale!5e0!3m2!1sen!2sus!4v1496997346891" width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe>
    </div>
  </div>
  <hr>
@endsection

@section('footer')
  @include('partials.footer')
@endsection
