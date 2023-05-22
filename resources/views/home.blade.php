@extends('layout.app')

@section('content')
<div class="container position-relative px-3">
    <button class="bg-primary text-white curr">Current Series</button>
   <div class="row row-cols-sm-2 row-cols-md-4 row-cols-lg-6 mt-5 mb-2 px-2 gap-0">
      @foreach ($comics as $comic )
        <div class="col">
                <div class=" cont-img  text-center">
                    <img :src="{{ $comic['thumb'] }}" :alt="{{ $comic['title'] }}" class="img-fluid">
                </div>
                <div class=" mt-3 ps-2  text-white">
                    <p>{{ $comic['title'] }} </p>

                </div>
        </div>

      @endforeach
   </div>
   <div class="text-center mb-4">
       <button class="bg-primary text-white">Load more</button>
   </div>

</div>
@endsection
