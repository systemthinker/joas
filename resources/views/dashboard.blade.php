@extends('layouts.custom')
@section('home')

    <div class="container">
        <div class="row" id="dashboardRow">
            <div class="col-md-4 offset-1">
                <div class="vragenSchema">
                    <h5>Bekijk het gehele proces</h5>
                    <dl>
                        <dt><span>1.</span><text>Soort woning</text></dt>
                        <dt><span>2.</span><text>Gezinssituatie</text></dt>
                        <dt><span>3.</span><text>Ondernemer</text></dt>
                        <dt><span>4.</span><text>Orientatie en informatie</text></dt>
                        <dt><span>5.</span><text>Inventarisatie en Analyse</text></dt>
                        <dt><span>6.</span><text>Advies en Motivatie</text></dt>
                        <dt><span>7.</span><text>Offerte aanvragen</text></dt>
                        <dt><span>8.</span><text>Acceptatie en finaal akkoord</text></dt>
                        <dt><span>9.</span><text>Template</text></dt>
                    </dl>
                </div>
            </div>
            <div class="col-md-4 offset-2">
                @include('layouts.procedure')
            </div>
        </div>
    </div>


    @endsection