<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('front-page.includes.style')
    
    <!-- or link to the CDN -->
    <link rel="stylesheet" href="url-to-cdn/splide.min.css">
    <link
    rel="stylesheet"  
    href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/css/splide.min.css"
    />

    {{-- Font-link 400 --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;1,200&display=swap" rel="stylesheet"> 
    
    {{-- Font Link 700 --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,700;1,200&display=swap" rel="stylesheet"> 
    
    <style>

        .splide__pagination__page.is-active {
        transform: scale(1.5); //here I have changed the scale from 1.4 to 1.5
        background: #0b72e7; //changed from default bg-color to blue
        }

        .active {
            background: #C62117;
            box-sizing: border-box;
            border-radius: 26px;
            color: #fff;
            font-weight: 500;  
        }

        .rectangel-red {
            width: 80px;
            height: 10px;
            background: #9B1029;
            margin-right:55px;
            margin-top:15px;
        }

        .box-cyan-sm {
            width: 142px;
            height: 36px;
            font-size: 26px;
            color:#fff;
            text-decoration: none;
            font-weight: 700;
            background: #52B69A;
            border-radius: 20px;
        }

        .box-cyan-md {
            width: 270px;
            height: 48px;
            color:#fff;
            text-decoration: none;
            background: #52B69A;
            border-radius: 10px;
            font-size: 26px;
            font-weight: 700;
        }
        
        .box-cyan-lg {
            color:#fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 36px;
            line-height: 44px;
            width: 400px;
            height: 76px;
            background: #52B69A;
            border-radius: 39px;
        }
        
        .border-login {
            padding:3px 10px;
            border: 3px solid #9B1029;
            box-sizing: border-box;
            border-radius: 10px;
        }
        
        .border-cyan {
            width: 64px;
            height: 12px;
            background: #52B69A;    
        }
        
        .border-white-md {
            width: 100px;
            height: 10px;
            background: #FFFFFF;    
        }
        
        .border-white-sm {
            width: 80px;
            height: 10px;
            background: #FFFFFF;
        }

        .box-white {
            width: 900px;
            height: 214px;
            background: #FFFFFF;
            box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.25);
            border-radius: 20px 0px 0px 20px;
        }

        .offer {
            margin-top: 200px;
            width: 100%;
            height: 924px;
            right:0px;
            background: linear-gradient(159.23deg, #C62117 6.02%, #9B1029 100.1%);
        }

        .offer-card {
            width: 320px;
            height: 417px;
            background: #FFFFFF;
            border-radius: 20px;
        }

        .benner {
            background-image: url('/assets/image.png');
            background-color:linear-gradient(0deg, rgba(28, 31, 30, 0.38) rgba(28, 31, 30, 0.38));
            background-repeat: no-repeat;            
            width: 100px;
        }

        .to-join {
\           width: 100%;
            height: 512px;
            background: #9B1029;
            margin-top: 200px;
        }

        .splide__pagination__page {
            border:2px solid #C62117;
            background-color: #FFFFFF;
        }

        .splide__pagination__page.active {
            border:2px solid #C62117;
            background-color: red;
        }

        .splide__pagination__page:focus {
            background-color: red;
        }
        .splide__arrow {
            display: none;
        }

    </style>
</head>
<body>
        @include('front-page.includes.navbar')
        @include('front-page.includes.script')
        <div class="container-fluid">
            
            {{-- Jumbotron --}}
            <div class="d-flex">
                
                <div class="ms-5 mt-5 d-block">
                    <img src="/assets/ilustrasi.png" alt="ilustrasi.png">
                </div>

                <div class="position-relative">
                    <h1 class="w-75 text-end fw-bold lh-base" 
                        style="margin-top:120px; margin-left:140px; 
                               font-family: 'Montserrat', sans-serif;
                               ">
                               Siap sukses dimasa depan bersama 
                               <span style="color:#9B1029">alieCOURSE</span>
                    </h1>
                    <div class="d-flex justify-content-end">
                        <span class="rectangel-red"></span>
                    </div>
                    <div class="d-flex justify-content-end mt-4 me-5">
                        <div class="box-cyan-md d-flex justify-content-center align-items-center"
                             style="font-family: 'Montserrat', sans-serif; font-weight:700">
                            <a>Gabung Sekarang</a>
                        </div>
                    </div>
                    <div class="box-white shadow p-4 position-absolute" 
                         style="font-family: 'Montserrat', sans-serif; left:-100px;top:490px;">
                        <div class="d-flex justify-content-around">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="/assets/user.png" alt="user.png">
                                <h2 class="fw-bold mt-2">30,000</h2>
                                <div class="border-cyan my-2"></div>
                                <h4 class="fw-bold">Telah Lulus</h4>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="/assets/icon-02.png" alt="user.png">
                                <h2 class="fw-bold mt-2">50</h2>
                                <div class="border-cyan my-2"></div>
                                <h4 class="fw-bold">Pengajar</h4>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <img src="/assets/user.png" alt="user.png">
                                <h2 class="fw-bold mt-2">100,000+</h2>
                                <div class="border-cyan my-2"></div>
                                <h4 class="fw-bold">Pengguna</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            {{-- Notice --}}
            <div class="d-flex bg-light" 
                 style="margin-top:300px;">
                <div>
                    <h1 class="text-start fw-bold ms-5 lh-base" 
                        style="font-family: 'Montserrat', sans-serif; margin-top:100px; width:60%;">
                        Masa Depan Cerah Bersama 
                        <span style="color:#9B1029">alieCOURSE</span>
                    </h1>
                    <div class="d-flex justify-content-start ms-5">
                        <span class="rectangel-red"></span>
                    </div>
                    <p class="ms-5 my-4 lh-base"
                       style="font-family:'Montserrat', sans-serif; width:30%;">
                        Lorem ipsum dolor sit amet
                        consectetur adipiscing elit,
                        annuit ceoptis novus ordo
                        seclorum.
                    </p>
                    <div class="d-flex justify-content-start mt-4 ms-5">
                        <div class="box-cyan-md d-flex justify-content-center align-items-center"
                             style="font-family: 'Montserrat', sans-serif; font-weight:700;">
                            <a class="text-decoration-none text-white" href="#">Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="my-5">
                    <img src="/assets/ilustrasi-02.png" alt="">
                </div>
              
            </div>
            
            {{-- Offer --}}
            <div class="offer position-relative">
                
                <div class="position-absolute" 
                    style="top:-150px; right:0px;">
                    <img src="/assets/setting.png" alt="setting.png">
                </div>
                
                <div>
                   <div class="d-flex flex-column">
                    <div class="d-flex justify-content-center" 
                         style="margin-top:100px; font-family: 'Montserrat', sans-serif;"
                         >
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
                        <h3 class="mt-4 mb-3 fw-bolder" 
                            style="font-family:'Montserrat', sans-serif;">
                            Perpajakan
                        </h3>
                        <p class="text-center lh-base" 
                           style="width:50%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                            Lorem ipsum dolor
                            sit amet adipiscing
                            consectetur
                        </p>
                        <div class=""
                             style="font-family: 'Montserrat', sans-serif; font-weight:700;">
                            <a class="d-flex justify-content-center align-items-center box-cyan-sm mt-3 text-decoration-none text-white" href="">
                                Detail
                            </a>
                        </div>
                    </div>

                    <div class="offer-card d-flex flex-column justify-content-center align-items-center">
                        <img src="/assets/science.png" alt="">
                        <h3 class="mt-4 mb-3 fw-bolder"
                            style="font-family:'Montserrat', sans-serif;">
                            Data Science
                        </h3>
                        <p class="text-center lh-base" 
                           style="width:50%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                            Lorem ipsum dolor
                            sit amet adipiscing
                            consectetur
                        </p>
                        <div class=""
                             style="font-family: 'Montserrat', sans-serif; font-weight:700;">
                            <a class="d-flex justify-content-center align-items-center box-cyan-sm mt-3 text-decoration-none text-white" href="">
                                Detail
                            </a>
                        </div>
                    </div>

                    <div class="offer-card d-flex flex-column justify-content-center align-items-center">
                        <img src="/assets/dollar.png" alt="">
                        <h3 class="mt-4 mb-3 fw-bolder"
                            style="font-family:'Montserrat', sans-serif;">
                            Akuntasi
                        </h3>
                        <p class="text-center lh-base" 
                           style="width:50%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                         Lorem ipsum dolor
                         sit amet adipiscing
                         consectetur
                        </p>
                        <div class=""
                             style="font-family: 'Montserrat', sans-serif; font-weight:700;">
                            <a class="d-flex justify-content-center align-items-center box-cyan-sm mt-3 text-decoration-none text-white" href="">
                                Detail
                            </a>
                        </div>
                    </div>

                    <div class="offer-card d-flex flex-column justify-content-center align-items-center">
                        <img src="/assets/dollar.png" alt="">
                        <h3 class="mt-4 mb-3 fw-bolder"
                            style="font-family:'Montserrat', sans-serif;">
                            Office Perkantoran
                        </h3>
                        <p class="text-center lh-base" 
                           style="width:50%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                         Lorem ipsum dolor
                         sit amet adipiscing
                         consectetur
                        </p>
                        <div class=""
                             style="font-family: 'Montserrat', sans-serif; font-weight:700;">
                            <a class="d-flex justify-content-center align-items-center box-cyan-sm mt-3 text-decoration-none text-white" href="">
                                Detail
                            </a>
                        </div>
                    </div>

                </div>

                <div class="position-absolute" 
                     style="bottom:-30px; left:70px;">
                    <img src="/assets/stroke.png" alt="stroke.png">
                </div>

            </div>

            {{-- Why alieCOURSE --}}
            <div class="bg-light d-flex" style="margin-top:90px;">
                
                <div class="d-flex flex-wrap w-100 gap-5 ms-3" 
                     style="margin-top: 160px; margin-bottom:200px;">
                    
                    <div class="d-flex flex-column justify-content-center align-items-center text-center mt-4" 
                        style="width:30%;">
                        <img src="/assets/book.png" alt="">
                        <h3 class="my-3 lh-base" style="font-family: 'Montserrat', sans-serif; font-weight:700; width:80%;">Lorem ipsum
                            dolor sit amet
                        </h3>
                        <p class="lh-base" style="width:70%;font-family: 'Montserrat', sans-serif; font-weight:400;">
                            Lorem ipsum dolor sit
                            amet constectetur adi
                            piscing elit eves annuit
                        </p>
                    </div>

                    <div class="d-flex flex-column justify-content-center align-items-center text-center mt-4"  style="width:30%;">
                        <img src="/assets/graduated.png" alt="">
                        <h3 class="my-3 lh-base" style="font-family: 'Montserrat', sans-serif; font-weight:700; width:80%;">Lorem ipsum
                            dolor sit amet
                        </h3>
                        <p class="lh-base" style="width:70%;font-family: 'Montserrat', sans-serif; font-weight:400;">
                            Lorem ipsum dolor sit
                            amet constectetur adi
                            piscing elit eves annuit
                        </p>
                    </div>

                    <div class="d-flex flex-column justify-content-center align-items-center text-center mt-4"  style="width:30%;">
                        <img src="/assets/brain.png" alt="">
                         <h3 class="my-3 lh-base" style="font-family: 'Montserrat', sans-serif; font-weight:700; width:80%;">Lorem ipsum
                            dolor sit amet
                        </h3>
                        <p class="lh-base" style="width:70%;font-family: 'Montserrat', sans-serif; font-weight:400;">
                            Lorem ipsum dolor sit
                            amet constectetur adi
                            piscing elit eves annuit
                        </p>
                    </div>

                    <div class="d-flex flex-column justify-content-center align-items-center text-center mt-4"  style="width:30%;">
                        <img src="/assets/achievement.png" alt="">
                         <h3 class="my-3 lh-base" style="font-family: 'Montserrat', sans-serif; font-weight:700; width:80%;">Lorem ipsum
                            dolor sit amet
                        </h3>
                        <p class="lh-base" style="width:70%;font-family: 'Montserrat', sans-serif; font-weight:400;">
                            Lorem ipsum dolor sit
                            amet constectetur adi
                            piscing elit eves annuit
                        </p>
                    </div>

                    <div class="d-flex flex-column justify-content-center align-items-center text-center mt-4"  style="width:30%;">
                        <img src="/assets/labor.png" alt="">
                         <h3 class="my-3 lh-base" style="font-family: 'Montserrat', sans-serif; font-weight:700; width:80%;">Lorem ipsum
                            dolor sit amet
                        </h3>
                        <p class="lh-base" style="width:70%;font-family: 'Montserrat', sans-serif; font-weight:400;">
                            Lorem ipsum dolor sit
                            amet constectetur adi
                            piscing elit eves annuit
                        </p>
                    </div>

                    <div class="d-flex flex-column justify-content-center align-items-center text-center mt-4" style="width:30%;">
                        <img src="/assets/video.png" alt="">
                         <h3 class="my-3 lh-base" style="font-family: 'Montserrat', sans-serif; font-weight:700; width:80%;">Lorem ipsum
                            dolor sit amet
                        </h3>
                        <p class="lh-base" style="width:70%;font-family: 'Montserrat', sans-serif; font-weight:400;">
                            Lorem ipsum dolor sit
                            amet constectetur adi
                            piscing elit eves annuit
                        </p>
                    </div>

                </div>
                <div class="flex-shrink-2" style="margin-top:190px;">
                    <h1 class="text-end lh-base" 
                        style="margin-right:64px; font-family: 'Montserrat', sans-serif; font-weight: 700">
                        Mengapa belajar di 
                        <span style="color:#9B1029">
                            alieCOURSE
                        </span>
                    </h1>
                    <div class="d-flex justify-content-end" style="margin-right:14px;">
                        <span class="rectangel-red"></span>
                    </div>
                    <div class="d-flex justify-content-end mt-4" style="margin-right:66px;">
                        <p class="text-end lh-base" 
                        style="width:55%; font-family: 'Montserrat', sans-serif; font-weight:400">
                            Lorem ipsum dolor sit amet
                            consectetur adipiscing elit,
                            annuit ceoptis novus ordo
                            seclorum.
                        </p>
                    </div>
                    <div class="d-flex justify-content-end mt-4" style="margin-right: 70px;">
                        <div class="box-cyan-md d-flex justify-content-center align-items-center"
                             style="font-family: 'Montserrat', sans-serif; font-weight:700;">
                            <a class="text-decoration-none text-white" href="#">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

           

            {{-- Slider --}}
            <div class="bg-light " 
                 style="width:100%; height:700px; margin-top:110px;">
                <div class="">
                    
                    <div class="d-flex flex-column justify-content-center" 
                         style="margin-top:70px;">
                        <div class="d-flex justify-content-center">
                            <h2 class="text-center fw-bold lh-sm mt-5" 
                                style="width:30%; font-family: 'Montserrat', sans-serif; font-weight:700">
                                Apa kata mereka yang bergabung dengan kami
                            </h1>
                        </div>
                        <div class="d-flex justify-content-center ms-4">
                            <span class="rectangel-red"> </span>
                        </div>
                    </div>

                    <div class="splide me-4">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="d-flex justify-content-center" 
                                         style="margin-top:90px; margin-bottom:100px;">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="/assets/mask.png" alt="" style="width:25%">
                                            <div class="text-center lh-base mt-3" style="width: 60%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                <p>Lorem ipsum dolor sit amet consectetur
                                                   adipiscing elit eves annuit ceoptis
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                                <h2  
                                                    style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                    John Doe
                                                </h2>
                                                <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700;">Karyawan Swasta</h3>
                                            </div>
                                        </div>
                                      
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="/assets/mask.png" alt="" style="width:25%">
                                            <div class="text-center lh-base mt-3" style="width: 60%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                <p>Lorem ipsum dolor sit amet consectetur
                                                   adipiscing elit eves annuit ceoptis
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                                <h2  
                                                    style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                    John Doe
                                                </h2>
                                                <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700;">Karyawan Swasta</h3>
                                            </div>
                                        </div>
                                      
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="/assets/mask.png" alt="" style="width:25%">
                                            <div class="text-center lh-base mt-3" style="width: 60%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                <p>Lorem ipsum dolor sit amet consectetur
                                                   adipiscing elit eves annuit ceoptis
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                                <h2  
                                                    style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                    John Doe
                                                </h2>
                                                <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700;">Karyawan Swasta</h3>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="d-flex justify-content-center" 
                                         style="margin-top:90px; margin-bottom:100px;">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="/assets/mask.png" alt="" style="width:25%">
                                            <div class="text-center lh-base mt-3" style="width: 60%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                <p>Lorem ipsum dolor sit amet consectetur
                                                   adipiscing elit eves annuit ceoptis
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                                <h2  
                                                    style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                    John Doe
                                                </h2>
                                                <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700;">Karyawan Swasta</h3>
                                            </div>
                                        </div>
                                      
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="/assets/mask.png" alt="" style="width:25%">
                                            <div class="text-center lh-base mt-3" style="width: 60%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                <p>Lorem ipsum dolor sit amet consectetur
                                                   adipiscing elit eves annuit ceoptis
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                                <h2  
                                                    style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                    John Doe
                                                </h2>
                                                <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700;">Karyawan Swasta</h3>
                                            </div>
                                        </div>
                                      
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="/assets/mask.png" alt="" style="width:25%">
                                            <div class="text-center lh-base mt-3" style="width: 60%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                <p>Lorem ipsum dolor sit amet consectetur
                                                   adipiscing elit eves annuit ceoptis
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                                <h2  
                                                    style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                    John Doe
                                                </h2>
                                                <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700;">Karyawan Swasta</h3>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="d-flex justify-content-center" 
                                         style="margin-top:90px; margin-bottom:100px;">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="/assets/mask.png" alt="" style="width:25%">
                                            <div class="text-center lh-base mt-3" style="width: 60%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                <p>Lorem ipsum dolor sit amet consectetur
                                                   adipiscing elit eves annuit ceoptis
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                                <h2  
                                                    style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                    John Doe
                                                </h2>
                                                <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700;">Karyawan Swasta</h3>
                                            </div>
                                        </div>
                                      
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="/assets/mask.png" alt="" style="width:25%">
                                            <div class="text-center lh-base mt-3" style="width: 60%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                <p>Lorem ipsum dolor sit amet consectetur
                                                   adipiscing elit eves annuit ceoptis
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                                <h2  
                                                    style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                    John Doe
                                                </h2>
                                                <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700;">Karyawan Swasta</h3>
                                            </div>
                                        </div>
                                      
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="/assets/mask.png" alt="" style="width:25%">
                                            <div class="text-center lh-base mt-3" style="width: 60%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                <p>Lorem ipsum dolor sit amet consectetur
                                                   adipiscing elit eves annuit ceoptis
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                                <h2  
                                                    style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                    John Doe
                                                </h2>
                                                <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700;">Karyawan Swasta</h3>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="d-flex justify-content-center" 
                                         style="margin-top:90px; margin-bottom:100px;">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="/assets/mask.png" alt="" style="width:25%">
                                            <div class="text-center lh-base mt-3" style="width: 60%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                <p>Lorem ipsum dolor sit amet consectetur
                                                   adipiscing elit eves annuit ceoptis
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                                <h2  
                                                    style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                    John Doe
                                                </h2>
                                                <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700;">Karyawan Swasta</h3>
                                            </div>
                                        </div>
                                      
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="/assets/mask.png" alt="" style="width:25%">
                                            <div class="text-center lh-base mt-3" style="width: 60%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                <p>Lorem ipsum dolor sit amet consectetur
                                                   adipiscing elit eves annuit ceoptis
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                                <h2  
                                                    style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                    John Doe
                                                </h2>
                                                <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700;">Karyawan Swasta</h3>
                                            </div>
                                        </div>
                                      
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="/assets/mask.png" alt="" style="width:25%">
                                            <div class="text-center lh-base mt-3" style="width: 60%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                <p>Lorem ipsum dolor sit amet consectetur
                                                   adipiscing elit eves annuit ceoptis
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                                <h2  
                                                    style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                    John Doe
                                                </h2>
                                                <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700;">Karyawan Swasta</h3>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="d-flex justify-content-center" 
                                         style="margin-top:90px; margin-bottom:100px;">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="/assets/mask.png" alt="" style="width:25%">
                                            <div class="text-center lh-base mt-3" style="width: 60%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                <p>Lorem ipsum dolor sit amet consectetur
                                                   adipiscing elit eves annuit ceoptis
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                                <h2  
                                                    style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                    John Doe
                                                </h2>
                                                <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700;">Karyawan Swasta</h3>
                                            </div>
                                        </div>
                                      
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="/assets/mask.png" alt="" style="width:25%">
                                            <div class="text-center lh-base mt-3" style="width: 60%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                <p>Lorem ipsum dolor sit amet consectetur
                                                   adipiscing elit eves annuit ceoptis
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                                <h2  
                                                    style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                    John Doe
                                                </h2>
                                                <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700;">Karyawan Swasta</h3>
                                            </div>
                                        </div>
                                      
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <img src="/assets/mask.png" alt="" style="width:25%">
                                            <div class="text-center lh-base mt-3" style="width: 60%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                <p>Lorem ipsum dolor sit amet consectetur
                                                   adipiscing elit eves annuit ceoptis
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center align-items-center">
                                                <h2  
                                                    style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                                                    John Doe
                                                </h2>
                                                <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700;">Karyawan Swasta</h3>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Image --}}
            <div class="benner d-flex flex-column align-items-center justify-content-center w-100">
                
                <h1 class="text-white text-center lh-base" 
                    style="font-family: 'Montserrat', sans-serif; width: 28%; font-weight:700; margin-top:100px; ">
                     Tunggu apalagi ? ayo gabung dengan
                     alieCOURSE
                </h1>
                
                <div class="box-cyan-lg d-flex justify-content-center align-items-center mt-3" 
                     style="margin-bottom: 100px; font-family: 'Montserrat', sans-serif; font-weight:700" >
                    <a class="text-decoration-none text-white" href="#"  >Gabung Sekarang</a>
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
                        <div class="lh-base ms-5 mt-4" style="font-family: 'Montserrat', sans-serif;">
                            <p>Facebook</p>
                            <p>Twitter</p>
                            <p>Email</p>
                        </div>
                    </div> 
                </div>
                <div class="d-flex w-75 justify-content-center gap-5 " style="margin-bottom:130px;">
                    <div style="margin-top:90px;">
                        <h4 class="ms-5" style="font-family: 'Montserrat', sans-serif; font-weight:700;">Tentang Kami</h4>
                        <div class="d-flex justify-content-start ms-5 mb-2 mt-1">
                         <span class="rectangel-red"></span>
                        </div>
                        <div class="lh-base ms-5 mt-4" style="font-family: 'Montserrat', sans-serif; font-weight:400">
                         <p>About Us</p>
                         <p>Service</p>
                         <p>Contact Us</p>
                         <p>Account</p>
                        </div>
                    </div>
                    <div style="margin-top:90px;">
                        <h4 class="ms-5" 
                            style="font-family: 'Montserrat', sans-serif; font-weight:700;">
                            Program Kursus
                        </h4>
                        <div class="d-flex justify-content-start ms-5 mb-2 mt-1">
                         <span class="rectangel-red"></span>
                        </div>
                        <div class="lh-base ms-5 mt-4" style="font-family: 'Montserrat', sans-serif; font-weight:400">
                         <p>Populer</p>
                         <p>Perpajakan</p>
                         <p>Data Sciecence</p>
                         <p>Akuntasi</p>
                         <p>Office Perkantoran</p>
                        </div>
                    </div>
                    <div style="margin-top:90px;">
                        <h4 class="ms-5" 
                        style="font-family: 'Montserrat', sans-serif; font-weight:700;">
                            Blog dan Event
                        </h4>
                        <div class="d-flex justify-content-start ms-5 mb-2 mt-1">
                         <span class="rectangel-red"></span>
                        </div>
                        <div class="lh-base ms-5 mt-4" style="font-family: 'Montserrat', sans-serif; font-weight:400">
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
                <p class="text-center mt-3" style="font-family: 'Montserrat', sans-serif; font-weight:400;"> alieCOURSE 2021.All right reserved</p>
            </div>
           
            <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.4.21/dist/js/splide.min.js"></script>
            <script>
               
            </script>
        </div>
</body>
</html>