@extends('layouts.custom')


@section('home')



        <div class="col-md-6 offset-2">

        <h5>Aflosvormen starter</h5>

        <p>Uitleg over Aflosvormen starter.
            <span onmouseover="myFunction()"><i style="color: #c1a801" class="fas fa-lightbulb"></i></span> </p>
        <h5>Fiscaliteit starter</h5>

        <p>Uitleg over fiscaliteit starter.
            <span onmouseover="myFunction()"><i style="color: #c1a801" class="fas fa-lightbulb"></i></span> </p>
        <h5>Starters faciliteiten</h5>

        <p>Uitleg over starters faciliteiten.
            <span onmouseover="myFunction()"><i style="color: #c1a801" class="fas fa-lightbulb"></i></span> </p>


        <h5>Kies een van onderstaande opties en ga naar de volgende stap:</h5>
        <div>
            <a class="nav-link" href="{{route('woningAlleenstaand')}}"><button class="btn btn-block btn-success">Ik ben alleenstaand</button></a>

        </div>
        <div >

            <a class="nav-link" href="{{route('woningKind')}}"><button class="btn btn-block btn-success">Ik ben alleenstaand met kind</button></a>

        </div>
        <div>

            <a class="nav-link" href="{{route('woningPartner')}}"><button class="btn btn-block btn-success">Ik woon samen met partner</button></a>

        </div>







    </div>


    <script type="text/javascript" >
        function myFunction() {


            return alert('Een overlijdensrisicoverzekering (ook risicoverzekering genoemd) is een Nederlandse vorm van levensverzekering.' +
                ' Een tijdelijke overlijdensrisicoverzekering keert het vooraf afgesproken bedrag ' +
                'uit indien de verzekerde voor een bepaalde datum overlijdt. Een levenslange overlijdensrisicoverzekering ' +
                'keert het vooraf afgesproken bedrag uit wanneer de verzekerde overlijdt, ongeacht wanneer dit is.');
        }


    </script>


    @endsection




