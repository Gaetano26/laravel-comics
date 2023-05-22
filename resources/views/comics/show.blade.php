@extends('layout.app')

@section('content')
<div class="container position-relative px-3">
    <div class="cont-img-3">
         <img src="{{$comic['thumb']}}" alt="">
    </div>

   <div class="row d-flex gap-0">
        <div class="col-8">
                    <h1 class="text-white">{{ $comic['title'] }} </h1>
                    <div class="d-flex justify-content-between px-3 bg-primary">
                        <p class="text-white">Price : {{ $comic['price'] }}</p>
                        <p class="text-white">Aviable</p>
                    </div>
                    <p>{{ $comic['description'] }}</p>

                </div>
        </div>
        <div class="col-4">
             <img src="{{ Vite::asset('resources/loghi/adv.jpg') }}" alt="">
        </div>
   </div>


</div>
@endsection
