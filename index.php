<!DOCTYPE html>
<html>
<head>
	<title>Slot Machine Game</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Slot Machine Game</h1>
	<div id="gameContainer">
		<div id="reelsContainer">
			<div id="reel1"></div>
			<div id="reel2"></div>
			<div id="reel3"></div>
		</div>
		<div id="symbolsContainer">
			<div class="symbol" id="symbolCherry">Cherry</div>
			<div class="symbol" id="symbolLemon">Lemon</div>
			<div class="symbol" id="symbolOrange">Orange</div>
			<div class="symbol" id="symbolPlum">Plum</div>
			<div class="symbol" id="symbolBell">Bell</div>
			<div class="symbol" id="symbolBar">Bar</div>
			<div class="symbol" id="symbolSeven">Seven</div>
			<div class="symbol" id="symbolJackpot">Jackpot</div>
		</div>
		<div id="payoutsContainer">
			<div class="payout">1x: <span id="payout1">0</span></div>
			<div class="payout">2x: <span id="payout2">0</span></div>
			<div class="payout">3x: <span id="payout3">0</span></div>
			<div class="payout">4x: <span id="payout4">0</span></div>
			<div class="payout">5x: <span id="payout5">0</span></div>
			<div class="payout">6x: <span id="payout6">0</span></div>
			<div class="payout">7x: <span id="payout7">0</span></div>
			<div class="payout">Jackpot: <span id="payout10">0</span></div>
		</div>
		<div id="controlsContainer">
			<div id="balanceContainer">
				Balance: <span id="balance">100</span>
			</div>
			<div id="betContainer">
				Bet: <input type="number" id="betAmount" min="1">
			</div>
			<button id="spinButton">Spin</button>
			<button id="bonusButton" style="display: none;">Play Bonus</button>
		</div>
		<div id="resultsContainer">
			<div id="totalPayout"></div>
			<div id="newBalance"></div>
		</div>
		<div id="bonusFeature" style="display: none;">
			<h2>Bonus Feature</h2>
			<p>Spin the bonus reel for a chance to win the bonus payout!</p>
			<div id="bonusReel"></div>
		</div>
	</div>
	<script src="script.js"></script>
</body>
</html>
