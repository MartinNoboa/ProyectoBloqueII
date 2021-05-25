@extends('layouts.main-landing')
@section('content')
<div class='background cont pb-5'> 
    <h1 class='text-center titulo-rojo font-title-title pt-5 pb-5'>Galería</h1>
    <div class="grid-gallery m-0 p-4">
        
        @foreach ($galleries as $galleriesItem)
        <div class="gallery-item m-0 shadow-md">
            <img class="gallery-image" src="{{asset($galleriesItem->image->url)}} " alt="no se encontro la imagen" srcset="">
        </div>
        @endforeach
    </div>
</div>
@endsection
