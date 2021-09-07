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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.30651359759636954" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.7023752760013486" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.8672148155615518" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.6849705886945303" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.3674736243138532" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.5648776748336222" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.9448266324641104"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.4436500151219185" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9164543649815518">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2767015536563302">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.8457160539867892">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.2522922599515023">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4073272870449831"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.8856601465562031"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.24834081038534594"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5552850156356808"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.27574169223080136"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.38143571144161337"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.020139352456776782"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.20895425322700545"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.6985713851396991"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.4555025041046983"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.7575148379587646"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.525278353625815"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.9958345561680839"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.08755247993086157"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.933869723035456"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.030278324491388675"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.29338486668978336"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.46633055607209917"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.5062707354679674"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
