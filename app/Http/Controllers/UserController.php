<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;



class UserController extends Controller
{
    public function formPendaftaran($locale = 'id'){
        App::setLocale($locale);
        app()->setLocale($locale);
        request()->session()->put('temp_locale', $locale);
        return view('formPage');
    }

    public function prosesForm(Request $request){
        App::setLocale(request()->session()->get('temp_locale'));
        $validateData = $request->validate([
            'nim' => 'required|size:8',
            'nama' => 'required|min:4|max:20',
            'email' => 'required|email:dns',
            'jenis_kelamin' => 'required|in:male,female',
            'jurusan' => 'required|not_in:Pilih Satu Jurusan,Choose a Major',
            'alamat' => 'required'
        ]);

        dump($validateData);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $validateData['nim'];
        $mahasiswa->nama = $validateData['nama'];
        $mahasiswa->email = $validateData['email'];
        $mahasiswa->jenis_kelamin = $validateData['jenis_kelamin'];
        $mahasiswa->jurusan = $validateData['jurusan'];
        $mahasiswa->alamat = $validateData['alamat'];
        $mahasiswa->save();

        dd('Data berhasil masuk ke database');
    }

    // public function store(Request $request){
        
        
    //     $student = new Student();
    //     $student->nim = $validateData['nim'];
    //     $student->name = $validateData['name'];
    //     $student->email = $validateData['email'];
    //     $student->gender = $validateData['gender'];
    //     $student->major = $validateData['major'];
    //     $student->address = $validateData['address'];
    //     $student->save();

    //     dd('Successfully Added');
    // }   
}
