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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.08316219602470465" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.8995905536834672" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.29166528287787163" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.7011194376350727" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.6734379928967735" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.684732757654873" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.10067023099927219"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.2538045600343677" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6184292768259556">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9362755050089748">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.2210835560226181">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.2531307451325253">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4365255942500117"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.3988923174634922"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.3482293267595715"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3008261258850051"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.2972977572294506"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5571622325722658"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.7533168803795065"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.014544523208943838"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.5312403760025264"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.9807808992088163"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.0780507843305065"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.5922582742953086"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.5264929545471815"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.6545666115264843"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.1575207752372021"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.6829644595643516"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.5276978023229988"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.8458057573431814"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.03549699044372323"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
