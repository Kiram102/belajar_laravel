<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//latihan1
Route::get('/', function () {
    return view('welcome');
});

Route::get('/struk/{barang}/{jenis}/{nama}/{telepon}/{jumlah}/{pembayaran}', function($barang,$jenis,$nama,$telepon,$jumlah,$pembayaran){
   if ($barang == 'poco') {
    $harga = 3000000;
   } elseif($barang == 'samsung'){
    $harga = 5000000;
   } elseif($barang == 'iphone'){
    $harga = 15000000;
   } elseif($barang == 'lenovo'){
    $harga = 4000000;
   } elseif($barang == 'acer'){
    $harga = 8000000;
   } elseif($barang == 'macbook'){
    $harga = 20000000;
   } elseif($barang == 'tohshiba'){
    $harga = 5000000;
   }elseif($barang == 'lg'){
    $harga = 10000000;
   }

   if($jenis == 'tv'){
    if($barang == 'samsung'){
        $harga = 8000000;
    }
   }

   if($pembayaran == 'transfer'){
    $potongan = 50000;
   } else {
    $potongan = 0;
   }

   $total = $harga * $jumlah;

   if($total > 10000000){
    $cash = 5000000;
   } else {
    $cash = 0;
   }

   $hasil = $total - $cash - $potongan;


   return "Nama Pembeli :".$nama."<br>".
          "Telepon :".$telepon."<br>".
          "<hr>".
          "Jenis Barang :".$jenis."<br>".
          "Nama Barang :".$barang."<br>".
          "Harga :".number_format($harga)."<br>".
          "Jumlah :".$jumlah."<br>".
          "<hr>".
          "Total :".number_format($total)."<br>".
          "Cashback :".number_format($cash)."<br>".
          "Pembayaran :".$pembayaran."<br>".
          "Potongan :".number_format($potongan)."<br>".
          "<hr>".
          "Total Pembayaran".number_format($hasil); 
});

Route::get('/siswa',function(){

    $data_siswa = ['Kiki','Jamal','Rangga'];
    return view('tampil',compact('data_siswa'));

});
