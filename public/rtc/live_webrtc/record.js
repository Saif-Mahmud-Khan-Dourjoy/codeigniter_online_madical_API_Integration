function captureUserMedia(mediaConstraints, successCallback, errorCallback) {
            navigator.mediaDevices.getUserMedia(mediaConstraints).then(successCallback).catch(errorCallback);
        }

        var videosContainer = document.getElementById('videos-container');

        var mRecordRTC = new MRecordRTC();
        mRecordRTC.mediaType = {
            audio: true, // or StereoAudioRecorder or MediaStreamRecorder
            video: true  // or WhammyRecorder      or MediaStreamRecorder
        };

        if (DetectRTC.browser.name === 'Edge') {
            // Microsoft Edge currently supports only audio and gif recording
            mRecordRTC.mediaType = {
                audio: StereoAudioRecorder
            };
        };
        // mRecordRTC.bufferSize = 16384;

        document.querySelector('#start').onclick = function() {
            this.disabled = true;

            captureUserMedia({
                audio: true,
                video: true
            }, function(stream) {

                var video = document.createElement('video');

                setSrcObject(stream, video);

                video.play();

                var mediaElement = getMediaElement(video, {
                    buttons: [],
                    showOnMouseEnter: false,
                    enableTooltip: false,
                    onMuted: function() {
                        document.querySelector('#audio').muted = true;
                    },
                    onUnMuted: function() {
                        document.querySelector('#audio').muted = false;
                        document.querySelector('#audio').play();
                    }
                });
                videosContainer.appendChild(mediaElement);

                mRecordRTC.addStream(stream);
                mRecordRTC.startRecording();
            }, function(error) {
                alert(JSON.stringify(error));
            });
        };

        document.querySelector('#stop').onclick = function() {
            this.disabled = true;

            mRecordRTC.stopRecording(function(url, type) {
                document.querySelector(type).src = url;
                document.querySelector(type).play();

                // fixing firefox playback issue
                if (!!navigator.mozGetUserMedia) {
                    document.querySelector(type).onended = function() {
                        document.querySelector(type).src = URL.createObjectURL(mRecordRTC.getBlob()[type]);
                        document.querySelector(type).play();
                    };
                }

                mRecordRTC.writeToDisk();
                save.disabled = false;
            });
        };

        document.getElementById('save').onclick = function() {
            this.disabled = true;
            mRecordRTC.save();
        };

        document.querySelector('#get').onclick = function() {
            this.disabled = true;

            !!navigator.webkitGetUserMedia && MRecordRTC.getFromDisk('all', function(dataURL, type) {
                if (!dataURL) return;

                if (type == 'audio') {
                    document.querySelector('#audio').src = dataURL;
                }
                if (type == 'video') {
                    var video = document.createElement('video');
                    video.src = dataURL;
                    var mediaElement = getMediaElement(video, {
                        buttons: ['mute-video'],
                        showOnMouseEnter: false,
                        enableTooltip: false,
                        onMuted: function() {
                            document.querySelector('#audio').muted = true;
                        },
                        onUnMuted: function() {
                            document.querySelector('#audio').muted = false;
                            document.querySelector('#audio').play();
                        }
                    });
                    videosContainer.appendChild(mediaElement);
                    document.querySelector('#audio').play();
                    mediaElement.media.play();
                }

                if (type == 'gif') {
                    var gifImage = document.createElement('img');
                    gifImage.src = dataURL;
                    videosContainer.appendChild(gifImage);
                }
            });

            !!navigator.mozGetUserMedia && MRecordRTC.getFromDisk('video', function(dataURL) {
                if (!dataURL) return;

                var video = document.createElement('video');
                video.src = dataURL;
                var mediaElement = getMediaElement(video, {
                    buttons: ['mute-video'],
                    showOnMouseEnter: false,
                    enableTooltip: false,
                    onMuted: function() {
                        mediaElement.muted = true;
                    },
                    onUnMuted: function() {
                        mediaElement.muted = false;
                        mediaElement.play();
                    }
                });
                videosContainer.appendChild(mediaElement);
                mediaElement.media.play();
            });
        };

        window.addEventListener('beforeunload', function() {
            document.querySelector('#start').disabled = false;
            document.querySelector('#stop').disabled = false;
            document.querySelector('#get').disabled = false;
        }, false);