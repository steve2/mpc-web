<?php
function PrintFooter($root) {
	echo <<<EOD
		<nav class="navbar navbar-fixed-bottom navbar-inverse" id="footer" style="max-height:40px;">
			<a class="navbar-brand" href="{$root}/index.php">
				<img src="{$root}/pics/mpcbrand.png" class="img-responsive" style="margin-top: -15px; margin-bottom: -15px; height: 50px; width: 50px;">
			</a>
			<ul class="nav navbar-nav pull-right small" id="navbar-copyright">
				<li class="small">mpcgaming.com &#169; 2015 - All rights reserved </li>
			</ul>
		</nav>
EOD;
}
 ?>
