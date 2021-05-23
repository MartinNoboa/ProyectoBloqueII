@extends('layouts.main-landing')
@section('content')
    <div class="">
        @foreach ($galleries as $galleriesItem)
            <img src="{{asset($galleriesItem->image->url)}} " alt="no se encontro la imagen" srcset="">
        @endforeach
    </div>
@endsection