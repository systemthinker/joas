@extends('layouts.custom')
@section('home')


    <div class="col-md-6 offset-2">

        <h5>Aflosvormen Doorstromer </h5>

        <p>Uitleg over Aflosvormen Doorstromer.
            <span onmouseover="myFunction()"><i style="color: #c1a801" class="fas fa-lightbulb"></i></span></p>

        <h5>Fiscaliteit doorstromer </h5>

        <p>Uitleg over Fiscaliteit doorstromer.
            <span onmouseover="myFunction()"><i style="color: #c1a801" class="fas fa-lightbulb"></i></span></p>

        <h5>Kies een van onderstaande opties en ga naar de volgende stap:</h5>
        <div>
            <a class="nav-link" href="{{route('doorstromerAlleenstaand')}}"><button class="btn btn-block btn-success">Ik ben alleenstaand</button></a>

        </div>
        <div >

            <a class="nav-link" href="{{route('doorstromerKind')}}"><button class="btn btn-block btn-success">Ik ben alleenstaand met kind</button></a>

        </div>
        <div>

            <a class="nav-link" href="{{route('doorstromerPartner')}}"><button class="btn btn-block btn-success">Ik woon samen met partner</button></a>

        </div>
    </div>



















    @endsection