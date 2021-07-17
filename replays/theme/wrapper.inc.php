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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.39869332430450877" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.48123368577530345" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.6534247074236852" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.3996811779890763" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.21894120849118348" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.16254001471873836" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.5837578200181555"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.4318319346671733" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6846967137928166">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8286482197707692">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.03837626554236717">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.1517161108349665">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.638488238892446"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.2750563341241983"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.8192532307639795"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43159770671246456"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.9166636864785913"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.10410137402043196"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.6360874561846912"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.7537630165570837"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.6366045180922053"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.319654727286961"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.4314174192791238"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.7392140042948481"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.6494423696091001"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.9661347773661477"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.9587933590629716"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.09801281764657355"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.3148846314144591"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.9126163274814079"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.7444487845806447"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
