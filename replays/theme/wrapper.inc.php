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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.905048172509346" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.6156497701845765" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.7953302495606906" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.5909484332836781" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.4091434722925609" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.713677440431941" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.04559109622917723"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.2852429096196285" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8054446636811583">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.925390532156751">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.13456892997230763">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.824752463828003">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3653752416587819"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.05060440412477707"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.8008769287175699"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.32420594387330803"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.16625031338164287"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.226823837673386"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.052777303900438444"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.7044811862488873"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.08495124261606168"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.4508337762931307"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.279142991471103"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.2365615407823889"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.48419010640914184"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.6647500904828292"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.6614852512895901"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.5524218743986724"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.7464869744822726"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.7984919539224986"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.5748444648216555"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
