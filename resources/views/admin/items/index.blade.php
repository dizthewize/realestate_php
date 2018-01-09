@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-sm-offset-1 col-md-4">
      <h3>All Houses</h3>
    </div>

    <div class="col-md-2">
      <a href="{{ route('items.create') }}" class="btn btn-lg btn-primary btn-fix">Add Item</a>
    </div>

    <div class="row">
      <div class="col-md-12">
            @foreach ($properties as $property)
              <div class="col-sm-6 col-md-3">
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
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

        <div class="text-center">
          {{ $properties->links() }}
        </div>

      </div>
    </div>
  </div>
@endsection
