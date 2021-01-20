 
// ......................................................
// .......................UI Code........................
// ......................................................

window.enableAdapter = true; // enable adapter.js
document.getElementById('open-room').onclick = function() {
    disableInputButtons();
    connection.open(document.getElementById('room-id').value, function(isRoomOpened, roomid, error) {
        if(isRoomOpened === true) {
          showRoomURL(connection.sessionid);
          // alert(roomid);
        }
        else {
          disableInputButtons(true);
          if(error === 'Room not available') {
            alert('Someone already created this room. Please either join or create a separate room.');
            return;
          }
          alert(error);
        }
    });
};

document.getElementById('join-room').onclick = function() {
    disableInputButtons();
    connection.join(document.getElementById('room-id').value, function(isJoinedRoom, roomid, error) {
      if (error) {
            disableInputButtons(true);
            if(error === 'Room not available') {
              alert('This room does not exist. Please either create it or wait for moderator to enter in the room.');
              return;
            }
            alert(error);
        }
    });
};

document.getElementById('open-or-join-room').onclick = function() {
    disableInputButtons();
    connection.openOrJoin(document.getElementById('room-id').value, function(isRoomExist, roomid, error) {
        if(error) {
          disableInputButtons(true);
          alert(error);
        }
        else if (connection.isInitiator === true) {
            // if room doesn't exist, it means that current user will create the room
            showRoomURL(roomid);
        }
    });
};


// ......................................................
// ................FileSharing/TextChat Code.............
// ......................................................

// document.getElementById('share-file').onclick = function() {
//     var fileSelector = new FileSelector();
//     fileSelector.selectSingleFile(function(file) {
//         connection.send(file);
//     });
// };





// ......................................................
// ..................RTCMultiConnection Code.............
// ......................................................

var connection = new RTCMultiConnection();

// by default, socket.io server is assumed to be deployed on your own URL
connection.socketURL = '/';

// comment-out below line if you do not have your own socket.io server
connection.socketURL = 'https://rtcmulticonnection.herokuapp.com:443/';


connection.extra = {
fullName: 'any name',
email: 'omkar@gmail.com',
// typeof_mode:"desktop",
};

var chatContainer = document.querySelector('.chat-output');



function appendDIV(event) {
    var sender = event.userid;
    // var senderFullName = event.extra.fullName;
    var div = document.createElement('div');
    div.innerHTML = event.data || event;
chatContainer.insertBefore(div,chatContainer.firstChild);
    div.tabIndex = 0;
    div.focus();
    document.getElementById('input-text-chat').focus();
 
}

connection.socketMessageEvent = 'video-conference-demo';

connection.session = {
    audio: true,
    video: true,
    oneway: false,
    // screen: true,
    data: true,
    broadcast: true
};

connection.sdpConstraints.mandatory = {
    OfferToReceiveAudio: true,
    OfferToReceiveVideo: true
};

// disable default videos to fix play/pause bugs
connection.autoCreateMediaElement = true;

connection.videosContainer = document.getElementById('videos-container');
connection.onstream = function(event) {
 
    var existing = document.getElementById(event.streamid);
    if(existing && existing.parentNode) {
      existing.parentNode.removeChild(existing);
    }

    event.mediaElement.removeAttribute('src');
    event.mediaElement.removeAttribute('srcObject');
    event.mediaElement.muted = true;
    event.mediaElement.volume = 0;

    var video = document.createElement('video');
    video.controls = true;

    try {
        video.setAttributeNode(document.createAttribute('autoplay'));
        video.setAttributeNode(document.createAttribute('playsinline'));
    } catch (e) {
        video.setAttribute('autoplay', true);
        video.setAttribute('playsinline', true);
    }

    if(event.type === 'local') {
      video.volume = 0;
      try {
          video.setAttributeNode(document.createAttribute('muted'));
      } catch (e) {
          video.setAttribute('muted', true);
      }
    }
    video.srcObject = event.stream;

    var width = parseInt(connection.videosContainer.clientWidth / 3) - 20;
    var mediaElement = getHTMLMediaElement(video, {
        title: patient_name,
        buttons: ['full-screen'],
        width: width,
        showOnMouseEnter: false
    });

    connection.videosContainer.appendChild(mediaElement);

    setTimeout(function() {
        mediaElement.media.play();
    }, 5000);

    mediaElement.id = event.streamid;

    // to keep room-id in cache
    localStorage.setItem(connection.socketMessageEvent, connection.sessionid);
    
var chkRecordConference = document.querySelector(".open_room").value;

    // chkRecordConference.parentNode.style.display = 'none';

      if(chkRecordConference ) {
      btnStopRecording.style.display = 'inline-block';
      recordingStatus.style.display = 'inline-block';

      var recorder = connection.recorder;
      if(!recorder) {
        
        recorder = RecordRTC([event.stream], {
          type: 'video'
        });
        recorder.startRecording();
        connection.recorder = recorder;
      }
      else {
        recorder.getInternalRecorder().addStreams([event.stream]);
      }

      if(!connection.recorder.streams) {
        connection.recorder.streams = [];
      }

    //   connection.recorder.streams.push(event.stream);
    //   recordingStatus.innerHTML = 'Recording ' + connection.recorder.streams.length + ' streams';
    }

    if(event.type === 'local') {
      connection.socket.on('disconnect', function() {
        if(!connection.getAllParticipants().length) {
          location.reload();
        }
      });
    }
};

