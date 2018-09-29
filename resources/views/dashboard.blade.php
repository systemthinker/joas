@extends('layouts.custom')
@section('home')

    <div class="container">
        <div class="row" id="dashboardRow">
            <div class="col-md-4 offset-1">
                <div class="vragenSchema">
                    <h5>Bekijk het gehele proces</h5>
                    <dl>
                        <dt class="procesTab active"><span>1.</span><text>Soort woning</text></dt>
                        <dt class="procesTab"><span>2.</span><text>Gezinssituatie</text></dt>
                        <dt class="procesTab"><span>3.</span><text>Ondernemer</text></dt>
                        <dt class="procesTab"><span>4.</span><text>Orientatie en informatie</text></dt>
                        <dt class="procesTab"><span>5.</span><text>Inventarisatie en Analyse</text></dt>
                        <dt class="procesTab"><span>6.</span><text>Advies en Motivatie</text></dt>
                        <dt class="procesTab"><span>7.</span><text>Offerte aanvragen</text></dt>
                        <dt class="procesTab"><span>8.</span><text>Acceptatie en finaal akkoord</text></dt>
                        <dt class="procesTab"><span>9.</span><text>Template</text></dt>
                    </dl>
                </div>
            </div>

            <div class="col-md-5 offset-2 rightRowDashboard ">
                <div class="informatieSchema">
                    <h5>Informatie over uw situatie</h5>
                    <h5>{{$dashboardString->example}}</h5>
                </div>
                <span class="active">@include('layoutsDashboard.1SoortWoning')</span>
                <span >@include('layoutsDashboard.2Gezinssituatie')</span>
                {{--<span class="">@include('layoutsDashboard.3SoortWoning')</span>--}}
                {{--<span class="">@include('layoutsDashboard.4SoortWoning')</span>--}}
                {{--<span class="">@include('layoutsDashboard.5SoortWoning')</span>--}}
                {{--<span class="">@include('layoutsDashboard.6SoortWoning')</span>--}}
                {{--<span class="">@include('layoutsDashboard.7SoortWoning')</span>--}}
                {{--<span class="">@include('layoutsDashboard.8SoortWoning')</span>--}}
                {{--<span class="">@include('layoutsDashboard.9SoortWoning')</span>--}}


            </div>
        </div>
    </div>

    <script>
        $('dt.procesTab').click(function(){
            $('dt.procesTab').removeClass('active');
            $(this).addClass('active');
            var clickedTabId = $(this).index();

            $('.rightRowDashboard span').removeClass('active');
            $('.rightRowDashboard span').eq(clickedTabId).addClass('active');

        });


    </script>

    @endsection