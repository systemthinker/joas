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
                        <dt class="procesTab"><span>4.</span><text>Procedure</text></dt>
                        <dt class="procesTab"><span>5.</span><text>Kwaliteit van advies</text></dt>
                        <dt class="procesTab"><span>6.</span><text>Risico's van hypotheek</text></dt>
                        <dt class="procesTab"><span>7.</span><text>Overlijden <span id="procesTabOverlijdenInteractief"></span></text></dt>
                        <dt class="procesTab"><span>8.</span><text>Werkeloosheid <span id="procesTabWerkeloosheidInteractief"></span></text></dt>
                        <dt class="procesTab"><span>9.</span><text>Overige risico's </text></dt>
                        <dt class="procesTab"><span>10.</span><text>Pensioen </text></dt>
                        <dt class="procesTab"><span>11.</span><text>Aflosvormen <span id="procesTabAflosvormenInteractief"></span> </text></dt>
                        <dt class="procesTab"><span>12.</span><text>Rentevast periode </text></dt>
                        <dt class="procesTab"><span>13.</span><text>Fiscaliteit <span id="procesTabFiscaliteitInteractief"></span> </text></dt>
                        <dt class="procesTab"><span>14.</span><text>NHG</text></dt>
                        <dt class="procesTab"><span>15.</span><text>Verbouwen</text></dt>
                        <dt class="procesTab"><span>16.</span><text>Tarieven <span id="procesTabTarievenInteractief"></span></text></dt>
                       
                    </dl>
                </div>
            </div>

            <div class="col-md-5 offset-2 rightRowDashboard ">
                <div class="informatieSchema">
                    <h5>Informatie over uw situatie</h5>



                </div>

<form id="soortWoning" action="{{route('dashboard')}}" method="post">
    <input type="hidden" name="soortwoning" id="keuzeSoortWoning" value="">@csrf
    <span class="active">
        <div class="row rowVraag">
           <div class="col-sm optie optieSoortWoning">
                <h6>Koopt u een eerste woning?</h6>
            </div>
            <div class="col-sm optie optieSoortWoning">
                <h6>Bent u een doorstromer?</h6>
            </div>
           <div class="col-sm optie optieSoortWoning">

                <h6>Wilt u oversluiten?</h6>
            </div>
        </div>
        <div class="resultVraag"></div>
        <div class="container">
            <div class="row">


                <input type="submit" class="col-sm-4 offset-8 btn btn-lg buttonOrange hidden right border-0">



                </div>
        </div>
    </span>
</form>

<form id="gezinsSituatie" action="{{route('dashboard')}}" method="post">
    <input type="hidden" name="gezinssituatie" id="keuzeGezinsSituatie" value="">@csrf
    <span class="active">
        <div class="row rowVraag">
            <div class="col-sm optie optieGezinssituatie" >
                <h6>U bent alleenstaand</h6>
            </div>
            <div class="col-sm optie optieGezinssituatie" >
                <h6>U bent alleenstaand met kind</h6>
            </div>
            <div class="col-sm optie optieGezinssituatie" >
                <h6>U bent samen met uw partner</h6>
            </div>
        </div>
            <div class="resultVraag"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 btn btn-lg buttonOrange hidden left border-0"  >terug</div>
                        <input type="submit" class="col-sm-4 offset-4 btn btn-lg buttonOrange hidden right border-0">
                    </div>
                </div>
    </span>
</form>

                <form id="ondernemer" action="{{route('dashboard')}}" method="post">
                    <input type="hidden" name="ondernemer" id="keuzeOndernemer" value="">@csrf
    <span class="active">
        <div class="row rowVraag">
            <div class="col-sm optie optieOndernemer" >
                <h6>U bent ondernemer</h6>
            </div>
            <div class="col-sm optie optieOndernemer" >
                <h6>U bent geen ondernemer</h6>
            </div>

        </div>
        <div class="resultVraag"></div>
        <div class="container">
            <div class="row">
                        <div class="col-sm-4 btn btn-lg buttonOrange hidden left border-0"  >terug</div>
                        <input type="submit" class="col-sm-4 offset-4 btn btn-lg buttonOrange hidden right border-0">
             </div>
        </div>
    </span>
 </form>

                <span class="active">
                    <p>procedure, in productie content</p>
                </span>
                <span class="active">
                    <p>Kwaliteit van advies content, in productie</p>
                </span>
                <span class="active">
                    <p>Risico's van hypotheek content, in productie</p>
                </span>
                <span class="active" >
                    <p id="keuzeOverlijden"></p>
                </span>
                <span class="active">
                    <p id="keuzeWerkeloosheid"></p>
                </span>
                <span class="active">
                    <p>Overige risico's content, in productie</p>
                </span>
                <span class="active">
                    <p>Pensioen content, in productie</p>
                </span>
                <span class="active">
                    <p id="keuzeAflosvormen"> </p>
                </span>
                <span class="active">
                    <p>Rentevast periode content, in productie</p>
                </span>
                <span class="active">
                    <p id="keuzeFiscaliteit"> Fiscaliteit</p>
                </span>
                <span class="active">
                    <p>NHG content, in productie</p>
                </span>
                <span class="active">
                    <p>Verbouwen content, in productie</p>
                </span>
                <span class="active">
                    <p id="keuzeTarieven">Tarieven</p>
                </span>






                @include('layoutsDashboard.functions')
            </div>
        </div>

    </div>
<br><br><br><br><br><br><br><br>
@include('layouts.scripts')

