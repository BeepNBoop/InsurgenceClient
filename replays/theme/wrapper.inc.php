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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.6998550378114887" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.8071542602656301" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.1355801072154761" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.533326195837952" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.9479159529286958" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.9356327753759108" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.5848408381408499"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.9886547956371461" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9630305311461973">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.09386838394601593">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.9451695827160362">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.7642762858131997">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.48556498350237054"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.029786791787304256"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.41465950840752597"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8690122011768786"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.33925496159922797"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.36817095751538376"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.7196627485733367"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.9989333272711314"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.46423747453387976"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.5666775817295557"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.942765961664717"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.646460863395202"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.42258980499465726"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.9762999046324918"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.8191095909304682"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.05890061301017169"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.3124983987558827"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.8338882427531908"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.6475355919737851"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
