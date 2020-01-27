<?php include 'thumbExtractor.php' ?>
<!-- Youtube Thumbnail Downloader HTML layout-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Youtube Thumbnail Downloader</title>
</head>
<body>
    <h1>Youtube Thumbanail Downloader</h1></br>
        <form action="" method="POST">
            Enter the Link : <input type='text' name='youtubelink' placeholder='youtube url link'/>
            <button type="submit">Search</button>
        </form>
        </br>
        <hr>
        <?php if(!empty($youtubeID)){ ?>
            <div class="download-link">
                <img src="<?php echo $thumblink.'/maxresdefault.jpg'; ?>" width=400 height=225><br/>
            </div>
            <div class="download-link">
                <a href="<?php echo $thumblink.'/mqdefault.jpg'; ?>" download="<?php echo $youtubeID.'-standard-resolution'; ?>">
                Low Quality </a>
                <b>
                <?php 
                    list($imgWidth, $imgHeight) = getimagesize($thumblink.'/mqdefault.jpg');
                    echo $imgWidth.' x '.$imgHeight; 
                ?>
                </b>
            </div>
            <div class="download-link">
                <a href="<?php echo $thumblink.'/hqdefault.jpg'; ?>" download="<?php echo $youtubeID.'-medium-resolution'; ?>">
                Medium Quality </a>
                <b>
                <?php 
                    list($imgWidth, $imgHeight) = getimagesize($thumblink.'/hqdefault.jpg');
                    echo $imgWidth.' x '.$imgHeight; 
                ?>
                </b>
            </div>
            <div class="download-link">
                <a href="<?php echo $thumblink.'/sddefault.jpg'; ?>" download="<?php echo $youtubeID.'-high-resolution'; ?>">
                High Quality </a>
                <b>
                <?php 
                    list($imgWidth, $imgHeight) = getimagesize($thumblink.'/sddefault.jpg');
                    echo $imgWidth.' x '.$imgHeight; 
                ?>
                </b>
            </div>
            <div class="download-link">
                <a href="<?php echo $thumblink.'/maxresdefault.jpg'; ?>" download="<?php echo $youtubeID.'-max-resolution'; ?>">Maximum Resolution </a>
                <b>
                <?php 
                    list($imgWidth, $imgHeight) = getimagesize($thumblink.'/maxresdefault.jpg');
                    echo $imgWidth.' x '.$imgHeight; 
                ?>
                </b>
            </div>
        <?php } ?>
</body>
</html>

