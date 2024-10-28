<link rel="stylesheet" href={{ asset('css/news.css') }}>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@extends('layouts.admin')

@section('title', 'Beranda')

@section('content')
    <div class="containerDetailNews flex flex-col justify-center items-center md:pt-20 xl:pt-30 p-10">
        <div class="grid md:grid-col-1 xl:px-10">
            <div class="pb-10 xl:pe-10 xl:col-span-2 xl:pb-0">
                <div class="DetailNewsImage m-10 flex justify-start">
                    <img src="{{ asset('images/gameImage/' . $game->image) }}" alt="">
                    <button id="EditImageBtn" class="editNews editImage absolute"></button>
                </div>
                <div class="boxEditNews p-3 flex justify-between">
                    <b class="title">{{ $game->title }}</b>
                    <button id="EditTitleBtn" class="editNews editImage"></button>
                </div>
                <div class="boxEditNews p-3">
                    <button id="EditBodyBtn" class="editNews editImage float-right"></button>
                    <p class="body">{{ $game->description }}</p>
                </div>
                <div class="boxEditNews p-3">
                    <button id="EditLinkBtn" class="editNews editImage float-right"></button>
                    <b>Direct to :</b>
                    <p class="body">{{ Illuminate\Support\Str::of($game->link)->limit(50) }}</p>
                </div>
            </div>
        </div>
        <div data-aos="fade-right" class="w-full BackButton flex justify-start items-center p-10">
            <a class="back" href="/admin/home"></a>
        </div>
    </div>

    @include('component.gameEditModal')
    <script>
        const dropArea = document.getElementById("dropArea");
        const inputFile = document.getElementById("inputFile");
        const textLabel = document.getElementById("textLabel");

        inputFile.addEventListener("change", uploadImage);

        function uploadImage() {
            let imgLink = URL.createObjectURL(inputFile.files[0]);
            dropArea.style.backgroundImage = `url(${imgLink})`;
            textLabel.style.display = 'none';
        }

        dropArea.addEventListener("dragover", function(e) {
            e.preventDefault();
        });
        dropArea.addEventListener("drop", function(e) {
            e.preventDefault();
            inputFile.files = e.dataTransfer.files;
            uploadImage();
        })
    </script>
    <script>
        // Get the modal
        var editImageModal = document.getElementById("editImageModal");
        var editTitleModal = document.getElementById("editTitleModal");
        var editBodyModal = document.getElementById("editBodyModal");
        var editLinkModal = document.getElementById("editLinkModal");


        // Get the button that opens the modal
        var EditImageBtn = document.getElementById("EditImageBtn");
        var EditTitleBtn = document.getElementById("EditTitleBtn");
        var EditBodyBtn = document.getElementById("EditBodyBtn");
        var EditLinkBtn = document.getElementById("EditLinkBtn");


        // Get the <span> element that closes the modal
        var closeImage = document.getElementsByClassName("closeImage")[0];
        var closeTitle = document.getElementsByClassName("closeTitle")[0];
        var closeBody = document.getElementsByClassName("closeBody")[0];
        var closeLink = document.getElementsByClassName("closeLink")[0];


        // When the user clicks the button, open the modal
        EditImageBtn.onclick = function() {
            editImageModal.style.display = "block";
        }

        EditTitleBtn.onclick = function() {
            editTitleModal.style.display = "block";
        }

        EditBodyBtn.onclick = function() {
            editBodyModal.style.display = "block";
        }

        EditLinkBtn.onclick = function() {
            editLinkModal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        closeImage.onclick = function() {
            editImageModal.style.display = "none";
        }
        closeTitle.onclick = function() {
            editTitleModal.style.display = "none";
        }
        closeBody.onclick = function() {
            editBodyModal.style.display = "none";
        }

        closeLink.onclick = function() {
            editLinkModal.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == editImageModal) {
                editImageModal.style.display = "none";
            } else if (event.target == editTitleModal) {
                editTitleModal.style.display = "none";
            } else if (event.target == editBodyModal) {
                editBodyModal.style.display = "none";
            } else if (event.target == editLinkModal) {
                editLinkModal.style.display = "none";
            }

        }
    </script>
@endsection
