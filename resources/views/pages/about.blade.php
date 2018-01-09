@extends('layouts.master')

@section('content')
  <section id="about">
    <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">About Us
          </h1>
          <p>Homes4Sale is the leading real estate and rental marketplace dedicated to empowering consumers with data, inspiration and knowledge around the place they call home, and connecting them with the best local professionals who can help.</p>
      </div>
    </div>
  </section>

  <!-- Team Members Row -->
  <section id="members">
    <div class="row">
      <div class="col-lg-12">
          <h2 class="page-header">Our Team Members</h2>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="member-details">
          <img class="img-circle img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/enda/128.jpg" alt="">
          <h3>Peter Parker
              <small>Realtor</small>
          </h3>
          <p>Has been Sacramento's top rated real estate agent for 5 consecutive years. </p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="member-details">
          <img class="img-circle img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/abecherian/128.jpg" alt="">
          <h3>Kratos Simmons
              <small>Realtor</small>
          </h3>
          <p>Ranked in the top 10 Sacramento Realtors</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="member-details">
          <img class="img-circle img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/rem/128.jpg" alt="">
          <h3>Seymour Butts
              <small>Contractor</small>
          </h3>
          <p>Ranked in the top 10 Sacramento Realtors</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="member-details">
          <img class="img-circle img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/jadlimcaco/128.jpg" alt="">
          <h3>John Shepherd
              <small>Property management</small>
          </h3>
          <p>Ranked in the top 10 Sacramento Realtors</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="member-details">
          <img class="img-circle img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/marcosmoralez/128.jpg" alt="">
          <h3>John Smith
              <small>Property management</small>
          </h3>
          <p>Discover the difference of what a knowledgeable and diverse team of professionals can mean when helping you make informed decisions</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="member-details">
          <img class="img-circle img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/tomaslau/128.jpg" alt="">
          <h3>Jack Sparrow
              <small>Realtor</small>
          </h3>
          <p>I strive to exceed my clients' expectations, not merely meet their needs.</p>
        </div>
      </div>

    </div>
    <hr>
  </section>
@endsection

@section('footer')
  @include('partials.footer')
@endsection
