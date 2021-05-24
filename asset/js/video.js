$(document).ready(function() {
          console.log('test');
            getVideo();
            video_count = 0;
            videoPlayer = document.getElementById("videoPlay");
        });

         function getVideo() {
            $.ajax({
                url: "<?= base_url('welcome/playlist') ?>",
                method: "post",
                dataType: "json",

                success: function(data) {

                    let vid = data;
                    let base = "<?= base_url('asset/video/') ?>";
                    let html = "";
                    $.each(vid, function(i, item) {
                        if (i == 0) {
                            html = "<source src='" + base + item.vidio + "' type='video/webm' id='listVideo'>";
                        }
                    });
                    $('#videoPlay').html(html);
                }
            })
        }

        function videoIndex() {
            let res = [];
            $.ajax({
                url: "<?= base_url('welcome/playlist') ?>",
                method: "post",
                dataType: "json",
                async: false,
                // data: {
                //     id: 1
                // },
                success: function(data) {
                    let vid = data;
                    let base = "<?= base_url('asset/video/') ?>";
                    let html = "";
                    $.each(vid, function(j, item) {
                        res.push(base + item.vidio);
                    });
                }
            })
            return res;
        }

        function run() {
            video = document.getElementById("listVideo");
            let dummy = videoIndex();
            video_count++;
            if (video_count == dummy.length) video_count = 0;
            videoPlayer.setAttribute("src", dummy[video_count]);
        }