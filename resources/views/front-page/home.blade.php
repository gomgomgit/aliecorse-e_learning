<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('front-page.includes.style')
    <style>
        .active{
            background: #C62117;
            box-sizing: border-box;
            border-radius: 26px;
            color: #fff;
            font-weight: 500;
            
        }
        .rectangel-red{
            width: 80px;
            height: 10px;
            background: #9B1029;
            margin-right:55px;
            margin-top:15px;
        }
        .box-cyan-sm{
        width: 142px;
        height: 36px;
        font-size: 26px;
        color:#fff;
        text-decoration: none;
        font-weight: 700;
        background: #52B69A;
        border-radius: 20px;
        }
        .box-cyan-md{
            width: 262px;
            height: 48px;
            color:#fff;
            text-decoration: none;
            background: #52B69A;
            border-radius: 10px;
            font-size: 26px;
            font-weight: 700;
        }
        .box-cyan-lg{
            color:#fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 36px;
            line-height: 44px;
            width: 436px;
            height: 76px;
            background: #52B69A;
            border-radius: 39px;
        }
        
        .border-login{
            padding:3px 10px;
            border: 3px solid #9B1029;
            box-sizing: border-box;
            border-radius: 10px;
        }
        .border-cyan{
            width: 64px;
            height: 12px;
            background: #52B69A;
            
        }
        .border-white-md{
        width: 100px;
        height: 10px;
        background: #FFFFFF;
        }
        .border-white-sm{
        width: 80px;
        height: 10px;
        background: #FFFFFF;
        }

        .box-white{
        width: 900px;
        height: 214px;
        background: #FFFFFF;
        box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.25);
        border-radius: 20px 0px 0px 20px;
        }

        .offer{
        margin-top: 200px;
        width: 100%;
        height: 924px;
        right:0px;
        background: linear-gradient(159.23deg, #C62117 6.02%, #9B1029 100.1%);
        }

        .offer-card{
        width: 290px;
        height: 417px;
        background: #FFFFFF;
        border-radius: 20px;
        }

        .benner{
            background-image: url('/assets/image.png');
            background-color:linear-gradient(0deg, rgba(28, 31, 30, 0.38) rgba(28, 31, 30, 0.38));
            background-repeat: no-repeat;            
            width: 100px;
        }
        .to-join{
\            width: 100%;
            height: 512px;
            background: #9B1029;
            margin-top: 200px;
        }
    </style>
</head>
<body>
        @include('front-page.includes.navbar')
        @include('front-page.includes.script')
        <div class="container-fluid">
            
            <div class="d-flex">
                <div class="ms-5 mt-5 d-block">
                    <img src="/assets/ilustrasi.png" alt="">
                </div>
                <div class="position-relative">
                    <h1 class="w-75 text-end fw-bold" style="margin-top:120px; margin-left:140px; letter-spacing:1px;">Siap sukses dimasa depan bersama <span style="color:#9B1029">alieCOURSE</span></h1>
                    <div class="d-flex justify-content-end">
                        <span class="rectangel-red"></span>
                    </div>
                    <div class="d-flex justify-content-end mt-4 me-5">
                        <div class="box-cyan-md d-flex justify-content-center align-items-center ">
                            <a>Gabung Sekarang</a>
                        </div>
                    </div>
                    <div class="box-white shadow p-4 position-absolute" style="left:-100px;top:490px;">
                        <div class="d-flex justify-content-around ">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="/assets/user.png" alt="">
                                <h2 class="fw-bold mt-2">30,000</h2>
                                <div class="border-cyan my-2"></div>
                                <h4 class="fw-bold">Telah Lulus</h4>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="/assets/icon-02.png" alt="">
                                <h2 class="fw-bold mt-2">50</h2>
                                <div class="border-cyan my-2"></div>
                                <h4 class="fw-bold">Pengajar</h4>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="/assets/user.png" alt="">
                                <h2 class="fw-bold mt-2">100,000+</h2>
                                <div class="border-cyan my-2"></div>
                                <h4 class="fw-bold">Pengguna</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="d-flex bg-light" style="margin-top: 300px;">
                <div>
                    <h1 class="w-75 text-start fw-bold ms-5" style="margin-top:100px; letter-spacing:1px;">Masa Depan Cerah Bersama <span style="color:#9B1029">alieCOURSE</span></h1>
                    <div class="d-flex justify-content-start ms-5">
                        <span class="rectangel-red"></span>
                    </div>
                    <p class="w-25 ms-5 my-4">Lorem ipsum dolor sit amet
                        consectetur adipiscing elit,
                        annuit ceoptis novus ordo
                        seclorum.
                    </p>
                    <div class="d-flex justify-content-start mt-4 ms-5">
                        <div class="box-cyan-md d-flex justify-content-center align-items-center ">
                            <a class="text-decoration-none text-white" href="#" >Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <img src="/assets/ilustrasi-02.png" alt="">
                </div>
                <div>

                </div>
            </div>
            
            <div class="offer position-relative">
                
                <div class="position-absolute" style="top:-150px; right:0px;">
                    <img src="/assets/setting.png" alt="">
                </div>
                
                <div>
                   <div class="d-flex flex-column">
                    <div class="d-flex justify-content-center" style="margin-top:100px;">
                        <h2 class="text-center text-white fw-bold lh-sm" style="width:20%;">Kursus yang kami tawarkan</h1>
                    </div>
                    <div class="d-flex justify-content-center" style="margin-top:30px;">
                        <span class="border-white-md"> </span>
                    </div>
                   </div>
                </div>
               
                <div class="d-flex justify-content-center gap-5 mt-5">
                    <div class="offer-card d-flex flex-column justify-content-center align-items-center">
                        <img src="/assets/dollar.png" alt="">
                        <h3 class="mt-4 mb-3 fw-bolder">Perpajakan</h3>
                        <p class="text-center" style="width:50%;">Lorem ipsum dolor
                            sit amet adipiscing
                            consectetur
                        </p>
                        <div class="">
                            <a class="d-flex justify-content-center align-items-center box-cyan-sm mt-3" href="">
                                Detail
                            </a>
                        </div>
                    </div>
                    <div class="offer-card d-flex flex-column justify-content-center align-items-center">
                        <img src="/assets/science.png" alt="">
                        <h3 class="mt-4 mb-3 fw-bolder">Data Science</h3>
                        <p class="text-center" style="width:50%;">Lorem ipsum dolor
                            sit amet adipiscing
                            consectetur
                        </p>
                        <a class="d-flex justify-content-center align-items-center box-cyan-sm mt-3" href="">
                            Detail
                        </a>
                    </div>
                    <div class="offer-card d-flex flex-column justify-content-center align-items-center">
                        <img src="/assets/dollar.png" alt="">
                        <h3 class="mt-4 mb-3 fw-bolder">Akuntasi</h3>
                        <p class="text-center" style="width:50%;">Lorem ipsum dolor
                            sit amet adipiscing
                            consectetur
                        </p>
                        <a class="d-flex justify-content-center align-items-center box-cyan-sm mt-3" href="">
                            Detail
                        </a>
                    </div>
                    <div class="offer-card d-flex flex-column justify-content-center align-items-center">
                        <img src="/assets/dollar.png" alt="">
                        <h3 class="mt-4 mb-3 fw-bolder">Office Perkantoran</h3>
                        <p class="text-center" style="width:50%;">Lorem ipsum dolor
                            sit amet adipiscing
                            consectetur
                        </p>
                        <a class="d-flex justify-content-center align-items-center box-cyan-sm mt-3" href="">
                            Detail
                        </a>
                    </div>
                </div>

                <div class="position-absolute" style="bottom:-30px; left:70px;">
                    <img src="/assets/stroke.png" alt="">
                </div>

            </div>

            <div class="bg-light mt-5 d-flex">
                <div class="d-flex flex-wrap w-100 gap-5 ms-3" style="margin-top: 160px; margin-bottom:200px;">
                    <div class="d-flex flex-column justify-content-center align-items-center text-center mt-4" style="width:30%;">
                        <img src="/assets/book.png" alt="">
                        <h3 class="my-3" style="width:80%; letter-spacing: 1px;">Lorem ipsum
                            dolor sit amet
                        </h3>
                        <p style="width:80%; letter-spacing: 2px;">Lorem ipsum dolor sit
                            amet constectetur adi
                            piscing elit eves annuit
                        </p>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center text-center mt-4"  style="width:30%;">
                        <img src="/assets/graduated.png" alt="">
                        <h3 class="my-3" style="width:80%; letter-spacing: 1px;">Lorem ipsum
                            dolor sit amet
                        </h3>
                        <p style="width:80%; letter-spacing: 2px;">Lorem ipsum dolor sit
                            amet constectetur adi
                            piscing elit eves annuit
                        </p>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center text-center mt-4"  style="width:30%;">
                        <img src="/assets/brain.png" alt="">
                        <h3 class="my-3" style="width:80%; letter-spacing: 1px;">Lorem ipsum
                            dolor sit amet
                        </h3>
                        <p style="width:80%; letter-spacing: 2px;">Lorem ipsum dolor sit
                            amet constectetur adi
                            piscing elit eves annuit
                        </p>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center text-center mt-4"  style="width:30%;">
                        <img src="/assets/achievement.png" alt="">
                        <h3 class="my-3" style="width:80%; letter-spacing: 1px;">Lorem ipsum
                            dolor sit amet
                        </h3>
                        <p style="width:80%; letter-spacing: 2px;">Lorem ipsum dolor sit
                            amet constectetur adi
                            piscing elit eves annuit
                        </p>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center text-center mt-4"  style="width:30%;">
                        <img src="/assets/labor.png" alt="">
                        <h3 class="my-3" style="width:80%; letter-spacing: 1px;">Lorem ipsum
                            dolor sit amet
                        </h3>
                        <p style="width:80%; letter-spacing: 2px;">Lorem ipsum dolor sit
                            amet constectetur adi
                            piscing elit eves annuit
                        </p>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center text-center mt-4" style="width:30%;">
                        <img src="/assets/video.png" alt="">
                        <h3 class="my-3" style="width:80%; letter-spacing: 1px;">Lorem ipsum
                            dolor sit amet
                        </h3>
                        <p style="width:80%; letter-spacing: 2px;">Lorem ipsum dolor sit
                            amet constectetur adi
                            piscing elit eves annuit
                        </p>
                    </div>
                </div>
                <div class="flex-shrink-2" style="margin-top:190px;">
                    <h1 class="text-end" style="margin-right:64px; letter-spacing: 3px;">Mengapa belajar di <span style="color:#9B1029">alieCOURSE</span></h1>
                    <div class="d-flex justify-content-end" style="margin-right:14px;">
                        <span class="rectangel-red"></span>
                    </div>
                    <div class="d-flex justify-content-end mt-4" style="margin-right:66px;">
                    <p class="text-end"style="width:55%; letter-spacing:2px; ">Lorem ipsum dolor sit amet
                        consectetur adipiscing elit,
                        annuit ceoptis novus ordo
                        seclorum.
                    </p>
                    </div>
                    <div class="box-cyan-md d-flex justify-content-center align-items-center" style="margin-left:240px; margin-top:20px;">
                        <a class="text-decoration-none text-white" href="#" >Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="benner d-flex flex-column align-items-center justify-content-center w-100">
                <h1 class="text-white text-center" 
                    style="width: 25%; letter-spacing:1px; line-height:45x; margin-top:100px;">
                     Tunggu apalagi ? ayo gabung dengan
                     <span style="color:#9B1029">alieCOURSE</span>
                </h1>
                <div class="box-cyan-lg d-flex justify-content-center align-items-center mt-3" style="margin-bottom: 100px;">
                    <a class="text-decoration-none text-white" href="#"  >Gabung Sekarang</a>
                </div>

            </div>

            {{-- Slider --}}
            <div class="bg-light my-5">
                <div>
                    <div class="d-flex flex-column justify-content-center" style="margin-top:70px;">
                        <div class="d-flex justify-content-center">
                            <h2 class="text-center fw-bold lh-sm" style="width:30%; letter-spacing: 0.05em;">Apa kata mereka yang bergabung dengan kami</h1>
                        </div>
                        <div class="d-flex justify-content-center ms-4">
                            <span class="rectangel-red"> </span>
                        </div>
                    </div>
                </div>
                <div>

                </div>
            </div>
            
            {{-- Event & Blog --}}
            <div class="bg-light d-flex">
                <div style="margin-top: 100px;">
                    <div class="ms-5 lh-base " style="width:55%;">
                        <h1>Ikuti terus event
                            dan blog kami
                        </h1>
                    </div>
                    <div class="d-flex justify-content-start ms-5">
                        <span class="rectangel-red"></span>
                    </div>
                    <div class="ms-5 mt-4" style="width: 30%; letter-spacing:1px;">
                        <p>Lorem ipsum dolor sit amet
                            consectetur adipiscing elit,
                            annuit ceoptis novus ordo
                            seclorum.
                        </p>
                    </div>
                    <div class="box-cyan-md d-flex justify-content-center align-items-center mt-4 ms-5" style="margin-bottom: 100px;">
                        <a class="text-decoration-none text-white" href="#">Selengkapnya</a>
                    </div>
                </div>
                <div class="my-5">
                    <img src="/assets/ilustrasi-03.png" alt="">
                </div>
            </div>

            {{-- Join --}}
            <div class="to-join">
                <div class="position-relative">
                    <div class="position-absolute" style="top: -30px; right:0.1px;">
                        <img src="/assets/stroke-02.png " alt="">
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="ms-5">
                        <img src="/assets/ilustrasi-04.png" alt="" style="margin-top:62px;">
                    </div>
                    <div style="margin-top:120px;">
                        <div class="text-end text-white" style="width:70%; margin-left:140px;">
                            <h1>Ayo gabung bersama
                                alieCOURSE
                            </h1>
                        </div>
                        <div class="d-flex justify-content-end my-3" style="margin-right:90px;">
                            <span class="border-white-sm"> </span>
                        </div>
                        <div class="box-cyan-md d-flex justify-content-center align-items-cente " style="margin-left:410px; margin-top:25px;">
                            <a class="text-decoration-none text-white" href="#" >Selengkapnya</a>
                        </div>
                    </div>
                </div>  
            </div>

            {{-- footer-header --}}
            <div class="bg-light w-100 d-flex">
                <div class="ms-5">
                    <div class="d-flex flex-column justify-content-start me-5" style="margin-top:80px;">
                        <img class="ms-5" src="/assets/logo.png" alt="">
                        <div class="d-flex justify-content-start ms-5">
                        <span class="rectangel-red"></span>
                        </div>
                        <div class="lh-1 ms-5 mt-4">
                            <p>Facebook</p>
                            <p>Twitter</p>
                            <p>Email</p>
                        </div>
                    </div> 
                </div>
                <div class="d-flex w-75 justify-content-center gap-5 " style="margin-bottom:130px;">
                    <div style="margin-top:90px;">
                        <h4 class="ms-5" style="letter-spacing:2px;">Tentang Kami</h4>
                        <div class="d-flex justify-content-start ms-5 mb-2 mt-1">
                         <span class="rectangel-red"></span>
                        </div>
                        <div class="lh-1 ms-5 mt-4" style="letter-spacing: 1px;">
                         <p>About Us</p>
                         <p>Service</p>
                         <p>Contact Us</p>
                         <p>Account</p>
                        </div>
                    </div>
                    <div style="margin-top:90px;">
                        <h4 class="ms-5" style="letter-spacing:2px;">Program Kursus</h4>
                        <div class="d-flex justify-content-start ms-5 mb-2 mt-1">
                         <span class="rectangel-red"></span>
                        </div>
                        <div class="lh-1 ms-5 mt-4" style="letter-spacing: 1px;">
                         <p>Populer</p>
                         <p>Perpajakan</p>
                         <p>Data Sciecence</p>
                         <p>Akuntasi</p>
                         <p>Office Perkantoran</p>
                        </div>
                    </div>
                    <div style="margin-top:90px;">
                        <h4 class="ms-5" style="letter-spacing:2px;">Blog dan Event</h4>
                        <div class="d-flex justify-content-start ms-5 mb-2 mt-1">
                         <span class="rectangel-red"></span>
                        </div>
                        <div class="lh-1 ms-5 mt-4" style="letter-spacing: 1px;">
                         <p>Event baru akhir tahun 2021</p>
                         <p>Event baru akhir tahun 2022</p>
                         <p>Blog terbaru hari ini</p>
                         <p>Blog paling populer minggu ini</p>
                         <p>Event mendatang</p>
                        </div>
                    </div> 
                </div>
            </div>
            
            {{-- footer --}}
            <div class="bg-white">
                <p class="text-center mt-3"> alieCOURSE 2021.All right reserved</p>
            </div>
           
            
        </div>
</body>
</html>