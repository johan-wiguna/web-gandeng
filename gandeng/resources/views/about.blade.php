@extends('layouts.main')

@section('content')

<section id="about-gandeng-main">
    <div class="container p-5">
        <div class="text-section-title text-center">About Us</div>

        <div class="text-center about-container">
            <p class="text-content-regular-l pb-0"><b>(G)andeng Foundation</b>, established in 2021, is an ecosystem consisting of three synergized pillars. These pillars are built to proliferate the social impact of future generations through empowerment for students by soft skill and nurture social leaders to scale up.
            </p>

            <img class="w-25 my-5" src="{{ asset("/img/gandeng-logos/gandeng-logogram.png") }}" alt="">

            <div class="fs-5 fw-bold mb-3 lspace-3">KNOW US BETTER</div>

            <ul id="about-navigation" class="d-flex align-items-center justify-content-center">
                <li id="about-story" onclick="switchAbout(this.id)" class="nav-active">
                    <a  class="text-dark link-hover-underline about-active">Our Story</a>
                </li>
                <li id="about-vm" onclick="switchAbout(this.id)" class="border-link">
                    <a class="text-dark link-hover-underline">Vision & Mission</a>
                </li>
                <li id="about-founder" onclick="switchAbout(this.id)">
                    <a  class="text-dark link-hover-underline">Founders</a>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="content-parent">
    
    {{-- story --}}
    <section id="story" >
        <section id="about-journey" class="mb-5">
            <div class="container">
                <div id="journey-container" class="d-flex">
                    <div>
                        <div class="text-section-title">The start of our journey</div>

                        <p class="text-content-regular-l">It all started because our founders observed that there was a lack of systematic approach in soft-skill education for children in Indonesia, along with numerous social initiatives, NGO, and social enterprises who find it difficult to be sustainable, for example because of the lack of funding or human resource management strategy.</p>
                    </div>
                    <div>
                        <img src="{{ asset('img/journey.svg') }}" alt="Our journey">
                    </div>
                </div>
                
                <br>
                <hr>
                <br>

                <p class="text-content-regular-l text-center">One time, when one of our founders was mentoring a 12-year-old &#8211; trained in soft-skill and hard-skill education, a <b>simple question</b> was raised by her:</p>
                <br>
                <div class="text-center">
                    <q class="low-highlight font-montserrat fw-bold fs-3">Why don't you make this for other children?</q>
                </div>
                <br>
                <p class="text-content-regular-l text-center">From that, our founders felt the need to step in and make an ecosystem called <q><b>(G)andeng Foundation</b></q> to help the development of students and early social enterprise/NGO.</p>
            </div>
        </section>

        <section id="about-logo" class="mb-5">
            <div class="container">
                <div class="cst-card cst-card-content">
                    <div class="text-section-title text-center pt-0">The logo</div>

                    <div class="about-logotag-container d-flex justify-content-center align-items-center">
                        <div class="about-logotag-image">
                            <img src="{{ asset("img/gandeng-logos/gandeng-logogram.png") }}" alt="Gandeng logo">
                        </div>
                        
                        <div class="about-logotag-exp">
                            <div class="text-content-regular-l fw-bold font-montserrat text-capitalize">The letter 'G'</div>
                            <div class="text-content-regular mb-2">Represents the initial of "Gandeng Foundation".</div>

                            <div class="text-content-regular-l fw-bold font-montserrat text-capitalize">People holding hands</div>
                            <div class="text-content-regular mb-2">Represents the affection and supports that people of Gandeng give to each other.</div>

                            <div class="text-content-regular-l fw-bold font-montserrat text-capitalize">The lantern</div>
                            <div class="text-content-regular">Represents how the mentors will help guide their mentees, which the light will always follow whoever holds the lantern.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about-tagline" class="mb-5">
            <div class="container">
                <div class="cst-card cst-card-content">
                    <div class="text-section-title text-center pt-0">The tagline</div>

                    <div class="about-logotag-container d-flex justify-content-center align-items-center">
                        <div class="about-logotag-image">
                            <img src="{{ asset("img/gandeng-logos/gandeng-tagline.png") }}" alt="Gandeng logo">
                        </div>
                        
                        <div class="about-logotag-exp">
                            <div class="text-content-regular">Our simple yet meaningful tagline shows that we believe by joining our hands, we can illuminate and create a bigger impact to grow together as a strong organization.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>

    {{-- vision-mission --}}
    <section id="vm" class="d-none">
        <section id="about-vision-mission">
            <div class="about-vision">
                <div class="text-section-title text-center">Our Vision & Mission</div>
                <div class="text-sub-section-title text-center mb-2">
                    Vision
                </div>
                <div class="text-center container mb-5">
                    <p class="text-content-regular-l pb-0">To build a <b>synergized ecosystem</b> in order to <b>improve the soft skill education for high school and college students</b>, as well as becoming a catalyst for youth-led social enterprises and NGOs.</p>
                </div>
            </div>

            <div class="about-mission p-5 bg-dark text-light">
                <div class="text-sub-section-title text-center">
                    Mission
                </div>
                <div id="mission-container" class="d-flex">
                    <div class="col d-block text-center">
                        <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/g-academia-logotype.png') }}" alt="">
                        <p class="text-center text-content-light">Democratize soft skills education to all secondary school students through intensive training.</p>
                    </div>

                    <div class="col d-block text-center">
                        <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/g-consulting-logotype.png') }}" alt="">
                        <p class="text-center text-content-light">Train soft skills for college students by consulting methodology through intensive peer learning and consulting projects.</p>
                    </div>

                    <div class="col d-block text-center">
                        <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/g-incubation-logotype.png') }}" alt="">
                        <p class="text-center text-content-light">Catalyse social enterprise and NGO founders through training and providing tailor-made solutions so they can scale and create bigger impact.</p>
                    </div>
                </div>
            </div>
        </section>
    </section>

    {{-- founders --}}
    <section id="founders" class="d-none">
        <section id="founders-main">
            <div class="container">
                <div class="text-section-title text-center pb-2">Founders of Gandeng</div>
                <p class="text-content-regular-l text-center mb-5">Here are the founders of Gandeng Foundation.</p>

                <div id="founders-identity">
                    <div class="container">
                        <div class="text-section-title text-center pb-2">Chairpersons</div>

                        <div class="founder-container d-flex align-items-center mb-3">
                            <img class="w-25 cp-image-left" src="{{ asset("img/founders/Rivaldo.png") }}" alt="Rivaldo">
                            <div class="founder-desc ps-5">
                                <div class="text-sub-section-title">Rivaldo Gere Gurky</div>

                                <p class="text-content-light-l pb-0">Currently Rivaldo is actively serving the society by digitalizing Indonesian Economy with Prieds as Vice President Strategy & Transformation. Prior to that he dedicated his life to educate younger generation on consulting field with ShARE. In the firm, he also worked in the business side as Junior Partner. He also has consulting experience with YCP solidiance and soon will be joining local consulting firm. He won a lot of competitions when he was still studying at Universitas Indonesia and those made him graduating with First Class Honor predicate.</p>     
                            </div>
                        </div>

                        <div class="founder-container-reversed d-flex align-items-center mb-5">
                            <div class="founder-desc pe-5 text-end">
                                <div class="text-sub-section-title">Brigitta Vanya Sai Edgina</div>

                                <p class="text-content-light-l pb-0">Brigitta is currently serving the SEAmarket to help startup founders to do Capital Raising, Mergers & Acquisitions Advisory, and Investment Management. Prior to working in Investment Banking, Gina had experience as a consulting project manager ShARE .She also has internship experience in RHB Securities in the equity research division. In the public sector, she has experience in TGUPP (Tim Gubernur untuk Percepatan Pembangunan) which is a think tank built to assist the Governor in formulating and delivering public policies in Jakarta.</p>     
                            </div>
                            <img class="w-25 cp-image-right" src="{{ asset("img/founders/Brigitta.png") }}" alt="">
                        </div>

                        <div class="text-section-title text-center pb-2">Managing Director</div>

                        <div class="founder-container d-flex align-items-center mb-5">
                            <img class="w-25 cp-image-left" src="{{ asset("img/founders/Cindy.png") }}" alt="">
                            <div class="founder-desc ps-5">
                                <div class="text-sub-section-title">Cindy Pregita</div>

                                <p class="text-content-light-l pb-0">Currently, Cindy is part of Google as Business intern in the marketing team for the mission to enhance Indonesia’s digital ecosystem. She is passionate in empowering students to achieve their goals and dream careers, shown by her volunteering activities in several career mentorship program. Prior to that, she initiated career mentorship program in Skill Academy by Ruangguru to help Prakerja users to successfully get jobs during pandemic. She is an economics student at University of Indonesia.</p>     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>


</section>



@endsection