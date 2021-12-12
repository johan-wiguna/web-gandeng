@extends('layouts.main')

@section('content')

<section id="program-header" class="bg-dark p-5">
    <div class="container text-center">
        <img class="mb-5" src="{{ asset('img/gandeng-logos/g-incubation-logotype-small.png') }}" alt="G-Incubation">
        <p class="text-content-light-l">
            <b>G-Incubation</b> is a platform where early social enterprise/NGO founders can learn more about substance, meet expert, and get helps form consulting educated people to revamp or expand their institution.
        </p>
    </div>
</section>

<section id="program-background" class="p-5">
    <div class="container">
        <h2 class="ginc-section-title text-center mb-2">Problems in NGO and social enterprises</h2>
        <p class="text-content-regular text-center mb-4">
            There are several issues that halt the growth of Social Enterprises and NGOs
        </p>

        <div id="background-container" class="d-flex justify-content-between my-5">
            <div class="text-center">
                <img class="problems-img" src="{{ asset('img/g-incubation/knowledge.png') }}" alt="">
                <p class="text-content-regular my-2">Lack of understanding towards the values and expected impact to bring</p>
            </div>

            <div class="text-center">
                <img class="problems-img" src="{{ asset('img/g-incubation/mechanism.png') }}" alt="">
                <p class="text-content-regular my-2">No transfer of knowledge mechanism and regeneration</p>
            </div>

            <div class="text-center">
                <img class="problems-img" src="{{ asset('img/g-incubation/money.png') }}" alt="">
                <p class="text-content-regular my-2">Lack of access to groups or individuals who provide funds</p>
            </div>
        </div>

        <div class="text-center mb-5">
            <span class="text-content-regular-l text-center low-highlight-ginc">
                Therefore, <b>G-Incubation</b> is here to boost starting <b>NGO</b>s and <b>SE</b>s to reach better sustainability.
            </span>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <div>
                <img id="question-img" src="{{ asset('img/g-incubation/question.svg') }}" alt="">
            </div>

            <div>
                <div>
                    <h2 class="ginc-section-title">How?</h2>
                    <p class="text-content-regular-l">
                        By providing comprehensive fundamental skills needed to develop organizations and business.
                    </p>
                </div>
                <br>
                <div>
                    <h2 class="ginc-section-title">What skills?</h2>
                    <ul>
                        <li>
                            <span class="text-content-regular-l"><b>Knowledge</b></span>
                            <br>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis necessitatibus sapiente veritatis.</p>
                        </li>
                        <li class="my-3">
                            <span class="text-content-regular-l"><b>Network</b></span>
                            <br>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis necessitatibus sapiente veritatis.</p>
                        </li>
                        <li>
                            <span class="text-content-regular-l"><b>Funding</b></span>
                            <br>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis necessitatibus sapiente veritatis.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="ginc-curriculum" class="pb-5">
    <div class="container">
        <h2 class="ginc-section-title text-center mb-2">Our curriculum</h2>
        <p class="text-center mb-4">Here are the list of what you will be learning in this program.</p>
        
        <div class="module-container d-flex justify-content-around align-items-center flex-wrap">
            <div class="module d-flex justify-content-center">
                <img class="module-icon" style="width:36px;" src="{{ asset('img/g-incubation/c-1.png') }}" alt="">
                <div class="module-title text-content-regular-l">Strategic Management</div>
            </div>
            
            <div class="module d-flex justify-content-center">
                <img class="module-icon" style="width:36px;" src="{{ asset('img/g-incubation/c-2.png') }}" alt="">
                <div class="module-title text-content-regular-l">Product Management</div>
            </div>

            <div class="module d-flex justify-content-center">
                <img class="module-icon" style="width:36px;" src="{{ asset('img/g-incubation/c-3.png') }}" alt="">
                <div class="module-title text-content-regular-l">Marketing</div>
            </div>

            <div class="module d-flex justify-content-center">
                <img class="module-icon" style="width:36px;" src="{{ asset('img/g-incubation/c-4.png') }}" alt="">
                <div class="module-title text-content-regular-l">HR Management</div>
            </div>

            <div class="module d-flex justify-content-center">
                <img class="module-icon" style="width:36px;" src="{{ asset('img/g-incubation/c-5.png') }}" alt="">
                <div class="module-title text-content-regular-l">Organizational Culture</div>
            </div>

            <div class="module d-flex justify-content-center">
                <img class="module-icon" style="width:36px;" src="{{ asset('img/g-incubation/c-6.png') }}" alt="">
                <div class="module-title text-content-regular-l">Logistic and Supply Chain</div>
            </div>

            <div class="module d-flex justify-content-center">
                <img class="module-icon" style="width:36px;" src="{{ asset('img/g-incubation/c-7.png') }}" alt="">
                <div class="module-title text-content-regular-l">Project Management</div>
            </div>

            <div class="module d-flex justify-content-center">
                <img class="module-icon" style="width:36px;" src="{{ asset('img/g-incubation/c-8.png') }}" alt="">
                <div class="module-title text-content-regular-l">Performance Management</div>
            </div>

            <div class="module d-flex justify-content-center">
                <img class="module-icon" style="width:36px;" src="{{ asset('img/g-incubation/c-9.png') }}" alt="">
                <div class="module-title text-content-regular-l">Financial Management</div>
            </div>

            <div class="module d-flex justify-content-center">
                <img class="module-icon" style="width:36px;" src="{{ asset('img/g-incubation/c-10.png') }}" alt="">
                <div class="module-title text-content-regular-l">Legal</div>
            </div>

            <div class="module d-flex justify-content-center">
                <img class="module-icon" style="width:36px;" src="{{ asset('img/g-incubation/c-11.png') }}" alt="">
                <div class="module-title text-content-regular-l">Research Method</div>
            </div>
        </div>
    </div>
