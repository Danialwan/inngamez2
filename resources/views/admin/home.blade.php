<link rel="stylesheet" href={{ asset('css/home.css') }}>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@extends('layouts.admin')

@section('title', 'Beranda')

@section('content')
    <header>
        <video autoplay muted loop class="headerVidio absolute r-0 t-0 z-0">
            <source class="z-0" src="{{ asset('images/home/HeaderVidio.mp4') }}" type="video/mp4">
        </video>
        <div class="headerShadow absolute bg-gradient-to-t from-black z-10"></div>
        <div class="content absolute top-0 left-0">
            <h1 data-aos="fade-up">CREATIVE</h1>
            <h1 data-aos="fade-up">EXPERIENCE</h1>
            <h1 data-aos="fade-up">IMMERSIVE</h1>
        </div>
        <a class="ScrollDownIcon absolute top-0 z-20 flex justify-center" href="#homeDescription">
            <img class="w-6" src="{{ asset('images/icon/scrollDown.svg') }}" alt="">
        </a>
    </header>

    <section id="homeDescription" class="homeDescription flex justify-center md:p-10 xl:p-0 ">
        <p data-aos="fade-up" class="adminEdit z-30 text-center rounded-lg">
            <button id="editHomeBtn" class="edit"></button>
            {{$page->text}}
        </p>
    </section>
    <section class="ourGame">
        <div data-aos="fade-up" class="title flex justify-center md:mb-10 mt-10 xl:mb-20">
            <h1>OUR GAME</h1>
        </div>
        <center>
            <div data-aos="fade-up" class="gameCard grid md:grid-cols-2 gap-10 xl:grid-cols-4 gap-10 text-center">

                @foreach ( $game as $item)
                <div class="wrapper rounded-lg">
                    <div class="card rounded-lg">
                        <div class="cardFront rounded-lg"
                            style="background-image: url('{{ asset('images/gameImage/'.$item->image) }}')"></div>
                        <div class="cardBack card-1 rounded-lg flex flex-col justify-center items-center"  style="background-image: url('{{ asset('images/gameImage/'.$item->image) }}')">
                            <a class="edit" href="{{ '/admin/game/'.$item->id }}"></a>
                            <b class="mb-3 z-10">{{$item->title}}</b>
                            <p class="z-10">{{Illuminate\Support\Str::of($item->description)->limit(150)}}</p>
                            <a href="{{$item->link}}" class="cardBtn rounded-lg mt-4 z-10">start</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </center>
    </section>
    <section class="recentWorks flex flex-col items-center md:p-10 py-10 px-10 xl:p-20">
        <div data-aos="fade-up" class="title mb-10">
            <h1>RECENT WORKS</h1>
        </div>
        <video data-aos="fade-up" class="rounded-lg" width="808" height="542" controls>
            <source src="{{ asset('images/home/Teaser_2_Final.mp4') }}" type="video/mp4">
        </video>
    </section>
    @include('component.homeModal')
    @include('layouts.colaborate')


    <script>
        // Get the modal
        var editHomeModal = document.getElementById("editHomeModal");

        // Get the button that opens the modal
        var editHomeBtn = document.getElementById("editHomeBtn");

        // Get the <span> element that closes the modal
        var closeEditHome = document.getElementsByClassName("closeEditHome")[0];


        // When the user clicks the button, open the modal
        editHomeBtn.onclick = function() {
            editHomeModal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        closeEditHome.onclick = function() {
            editHomeModal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == editHomeModal) {
                editHomeModal.style.display = "none";
            }
        }
    </script>

@endsection