var recordingStatus = document.getElementById('recording-status');
var chkRecordConference = document.getElementsByClassName('open_room');
var btnStopRecording = document.getElementById('btn-stop-recording');
btnStopRecording.onclick = function() {
  var recorder = connection.recorder;
  if(!recorder) return alert('No recorder found.');
  recorder.stopRecording(function() {
      
     var blob = recorder.getBlob();
connection.autoCreateMediaElement = false;
connection.session = {
    audio: false,
    video: false,
    oneway: true
};
       // generating a random file name
        var fileName = getFileName('webm');
          // we need to upload "File" --- not "Blob"
        var fileObject = new File([blob], fileName, {
            type: 'video/webm'
        });
   var formData = new FormData();

    // recorded data
    formData.append('video-blob', fileObject);

    // file name
    formData.append('video-filename', fileObject.name);
    //   document.getElementById('header').innerHTML = 'Uploading to PHP using jQuery.... file size: (' +  bytesToSize(fileObject.size) + ')';


 // upload using jQuery
    $.ajax({
        // url: 'https://webrtcweb.com/RecordRTC/', // replace with your own server URL
        url: 'https://teams.devszone.com/development/fanswise/user/save_show', // replace with your own server URL
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        success: function(response) {
            if (response === 'success') {
                alert('successfully Your live Show Stop');

            } else {
                alert('Your live Show Stop'); // error/failure
                  window.location.reload(true);
            }
        }
    });
     // release camera
    // document.getElementById('your-video-id').srcObject = null;
    // camera.getTracks().forEach(function(track) {
    //     track.stop();
    // });
    // invokeSaveAsDialog(blob);
    
   
    connection.recorder = null;
    btnStopRecording.style.display = 'none';
    recordingStatus.style.display = 'none';
    // chkRecordConference.parentNode.style.display = 'inline-block';
    //   connection.closeSocket();
  });
};
    // this function is used to generate random file name
  function getFileName(fileExtension) {
      var d = new Date();
      var year = d.getUTCFullYear();
      var month = d.getUTCMonth();
      var date = d.getUTCDate();
      return 'RecordRTC-' + year + month + date + '-' + getRandomString() + '.' + fileExtension;
  };
     function getRandomString() {
            if (window.crypto && window.crypto.getRandomValues && navigator.userAgent.indexOf('Safari') === -1) {
                var a = window.crypto.getRandomValues(new Uint32Array(3)),
                    token = '';
                for (var i = 0, l = a.length; i < l; i++) {
                    token += a[i].toString(36);
                }
                return token;
            } else {
                return (Math.random() * new Date().getTime()).toString(36).replace(/\./g, '');
            }
        };
connection.onstreamended = function(event) {
    var mediaElement = document.getElementById(event.streamid);
    if (mediaElement) {
        mediaElement.parentNode.removeChild(mediaElement);
    }
};
 var patient_name = sessionStorage.getItem('patient_name');
 var doctor_name = sessionStorage.getItem('doctor_name');
