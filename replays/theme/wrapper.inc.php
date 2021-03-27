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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.7132003310387531" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.40305030827301125" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.0694352092631001" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.10840647535305137" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.081987156989487" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.8378494797522136" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.42569597739629916"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.6198816468093609" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12232064320943281">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9275348692069352">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.21059951549099498">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.04288242123049235">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.10566844237933926"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.39061968868361374"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.7972700246235691"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.18142682388121956"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.28117783627233517"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3009532860047188"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.07698942407582154"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.7885379304123179"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.30531139124745144"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.21384807736376765"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.7750464375113881"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.6203399217214283"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.46964813797439975"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.4807608862885413"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.6029917716301991"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.5611749211818045"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.10066819758854106"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.16861614458033025"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.8124750838929762"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
