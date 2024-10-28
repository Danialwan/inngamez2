<link rel="stylesheet" href={{ asset('css/news.css') }}>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@extends('layouts.admin')

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
    <section class="UpdateFromUs">
        <div data-aos="fade-up" class="title flex justify-center md:mb-10 mt-10 xl:mb-20">
            <h1>UPDATE FROM US</h1>
        </div>
        <center>
            <div class="newsContainer grid md:grid-cols-2 gap-10 px-8 py-5 xl:grid-cols-4 gap-10 text-center px-40">
                @foreach ($news as $item)
                    <div class="news" href="">
                        <div data-aos="flip-right" class="card rounded-lg flex flex-col justify-between items-end h-full"
                            style="background-image: url('{{ asset('images/NewsImages/' . $item->image) }}')">
                            <a class="edit" href="{{ '/news/' . $item->id . '/edit' }}"></a>
                            <form onsubmit="return confirm('Apakah anda yakin ingin menghapus berita ini?')" class="" action="{{'/news/'.$item->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: none" class="delete deleteBtn"></button>
                        </form>
                        </div>
                        <div class="newsText mt-4">
                            <b class="newsTitle">{{ Illuminate\Support\Str::of($item->title)->limit(40) }}</b>
                            <p class="newsDate">{{ $item->created_at }}</p>
                            <p class="newsBody mt-3">{{ Illuminate\Support\Str::of($item->body)->limit(100) }}</p>
                        </div>
                    </div>
                @endforeach
                <a class="addNews rounded-lg flex justify-center items-center" href="/news/create">
                    <img class="stroke-1" src="{{ asset('images/icon/plus.svg') }}" alt="">
                </a>
            </div>

            <!-- The Modal -->
            <div id="newsModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close newsClose">&times;</span>
                    <form class="mt-5 flex flex-col items-center w-full" method="POST" action="">
                        @csrf
                        <b class="title text-center flex justify-self-center">Update News Body:</b>
                        <div class="flex flex-col items-start w-full">
                            <label for="newsContent" class="block text-sm font-medium leading-6 text-white">Isi
                                Berita</label>
                            <div class="mt-2 w-full">
                                <textarea id="newsContent" name="newsContent" rows="10"
                                    class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-2">

                      </textarea>
                            </div>
                            <div class="flex flex-col w-full justify-between mt-4 xl:flex-row">
                                <p style="font-size: 1rem; color: red">Pastikan kembali isi berita yang anda masukan telah
                                    sesuai!</p>
                                <button class="btn ModalBtn rounded-lg" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </center>
    </section>

    @include('layouts.colaborate')
@endsection
