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
            <button id="nav-branding" class="nav-active" onclick="switchDepartment(this.id)">Branding</button>
            <button id="nav-operations" onclick="switchDepartment(this.id)">Operations</button>
            <button id="nav-sng" onclick="switchDepartment(this.id)">Strategy & Growth</button>
        </div>
        
        <div id="department-container">
            <div id="branding-members">
                <p class="text-center mb-4">These are the directors and managers of Branding departments.</p>

                <div class="directors d-flex justify-content-center flex-wrap mb-4">
                    @foreach ($departments["Branding"]["Director"] as $person)
                        <div class="director text-center mx-3">
                            <img class="mb-2" src="https://picsum.photos/120" alt="">
                            <div>{{ $person }}</div>
                            <div><b>Director of Branding</b></div>
                        </div>
                    @endforeach
                </div>

                <div class="managers d-flex justify-content-center flex-wrap">
                    @foreach ($departments["Branding"]["Manager"] as $person)
                        <div class="manager text-center mx-3">
                            <img class="mb-2" src="https://picsum.photos/120" alt="">
                            <div>{{ $person }}</div>
                            <div><b>Manager of Branding</b></div>
                        </div>
                    @endforeach
                </div>
            </div>
            
            {{-- <div id="operations-members" class="d-none">
                <p class="text-center mb-4">These are the directors and managers of Operations departments.</p>

                <div class="directors d-flex justify-content-center flex-wrap mb-4">
                    <div class="director text-center mx-3">
                        <img class="mb-2" src="https://picsum.photos/120" alt="">
                        <div class="">Lorem Ipsum</div>
                        <div><b>Director of Branding</b></div>
                    </div>
                </div>

                <div class="managers d-flex justify-content-center flex-wrap">
                    <div class="manager text-center mx-3">
                        <img class="mb-2" src="https://picsum.photos/120" alt="">
                        <div>Lorem Ipsum</div>
                        <div><b>Manager of Branding</b></div>
                    </div>

                    <div class="manager text-center mx-3">
                        <img class="mb-2" src="https://picsum.photos/120" alt="">
                        <div>Lorem Ipsum</div>
                        <div><b>Manager of Branding</b></div>
                    </div>

                    <div class="manager text-center mx-3">
                        <img class="mb-2" src="https://picsum.photos/120" alt="">
                        <div>Lorem Ipsum</div>
                        <div><b>Manager of Branding</b></div>
                    </div>

                    <div class="manager text-center mx-3">
                        <img class="mb-2" src="https://picsum.photos/120" alt="">
                        <div>Lorem Ipsum</div>
                        <div><b>Manager of Branding</b></div>
                    </div>
                </div>
            </div>

            <div id="sng-members" class="d-none">
                <p class="text-center mb-4">These are the directors and managers of Strategy & Growth departments.</p>

                <div class="directors d-flex justify-content-center flex-wrap mb-4">
                    <div class="director text-center mx-3">
                        <img class="mb-2" src="https://picsum.photos/120" alt="">
                        <div class="">Lorem Ipsum</div>
                        <div><b>Director of Branding</b></div>
                    </div>

                    <div class="director text-center mx-3">
                        <img class="mb-2" src="https://picsum.photos/120" alt="">
                        <div class="">Lorem Ipsum</div>
                        <div><b>Director of Branding</b></div>
                    </div>
                </div>

                <div class="managers d-flex justify-content-center flex-wrap">
                    <div class="manager text-center mx-3">
                        <img class="mb-2" src="https://picsum.photos/120" alt="">
                        <div>Lorem Ipsum</div>
                        <div><b>Manager of Branding</b></div>
                    </div>

                    <div class="manager text-center mx-3">
                        <img class="mb-2" src="https://picsum.photos/120" alt="">
                        <div>Lorem Ipsum</div>
                        <div><b>Manager of Branding</b></div>
                    </div>

                    <div class="manager text-center mx-3">
                        <img class="mb-2" src="https://picsum.photos/120" alt="">
                        <div>Lorem Ipsum</div>
                        <div><b>Manager of Branding</b></div>
                    </div>

                    <div class="manager text-center mx-3">
                        <img class="mb-2" src="https://picsum.photos/120" alt="">
                        <div>Lorem Ipsum</div>
                        <div><b>Manager of Branding</b></div>
                    </div>

                    <div class="manager text-center mx-3">
                        <img class="mb-2" src="https://picsum.photos/120" alt="">
                        <div>Lorem Ipsum</div>
                        <div><b>Manager of Branding</b></div>
                    </div>

                    <div class="manager text-center mx-3">
                        <img class="mb-2" src="https://picsum.photos/120" alt="">
                        <div>Lorem Ipsum</div>
                        <div><b>Manager of Branding</b></div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

@endsection