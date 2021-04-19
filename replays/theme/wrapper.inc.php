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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.1823743796738737" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.6298572780595155" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.6446502406794143" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.5405458874750684" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.46104578365694526" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.9148757561690506" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.3741486985130622"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.25618791040441136" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.20209612598625193">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7468700171956697">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.6080459464118171">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.00816525823976777">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6585750808732544"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.9667295655030868"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.6236080826622481"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4720879867775758"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.0925955701570862"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0823966835038199"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.5032574545891695"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.45783136829900384"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.8437935327596366"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.2247493959726945"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.9772981534400851"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.5694311049287986"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.43906189294719034"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.3956857346560789"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.37748699894111826"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.5121184023799259"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.11980593068282896"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.9551523221693612"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.9591171888887702"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
