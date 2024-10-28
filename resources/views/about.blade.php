<link rel="stylesheet" href={{ asset('css/about.css') }}>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
    <header style="background-image: url('{{ asset('images/about/HeaderAboutUs.png') }}')">
        <div class="headerShadow absolute bg-gradient-to-t from-black z-10"></div>
        <div class="content absolute top-0 left-0">
            <h1 data-aos="fade-up">BEING CREATIVE</h1>
            <h1 data-aos="fade-up">IS A NECESSITY,</h1>
            <h1 data-aos="fade-up">NOT A COMPULSION</h1>
        </div>
        <a class="ScrollDownIcon absolute top-0 z-20 flex justify-center" href="#homeDescription">
            <img class="w-6" src="{{ asset('images/icon/scrollDown.svg') }}" alt="">
        </a>
    </header>
    <section id="aboutDescription" class="aboutDescription flex flex-col items-center md:p-10 xl:p-0">
        <b data-aos="fade-up" class="mb-10 md:mb-10 mt-10 xl:mb-10">WHO WE ARE</b>
        <p data-aos="fade-up" class="z-30 text-center">{{ $page->text }}
        </p>
    </section>
    <section class="ourTeam">
        <div data-aos="fade-up" class="title flex justify-center md:mb-10 mt-10 xl:mb-20">
            <h1>OUR TEAM</h1>
        </div>
        <center>
            <div class="gameCard grid md:grid-cols-2 gap-10 px-7 py-5 xl:grid-cols-4 gap-10 text-center xl:px-28">
                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4"
                    style="background-image: url('{{ asset('images/TeamPicture/ProfileIcon_01.png') }}')">
                </div>
                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4"
                    style="background-image: url('{{ asset('images/TeamPicture/ProfileIcon_02.png') }}')">
                </div>
                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4"
                    style="background-image: url('{{ asset('images/TeamPicture/ProfileIcon_03.png') }}')">
                </div>
                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4"
                    style="background-image: url('{{ asset('images/TeamPicture/ProfileIcon_04.png') }}')">
                </div>

                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4"
                    style="background-image: url('{{ asset('images/TeamPicture/ProfileIcon_05.png') }}')">
                </div>
                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4"
                    style="background-image: url('{{ asset('images/TeamPicture/ProfileIcon_06.png') }}')">
                </div>
                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4"
                    style="background-image: url('{{ asset('images/TeamPicture/ProfileIcon_07.png') }}')">
                </div>
                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4"
                    style="background-image: url('{{ asset('images/TeamPicture/ProfileIcon_08.png') }}')">
                </div>

                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4"
                    style="background-image: url('{{ asset('images/TeamPicture/ProfileIcon_09.png') }}')">
                </div>
                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4"
                    style="background-image: url('{{ asset('images/TeamPicture/ProfileIcon_10.png') }}')">
                </div>
                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4"
                    style="background-image: url('{{ asset('images/TeamPicture/ProfileIcon_11.png') }}')">
                </div>
                <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4"
                    style="background-image: url('{{ asset('images/TeamPicture/ProfileIcon_01.png') }}')">
                </div>
            </div>
        </center>
    </section>
    <section class="recentWorks flex flex-col items-center md:p-10 py-10 px-10 xl:p-20">
        <div data-aos="fade-up" class="title mb-10">
            <h1>COMPANY OVERVIEW</h1>
        </div>
        <video data-aos="fade-up" class="rounded-lg" width="808" height="542" controls>
            <source src="{{ asset('images/home/Teaser_2_Final.mp4') }}" type="video/mp4">
        </video>
    </section>
    @include('layouts.colaborate')
@endsection
