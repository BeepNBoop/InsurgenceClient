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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.7761504108512278" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.9381102972473991" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.9191282828648097" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.6216487308416856" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.7603336231743596" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.8251034685976288" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.5622370980892106"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.0951680264188246" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7342809644973598">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5033884213689348">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.9465864642782422">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.5727929920828629">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9256351646175678"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.3413137389371428"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.2640675269350039"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6023559043138591"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.23350928836815288"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7144620525979235"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.9997615156783559"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.6528762496098155"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.5938349668122596"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.4397701396149887"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.6722413620611984"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.9666667189373055"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.07013884680743665"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.8287923571918574"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.3692987688502647"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.7419528026679989"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.585944468844489"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.8202302428151473"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.16705756506146963"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
