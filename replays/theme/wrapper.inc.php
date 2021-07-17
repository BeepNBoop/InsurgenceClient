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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.874603086335134" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.16172968794542686" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.6332170165116573" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.4171932794578699" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.019211268163051187" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.3645909072143436" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.5167969306679832"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.4958502836116041" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4661576216651657">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9014425200348004">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.2362703894878806">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.6038316787089806">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7478817820628814"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.5376631823705877"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.47028366416268397"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9589968939551681"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.09275085961158003"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3347406050009545"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.16334455268197412"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.7074974521525381"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.901313123501083"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.45977343901431844"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.7172826698813239"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.19420718569664674"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.2062657712482392"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.5746716961293081"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.29596363570530815"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.2322459089008453"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.5831382153419433"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.10577818246551618"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.9676979155765897"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
