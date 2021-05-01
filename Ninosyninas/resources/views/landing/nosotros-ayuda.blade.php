@extends('layouts.main-landing')

@section('pageTitle', "Niños y niñas de Mexico")

@section('header')
<div class="container-fluid upper-half">
<br>
<br>
    <div class="position-relative">
        <div class="position-absolute top-50 start-50 translate-middle">
            <table class="text-center table-wt zelda">
                <tr>
                    <th><a href="{{url('/nosotros-areas')}}">Areas de atención</a></th><th><a href="{{url('/nosotros-logros')}}">Logros</a></th><th><a href="{{url('/nosotros-ayuda')}}">Ayudar</a></th>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <br>
    <br>
</div>
@endsection
@section('mainContent')
<div class="bottom-half">
<div class="row">
    <div class="col-4">
        <div class="container">
            <br>
            <h3 class="text-center">¿Qué necesitamos?</h3>
            <br>
            <p>
            A través de nuestros diferentes programas, Educación Salud y Capacitación, apoyamos en la realización de las 
            tareas y proyectos escolares de los niños, atendemos sus necesidades específicas para el aprendizaje (terapia 
            de lenguaje, estimulación Psicopedagógica, comprensión lectora etc.).</p><br><p>

            Talleres de: lectura, musicoterapia, de desarrollo humano, Computación y Actividades de verano.
            Inculcamos Valores y Hábitos de orden y limpieza</p><br><p>

            Servimos un promedio de 120 comidas, que para muchos significa el único alimento del día.
            El 95% de los niños está inscrito en alguna modalidad educativa oficial.
            El 100% de los niños lleva un seguimiento del esquema de vacunación oficial.
            Se desparasita al 100% de los niños cada 6 meses.</p><br><p>

            COMO TRABAJAMOS EN CONTINGENCIA POR PANDEMIA</p><br><p>

            Debido a la contingencia sanitaria suspendimos actividades con los niños de marzo a junio, durante ese tiempo 
            aprovechamos para capacitarnos en línea el equipo de trabajo en diferentes temas, para seguir atendiendo con 
            calidad a nuestros beneficiarios. Además, entregamos dos despensas al mes a las familias de los niños, ya que 
            ellos tampoco tuvieron la oportunidad de trabajar por la contingencia.</p><br><p>

            Reanudamos la atención a puerta abierta a partir de Julio alternando la asistencia de los niños (en promedio 
            30 por día) para respetar las recomendaciones de sana distancia además de trabajar todos con cubre boca, lavado
             de manos y control de temperatura. Atendemos a 75 Niños, Niñas y Adolescentes, de preescolar a preparatoria. 
             Trabajamos con la nueva modalidad en línea aprendiendo juntos niños, papás y maestros, proporcionamos computadora
              e internet ya que los niños no cuentan con estas herramientas, y enseñamos a hacer uso de ellas. Apoyamos en la 
              realización de tareas, así como en la entrega de las mismas vía internet y en las video clases.
            </p>
            <br>
            
        </div>
    </div>
    <div class="col-8 text-center">
        <br>
        <br>
            <img src="{{url('img/25.jpeg')}}"  width="80%">
        <br>
    </div>
</div>

<div class="row">
    <div class="col-4">
        <div class="container">
            <br>
            <h3 class="text-center">¿Cómo donar?</h3>
            <br>
            <p>El funcionamiento de Niños y Niñas de México A.C. no sería posible sin nuestros benefactores. Queremos 
                agradecer su apoyo a todas aquellas personas que han hecho posible nuestro sueño.</p>
            <br>
            <p>Súmate a nuestra causa:</p>
            <br>
            <a class="btn btn-outline-primary" href="{{ url('#')}}" role="button">Donar</a>
            
        </div>
    </div>
    <div class="col-8 text-center">
        <br>
        <br>
            <img src="{{url('img/24.jpg')}}"  width="80%">
        <br>
    </div>
</div>

<div class="row">
    <div class="col-4">
        <div class="container">
            <br>
            <h3 class="text-center">Voluntariado y Servicio Social</h3>
            <br>
            <p>Si quieres formar parte de nuestro equipo de trabajo, no dudes en ponerte en contacto con nosotros. Ser 
                voluntario es una forma de empatía, es ser, estar en el mundo, meterte en los zapatos del otro y 
                acompañarlo en esta tarea de vivir la vida.</p>
            <br>
            <p>Funcionamos en gran parte gracias a las personas que nos brindan su tiempo, su dedicación y sus ganas de 
                compartir para apoyar nuestra labor.</p>
            <br>
            <p>Contamos con alumnos de diversas instituciones que realizan su servicio social apoyando los diferentes programas.</p>
            
        </div>
    </div>
    <div class="col-8 text-center">
        <br>
        <br>
            <img src="{{url('img/14.jpg')}}" width="80%">
        <br>
    </div>
</div>
</div>
@endsection