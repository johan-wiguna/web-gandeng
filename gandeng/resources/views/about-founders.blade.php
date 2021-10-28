@extends('layouts.main')

@section('content')
@include('partials.about')

<div id="founders-main">
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
</div>

@endsection