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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.17400188204792166" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.4921181410891575" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.0161884228379241" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.7783838206006335" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.6958529284526" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.6314482487540449" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.023165594051267613"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.5617286169537716" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5113128464554346">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.01724076702151134">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.2164748543403059">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.8558641560865763">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.227207045233222"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.16961572055933138"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.812664956456651"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.67462150371764"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.4953393947646372"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4135977903434662"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.7893494205743341"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.9308985833709584"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.6932823160449437"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.35512388025543395"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.1672500079785484"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.7086468661734249"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.9540762209928542"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.22407775746750658"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.11276970139693687"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.7894244117577804"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.7735297758184247"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.439000187652576"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.7048027524905645"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
