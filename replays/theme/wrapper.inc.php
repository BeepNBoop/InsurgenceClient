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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.5220875907525835" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.6171650553975068" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.8313269375518404" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.9303551497954814" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.017177014902230114" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.33908805088227756" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.15871423205425605"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.20075753938704222" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.12031793828739645">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.20377637143853944">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.5483569682229616">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.8160864601977214">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.484024662239233"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.5006864271975453"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.8902164810000521"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.00039141057699132453"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.44822282402735536"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.49183452842404085"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.9349856227878866"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.8707889674108609"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.6446146465357188"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.891037061785577"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.9379165996890304"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.5120144593877802"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.8103751821848459"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.6276812463917134"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.7036851476869601"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.24595799040266053"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.5168638296942916"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.2265524283741358"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.14310224030555885"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
