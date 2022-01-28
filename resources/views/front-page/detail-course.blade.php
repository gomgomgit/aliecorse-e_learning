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

        .is-active {
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
        .box-cyan-md {
            max-width: 200px;
            padding-right: 25px;
            padding-left: 25px;
            height: 48px;
            color:#fff;
            text-decoration: none;
            background: #52B69A;
            border-radius: 10px;
            font-size: 26px;
            font-weight: 700;
        }
     
        .jumbotron{
            
            height: 616px;
            background: linear-gradient(0deg, 
                      rgba(8, 78, 58, 0.21),
                      rgba(8, 78, 58, 0.21)), 
                      url('/assets/learn.jpg');
            background-repeat: no-repeat;
            background-position: center;     
            width: 100%;       
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
            font-size:60px;
            display: inline;
            flex-direction: row;
            line-height: 40px;
            justify-content: center;
            align-items: center; /* Needed to add space between the bullet and the text */
            width: 30px; /* Also needed for space (tweak if needed) */
            margin-bottom:5px; 
            border-radius: 20px;
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

        .nav-tabs{
            border-bottom:none;
        }
        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
            border:none;
            background-color: none;
            color:none;
        }

        .nav-tabs .nav-link:focus, .nav-tabs .nav-link:hover{
            border: none;
        }

        .search-category {
            width: 237px;
            height: 40px;
            background: #FFFFFF;
            box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
        }

        .search-course {
            width: 237px;
            height: 40px;
            background: #FFFFFF;
            box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.15);
            border-radius: 10px;
        }
        .search-course-icon{
            width: 40px;
            height: 40px;
            background: #52B69A;
            border-radius: 0px 10px 10px 0px;
        }
        .stroke{
            width: 1000px;
            height: 3px;
            background: #E5E5E5;
            transform: matrix(1, 0, 0, -1, 0, 0);
        }
        .stroke-sm {
            width: 319px;
            height: 3px;
            background: #E5E5E5;
            transform: matrix(1, 0, 0, -1, 0, 0);
            transform: translate(-5%,0%);
        }
        
        .box-white {
            width: 900px;
            height: 1406px;
            background: #FFFFFF;
            box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.15);
            border-radius: 15px;
        }
        .form-check-input {
            border-color: #52B69A;
        }
        .form-check-input:checked {
            background-color: #52B69A;
            border-color: #52B69A;
        }
        .bullets{
width: 18px;
height: 18px;
display: block;

background: #52B69A;
border-radius: 20px;
        }
        .accordion-button::after{
            left: 0px;;
            position: absolute;
            margin-left:40px;
            color:#52B69A;
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
            
          
            
            <div class="d-flex justify-content-center aling-items-center">
               <div class="w-75">
                <div class="ms-5" style="margin-top:130px;">
                    <div class="d-flex align-items-center gap-3">
                        <img src="/assets/mask.png" alt="" class="" style="width:5%;">
                        <p class="mt-3" style="font-family: 'Montserrat', sans-serif; font-weight:700; font-size:18px;">John Doelanan</p>
                        <p class="mt-3" style="font-family: 'Montserrat', sans-serif; font-weight:400; font-size:18px; color:#afafaf">Di upload pada 21 Desember 2021</p>
                    </div>
                </div>
                <div class="ms-5 mt-4">
                    <h2 style="font-family: 'Montserrat', sans-serif; font-weight:700; font-size: 36px;">Lorem ipsum dolor sit amet adipiscing</h2>
                </div>
                <div class="d-flex align-items-center gap-3 ms-5 mt-4">
                    <div class="box-cyan-md d-flex justify-content-center aling-items-center">
                        <a class="text-decoration-none text-white"href="#">Beginer</a>
                    </div>
                    <div class="box-cyan-md d-flex justify-content-center aling-items-center ">
                        <a class="text-decoration-none text-white "href="#">Perpajakan</a>
                    </div>
                    <div class="box-cyan-md d-flex justify-content-center aling-items-center">
                        <a class="text-decoration-none text-white"href="#">Review</a>
                    </div>
                    <div class="">
                        <i class="ps-2 fas fa-star" style="color:#FFE871"></i>
                        <i class="ps-2 fas fa-star" style="color:#FFE871"></i>
                        <i class="ps-2 fas fa-star" style="color:#FFE871"></i>
                        <i class="ps-2 fas fa-star" style="color:#FFE871"></i>
                        <i class="ps-2 fas fa-star" style="color:#FFE871"></i>
                    </div>
                </div>
                <div class="d-flex gap-5 ms-5 mt-3">
                    <div class="d-flex align-items-center ">
                        <img src="/assets/userr.png" alt="" style="width:35px;">
                        <p class="mt-3 ms-2"style="font-family: 'Montserrat', sans-serif; font-weight:700; color: #AFAFAF; font-size: 18px;">102 Orang Mengikuti</p>
                    </div>
                    <div class="d-flex align-items-center ">
                        <img src="/assets/chat.png" alt="" style="width:35px;">
                        <p class="mt-3 ms-2" style="font-family: 'Montserrat', sans-serif; font-weight:700; color: #AFAFAF; font-size: 18px;">502 Comment</p>
                    </div>
                   
                </div>
                <div class="ms-5 mt-4">
                    <img class="" style="width:80%; border-radius:25px;"src="/assets/study.png" alt="" >
                </div>
                <div class="ms-5 mt-5 box-white">
                    <div class="ms-5 pt-4">
                        <h3 style="font-family: 'Montserrat', sans-serif; font-weight:700; font-size: 31px;">Review Kursus</h3>
                        <p class="lh-base w-75" style="font-family: 'Montserrat', sans-serif; font-weight:400; font-size: 18px;">Lorem ipsum dolor sit amet consectetur adipiscing elit novus ordo
                            seclorum annuit ceoptis nulla e reale tutu ele citu si vis pacem para
                            belleum valar morghulis valar dohaeris. laa syaiun waqiun mutlaq
                            bal kullu mumkin lorem ipsulum loreamis ramiris dalar molus solater
                            dovahkin fuss roh dah nuz anzok ven alok vod vin ful govarnok.
                        </p>
                        <p class="lh-base w-75" style="font-family: 'Montserrat', sans-serif; font-weight:400; font-size: 18px;">Lorem ipsum dolor sit amet consectetur adipiscing elit novus ordo
                            seclorum annuit ceoptis nulla e reale tutu ele citu si vis pacem para
                            belleum valar morghulis valar dohaeris. laa syaiun waqiun mutlaq
                            bal kullu mumkin lorem ipsulum loreamis ramiris dalar molus solater
                            dovahkin fuss roh dah nuz anzok ven alok vod vin ful govarnok.
                        </p>
                    </div>
                    <div class="ms-5 mt-5">
                        <h4 style="font-family: 'Montserrat', sans-serif; font-weight:700; font-size:31px">Apa Yang Dipelajari</h4>
                        <div class="d-flex flex-column justify-content-start mt-4" >
                            <div class="d-flex ">
                                <span class="bullets me-3"></span>
                                <p  style="width:47%; font-family: 'Montserrat', sans-serif; font-weight:400; font-size: 18px;">lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex ">
                                <span class="bullets me-3"></span>
                                <p  style="width:47%; font-family: 'Montserrat', sans-serif; font-weight:400; font-size: 18px;">lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex ">
                                <span class="bullets me-3"></span>
                                <p  style="width:47%; font-family: 'Montserrat', sans-serif; font-weight:400; font-size: 18px;">lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex ">
                                <span class="bullets me-3"></span>
                                <p  style="width:47%; font-family: 'Montserrat', sans-serif; font-weight:400; font-size: 18px;">lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex ">
                                <span class="bullets me-3"></span>
                                <p  style="width:47%; font-family: 'Montserrat', sans-serif; font-weight:400; font-size: 18px;">lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                         
                         </div>
                    </div>
                    <div class="ms-5 mt-5">
                        <h4 style="font-family: 'Montserrat', sans-serif; font-weight:700; font-size:31px">Harapan Dari Pembelajaran</h4>
                        <div class="d-flex flex-column justify-content-start mt-4" >
                           <div class="d-flex ">
                               <span class="bullets me-3"></span>
                               <p  style="width:47%; font-family: 'Montserrat', sans-serif; font-weight:400; font-size: 18px;">lorem ipsum dolor sit amet consectetur
                                adipiscing elit novus ordo seclorum
                                annuit ceoptis.</p>
                           </div>
                           <div class="d-flex">
                               <span class="bullets me-3"></span>
                               <p  style="width:47%; font-family: 'Montserrat', sans-serif; font-weight:400; font-size: 18px;">lorem ipsum dolor sit amet consectetur
                                adipiscing elit novus ordo seclorum
                                annuit ceoptis.</p>
                           </div>
                           <div class="d-flex">
                               <span class="bullets me-3"></span>
                               <p  style="width:47%; font-family: 'Montserrat', sans-serif; font-weight:400; font-size: 18px;">lorem ipsum dolor sit amet consectetur
                                adipiscing elit novus ordo seclorum
                                annuit ceoptis.</p>
                           </div>
                        </div>
                    </div>
                    <div class="ms-5 mt-5">
                        <h4 style="font-family: 'Montserrat', sans-serif; font-weight:700; font-size:31px">Requirment Kursus</h4>
                        <div class="d-flex flex-column justify-content-start mt-4" >
                            <div class="d-flex ">
                                <span class="bullets me-3"></span>
                                <p  style="width:47%; font-family: 'Montserrat', sans-serif; font-weight:400; font-size: 18px;">lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex ">
                                <span class="bullets me-3"></span>
                                <p  style="width:47%; font-family: 'Montserrat', sans-serif; font-weight:400; font-size: 18px;">lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="d-flex ">
                                <span class="bullets me-3"></span>
                                <p  style="width:47%; font-family: 'Montserrat', sans-serif; font-weight:400; font-size: 18px;">lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                           
                         </div>
                    </div>
                </div>
                <div class="ms-5 mt-5 box-white">
                    <div class="ms-5 pt-5 lh-base " style="width:55%; ">
                        <h4 class="lh-base" style="font-family: 'Montserrat', sans-serif; font-weight:700;">
                            Event Terbaru
                        </h4>
                    </div>
                    <div class="d-flex justify-content-start ms-5">
                        <span class="rectangel-red"></span>
                    </div>
                    <div class="accordion mt-4" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <div>

                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="ms-5 " style="font-family: 'Montserrat', sans-serif; font-weight:700; font-size:24px;">Pelajaran 1 : Mengenal Perpajakan</div>
                                </button>
                            </div>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Accordion Item #2
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Accordion Item #3
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
               
               </div>
               
               <div class="w-25">
                <div class="cards me-3 mt-1" style="width:23rem; height:38rem; border-radius: 15px;">
                    <div>
                        <h3 class="ms-5 pt-5" style="font-family: 'Montserrat', sans-serif; font-weight:700;">Kategori Khusus</h3>
                        <div class="form-check mt-4 ms-5">
                            <input class="form-check-input fs-5" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label fs-5" for="flexRadioDefault2" style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                               Populer ( 21 )
                            </label>
                        </div>
                        <div class="form-check mt-4 ms-5">
                            <input class="form-check-input fs-5" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label fs-5" for="flexRadioDefault2" style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                               Perpustakaan ( 21 )
                            </label>
                        </div>
                        <div class="form-check mt-4 ms-5">
                            <input class="form-check-input fs-5" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label fs-5" for="flexRadioDefault2" style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                               Data Science ( 21 )
                            </label>
                        </div>
                        <div class="form-check mt-4 ms-5">
                            <input class="form-check-input fs-5" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label fs-5" for="flexRadioDefault2" style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                               Akuntasi ( 21 )
                            </label>
                        </div>
                        <div class="form-check mt-4 ms-5">
                            <input class="form-check-input fs-5" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label fs-5" for="flexRadioDefault2" style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                               Office Perkantoran ( 21 )
                            </label>
                        </div>
                        <div class="form-check mt-4 ms-5">
                            <input class="form-check-input fs-5" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label fs-5" for="flexRadioDefault2" style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                               UI UX ( 21 )
                            </label>
                        </div>
                        <div class="form-check mt-4 ms-5">
                            <input class="form-check-input fs-5" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label fs-5" for="flexRadioDefault2" style="font-family: 'Montserrat', sans-serif; font-weight:400;">
                               Web Design ( 21 )
                            </label>
                        </div>
                      
                        
                        <div class="box-cyan-md d-flex justify-content-center align-items-center mt-5 ms-5" style="margin-bottom: 50px; font-family: 'Montserrat', sans-serif; font-weight:700;">
                            <a class="text-decoration-none text-white" href="#">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="ms-2 mt-4 lh-base " style="width:55%; ">
                        <h4 class="lh-base" style="font-family: 'Montserrat', sans-serif; font-weight:700;">
                            Event Terbaru
                            
                        </h4>
                    </div>
                    <div class="d-flex justify-content-start ms-2">
                        <span class="rectangel-red"></span>
                    </div>
                    <div class="mt-4">
                        <div class="my-2">
                            <img src="/assets/study.png" alt="" style="border-radius: 15px; width:310px; height: 170px;">
                            <h4 class="w-75 mt-3" style="font-family: 'Montserrat', sans-serif; font-weight:700;">Lorem ipsum dolor sit amet annuit ceoptis</h4>
                        </div>
                        <div class="my-2">
                            <img src="/assets/study.png" alt="" style="border-radius: 15px; width:310px; height: 170px;">
                            <h4 class="w-75 mt-3" style="font-family: 'Montserrat', sans-serif; font-weight:700;">Lorem ipsum dolor sit amet annuit ceoptis</h4>
                        </div>
                        <div class="my-2">
                            <img src="/assets/study.png" alt="" style="border-radius: 15px; width:310px; height: 170px;">
                            <h4 class="w-75 mt-3" style="font-family: 'Montserrat', sans-serif; font-weight:700;">Lorem ipsum dolor sit amet annuit ceoptis</h4>
                        </div>
                       
                    </div>
                </div>
               </div>
              
                  
            </div>
            
           
            {{-- footer-header --}}
            <div class="bg-light w-100 d-flex mt-5">
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