<html>
<head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/archive.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
	<?php
	include 'navbar.php';
	?>
	<div id="container">
		<script>
		var youtube_videos = ['zh9BTTuOk3g','yXtWhcag5CA', 'bNKRQ7KgtfM', 'joODd099ncs', 'mDEaX8XVsKI', 'AtpzG6q7bj0','02kgVTY3ZuM','Fzfd1tYfjwg','KsXKyUcv4R4',
		'z3QcBQA3Z3Y','Vk4BL_PoM0g','XbqRY4v08UM','15AUFP0fmrU','4LW8nETl5uQ','RJBwT-kcENI','nvfxcfTLuMA','eQ3kJd0zZxw','69H4Hk5OB8o','6vZUALTQMGo','nsQ-DSSUOi0',
		'tDGhmJcgZzg','Utf3UQ04Tv8','d6Snm1JWy48'
							];
		for(i=0;i<youtube_videos.length;i++){
			$("#container").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12' id='vid'><iframe frameborder='0' allowfullscreen></iframe></div>");
			
		}
			var video = $('#vid');
			
		for(i=0;i<youtube_videos.length;i++){
			
			video.children('iframe').attr('src','https://www.youtube.com/embed/' + youtube_videos[i]);
			video = video.next();
		}
		</script>
	</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
