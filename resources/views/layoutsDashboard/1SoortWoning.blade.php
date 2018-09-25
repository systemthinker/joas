<div class="row rowVraag">
    <div class="col-sm optie inactive" id="button1">
        <h6>Koopt u een eerste woning?</h6>
    </div>
    <div class="col-sm optie" id="button2" class="inactive">
        <h6>Bent u een doorstromer?</h6>
    </div>
    <div class="col-sm optie" id="button3" class="inactive">
        <h6>Wilt u oversluiten?</h6>
    </div>
</div>
<div class="resultVraag" id="result"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 btn btn-lg buttonOrange hidden left border-0" id="pointerLeft"  >terug</div>
            <div type="button" class="col-sm-4 offset-4 btn btn-lg buttonOrange hidden right border-0 " id="pointerRight" >verder</div>
        </div>
    </div>

<script type="text/javascript">
    var btn1 = document.getElementById('button1');
    var btn2 = document.getElementById('button2');
    var btn3 = document.getElementById('button3');
    var result = document.getElementById('result');
    var button = document.getElementsByClassName("buttonOrange");

    btn1.onclick = function(){
        var text = "<h5>Aflosvormen starter</h5>" + "<p>Uitleg Aflosvormen starter.<span onmouseover=\"myFunction()\"><i style=\"color: #c1a801\" class=\"fas fa-lightbulb\"></i></span></p> ";
       result.innerHTML = text;
            if (btn1.style.backgroundColor !== "rgb(65, 160, 70)") {
                btn1.style.backgroundColor = "rgb(65, 160, 70)";
                btn2.style.backgroundColor = "unset";
                btn3.style.backgroundColor = "unset";
            }
        [].forEach.call(button, function (el) {

                el.classList.remove('hidden');

        });

        }



    btn2.onclick = function(){
        var text = "<h5>Aflosvormen Doorstromer</h5>" + "<p>Uitleg Aflosvormen Doorstromer.<span onmouseover=\"myFunction()\"><i style=\"color: #c1a801\" class=\"fas fa-lightbulb\"></i></span></p> ";

        result.innerHTML = text;

        if (btn2.style.backgroundColor !== "rgb(65, 160, 70)") {
            btn2.style.backgroundColor = "rgb(65, 160, 70)";
            btn1.style.backgroundColor = "unset";
            btn3.style.backgroundColor = "unset";
        }

        [].forEach.call(button, function (el) {

            el.classList.remove('hidden');

        });
    }
    btn3.onclick = function(){
        var text = "<h5>Aflosvormen Oversluiter</h5>" + "<p>Uitleg Aflosvormen Oversluiter.<span onmouseover=\"myFunction()\"><i style=\"color: #c1a801\" class=\"fas fa-lightbulb\"></i></span></p> ";

        result.innerHTML = text;

        if (btn3.style.backgroundColor !== "rgb(65, 160, 70)") {
            btn3.style.backgroundColor = "rgb(65, 160, 70)";
            btn1.style.backgroundColor = "unset";
            btn2.style.backgroundColor = "unset";
        }

        [].forEach.call(button, function (el) {

            el.classList.remove('hidden');

        });
    }


</script>