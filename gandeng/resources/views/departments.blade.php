@extends('layouts.main')

@section('content')

<div class="bg-dark">
    <div class="container p-5 text-light text-center">
    
        <div class="departments-container">
            <img class="w-25 my-5" src="{{ asset("/img/gandeng-logos/gandeng-logogram.png") }}" alt="">
        </div>

        <div class="text-section-title">Departments of Gandeng</div>


    </div>
</div>
<div class="bg-light">
    <div class="container p-5">
        <p class=" text-content-regular-l text-center pb-0">Purus faucibus lobortis ac dolor eget orci, lectus platea. Integer in feugiat viverra enim. Magna lectus ut libero turpis elit, tempus lectus sem. Ut sem consequat porttitor mauris arcu, mattis suspendisse egestas. Dignissim at nibh blandit mollis tellus aliquam volutpat, vestibulum.</p>

        <div id="departments-navigation">
            <button id="nav-branding" class="nav-active" onclick="changeDepartment(this.id)">Branding</button>
            <button id="nav-operations" onclick="changeDepartment(this.id)">Operations</button>
            <button id="nav-sng" onclick="changeDepartment(this.id)">Strategy & Growth</button>
        </div>
        
        <div id="department-container">
            <div id="branding-members">
                <p>1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit ratione, eveniet quo et iste ipsam odio harum temporibus similique adipisci assumenda non voluptates? Labore, mollitia quam! Fugiat quis nulla accusamus.</p>
            </div>
            
            <div id="operations-members" class="d-none">
                <p>2 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit ratione, eveniet quo et iste ipsam odio harum temporibus similique adipisci assumenda non voluptates? Labore, mollitia quam! Fugiat quis nulla accusamus.</p>
            </div>

            <div id="sng-members" class="d-none">
                <p>3 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit ratione, eveniet quo et iste ipsam odio harum temporibus similique adipisci assumenda non voluptates? Labore, mollitia quam! Fugiat quis nulla accusamus.</p>
            </div>
        </div>
    </div>
</div>

@endsection