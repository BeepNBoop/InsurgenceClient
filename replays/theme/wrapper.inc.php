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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.8936126967841078" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.8202046357377073" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.13516367582121736" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.32023508967617786" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.7296323523222366" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.43669575684359363" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.959628477998594"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.3838980161346206" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5981830427478503">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4500711598994187">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.8093384677301878">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.1297022836286481">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14632508691487023"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.7534836254306685"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.8435968395283915"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5397867696570373"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.24717550101248742"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7901464100846292"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.43249316313865704"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.8557184338003005"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.1622815859383313"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.5345676514589317"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.028375226105566975"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.6057462787876087"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.3773206457443803"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.453611917600377"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.06948316344335614"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.4661458816902655"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.5372742335713285"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.06951462434575295"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.683923031823044"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
