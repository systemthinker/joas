<script>
    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;
    // function onYouTubeIframeAPIReady() {
    //     player = new YT.Player('player', {
    //         height: '390',
    //         width: '640',
    //         videoId: 'M7lc1UVf-VE',
    //         events: {
    //             'onReady': onPlayerReady,
    //             'onStateChange': onPlayerStateChange
    //         }
    //     });
    // }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.playVideo();
    }

    // 5. The API calls this function when the player's state changes.
    //    The function indicates that when playing a video (state=1),
    //    the player should play for six seconds and then stop.
    var done = false;
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            setTimeout(stopVideo, 6000);
            done = true;
        }
    }
    function stopVideo() {
        player.stopVideo();
    }
</script>
<script type="text/javascript" >
    function  myFunction() {


        return alert('Een overlijdensrisicoverzekering (ook risicoverzekering genoemd) is een Nederlandse vorm van levensverzekering.' +
            ' Een tijdelijke overlijdensrisicoverzekering keert het vooraf afgesproken bedrag ' +
            'uit indien de verzekerde voor een bepaalde datum overlijdt. Een levenslange overlijdensrisicoverzekering ' +
            'keert het vooraf afgesproken bedrag uit wanneer de verzekerde overlijdt, ongeacht wanneer dit is.');
    }


</script>

<script type="text/javascript">
    var frm = $('#soortWoning');
    frm.submit(function (ev) {
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),

        });

        ev.preventDefault();

    });
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

</script>