</section>

{{-- <section id="ginc-program" class="pb-5">
    <div class="container">
        <h2 class="ginc-section-title text-center mb-2">Our Programs</h2>
        <p class="text-center">A self-development program for secondary school students, which will be held over the course of 9 months.</p>
        <p class="text-center mb-4">The program is <b>online</b> and <b>free of charge</b>, allowing any Indonesian student to participate in the program.</p>
        
        <div class="d-flex justify-content-center flex-wrap text-center">
            <div class="program-container">
                <img id="question-img" src="https://picsum.photos/600" alt="">
                <h6 class="text-content-bold my-3 program-name d-flex align-items-center justify-content-center">Big Class</h6>
                <p>Weekly meeting where incubatees are taught with NGO/SE fundamentals and best practices by expertise as the speaker.</p>
            </div>
            <div class="program-container">
                <img id="question-img" src="https://picsum.photos/600" alt="">
                <h6 class="text-content-bold my-3 program-name d-flex align-items-center justify-content-center">Assignments & Roadmap Making</h6>
                <p>Evaluation of curriculum mastery and internal condition to support your organization model and roadmap making.</p>
            </div>
            <div class="program-container">
                <img id="question-img" src="https://picsum.photos/600" alt="">
                <h6 class="text-content-bold my-3 program-name d-flex align-items-center justify-content-center">Expert Advisory</h6>
                <p>Get real insights from the best experts in the field related with your NGOs/SEs.</p>
            </div>
            <div class="program-container">
                <img id="question-img" src="https://picsum.photos/600" alt="">
                <h6 class="text-content-bold my-3 program-name d-flex align-items-center justify-content-center">Final Presentation</h6>
                <p>Pitch your roadmap proposal to our advisors and go through the next level of program.</p>
            </div>
            <div class="program-container">
                <img id="question-img" src="https://picsum.photos/600" alt="">
                <h6 class="text-content-bold my-3 program-name d-flex align-items-center justify-content-center">Project</h6>
                <p>Baby steps of roadmap realization towards growing and sustainable NGO/SE.</p>
            </div>
            <div class="program-container">
                <img id="question-img" src="https://picsum.photos/600" alt="">
                <h6 class="text-content-bold my-3 program-name d-flex align-items-center justify-content-center">Consultation</h6>
                <p>Tailor made strategies to fit the incubatees for the next 2-3 years by consultant teams advised by professionals MBB consultant.</p>
            </div>
            <div class="program-container">
                <img id="question-img" src="https://picsum.photos/600" alt="">
                <h6 class="text-content-bold my-3 program-name d-flex align-items-center justify-content-center">Pitching Day</h6>
                <p>Connection event made for connecting incubatees to potential angel investors.</p>
            </div>
            
            
        </div>
    </div>
</section> --}}

<section id="ginc-reasons">
    <div class="container">
        <h2 class="ginc-section-title text-center mb-2">Reasons to join us</h2>
        <p class="text-center mb-4"></p>
    </div>
</section>

<section id="ginc-advisors" class="pb-5">
    <div class="container">
        <h2 class="ginc-section-title text-center mb-2">This Year Selected Incubatees</h2>
        <p class="text-center mb-4">Here are the list of this year selected incubatees.</p>
    </div>
    
    <div class="container">
        <div class="row">
                <div class="items">
                    <div class="mt-5">
                        <div class="profile-item">
                            <div class="profile-image"><img src="https://picsum.photos/200"></div>
                            <div class="profile-content">
                                <div class="profile-details text-center">
                                    <div class="profile-name">Amelia Clarke</div>
                                    <div class="profile-other">NGO/SE Name</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <div class="profile-item">
                            <div class="profile-image"><img src="https://picsum.photos/200"></div>
                            <div class="profile-content">
                                <div class="profile-details text-center">
                                    <div class="profile-name">Amelia Clarke</div>
                                    <div class="profile-other">NGO/SE Name</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <div class="profile-item">
                            <div class="profile-image"><img src="https://picsum.photos/200"></div>
                            <div class="profile-content">
                                <div class="profile-details text-center">
                                    <div class="profile-name">Amelia Clarke</div>
                                    <div class="profile-other">NGO/SE Name</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <div class="profile-item">
                            <div class="profile-image"><img src="https://picsum.photos/200"></div>
                            <div class="profile-content">
                                <div class="profile-details text-center">
                                    <div class="profile-name">Amelia Clarke</div>
                                    <div class="profile-other">NGO/SE Name</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <div class="profile-item">
                            <div class="profile-image"><img src="https://picsum.photos/200"></div>
                            <div class="profile-content">
                                <div class="profile-details text-center">
                                    <div class="profile-name">Amelia Clarke</div>
                                    <div class="profile-other">NGO/SE Name</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    
