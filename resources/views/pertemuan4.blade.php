<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background: #e6e6e6;
        }

        .testimonial-section {
            background: #f5f5f5;
        }

        .profile-img {
            width: 70px;
            height: 70px;
            object-fit: cover;
        }

        .logo-section {
            background: #bdbdbd;
        }

        .logo-img {
            height: 40px;
            object-fit: contain;
        }

        .testimonial-text {
            font-style: italic;
            font-size: 14px;
            color: #555;
        }

        .person-name {
            font-weight: bold;
            font-size: 13px;
        }

        .person-role {
            font-size: 12px;
            color: #888;
        }
    </style>

</head>

<body>



    <div class="container testimonial-section py-5">

        <h3 class="text-center font-weight-bold mb-5">
            OUR CLIENTS LOVE US
        </h3>

        <div class="row">


            <div class="col-md-6 mb-4">

                <div class="d-flex">

                    <img src="https://media.licdn.com/dms/image/v2/D4D03AQFGsLKkwCUH9Q/profile-displayphoto-shrink_800_800/B4DZeHjB6yH4Ak-/0/1750325797267?e=1775088000&v=beta&t=B0qCOhqeSDHxJ_0seAopWBnYsdmJN8jGf879rFqrVBg"
                        class="rounded-circle img-fluid profile-img mr-3">

                    <div>

                        <p class="testimonial-text">
                            "Usaha Bus Ugal yang sudah saya jalani alhamdulillah berjalan lancar
                            Meski sering mogok dan pecah ban, banyak penumpang yang masih selalu mengandalkan kami
                            Bus saya mungkin buruk, namun anda tidak punya pilihan."
                        </p>

                        <div class="person-name">Aiman Rediansyah</div>
                        <div class="person-role">CEO of Bus Ugal</div>

                    </div>

                </div>

            </div>



            <div class="col-md-6 mb-4">

                <div class="d-flex">

                    <img src="https://media.licdn.com/dms/image/v2/D4E03AQE20-u6qxAgdw/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1725538934296?e=1775088000&v=beta&t=YbnBW7I6uHOUUNjvaCiQFsYOJ9hKDXYLp33SQMTRgwY"
                        class="rounded-circle img-fluid profile-img mr-3">

                    <div>

                        <p class="testimonial-text">
                            "Melihat maraknya situs cari jodoh yang ada di indonesia
                            NgapelYuk hadir sebagai sarana aplikasi datingApps yang kompatibel dan kekinian"
                        </p>

                        <div class="person-name">Nabil Athala</div>
                        <div class="person-role">Founder of NgapelYuk</div>

                    </div>

                </div>

            </div>



            <div class="col-md-6 mb-4">

                <div class="d-flex">

                    <img src="https://media.licdn.com/dms/image/v2/D4E03AQHcTXd2nox46g/profile-displayphoto-shrink_800_800/B4EZYsPuzeHgAc-/0/1744499046511?e=1775088000&v=beta&t=9-aM_k0OPxPTO5jt2tCyK5jl3VtV0x1I_B75KtUCi0Q"
                        class="rounded-circle img-fluid profile-img mr-3">

                    <div>

                        <p class="testimonial-text">
                            "Melihat potensi konsumsi daging bebek yang tinggi di Surabaya,
                            kami menghadirkan layanan ternak bebek organik, berkualitas, dan gemuk"
                        </p>

                        <div class="person-name">Mega Agustina</div>
                        <div class="person-role">CEO of Bebekku</div>

                    </div>

                </div>

            </div>



            <div class="col-md-6 mb-4">

                <div class="d-flex">

                    <img src="https://media.licdn.com/dms/image/v2/D5603AQESm1_FMel8_Q/profile-displayphoto-crop_800_800/B56ZxRXw3WIQAI-/0/1770891712510?e=1775088000&v=beta&t=QKVCbkSKkmNqXQgUxO7Mt2s2zvBJvlfG0b9tMqqJabI"
                        class="rounded-circle img-fluid profile-img mr-3">

                    <div>

                        <p class="testimonial-text">
                            "Bisnis sabung ayam yang saya jalani ini memang sulit pada awalnya
                            Namun dengan usaha yang kuat saya bisa menjalani dengan baik"
                        </p>

                        <div class="person-name">Audrey Sophia</div>
                        <div class="person-role">Founder of Sabung Ayam Jos</div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- logo -->
    <div class="container-fluid logo-section py-4">

        <div class="container">

            <div class="row text-center align-items-center">

                <div class="col">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg"
                        class="img-fluid logo-img">
                </div>

                <div class="col">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg"
                        class="img-fluid logo-img">
                </div>

                <div class="col">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
                        class="img-fluid logo-img">
                </div>

                <div class="col">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg"
                        class="img-fluid logo-img">
                </div>

                <div class="col">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/023/986/911/small/tinder-app-logo-tinder-app-logo-transparent-tinder-app-icon-transparent-free-free-png.png"
                        class="img-fluid logo-img">
                </div>

                <div class="col">
                    <img src="https://png.pngtree.com/png-vector/20240913/ourmid/pngtree-cockfighting-png-image_12935377.png"class="img-fluid logo-img">
                </div>

            </div>

        </div>

    </div>


</body>

</html>
