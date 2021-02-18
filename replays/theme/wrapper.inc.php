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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.0965201598905272" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.655407571508134" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.44995353198687815" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.8172961500292044" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.6752153704015791" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.5156357259842623" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.3070836543470634"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.12365863714837944" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9671558917665428">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8985498017731917">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.17370369932731822">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.9875409858061432">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8803086513128453"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.8999119978184"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.5492180043998411"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.573859926344783"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.55053217085939"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7773957070980817"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.7664678766665409"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.5240526819180362"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.6045466479206179"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.16410544091398904"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.6498706446090352"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.23023971481512118"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.5645859298054674"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.43616852435049136"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.37357981526767037"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.8551269671367054"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.8039597610977052"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.1690143628463443"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.4963247299230644"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
