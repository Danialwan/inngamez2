<link rel="stylesheet" href={{ asset('css/contact.css') }}>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@extends('layouts.admin')

@section('title', 'Beranda')

@section('content')
    <header style="background-image: url('{{ asset('images/contact/HeaderContact.png') }}')">
        <div class="headerShadow absolute bg-gradient-to-t from-black z-10"></div>
        <div class="content absolute top-0 left-0">
            <h1 data-aos="fade-up">GET IN TOUCH</h1>
            <h1 data-aos="fade-up">WITH US</h1>
        </div>
        <a class="ScrollDownIcon absolute top-0 z-20 flex justify-center" href="#homeDescription">
            <img class="w-6" src="{{ asset('images/icon/scrollDown.svg') }}" alt="">
        </a>
    </header>
    <section class="UpdateFromUs">
        <div data-aos="fade-up" class="title flex justify-center md:mb-10 mt-10 xl:mb-20">
            <h1>Message</h1>
        </div>
        <div class="Message py-0 px-10 xl:px-40 pb-10" style="color: white">
            <p>From : {{ $message->name }}</p>
            <p>Email :{{ $message->email }}</p>
            <br>
            <p>{{ $message->message }}</p>
        </div>
        <div class="BackButton flex justify-between items-center p-10">
            <a data-aos="fade-right" class="back" href="/admin/contact"></a>
            {{-- <a data-aos="fade-left" class="back" href="/admin/contact"></a> --}}
            <form data-aos="fade-left" onsubmit="return confirm('Apakah anda yakin ingin menghapus pesan ini?')"
                class="" action="{{ '/contact/' . $message->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" style="border: none" class="delete deleteBtn"></button>
            </form>
        </div>
    </section>

@endsection
