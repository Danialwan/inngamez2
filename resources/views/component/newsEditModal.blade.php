 <!-- The Modal -->
 <div id="editImageModal" class="modal">
     <!-- Modal content -->
     <div class="modal-content">
         <span class="close closeImage">&times;</span>
         <form class="mt-5 flex flex-col items-center w-full" method="POST" action="{{ '/news/'.$news->id.'/updateImage' }}" enctype="multipart/form-data">
             @csrf
             @method('PUT')
             <b class="title text-center flex justify-self-center">Update News Image:</b>
             <div class="flex flex-col items-start w-full">
                 <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">News Image</label>
                 <div class="oldImage rounded-lg" style="background-image: url('{{ asset('images/NewsImages/'.$news->image) }}')"></div>
                 <div class="col-span-full mt-3">
                     <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Change
                         to</label>
                     <label id="dropArea"
                         class="dropAreaEdit h-52 mt-2 flex justify-center rounded-lg border border-dashed border-white/25 px-6 py-10 items-center"
                         for="inputFile">
                         <input type="file" accept="image/*" id="inputFile" name="image" hidden>
                         {{-- <input id="file-upload" name="file-upload" type="file" class="sr-only"> --}}
                         <div class="text-center" id="textLabel">
                             <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                 aria-hidden="true">
                                 <path fill-rule="evenodd"
                                     d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                     clip-rule="evenodd" />
                             </svg>
                             <div class="mt-4 flex text-sm leading-6 text-gray-600 hidden xl:block">
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
                 <div class="flex flex-col w-full justify-between mt-4 xl:flex-row">
                     <p style="font-size: 1rem; color: red">Pastikan kembali image yang anda masukan telah
                         sesuai!</p>
                     <button class="btn ModalBtn rounded-lg" type="submit">Save</button>
                 </div>
             </div>
         </form>
     </div>
 </div>

 <!-- The Modal -->
 <div id="editTitleModal" class="modal">
     <!-- Modal content -->
     <div class="modal-content">
         <span class="close closeTitle">&times;</span>
         <form class="mt-5 flex flex-col items-center w-full" method="POST" action="{{ '/news/'.$news->id.'/updateTitle' }}">
             @csrf
             @method('PUT')
             <b class="title text-center flex justify-self-center">Update News Title:</b>
             <div class="flex flex-col items-start w-full">
                 <label for="newsTitle" class="block text-sm font-medium leading-6 text-gray-900">
                     Title :</label>
                 <input type="text" name="newsTitle" id="newsTitle" autocomplete="given-name"
                     class=" mt-2 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                     value="{{ $news->title }}" required>
                 <div class="flex flex-col w-full justify-between mt-4 xl:flex-row">
                     <p style="font-size: 1rem; color: red">Pastikan kembali judul yang anda masukan telah
                         sesuai!</p>
                     <button class="btn ModalBtn rounded-lg" type="submit">Save</button>
                 </div>
             </div>
         </form>
     </div>
 </div>

 <!-- The Modal -->
 <div id="editBodyModal" class="modal">
     <!-- Modal content -->
     <div class="modal-content">
         <span class="close closeBody">&times;</span>
         <form class="mt-5 flex flex-col items-center w-full" method="POST" action="{{ '/news/'.$news->id.'/updateBody' }}">
             @csrf
             @method('PUT')
             <b class="title text-center flex justify-self-center">Update News Body:</b>
             <div class="flex flex-col items-start w-full">
                 <label for="newsContent" class="block text-sm font-medium leading-6 text-white">Isi Berita</label>
                 <div class="mt-2 w-full">
                     <textarea id="newsContent" name="newsContent" rows="10"
                         class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-2">
                        {{$news->body}}
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
