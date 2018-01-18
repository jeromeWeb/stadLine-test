const avatarBet = $('[data-stape="bet"] .players'),
	avatarResult = $('[data-stape="result"] .players'),
	avatarScore = $('[data-stape="score"] .players'),
	avatarScoreParty = $('[data-stape="scoreParty"] .players'),
	avatarDealer = $('.dealer-js')
	tabs = [avatarBet, avatarResult, avatarScore, avatarScoreParty];

for ( tab in tabs ) {
	for ( let i = 1; i <= tabs[tab].length; i++ ) {
		tabs[tab].eq(`${i-1}`).find('.avatar').addClass(`avatar${i}`);
	}
}

$('.dealer-js')
	.find('.avatar')
	.addClass('avatarXl')
	.removeClass('avatar');