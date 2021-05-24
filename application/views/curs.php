<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>">
    <title>PT BUMA JAYA ABADI</title>
  </head>
  <body style="background-color: #286b44">
      <div class="atas">
        <div class="row ">
        <div class="col-lg-4 ">
     <!--      <img src="<?php echo base_url('asset/img/BJA.png')?>" alt="">
          <br><br>
          <div id="tempat_jam">
            <h2 class="" id="jamServer"><?php date_default_timezone_set('Asia/Jakarta'); echo date('H:i:s');?></h2>
            <h3><?php echo date('l, d m Y') ?></h3>
          </div>
        </div> -->
        <div class="col-lg-8">
          <!-- <div class="embed-responsive embed-responsive-16by9"> -->
       <!--    <video id="video" class="embed-responsive-item" width="100%" height="auto" controls="true">
            <source src="<?php echo base_url('asset/video/video2.webm') ?>" type="video/WEBM">
            <source src="<?php echo base_url('asset/video/video1.webm') ?>" type="video/WEBM">
            <source src="<?php echo base_url('asset/video/video3.mp4') ?>" type="video/webm">
          </video> -->
          <!-- <video class="w-auto p-3" autoplay muted="true" id="videoPlay" onended="run()" >
            </video> -->
          <!-- </div> -->
        </div>
      </div>
      </div>
      <br>
      
      </div>

       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!--   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('asset/js/time.js') ?>"></script>
    <script>
//jquerynya jangan yang slim.min.js

      // $('video').attr('webkit-playsinline', '');

        $(document).ready(function() {
          console.log('test');
            getVideo();
            video_count = 0;
            videoPlayer = document.getElementById("videoPlay");
        });
//source video (datanya darimana?)
// nanti rencananya dari databae, di simpan di asset/video/
//pernah atau biasa pakai ajax/javascript?
// belum, biasanya pake sql dari php doang
//waduh, ini kalo mau dibikin play looping ganti video bahan wajib ajax. Nanti dipelajari aja ya..
//sekarang kita coba langsung
//coba mas input dulu videonya ke db secara langsung
// sudah
         function getVideo() {
            $.ajax({
                url: "<?= base_url('welcome/playlist') ?>",
                method: "post",
                dataType: "json",
                // data: {
                //     id: 1
                // },
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
//coba mas test, agak ngelag disini
// gokellll keren keren
// soalnya saya pernah bikin videotron buat kelurahan, kebetulan pakai galeri, video, pengumuman +running text 
// makasih lo ini mas, sementara ini blom bisa ngasih apa apa, tapi kalok nanti ada uang nya aku nggak lupa ko wkwkwk
//siap santai aja
// iyo makasih banget lo ini mas
//sama-sama , sans ae
// iyo, aku tak ngelatin ini yo mas, waktunya udah nggak lama lagi e..
//oke, saya close ya
// iya mas, makasih lo sekali lagi
//yosh sama-sama
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
    </script>
  </body>
</html>