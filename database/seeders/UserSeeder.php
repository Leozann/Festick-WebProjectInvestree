<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::create([

      'user_image' => 'https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png',
      'email' => 'kira@gmail.com',
      'user_fullname' => 'Syakira Rahma',
      'password' => Hash::make('adminkira'),
      'user_phone' => '081327743180',
      'user_status' => 'admin',
    ]);
    User::create([

      'user_image' => 'https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png',
      'email' => 'budisetiawan370@gmail.com',
      'user_fullname' => 'Budi Setiawan',
      'password' => Hash::make('12345678'),
      'user_phone' => '081327743180',
      'user_account' => '5120475601',
      'user_bank' => 'BCA',
      'user_status' => 'actived',
    ]);
    User::create([

      'user_image' => 'https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png',
      'email' => 'sambotelolet01@gmail.com',
      'user_fullname' => 'Ferdy Sambo',
      'password' => Hash::make('helloworld'),
      'user_phone' => '081327921234',
      'user_account' => '1029850392',
      'user_bank' => 'BNI',
      'user_status' => 'deleted',
    ]);
    User::create([
      'user_image' => 'https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png',
      'email' => 'budisetiawan370@gmail.com',
      'user_fullname' => 'Andi Sutioso',
      'password' => Hash::make('12345678'),
      'user_phone' => '081580243380',
      'user_account' => '5120987320',
      'user_bank' => 'BCA',
      'user_status' => 'actived',
    ]);
    User::create([
      'user_image' => 'https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png',
      'email' => 'chikopariadi@gmail.com',
      'user_fullname' => 'Chiko Pariadi Utama',
      'password' => Hash::make('12345678'),
      'user_phone' => '087702987120',
      'user_account' => '500120350125012',
      'user_bank' => 'BRI',
      'user_status' => 'deleted',
    ]);
    User::create([

      'user_image' => 'https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png',
      'email' => 'shantiika@gmail.com',
      'user_fullname' => 'Shanti Ika Pratiwi',
      'password' => Hash::make('shanti123'),
      'user_phone' => '081312990210',
      'user_account' => '500122012993012',
      'user_bank' => 'BRI',
      'user_status' => 'actived',
    ]);
    User::create([

      'user_image' => 'https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png',
      'email' => 'pratikaintan880@gmail.com',
      'user_fullname' => 'Pratika Intan',
      'password' => Hash::make('helloworld'),
      'user_phone' => '081312990210',
      'user_status' => 'actived',
    ]);
    User::create([
      'user_image' => 'https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png',
      'email' => 'ekoshanksfruit@gmail.com',
      'user_fullname' => 'Eko Shanjitama',
      'password' => Hash::make('ekoshanjitama'),
      'user_phone' => '081208299930',
      'user_account' => '510124012873043',
      'user_bank' => 'BRI',
      'user_status' => 'actived',
    ]);
    User::create([
      'user_image' => 'https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png',
      'email' => 'sulistyaandhika11200@gmail.com',
      'user_fullname' => 'Sulistya Andhika',
      'password' => Hash::make('helloworld'),
      'user_phone' => '0218293456',
      'user_status' => 'deleted',
    ]);
    User::create([
      'user_image' => 'https://www.pngall.com/wp-content/uploads/5/Profile-PNG-File.png',
      'email' => 'putrapertama@gmail.com',
      'user_fullname' => 'Putra Pertama',
      'password' => Hash::make('putra123'),
      'user_phone' => '08570211201',
      'user_account' => '1023459981',
      'user_bank' => 'BNI',
      'user_status' => 'actived',
    ]);
  }
}
