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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.3840514588769526" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.8457891877303827" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.49941072103261375" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.5238802587875113" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.1807215025325677" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.7515692004094852" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.7876234238589324"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.4827700193594826" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9259973015742919">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9360370008374577">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.01710892040767331">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.816629317966924">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.12390301136417325"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.7449200674999925"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.42728922349042087"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7851512558663865"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.9614221246500843"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7585384830888566"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.6175294714742146"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.3365743207112395"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.7338122669110565"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.033851253495739586"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.7348531556461391"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.5480300453469327"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.2549436618992367"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.34436518937668237"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.11043977978699626"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.31306208124701995"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.7928337485466204"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.0931275547564594"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.6560390567507315"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
