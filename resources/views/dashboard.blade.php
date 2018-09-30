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
                        <dt class="procesTab"><span>4.</span><text>Template</text></dt>
                        <dt class="procesTab"><span>5.</span><text>Template</text></dt>
                        <dt class="procesTab"><span>6.</span><text>Template</text></dt>
                        <dt class="procesTab"><span>7.</span><text>Template</text></dt>
                        <dt class="procesTab"><span>8.</span><text>Template</text></dt>
                        <dt class="procesTab"><span>9.</span><text>Template</text></dt>
                    </dl>
                </div>
            </div>

            <div class="col-md-5 offset-2 rightRowDashboard ">
                <div class="informatieSchema">
                    <h5>Informatie over uw situatie</h5>



                </div>

                <span class="active"><?php echo $dashboardString->soortWoning   ?></span>
                <span class=""><?php echo $dashboardString->gezinssituatie   ?></span>
                <span class=""><?php echo $dashboardString->ondernemer   ?></span>
                {{--<span class="">@include('layoutsDashboard.4SoortWoning')</span>--}}
                {{--<span class="">@include('layoutsDashboard.5SoortWoning')</span>--}}
                {{--<span class="">@include('layoutsDashboard.6SoortWoning')</span>--}}
                {{--<span class="">@include('layoutsDashboard.7SoortWoning')</span>--}}
                {{--<span class="">@include('layoutsDashboard.8SoortWoning')</span>--}}
                {{--<span class="">@include('layoutsDashboard.9SoortWoning')</span>--}}

                @include('layoutsDashboard.functions')
            </div>
        </div>
    </div>



    @endsection