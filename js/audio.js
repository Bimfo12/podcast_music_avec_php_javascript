var audioPlayer = document.getElementById('audioPlayer');
var recordButton = document.getElementById('recordButton');
var activer = false;
var recorder = null; // Ajoutez cette ligne pour stocker l'objet MediaRecorder

// Obtenez l'accès à l'entrée audio
navigator.mediaDevices.getUserMedia({ audio: true })
 .then(function(stream) {
 var audioContext = new AudioContext();
 var source = audioContext.createMediaStreamSource(stream);
 recorder = new MediaRecorder(stream); // Stockez l'objet MediaRecorder

 // Événement pour la fin de l'enregistrement
 recorder.addEventListener('dataavailable', function(e) {
 var audioFile = new Blob([e.data], { type: 'audio/wav' });
 var audioURL = URL.createObjectURL(audioFile);
 // Afficher le fichier audio dans l'élément audio
 audioPlayer.src = audioURL; 
 // Envoyer le fichier audio au serveur
 var formData = new FormData();
 formData.append('audio', audioFile);
 var xhr = new XMLHttpRequest();
 xhr.open('POST', 'audio.php', true);
 xhr.onload = function() {
 console.log('Fichier audio envoyé');
 
 };
 xhr.send(formData);
 });

 // Commencez l'enregistrement lors du clic sur le bouton
 recordButton.addEventListener('click', function() {
    activer = !activer; // Inversez l'état actuel de l'enregistrement

    if(activer == true && recorder.state === 'inactive'){ // Vérifiez si l'enregistrement est inactif
        recorder.start();
        console.log("la chrono est déjà lancé : ");
        recordButton.classList.remove('recordstopButton');
        recordButton.classList.add('recordButton');

    }
    else if(activer == false && recorder.state === 'recording'){ // Vérifiez si l'enregistrement est en cours
        recorder.stop();

        recordButton.classList.remove('recordButton');
        recordButton.classList.add('recordstopButton');
    }
});


})
.catch(function(err) {
console.log('Erreur: ' + err);
});
