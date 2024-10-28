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
            <h1>CONTACT US</h1>
        </div>
        <center>
            <div class="ContactUsContainer admin flex flex-col-reverse xl:grid grid-cols-3 gap-4 px-10">
                <div data-aos="fade-right" class="contact flex flex-col items-start md:p-10 xl:px-10">
                    <div class="contactTitle text-start mb-5">
                        <h1>OUR MEDIA SOCIAL</h1>
                        <p>Stay connected with us</p>
                    </div>
                    <ul class="flex flex-col gap-2">

                        <li class="flex justify-between items-center">
                            <div class="flex gap-4">
                                <img width="30" src="{{ asset('images/icon/instagram.svg') }}"alt="">
                                <p>{{ $instagram->contact }}</p>
                            </div>
                            <button id="instagramBtn" href=""></button>
                        </li>

                        <li class="flex justify-between items-center">
                            <div class="flex gap-4">
                                <img width="30" src="{{ asset('images/icon/Linkedin.svg') }}" alt="">
                                <p>{{ $linkedin->contact }}</p>
                            </div>
                            <button id="linkedinBtn" href=""></button>
                        </li>

                        <li class="flex justify-between items-center">
                            <div class="flex gap-4">
                                <img width="30" src="{{ asset('images/icon/Facebook.svg') }}" alt="">
                                <p>{{ $facebook->contact }}</p>
                            </div>
                            <button id="facebookBtn" href=""></button>
                        </li>

                        <li class="flex justify-between items-center">
                            <div class="flex gap-4">
                                <img width="30" src="{{ asset('images/icon/Youtube.svg') }}" alt="">
                                <p>{{ $youtube->contact }}</p>
                            </div>
                            <button id="youtubeBtn" href=""></button>
                        </li>
                    </ul>
                </div>
                <div data-aos="fade-left" class="message col-span-2 text-start md:p-10 xl:px-5">
                    <div>
                        <div class="messageTitle mb-10 xl:mb-4">
                            <h1>MESSAGE</h1>
                            <p>We are always excited to collaborate and create new works. tell us your idea</p>
                        </div>

                        {{-- Desktop and Tablet Responsive --}}
                        <div class="tableMessageLarge relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Email
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Message
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($message as $items)
                                        @if ($items->read == 0)
                                            <tr
                                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $items->name }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $items->email }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ Illuminate\Support\Str::of($items->message)->limit(120) }}
                                                </td>
                                                <td class="px-6 py-4 text-right">
                                                    <a href="{{ '/contact/' . $items->id }}"
                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                                        data-toggle="modal"
                                                        data-target="#viewMessage{{ $items->id }}">view</a>
                                                </td>
                                            </tr>
                                        @else
                                            <tr
                                                class="bg-gray-200 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $items->name }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $items->email }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ Illuminate\Support\Str::of($items->message)->limit(120) }}
                                                </td>
                                                <td class="px-6 py-4 text-right">
                                                    <a href="{{ '/contact/' . $items->id }}"
                                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                                        data-toggle="modal"
                                                        data-target="#viewMessage{{ $items->id }}">view</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $message->links('vendor.pagination.tailwind') }}
                        </div>

                        {{-- Mobile Responsive --}}
                        <div class="tableMessageSmall relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Message
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($message as $items)
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="px-6 py-4">
                                                {{ Illuminate\Support\Str::of($items->message)->limit(120) }}
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <a href="{{ '/contact/' . $items->id }}"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                                    data-toggle="modal"
                                                    data-target="#viewMessage{{ $items->id }}">view</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $message->links('vendor.pagination.tailwind') }}
                        </div>

                    </div>
                </div>
            </div>
            @include('component.contactModal')
        </center>
    </section>
    @include('layouts.colaborate')

    <script>
        // Get the modal
        var InstagramModal = document.getElementById("instagramModal");
        var linkedinModal = document.getElementById("linkedinModal");
        var facebookModal = document.getElementById("facebookModal");
        var youtubeModal = document.getElementById("youtubeModal");

        // Get the button that opens the modal
        var instagram = document.getElementById("instagramBtn");
        var linkedin = document.getElementById("linkedinBtn");
        var facebook = document.getElementById("facebookBtn");
        var youtube = document.getElementById("youtubeBtn");

        // Get the <span> element that closes the modal
        var closeInstagram = document.getElementsByClassName("closeInstagram")[0];
        var closeLinkedin = document.getElementsByClassName("closeLinkedin")[0];
        var closeFacebook = document.getElementsByClassName("closeFacebook")[0];
        var closeYoutube = document.getElementsByClassName("closeYoutube")[0];

        // When the user clicks the button, open the modal
        instagram.onclick = function() {
            InstagramModal.style.display = "block";
        }
        linkedin.onclick = function() {
            linkedinModal.style.display = "block";
        }
        facebook.onclick = function() {
            facebookModal.style.display = "block";
        }
        youtube.onclick = function() {
            youtubeModal.style.display = "block";
        }


        // When the user clicks on <span> (x), close the modal
        closeInstagram.onclick = function() {
            instagramModal.style.display = "none";
        }
        closeLinkedin.onclick = function() {
            linkedinModal.style.display = "none";
        }
        closeFacebook.onclick = function() {
            facebookModal.style.display = "none";
        }
        closeYoutube.onclick = function() {
            youtubeModal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == InstagramModal) {
                InstagramModal.style.display = "none";
            } else if (event.target == linkedinModal) {
                linkedinModal.style.display = "none";
            } else if (event.target == facebookModal) {
                facebookModal.style.display = "none";
            } else if (event.target == youtubeModal) {
                youtubeModal.style.display = "none";
            }
        }
    </script>
@endsection
