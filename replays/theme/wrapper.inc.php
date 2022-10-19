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
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/font-awesome.css?0.41459549146178754" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/panels.css?0.27031682940220536" />
	<link rel="stylesheet" href="//neodrafttest.herokuapp.com/theme/main.css?0.8025363545794417" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/battle.css?0.3697433280308762" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/replay.css?0.16340228635915022" />
	<link rel="stylesheet" href="//neodraft.herokuapp.com/style/utilichart.css?0.6020927342201552" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/?0.7470835506510654"><img src="//neodrafttest.herokuapp.com/images/pokemonshowdownbeta.png?0.14019751851730655" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7651031461985052">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.19172964299549178">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//neodrafttest.herokuapp.com/ladder/?0.6325711399416236">Ladder</a></li>
				<li><a class="button nav-last" href="//neodrafttest.herokuapp.com/forums/?0.9908618243867515">Forum</a></li>
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
	<script src="//neodraft.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7997210700479747"></script>
	<script src="//neodraft.herokuapp.com/js/lib/lodash.core.js?0.5647364414782174"></script>
	<script src="//neodraft.herokuapp.com/js/lib/backbone.js?0.5968202077220883"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.971960775804825"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//neodraft.herokuapp.com/js/lib/jquery-cookie.js?0.8921385428263826"></script>
	<script src="//neodraft.herokuapp.com/js/lib/html-sanitizer-minified.js?0.48405485197565845"></script>
	<script src="//neodraft.herokuapp.com/js/battle-sound.js?0.7811748201264141"></script>
	<script src="//neodraft.herokuapp.com/config/config.js?0.18958300938683226"></script>
	<script src="//neodraft.herokuapp.com/js/battledata.js?0.6934184166315487"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini.js?0.7151578916810544"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex-mini-bw.js?0.7032475111178433"></script>
	<script src="//neodraft.herokuapp.com/data/graphics.js?0.6906927469202471"></script>
	<script src="//neodraft.herokuapp.com/data/pokedex.js?0.14738740091358693"></script>
	<script src="//neodraft.herokuapp.com/data/items.js?0.472322574584668"></script>
	<script src="//neodraft.herokuapp.com/data/moves.js?0.10894778683201611"></script>
	<script src="//neodraft.herokuapp.com/data/abilities.js?0.01322917660022016"></script>
	<script src="//neodraft.herokuapp.com/data/teambuilder-tables.js?0.7940350564951022"></script>
	<script src="//neodraft.herokuapp.com/js/battle-tooltips.js?0.40786226108104984"></script>
	<script src="//neodraft.herokuapp.com/js/battle.js?0.20540947826826716"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
