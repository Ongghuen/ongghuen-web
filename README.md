# Dashboard Admin ( + API )

## Struktur File:
```
core/
├─ databases/
├─ helpers/
├─ process/
├─ app.php
├─ core.php
pages/
├─ components/
├─ blabla.view.php
styles/
index.php
```
## Penjelasan:
Awalan file yang akan dibuka itu index.php, di index php akan nge-import folder yg diperlukan untuk fungsi seperti helpers (fungsi bantuan kaya dd() seperti di laravel) lalu ada juga database.

## Folder: 
- core: ini anggep aja back-endnya
  - database: untuk connect atau manipulasi database
  - helpers: cuma isi fungsi bantuan aja sih kayak dd() kaya yg ada di laravel, dll. 
  - process: nah untuk proses logicnya kayak login, logout, blabla ini itu bisa di sini.
  - app.php: ngebinding sebuah variabel biar bisa diakses dimanapun (import dulu yg pastinya)
  - core.php: core of the core alias di file ini yang inisiasi buat konek ke db, trus binding querybuilder ke app.php
- pages: ini buat viewnya, kalo di laravel setara sama blade (ya walaupun ga setara sih). anggep aja ini front-endnya
- styles: taulah buat apa
- index.php: tadi awalan di penjelasan

## Notes
Ga ada implementasi buat routes mirip laravel, pusing ngab

## TODO ( Gambaran Besar )
- [x] Buat mini-laravel-like project
- [ ] Buat dashboard
- [ ] Create data (insert)
- [x] Read data (select aja)
- [ ] Update data (edit, bulk?)
- [ ] Delete data (delete, bulk?)
- [ ] API
- [ ] Implementasi API Full (WHOOAWWWWW)

Kalo "gambaran kecil"-nya atau lebih spesifiknya bisa di cek di project