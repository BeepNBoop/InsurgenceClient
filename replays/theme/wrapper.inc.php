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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.36780708760115144" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.9063124496644799" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.2679959473747964" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.6455481098337548" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.5939006180568338" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.49700406307383727" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.2101352005146162"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.005538737216019385" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2971190776123902">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5887110064812151">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.2514030462509924">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.5073180604699934">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.928108593500931"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.6206253704847671"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.4282642746607628"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6375987904505305"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.572625203081552"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8965825830387875"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.8972441640800035"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.4516822637939859"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.9161406143553148"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.9772673114334682"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.31018678834958924"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.8683912060385957"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.05019588675247588"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.9327080530690413"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.8299821868523629"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.4213177344775392"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.764710007422053"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.6620140082211945"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.7056481680349846"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
