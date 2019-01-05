

<script type="text/javascript">

    $('.optieSoortWoning').click(function(){
        var clickedBtnID = $(this).index();
        var index = $('dt.procesTab.active').index();

        for(var i=0; i<opties.length;i++) {
            opties[i].style.display = "none";
        }
        $('.rowVraag').eq(index).find('.optie').css('display','initial');
        $('.rowVraag').eq(index).find('.optie').removeClass('active');
        $('.rowVraag').eq(index).find('.optie').eq(clickedBtnID).addClass('active');
        $('.buttonOrange').removeClass('hidden');
        for(var i=0; i<results.length;i++) {
            veranderInputAanHandVanKeuzeSoortWoning.value = keuzeSoortWoning[clickedBtnID];
            results[i].innerHTML = textSoortWoning[clickedBtnID];
            results[i].style.display = "initial";
        }
        for(var i=0; i<opties.length;i++) {
            opties[i].style.display = "initial";
        }
        elementAflosvormen.innerHTML = keuzeSoortWoningElementAflossenContent[clickedBtnID];
        elementAflosvormenProcesTab.innerHTML = keuzeSoortWoningProcesTabSpanContent[clickedBtnID];
        elementFiscaliteit.innerHTML = keuzeFiscaliteitVraagSoortWoningContent[clickedBtnID];
        elementFiscaliteitProcesTab.innerHTML = keuzeFiscaliteitProcesTabSpanContent[clickedBtnID];
        elementTarieven.innerHTML = keuzeTarievenVraagSoortWoningContent[clickedBtnID];
        elementTarievenProcesTab.innerHTML = keuzeTarievenProcesTabSpanContent[clickedBtnID];
        @if($ondernemer == "ondernemer")

            elementTarievenProcesTab.innerHTML = keuzeTarievenOndernemerProcesTabSpanContent[clickedBtnID];
            elementTarieven.innerHTML = keuzeTarievenOndernemerVraagSoortWoningContent[clickedBtnID];
        @endif

        @if($ondernemer == "geen ondernemer")
            elementTarievenProcesTab.innerHTML = keuzeTarievenParticulierProcesTabSpanContent[clickedBtnID];
            elementTarieven.innerHTML = keuzeTarievenParticulierVraagSoortWoningContent[clickedBtnID];
        @endif


    });

    $('.optieGezinssituatie').click(function(){
        var clickedBtnID = $(this).index();
                var index = $('dt.procesTab.active').index();

        for(var i=0; i<opties.length;i++) {
            opties[i].style.display = "none";
        }
        $('.rowVraag').eq(index).find('.optie').css('display','initial');
        $('.rowVraag').eq(index).find('.optie').removeClass('active');
        $('.rowVraag').eq(index).find('.optie').eq(clickedBtnID).addClass('active');
        $('.buttonOrange').removeClass('hidden');
        for(var i=0; i<results.length;i++) {
            veranderInputAanHandVanKeuzeGezinssituatie.value = keuzeGezinsSituatie[clickedBtnID];

            results[i].innerHTML = textGezinsSituatie[clickedBtnID];
            results[i].style.display = "initial";
        }
        for(var i=0; i<opties.length;i++) {
            opties[i].style.display = "initial";
        }

        elementOverlijden.innerHTML = keuzeGezinsSituatieElementOverlijdenContent[clickedBtnID];
        elementOverlijdenProcesTab.innerHTML = keuzeGezinsSituatieProcesTabSpanContent[clickedBtnID];


    });

    $('.optieOndernemer').click(function(){
        var clickedBtnID = $(this).index();

        var index = $('dt.procesTab.active').index();

        for(var i=0; i<opties.length;i++) {
            opties[i].style.display = "none";
        }
        $('.rowVraag').eq(index).find('.optie').css('display','initial');
        $('.rowVraag').eq(index).find('.optie').removeClass('active');
        $('.rowVraag').eq(index).find('.optie').eq(clickedBtnID).addClass('active');
        $('.buttonOrange').removeClass('hidden');
        for(var i=0; i<results.length;i++) {
            veranderInputAanHandVanKeuzeOndernemer.value = keuzeOndernemer[clickedBtnID];

            results[i].innerHTML = textOndernemer[clickedBtnID];
            results[i].style.display = "initial";
        }
        for(var i=0; i<opties.length;i++) {
            opties[i].style.display = "initial";
        }
        elementWerkeloosheid.innerHTML = keuzeOndernemerElementWerkeloosheidContent[clickedBtnID];
        elementWerkeloosheidProcesTab.innerHTML = keuzeOndernemerProcesTabSpanContent[clickedBtnID];
    });





    var opties = document.getElementsByClassName('optie');

    var results = document.getElementsByClassName('resultVraag');
    var starter = '<h5>Aflosvormen starter</h5><p>Uitleg Aflosvormen starter.<i onmouseover="myFunction()" style="color: #c1a801; width: 10px; height: 10px;" class="fas fa-lightbulb"></i></p>';
    var doorstromer = "<h5>Aflosvormen Doorstromer</h5>" + "<p>Uitleg Aflosvormen Doorstromer.<i onmouseover=\"myFunction()\" style=\"color: #c1a801; width: 10px; height: 10px;\" class=\"fas fa-lightbulb\"></i></p> ";
    var oversluiter = "<h5>Aflosvormen Oversluiter</h5>" + "<p>Uitleg Aflosvormen Oversluiter.<i onmouseover=\"myFunction()\" style=\"color: #c1a801; width: 10px; height: 10px;\" class=\"fas fa-lightbulb\"></i></p> ";
    var alleenstaand = '<h5>Aflosvormen Alleenstaande</h5><p>Uitleg Aflosvormen alleenstaande.<i onmouseover="myFunction()" style="color: #c1a801; width: 10px; height: 10px;" class="fas fa-lightbulb"></i></p>';
    var alleenstaandMetKind = "<h5>Aflosvormen alleenstand met kind</h5>" + "<p>Uitleg Aflosvormen alleenstand met kind.<i onmouseover=\"myFunction()\" style=\"color: #c1a801; width: 10px; height: 10px;\" class=\"fas fa-lightbulb\"></i></p> ";
    var partner = "<h5>Aflosvormen partner</h5>" + "<p>Uitleg Aflosvormen partner.<i onmouseover=\"myFunction()\" style=\"color: #c1a801; width: 10px; height: 10px;\" class=\"fas fa-lightbulb\"></i></p> ";
    var ondernemer = "<h5>Aflosvormen ondernemer</h5>" + "<p>Uitleg Aflosvormen ondernemer.<i onmouseover=\"myFunction()\" style=\"color: #c1a801; width: 10px; height: 10px;\" class=\"fas fa-lightbulb\"></i></p> ";
    var particulier = "<h5>Aflosvormen particulier</h5>" + "<p>Uitleg Aflosvormen particulier.<i onmouseover=\"myFunction()\" style=\"color: #c1a801; width: 10px; height: 10px;\" class=\"fas fa-lightbulb\"></i></p> ";


    var veranderInputAanHandVanKeuzeSoortWoning = document.getElementById('keuzeSoortWoning');
    var veranderInputAanHandVanKeuzeGezinssituatie = document.getElementById('keuzeGezinsSituatie');
    var veranderInputAanHandVanKeuzeOndernemer = document.getElementById('keuzeOndernemer');
    var elementOverlijden = document.getElementById('keuzeOverlijden');
    var elementOverlijdenProcesTab = document.getElementById('procesTabOverlijdenInteractief');
    var elementWerkeloosheid = document.getElementById('keuzeWerkeloosheid');
    var elementWerkeloosheidProcesTab = document.getElementById('procesTabWerkeloosheidInteractief');
    var elementAflosvormen = document.getElementById('keuzeAflosvormen');
    var elementAflosvormenProcesTab = document.getElementById('procesTabAflosvormenInteractief');
    var elementFiscaliteit = document.getElementById('keuzeFiscaliteit');
    var elementFiscaliteitProcesTab = document.getElementById('procesTabFiscaliteitInteractief');
    var elementTarieven = document.getElementById('keuzeTarieven');
    var elementTarievenProcesTab = document.getElementById('procesTabTarievenInteractief');
    var textSoortWoning = [starter,doorstromer,oversluiter];
    var textGezinsSituatie = [alleenstaand,alleenstaandMetKind,partner];
    var textOndernemer = [ondernemer,particulier];
    var keuzeSoortWoning = ["starter","doorstromer","oversluiter"];
    var keuzeGezinsSituatie =["alleenstaand","alleenstaandMetKind","partner"];
    var keuzeGezinsSituatieElementOverlijdenContent = ["content overlijden alleenstaande","content overlijden met kind","content overlijden nabestaande"];
    var keuzeGezinsSituatieProcesTabSpanContent = ["alleenstaande","met kind","met nabestaande"];
    var keuzeOndernemerElementWerkeloosheidContent = ["content werkeloosheid ondernemer","content werkeloosheid particulier"];
    var keuzeOndernemerProcesTabSpanContent = ["ondernemer","particulier"];
    var keuzeOndernemer =["ondernemer","geen ondernemer"];
    var keuzeSoortWoningElementAflossenContent = ["content aflosvormen starter","content aflosvormen doorstromer","content aflosvormen oversluiter"];
    var keuzeSoortWoningProcesTabSpanContent = ["starter","doorstromer","oversluiter"];
    var keuzeFiscaliteitVraagSoortWoningContent = ["content fiscaliteit starter","content fiscaliteit doorstromer","content fiscaliteit oversluiter"];
    var keuzeFiscaliteitProcesTabSpanContent = ["starter","doorstromer","oversluiter"];
    var keuzeTarievenVraagSoortWoningContent = ["content tarieven starter","content tarieven doorstromer","content tarieven oversluiter"];
    var keuzeTarievenProcesTabSpanContent = ["starter","doorstromer","oversluiter"];
    var keuzeTarievenOndernemerProcesTabSpanContent = ["starter ondernemer ","doorstromer ondernemer","oversluiter ondernemer"];
    var keuzeTarievenParticulierProcesTabSpanContent = ["starter particulier ","doorstromer particulier","oversluiter particulier"];
    var keuzeTarievenOndernemerVraagSoortWoningContent = ["content tarieven starter ondernemer","content tarieven doorstromer ondernemer","content tarieven oversluiter ondernemer"];
    var keuzeTarievenParticulierVraagSoortWoningContent = ["content tarieven starter particulier","content tarieven doorstromer particulier","content tarieven oversluiter particulier"];


    $('dt.procesTab').click(function(){
        var clickedTabId = $(this).index();

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




</script>