@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')
<div class=''> 
<br>
<br>
<h1 class='text-center titulo-rosa font-title-title'>Calendario</h1>
<br>
<br>
<div class="container  pb-5 ">
    <div class="d-flex justify-content-start my-3 ">
            <a href="{{url('/panel')}}">
                <button type="button" class="btn backbtn d-flex justify-content-center align-items-center">
                    <i class="bi bi-arrow-left"></i>
                </button>
            </a>
        </div>
</div>
<div class="text-center pb-5 ">
        <iframe src="https://calendar.google.com/calendar/embed?height=650&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FMexico_City&amp;src=bzNrZXU0bGhyNnNjNWhicWluaXAyazlhcmdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZXMubWV4aWNhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23C0CA33&amp;color=%230B8043" style="border-width:0" width="80%" height="750" frameborder="0" scrolling="no" class="calendar"></iframe>
    </div>

@endsection

