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
		var youtube_videos = ['<iframe width="560" height="315" src="https://www.youtube.com/embed/15tLVw0V-bM" frameborder="0" allowfullscreen></iframe>',
								'<iframe width="560" height="315" src="https://www.youtube.com/embed/15tLVw0V-bM" frameborder="0" allowfullscreen></iframe>',
								'<iframe width="560" height="315" src="https://www.youtube.com/embed/15tLVw0V-bM" frameborder="0" allowfullscreen></iframe>',
								'<iframe width="560" height="315" src="https://www.youtube.com/embed/15tLVw0V-bM" frameborder="0" allowfullscreen></iframe>',
								'<iframe width="560" height="315" src="https://www.youtube.com/embed/15tLVw0V-bM" frameborder="0" allowfullscreen></iframe>',
								'<iframe width="560" height="315" src="https://www.youtube.com/embed/15tLVw0V-bM" frameborder="0" allowfullscreen></iframe>'
								];
		for(i=0;i<youtube_videos.length;i++){
			$("#container").append("<div id='vid'></div>");
			
		}
			var video = $('#vid');
		for(i=0;i<youtube_videos.length;i++){
			
			video.html(youtube_videos[i]);
			video = video.next();
		}
		</script>
	</div>
<script src="arcive.js"></script>	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
