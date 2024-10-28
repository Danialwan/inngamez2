<!-- The Modal -->
<div id="editHomeModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close closeEditHome">&times;</span>
        <form class="mt-5 flex flex-col items-center w-full" method="POST" action="{{ 'home/updateDesc' }}">
            @csrf
            @method('PUT')
            <b class="title text-center flex justify-self-center">Update Home Description:</b>
            <div class="flex flex-col items-start w-full">
                <label for="newsContent" class="block text-sm font-medium leading-6 text-black">Description</label>
                <div class="mt-2 w-full">
                    <textarea id="newsContent" name="pageDescription"
                        rows="10"class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 p-2">{{ $page->text }}</textarea>
                </div>
                <div class="flex flex-col w-full justify-between mt-4 xl:flex-row">
                    <p style="font-size: 1rem; color: red">Pastikan kembali isi deskripsi yang anda masukan telah
                        sesuai!</p>
                    <button class="btn ModalBtn rounded-lg" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
