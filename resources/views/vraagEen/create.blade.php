@extends('layouts.custom')
@section('home')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <ul>
                <li><p>template1</p></li>
                <li><p>template2</p></li>
            </ul>
        </div>

        <div class="col-md-4 offset-2">
            <div>
                 <a class="nav-link" href="{{route('woning')}}"><button class="btn btn-block btn-success">Ik koop mijn eerste woning (starter)</button></a>

             </div>
             <div >

                 <a class="nav-link" href="{{route('doorstromer')}}"><button class="btn btn-block btn-success">Ik ben een doorstromer</button></a>

             </div>
             <div>

                 <a class="nav-link" href="{{route('oversluiter')}}"><button class="btn btn-block btn-success">Ik wil mijn hypotheek oversluiten</button></a>

             </div>
        </div>
    </div>
</div>








@endsection