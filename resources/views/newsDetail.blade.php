<link rel="stylesheet" href={{ asset('css/news.css') }}>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
    <div class="containerDetailNews flex flex-col justify-center items-center md:pt-20 xl:pt-40 p-10">
        <div class="grid md:grid-col-1 xl:grid-cols-3 xl:px-10">
            <div class="pb-10 xl:pe-10 xl:col-span-2 xl:pb-0">
                <div class="DetailNewsImage m-10">
                    <img src="{{ asset('images/NewsImages/'.$news->image) }}" alt="">
                </div>
                <b class="title">{{$news->title}}</b>
                <p class="body">{{$news->body}}</p>
            </div>
            <div class="ContainerRight flex flex-col pt-10 xl:p-10 xl:pt-0 gap-4">
                <div class="mb-5 xl:pb-0">
                    <b>Berita Lain:</b>
                </div>
                @foreach ($recommendation as $item)
                <a class="Rekomendasi grid grid-cols-3 gap-3 flex items-center" href="{{'/news/'.$item->id}}">
                    <div class="image rounded-lg" style="background-image: url('{{ asset("images/NewsImages/".$item->image)}}')"></div>
                    <div class="col-span-2">
                        <b>{{$item->title}}</b>
                        <p class="newsDate hidden md:block xl:hidden">{{$item->created_at}}</p>
                        <p class="newsBody mt-3 hidden md:block xl:hidden">
                            {{ Illuminate\Support\Str::of($item->title)->limit(80) }}
                        </p>
                    </div>
                </a>
                @endforeach
                {{ $recommendation->links('vendor.pagination.tailwind') }}
            </div>
        </div>
        <div data-aos="fade-right" class="BackButton flex justify-start items-center p-10">
            <a class="back" href="/news"></a>
        </div>
    </div>
    {{-- @include('layouts.colaborate') --}}
@endsection
