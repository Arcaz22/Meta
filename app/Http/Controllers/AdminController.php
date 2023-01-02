<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Feedback;
use App\Models\Jurusan;
use App\Models\Reservasi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Index() {
        return view('admin.admin_login');
    }

    public function edit($id) {
        return view('admin.edit', [
            'reservasi' => Reservasi::find($id),
            'jurusans' => Jurusan::all()
        ]);
    }

    public function update(Request $request, $id) {
        $rules = [
            'tanggal_reservasi' => 'required|max:255',
            'jurusan_id' => 'required',
            'seat' => 'required'
        ];
        // $validatedData = $request->validate([
        //     'tanggal_reservasi' => 'required|max:255',
        //     'jurusan_id' => 'required',
        //     'seat' => 'required'
        // ]);

        $validatedData = $request->validate($rules);

        $reservasi = Reservasi::find($id);

        // dd($validatedData);

        Reservasi::where('id', $reservasi->id)->update($validatedData);

        return redirect('/admin/cek-reservasi')->with('success', 'Berhasil mengedit tiket');
    }

    public function Dashboard() {
        $jumlah_user = User::count();
        $jumlah_memesan = Reservasi::count();
        $jumlah_feedback = Feedback::count();
        $user = User::get()->toQuery()->paginate(3);
        $feedback = Feedback::get()->toQuery()->paginate(3);
        return view('admin.index', compact('user', 'feedback', 'jumlah_user', 'jumlah_memesan', 'jumlah_feedback'));
    }

    public function Login(Request $request) {
        // dd($request->all());
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password'] ])){
            return redirect()->route('admin.dashboard')->with('berhasil', 'Admin berhasil login');
        } else {
            return back()->with('error', 'Email Atau Password Salah');
        }
    }

    public function AdminLogout() { 
        Auth::guard('admin')->logout();
        return redirect('/admin/login')->with('keluar', 'Admin berahasil keluar');
    }

    public function cekReservasi() {
        return view('admin.cek-reservasi', [
                    'reservasis' => Reservasi::paginate(3)
                ]);
    }

    public function delete($id) {
        // Reservasi::destroy($reservasi->id);
        $reservasi = Reservasi::find($id);
        $reservasi->delete();

        return redirect()->route('admin.cek-reservasi')->with('error', 'Admin berhasil keluar');
    }

    // public function destroy(User $user) {
    //     $user->delete('$id');
    //     return redirect()->route('admin.index')->with('success', 'User telah dihapus');  
    // }

    // public function AdminRegister() {
    //     return view('admin.admin_register');
    // }

    // public function AdminRegisterCreate(Request $request) {
    //     // dd($request->all());
    //     $check = $request->all();
    //     Admin::insert([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'created_at' => Carbon::now(),
    //     ]);
    //     return redirect()->route('admin.dashboard')->with('error', 'Admin Created Successfully');
    // }
}
