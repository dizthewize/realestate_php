@extends('layouts.master')

@section('content')
  <section id="banner">
    <div class="row">
      <div class="col-md-offset-1 col-md-3">
        <div class="specials">
          <div class="description">
            <h3>3 Bed 2 Bath</h3>
            <h2>1080 Watt Ave</h2>
          </div>
          <div class="price-details">
            $350,000
            <a href="/contact">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="company-info">
    <div class="row">
      <div class="col-md-4">
        <div class="services">
          <h1>1</h1>
          <div>
            <h4>Large Community <i class="fa fa-check-square-o" aria-hidden="true"></i></h4>
            <p class="text-muted">Leading real estate and rental marketplace dedicated to empowering consumers with data, inspiration and knowledge around the place they call home.</p>
            <a href="/about">Learn More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="services">
          <h1>2</h1>
          <div>
            <h4>24 Hour Service <i class="fa fa-check-square-o" aria-hidden="true"></i></h4>
            <p class="text-muted">Serves the full lifecycle of owning and living in a home: buying, selling, renting, financing, remodeling and more.</p>
            <a href="/about">Learn More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="services">
          <h1>3</h1>
          <div>
            <h4>Lifetime Support <i class="fa fa-check-square-o" aria-hidden="true"></i></h4>
            <p class="text-muted">Launched in 2006 and is headquartered in Sacramento.</p>
            <a href="/about">Learn More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="property-list">
    <div class="row">
      <div class="col-md-12">
        <div class="property-heading">
          <h1>Latest Properties</h1>
          <hr class="style-eight">
          <p>Church-key plaid cloud bread live-edge, post-ironic pabst tattooed. Aesthetic forage cold-pressed, next level offal banh mi palo santo swag you probably haven't heard of them authentic.</p>
        </div>
      </div>
    </div>

      @foreach ($properties->chunk(3) as $propertyChunk)
        <div class="row">
          @foreach ($propertyChunk as $property)
            <div class="col-sm-12 col-md-4">
              <div class="thumbnail">
                <img src="{{$property->imagePath}}" alt="...">
                <div class="caption">
                  <h3>{{$property->title}}</h3>
                  <div class="row">
                    <div class="amenities">
                      <div class="col-sm-6">
                        <h4>{{$property->bed}} <i class="fa fa-bed" aria-hidden="true"></i></h4>
                      </div>
                      <div class="col-sm-6">
                        <h4>{{$property->bath}} <i class="fa fa-bath" aria-hidden="true"></i></h4>
                      </div>
                    </div>
                  </div>
                  <p class="description">{{$property->description}}</p>
                  <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-usd" aria-hidden="true"></i><span>{{$property->price}}</span>
                    </div>
                    <div class="col-sm-6">
                        <a href="/contact" class="btn btn-default" role="button">Contact Us</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      @endforeach
    </section>
    <hr>

  <section id="question">
    <h1>Are you ready to start your new life?</h1>
    <p>Visit our contact form and give us a call to reach your new beginnigs</p>
    <button type="button" name="button"><a href="/contact">Contact Us Now</a></button>
  </section>

  <hr>
@endsection

@section('footer')
  @include('partials.footer')
@endsection
