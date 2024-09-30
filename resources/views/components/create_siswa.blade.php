<section class="bg-white dark:bg-gray-900 sm:p-5 rounded-xl">
    <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
        <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Formulir Daftar Siswa Baru</h2>
        <form action="{{ route('daftar.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- @csrf memastikan bahwa request yang dikirimkan ke server berasal dari formulir yang sah --}}
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
        <!-- Nama -->
        <div class="w-full">
            <label for="nama_lengkap" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Nama Lengkap <span class="text-red-500" aria-disabled="true">*</span></label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tulis nama lengkap" required="">
        </div>
        <!-- Tempat Lahir-->
        <div class="w-full">
            <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Tempat Lahir <span class="text-red-500" aria-disabled="true">*</span></label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Kota tempat lahir" required="" >
        </div>
        <!-- Tanggal Lahir -->
        <div class="w-full">
            <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Tanggal Lahir <span class="text-red-500" aria-disabled="true">*</span></label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tanggal Lahir" required="" >
        </div>
        <!-- Alamat -->
        <div class="w-full">
            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Alamat <span class="text-red-500" aria-disabled="true">*</span></label>
            <input type="text" name="alamat" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Alamat Anda saat ini" required="" >
        </div>
        <!-- Asal Sekolah -->
        <div class="w-full">
            <label for="asal_sekolah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Asal Sekolah <span class="text-red-500" aria-disabled="true">*</span></label>
            <input type="text" name="asal_sekolah" id="asal_sekolah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Asal Sekolah" required="" >
        </div>
        <!-- Email -->
        <div class="w-full">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Email <span class="text-red-500" aria-disabled="true">*</span></label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Tuliskan email benar" required="" >
        </div>
        <!-- Foto -->
        <div class="col-span-2">    
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="foto"> Foto <span class="text-red-500" aria-disabled="true">*</span></label>
            <input class="block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="foto" type="file" name="foto" required>
        </div>
        <!-- Scan KK -->
        <div class="col-span-2">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="scan_kk"> Scan KK <span class="text-red-500" aria-disabled="true">*</span></label>
            <input class="block text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="scan_kk" type="file" name="scan_kk" required>
        </div>
            </div>
            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Daftar
            </button>
        </form>
    </div>
    </section>