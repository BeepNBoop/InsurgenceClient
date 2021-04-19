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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.9523861082472391" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.5456106789705109" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.2287829234029446" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.01593240590748679" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.989036770399687" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.7635704550712048" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.5338846104649486"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.36182547707959833" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.007682661517087075">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7636189005193903">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.3899932659060328">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.07702060933992039">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.41633380714827783"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.5903569376147857"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.6850285916208185"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.39357344654592774"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.9411239900852573"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.43311130758332483"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.3532297333602874"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.6955780417708803"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.13649246588007458"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.3570211881410148"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.15219359071217564"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.7403897941576674"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.7753202156293928"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.4559028219800674"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.025197351697689552"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.5939646860559957"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.4027931659374553"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.2019057034686551"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.1879035703445664"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
