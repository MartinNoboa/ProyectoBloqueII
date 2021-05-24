@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')
<div class='background cont'> 
<br>
<br>
<h1 class='text-center titulo-rosa font-title-title'>Descubre nuestros próximos eventos</h1>
<br>
<br>
@endsection

@section('mainContent')
    <div class="text-center pb-5 ">
    <iframe src="https://calendar.google.com/calendar/embed?height=650&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FMexico_City&amp;src=bzNrZXU0bGhyNnNjNWhicWluaXAyazlhcmdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZXMubWV4aWNhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23C0CA33&amp;color=%230B8043" style="border-width:0" width="80%" height="750" frameborder="0" scrolling="no" class="calendar"></iframe>
    </div>
@endsection