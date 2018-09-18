@extends('layouts.custom2')
@section('home')

    <div class="col-md-6 offset-2">


        <h5>Video doorstromer alleenstaand Ondernemer</h5>
        <iframe id="player" src="http://www.youtube.com/embed/ee-uHT52Px0?enablejsapi=1&origin=http://example.com"
                type="text/html" width="640" height="390" frameborder="0" allowfullscreen>

        </iframe>
        <p>Uitleg doorstromer alleenstaand Ondernemer
            <span onmouseover="myFunction()"><i style="color: #c1a801" class="fas fa-lightbulb"></i></span></p>

        <h5>Werkloosheid ondernemer</h5>

        <p>Uitleg Werkloosheid ondernemer
            <span onmouseover="myFunction()"><i style="color: #c1a801" class="fas fa-lightbulb"></i></span></p>





    </div>


    @endsection