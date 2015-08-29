<?php
	include 'navbar.php';
?>

<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="archive.css">
</head>
<body>
	<div id="container">
		<script>
		var youtube_videos = ['https://www.youtube.com/embed/15tLVw0V-bM','https://www.youtube.com/embed/15tLVw0V-bM','https://www.youtube.com/embed/15tLVw0V-bM'
								,'https://www.youtube.com/embed/15tLVw0V-bM','https://www.youtube.com/embed/15tLVw0V-bM'
							];
		for(i=0;i<youtube_videos.length;i++){
			$("#container").append("<div class='col-lg-4 col-md-4 col-sm-6 col-sm-12' id='vid'><iframe frameborder='0' allowfullscreen></iframe></div>");
			
		}
			var video = $('#vid');
			
		for(i=0;i<youtube_videos.length;i++){
			
			video.children('iframe').attr('src',youtube_videos[i]);
			video = video.next();
		}
		</script>
	</div>
<script src="arcive.js"></script>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>