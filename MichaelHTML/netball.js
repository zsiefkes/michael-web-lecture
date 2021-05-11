document.getElementById('team_select').addEventListener('input', async function() {
	let player_select = document.getElementById('player_select')
	player_select.innerHTML = ''; // Empty the player list
	let f = await fetch("netball-json.php?mode=team-players-json&team=" + this.value);
	let j = await f.json();
	
	
	for (let p of j.players) {
		let opt = document.createElement('option')
		opt.value = p.id
		opt.textContent = p.name
		player_select.appendChild(opt);
	}
})

document.getElementById('player_select').addEventListener('input', async function() {
	let f = await fetch("netball-json.php?mode=player-json&player=" + this.value);
	let j = await f.json();
	document.getElementById('player_name').textContent = j.name;
	document.getElementById('player_height').textContent = j.height;
	document.getElementById('player_hometown').textContent = j.hometown;
})