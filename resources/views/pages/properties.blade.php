@extends('layouts.master')

@section('header')
  @include('partials.header')
@endsection

@section('content')
  <section id="property-list">
    <div class="row">
      <div class="col-md-12">
        <div class="property-heading">
          <h1>Latest Properties</h1>
          <hr class="style-eight">
          <p>New; Open Houses; Price Cuts; Luxury; Virtual Tours. Property Type. Single Family; Condo/Townhouse; Multi-Family; Vacant Land; Mobile Home.</p>
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

    <hr>
  </section>
@endsection

@section('footer')
  @include('partials.footer')
@endsection