connection.onmessage = appendDIV;
connection.onopen = function() {
  var remoteUserId = event.userid;
    var remoteUserFullName = event.extra.fullName;

    alert('data connection opened with ' + remoteUserFullName);
    document.getElementById('input-text-chat').disabled = false;
    // document.getElementById('btn-leave-room').disabled = false;

    // document.querySelector('h1').innerHTML = 'You are connected with: ' + connection.getAllParticipants().join(', ');
};
connection.onMediaError = function(e) {
    if (e.message === 'Concurrent mic process limit.') {
        if (DetectRTC.audioInputDevices.length <= 1) {
            alert('Please select external microphone. Check github issue number 483.');
            return;
        }

        var secondaryMic = DetectRTC.audioInputDevices[1].deviceId;
        connection.mediaConstraints.audio = {
            deviceId: secondaryMic
        };

        connection.join(connection.sessionid);
    }
};

// ..................................
// ALL below scripts are redundant!!!
// ..................................

function disableInputButtons(enable) {
    document.getElementById('room-id').onkeyup();

    document.getElementById('open-or-join-room').disabled = !enable;
    document.getElementById('open-room').disabled = !enable;
    document.getElementById('join-room').disabled = !enable;
    document.getElementById('room-id').disabled = !enable;
}

// ......................................................
// ......................Handling Room-ID................
// ......................................................

function showRoomURL(roomid) {

   var appointment_id = localStorage.getItem('appointment_id');
   var doctor_id = localStorage.getItem('doctor_id');
   var patient_id = localStorage.getItem('patient_id');
   var appointment_date = localStorage.getItem('appointment_date');
    var appointment_time = localStorage.getItem('appointment_time');

    var url = 'https://teams.devszone.com/development/fanswise/user/live_video_link';
    var roomHashURL = '#' + roomid;
    // var url = 'https://localhost/fanswise/'+userName +'/live';
    // var url = 'https://teams.devszone.com/development/fanswise/khalil/live';
    var id = '?roomid=' + roomid;
    // alert(id);
    // var html = '<h2>Share URL for your Show:</h2><br>';

    // html += '<a class="btn btn-primary" href="'+ roomHashURL + '" target="_blank">' + 'View Link' + '</a>';
    // html += '<br>';
    // html += 'QueryString URL: <a href="' + roomQueryStringURL + '" target="_blank">' + roomQueryStringURL + '</a>';

    // var roomURLsDiv = document.getElementById('room-urls');
    // roomURLsDiv.innerHTML = html;

    // roomURLsDiv.style.display = 'block';

     // upload roomid
     // alert(appointment_video_id);
    $.ajax({
        url:'https://callncure.com/index.php/api/video/add_room_id', // replace with your own server URL
    data:{id:id,appointment_id:appointment_id,doctor_id:doctor_id,patient_id:patient_id,appointment_date:appointment_date,appointment_time:appointment_time},
        // cache: false,
        // contentType: false,
        // processData: false,
        type: 'POST',
        success: function(response) {
           
          alert('successfully Create Video Show');

            
        }
        
    });
}

(function() {
    var params = {},
        r = /([^&=]+)=?([^&]*)/g;

    function d(s) {
        return decodeURIComponent(s.replace(/\+/g, ' '));
    }
    var match, search = window.location.search;
    while (match = r.exec(search.substring(1)))
        params[d(match[1])] = d(match[2]);
    window.params = params;
})();

var roomid = '';
if (localStorage.getItem(connection.socketMessageEvent)) {
    roomid = localStorage.getItem(connection.socketMessageEvent);
} else {
    roomid = connection.token();
}

var txtRoomId = document.getElementById('room-id');
txtRoomId.value = roomid;
txtRoomId.onkeyup = txtRoomId.oninput = txtRoomId.onpaste = function() {
    localStorage.setItem(connection.socketMessageEvent, document.getElementById('room-id').value);
};

var hashString = location.hash.replace('#', '');
if (hashString.length && hashString.indexOf('comment-') == 0) {
    hashString = '';
}

var roomid = params.roomid;
if (!roomid && hashString.length) {
    roomid = hashString;
}

if (roomid && roomid.length) {
    document.getElementById('room-id').value = roomid;
    localStorage.setItem(connection.socketMessageEvent, roomid);

    // auto-join-room
    (function reCheckRoomPresence() {
        connection.checkPresence(roomid, function(isRoomExist) {
            if (isRoomExist) {
                connection.join(roomid);
                return;
            }

            setTimeout(reCheckRoomPresence, 5000);
        });
    })();

    disableInputButtons();
}

// detect 2G
if(navigator.connection &&
   navigator.connection.type === 'cellular' &&
   navigator.connection.downlinkMax <= 0.115) {
  alert('2G is not supported. Please use a better internet service.');
}
