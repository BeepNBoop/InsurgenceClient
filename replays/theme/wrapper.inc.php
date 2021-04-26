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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.7026448447602078" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.3243869908519865" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.8365199821088449" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.9242234722269167" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.24753952300143434" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.4803207708483539" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.9210142709475291"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.46363066486433535" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.09781939000293405">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2764216854582975">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.9493203967861485">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.20708173549461728">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9956199195684627"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.5343275382954873"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.20258906761155004"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.714134341929022"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.7363705903115394"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07953514068348477"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.22340006471183216"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.8559161380136564"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.2940076186378826"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.948687956908957"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.8753424107836723"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.19723118874925238"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.9180619984067258"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.7481943848295349"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.5699388708019295"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.14438057439132201"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.4419285972612852"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.32696056664191087"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.6562209750691452"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
