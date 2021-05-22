@extends('layout/main')

@section('title', 'Artikel')

@section('container')
  <div class="container">
      <div class="row">
          <div class="col-10">
          <h1 class="mt-3">APA ITU FRAMEWORK ?</h1>
              <p>Framework (kerangka kerja) adalah istilah yang sering muncul dalam dunia developer. 
              Istilah tersebut memiliki fungsi yang sangat besar bagi pengembangan kode program secara sistematis. 
              Saat ini, seorang pengembang khususnya dalam bidang web development diharuskan untuk mempelajari dan 
              menggunakan sebuah kerangka kerja dalam pembuatan perangkat lunak.</p>
              <p>Keuntungan lain adalah untuk mengembangkan perangkat lunak dengan penyusunan kode secara terstruktur 
              dan konsisten. Kode yang baik tentu saja merupakan kode yang dapat dimengerti oleh mesin serta pengembang (developer).</p>              
         <h2 class="mt-2">1. Pengertian Framework</h2> 
              <p>Sesuai dengan namanya sendiri, framework adalah kerangka kerja untuk mengembangkan aplikasi berbasis website maupun desktop.
              Kerangka kerja disini sangat membantu developer dalam menuliskan sebuah dengan lebih terstruktur dan tersusun rapi.</p>
              <p>Kerangka kerja diciptakan untuk mempermudah kinerja dari programmer. Sehingga, seorang programmer tidak perlu untuk menuliskan kode 
              secara berulang – ulang. Karena di dalamnya sendiri anda hanya perlu menyusun komponen – komponen pemrograman saja.</p>
         <h3 class="mt-2">2. Fungsi Framework</h3>
              <p>Sebagai developer, tentu harus mengetahui tujuan dari penggunaannya untuk kepentingan pembuatan aplikasi. Sehingga, untuk proses pengerjaan 
              aplikasi dapat dilakukan dengan menggunakan framework yang tepat dan sesuai dengan kebutuhan project. Berikut merupakan beberapa fungsi kerangka 
              kerja dalam web development.</p>
          <h4 class="mt-2">a. Kode Program Lebih Terstruktur</h4>
              <p>Fungsi framework yang utama adalah membuat source code menjadi lebih terstruktur. Terstruktur disini, berarti program yang dibuat akan 
              dimasukkan ke dalam setiap komponen sesuai dengan fungsi nya masing – masing.</p>
              <p>Salah satu contoh dari kode program terstruktur dapat dilihat dari framework PHP, yaitu Laravel. Yang menggunakan konsep paradigma MVC 
              (Model, View, Controller). Terdapat tiga komponen utama untuk mengembangkan website menggunakan model framework tersebut.Model berfungsi untuk 
              tempat atau wadah menampung kode program berupa algoritma pemrograman dan penghubung database aplikasi. View berfungsi sebagai wadah menampung kode 
              program untuk membuat tampilan yang nantinya ditampilkan kepada customer / client. Dan controller berfungsi untuk menghubungkan model dan view agar menjadi sebuah website secara keseluruhan.</p>
              <p>Dapat dikatakan juga, model disini untuk menangani tugas back end. Kemudian, view untuk menangani tugas front end. Dengan adanya konsep MVC tersebut, 
              kode program akan tersusun rapi serta mempersingkat kerja dari developer.</p>
          <h5 class="mt-2">b. Membantu Kinerja Developer</h5>
              <p>Fungsi yang kedua adalah membantu kinerja dari developer sendiri. Dari sini, anda pasti sudah berpikir bahwa sebenarnya dalam membuat sebuah aplikasi 
              dapat dilakukan tanpa menggunakan bantuan framework. Tentu saja, bisa dilakukan jika proyek yang ditangani dalam lingkup kecil.
              Apabila anda membuat aplikasi atau tampilan website untuk sebuah perusahaan atau organisasi besar tentu saja hal tersebut tidak disarankan bahkan mindset 
              tersebut harus segera diubah. Framework diciptakan untuk memudahkan kinerja dari developer dalam segi efisiensi waktu serta resource yang dibutuhkan.</p>
              <p>Selain itu, apabila dikerjakan oleh beberapa tim maka framework akan sangat membantu efektivitas kerja dan sinkronisasi. Setiap dapat langsung memahami 
              dan mengerjakan tugas masing – masing tanpa perlu mengecek satu persatu komponen baik dari segi back end maupun front end.</p>
          <h6 class="mt-2">c. Meningkatkan keamanan perangkat lunak / website</h6>
              <p>Selain membantu kinerja dari developer, dari segi keamanan website maupun software juga akan meningkat. Karena dalam framework telah diidentifikasi oleh beberapa developer ahli dari berbagai negara.
              Kemudian, sebuah kerangka kerja juga memiliki beberapa versi yang setiap saat akan selalu ada pembaruan dari segi fitur serta untuk mengurangi adanya bugs. 
              Keamanan akan selalu diperbarui dan dimonitoring agar tidak terjadi permasalahan yang lebih serius pada website misalnya terjadinya hacking maupun peretasan data.</p>
          <h7 class="mt-2">d. Pemeliharaan dan dokumentasi dari website lebih mudah</h7>
          <p>Dengan melakukan maintenance, anda dapat mengubah versi website tersebut dan menambahkan beberapa fitur dengan lebih mudah dan aman. Sehingga, ketika ada perbaikan pada website maka terdapat notifikasi 
          atau pesan bagi pengguna bahwa website masih dalam perbaikan.Selanjutnya, dari segi dokumentasi juga lebih terstruktur. Anda akan sangat kerepotan apabila dalam proses dokumentasi tidak menggunakan bantuan framework. 
          Dalam kerangka kerja, setiap dokumen aplikasi yang dibangun dapat diidentifikasi dengan mudah dan cepat.</p>
          </div>
        </div>
    </div>
  @endsection
