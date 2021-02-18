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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.7089561227080612" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.6066399000702398" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.13406766037351403" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.5921310403122702" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.10297640394736507" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.1895873235803449" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.9144389335067213"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.7240660655305169" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9710491503688814">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.20871811576288923">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.2890612501790617">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.5686342627802388">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5136605925268216"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.3913833456408242"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.8201437251308585"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9382149306689118"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.8071764630606701"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.39513914085192825"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.44737444492738376"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.570653620042604"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.964480172131793"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.16396096955416772"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.8048366387826964"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.19440517863475892"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.1467438760959241"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.983642212861894"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.6329649073730614"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.8230322056698822"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.23716930116069856"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.22619460145239967"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.836636164918731"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
