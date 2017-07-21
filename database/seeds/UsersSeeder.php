<?php
use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Role Admin Utama
        $adminRole = new Role();
        $adminRole->name="admin";
        $adminRole->display_name="Admin";
        $adminRole->save();
        //Role Author Fasilitas
        $fasilitasRole = new Role();
        $fasilitasRole->name="fasilitas";
        $fasilitasRole->display_name="Author Fasilitas";
        $fasilitasRole->save();
        //Role Author prestasi
        $prestasiRole = new Role();
        $prestasiRole->name="prestasi";
        $prestasiRole->display_name="Author Prestasi";
        $prestasiRole->save();
        //Role Author alumni
        $alumniRole = new Role();
        $alumniRole->name="alumni";
        $alumniRole->display_name="Author Alumni";
        $alumniRole->save();
        //Sampel Admin Utama 
        $admin = new User();
        $admin->name="Admin TSM";
        $admin->email="admin@gmail.com";
        $admin->password=bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);
        //Sampel Author Fasilitas 
        $fasilitas = new User();
        $fasilitas->name="Author Fasilitas";
        $fasilitas->email="fasilitas@gmail.com";
        $fasilitas->password=bcrypt('rahasia');
        $fasilitas->save();
        $fasilitas->attachRole($fasilitasRole);
        //Sampel Author Prestasi 
        $prestasi = new User();
        $prestasi->name="Author Prestasi";
        $prestasi->email="prestasi@gmail.com";
        $prestasi->password=bcrypt('rahasia');
        $prestasi->save();
        $prestasi->attachRole($prestasiRole);
        //Sampel Author alumni 
        $alumni = new User();
        $alumni->name="Author Alumni";
        $alumni->email="alumni@gmail.com";
        $alumni->password=bcrypt('rahasia');
        $alumni->save();
        $alumni->attachRole($alumniRole);
    }
}