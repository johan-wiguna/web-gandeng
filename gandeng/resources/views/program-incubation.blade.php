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
        <h2 class="g-inc-section-title text-center mb-2">Problems in social enterprises and NGO</h2>
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
                <p class="text-content-regular my-2">Lack of understanding towards the values and expected impact to bring</p>
            </div>

            <div class="text-center">
                <img class="problems-img" src="{{ asset('img/g-incubation/money.png') }}" alt="">
                <p class="text-content-regular my-2">Lack of understanding towards the values and expected impact to bring</p>
            </div>
        </div>

        <div class="text-center mb-5">
            <span class="text-content-regular-l text-center low-highlight-g-inc">
                Therefore, <b>G-Incubation</b> is here to boost starting NGOs and SEs to reach better sustainability.
            </span>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <div>
                <img id="question-img" src="{{ asset('img/g-incubation/question.svg') }}" alt="">
            </div>

            <div>
                <div>
                    <h2 class="g-inc-section-title">How?</h2>
                    <p class="text-content-regular-l">
                        By providing comprehensive fundamental skills needed to develop organizations and business.
                    </p>
                </div>
                <br>
                <div>
                    <h2 class="g-inc-section-title">What skills?</h2>
                    <ul>
                        <li>
                            <span class="text-content-regular-l"><b>Knowledge</b></span>
                            <br>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis necessitatibus sapiente veritatis.</p>
                        </li>
                        <li>
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

<section id="g-inc-curriculum" class="pb-5">
    <div class="container">
        <h2 class="g-inc-section-title text-center mb-2">Our curriculum</h2>
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

<section id="program-gallery" class="pb-5">
    <div class="container">
        <h2 class="g-inc-section-title text-center mb-2">This is us</h2>
        <p class="text-content-regular text-center mb-4">
            Here is some of our photos to let you know us better.
        </p>

        <div id="program-gallery-swiper" class="swiper mb-4">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
                <div class="swiper-slide">
                    <img src="https://picsum.photos/1200/600" alt="">
                </div>
                
                <div class="swiper-slide">
                    <img src="https://picsum.photos/800/600" alt="">
                </div>

                <div class="swiper-slide">
                    <img src="https://picsum.photos/1000/600" alt="">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <p class="text-content-regular text-center mb-2">
            Interested in viewing more of our photos? Go to our gallery by clicking the button below!
        </p>

        <div class="text-center">
            <button class="btn-g-inc-round" onclick="location.href='/gallery/';">Go to Gallery</button>
        </div>
    </div>
</section>

@endsection