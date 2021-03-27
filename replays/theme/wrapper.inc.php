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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.9558450636197195" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.5514731935162234" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.2113105429004174" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.4732892225075347" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.9657096527690918" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.48644220204546773" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.8757106566646478"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.09011143991698334" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7893215702781058">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2707253211690308">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.11054701501089292">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.3855239430905675">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.19289938342371227"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.8719549835226421"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.3388803864818464"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.774355091046872"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.7399912092599263"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5746452698221887"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.7380022492839353"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.41502490909125567"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.20641480480360808"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.3730819231912519"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.4758038607463415"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.9293342584947946"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.8997459944568751"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.13313414606097318"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.9978313721682561"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.5520984307855203"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.03673404234164268"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.7573993531215901"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.47333952117908074"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
