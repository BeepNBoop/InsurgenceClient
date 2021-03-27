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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.2199163381257414" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.9869494976395026" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.48769852157688964" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.5000104906239904" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.12842021706663687" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.5949298407314791" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.9235742486825349"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.7998850014545802" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.30670981769531647">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9319847136921897">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.04341944077143989">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.36815354027970826">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6844640942797846"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.7356229188589416"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.6738223727285766"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.50315827917192"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.8473792021916735"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07420352607005376"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.2407100161319249"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.7282171943448781"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.40137146469236606"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.5661608335862114"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.22885308262229342"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.9909794739386839"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.17816041910055902"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.6955950717562276"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.9805582037897422"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.07439462566431154"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.486713836244983"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.9846896620118273"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.6626829100570015"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
