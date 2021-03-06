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
  {{-- <nav class="sticky-top p-3 border-bottom border-2" style="background-color: white">
    <div class="py-2">
        <div class="d-flex justify-content-between" style="margin-left: 100px;">
            <div class="d-flex align-items-center">
                <img src="https://avatars.githubusercontent.com/u/58408947?v=4" alt="" class="rounded-circle" style="width: 90px; height: 90px">
                <div class="ms-3">
                    <h5 class="m-0 fw-normal fs-4 mb-n2">Hello,</h5>
                    <h5 class="m-0 fw-bolder fs-3">Alex Sihaburan</h5>
                </div>
            </div>
           
        </div>
    </div>
    <div class="nav-item d-xl-none ps-3 d-flex align-items-center">
        <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                show side
            </div>
        </a>
    </div>
</nav> --}}
  <div class="position-relative d-flex" style="background: #442e66">
    <div class="py-4 border-bottom container-md">
      <div style="width: 60%">
        <div class="row ms-3 mb-4 gap-6">
          <div class="col-6">
            <div class="d-flex align-items-center">
              <img src="https://secure.gravatar.com/avatar/d329f9ba46a1c0e3be83506b159e3666?s=96&d=mm&r=g" alt="" class="rounded-circle ms-3" style="width:50px; height:50px;">
              <div>
                <p class="ms-3 text-white m-0 fs-6">Instructor</p>
                <p class="ms-3 text-white m-0 fs-5 fw-bolder">
                  Huriyadi 
                </p>
              </div>
            </div>
          </div>
          <div class="col-6">
            <div class="d-flex align-items-center ms-5">
              <i class="fas fa-bookmark fs-1 text-warning"></i>
              <div>
                <p class="ms-3 text-white m-0 fs-6">Category</p>
                <p class="ms-3 text-white m-0 fs-5 fw-bolder">
                  Uncategorized 
                 </p>
               </div>
            </div>
          </div>
        </div>
        <h3 class="ms-5 text-white fs-2 fw-bolder mb-4">Sample course</h3>
        <div> 
          <div class="d-flex pb-4">
            <div class="d-flex align-items-center ms-5 align-middle">
              <i class="fas fa-clock fs-4 text-warning"></i>            
              <p class="text-white m-0 ms-2" style="font-size: 14px;">10 Weeks</p>
            </div>
            <div class="d-flex align-items-center ms-5 align-middle">
              <i class="fas fa-signal fs-5 text-warning"></i>                        
              <p class="text-white m-0 ms-2" style="font-size: 14px;">All levels</p>
            </div>
            <div class="d-flex align-items-center ms-5 align-middle">
              <i class="fas fa-file fs-4 text-warning"></i>            
              <p class="text-white m-0 ms-2" style="font-size: 14px;">89 lessons</p>
            </div>
            <div class="d-flex align-items-center ms-5 align-middle">
              <i class="fas fa-pen fs-4 text-warning"></i>
              <p class="text-white m-0 ms-2" style="font-size: 14px;">8 quizzes</p>
            </div>
            <div class="d-flex align-items-center ms-5 align-middle">
              <i class="fas fa-users fs-4 text-warning"></i>
              <p class="text-white m-0 ms-2" style="font-size: 14px;">1 student</p>
            </div>
            
           
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-md position-relative d-flex justify-content-between">
    <div>
      <nav style="margin-top: 30px;">
        <div class="nav nav-tabs text-dark" id="nav-tab" role="tablist">
          <button class="nav-link active text-dark fs-5 px-5 bg-light" id="nav-overview-tab" data-bs-toggle="tab" data-bs-target="#nav-overview" type="button" role="tab" aria-controls="nav-overview" aria-selected="true">Overview</button>
          <button class="nav-link text-dark fs-5 px-5 bg-light" id="nav-curriculum-tab" data-bs-toggle="tab" data-bs-target="#nav-curriculum" type="button" role="tab" aria-controls="nav-curriculum" aria-selected="false">Curriculum</button>
          <button class="nav-link text-dark fs-5 px-5 bg-light" id="nav-faqs-tab" data-bs-toggle="tab" data-bs-target="#nav-faqs" type="button" role="tab" aria-controls="nav-faqs" aria-selected="false">Pertanyaan</button>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        
        {{-- Overview --}}
        <div class="tab-pane fade show active ms-4 mt-4 " id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab">
        
          <p style="width: 65%;">
            Exponere more dissensio antiquorum diodorus interrete rhetoribus constituto polliceretur constituto tertium iuppiter munus
          </p>
          <p style="width: 65%;">
            Videsne qui dominorum praeposatum intellego noli negotium longa dissensio tantam fluere uno dixerimus tanto</p>
          <p style="width: 65%;">
            Pertinere tardeve manliana longinquum processerat acies mundum cuique      
          </p>
         
        {{-- Target Audience Features --}}
        <div class="accordion accordion-flush my-5" id="accordionFlushExample">
          <div class="accordion-item" style="width: 830px;">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Requirements 
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body border-bottom-0">
                <ul>
                  <li style="transform: translate(-1%,0%)"><i class="fas fa-check text-warning me-3 fw-bold"></i>Consequentibus longinquum relictae tuique pylades patria arcana vitium actus frangi theophrasto thorius</li>
                  <hr>
                  <li style="transform: translate(-1%,0%)"><i class="fas fa-check text-warning me-3 fw-bold"></i>Consequentibus longinquum relictae tuique pylades patria arcana vitium actus frangi theophrasto thorius</li>
                  <hr>
                  <li style="transform: translate(-1%,0%)"><i class="fas fa-check text-warning me-3 fw-bold"></i>Consequentibus longinquum relictae tuique pylades patria arcana vitium actus frangi theophrasto thorius</li>
                  <hr>
                  <li style="transform: translate(-1%,0%)"><i class="fas fa-check text-warning me-3 fw-bold"></i>Consequentibus longinquum relictae tuique pylades patria arcana vitium actus frangi theophrasto thorius</li>
                  <hr>
                  <li style="transform: translate(-1%,0%)"><i class="fas fa-check text-warning me-3 fw-bold"></i>Consequentibus longinquum relictae tuique pylades patria arcana vitium actus frangi theophrasto thorius</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item" style="width: 830px;">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Features 
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <ul>
                  <li style="transform: translate(-1%,0%)"><i class="fas fa-check text-warning me-3 fw-bold"></i>Consequentibus longinquum relictae tuique pylades patria arcana vitium actus frangi theophrasto thorius</li>
                  <hr>
                  <li style="transform: translate(-1%,0%)"><i class="fas fa-check text-warning me-3 fw-bold"></i>Consequentibus longinquum relictae tuique pylades patria arcana vitium actus frangi theophrasto thorius</li>
                  <hr>
                  <li style="transform: translate(-1%,0%)"><i class="fas fa-check text-warning me-3 fw-bold"></i>Consequentibus longinquum relictae tuique pylades patria arcana vitium actus frangi theophrasto thorius</li>
                  <hr>
                  <li style="transform: translate(-1%,0%)"><i class="fas fa-check text-warning me-3 fw-bold"></i>Consequentibus longinquum relictae tuique pylades patria arcana vitium actus frangi theophrasto thorius</li>
                  <hr>
                  <li style="transform: translate(-1%,0%)"><i class="fas fa-check text-warning me-3 fw-bold"></i>Consequentibus longinquum relictae tuique pylades patria arcana vitium actus frangi theophrasto thorius</li>
                </ul>              
              </div>
            </div>
          </div>
          <div class="accordion-item" style="width: 830px;">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Target audiences 
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <ul>
                  <li style="transform: translate(-1%,0%)"><i class="fas fa-check me-3 text-warning me-3 fw-bold"></i>Consequentibus longinquum relictae tuique pylades patria arcana vitium actus frangi theophrasto thorius</li>
                  <hr>
                  <li style="transform: translate(-1%,0%)"><i class="fas fa-check me-3 text-warning me-3 fw-bold"></i>Consequentibus longinquum relictae tuique pylades patria arcana vitium actus frangi theophrasto thorius</li>
                  <hr>
                  <li style="transform: translate(-1%,0%)"><i class="fas fa-check me-3 text-warning me-3 fw-bold"></i>Consequentibus longinquum relictae tuique pylades patria arcana vitium actus frangi theophrasto thorius</li>
                  <hr>
                  <li style="transform: translate(-1%,0%)"><i class="fas fa-check me-3 text-warning me-3 fw-bold"></i>Consequentibus longinquum relictae tuique pylades patria arcana vitium actus frangi theophrasto thorius</li>
                  <hr>
                  <li style="transform: translate(-1%,0%)"><i class="fas fa-check me-3 text-warning me-3 fw-bold"></i>Consequentibus longinquum relictae tuique pylades patria arcana vitium actus frangi theophrasto thorius</li>
                </ul>              
              </div>
            </div>
          </div>
        </div>
        
        </div>
  
        {{-- Curicculum --}}
        <div class="tab-pane fade" id="nav-curriculum" role="tabpanel" aria-labelledby="nav-curriculum-tab">
          <div class="accordion" id="accordionExample">
            
            <div class="accordion-item" style="width: 830px;">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 <div class="d-flex flex-column">
                  <h5 class="text-dark">Section 1</h5>
                  <p class="text-dark">Graecum voluit obscurari egens beatior reprehendi commota duarum hilare idemque dixisses finis</p>
                  <div class="bg-dark rounded" style="width:80px; height:10px;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </div>
                  </div>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <i class="fas fa-file-alt text-primary ms-4 fw-bold"></i>                    
                      <a class="text-decoration-none text-dark fs-6 fw-bold" href="#">Lesson 1</a>
                    </div>
                    <div>
                      <i class="fas fa-check me-3 text-warning fw-bold me-4"></i>
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <i class="fas fa-file-alt text-primary ms-4 me-1 fw-bold"></i>                    
                      <a class="text-decoration-none text-dark fs-6 fw-bold" href="#">Lesson 1</a>
                    </div>
                    <div>
                      <i class="fas fa-check me-3 text-warning fw-bold me-4"></i>
                    </div>
                  </div>
                  <hr>
  
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <i class="fas fa-file-alt text-primary ms-4 me-1 fw-bold"></i>                    
                      <a class="text-decoration-none text-dark fs-6 fw-bold" href="#">Lesson 1</a>
                    </div>
                    <div>
                      <i class="fas fa-check me-3 text-warning fw-bold me-4"></i>
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <i class="fas fa-file-alt text-primary ms-4 me-1 fw-bold"></i>                    
                      <a class="text-decoration-none text-dark fs-6 fw-bold" href="#">Lesson 1</a>
                    </div>
                    <div class="">
                      <button class="shadow btn-outline-none rounded btn-info text-white" style="font-size: 14px;">Priview</button>
                    </div>
                  </div>
                  <hr>
  
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <i class="fas fa-file-alt text-primary ms-4 me-1 fw-bold"></i>                    
                      <a class="text-decoration-none text-dark fs-6 fw-bold" href="#">Lesson 1</a>
                    </div>
                    <div class="">
                      <button class="shadow btn-outline-none rounded btn-info text-white" style="font-size: 14px;">Priview</button>
                    </div>
                  </div>
                  <hr>
  
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <i class="fas fa-file-alt text-primary ms-4 me-1 fw-bold"></i>                    
                      <a class="text-decoration-none text-dark fs-6 fw-bold" href="#">Lesson 1</a>
                    </div>
                    <div class="">
                      <button class="shadow btn-outline-none rounded btn-info text-white" style="font-size: 14px;">Priview</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="accordion-item" style="width: 830px;">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <div class="d-flex flex-column">
                    <h5 class="text-dark">Section 2</h5>
                    <p class="text-dark">Graecum voluit obscurari egens beatior reprehendi commota duarum hilare idemque dixisses finis</p>
                    <div class="bg-dark rounded" style="width:80px; height:10px;">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    </div>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <i class="fas fa-file-alt text-primary ms-4 me-1 fw-bold"></i>                    
                      <a class="text-decoration-none text-dark fs-6 fw-bold" href="#">Lesson 1</a>
                    </div>
                    <div>
                      <i class="fas fa-check me-3 text-warning fw-bold me-4"></i>
                    </div>
                  </div>
                  <hr>              
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <i class="fas fa-file-alt text-primary ms-4 me-1 fw-bold"></i>                    
                      <a class="text-decoration-none text-dark fs-6 fw-bold" href="#">Lesson 1</a>
                    </div>
                    <div>
                      <i class="fas fa-check me-3 text-warning fw-bold me-4"></i>
                    </div>
                  </div>
                  <hr>              
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <i class="fas fa-file-alt text-primary ms-4 me-1 fw-bold"></i>                    
                      <a class="text-decoration-none text-dark fs-6 fw-bold" href="#">Lesson 1</a>
                    </div>
                    <div>
                      <i class="fas fa-check me-3 text-warning fw-bold me-4"></i>
                    </div>
                  </div>
                  <hr>              
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <i class="fas fa-file-alt text-primary ms-4 me-1 fw-bold"></i>                    
                      <a class="text-decoration-none text-dark fs-6 fw-bold" href="#">Lesson 1</a>
                    </div>
                    <div>
                      <i class="fas fa-check me-3 text-warning fw-bold me-4"></i>
                    </div>
                  </div>
                  <hr>              
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <i class="fas fa-file-alt text-primary ms-4 me-1 fw-bold"></i>                    
                      <a class="text-decoration-none text-dark fs-6 fw-bold" href="#">Lesson 1</a>
                    </div>
                    <div>
                      <i class="fas fa-check me-3 text-warning fw-bold me-4"></i>
                    </div>
                  </div>
                  <hr>              
                </div>
              </div>
            </div>
  
            <div class="accordion-item" style="width: 830px;">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <div class="d-flex flex-column">
                    <h5 class="text-dark">Section 3</h5>
                    <p class="text-dark">Graecum voluit obscurari egens beatior reprehendi commota duarum hilare idemque dixisses finis</p>
                    <div class="bg-dark rounded" style="width:80px; height:10px;">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    </div>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <i class="fas fa-file-alt text-primary ms-4 me-1 fw-bold"></i>                    
                      <a class="text-decoration-none text-dark fs-6 fw-bold" href="#">Lesson 3</a>
                    </div>
                    <div>
                      <i class="fas fa-check me-3 text-warning fw-bold me-4"></i>
                    </div>
                  </div>
                  <hr>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <i class="fas fa-file-alt text-primary ms-4 me-1 fw-bold"></i>                    
                      <a class="text-decoration-none text-dark fs-6 fw-bold" href="#">Lesson 1</a>
                    </div>
                    <div>
                      <i class="fas fa-check me-3 text-warning fw-bold me-4"></i>
                    </div>
                  </div>
                  <hr>         
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <i class="fas fa-file-alt text-primary ms-4 me-1 fw-bold"></i>                    
                      <a class="text-decoration-none text-dark fs-6 fw-bold" href="#">Lesson 1</a>
                    </div>
                    <div>
                      <i class="fas fa-check me-3 text-warning fw-bold me-4"></i>
                    </div>
                  </div>
                  <hr>        
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <i class="fas fa-file-alt text-primary ms-4 me-1 fw-bold"></i>                    
                      <a class="text-decoration-none text-dark fs-6 fw-bold" href="#">Lesson 1</a>
                    </div>
                    <div>
                      <i class="fas fa-check me-3 text-warning fw-bold me-4"></i>
                    </div>
                  </div>
                  <hr>                            
                </div>
              </div>
            </div>
  
          </div>
        </div>
        
        {{-- FAQS --}}
        <div class="tab-pane fade" id="nav-faqs" role="tabpanel" aria-labelledby="nav-faqs-tab">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item" style="width: 830px;">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Concedere facilius incredibile doloris comparatio suo quem copiosiorem debeatis cuius familiares considerata graecis? 
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Considerata spe domus suavius concedamus quicumque aristonem alio humanis comitetur permulcet insipiensquo bene
                  </p>              
                  <p>
                    Considerata spe domus suavius concedamus quicumque aristonem alio humanis comitetur permulcet insipiensquo bene
                  </p>              
                </div>
              </div>
            </div>
            <div class="accordion-item" style="width: 830px;">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Concedere facilius incredibile doloris comparatio suo quem copiosiorem debeatis cuius familiares considerata graecis? 
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Considerata spe domus suavius concedamus quicumque aristonem alio humanis comitetur permulcet insipiensquo bene
                  </p>              
                  <p>
                    Considerata spe domus suavius concedamus quicumque aristonem alio humanis comitetur permulcet insipiensquo bene
                  </p>                 
                </div>
              </div>
  
            </div>
            <div class="accordion-item" style="width: 830px;">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Concedere facilius incredibile doloris comparatio suo quem copiosiorem debeatis cuius familiares considerata graecis? 
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Considerata spe domus suavius concedamus quicumque aristonem alio humanis comitetur permulcet insipiensquo bene
                  </p>              
                  <p>
                    Considerata spe domus suavius concedamus quicumque aristonem alio humanis comitetur permulcet insipiensquo bene
                  </p>                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="relative" style="margin-right: 50px">
      <div class="card" style="margin-top: -8rem">
        <img style="max-width: 19rem" src="https://images.unsplash.com/photo-1642076573338-9bc6a667fe57?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" class="card-img-top" alt="...">
        <div class="card-body ">
          <a href="/admin/my-course/1/watch">
            <div class="btn-group w-100 my-3" role="group" aria-label="Basic checkbox toggle button group">
              <label class="btn btn-outline-primary" for="btncheck1">Continue</label>
            </div>
          </a>
          <div class="d-flex">
            <p class="card-text">
              You started on:
            </p>
            <p class="card-text ms-2">
              December 31, 2021
            </p>
          </div>        
          <div class="d-flex mt-3">
            <p class="card-text">
              You started on:
            </p>
            <p class="card-text ms-2">
              December 31, 2021
            </p>
          </div>
          <hr>
          <div class="d-flex">
            <p class="card-text w-75">
              Lessons completed:           
            </p>
            <p class="card-text ms-2">
              0/89          
            </p>
          </div>        
          <div class="d-flex">
            <p class="card-text w-75">
              Quizzes finished:             
            </p>
            <p class="card-text ms-2">
              1/8         
            </p>
          </div>
          <div class="d-flex">
            <p class="card-text w-75">
              Course progress:             
            </p>
            <p class="card-text ms-2">
              
              0%          
            </p>
          </div>
          <div class="progress mb-2">
            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
    {{-- @include('admin.includes.navbar') --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>