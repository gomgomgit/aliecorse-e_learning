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
    </style>
   <!-- Font Awesome JS -->
   <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
   <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
       <div class="d-flex">
        <aside class="w-25">
          <nav class="">
            <div class="nav nav-tabs " id="nav-tab" role="tablist" >
              <button class="nav-link active bg-light w-50"  id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Lesson List</button>
              <button class="nav-link bg-light w-50"  id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Question & Answer</button>
           
            </div>
          </nav>
          <div class="tab-content  shadow-md bg-light"  id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="d-flex justify-content-between align-items-center border-bottom" style="border-gray">
                <div class="mt-4 ms-3">
                  <p class="text-muted">Chapter 1</p>
                  <h4 class="text-primary fw-bold">Getting Started</h4>
                </div>
                <p class="text-muted" style="transform: translate(-80%,150%);">3/5</p>
              </div>
             
              <div class="d-flex justify-content-between   border-bottom " style="transform: translate(0%,40%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-video text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">Introduction</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
  
              </div>
              
              <div class="d-flex justify-content-between  border-bottom" style="transform: translate(0%,80%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-lock text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">What's React?</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div> 
              </div>
  
              <div class="d-flex justify-content-between  border-bottom" style="transform: translate(0%,120%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-lock text-primary fs-5"></i>                
                  <p class="ms-2 text-muted "style="font-size:14px;">Adding the Right React Version to Codepen </p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
              </div>
  
              <div class="d-flex justify-content-between  border-bottom" style="transform: translate(0%,160%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-video text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">Assignment First React Code</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
              </div>
           
              <div class="d-flex justify-content-between border-bottom " style="transform: translate(0%,200%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-video text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">Quiz : The most modern server</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
              </div>
           
              <div class="d-flex justify-content-between align-items-center border-bottom" style="border-gray; margin-top:70px;">
                <div class="mt-4 ms-3">
                  <p class="text-muted">Chapter 2</p>
                  <h4 class="text-primary fw-bold">Content Marketing Basic</h4>
                </div>
                <p class="text-muted" style="transform: translate(-80%,150%);">3/5</p>
              </div>
             
              <div class="d-flex justify-content-between   border-bottom " style="transform: translate(0%,40%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-video text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">Introduction</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
  
              </div>
              
              <div class="d-flex justify-content-between  border-bottom" style="transform: translate(0%,80%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-lock text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">What's React?</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
  
                
  
              </div>
  
              <div class="d-flex justify-content-between  border-bottom" style="transform: translate(0%,120%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-lock text-primary fs-5"></i>                
                  <p class="ms-2 text-muted "style="font-size:14px;">Adding the Right React Version to Codepen </p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
              </div>
  
              <div class="d-flex justify-content-between  border-bottom" style="transform: translate(0%,160%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-lock text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">Assignment First React Code</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
              </div>
           
              <div class="d-flex justify-content-between border-bottom " style="transform: translate(0%,200%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-video text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">Quiz : The most modern server</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
              </div>
              
            </div>

            
            
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="d-flex justify-content-between align-items-center border-bottom" style="border-gray">
                <div class="mt-4 ms-3">
                  <p class="text-muted">Chapter 1</p>
                  <h4 class="text-primary fw-bold">Getting Started</h4>
                </div>
                <p class="text-muted" style="transform: translate(-80%,150%);">3/5</p>
              </div>
             
              <div class="d-flex justify-content-between   border-bottom " style="transform: translate(0%,40%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-video text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">Introduction</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
  
              </div>
              
              <div class="d-flex justify-content-between  border-bottom" style="transform: translate(0%,80%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-lock text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">What's React?</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div> 
              </div>
  
              <div class="d-flex justify-content-between  border-bottom" style="transform: translate(0%,120%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-lock text-primary fs-5"></i>                
                  <p class="ms-2 text-muted "style="font-size:14px;">Adding the Right React Version to Codepen </p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
              </div>
  
              <div class="d-flex justify-content-between  border-bottom" style="transform: translate(0%,160%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-video text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">Assignment First React Code</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
              </div>
           
              <div class="d-flex justify-content-between border-bottom " style="transform: translate(0%,200%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-video text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">Quiz : The most modern server</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
              </div>
           
              <div class="d-flex justify-content-between align-items-center border-bottom" style="border-gray; margin-top:70px;">
                <div class="mt-4 ms-3">
                  <p class="text-muted">Chapter 2</p>
                  <h4 class="text-primary fw-bold">Content Marketing Basic</h4>
                </div>
                <p class="text-muted" style="transform: translate(-80%,150%);">3/5</p>
              </div>
             
              <div class="d-flex justify-content-between   border-bottom " style="transform: translate(0%,40%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-video text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">Introduction</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
  
              </div>
              
              <div class="d-flex justify-content-between  border-bottom" style="transform: translate(0%,80%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-lock text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">What's React?</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
  
                
  
              </div>
  
              <div class="d-flex justify-content-between  border-bottom" style="transform: translate(0%,120%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-lock text-primary fs-5"></i>                
                  <p class="ms-2 text-muted "style="font-size:14px;">Adding the Right React Version to Codepen </p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
              </div>
  
              <div class="d-flex justify-content-between  border-bottom" style="transform: translate(0%,160%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-lock text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">Assignment First React Code</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
              </div>
           
              <div class="d-flex justify-content-between border-bottom " style="transform: translate(0%,200%); border-gray;">
                <div class="d-flex ms-4 ">
                  <i class="fas fa-video text-primary fs-5"></i>                
                  <p class="ms-2 text-muted"style="font-size:14px;">Quiz : The most modern server</p>
                </div>
                <div class="d-flex">
                  <p>1:30</p>
                  <div class="form-check ms-2">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
          </div>
        </aside>
        <section class="w-75">
          <div class="bg-primary w-100 text-white text-center fw-bold">
            <div class="d-flex justify-content-center align-items-center " >
              <i class="fas fa-video"></i>              
              <p style="transform:translate(5%,30%);">Quiz: The most popular and modern server</p>
            </div>
          </div>
          <div class="d-flex justify-content-center align-items-center" style="margin-top: 100px;">
            <video width="750" height="450" controls>
              <source src="movie.mp4" type="video/mp4">
              <source src="movie.ogg" type="video/ogg">
            Your browser does not support the video tag.
            </video> 
          </div>
          <div style="margin-top: 50px; margin-left:250px;" >
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
                 <div class="btn border border-dark mt-4">  
                    <a href="" class="text-decoration-none d-flex justify-content-between text-dark items-align-center">
                      <div class="me-5">
                        <h5>My Course.zip</h5>
                        <p>size:15.56kb</p>
                      </div>
                      <div class="">
                        <i class="fas fa-cloud-download-alt fs-4"></i>                     
                       </div>
                    </a>
                 </div>
                 <div class="btn border border-dark mt-4" style="transform: translate(60%,0%)" >  
                  <a href="" class="text-decoration-none d-flex justify-content-between text-dark items-align-center">
                    <div class="me-5">
                      <h5>Assignment_file.jpg</h5>
                      <p>size:15.56kb</p>
                    </div>
                    <div class="">
                      <i class="fas fa-cloud-download-alt fs-4"></i>                     
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
</body>
</html>