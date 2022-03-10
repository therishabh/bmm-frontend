<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <title>Book My Makeup</title>
    <?php include 'include/head.php' ?>
</head>

<body>
<?php include 'include/header.php' ?>


<section class="registration">
    <div class="registration-child text-center">
        <a href="makeup-artist-registration-form.php" class="btn get-started-btn"> GET STARTED</a>
    </div>
</section>
<section class="company">
    <div class="container">
        <ul class="list-unstyled d-flex">
            <li>
                <a href="#"><img src="assets/images/registration-company1.png" class="img-fluid"></a>
            </li>
            <li>
                <a href="#"><img src="assets/images/registration-company2.png" class="img-fluid"></a>
            </li>
            <li>
                <a href="#"><img src="assets/images/registration-company3.png" class="img-fluid"></a>
            </li>
            <li>
                <a href="#"><img src="assets/images/registration-company4.png" class="img-fluid"></a>
            </li>
            <li>
                <a href="#"><img src="assets/images/registration-company5.jpg" class="img-fluid"></a>
            </li>
        </ul>
        <p class="text-center">& many more brands</p>
    </div>
</section>
<section class="benifits">
    <div class="benifits-container">
        <ul class="nav nav-pills benifits-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                benifits
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                how to apply
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                faq<span>s</span>
                </a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-md-4 text-center benifits-div">
                        <img src="assets/images/benifits1.png" class="img-fluid">
                        <h4>Special Offers for Pros</h4>
                        <p>Special discounts and exclusive offers available only to registered members</p>
                    </div>
                    <div class="col-md-4 text-center benifits-div">
                        <img src="assets/images/benifits2.png" class="img-fluid">
                        <h4>Learn from the Pros</h4>
                        <p>Professional tutorials, videos and educational content along with access to on-ground training</p>
                    </div>
                    <div class="col-md-4 text-center benifits-div">
                        <img src="assets/images/benifits3.png" class="img-fluid">
                        <h4>Pro-only Products</h4>
                        <p>Products specifically created for professional use from trusted brands</p>
                    </div>
                    <div class="col-md-4 text-center benifits-div">
                        <img src="assets/images/benifits4.png" class="img-fluid">
                        <h4>100% Genuine Products</h4>
                        <p>Sourced directly from the brands</p>
                    </div>
                    <div class="col-md-4 text-center benifits-div">
                        <img src="assets/images/benifits5.png" class="img-fluid">
                        <h4>Doorstep Delivery</h4>
                        <p>Convenient, quick and hassle-free</p>
                    </div>
                    <div class="col-md-4 text-center benifits-div">
                        <img src="assets/images/benifits6.png" class="img-fluid">
                        <h4>Secure Payment</h4>
                        <p>Safe payment methods available</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                    <div class="col-md-4 how-to-apply">
                        <div class="how-to-apply-top text-center">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="45"><path fill="#3F414D" d="M7 0C3.156 0 0 3.156 0 6.999v3c0 .55.45.999 1 .999h5v29.995c0 .55.45 1 1 1h14v-2H8V10.998h19c.55 0 1-.45 1-1v-3C28 4.246 30.246 2 33 2h.094A5.01 5.01 0 0 1 38 6.999v32.994h-5v2h6c.55 0 1-.45 1-1V6.999C40 3.206 36.93.082 33.156 0H7zm0 2h21.156C26.84 3.273 26 5.034 26 6.999v2H2v-2c0-2.754 2.246-5 5-5zm6 11.997v2h20v-2H13zm0 6v1.999h20v-2H13zm14 5.998c-.773 0-1.41.43-1.875 1.031-.695-.152-1.445-.117-2.063.375-.613.492-.773 1.25-.75 1.969-.648.355-1.183.89-1.312 1.656-.125.757.215 1.43.688 1.968-.282.71-.31 1.504.062 2.125.066.113.164.187.25.28v8.593a.994.994 0 0 0 .547.898.995.995 0 0 0 1.047-.086L27 42.242l3.406 2.562a.995.995 0 0 0 1.047.086c.34-.171.55-.52.547-.898V35.4c.086-.094.184-.168.25-.281.434-.723.34-1.461.063-2.125.472-.539.812-1.21.687-1.968-.129-.766-.664-1.3-1.313-1.656.024-.719-.136-1.477-.75-1.969-.617-.492-1.367-.527-2.062-.375-.453-.574-1.09-1.03-1.875-1.03zm2 1.219c.043.031.125.094.094.062l-.032.032c-.019-.032-.042-.063-.062-.094zm-2 .781c.32 0 .352.059.438.312.05.153.136.293.25.407.05.05.113.117.375.25.261.132.48.125.53.125.184.007.372-.036.532-.125.148-.09.418-.118.563 0 .167.136.167.183.062.5-.04.109-.063.226-.063.343 0 .137.07.156.125.281a1 1 0 0 0 .813.906c.156.028.348.22.375.375a.496.496 0 0 1-.219.469c-.289.184-.468.5-.468.844v.312a.984.984 0 0 0 .187.594c.027.039.07.437.031.5a.496.496 0 0 1-.468.218.997.997 0 0 0-.97.375v.031c-.034.028-.019.024-.062.063-.011.012-.02-.012-.031 0a1 1 0 0 0-.313.719c0 .265 0 .27-.218.343-.043.02-.086.04-.125.063-.008-.004.02 0-.032 0-.066 0-.261-.074-.406-.219a.99.99 0 0 0-.718-.281h-.375a.99.99 0 0 0-.72.281c-.163.164-.343.23-.562.156a.416.416 0 0 1-.218-.343 1.209 1.209 0 0 0-.5-.906.998.998 0 0 0-.875-.282.496.496 0 0 1-.47-.218c-.116-.2-.155-.274 0-.47.141-.175.22-.397.22-.624v-.312c0-.344-.18-.66-.47-.844a.496.496 0 0 1-.218-.469c.027-.156.219-.347.375-.375a1 1 0 0 0 .813-.906c.054-.125.125-.144.125-.28 0-.118-.024-.235-.063-.345-.105-.316-.105-.363.063-.5.144-.117.414-.09.562 0 .309.18.691.18 1 0h.031l.032-.03A.466.466 0 0 0 26 28.9c.262-.11.469-.324.563-.594.05-.156.28-.312.437-.312zm-3 9.06c.227.29.5.52.844.657l.031.031c.758.254 1.488.031 2.094-.343.008-.004.023.003.031 0h.188c.355.207.671.5 1.125.5.171 0 .515-.075.812-.188.016-.016.043-.023.063-.031.019-.008.042.011.062 0v-.032c.309-.128.555-.324.75-.562v4.905l-2.406-1.812a.996.996 0 0 0-1.188 0L24 41.992v-4.936z"></path></svg></span>
                            <h4>Check Qualifications</h4>                            
                        </div>
                        <p>Would you define yourself as one of the following?</p>
                        <ul class="apply-list">
                            <li>Salon/Spa/ Nail Salons owner</li>
                            <li>Independent beautician/ Hairstylist</li>
                            <li>Makeup artist</li>
                        </ul>
                        <p>If the answer to any of these questions is “Yes”, then we would love to have you as a member of the Pro Family</p>
                    </div>
                    <div class="col-md-4 how-to-apply">
                        <div class="how-to-apply-top text-center">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"><path fill="#3F414D" d="M8.364 0c-.578 0-1.046.468-1.046 1.045v4.182H6.273c-.578 0-1.046.468-1.046 1.046v4.182H4.182c-.578 0-1.046.468-1.046 1.045v15.682h-2.09C.467 27.182 0 27.65 0 28.227v16.728C0 45.532.468 46 1.045 46h43.91c.577 0 1.045-.468 1.045-1.045V28.227c0-.577-.468-1.045-1.045-1.045h-2.091V11.5c0-.577-.468-1.045-1.046-1.045h-1.045V6.273c0-.578-.468-1.046-1.046-1.046h-1.045V1.045C38.682.468 38.214 0 37.636 0H8.364zm1.045 2.09h27.182v3.137H9.409V2.091zM7.32 7.319h.869c.113.019.228.019.341 0h28.932c.113.019.228.019.34 0h.88v3.137H7.319V7.318zm-2.092 5.227h.87c.113.02.228.02.341 0h33.114c.113.02.228.02.34 0h.88v14.637h-11.5c-.577 0-1.045.468-1.045 1.045 0 2.9-2.327 5.228-5.227 5.228a5.211 5.211 0 0 1-5.227-5.228c0-.577-.468-1.045-1.046-1.045h-11.5V12.545zM2.091 29.273h13.803c.53 3.516 3.447 6.272 7.106 6.272 3.66 0 6.576-2.756 7.106-6.272h13.803v14.636H2.091V29.273z"></path></svg></span>
                            <h4>Get the Paperwork Ready</h4>                            
                        </div>
                        <p>1) ID Proof (any one)</p>
                        <ul class="apply-list">
                            <li>GST Certificate</li>
                            <li>Government-Issued Photo ID</li>                            
                        </ul>
                        <p>2) Business Proof (any one)</p>
                        <ul class="apply-list">
                            <li>Online Business Presence</li>
                            <li>Business Card with Credentials</li>
                            <li>Training Certificate</li>
                            <li>Press Material</li>
                            <li>Union Card</li>
                            <li>Business Contract</li>
                            <li>Reference Letter</li>
                            <li>Any Other Professional Proof</li>
                        </ul>
                        <p>Why do I need to upload my documents?</p>
                        <a href="#" class="apply-acher">Check FAQs</a>
                    </div>
                    <div class="col-md-4 how-to-apply">
                        <div class="how-to-apply-top text-center">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"><path fill="#3F414D" d="M0 0v46h36.346V33.5l-2.02 1.598V44H2.02V2h32.307v10l2.02 1.43V0H0zm10.506 6c-2.2.04-2.382 1.73-1.956 3.36 0 0-.229.23-.217.55.024.613.434.809.434.809.079.57.584 1.078.765 1.172 0 .363.04.64 0 1.039-.434 1.16-3.34.832-3.474 3.07h8.976c-.138-2.238-3.045-1.91-3.483-3.07-.035-.399 0-.676 0-1.04.253-.117.667-.593.75-1.171 0 0 .43-.274.43-.723 0-.316-.107-.55-.19-.637.229-.695.627-2.808-.903-2.808-.166-.285-.58-.551-1.132-.551zm10.7 2a1.014 1.014 0 0 0-.888.492c-.181.313-.181.7 0 1.012.186.309.525.5.888.496h8.076c.363.004.702-.188.888-.496.181-.313.181-.7 0-1.012A1.014 1.014 0 0 0 29.282 8h-8.076zm0 5a1.014 1.014 0 0 0-.888.492c-.181.313-.181.7 0 1.012.186.309.525.5.888.496h8.076c.363.004.702-.188.888-.496.181-.313.181-.7 0-1.012a1.014 1.014 0 0 0-.888-.492h-8.076zm13.12.863V20H27.26v7h7.067v6.137L46 23.5l-11.674-9.637zm2.02 4.274l6.499 5.363-6.5 5.363V25h-7.067v-3h7.068v-3.863zM7.07 23a1.014 1.014 0 0 0-.887.492c-.182.313-.182.7 0 1.012.185.308.524.5.887.496h14.135c.362.004.702-.188.887-.496.181-.313.181-.7 0-1.012a1.014 1.014 0 0 0-.887-.492H7.07zm0 6a1.014 1.014 0 0 0-.887.492c-.182.313-.182.7 0 1.012.185.308.524.5.887.496h11.106c.363.004.702-.188.887-.496.182-.313.182-.7 0-1.012a1.014 1.014 0 0 0-.887-.492H7.07zm19.183 0a1.014 1.014 0 0 0-.888.492c-.181.313-.181.7 0 1.012.186.308.525.5.888.496h3.028c.363.004.702-.188.888-.496.181-.313.181-.7 0-1.012a1.014 1.014 0 0 0-.888-.492h-3.028zM7.07 35a1.014 1.014 0 0 0-.887.492c-.182.313-.182.7 0 1.012.185.309.524.5.887.496h14.135c.362.004.702-.188.887-.496.181-.313.181-.7 0-1.012a1.014 1.014 0 0 0-.887-.492H7.07zm19.183 0a1.014 1.014 0 0 0-.888.492c-.181.313-.181.7 0 1.012.186.309.525.5.888.496h3.028c.363.004.702-.188.888-.496.181-.313.181-.7 0-1.012a1.014 1.014 0 0 0-.888-.492h-3.028z"></path></svg></span>
                            <h4>Register</h4>                            
                        </div>
                        <p>To apply to the PRO program, fill in the registration form <a href="#" class="apply-acher">here.</a></p>
                        <p>Once you submit the form, we will process your application. Our team will verify your details and documents. The process can take upto 72 hours. You will then receive an email from us, communicating your membership status.</p>
                        <p>Once your application is accepted, you will get immediate access to the PRO portal with special offers and education and training material to help build your business.</p>
                        <p>In case your application is not accepted, and you would like help regarding the same, contact us or call on  +91-1234657891.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade registration-pills-faq" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h4 class="text-center">Pre Registration FAQs</h4>
                <div id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn btn-link w-100 text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <span>1. What is the PRO programme?</span>
                            <span class="float-right"><i class="fas fa-chevron-down icon"></i></span>
                          </button>
                        </h5>
                      </div>
                  
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, accusantium facilis? Dolorem sunt sit, quae commodi, consectetur porro rerum, inventore explicabo quaerat consequatur provident accusamus iusto soluta hic assumenda asperiores?</p>                            
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed  w-100 text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <span>2. How do I become a member?</span>
                            <span class="float-right"><i class="fas fa-chevron-down icon"></i></span>
                          </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugiat ipsa corporis hic, at praesentium totam quidem voluptatem maxime consequuntur natus voluptatibus sit temporibus rerum nostrum quia fugit harum sapiente!</p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed  w-100 text-left" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <span>3. What if I already have a account?</span>
                            <span class="float-right"><i class="fas fa-chevron-down icon"></i></span>
                          </button>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores natus ipsum saepe nulla delectus accusamus maxime voluptates beatae! Autem minus qui amet non pariatur eveniet voluptatum eum unde veritatis distinctio.</p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed  w-100 text-left" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                              <span>4. Am I eligible?</span>
                              <span class="float-right"><i class="fas fa-chevron-down icon"></i></span>
                            </button>
                          </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                          <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores natus ipsum saepe nulla delectus accusamus maxime voluptates beatae! Autem minus qui amet non pariatur eveniet voluptatum eum unde veritatis distinctio.</p>
                          </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed  w-100 text-left" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                              <span>5. What documents will I need?</span>
                              <span class="float-right"><i class="fas fa-chevron-down icon"></i></span>
                            </button>
                          </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                          <div class="card-body">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores natus ipsum saepe nulla delectus accusamus maxime voluptates beatae! Autem minus qui amet non pariatur eveniet voluptatum eum unde veritatis distinctio.</p>
                          </div>
                        </div>
                    </div>

                  </div>
            </div>
        </div>    
    </div>    
</section>
   

    <?php include 'include/footer.php' ?>
</body>

</html>