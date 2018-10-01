@include('layouts.header')
@include('layouts.navbar')
<div style="margin-top: 30px"></div>
@if($message)
    <div style="text-align: center;" role="alert" class="alert alert-success">
        {{ $message }}
    </div>
@endif
    <div  class="container">

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

   <form id="soortWoning" action="/dashboard" method="post">
       <input type="hidden" name="soortwoning" value="oversluiten">@csrf<span class="active">  <div class="row rowVraag">
        <div class="col-sm optie" >
            <h6>Koopt u een eerste woning?</h6>
        </div>
        <div class="col-sm optie" >
            <h6>Bent u een doorstromer?</h6>
        </div>
       <div class="col-sm optie"  >

            <h6>Wilt u oversluiten?</h6>






        </div>
    </div>
    <div class="resultVraag"></div>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 offset-8 btn btn-lg buttonOrange hidden right border-0" onclick="event.preventDefault();
                                                     document.getElementById('soortWoning').submit();">verder </div>
        </div>

            </div> </span>

</form>
                {{--</span>--}}
                <form class="">@csrf<span class=""><?php echo $dashboardString->gezinssituatie   ?></span></form>
                <form class="">@csrf<span class=""><?php echo $dashboardString->ondernemer   ?></span></form>
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

@include('layouts.scripts')

