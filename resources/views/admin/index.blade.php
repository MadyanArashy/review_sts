<x-layout>
    <x-table_siswa>
        @forelse($siswas as  $row)
        <tr  class="border-b dark:border-gray-700">
            <td  class="px-4 py-3">{{ $nos++ }}</td>
            <td  class="px-4 py-3">{{  $row->nama_lengkap }}</td>
            <td  class="px-4 py-3">{{  $row->asal_sekolah }}</td>
            <td  class="px-4 py-3">{{  $row->created_at }}</td>
            <td  class="px-4 py-3 flex mt-8 gap-3">
                <a  href="{{  route('admin.show',  $row->id)}}"  class="bg-slate-800 text-white py-2 px-4 rounded-lg hover:opacity-90">Show</a>
                <form  action="{{  route('daftar.destroy',  $row->id)  }}"  method="POST"  onsubmit="return  confirm('Yakin ingin hapus siswa {{  $row->nama_lengkap }}?');">
                @csrf
                @method('DELETE')
                <button  type="submit"  class="bg-red-600 text-white py-2 px-4 rounded-lg hover:opacity-90">Delete</button>
                </form>
            </td>
        </tr>
        @empty
        <div  class="text-red-400 p-2 fw-semibold">Data siswa tidak ditemukan!</div>
        @endforelse
    </x-table_siswa>
    <x-table_jurusan>
        @forelse($jurusans as $row)
        <tr  class="border-b dark:border-gray-700">
            <td  class="px-4 py-3">{{ $noj++ }}</td>
            <td  class="px-4 py-3">{{  $row->jurusan }}</td>
            <td  class="px-4 py-3">{{  $row->detail }}</td>
            <td  class="px-4 py-3 flex mt-8 gap-3">
                <a  href="{{  route('admin.show',  $row->id)}}"  class="bg-slate-800 text-white py-2 px-4 rounded-lg hover:opacity-90">Show</a>
                <button  data-modal-target="edit-modal{{  $row->id  }}"  data-modal-toggle="edit-modal{{  $row->id  }}"  class="bg-sky-600 text-white py-2 px-4 rounded-lg hover:opacity-90">Edit</button>
                {{-- Edit Modal --}}
                <div  id="edit-modal{{  $row->id  }}"  tabindex="-1"  aria-hidden="true"  class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div  class="relative p-4 w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                {{-- <x-edit  :content=$row></x-edit> --}}
                Wake me up (wake me up inside)
                </div>
                </div>
                <form  action="{{  route('admin.destroy',  $row->id)  }}"  method="POST"  onsubmit="return  confirm('Yakin ingin hapus jurusan {{  $row->jurusan }}?');">
                @csrf
                @method('DELETE')
                <button  type="submit"  class="bg-red-600 text-white py-2 px-4 rounded-lg hover:opacity-90">Delete</button>
                </form>
            </td>
        </tr>
        @empty

        @endforelse
    </x-table_jurusan>

    <!-- Modal toggle -->
    <button data-modal-target="create-jurusan-modal" data-modal-toggle="create-jurusan-modal" class="mx-auto flex items-center justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
        <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
        </svg>
        Tambah Jurusan
    </button>
    <!-- Modal (admin.create) -->
    <div id="create-jurusan-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <x-create_jurusan></x-create_jurusan>
        </div>
    </div>
    </x-layout>