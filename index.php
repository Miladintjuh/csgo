
<!DOCTYPE html>
 
<head>
	<title>Maat wat CSGO jij?</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
 
<body>
  <!-- 	Knettahhh  -->
	<audio id="broer" src="audio/knettah/grotebroer.mp3"></audio>
	<audio id="dak" src="audio/knettah/dak.mp3"></audio>
	<audio id="maat" src="audio/knettah/maat.mp3"></audio>
	<audio id="goud" src="audio/knettah/goud.mp3"></audio>
	<audio id="kanka" src="audio/knettah/kankaneus.mp3"></audio>
	<audio id="knetta" src="audio/knettah/knetta.mp3"></audio>

	  <!-- 	CSGO ingame  -->
	<audio id="planted" src="audio/csgo/planted.mp3"></audio>
	<audio id="defused" src="audio/csgo/defused.mp3"></audio>
	<audio id="ready" src="audio/csgo/ready.mp3"></audio>

	  <!-- 	music	  -->
	<audio id="bochka" src="audio/music/bochka.mp3"></audio>
	<audio id="dawai" src="audio/music/dawai.mp3"></audio>
	<audio id="anthem" src="audio/music/anthem.mp3"></audio>
	<audio id="dimitri" src="audio/music/dimitri.mp3"></audio>
	<audio id="djfuck" src="audio/music/djfuck.mp3"></audio>
	
	 <!-- NL meuk -->
	 <audio id="amigo" src="audio/nederlands/amigo.mp3"></audio>
	 <audio id="man" src="audio/nederlands/man.mp3"></audio>


<!-- Knettahhh play -->
		<div class="col-md-8">
			<button disabled>play</button>
				<button onclick="document.getElementById('broer').play()">Grote broer</button>
				<button onclick="document.getElementById('dak').play()">Dak</button>
				<button onclick="document.getElementById('goud').play()">Goud</button>
				<button onclick="document.getElementById('knetta').play()">Helemaal knett&acirc;h</button>
				<button onclick="document.getElementById('maat').play()">Maat, wat doe jij?</button>
				<button onclick="document.getElementById('kanka').play()">K&acirc;nkahneus</button>
		 </div>
  	</div>

 <!-- Knettahhh pause -->
		<div class="col-md-8">
			Pause:
				  <button onclick="document.getElementById('broer').pause()">Grote broer</button>
				  <button onclick="document.getElementById('dak').pause()">Dak</button>
				  <button onclick="document.getElementById('goud').pause()">Goud</button>
				  <button onclick="document.getElementById('knetta').pause()">Helemaal knett&acirc;h</button>
				  <button onclick="document.getElementById('maat').pause()">Maat, wat doe jij?</button>
				  <button onclick="document.getElementById('kanka').pause()">K&acirc;nkahneus</button>

		  </div>
  	</div>


  <br><br><br><br><br><br>


<!-- CSGO play -->
			<div class="col-md-8">
				<button onclick="document.getElementById('planted').play()">Planted</button>
				<button onclick="document.getElementById('defused').play()">Defused</button>
				<button onclick="document.getElementById('ready').play()">Ready</button>
			</div>

  <!-- CSGO pause -->
  <div class="col-md-8">
	  <button onclick="document.getElementById('planted').pause()">Planted</button>
	  <button onclick="document.getElementById('defused').pause()">Defused</button>
	  <button onclick="document.getElementById('ready').pause()">Ready</button>
  </div>


  <br><br><br><br><br><br>


  <!-- music play -->
  <div class="col-md-8">
			<button onclick="document.getElementById('bochka').play()">Bochka, Bass</button>
			<button onclick="document.getElementById('dawai').play()">Dawai Dawai</button>
			<button onclick="document.getElementById('anthem').play()">Russian Anthem</button>
		</div>

  <!-- music pause-->
  		<div class="col-md-8">
			  <button onclick="document.getElementById('bochka').pause()">Bochka, Bass</button>
			  <button onclick="document.getElementById('dawai').pause()">Dawai Dawai</button>
			  <button onclick="document.getElementById('anthem').pause()">Russian Anthem</button>
		</div>



  <br><br><br><br><br><br>


  <!-- Nederlands play-->
  <div class="col-md-8">
			<button onclick="document.getElementById('man').play()">Man man man</button>
			<button onclick="document.getElementById('amigo').play()">Amigo</button>
  </div>

  <!-- Nederlands pause-->
  <div class="row">
  <div class="col-md-8">
	  <button onclick="document.getElementById('man').play()">Man man man</button>
	  <button onclick="document.getElementById('amigo').play()">Amigo</button>
  </div>
  </div>
<br>
	<div class="row">
		<div class="col-md-2">
			<div class="col-md-4">
				hoi
			</div>
			<div class="col-md-4">
				hoi
			</div>
			<div class="col-md-4">
				hoi
			</div>
		</div>
</body>


</html>
