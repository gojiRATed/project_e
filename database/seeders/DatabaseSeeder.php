<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory(10)->create();

    $superadmin = User::factory()->create([
      'name' => 'Superadmin User',
      'email' => 'superadmin@example.com',
      'whatsapp' => '62812345678',
      'username' => 'superadmin_user',
    ]);
    $tatausaha = User::factory()->create([
      'name' => 'Tata Usaha User',
      'email' => 'tatausaha@example.com',
      'whatsapp' => '628123456783',
      'username' => 'tatausaha_user',
    ]);
    $kantin = User::factory()->create([
      'name' => 'Kantin User',
      'email' => 'kantin@example.com',
      'whatsapp' => '628123456782',
      'username' => 'kantin_user',
    ]);
    $koperasi = User::factory()->create([
      'name' => 'Koperasi User',
      'email' => 'koperasi@example.com',
      'whatsapp' => '628123456781',
      'username' => 'koperasi_user',
    ]);
    $murid = User::factory()->create([
      'name' => 'Murid User',
      'email' => 'murid@example.com',
      'whatsapp' => '628123456780',
      'username' => 'murid_user',
    ]);

    $superadmin->assignRole('superadmin');
    $murid->assignRole('murid');
    $koperasi->assignRole('koperasi');
    $tatausaha->assignRole('tata usaha');
    $kantin->assignRole('kantin');
  }
}
