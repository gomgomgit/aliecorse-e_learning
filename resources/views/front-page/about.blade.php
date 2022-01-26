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

        
        .jumbotron{
            
            height: 616px;
            background: linear-gradient(0deg, 
                      rgba(8, 78, 58, 0.21),
                      rgba(8, 78, 58, 0.21)), 
                      url('/assets/learn.jpg');
            background-repeat: no-repeat;
            background-position: center;            
        }

        .benner {
            background-image: url('/assets/learn.jpg');
            background-color:linear-gradient(0deg, rgba(28, 31, 30, 0.38) rgba(28, 31, 30, 0.38));
            background-repeat: no-repeat;            
            width: 100px;
        }

       

        .visi li {
        list-style-type:none;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        font-size:19px;
        margin-left: -100px;
        }

        .splide__pagination__page{
            display: none;
        }


        .visi ::before {
            content: "\2022";  /* Add content: \2022 is the CSS Code/unicode for a bullet */
            color:  #52B69A;; /* Change the color */
            font-weight: bold; /* If you want it to be bold */
            font-size:50px;
            display: inline;
            flex-direction: row;
            line-height: 40px;
            justify-content: center;
            align-items: center; /* Needed to add space between the bullet and the text */
            width: 30px; /* Also needed for space (tweak if needed) */
            margin-bottom:7px; 
        }

        .splide__arrow {
            width: 50px;
            height: 50px;
            background: #FFFFFF;
            box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.15);
            border-radius: 5px;
        }

        .cards {
            width: 251px;
            height: 350px;
            background: #FFFFFF;
            box-shadow: 1px 1px 7px 1px rgba(0, 0, 0, 0.15);
            border-radius: 15px;
        }
        #slider2 .splide__pagination__page {
            border:2px solid #C62117;
            background-color: #FFFFFF;
        }

        #slider2 .splide__pagination__page.active {
            border:2px solid #C62117;
            background-color: red;
        }

        #slider2 .splide__pagination__page:focus {
            background-color: red;
        }
         #slider2 .splide__arrow {
            display: none;
        }

        
        .stroke{
            width: 251px;
            height: 2px;
            background: #F0F0F0;
        }
    </style>
