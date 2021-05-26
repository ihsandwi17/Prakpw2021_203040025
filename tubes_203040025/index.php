<?php
/*
// Nama : Nur Ihsan Dwi 
// Nrp : 203040025
// Shift : Rabu 9.00 - 10.00
*/
?>

<?php
// menghubungkan dengan file php lainnya
require "php/functions.php";

// melakukan query
$gr = query("SELECT * FROM Jamtangan");

// searching
if(isset($_GET["cari"])) {
    $keyword = $_GET["keyword"];
    $gr = query("SELECT * FROM Jamtangan WHERE
                        nama LIKE '%$keyword%' OR
                        tipe LIKE '%$keyword%' OR
                        harga LIKE '%$keyword%' ");
}else{
    $gr = query("SELECT * FROM jamtangan");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

        <!-- css -->
        <link rel="stylesheet" href="css/style.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Saiko Store</title>
    </head>

    <body>

    <!-- navbar -->
        <div class="navbar-fixed">
            <nav class="red  darken-2">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="index.php" class="brand-logo">Saiko</a>
                        <ul class="right hide-on-med-and-down">
                            <li>
                                <a href="php/login.php">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    <!-- slider -->
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="assets/img/19.jpg">
                    <div class="caption center-align">
                        <h3>Selamat Datang Di Store SAIKO Jamtangan</h3>
                        <h5 class="light grey-text text-lighten-3">Liat Dan Beli Jam Tangan Terbaik.</h5>
                    </div>
                </li>

                <li>
                <img src="assets/img/12.jpg">
                    <div class="caption center-align">
                        <h3>Selamat Datang Di Store SAIKO Jamtangan</h3>
                        <h5 class="light grey-text text-lighten-3">Jam Tangan Pria Terbaik.</h5>
                     </div>
                </li>

                <li>
                <img src="assets/img/10.jpg">
                    <div class="caption center-align">
                        <h3>Selamat Datang Di Store SAIKO Jamtangan</h3>
                        <h5 class="light grey-text text-lighten-3">Jam Tangan Wanita Terbaik.</h5>
                    </div>
                </li>
            </ul>
        </div>

    <br>

    <!-- about -->

        <section id="about" class="about">
        <h3 class="light center grey-text text-darken-3">About</h3>
            <div class="container">
                <h6 class="center light grey-text text-darken-3">Anda bisa mendapatkan Jam Tangan Pria dan Wanita aneka jenis dan 
                    terlengkap dengan kualitas yang terjamin di SAIKO Store. Tentunya dengan harga yang menarik dan keaslian yang terjamin.

                </div>
        </section>

    <br>


    <!-- login -->
        <section id="login" class="login">
            <div class="container">
                <p class="center-align">Ayo Daftar Registrasi & Login <a href="php/login.php">Disini</a></p>
            </div>
        </section>

    <br>

    <!-- Cari -->
        <section id="cari" class="cari">
            <div class="container">
                <div class="center-align">
                    <form action="" method="GET">
                        <input type="text" name="keyword" placeholder="Cari di toko ini" autocomplete="off" autofocus>
                        <button class="waves-effect waves-light btn-small" type="submit" name="cari">Cari</button>
                    </form>
                </div>
            </div>
        </section>

    <br>

    <section id="produk" class="produk scrollspy">
            <div class="container">
                <h3 class="light center grey-text text-darken-3">Produk</h3>
                <div class="row">
                    <div class="col m3 s12">
                        <img src="assets/img/cazio.jpg" class="responsive-img materialboxed" alt="">
                    </div>
                    <div class="col m3 s12">
                        <img src="assets/img/cluse.jpg" class="responsive-img materialboxed" alt="">
                    </div>
                    <div class="col m3 s12">
                        <img src="assets/img/jam 133.jpg" class="responsive-img materialboxed" alt="">
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col m3 s12">
                        <img src="assets/img/jam basah.jpg" class="responsive-img materialboxed" alt="">
                    </div>
                    <div class="col m3 s12">
                        <img src="assets/img/jam112.jpg" class="responsive-img materialboxed" alt="">
                    </div>
                    <div class="col m3 s12">
                        <img src="assets/img/skmei.jpg" class="responsive-img materialboxed" alt="">
                    </div>
                </div>
            </div>
        </section>


    <!-- contact -->
    <section id="contact" class="contact grey lighten-3 scrollspy">
            <div class="container">
                <h3 class="light center grey-text text-darken-3 ">Contact Us</h3>
                <div class="row">
                    <div class="col m5 s12">
                        <div class="card-panel red darken-2 center white-text">
                            <i class="material-icons">email</i>
                            <h5>Contact Us</h5>
                            <p>Nurihsan719@gmail.com</p>
                            <p>+628663847288</p>
                        </div>
                        <ul class="collection with-header">
                            <li class="collection-header"><h4>Saiko Store</h4></li>
                            <li class="collection-item">Alamat.</li>
                            <li class="collection-item">Jl bromius 3</li>
                            <li class="collection-item">Bandung, Jawa Barat, Indonesia</li>
                        </ul>
                    </div>

                    <div class="col m7 s12">
                        <form>
                            <div class="card-panel">
                                <h5>Please fill out this form</h5>
                                <div class="input-field">
                                    <input type="text" name="name" id="name" required class="validate">
                                    <label for="name">Name</label>
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" id="email" class="validate">
                                    <label for="name">Email</label>
                                </div>
                                <div class="input-field">
                                    <input type="text" name="phone" id="phone">
                                    <label for="phone">Phone</label>
                                </div>
                                <div class="input-field">
                                    <textarea name="message" id="message" class="materialize-textarea"></textarea>
                                    <label for="message">Message</label>
                                </div>
                                <button type="submit" class="btn black darken-2">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    <!-- footer -->
        <footer class="red  darken-2 white-text center">
            <p class="flow-text">Nur Ihsan Dwi. Copyright 2021.</p>
        </footer>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <script>
            const slider = document.querySelectorAll(".slider");
            M.Slider.init(slider, {
                indicators: false,
                height: 500,
                transition: 600,
                interval: 3000
            });
        </script>
    </body>
</html>