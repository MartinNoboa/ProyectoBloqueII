@extends('layouts.main-landing')
@section('content')
<div class='background cont pb-5'>
    <h1 class='text-center titulo-rojo font-title-title pt-5 pb-5'>Galería</h1>
    @if ($galleries->count())
        <div class="grid-gallery m-0 p-4">

            @foreach ($galleries as $galleriesItem)
                <div class="gallery-item m-0 shadow-md">
                    <img class="gallery-image" src="{{asset($galleriesItem->image->url)}} " alt="no se encontro la imagen"
                        srcset="">
                </div>
            @endforeach
        </div>
    @else
        <div class="empty-space">
            <h2 class="my-3 text-center pt-5">
                No hay fotos en la disponibles en la galeria
            </h2>
        </div>
    @endif

</div>
@endsection
