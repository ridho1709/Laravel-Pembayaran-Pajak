<?php

namespace App\Http\Controllers;
use App\Models\billing;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class BillingController extends Controller
{
    public function index()
    {
        $billings = billing::all();
        return view('dashboard.billings-manage', compact('billings'));
    }
    
    public function printpdf()
    {
        $billings = billing::all();
        $pdf = Pdf::loadview('dashboard.print', compact('billings'));
        return $pdf->download('laporan-transaksi.pdf');

    }

    public function create()
    {
        return view('billings.billing-create');
    }

    function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal' => 'required',
            'jenis_pajak' => 'required',
            'jenis_pembayaran' => 'required',
            'no_tlpn' => 'required',
            'total' => 'required'
        ]);

        $billing = new billing;
        $billing->nama = $request->nama;
        $billing->tanggal = $request->tanggal;
        $billing->jenis_pajak = $request->jenis_pajak;
        $billing->jenis_pembayaran = $request->jenis_pembayaran;
        $billing->no_tlpn = $request->no_tlpn;
        $billing->total = $request->total;
        $billing->save();
        return redirect()->route('welcome')->with('success', 'Data Berhasil Ditambahkan');
    }
}
