<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MakeAccount extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama_mitra' => 'Baso Aci Mojok',
            'nama_pemilik' => 'Alam',
            'telepon' => '08123456789',
            'kota' => 'Bandung',
            'kodepos' => 40130,
            'alamat' => 'Kopo',
            'email' => 'alam@example.test',
            'password' => bcrypt('321654987')
        ]); 
            
        
    }
}
