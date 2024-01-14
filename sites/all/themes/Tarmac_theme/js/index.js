//(function ($) {
//    $('document').ready(function() {
//        var options = { videoId: 'ANXGJe6i3G8', start: 3, mute: true };
//        $('#wrapper').tubular(options);
//
//    });
//})(jQuery);



//(function ($) {
//// Load the IFrame Player API code asynchronously.
//var tag = document.createElement('script');
//tag.src = "https://www.youtube.com/player_api";
//var firstScriptTag = document.getElementsByTagName('script')[0];
//firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
//
//// Replace the 'ytplayer' element with an <iframe> and
//// YouTube player after the API code downloads.
//var player;
//function onYouTubePlayerAPIReady() {
//    player = new YT.Player('ytplayer', {
//        height: '100vh',
//        width: '100vw',
//        videoId: 'ANXGJe6i3G8'
//    });
//}
//})(jQuery);



    var tag = document.createElement('script');
    tag.src = "http://www.youtube.com/player_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;
    function onYouTubePlayerAPIReady() {
        player = new YT.Player('video', {
            playerVars: {
                'autoplay': 1,
                'rel': '0',
                'controls': 1,
                'autohide':1,
                'wmode':'opaque',
                'height':'100vh',
                'width':'100vw',
                'z-index':'-100000',
                'playlist': 'ANXGJe6i3G8',
                'loop': '1'
            },
            videoId: '7_HnA2bRQ0M',
            //playlist: 'PL9C1rs2dE1B6pDwjiadAuDlIY7D_BwpEu,
            events: {
                'onReady': onPlayerReady}
        });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        event.target.mute();
    }



