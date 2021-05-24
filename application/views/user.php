<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <?php foreach ($logo as $y) { ?>
    <link rel="shortcut icon" href="<?php echo base_url('asset/img/').$y['logo'] ?>" />
    <?php } ?>

    <link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>">
    <title>PT BUMA JAYA ABADI</title>
  </head>
  <body style=" background: rgb(25,125,12);
background: linear-gradient(210deg, rgba(25,125,12,1) 0%, rgba(28,238,12,1) 45%, rgba(118,207,7,0.8995798148360907) 93%);  ">
      <div class="batas">
        <br>
      	<div class="atas">
      		<div class="row align-items-center" style="margin-left: 0;margin-right: 0">
      			<div class="col-md-4">
      				<div class="card"><?php foreach ($logo as $y) { ?>
						  <img src="<?php echo base_url('asset/img/').$y['logo'] ?>" class="card-img-top" >
              <?php } ?>
						  <div class="card-body text-center" style="padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0">
						    <div id="tempat_jam">
					            <h2 id="jamServer"><?php date_default_timezone_set('Asia/seoul'); echo date('H:i:s');?></h2>
					            <h4>
                        <?php 
                          function hari_ini(){
                          $hari = date ("D");
                         
                          switch($hari){
                            case 'Sun':
                              $hari_ini = "Minggu";
                            break;
                         
                            case 'Mon':     
                              $hari_ini = "Senin";
                            break;
                         
                            case 'Tue':
                              $hari_ini = "Selasa";
                            break;
                         
                            case 'Wed':
                              $hari_ini = "Rabu";
                            break;
                         
                            case 'Thu':
                              $hari_ini = "Kamis";
                            break;
                         
                            case 'Fri':
                              $hari_ini = "Jumat";
                            break;
                         
                            case 'Sat':
                              $hari_ini = "Sabtu";
                            break;
                            
                            default:
                              $hari_ini = "Tidak di ketahui";   
                            break;
                          }
                         
                          return  $hari_ini;
                         
                        }
                        echo hari_ini().",".date('d M Y') 
                        ?>
                        </h4>
					          </div>
						  </div>
						</div>
	      		</div>
      			<div class="col-md-8">
      				<div class="embed-responsive embed-responsive-21by9">
					  <video class="embed-responsive-item" autoplay muted id="videoPlay" onended="run()"></video>
					</div>
      			</div>
      		</div>
      	</div><br>
      	<div class="bawah">
            <div class="row" style="margin-left: 0;margin-right: 0; padding-top:1%; border-size:7px;border-top-style: solid;border-left-style: solid;border-right-style: solid;border-bottom-style: solid;">
            <div class="col-md-2 align-self-center">
                  <h1 class="card-title text-center"><b>VALAS</b></h1>
<!--              <div class="card">
                <div class="card-body ">
                </div>
              </div> -->
            </div>
            <div class="col-md-10">
              <div class="row">
                <?php foreach ($curs as $y) { ?>
                <div class="col-md-4 no-gutters">
                  <div class="card mb-2" style="background-color: #fff">
                    <div class="row no-gutters">
                      <div class="col-md-4 no-gutters">
                        <img src="<?php echo base_url('asset/img/').$y['gambar'] ?>" class="card-img">
                        <h5 class="text-center" style="margin-bottom: 0"><b><?= $y['nama']?></b></h5>
                      </div>
                      <div class="col-md-4 no-gutters" style=" background: rgb(165,190,18);
background: linear-gradient(180deg, rgba(165,190,18,1) 2%, rgba(156,205,16,1) 45%, rgba(197,212,139,1) 93%); padding-left: 0;padding-bottom: 0;padding-top: 0;padding-right: 0">
                        <div class="card-body no-gutters">
                          <h5 class="card-title text-center align-self-center"><b>Beli</b></h5>
                          <p class="card-text text-center"><b><?php echo number_format($y['beli']) ?></b></p>
                        </div>
                      </div>
                      <div class="col-md-4 no-gutters" style=" background: rgb(134,135,125);
background: linear-gradient(180deg, rgba(134,135,125,1) 2%, rgba(180,184,169,1) 45%, rgba(235,238,220,1) 93%);padding-left: 0;padding-bottom: 0;padding-top: 0;padding-right: 0 ">
                        <div class="card-body no-gutters">
                          <h5 class="card-title text-center align-self-center"><b>Jual</b></h5>
                          <p class="card-text text-center"><b><?php echo number_format($y['jual']) ?></b></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
          </div>
      	</div>
      </div>
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('asset/js/time.js') ?>"></script>
    <script>$(document).ready(function() {
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
        }</script>
  </body>
</html>