<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.41799835389087936" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.8851531043211065" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.9239508384213924" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.3394347843502288" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.7960484557055574" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.4708713170397034" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.04372891432167503"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.22558179964352076" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4434948279641884">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.11027351955565279">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.4543815971709275">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.9851775860226268">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8565203338556393"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.6055034084459228"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.9780765446588948"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.05692439524105697"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.9560755492139337"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.33000870708344054"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.24489755837548555"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.32520690259502394"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.37200393657765396"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.7037171983932728"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.8407638352970308"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.1876246123912897"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.5345236584009823"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.3552536825575028"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.2741772626022736"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.14583769141618252"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.060526659762162316"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.9691759134599216"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.11046658974867629"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
