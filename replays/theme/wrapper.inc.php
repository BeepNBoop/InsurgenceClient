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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.2299667372623233" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.9937737131663997" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.49326488142484015" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.517783286363491" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.19861206788421026" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.6707120080952542" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.5531039335537649"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.4280729646522139" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7179224899877854">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5459328077810823">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.5958364775927363">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.6344570746317901">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5489744797431519"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.9311848583172864"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.7320135652821169"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.30049003377619"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.7727204795677252"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5156326355594052"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.5630014920343389"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.2677343267322041"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.4843183380267113"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.3579271309271701"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.5924831293263875"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.11411617008562391"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.7309868567317599"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.9841058691841649"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.13072304507767463"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.8121848206255398"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.5083170443489229"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.69780111285486"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.9118305267468754"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