</section>

<section id="program-incubatees" class="incubatees">
    <div class="content">
        <h2 class="ginc-section-title text-center mb-2">this year selected incubatees</h2>
        <div class="bg-ginc-1">
            <div class="container">
                <div id="incubatees-swiper" class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex flex-wrap justify-content-around p-5">
                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>

                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>
                            
                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>

                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>

                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>

                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>

                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>

                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>
                        </div>

                        <div class="swiper-slide d-flex flex-wrap justify-content-around p-5">
                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>

                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>
                            
                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>

                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>

                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>

                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>

                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>

                            <div class="d-flex-row justify-content-center flex-wrap text-center">
                                <img src="https://picsum.photos/100" alt="">
                                <h6 class="text-content-bold my-2 incubatees-name d-flex align-items-center justify-content-center">Lorem Ipsum</h6>
                                <p>NGO/SE Name</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-pagination"></div>
                    
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>

    </div>

</section>

<section id="program-gallery" class="gallery-ginc py-5">
    <div class="container">
        <h2 class="ginc-section-title text-center mb-2">This is us</h2>
        <p class="text-content-regular text-center mb-4">
            Here is some of our photos to let you know us better.
        </p>

        <div id="program-gallery-swiper" class="swiper mb-4">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
                <div class="swiper-slide">
                    <img src="https://picsum.photos/1600/900" alt="">
                </div>
                
                <div class="swiper-slide">
                    <img src="https://picsum.photos/1920/1080" alt="">
                </div>

                <div class="swiper-slide">
                    <img src="https://picsum.photos/1280/720" alt="">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <p class="text-content-regular text-center mb-3">
            Interested in viewing more of our photos? Go to our gallery by clicking the button below!
        </p>

        <div class="text-center">
            <button class="btn-ginc-round" onclick="location.href='/gallery/';">Go to Gallery</button>
        </div>
    </div>
</section>

<section id="program-cta" class="p-5 bg-ginc-1">
    <div class="container">
        <div class="d-flex justify-content-around align-items-center text-center">
            <div>
                <div id="cta-ready-to">Ready to</div>
                <h1 id="cta-tag" class="mb-4">#DevelopYourself?</h1>
                <p class="text-content-light-l mb-4">Join our program now by clicking the button below!</p>

                <button class="btn-dark-round-outline fw-bold" onclick="location.href='/';">Register Now</button>
            </div>
            
            <div>
                <img src="{{ asset('img/g-incubation/register.svg') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section id="program-faq" class="py-5">
    <div class="container">
        <h2 class="ginc-section-title text-center mb-2">Frequently asked questions</h2>
        
        <div id="faq-container">
            <div id="faq-1" class="faq faq-ginc" onclick="expandFAQ(this.id)">
                <div class="text-content-bold">
                    <i class="faq-chevron fas fa-chevron-right fa-xs text-dark"></i>
                    <span>What is this question?</span>
                </div>
                <div class="faq-answer">
                    Erat magna lacus mattis vivamus. Sed turpis quis aliquam massa pellentesque nullam sed netus. Lacus ut nisl ut adipiscing a magna a quis sodales. Porttitor urna, morbi mi et fermentum.
                </div>
            </div>

            <div id="faq-2" class="faq faq-ginc" onclick="expandFAQ(this.id)">
                <div class="text-content-bold">
                    <i class="faq-chevron fas fa-chevron-right fa-xs text-dark"></i> What is this question?
                </div>
                <div class="faq-answer">
                    Erat magna lacus mattis vivamus. Sed turpis quis aliquam massa pellentesque nullam sed netus. Lacus ut nisl ut adipiscing a magna a quis sodales. Porttitor urna, morbi mi et fermentum.
                </div>
            </div>

            <div id="faq-3" class="faq faq-ginc" onclick="expandFAQ(this.id)">
                <div class="text-content-bold">
                    <i class="faq-chevron fas fa-chevron-right fa-xs text-dark"></i> What is this question?
                </div>
                <div class="faq-answer">
                    Erat magna lacus mattis vivamus. Sed turpis quis aliquam massa pellentesque nullam sed netus. Lacus ut nisl ut adipiscing a magna a quis sodales. Porttitor urna, morbi mi et fermentum.
                </div>
            </div>

            <div id="faq-4" class="faq faq-ginc" onclick="expandFAQ(this.id)">
                <div class="text-content-bold">
                    <i class="faq-chevron fas fa-chevron-right fa-xs text-dark"></i> What is this question?
                </div>
                <div class="faq-answer">
                    Erat magna lacus mattis vivamus. Sed turpis quis aliquam massa pellentesque nullam sed netus. Lacus ut nisl ut adipiscing a magna a quis sodales. Porttitor urna, morbi mi et fermentum.
                </div>
            </div>
        </div>
    </div>
</section>

@endsection