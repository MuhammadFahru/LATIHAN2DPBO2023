# Latihan 2 Praktikum DPBO

## Janji

Bismillah Saya Muhammad Fahru Rozi [2108927] mengerjakan soal Latihan Praktikum 2 dalam mata kuliah Desain Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Data Diri

- 2108927
- Muhammad Fahru Rozi
- Ilmu Komputer C1'21
- Universitas Pendidikan Indonesia

## Desain Program

![Design](https://user-images.githubusercontent.com/59097913/221392311-9263a5e9-38bc-4af5-b530-28b049242309.jpg)

Dalam mengimplementasikan konsep Multi-level Inheritance saya menggunakan 3 Class yang terdiri dari:

- Human
- SivitasAkademik
- Mahasiswa

#### Class **Human** terdapat attribute:
- `string` NIK
- `string` Nama
- `string` Jenis Kelamin

#### Class **SivitasAkademik** terdapat attribute:
- `string` Asal Universitas
- `string` Email Edu

#### Class **Mahasiswa** terdapat attribute:
- `string` NIM
- `string` Nama
- `string` Jenis Kelamin
- `string` Fakultas
- `string` Prodi

## Penjelasan Alur

Alur program yang saya buat adalah sebagai berikut:

1. Program dimulai dengan membuat class **Human**, yang memiliki 3 attribute yaitu `nik`, `nama`, dan `gender`. Class **Human** memiliki constructor serta method/function getter, setter, dan display data.

2. Selanjutnya, buat class **SivitasAkademik** yang mewarisi class **Human**. Class **SivitasAkademik** memiliki 2 attribute yaitu `asal_universitas` dan `asal_universitas`. Class **SivitasAkademik** memiliki constructor serta method/function getter, setter, dan display data. Constructor pada class **SivitasAkademik** mengambil 5 parameters yaitu `nik`, `nama`, `gender`, `asal_universitas` dan `asal_universitas` dengan memanggil constructor parent nya juga yaitu class **Human**.

3. Terakhir, buat class **Mahasiswa** yang mewarisi class **SivitasAkademik**. Class **Mahasiswa** memiliki 3 attribute yaitu `nim`, `prodi`, dan `fakultas`. Class **`nim`,** memiliki constructor serta method/function getter, setter, dan display data. Constructor pada class **Mahasiswa** mengambil 8 parameters yaitu `nik`, `nama`, `gender`, `asal_universitas`, `asal_universitas`, `nim`, `prodi`, dan `fakultas` dengan memanggil constructor parent nya juga yaitu class **SivitasAkademik** sekaligus turunan dari class **Human**.

Dengan alur program dan struktur class seperti ini, sebuah object **Mahasiswa** dapat mengakses attribute dan method/function dari class **Mahasiswa**, class **SivitasAkademik**, dan kelas **Human**. Attribute dan method/function class **SivitasAkademik** juga dapat diakses karena kelas Mahasiswa mewarisi kelas SivitasAkademik. Hal ini dapat menunjukkan dan menggambarkan konsep multi-level inheritance pada program OOP ini.

## Dokumentasi

![image](https://user-images.githubusercontent.com/59097913/220079810-afbfa83c-c116-4f4a-b54c-b3a6ab7e7aad.png)

## Run Program

1. C++

   ```sh
   g++ *.cpp -o run && run
   ```

2. Java

   ```sh
   javac *.java
   ```
   
   ```sh
   java Main
   ```

3. PHP

   ```sh
   http://localhost/[directory]
   ```

4. Python

   ```sh
   py Main.py
   ```
   
