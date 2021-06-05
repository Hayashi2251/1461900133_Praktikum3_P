<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Pelanggan;
use App\Models\Transaksi;

class BarangController extends Controller
{
    public function index(){
        $transaksi = Transaksi::all();
        return view('trans0133', [
            'transaksi' => $transaksi
        ]);
    }

    public function search(Request $request){
        $barang = Barang::where('id_pelanggan', $request->cari);
        $transaksi = Transaksi::where('id_pelanggan', $request->cari)->get();
        return view('trans0133', [
            'barang' => $barang,
            'transaksi' => $transaksi
        ]);
    }

    public function tambah(){
        $barang = Barang::all();
        $pelanggan = Pelanggan::all();
        return view('tambah-trans0133',[
            'barang' => $barang,
            'pelanggan' => $pelanggan
        ]);
    }

    public function store(Request $request){
        Transaksi::create([
            'id_pelanggan'=>$request->id_pelanggan,
            'id_barang'=>$request->id_barang
        ]);
        return redirect()->route('transaksi');
    }

    public function edit($id){
        $barang = Barang::all();
        $pelanggan = Pelanggan::all();
        $transaksi = Transaksi::where('id', $id)->get();
        return view('edit-trans0133',[
            'barang' => $barang,
            'pelanggan' => $pelanggan,
            'transaksi' => $transaksi,
            'indeks' => $id
        ]);
    }

    public function update(Request $request, $id){
        Transaksi::where('id', $id)->update([
            'id_pelanggan'=>$request->id_pelanggan,
            'id_barang'=>$request->id_barang
        ]);
        return redirect()->route('transaksi');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::where('id', $id)->first();
        $transaksi->delete();

        return redirect()->route('transaksi');
    }
}
