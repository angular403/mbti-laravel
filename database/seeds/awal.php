<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Msoal;

class awal extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new=new User;
        $new->name='admin';
        $new->password=bcrypt('admin');
        $new->email='adminatgmail,conn';
        $new->save();

        $soal= new Msoal;
        $soal->nomor=1;
        $soal->soal='[{"pilihan":"Mudah bergaul, ramah, menyenangkan","keym":"S","keyl":"S"},{"pilihan":"Penuh kepercayaan, percaya kepada orang lain","keym":"I","keyl":"I"},{"pilihan":"Petualan, pengambil resiko","keym":"B","keyl":"D"},{"pilihan":"Toleran, penuh hormat","keym":"C","keyl":"C"}]';
        $soal->save();

        $soal= new Msoal;
        $soal->nomor=2;
        $soal->soal='[{"pilihan":"Hasil adalah yang terpenting","keym":"D","keyl":"D"},{"pilihan":"Mengerjakan Dengan Benar, Ketepatan sangat penting","keym":"C","keyl":"C"},{"pilihan":"Menikmati Proses","keym":"B","keyl":"I"},{"pilihan":"Mengerjakan Bersama-sama","keym":"B","keyl":"S"}]';
        $soal->save();

    }
}
