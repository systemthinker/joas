<?php



 function getSoortwoningString()
 {
 return  '<div class="row rowVraag">
    <div class="col-sm optie" >
        <h6>Koopt u een eerste woning?</h6>
    </div>
    <div class="col-sm optie" >
        <h6>Bent u een doorstromer?</h6>
    </div>
    <div class="col-sm optie" >
        <h6>Wilt u oversluiten?</h6>
    </div>
</div>
<div class="resultVraag"></div>
<div class="container">
    <div class="row">
        
        <div class="col-sm-4 offset-8 btn btn-lg buttonOrange hidden right border-0 "  >verder</div>
    </div>
</div>';
 }

 function getGezinssituatieString(){
     return '<div class="row rowVraag">
    <div class="col-sm optie" >
        <h6>U bent alleenstaand</h6>
    </div>
    <div class="col-sm optie" >
        <h6>U bent alleenstaand met kind</h6>
    </div>
    <div class="col-sm optie" >
        <h6>U bent samen met uw partner</h6>
    </div>
</div>
<div class="resultVraag"></div>
<div class="container">
    <div class="row">
        <div class="col-sm-4 btn btn-lg buttonOrange hidden left border-0"  >terug</div>
        <div class="col-sm-4 offset-4 btn btn-lg buttonOrange hidden right border-0 "  >verder</div>
    </div>
</div>';
 }

function getOndernemerString(){
    return '<div class="row rowVraag">
    <div class="col-sm optie" >
        <h6>U bent ondernemer</h6>
    </div>
    <div class="col-sm optie" >
        <h6>U bent geen ondernemer</h6>
    </div>
    
</div>
<div class="resultVraag"></div>
<div class="container">
    <div class="row">
        <div class="col-sm-4 btn btn-lg buttonOrange hidden left border-0"  >terug</div>
        <div class="col-sm-4 offset-4 btn btn-lg buttonOrange hidden right border-0 "  >verder</div>
    </div>
</div>';
}


