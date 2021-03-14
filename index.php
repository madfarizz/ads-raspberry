<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ads</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="script.js"></script>
</head>
<body >
<div class="text-center  text-white pt-3">
<span id="tanggalwaktu"></span>
</div>
<nav class="navbar navbar-expand-lg navbar-dark  static-top">
  <div class="container ">
    <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="" height="100">
    </a>
    <h1 class="text-white">SMKN 1 SUBANG</h1>
  </div>
</nav>

<section >
<!--Carousel Wrapper-->
<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner" role="listbox">

    <div class="carousel-item active">
      <div class="view">
        <video class="video-fluid" autoplay loop >
          <source src="video/lines.mp4" type="video/mp4" />
        </video>
      </div>
    </div>

    <div class="carousel-item">
      <div class="view">
        <video class="video-fluid" autoplay loop >
          <source src="video/intro.mp4" type="video/mp4" />
        </video>
      </div>
    </div>
  </div>
</div>

<div class="px-lg-5">

<!-- For demo purpose -->
<!-- <div class="row py-5">
  <div class="col-lg-12 mx-auto">
    <div class="text-white p-5 shadow-sm rounded banner">
      <h1 class="display-4">Bootstrap 4 photo gallery</h1>
      <p class="lead">Bootstrap photogallery snippet.</p>
      <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-reset"> 
                    Bootstrapious</a>, Images by <a href="https://unsplash.com" class="text-reset">Unsplash</a>.
      </p>
    </div>
  </div>
</div> -->
<!-- End -->


</div>

<div class="card-deck mb-5 px-3 mt-4">
  <div class="card">
    <img class="card-img-top p-2" src="img/akl.png" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title">Akuntansi dan Lembaga Keuangan</h5>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top p-2" src="img/bdp.jpeg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title">Bisnis Daring dan Pemasaran</h5>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top p-2" src="img/dg.jpeg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title">Desain Grafika</h5>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top p-2" src="img/otkp.png" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title">Otomatisasi Tata Kelola Perkantoran</h5>
    </div>
  </div>
</div>
<div class="card-deck px-3">
  <div class="card">
    <img class="card-img-top p-2" src="img/tbsm.png" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title">Teknik Bisnis Sepeda Motor</h5>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top p-2" src="img/tki.jpeg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title">Rekayasa Perangkat Lunak</h5>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top p-2" src="img/tpm.png" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title">Teknik Pemesinan</h5>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top p-2" src="img/tki.jpeg" alt="Card image cap">
    <div class="card-body text-center">
      <h5 class="card-title">Teknik Komputer dan Jaringan </h5>
    </div>
  </div>
</div>



</section>
    <footer class="fixed-bottom">
        <div class="running-text">
        <marquee behavior="scroll" direction="left" class="p-2">
        SMKN 1 Subang The School of The C E R E N models &nbsp &nbsp <img src="img/logo.png"  height="30" alt="Logo" /> &nbsp &nbsp We are The First, and Our Commitment is Your Satisfaction.</marquee>
    
        </div>
    </footer>

    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script>
    
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
    var date = new Date();
    var day = date.getDate();
    var month = date.getMonth();
    var thisDay = date.getDay(),
        thisDay = myDays[thisDay];
    var yy = date.getYear();
    var year = (yy < 1000) ? yy + 1900 : yy;

    function showTime() {
    var a_p = "";
    var today = new Date();
    var curr_hour = today.getHours();
    var curr_minute = today.getMinutes();
    var curr_second = today.getSeconds();
    if (curr_hour < 12) {
        a_p = "AM";
    } else {
        a_p = "PM";
    }
    if (curr_hour == 0) {
        curr_hour = 12;
    }
    if (curr_hour > 12) {
        curr_hour = curr_hour - 12;
    }
    curr_hour = checkTime(curr_hour);
    curr_minute = checkTime(curr_minute);
    curr_second = checkTime(curr_second);

    document.getElementById("tanggalwaktu").innerHTML = (thisDay + ', ' + day + ' ' + months[month] + ' ' + year) + ' ' + "Jam" + ' ' + curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
        }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
    setInterval(showTime, 500);
    //-->

    
</script>
</body>
</html>