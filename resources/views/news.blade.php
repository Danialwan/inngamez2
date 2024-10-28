<link rel="stylesheet" href={{ asset('css/news.css') }}>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
    <header style="background-image: url('{{ asset('images/news/HeaderNews.png') }}')">
        <div class="headerShadow absolute bg-gradient-to-t from-black z-10"></div>
        <div class="content absolute top-0 left-0">
            <h1 data-aos="fade-up">OUR</h1>
            <h1 data-aos="fade-up">LATEST</h1>
            <h1 data-aos="fade-up">JOURNEY</h1>
        </div>
        <a class="ScrollDownIcon absolute top-0 z-20 flex justify-center" href="#homeDescription">
            <img class="w-6" src="{{ asset('images/icon/scrollDown.svg') }}" alt="">
        </a>
    </header>
    {{-- <section id="aboutDescription" class="aboutDescription flex flex-col items-center md:p-10 xl:p-0">
        <b data-aos="fade-up" class="mb-10 md:mb-10 mt-10 xl:mb-10">UPDATE FROM US</b>
        <p data-aos="fade-up" class="z-30 text-center">Our team is a collection of talented, passionate, and dedicated
            individuals who transform ideas into extraordinary creations. From artists who bring worlds to life with
            stunning visuals, to designers who craft innovative gameplay mechanics, and writers who create captivating
            stories, each team member brings their unique contribution to crafting inspiring games. We share a common vision
            of creating unforgettable experiences for players, and we work together collaboratively and supportively to
            achieve that goal. With diversity in backgrounds, skills, and perspectives, we form a strong and dynamic team,
            ready to tackle challenges and create outstanding works together.
        </p>
    </section> --}}
    <section class="UpdateFromUs">
        <div data-aos="fade-up" class="title flex justify-center md:mb-10 mt-10 xl:mb-20">
            <h1>UPDATE FROM US</h1>
        </div>
        <center>
            <div class="newsContainer grid md:grid-cols-2 gap-10 px-8 py-5 xl:grid-cols-4 gap-10 text-center px-40">
                @foreach ($news as $item)
                    <a class="news" href="{{'/news/'.$item->id}}">
                        <div data-aos="flip-right" class="card rounded-lg grid grid-rows-3 gap-4"
                            {{-- style="background-image: url('{{ asset('images/news/'.$item->image) }}')"> --}}
                            style="background-image: url('{{ asset('images/NewsImages/'.$item->image) }}')">
                        </div>
                        <div class="newsText mt-4">
                            <b class="newsTitle">{{Illuminate\Support\Str::of($item->title)->limit(40)}}</b>
                            <p class="newsDate">{{$item->created_at}}</p>
                            <p class="newsBody mt-3">{{Illuminate\Support\Str::of($item->body)->limit(100)}}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </center>
    </section>
    @include('layouts.colaborate')
@endsection
