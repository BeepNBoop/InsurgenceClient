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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.6613794795609267" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.9377061309025592" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.6771140042889336" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.24288658959116471" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.04540891614514675" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.6818862683762184" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.7792752247500261"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.007101703551284366" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.419861278415923">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4680423873887276">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.7151368464085157">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.38407130658841293">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.20190166259808517"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.5435005253518581"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.9755423372561338"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.48222530350331505"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.9732481818222218"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.3793809280224294"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.5775420721044009"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.1732433878915114"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.43243799414721984"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.8369925714376361"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.5140301265751268"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.5158322834756759"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.13829340273126745"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.46273765765191355"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.3407565365363572"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.35896652688644703"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.7335639852466889"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.9254659473750004"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.9961096831260614"></script>
	<script src="/js/replay.js?1e09ceb9"></script>

</body></html>
<?php
}
