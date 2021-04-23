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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.383191826237133" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.21845608630482838" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.5517985637832348" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.01961132868647497" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.8794417872064189" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.8084169825638114" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.24984789645791827"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.2284350150597263" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.018737078308344257">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6740639890743545">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.8129664027842824">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.721051188198687">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7016472644596421"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.2463677172056149"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.49226164191042043"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6946605372946448"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.2163566316937433"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8567467173086525"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.20992742178599721"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.7875882570826336"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.6128547642272018"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.7363895075382185"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.23680533328910647"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.4775667164263673"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.8839482835406183"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.7779241051428316"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.888245197959783"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.2310066369269852"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.06840929843815524"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.6561959448088563"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.1914028555632723"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
