<x-layout>
  <x-table_siswa :admin="request()->is('admin')">
      @forelse($siswas as $row)
      <tr class="border-b dark:border-gray-700">
          <td  class="px-4 py-3">{{ $no++ }}</td>
          <td  class="px-4 py-3">{{  $row->nama_lengkap }}</td>
          <td  class="px-4 py-3">{{  $row->asal_sekolah }}</td>
          <td  class="px-4 py-3">{{  $row->created_at }}</td>
      </tr>
      @empty
      <div  class="text-red-400 p-2 fw-semibold">Data siswa tidak ditemukan!</div>
      @endforelse
  </x-table_siswa>
  </x-layout>