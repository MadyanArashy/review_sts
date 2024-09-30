<section class="bg-white dark:bg-gray-900 sm:p-5 rounded-xl">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Jurusan</h2>
        <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- @csrf memastikan bahwa request yang dikirimkan ke server berasal dari formulir yang sah --}}
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <div class="col-span-2">
                    <label for="jurusan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Jurusan <span class="text-red-500" aria-disabled="true">*</span></label>
                    <input type="text" name="jurusan" id="jurusan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tulis nama jurusan" required="" maxlength="40">
                </div>
                <div class="col-span-2">
                    <label for="detail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Detail <span class="text-red-500" aria-disabled="true">*</span></label>
                    <textarea name="detail" id="detail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tulis deskripsi jurusan" required=""></textarea>
                </div>
            </div>
            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Submit Student
            </button>
        </form>
    </div>
</section>    