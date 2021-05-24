<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url('asset/css/user.css') ?>" media="all">
  <?php foreach ($logo as $y) { ?>
    <link rel="shortcut icon" href="<?php echo base_url('asset/img/') . $y['logo'] ?>" />
  <?php } ?>

  <title>PT BUMA JAYA ABADI</title>
</head>

<body>
  <section class="container-fluid">
    <div class="batas_atas">
      <div class="row">
        <div class="col-md-4 atas mt-1" style="padding-left: 6px;">
          <div class="card fluid card_atas"><?php foreach ($logo as $y) { ?>
              <img src="<?php echo base_url('asset/img/') . $y['logo'] ?>" class="card-img-top">
            <?php } ?>
            <div class="card-body text-center" style="padding-top: 0;padding-bottom: 0;padding-left: 0;padding-right: 0">
              <div id="tempat_jam">
                <h1 id="jamServer"><?php date_default_timezone_set('Asia/seoul');
                                    echo date('H:i:s'); ?></h1>
                <h2>
                  <?php
                  function hari_ini()
                  {
                    $hari = date("D");

                    switch ($hari) {
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
                  echo hari_ini() . "," . date('d M Y')
                  ?>
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8" style="padding-left: 0;padding-right: 10px">
          <div class="embed-responsive embed-responsive-21by9">
            <video class="embed-responsive-item" autoplay="true" id="videoPlay" onended="run()"></video>
          </div>
        </div>
      </div>
    </div>
    <div class="bawah">
      <div class="row">
        <div class="col-md-2" style="padding-right: 6px;padding-left: 6px">
          <h1 class="card-title text-center  valas shadow"><b style="text-shadow: 2px 1px #818c84;">VALAS</b></h1>
        </div>
        <div class="col-md-10">
          <div class="row mt-2">
            <?php foreach ($curs as $y) { ?>
              <div class="col-md-4 curs_bawah">
                <div class="card shadow mb-2" style="max-width: 540px;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="<?php echo base_url('asset/img/') . $y['gambar'] ?>" class="card-img curs">
                      <h3 class="text-center"><b style="text-shadow: 1px 1px #8a918c"><?php echo $y["nama"] ?></b></h3>
                    </div>
                    <div class="col-md-4 beli">
                      <div class="card-body">
                        <h3 class="card-title text-light"><strong style="text-shadow: 2px 1px #3a3d3b;">BELI</strong></h3>
                        <h5 class="card-text text-light"><b style="text-shadow: 1px 1px #3a3d3b;"><?php echo number_format($y["beli"])  ?></b></h5>
                      </div>
                    </div>
                    <div class="col-md-4 jual">
                      <div class="card-body">
                        <h3 class="card-title"><strong style="text-shadow: 2px 1px #8a918c">JUAL</strong></h3>
                        <h5 class="card-text text-dark"><b style="text-shadow: 1px 1px #8a918c"><?php echo number_format($y["jual"]) ?></b></h5>
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
  </section>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <script src="<?php echo base_url('asset/js/time.js') ?>"></script>
  <script>
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
  </script>
</body>

</html>