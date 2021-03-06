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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.12851869702025276" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.009132361740282535" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.11842313263341908" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.9765376923475355" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.8811847000534123" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.6744352228939237" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.7227133457508914"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.04456891063569124" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2836796021802219">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3179327336034419">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.5622405512654045">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.8910991226248945">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.10321550891521603"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.46317464526808805"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.06284910296403301"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.06496065396103923"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.8239218976144251"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8181234687747467"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.27606991175074524"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.2652535234735962"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.37115995320976314"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.48516456820699516"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.25901059875011745"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.04186263158526948"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.5794600083870549"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.6380924273884643"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.14859498340082866"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.6134895199751382"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.5168448981282536"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.10676944353217821"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.1399062558964952"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
