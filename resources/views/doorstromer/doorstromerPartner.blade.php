@extends('layouts.custom2')
@section('home')

    <div class="col-md-6 offset-2">


        <h5>Video doorstromer partner</h5>
        <iframe id="player" src="http://www.youtube.com/embed/ee-uHT52Px0?enablejsapi=1&origin=http://example.com"
                type="text/html" width="640" height="390" frameborder="0" allowfullscreen>

        </iframe>

        <h5>Overlijden met nabestaande</h5>
        <p>Uitleg Overlijden met nabestaande
            <span onmouseover="myFunction()"><i style="color: #c1a801" class="fas fa-lightbulb"></i></span></p>

        <div>
            <a class="nav-link" href="{{route('doorstromerPartnerOndernemer')}}"><button class="btn btn-block btn-success">Ik ben ondernemer</button></a>

        </div>
        <div >

            <a class="nav-link" href="{{route('doorstromerPartnerParticulier')}}"><button class="btn btn-block btn-success">Ik ben een particulier</button></a>

        </div>


    </div>




@endsection
