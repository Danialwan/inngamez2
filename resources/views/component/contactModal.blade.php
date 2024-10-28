            <!-- The Modal -->
            <div id="instagramModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close closeInstagram">&times;</span>
                    <form class="mt-5" method="POST" action="{{ '/admin/contact/instagram' }}">
                        @csrf
                        @method('PUT')
                        <b class="ModalTitle">Update Instagram Account:</b>
                        <div class="flex flex-col items-start">
                            <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Akun
                                Instagram :</label>
                            <input type="text" name="contact" id="contact" autocomplete="given-name"
                                class=" mt-2 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ $instagram->contact }}" required>
                            <label for="link" class="mt-3 block text-sm font-medium leading-6 text-gray-900">Link
                                Instagram :</label>
                            <input type="text" name="link" id="link" autocomplete="given-name"
                                class="mt-2 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ $instagram->link }}" required>
                            <div class="flex flex-col w-full justify-between mt-4 xl:flex-row">
                                <p style="font-size: 1rem; color: red">Pastikan kembali link url yang anda masukan telah
                                    sesuai!</p>
                                <button class="btn ModalBtn rounded-lg" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- The Modal -->
            <div id="linkedinModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close closeLinkedin">&times;</span>
                    <form class="mt-5" method="POST" action="{{ '/admin/contact/linkedin' }}">
                        @csrf
                        @method('PUT')
                        <b class="ModalTitle">Update linkedin Account:</b>
                        <div class="flex flex-col items-start">
                            <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Akun
                                linkedin :</label>
                            <input type="text" name="contact" id="contact" autocomplete="given-name"
                                class=" mt-2 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ $linkedin->contact }}">
                            <label for="link" class="mt-3 block text-sm font-medium leading-6 text-gray-900">Link
                                linkedin :</label>
                            <input type="text" name="link" id="link" autocomplete="given-name"
                                class="mt-2 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ $linkedin->link }}">
                            <div class="flex flex-col w-full justify-between mt-4 xl:flex-row">
                                <p style="font-size: 1rem; color: red">Pastikan kembali link url yang anda masukan telah
                                    sesuai!</p>
                                <button class="btn ModalBtn rounded-lg" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- The Modal -->
            <div id="facebookModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close closeFacebook">&times;</span>
                    <form class="mt-5" method="POST" action="{{ '/admin/contact/facebook' }}">
                        @csrf
                        @method('PUT')
                        <b class="ModalTitle">Update facebook Account:</b>
                        <div class="flex flex-col items-start">
                            <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Akun
                                facebook :</label>
                            <input type="text" name="contact" id="contact" autocomplete="given-name"
                                class=" mt-2 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ $facebook->contact }}">
                            <label for="link" class="mt-3 block text-sm font-medium leading-6 text-gray-900">Link
                                facebook :</label>
                            <input type="text" name="link" id="link" autocomplete="given-name"
                                class="mt-2 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ $facebook->link }}">
                            <div class="flex flex-col w-full justify-between mt-4 xl:flex-row">
                                <p style="font-size: 1rem; color: red">Pastikan kembali link url yang anda masukan telah
                                    sesuai!</p>
                                <button class="btn ModalBtn rounded-lg" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- The Modal -->
            <div id="youtubeModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close closeYoutube">&times;</span>
                    <form class="mt-5" method="POST" action="{{ '/admin/contact/youtube' }}">
                        @csrf
                        @method('PUT')
                        <b class="ModalTitle">Update youtube Account:</b>
                        <div class="flex flex-col items-start">
                            <label for="contact" class="block text-sm font-medium leading-6 text-gray-900">Akun
                                youtube :</label>
                            <input type="text" name="contact" id="contact" autocomplete="given-name"
                                class=" mt-2 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ $youtube->contact }}">
                            <label for="link" class="mt-3 block text-sm font-medium leading-6 text-gray-900">Link
                                youtube :</label>
                            <input type="text" name="link" id="link" autocomplete="given-name"
                                class="mt-2 block w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                value="{{ $youtube->link }}">
                            <div class="flex flex-col w-full justify-between mt-4 xl:flex-row">
                                <p style="font-size: 1rem; color: red">Pastikan kembali link url yang anda masukan telah
                                    sesuai!</p>
                                <button class="btn ModalBtn rounded-lg" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
