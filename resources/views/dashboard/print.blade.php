<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Transaksi</title>
    <style>
    h1 {
        color: black; /* Warna hitam untuk kata "Klik" */
    }
    .orange-text {
        color: orange; /* Warna oranye untuk kata "Pajak" */
    }
    .text{
        color: green; /* Warna hijau untuk kata "Lunas" */
    }
        body {
            text-align: center;
        }
        table {
            margin: 0 auto;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color : #ddd;
        }
    </style>
</head>
<body>
<h1>Klik <span class="orange-text">Pajak</span></h1>
    <h2>Laporan Transaksi</h2>
    <table border="1" cellpadding="7" cellspacing="0">
         <tr>
             <th>No</th>
             <th>Nama</th>
             <th>Tanggal Pembayaran</th>
             <th>Jenis Pajak</th>
             <th>Jenis Pembayaran</th>
             <th>Total</th>
             <th>Status</th>
         </tr>@foreach($billings as $index => $billing)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $billing->nama }}</td>
                <td>{{ $billing->tanggal }}</td>
                <td>{{ $billing->jenis_pajak }}</td>
                <td>{{ $billing->jenis_pembayaran }}</td>
                <td>RP. {{ number_format(floatval($billing->total), 2, '.', '.') }}</td>
                <td class="text">Lunas</td>
            </tr>
        @endforeach
         </table>
</body>
</html>