let localStream, remoteStream, peerConnection;

async function startConference() {
    try{
        // Get local audio stream
        localStream = await navigator.mediaDevices.getUserMedia({ audio: true });

        // Set up local video element
        const localVideo = document.getElementById('localvideo');
        localVideo.srcObject = localStream;

        // Create peer connection
        peerConnection = new RTCPeerConnection();

        // Add local stream to peer connection
        localStream.getTracks().forEach(track => {
            peerConnection.addTrack(track, localStream);
        });

        // Set up remote video element
        const remoteVideo = document.getElementById('remotevideo');
        peerConnection.ontrack = event => {
            remoteStream = event.streams[0];
            remoteVideo.srcObject = remoteStream;
        };

        // Set up ICE candidates
        peerConnection.onicecandidate = event => {
            if (event.candidate) {
                const iceCandidate = {
                    candidate: event.candidate.candidate,
                    sdpMLineIndex: event.candidate.sdpMLineIndex,
                    sdpMid: event.candidate.sdpMid
                };
                sendMessage(iceCandidate);
            }
        };

        // Create offer and set local description
        const offer = await peerConnection.createOffer();
        await peerConnection.setLocalDescription(new RTCSessionDescription(offer));

        // Send offer to the other participants
        sendMessage(offer);
    } catch (error) {
        console.error(error);
    }
}

function stopConference() {
    // Close peer connection and local stream
    peerConnection.close();
    localStream.getTracks().forEach(track => track.stop());
}

function sendMessage(message) {
    // Send message to server
    console.log('Sending message:', message);
}