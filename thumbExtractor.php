<?php
function get_youtube_id_from_url($url)  {
     preg_match('/(http(s|):|)\/\/(www\.|)yout(.*?)\/(embed\/|watch.*?v=|)([a-z_A-Z0-9\-]{11})/i', $url, $results);
     return @$results[6];
}

    $youtubelink = !empty($_POST['youtubelink']) ? trim($_POST['youtubelink']) : "";
    $youtubeID = get_youtube_id_from_url($youtubelink);
    $thumblink = 'http://img.youtube.com/vi/'.$youtubeID;
?>



<!-- Some other ways we can extract the thumbanail from youtube videos are mentioned below -->

<!-- <?php

$links = [
    "youtube.com/v/tFad5gHoBjY",
    "youtube.com/vi/tFad5gHoBjY",
    "youtube.com/?v=tFad5gHoBjY",
    "youtube.com/?vi=tFad5gHoBjY",
    "youtube.com/watch?v=tFad5gHoBjY",
    "youtube.com/watch?vi=tFad5gHoBjY",
    "youtu.be/tFad5gHoBjY",
    "http://youtu.be/qokEYBNWA_0?t=30m26s",
    "youtube.com/v/vidid",
    "youtube.com/vi/vidid",
    "youtube.com/?v=vidid",
    "youtube.com/?vi=vidid",
    "youtube.com/watch?v=vidid",
    "youtube.com/watch?vi=vidid",
    "youtu.be/vidid",
    "youtube.com/embed/vidid",
    "http://youtube.com/v/vidid",
    "http://www.youtube.com/v/vidid",
    "https://www.youtube.com/v/vidid",
    "youtube.com/watch?v=vidid&wtv=wtv",
    "http://www.youtube.com/watch?dev=inprogress&v=vidid&feature=related",
    "youtube.com/watch?v=7HCZvhRAk-M"
];

foreach($links as $link){
    preg_match("#([\/|\?|&]vi?[\/|=]|youtu\.be\/|embed\/)([a-zA-Z0-9_-]+)#", $link, $matches);
    var_dump(end($matches));
}

?> -->



<!-- <?php
$youtube = 'http://youtube.com/v/dQw4w9WgXcQ?feature=youtube_gdata_player
http://youtube.com/vi/dQw4w9WgXcQ?feature=youtube_gdata_player
http://youtube.com/?v=dQw4w9WgXcQ&feature=youtube_gdata_player
http://www.youtube.com/watch?v=dQw4w9WgXcQ&feature=youtube_gdata_player
http://youtube.com/?vi=dQw4w9WgXcQ&feature=youtube_gdata_player
http://youtube.com/watch?v=dQw4w9WgXcQ&feature=youtube_gdata_player
http://youtube.com/watch?vi=dQw4w9WgXcQ&feature=youtube_gdata_player
http://youtu.be/dQw4w9WgXcQ?feature=youtube_gdata_player';

preg_match_all("#(?<=v=|v\/|vi=|vi\/|youtu.be\/)[a-zA-Z0-9_-]{11}#", $youtube, $matches);

var_dump($matches[0]);

?> -->
