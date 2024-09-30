<x-layout>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Jurusan-Jurusan SMK Informatika</h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">Di SMK Informatika kita memiliki beragam jurusan.</p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                @forelse($jurusans as $card)
                <div class="border shadow-sm px-6 py-4">
                    <h3 class="mb-2 text-3xl font-bold dark:text-white h-20">{{ $card->jurusan }}</h3>
                    <hr>
                    <p class="text-gray-500 dark:text-gray-400 mb-4">{{ $card->detail }}</p>
                </div>
                @empty
                <div class="border shadow-sm px-6 py-4 text-red-500">
                    Tidak Ditemukan
                </div>
                @endforelse
            </div>
            <a  href="{{  route('daftar.create',  '')}}"  class="bg-primary-500 text-white py-2 mt-4 block text-center font-bold text-xl rounded-lg hover:opacity-90">Daftar</a>
        </div>
      </section>
</x-layout>