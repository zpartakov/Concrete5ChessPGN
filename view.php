<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<script src="view.js" type="text/javascript"></script>
<script type="text/javascript">
   "use strict";
   SetImagePath ("blocks/chesspgn/images/alpha/24");
   SetImageType("png");
   SetGameSelectorOptions("Select a KK game...", false, 0, 8, 0, 0, 0, 0, 10); // (head, num, chEvent, chSite, chRound, chWhite, chBlack, chResult, chDate);
   SetCommentsOnSeparateLines(true);
   SetAutoplayDelay(2500); // milliseconds
   SetAutostartAutoplay(true);
   SetAutoplayNextGame(true);
   SetInitialGame("random");
   SetShortcutKeysEnabled(false);
</script>
<!-- paste your PGN below and make sure you dont specify an external source with SetPgnUrl() -->
<form style="display: none;"><textarea style="display: none;" id="pgnText">

<div id="ChesspgnBlock<?php echo intval($bID)?>" class="ChesspgnBlock">
<?php echo $content; ?>
</div>


</textarea></form>
<!-- paste your PGN above and make sure you dont specify an external source with SetPgnUrl() -->


<center>
<b><span id="GameWhite"></span>&nbsp;-&nbsp;<span id="GameBlack"></span>&nbsp;&nbsp;<span id="GameResult"></span></b>
<p></p>
<div id="GameBoard"></div>
<p></p>
<div id="GameButtons"></div>
<p></p>
<div id="GameSelector"></div>
</center>