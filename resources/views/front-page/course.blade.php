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
                        <h1 class="text-white" style="font-family: 'Montserrat', sans-serif; font-weight:700;">Kursus Kami</h1>
                    </div>
                    <div class="d-flex my-4">
                        <span class="border-white-sm"> </span>
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