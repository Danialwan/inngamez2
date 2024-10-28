<link rel="stylesheet" href={{ asset('css/news.css') }}>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@extends('layouts.admin')

@section('title', 'Beranda')

@section('content')
    <div class="containerCreateNews flex flex-col justify-center items-center">
        <div data-aos="fade-right" class="ContainerForm grid py-32 md:grid-cols-1 md:py-40 md:px-10 md:pb-0 xl:grid-cols-3 xl:p-40 pb-0">
            <form method="POST" class="xl:col-span-2 px-10" action="{{'/news'}}" class="formCreate" enctype="multipart/form-data">
                @csrf
                <div class="mb-10">
                    <b class="title">FORUM PEMBUATAN BERITA</b>
                    <p>Pada halaman ini anda dapat menambahkan berita, berita akan ditampilkan pada halaman user.</p>
                </div>
                <div class="col-span-full mt-5">
                    <label for="newsTitle" class="block text-sm font-medium leading-6 text-white">Judul Berita</label>
                    <div class="mt-2">
                        <input type="text" name="newsTitle" id="newsTitle" autocomplete="given-name"
                            class="block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="col-span-full mt-3">
                    <label for="newsContent" class="block text-sm font-medium leading-6 text-white">Isi Berita</label>
                    <div class="mt-2">
                        <textarea id="newsContent" name="newsContent" rows="10"
                            class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-2"></textarea>
                    </div>
                </div>

                <div class="col-span-full mt-3">
                    <label for="cover-photo" class="block text-sm font-medium leading-6 text-white">Cover photo</label>
                    <label id="dropArea" class="dropArea mt-2 flex justify-center rounded-lg border border-dashed border-white/25 px-6 py-10" for="inputFile">
                        <input type="file" accept="image/*" id="inputFile" name="image" hidden>
                        {{-- <input id="file-upload" name="file-upload" type="file" class="sr-only"> --}}
                        <div class="text-center" id="textLabel">
                            <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                <label for="file-upload"
                                    class="relative cursor-pointer rounded-md bg-black font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                    <span>Upload a file</span>
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs leading-5 text-gray-600">PNG, JPG, JPEG up to 10MB</p>
                        </div>
                    </label>
                </div>

                <button class="submit rounded-lg mt-4" type="submit">
                    Add
                </button>
            </form>
            <div data-aos="fade-left" class="RightContainerCreateNews p-10 md:p-10 xl:ps-10">
                <b class="title">Langkah langkah pembuatan berita.</b>
                <ul class="mt-3 grid gap-4">
                    <li>
                        <p><b>1.</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, commodi!</p>
                    </li>
                    <li>
                        <p><b>2.</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis magni, reiciendis
                            deserunt deleniti iste nulla debitis tempore excepturi laborum repellendus.</p>
                    </li>
                    <li>
                        <p><b>3.</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, commodi!</p>
                    </li>
                    <li>
                        <p><b>4.</b> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam laborum laboriosam
                            consequatur beatae. Ipsum?</p>
                    </li>
                </ul>
            </div>
        </div>
        <div data-aos="fade-right" class="BackButton flex justify-start items-center px-40 py-20">
            <a class="back" href="/admin/news"></a>
        </div>
    </div>
    <script>
        const dropArea = document.getElementById("dropArea");
        const inputFile = document.getElementById("inputFile");
        const textLabel = document.getElementById("textLabel");

        inputFile.addEventListener("change", uploadImage);

        function uploadImage(){
            let imgLink = URL.createObjectURL(inputFile.files[0]);
            dropArea.style.backgroundImage = `url(${imgLink})`;
            textLabel.style.display = 'none';
        }

        dropArea.addEventListener("dragover", function(e){
            e.preventDefault();
        });
        dropArea.addEventListener("drop", function(e){
            e.preventDefault();
            inputFile.files = e.dataTransfer.files;
            uploadImage();
        })
    </script>
    {{-- @include('layouts.colaborate') --}}
@endsection
