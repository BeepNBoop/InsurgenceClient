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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.4121576897085095" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.12775874825034106" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.4801305773982312" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.20049135808643537" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.38566805934840565" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.8957856543026921" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.3773274307347181"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.5769040688847755" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.07036136146815575">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.35756848479846703">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.6064598349812442">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.3987375082699678">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.29849394467826484"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.18560374061439"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.2700520934516877"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8527378667725598"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.2980496674491706"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9770416524821786"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.8093367188184188"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.42416946297739044"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.9012519443036595"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.2999685736810178"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.1012782694884129"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.6000545978220506"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.47324084925364973"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.44887978691777897"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.6815771636107995"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.7138599651770423"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.8281934022673332"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.14906469200439187"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.8576512530600009"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
