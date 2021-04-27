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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.2924616470186401" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.48637352729043104" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.2883141634862503" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.5370220822338789" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.7712425020380773" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.7633966875286002" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.8516561817886097"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.4044545287643817" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8537555220601782">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.26467478217827156">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.34595498529742486">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.2995578460375399">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.007995615806699385"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.7839049725117408"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.6313270829836921"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8864300902322986"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.31340242330172696"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.09493358927279227"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.6071853428273848"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.2621940076979483"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.7017130161625631"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.6472553410834332"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.9881640574488595"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.515885336957498"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.6851856519955501"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.42559662812470145"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.2665297424548496"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.7201212125681082"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.5002616031339129"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.13087261923689586"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.6755449834184764"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
