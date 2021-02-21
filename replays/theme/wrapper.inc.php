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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.17223378767070185" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.12802538184725232" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.9110486385975181" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.8924246046402271" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.5370655675409068" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.2307353420649132" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.2934796778963247"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.9416602259163818" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.09328123080334572">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9679590543923595">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.48084945753713537">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.6793449079797478">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3671999615358259"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.631748476217354"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.05894612552581879"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.08275219588946481"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.6612305284911806"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9374418647880038"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.8663777836784132"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.7191634821608635"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.06746071045357405"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.7487506973274625"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.041780905960499215"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.8499888687010979"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.5243004956612267"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.9526836482171805"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.5076446478185004"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.12548975004720275"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.7911345266393075"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.6035334394083374"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.8436370529203792"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
