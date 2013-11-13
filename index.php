<!DOCTYPE html>
<html>
	<head>
		<script>
			// Retina detection
			if ((window.devicePixelRatio === undefined ? 1 : window.devicePixelRatio) > 1 && document.cookie.indexOf('HTTP_IS_RETINA') === -1) {
				document.cookie = 'HTTP_IS_RETINA=1;path=/';
				window.location = window.location;
			} else if ((window.devicePixelRatio === undefined ? 1 : window.devicePixelRatio) <= 1 && document.cookie.indexOf('HTTP_IS_RETINA') > -1) {
				document.cookie = 'HTTP_IS_RETINA=0;path=/';
			}
		</script>
	</head>
	<body><?php

		// 
		$size = '';
		if (isset($_COOKIE['HTTP_IS_RETINA']) && $_COOKIE['HTTP_IS_RETINA']) {
			$size = '@2x';
		}

		?><img src="img/amazing<?php echo $size; ?>.jpg" alt="Amazing" width="186" height="87" />
	</body>
</html>