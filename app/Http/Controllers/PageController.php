<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Tiket;  // Import the Tiket model

class PageController extends Controller
{
    public function home()
    {
        return view("home", ["key" => "home"]);
    }
    public function tiket()
    {
        $tiket = tiket::orderBy('id', 'desc')->get();
        return view("tiket", ["key" => "tiket", "tiket" => $tiket]);
    }
    public function addTiket()
    {
        return view("formaddtiket", ["key" => "tiket"]);
    }
    public function saveTiket(Request $request)
    {
        $file_name = time().'-'.$request->file('gambar')->getClientOriginalName();
        $path = $request->file('gambar')->storeAs('gambar', $file_name, 'public');

        tiket::create([
            'nomor_kereta' => $request->nomor_kereta,
            'stasiun_asal' => $request->stasiun_asal,
            'stasiun_tujuan' => $request->stasiun_tujuan,
            'tersedia' => $request->tersedia,
            'gambar' => $path
        ]);

        return redirect("tiket")->with('alert', 'Data Berhasil di Simpan');
    }
    public function edittiket($id)
    {
        $tiket = Tiket::find($id);
        return view("formedit", ["key" => "tiket", "tiket" => $tiket]);
    }
    public function updatetiket($id, Request $request)
    {
        $tiket = Tiket::find($id);

        $tiket->nomor_kereta = $request->nomor_kereta;
        $tiket->stasiun_asal = $request->stasiun_asal;
        $tiket->stasiun_tujuan = $request->stasiun_tujuan;
        $tiket->tersedia = $request->tersedia;

        if ($request->gambar)
        {
            if($tiket->gambar)
            {
                Storage::disk('public')->delete($tiket->gambar);
            }
            $file_name = time().'-'.$request->file('gambar')->getClientOriginalName();
            $path = $request->file('gambar')->storeAs('gambar', $file_name, 'public');
            $tiket->gambar = $path;
        }

        $tiket->save();
        return redirect("/tiket")->with('alert', 'Data berhasil di ubah');
    }
    public function deletetiket($id)
    {
        $tiket = Tiket::find($id);

        if($tiket->gambar)
        {
            Storage::disk('public')->delete($tiket->gambar);
        }
        $tiket->delete();
        return redirect("/tiket")->with('alert', 'Data berhasil di ubah');
    }
    public function login()
    {
        return view("login");
    }
    public function edituser()
    {
        return view("edituser", ["key"=>""]);
    }

    public function updateuser(Request $request)
    {
        if ($request->password_baru == $request->konfirmasi_password)
        {
            $user = Auth::user();
            
            $user->password = bcrypt($request->password_baru);

            $user->save();

            return redirect("/user")->with("info", "Password Berhasil di Ubah");//tiket1234
        }
        else
        {
            return redirect("/user")->with("info", "Password gagal di Ubah");
        }
    }

    
    public function about()
    {
        return view("about", ["key" => "about"]);
    }

    public function faq()
    {
        return view("faq", ["key" => "faq"]);
    }
    
    
    
}
