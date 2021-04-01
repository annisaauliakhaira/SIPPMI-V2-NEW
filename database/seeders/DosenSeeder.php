<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dosen;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dosens = array(
            array(
                "gelar_depan" => NULL,
                "nama" => "Husnil Kamil",
                "gelar_belakang" => "M.T",
                "nidn" => "0018018202",
                "tempat_lahir" => "Payakumbuh",
                "tanggal_lahir" => NULL,
                "prodi_id" => 46,
                "jabatan_fungsional" => "1",
                "status" => "1",
                "email" => "husnil.k@gmail.com",
                "jenis_kelamin" => "laki-laki",
                "pangkat_golongan" => NULL,
                "telepon" => "081363491004",
            ),
            array(
                "gelar_depan" => NULL,
                "nama" => "Ricky Akbar",
                "gelar_belakang" => "M.Kom",
                "nidn" => "1006108402",
                "tempat_lahir" => "Padang",
                "tanggal_lahir" => NULL,
                "prodi_id" => 46,
                "jabatan_fungsional" => "5",
                "status" => "1",
                "email" => "rickyakbar@fti.unand.ac.id",
                "jenis_kelamin" => "laki-laki",
                "pangkat_golongan" => NULL,
                "telepon" => "085263098489",
            ),
            
            array(
                "gelar_depan" => NULL,
                "nama" => "Meza Silvana",
                "gelar_belakang" => "M.T",
                "nidn" => "0025038103",
                "tempat_lahir" => "Jakarta",
                "tanggal_lahir" => NULL,
                "prodi_id" => 46,
                "jabatan_fungsional" => "1",
                "status" => "1",
                "email" => "mezasilvana@gmail.com",
                "jenis_kelamin" => "perempuan",
                "pangkat_golongan" => NULL,
                "telepon" => "0812",
            ),
        );

        foreach($dosens as $dosen){
            $user = User::create([
                'username' => $dosen['nidn'],
                'name' => $dosen['nama'],
                'password' => bcrypt($dosen['nidn']),
                'email' => $dosen['email'],
                'type' => 2,
                'active' => 1
            ]);
    
            $user_dosen = Dosen::create([
                'id' => $user->id,
                'gelar_depan' => $dosen['gelar_depan'],
                'nama' => $dosen['nama'],
                'gelar_belakang' => $dosen['gelar_belakang'],
                'nidn' => $dosen['nidn'],
                'tempat_lahir' => $dosen['tempat_lahir'],
                'tanggal_lahir' => $dosen['tanggal_lahir'],
                'prodi_id' => $dosen['prodi_id'],
                'jabatan_fungsional' => $dosen['jabatan_fungsional'],
                'status' => $dosen['status'],
                'email' => $dosen['email'],
                'jenis_kelamin' => $dosen['jenis_kelamin'],
                'pangkat_golongan' => $dosen['pangkat_golongan'],
                'telepon' => $dosen['telepon']
            ]);
        }
        

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $dosen = Role::findByName('dosen');

        $permissions = [
            'penelitian_access',
            'penelitian_manage',
            'pengabdian_access',
            'penelitian_submit',
            'pengabdian_submit',
        ];

        foreach ($permissions as $permission) {
            $dosen->givePermissionTo($permission);
        }

        $user->assignRole('dosen');
    }
}
