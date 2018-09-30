

<script type="text/javascript">



    $('.optie').click(function(){
        var clickedBtnID = $(this).index();
        var index = $('dt.procesTab.active').index();
        console.log(clickedBtnID);
        for(var i=0; i<opties.length;i++) {
            opties[i].style.display = "none";
        }
        $('.rowVraag').eq(index).find('.optie').css('display','initial');
        $('.rowVraag').eq(index).find('.optie').removeClass('active');
        $('.rowVraag').eq(index).find('.optie').eq(clickedBtnID).addClass('active');
        $('.buttonOrange').removeClass('hidden');
for(var i=0; i<results.length;i++) {
    results[i].innerHTML = text[clickedBtnID];
    results[i].style.display = "initial";
}
        for(var i=0; i<opties.length;i++) {
            opties[i].style.display = "initial";
        }

    });

    var opties = document.getElementsByClassName('optie');
    var results = document.getElementsByClassName('resultVraag');
    var string1 = '<h5>Aflosvormen starter</h5><p>Uitleg Aflosvormen starter.<i onmouseover="myFunction()" style="color: #c1a801; width: 10px; height: 10px;" class="fas fa-lightbulb"></i></p>';
    var string2 = "<h5>Aflosvormen Doorstromer</h5>" + "<p>Uitleg Aflosvormen Doorstromer.<i onmouseover=\"myFunction()\" style=\"color: #c1a801; width: 10px; height: 10px;\" class=\"fas fa-lightbulb\"></i></p> ";
    var string3 = "<h5>Aflosvormen Oversluiter</h5>" + "<p>Uitleg Aflosvormen Oversluiter.<i onmouseover=\"myFunction()\" style=\"color: #c1a801; width: 10px; height: 10px;\" class=\"fas fa-lightbulb\"></i></p> ";
    var text = [string1,string2,string3];

    $('dt.procesTab').click(function(){
        var clickedTabId = $(this).index();
        console.log(clickedTabId);
        $('dt.procesTab').removeClass('active');
        $('dt.procesTab').eq(clickedTabId).addClass('active');
        $('.rightRowDashboard span').removeClass('active');
        $('.rightRowDashboard span').eq(clickedTabId).addClass('active');
        $('.buttonOrange').addClass('hidden');
        $('.optie').removeClass('active');
        for(var i=0; i<results.length;i++) {
            results[i].style.display = "none";
        }
    });

    $('.buttonOrange.left').click(function(){
    if($('dt.procesTab.active')){
        var index = $('dt.procesTab.active').index();
        $('dt.procesTab').removeClass('active');
        $('dt.procesTab').eq(index -1).addClass('active');
        $('.rightRowDashboard span').removeClass('active');
        $('.rightRowDashboard span').eq(index -1).addClass('active');
        $('.buttonOrange').addClass('hidden');
        $('.optie').removeClass('active');
        for(var i=0; i<results.length;i++) {
            results[i].style.display = "none";
        }

    }
    });

    $('.buttonOrange.right').click(function(){
        if($('dt.procesTab.active')){
            var index = $('dt.procesTab.active').index();
            $('dt.procesTab').removeClass('active');
            $('dt.procesTab').eq(index +1).addClass('active');
            $('.rightRowDashboard span').removeClass('active');
            $('.rightRowDashboard span').eq(index +1).addClass('active');
            $('.buttonOrange').addClass('hidden');
            $('.optie').removeClass('active');
            for(var i=0; i<results.length;i++) {
                results[i].style.display = "none";
            }

        }
    });


</script>