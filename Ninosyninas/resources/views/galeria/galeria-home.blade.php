@extends('layouts.main-landing')
@section('content')
<div class="grid-gallery m-0 p-4">
    @foreach ($galleries as $galleriesItem)
    <div class="gallery-item m-0 shadow-md">
        <img class="gallery-image" src="{{asset($galleriesItem->image->url)}} " alt="no se encontro la imagen" srcset="">
    </div>
    @endforeach
</div>
@endsection
