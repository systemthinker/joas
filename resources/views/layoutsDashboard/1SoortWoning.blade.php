<div class="row rowVraag">
    <div class="col-sm optie" id="button1">
        <h6>Koopt u een eerste woning?</h6>
    </div>
    <div class="col-sm optie" id="button2">
        <h6>Bent u een doorstromer?</h6>
    </div>
    <div class="col-sm optie" id="button3">
        <h6>Wilt u oversluiten?</h6>
    </div>
</div>
<div class="resultVraag" id="result">

</div>
<script type="text/javascript">
    var btn1 = document.getElementById('button1');
    var btn2 = document.getElementById('button2');
    var btn3 = document.getElementById('button3');
    var result = document.getElementById('result');

    btn1.onclick = function(){
        var text = "<h5>Aflosvormen starter</h5>" + "<p>Uitleg Aflosvormen starter.<span onmouseover=\"myFunction()\"><i style=\"color: #c1a801\" class=\"fas fa-lightbulb\"></i></span></p> ";


        result.innerHTML = text;
    }
    btn2.onclick = function(){
        var text = "<h5>Aflosvormen Doorstromer</h5>" + "<p>Uitleg Aflosvormen Doorstromer.<span onmouseover=\"myFunction()\"><i style=\"color: #c1a801\" class=\"fas fa-lightbulb\"></i></span></p> ";

        result.innerHTML = text;
    }
    btn3.onclick = function(){
        var text = "<h5>Aflosvormen Oversluiter</h5>" + "<p>Uitleg Aflosvormen Oversluiter.<span onmouseover=\"myFunction()\"><i style=\"color: #c1a801\" class=\"fas fa-lightbulb\"></i></span></p> ";

        result.innerHTML = text;
    }


</script>