
<div class="row rowVraag">
    <div class="col-sm optie" id="button1">
        <h6>Koopt u een 1 woning?</h6>
    </div>
    <div class="col-sm optie" id="button2">
        <h6>Bent u een doorstromer?</h6>
    </div>
    <div class="col-sm optie" id="button3">
        <h6>Wilt u oversluiten?</h6>
    </div>
</div>
<div class="resultVraag" id="result"></div>
<div class="container">
    <div class="row">
        <div class="col-sm-4 btn btn-lg buttonOrange hidden left border-0"  >terug</div>
        <div class="col-sm-4 offset-4 btn btn-lg buttonOrange hidden right border-0 "  >verder</div>
    </div>
</div>

<script type="text/javascript">



    $('.optie').click(function(){
        $('.optie').removeClass('active');
        $(this).addClass('active');
        $('.buttonOrange').removeClass('hidden');
        var clickedBtnID = $(this).index();
        result.innerHTML = text[clickedBtnID];
    });

    var result = document.getElementById('result');
    var string1 = "<h5>Aflosvormen starter</h5>" + "<p>Uitleg Aflosvormen starter."+ "<span onmouseover=\"myFunction()\"><i style=\"color: #c1a801\" class=\"fas fa-lightbulb\"></i></span></p>";
    var string2 = "<h5>Aflosvormen Doorstromer</h5>" + "<p>Uitleg Aflosvormen Doorstromer.<span onmouseover=\"myFunction()\"><i style=\"color: #c1a801\" class=\"fas fa-lightbulb\"></i></span></p> ";
    var string3 = "<h5>Aflosvormen Oversluiter</h5>" + "<p>Uitleg Aflosvormen Oversluiter.<span onmouseover=\"myFunction()\"><i style=\"color: #c1a801\" class=\"fas fa-lightbulb\"></i></span></p> ";
    var text = [string1,string2,string3];


</script>