
# Review STS Produktif

Penugasan untuk Sumatif Tengah Semester. Membuat website CRUD daftar siswa sekolah dengan PHP, Laravel, TailwindCSS, dan Flowbite. 


## Tech Stack

**Client:**
- CSS
- JavaScript
- TailwindCSS
- Flowbite

**Server:** 
- PHP
- Laravel
- SQL


## Halaman-Halaman

#### Halaman siswa

```http
  GET /siswa
```

| Halaman  | Isi           | Deskripsi                                            |
| :------  | :------------ | :--------------------------------------------------- |
| `index`  | Tabel jurusan | Menampilkan data-data **jurusan** yang ada           |
| `create` | Daftar siswa  | Form **pendaftaran** siswa baru                      |
| `show`   | Tabel pendaftar| Menampilkan semua **pendaftar**                     |
| `edit`   | Edit siswa    | **Mengubah** data siswa. Hanya bisa dilakukan admin.     |
| `delete` | Hapus siswa   | **Menghapus** data siswa. Hanya bisa dilakukan admin. |

#### Halaman admin

```http
  GET /admin
```

| Halaman | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `index`   | Tabel siswa | Menampilkan data-data **pendaftar lengkap** |
| `create`  | Tambah jurusan | **Menambahkan** jurusan baru |
| `show`    | Tabel pendaftar| Menampilkan data-data jurusan dan pendaftar lengkap |
| `edit`    | Edit jurusan | **Mengubah** data jurusan. |
| `delete`  | Hapus jurusan| **Menghapus** data jurusan.|
