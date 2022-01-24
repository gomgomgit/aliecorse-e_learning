<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
   <!-- Bootstrap CSS CDN -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <style>
      ul {
        list-style-type: none;
      }
      #sidenav {
        width: 25%;
        overflow-x: hidden;
        transition: 200ms ease all;
      }
    </style>
   <!-- Font Awesome JS -->
   <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
   <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
    <div class="">
       <div class="d-flex">
        <aside id="sidenav" class=" shadow-lg">
          {{-- <nav class="">
            <div class="nav nav-tabs " id="nav-tab" role="tablist" >
              <button class="nav-link active bg-light w-50 text-dark"  
                id="nav-home-tab" data-bs-toggle="tab" 
                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Lesson List</button>
              <button class="nav-link bg-light w-50 text-dark"
                id="nav-profile-tab" data-bs-toggle="tab" 
                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Question & Answer</button>
            </div>
          </nav> --}}
          <div>
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="d-flex justify-content-between align-items-center border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                <div class="my-2">
                  <p class="text-muted" style="font-size:15px; transform:translate(10%,50%)">Chapter 1</p>
                  <h5 class="text-primary ms-3 fs-5">Getting Started</h5>
                </div>
                <div class="text-muted" style="transform: translate(-70%,50%)">
                  <p>3/5</p>
                </div>
              </div>
              <div class="">
                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-video fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Introduction</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>
                
                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-lock fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">What is React ?</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>

                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-lock fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Adding the Right React Version to Codepen</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>
                
                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-video fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Assignment : First React Code</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>

                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-video fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Quiz : The most modern server</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>

              </div>

              <div class="d-flex justify-content-between align-items-center border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                <div class="my-2">
                  <p class="text-muted" style="font-size:15px; transform:translate(9%,50%)">Chapter 2</p>
                  <h5 class="text-primary ms-4 fs-5">Content Marketing Basics</h5>
                </div>
                <div class="text-muted" style="transform: translate(-70%,50%)">
                  <p>3/5</p>
                </div>
              </div>

              <div class="">
                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-video fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Introduction</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>
                
                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-lock fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">What is React ?</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>

                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-lock fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Adding the Right React Version to Codepen</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>
                
                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-video fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Assignment : First React Code</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>

                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-video fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Quiz : The most modern server</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>

              </div>

            </div>

            
            
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="d-flex justify-content-between align-items-center border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                <div class="my-2">
                  <p class="text-muted" style="font-size:15px; transform:translate(10%,50%)">Chapter 1</p>
                  <h5 class="text-primary ms-3 fs-5">Getting Started</h5>
                </div>
                <div class="text-muted" style="transform: translate(-70%,50%)">
                  <p>3/5</p>
                </div>
              </div>
              <div class="">
                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-video fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Introduction</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>
                
                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-lock fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">What is React ?</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>

                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-lock fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Adding the Right React Version to Codepen</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>
                
                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-video fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Assignment : First React Code</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>

                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-video fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Quiz : The most modern server</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>

              </div>

              <div class="d-flex justify-content-between align-items-center border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                <div class="my-2">
                  <p class="text-muted" style="font-size:15px; transform:translate(9%,50%)">Chapter 2</p>
                  <h5 class="text-primary ms-4 fs-5">Content Marketing Basics</h5>
                </div>
                <div class="text-muted" style="transform: translate(-70%,50%)">
                  <p>3/5</p>
                </div>
              </div>

              <div class="">
                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-video fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Introduction</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>
                
                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-lock fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">What is React ?</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>

                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-lock fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Adding the Right React Version to Codepen</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>
                
                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-video fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Assignment : First React Code</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>

                <a href="#" class="text-decoration-none d-flex justify-content-between border border-1 border-bottom border-top-0 border-end-0 border-start-0">
                  <div class="d-flex justify-content-center ms-3 mt-3">
                    <i class="fas fa-video fs-5" style="transform:translate(0%,10%);"></i>                    
                    <p class="ms-2 text-muted" style="font-size:15px;">Quiz : The most modern server</p>
                  </div>
                  <div class="d-flex me-2 mt-3">
                    <p class="me-2 text-muted" style="font-size:15px;">1:10</p>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
                     
                    </div>
                  </div>
                </a>

              </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
          </div>
        </aside>
        <section id="main" style="width: 75%" class="">
          <div class="bg-primary w-100 text-white text-center fw-bold d-flex justify-content-between px-3">
            <div class="d-flex justify-content-center align-items-center " >
              <button id="expand-button" onclick="expandNav()" class="btn p-0 text-white">
                <i class="fas fa-expand"></i>
              </button>
              <button id="compress-button" style="display: none" onclick="compressNav()" class="btn p-0 text-white">
                <i class="fas fa-compress"></i>
              </button>
            </div>
            <div class="d-flex justify-content-center align-items-center " >
              <i class="fas fa-video"></i>              
              <p style="transform:translate(5%,30%);">Quiz: The most popular and modern server</p>
            </div>
            <div class="d-flex justify-content-center align-items-center " >
            </div>
          </div>
          <div class="d-flex justify-content-center align-items-center" style="margin-top: 100px;">
            <video width="750" height="450" controls>
              <source src="movie.mp4" type="video/mp4">
              <source src="movie.ogg" type="video/ogg">
            Your browser does not support the video tag.
            </video> 
          </div>

          <div style="margin-top: 50px; padding: 0 120px;" class="" >
            <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Ikhtisar</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">T&J</button>
              </div>
            </nav>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
            </div>


            <h4>About Lesson</h4>
            <p class="w-75">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam magnam non culpa doloremque modi nisi accusamus, fugit, rerum tenetur est nemo dolore amet quia. Quam exercitationem quo expedita assumenda dolore?</p>
            <ul>
              <li class="d-flex " style="transform: translate(-4%,10%);">
                <i class="fas fa-check text-primary mt-1 fw-bold"></i>      
                <p class="ms-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, modi unde. Cum nulla vitae ad repellendus, nostrum voluptatum amet aspernatur fuga non repellat saepe nemo nisi dignissimos quaerat. Quisquam, blanditiis!</p>       
               </li>
               <li class="d-flex " style="transform: translate(-4%,10%);">
                <i class="fas fa-check text-primary mt-1 fw-bold"></i>      
                <p class="ms-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, modi unde. Cum nulla vitae ad repellendus, nostrum voluptatum amet aspernatur fuga non repellat saepe nemo nisi dignissimos quaerat. Quisquam, blanditiis!</p>       
               </li>
               <div class="my-5"style="transform: translate(-4%,0%)">
                 <h4>Exercise Files</h4>
                 <div class="d-flex justify-content-evenly" style="transform: translate(-7%,0%)">
                  <a href="#" class="btn d-flex border justify-content-between mt-5" style="width: 40%;">
                    <div class="d-flex flex-column" style="transform: translate(0%,10%);">
                      <h5>My.Course.zip</h5>
                      <p class="text-start">size:15.56kb</p>
                    </div>
                    <div class="bg-light shadow rounded-circle d-flex justify-content-center align-items-center ms-4 mt-1" style="width:40px;height:40px;">
                      <i class="fas fa-cloud-download-alt fs-4 text-primary "></i>                     
  
                    </div>
                   </a>
                   <a href="#" class="btn d-flex border justify-content-between mt-5" style="width: 40%;">
                    <div class="d-flex flex-column" style="transform: translate(0%,10%);">
                      <h5>Assignment_file.zip</h5>
                      <p class="text-start">size:15.56kb</p>
                    </div>
                    <div class="bg-primary shadow rounded-circle d-flex justify-content-center align-items-center ms-4 mt-1" style="width:40px;height:40px;">
                      <i class="fas fa-cloud-download-alt fs-4 text-white "></i>                     
  
                    </div>
                   </a>
                 </div>
               
               </div>
            </ul>
          </div>
        </section>
       </div>
     
      </div>
  
    {{-- @include('admin.includes.navbar') --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      function expandNav() {
        document.getElementById("expand-button").style.display = "none";
        document.getElementById("compress-button").style.display = "block";
        document.getElementById("sidenav").style.width = "0%";
        document.getElementById("main").style.width = "100%";
      }
      function compressNav() {
        document.getElementById("expand-button").style.display = "block";
        document.getElementById("compress-button").style.display = "none";
        document.getElementById("sidenav").style.width = "25%";
        document.getElementById("main").style.width = "75%";
      }
    </script>
</body>
</html>