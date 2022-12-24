<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Reservasi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Index() {
        return view('admin.admin_login');
    }

    public function Dashboard() {
        $jumlah_user = User::count();
        $jumlah_memesan = Reservasi::count();
        $user = User::get()->toQuery()->paginate(3);
        return view('admin.index', compact('user', 'jumlah_user', 'jumlah_memesan'));
    }

    public function Login(Request $request) {
        // dd($request->all());
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password'] ])){
            return redirect()->route('admin.dashboard')->with('error', 'Admin Login Successfully');
        } else {
            return back()->with('error', 'Invalid Email Or Password');
        }
    }

    public function AdminLogout() {
        Auth::guard('admin')->logout();
        return redirect()->route('login')->with('error', 'Admin Logout Successfully');
    }

    public function cekReservasi() {
        return view('admin.cek-reservasi');
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
