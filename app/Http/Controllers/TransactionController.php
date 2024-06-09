<?php


namespace App\Http\Controllers;
use App\Models\transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = transaction::all();
        return view('dashboard.transaction-manage', compact('transactions'));
    }

    public function tampilan()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('transaction.create');
    }   

    function store(Request $request)
    {
        $request->validate([
            'npwp' => 'required',
            'nama' => 'required',
            'jenis_usaha' => 'required',
            'jenis_pajak' => 'required',
            'alamat' => 'required',
            'no_tlpn' => 'required',
            'tanggal' => 'required',
            'total' => 'required'
        ]);

        $transaction = new transaction;
        $transaction->npwp = $request->npwp;
        $transaction->nama = $request->nama;
        $transaction->jenis_usaha = $request->jenis_usaha;
        $transaction->jenis_pajak = $request->jenis_pajak;
        $transaction->alamat = $request->alamat;
        $transaction->no_tlpn = $request->no_tlpn;
        $transaction->tanggal = $request->tanggal;
        $transaction->total = $request->total;
        $transaction->save();
        return redirect()->route('billings.billing-create')->with('success', 'Data Berhasil Ditambahkan');
    }

    function edit($id)
    {
        $transaction = transaction::find($id);
        return view('transaction.edit', compact('transaction'));
    }
    public function update(Request $request)
    {
        $transaction = Transaction::find($request->id);
        $transaction->npwp = $request->npwp;
        $transaction->nama = $request->nama;
        $transaction->jenis_usaha = $request->jenis_usaha;
        $transaction->jenis_pajak = $request->jenis_pajak;
        $transaction->alamat = $request->alamat;
        $transaction->no_tlpn = $request->no_tlpn;
        $transaction->tanggal = $request->tanggal;
        $transaction->total = $request->total;
        $transaction->save();

        return redirect()->back()->with('success', 'Data berhasil diperbarui');
    }
    public function destroy($id)
{
    $transaction = Transaction::find($id);
    if ($transaction) {
        $transaction->delete();
        return response()->json(['message' => 'Transaksi berhasil dihapus.'], 200);
    } else {
        return response()->json(['message' => 'Transaksi tidak ditemukan.'], 404);
    }
}
}
