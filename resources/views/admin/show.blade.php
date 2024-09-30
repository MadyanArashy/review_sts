<x-layout>
  <!-- drawer component -->
  <div class="container ms-20 mt-10">
    <div>
        <h4 id="drawer-label" class="mb-1.5 leading-none text-xl font-semibold text-gray-900 dark:text-white">Siswa: "{{ $siswa->nama_lengkap }}"</h4>
    </div>
    <dl>
        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Data diri</dt>
        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
          <ul class="list-disc">
          <li>Tempat lahir: {{ $siswa->tempat_lahir }}</li>
          <li>Tanggal lahir: {{ $siswa->tempat_lahir }}</li>
          <li>Alamat: {{ $siswa->alamat }}</li>
          <li>Asal sekolah: {{ $siswa->asal_sekolah }}</li>
          <li>Email: {{ $siswa->email }}</li>
          <li>Foto: <img src="{{ asset('storage/public/siswas/' . $siswa->foto) }}" alt="Foto siswa" class="w-24 h-24 object-cover"></li>
          <li>Scan KK: <img src="{{ asset('storage/public/siswas/' . $siswa->scan_kk) }}" alt="Foto scan KKK" class="w-24 h-24 object-cover"></li>
          </ul>
        </dd>
    </dl>
  </div>
</x-layout>