</head>
<body>
        @include('front-page.includes.navbar')
        @include('front-page.includes.script')
        <div>
            {{-- Jumbotron --}}
            <div class="jumbotron d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div>
                        <h1 class="text-white" style="font-family: 'Montserrat', sans-serif; font-weight:700;">Tentang Kami</h1>
                    </div>
                    <div class="d-flex my-4">
                        <span class="border-white-sm"> </span>
                    </div>
                </div>
            </div>

            {{-- Visi Misi --}}
            <div class="bg-light" style="margin-top: 100px;">
                <div class="d-flex justify-content-start align-items-center">
                    <div style="margin-top:100px; margin-left:30px;">
                        <div class="ms-5 lh-base " style="width:55%; ">
                            <h1 class="lh-base" style="font-family: 'Montserrat', sans-serif; font-weight:700;">
                                Apa itu <span style="color:#9B1029">alieCOURSE</span>
                            </h1>
                        </div>
                        <div class="d-flex justify-content-start ms-5">
                            <span class="rectangel-red"></span>
                        </div>
                        <div class="ms-5 mt-4" style="width: 40%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                            <p class="lh-base"> 
                                Lorem ipsum dolor sit amet consectetur 
                                adipiscing elit, annuit ceoptis novus ordo 
                                seclorum. Sivis pacem para belleum
                            </p>
                            <p class="lh-base">
                                Lorem ipsum dolor sit amet consectetur 
                                adipiscing elit, annuit ceoptis novus ordo 
                                seclorum. Sivis pacem para belleum
                            </p>
                        </div>
                    </div>
                    <div style="margin-top:80px; margin-right:70px;">
                        <img src="/assets/image-md.jpg" alt="">
                    </div>
                </div>
                <div class="d-flex align-items-center" style="margin-top:90px;  ">
                   <div style="margin-left:30px; margin-bottom:70px;">
                        <div class="ms-5 lh-base" 
                             style="width:55%; ">
                            <h2 class="lh-base" 
                                style="font-family: 'Montserrat', sans-serif; font-weight:700;">
                                Visi Kami
                            </h2>
                        </div>
                        <div class="d-flex justify-content-start ms-5">
                            <span class="rectangel-red"></span>
                        </div>
                        <div class="ms-5 mt-4" 
                             style="width:50%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                            <p class="lh-lg" style="font-size: 18px;"> 
                                Lorem ipsum dolor sit amet consectetur 
                                adipiscing elit, annuit ceoptis novus ordo 
                                seclorum. Sivis pacem para belleum
                            </p>
                            <ul class="visi d-flex flex-column justify-content-center align-items-center " style="margin-right:50px;">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                   </div>
                  
                   <div style="margin-left:120px; margin-bottom:70px;" >
                        <div class="ms-5 lh-base" 
                             style="width:55%; ">
                            <h2 class="lh-base" 
                                style="font-family: 'Montserrat', sans-serif; font-weight:700;">
                                Visi Kami
                            </h2>
                        </div>
                        <div class="d-flex justify-content-start ms-5">
                            <span class="rectangel-red"></span>
                        </div>
                        <div class="ms-5 mt-4" 
                             style="width:50%; font-family: 'Montserrat', sans-serif; font-weight:400;">
                            <p class="lh-lg" style="font-size: 18px;"> 
                                Lorem ipsum dolor sit amet consectetur 
                                adipiscing elit, annuit ceoptis novus ordo 
                                seclorum. Sivis pacem para belleum
                            </p>
                            <ul class="visi d-flex flex-column justify-content-center align-items-center " style="margin-right:50px;">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Lorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                   </div>
                  
                  
                  
                </div>
            </div>

            {{-- Instruktur --}}
            <div class="" 
                 style="width:100%; height:700px; margin-top:110px;">
                <div class="">
                    
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div>
                            <h2 class="" style="font-family: 'Montserrat', sans-serif; font-weight:700;">Pengajar Favorit Kami</h2>
                        </div>
                        <div class="d-flex" style="margin-left:31px;">
                            <span class="rectangel-red"> </span>
                        </div>
                    </div>

                    <div id="slider" class="splide me-4">
                        <div class="splide__arrows">
                            <button class="splide__arrow splide__arrow--prev">
                                <img src="/assets/arrow-l.png" alt="">
                            </button>
                            <button class="splide__arrow splide__arrow--next">
                                <img src="/assets/arrow-r.png" alt="">
                            </button>
                        </div>
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div>
                                        <div class="d-flex justify-content-center gap-5 mb-5" style="margin-top:110px; ">
                                            <div class="cards d-flex flex-column justify-content-center align-items-center me-3">
                                                <img src="/assets/student.png" alt="">
                                                <div class="d-flex flex-column align-items-center justify-content-center">
                                                    <h4 class="mt-3" style="font-family: 'Montserrat', sans-serif; font-weight:700;">Jeany doe</h4>
                                                    <h6 class="mt-2" style="font-family: 'Montserrat', sans-serif; font-weight:400;">Data Science</h6>
                                                    <div class="mt-1">
                                                        <i class="text-warning fas fa-star"></i>
                                                        <i class="ps-2 text-warning fas fa-star"></i>
                                                        <i class="ps-2 text-warning fas fa-star"></i>
                                                        <i class="ps-2 text-warning fas fa-star"></i>
                                                    </div>
                                                    <div class="mt-4 stroke"></div>
                                                </div>
                                            </div>
                                            <div class="cards d-flex flex-column justify-content-center align-items-center me-3">
                                                <img src="/assets/student.png" alt="">
                                                <div class="d-flex flex-column align-items-center justify-content-center ">
                                                    <h4 class="mt-3" style="font-family: 'Montserrat', sans-serif; font-weight:700;">Jeany doe</h4>
                                                    <h6 class="mt-2" style="font-family: 'Montserrat', sans-serif; font-weight:400;">Data Science</h6>
                                                    <div class="mt-1">
                                                        <i class="text-warning fas fa-star"></i>
                                                        <i class="ps-2 text-warning fas fa-star"></i>
                                                        <i class="ps-2 text-warning fas fa-star"></i>
                                                        <i class="ps-2 text-warning fas fa-star"></i>
                                                    </div>
                                                    <div class="mt-4 stroke"></div>

                                                </div>
                                            </div>
                                            <div class="cards d-flex flex-column justify-content-center align-items-center me-3" >
                                                <img src="/assets/student.png" alt="">
                                                <div class="d-flex flex-column align-items-center justify-content-center">
                                                    <h4 class="mt-3" style="font-family: 'Montserrat', sans-serif; font-weight:700;">Jeany doe</h4>
                                                    <h6 class="mt-2" style="font-family: 'Montserrat', sans-serif; font-weight:400;">Data Science</h6>
                                                    <div class="mt-1">
                                                        <i class="text-warning fas fa-star"></i>
                                                        <i class="ps-2 text-warning fas fa-star"></i>
                                                        <i class="ps-2 text-warning fas fa-star"></i>
                                                        <i class="ps-2 text-warning fas fa-star"></i>
                                                    </div>
                                                    <div class="mt-4 stroke"></div>

                                                </div>
                                            </div>
                                            <div class="cards d-flex flex-column justify-content-center align-items-center">
                                                <img src="/assets/student.png" alt="">
                                                <div class="d-flex flex-column align-items-center justify-content-center">
                                                    <h4 class="mt-3" style="font-family: 'Montserrat', sans-serif; font-weight:700;">Jeany doe</h4>
                                                    <h6 class="mt-2" style="font-family: 'Montserrat', sans-serif; font-weight:400;">Data Science</h6>
                                                    <div class="mt-1">
                                                        <i class="text-warning fas fa-star"></i>
                                                        <i class="ps-2 text-warning fas fa-star"></i>
                                                        <i class="ps-2 text-warning fas fa-star"></i>
                                                        <i class="ps-2 text-warning fas fa-star"></i>
                                                    </div>
                                                    <div class="mt-4 stroke"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                   
                                </li>
                                <li class="splide__slide">
                                   
                                </li>
                                <li class="splide__slide">
                                   
                                </li>
                                <li class="splide__slide">
                                   
                                </li>
                              
                            </ul>
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

                    <div id="slider2" class="splide me-4">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <button
                                    class="splide__pagination__page is-active"
                                    type="button"
                                    aria-controls="splide01-slide01"
                                    aria-label="Go to slide 1"
                                    aria-current="true"
                                  >
                                  </button>
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
                                    <button
                                    class="splide__pagination__page is-active"
                                    type="button"
                                    aria-controls="splide01-slide01"
                                    aria-label="Go to slide 1"
                                    aria-current="true"
                                  >
                                  </button>
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
            document.addEventListener( 'DOMContentLoaded', function() {
            var splide = new Splide( '#slider' );
            splide.mount();
             } );
             
            document.addEventListener( 'DOMContentLoaded', function() {
            var splide = new Splide( '#slider2' );
            splide.mount();
             } );

             new Splide( '#splider2', {
  type   : 'loop',
  pagination : 'true',
perPage: 3,
} );
            </script>
    

              
        </div>
</body>
</html>