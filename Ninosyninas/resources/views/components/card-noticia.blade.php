@props([ "titulo", "cuerpo", "foto", "id"])
<div class="card" style="width: 18rem;">
  <img src="{{ url('img/noticias/' . $foto . '.jpg') }}" class="card-img-top" alt="Imagen de la noticia">
  <div class="card-body text-center">
    <h5 class="card-title">{{$titulo}}</h5>
    <p class="card-text">{{$cuerpo}}</p>
    <a href="#" class="btn btn-primary" href="enlace a noticia">Ver Noticia Completa</a>
  </div>
</div>