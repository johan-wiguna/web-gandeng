@extends('layouts.main')

@section('content')


<section id="programs-ourprograms" class="text-light">
    <div class="gradient">
        <div class="container d-flex align-items-center p-5 ">
            <div class="">
                <div class="text-section-title mb-2">Our Programs</div>
                <p class="text-justify text-content-light pe-5 pb-0">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus assumenda expedita natus officiis est hic in eos similique cum totam dolore inventore, facilis fugit saepe? Fugiat a assumenda harum vitae quibusdam minus distinctio ullam nesciunt, officia qui molliti
            </div>
            <img class="w-50" src="../img/sample-image-4.jpg" alt="">
        </div>

    </div>
</section>
<section class="synergy">
    <div class="container p-5 text-center">
            <img class="w-75" src="../img/sample-image-4.jpg" alt="">
    </div>
</section>
    
<section id="programs-page">
    <div class="programs p-5 bg-dark text-light">

        <div class="d-flex">
            <div class="col d-block text-center">
                <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/g-academia-logotype.png') }}" alt="g-academia">
                <p class="text-center text-content-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <button class="btn-g-ac-round">Discover More</button>
            </div>

            <div class="col d-block text-center">
                <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/g-consulting-logotype.png') }}" alt="g-consulting">
                <p class="text-center text-content-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <button class="btn-g-con-round">Discover More</button>
            </div>

            <div class="col d-block text-center">
                <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/g-incubation-logotype.png') }}" alt="g-incubation">
                <p class="text-center text-content-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <button class="btn-g-inc-round">Discover More</button>
            </div>
        </div>
    </div>
</section>



@endsection