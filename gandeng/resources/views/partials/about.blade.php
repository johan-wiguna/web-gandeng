@extends('layouts.main')

@section('content')
<div id="about-gandeng-main">
    <div class="bg-white p-5">
        <div class="container">
            <h2 class="text-section-title text-center pb-2">About Us</h2>

            <div class="text-center about-container">
                <p class="text-center text-content-light pb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus assumenda expedita natus officiis est hic in eos similique cum totam dolore inventore, facilis fugit saepe? Fugiat a assumenda harum vitae quibusdam minus distinctio ullam nesciunt, officia qui mollitia vel velit, ratione culpa, modi necessitatibus? Maiores earum esse quasi, nesciunt illum illo assumenda laborum quis. Cumque ab deleniti dolore accusantium nostrum itaque numquam iure vero enim, aliquam beatae alias officia blanditiis dolorem voluptate nisi tempora, culpa dolores repellat at? Rerum, placeat fugit assumenda vero omnis in minus voluptate eligendi repudiandae. Tenetur, ipsam. Quae iste aspernatur debitis fugit necessitatibus esse voluptatibus rerum?</p>

                <img class="w-25" src="../img/gandeng-logogram.png" alt="">

                <h5 class="mb-4">KNOW US BETTER</h5>

                <ul class="d-flex align-items-center justify-content-center">
                    <li>
                        <a href="/about/story" class="text-dark">Our Story</a>
                    </li>
                    <li id="border-link">
                        <a href="/about/vision-mission" class="text-dark">Vision & Mission</a>
                    </li>
                    <li>
                        <a href="/about/people" class="text-dark">People Behind Gandeng</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection