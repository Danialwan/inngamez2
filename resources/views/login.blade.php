<link rel="stylesheet" href={{ asset('css/login.css') }}>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@extends('layouts.default')

@section('title', 'Beranda')

@section('content')
    <div class="LoginContainer flex justify-center items-center">
        <div data-aos="fade-up" class="LoginCard rounded-lg p-5">
            <div class="LoginTitle flex justify-center pb-5">
                <b>LOGIN ADMIN</b>
            </div>
            <div class="LoginBody grid grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
                <form class="p-5" action="{{ '/login/admin' }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="sm:col-span-4">
                        <label for="email" class="block text-sm font-light leading-6 text-white">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email"
                                class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ Session::get('email') }}">
                        </div>
                        <div class="mt-2">
                            <label for="password" class="block text-sm font-light leading-6 text-white">Password</label>
                            <input id="password" name="password" type="password" autocomplete="password"
                                class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="mt-5">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, ab!
                        </p>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-login rounded-lg">Login</button>
                    </center>
                </form>
                <div class="hidden md:block xl:block">
                    <div class="p-5 flex justify-center">
                        <img width="200" src="{{ asset('images/icon/admin.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
