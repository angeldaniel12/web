<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch - Sala de Live Lugares</title>
        <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">

    <!-- CSS Reset -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

    <!-- Milligram CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <script  src="https://cdn.metered.ca/sdk/video/1.4.5/sdk.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Sala 5</h1>
        <hr>
        <div class="row">
            <div class="column">
                <h2>Controles</h2>
                <hr>
                
                <div class="row">
                    <div class="column">
                        <button id="share-camera">Encender camára</button>
                        <button id="share-mic">Encender micrófono</button>
                        <button id="share-screen">Compartir pantalla</button>
                    </div>
     
                </div>
                <div class="row">
                    <div class="column">
                        <label for="camera">Camara:</label>
                        <select name="camera" id="camera-list">
                            <option value=""></option>
                        </select>
                    </div>

                    <div class="column">
                        <label for="mic">Micrófono:</label>
                        <select name="mic" id="mic-list">
                            <option value=""></option>
                        </select>
                    </div>

                </div>
            </div>
            <div class="column">
                <h2>Vista Previa</h2>
                <hr>
                <video style="max-width: 400px" id="video" src="" autoplay muted></video>
            </div>
        </div>
    </div>

    <script>
        const ROOM_URL =  "chats.metered.live/sala" 

        const meeting = new Metered.Meeting();
        async function joinMeeting() {
            const response = await meeting.join({
                roomURL: ROOM_URL
            });

            const microphones  = await meeting.listAudioInputDevices();
            const cameras = await meeting.listVideoInputDevices();

            let cameraList = [];
            for (let camera of cameras) {
                cameraList.push(`<option value=${camera.deviceId}>${camera.label}</option>`);
            }
            let micList = [];
            for (let mic of microphones) {
                micList.push(`<option value=${mic.deviceId}>${mic.label}</option>`);
            }
            document.getElementById("camera-list").innerHTML = cameraList.join("");
            document.getElementById("mic-list").innerHTML = micList.join("");
        }
        joinMeeting();


        async function selectCamera(event) {
            await meeting.chooseVideoInputDevice(event.target.value);
        }
        
        async function selectMic(event) {
            await meeting.chooseAudioInputDevice(event.target.value);
        }

        async function shareCamera() {
            await meeting.startVideo();
        }
        
        async function shareMic() {
            await meeting.startAudio();
        }
        
        async function shareScreen() {
            await meeting.startScreenShare();
        }

        document.querySelector("#share-camera").addEventListener("click", shareCamera);
        document.querySelector("#share-mic").addEventListener("click", shareMic);
        document.querySelector("#share-screen").addEventListener("click", shareScreen);
        document.querySelector("#camera-list").addEventListener("change", selectCamera);
        document.querySelector("#mic-list").addEventListener("change", selectMic);


        meeting.on("localTrackStarted", function(trackItem) {
            if (trackItem.type === "video") {
                const stream = new MediaStream();
                stream.addTrack(trackItem.track);
                document.querySelector("#video").srcObject = stream;
            }
        });

        meeting.on("localTrackUpdated", function(trackItem) {
            if (trackItem.type === "video") {
                const stream = new MediaStream();
                stream.addTrack(trackItem.track);
                document.querySelector("#video").srcObject = stream;
            }
        });
    </script>
</body>
</html>