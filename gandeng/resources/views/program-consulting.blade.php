@extends('layouts.main')

@section('content')

<section id="program-header" class="bg-dark p-5">
    <div class="container text-center">
        <img class="mb-5" src="{{ asset('img/gandeng-logos/g-consulting-logotype.png') }}" alt="G-Consulting">
        <p class="text-content-light-l">
            <b>G-Consulting</b> is a platform where university students could learn soft skill, problem solving, analytical thinking, and experience real live postgraduate working.
    </div>
</section>

<section id="program-comingsoon" class="p-5">
    <h2 class="gcon-section-title text-center mb-2">Training program to help uni students grow</h2>
    <div class="row">
        <div class="col">
            <p class="text-center">3months</p>
            <div class="topline"></div>
            <div class="bottomline"></div>
        </div>
    </div>
</section>

<section id="program-cta" class="p-5 bg-gcon-1">
    <div class="container">
        <div class="d-flex justify-content-around align-items-center text-center">
            <div>
                <div id="cta-ready-to">Ready to</div>
                <h1 id="cta-tag" class="mb-4">#DevelopYourself?</h1>
                <p class="text-content-light-l mb-4">Join our program now by clicking the button below!</p>

                <button class="btn-dark-round-outline fw-bold" onclick="location.href='/';">Register Now</button>
            </div>
            
            <div>
                <img src="{{ asset('img/g-consulting/register.svg') }}" alt="">
            </div>
        </div>
    </div>
</section>

<section id="program-faq" class="py-5">
    <div class="container">
        <h2 class="gcon-section-title text-center mb-2">Frequently asked questions</h2>
        
        <div id="faq-container" class="d-flex justify-content-around flex-wrap">
            <div id="faq-1" class="faq faq-gcon" onclick="expandFAQ(this.id)">
                <div class="text-content-bold">
                    <i class="faq-chevron fas fa-chevron-right fa-xs text-dark"></i>
                    <span>What is this question?</span>
                </div>
                <div class="faq-answer">
                    Erat magna lacus mattis vivamus. Sed turpis quis aliquam massa pellentesque nullam sed netus. Lacus ut nisl ut adipiscing a magna a quis sodales. Porttitor urna, morbi mi et fermentum.
                </div>
            </div>

            <div id="faq-2" class="faq faq-gcon" onclick="expandFAQ(this.id)">
                <div class="text-content-bold">
                    <i class="faq-chevron fas fa-chevron-right fa-xs text-dark"></i> What is this question?
                </div>
                <div class="faq-answer">
                    Erat magna lacus mattis vivamus. Sed turpis quis aliquam massa pellentesque nullam sed netus. Lacus ut nisl ut adipiscing a magna a quis sodales. Porttitor urna, morbi mi et fermentum.
                </div>
            </div>

            <div id="faq-3" class="faq faq-gcon" onclick="expandFAQ(this.id)">
                <div class="text-content-bold">
                    <i class="faq-chevron fas fa-chevron-right fa-xs text-dark"></i> What is this question?
                </div>
                <div class="faq-answer">
                    Erat magna lacus mattis vivamus. Sed turpis quis aliquam massa pellentesque nullam sed netus. Lacus ut nisl ut adipiscing a magna a quis sodales. Porttitor urna, morbi mi et fermentum.
                </div>
            </div>

            <div id="faq-4" class="faq faq-gcon" onclick="expandFAQ(this.id)">
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