<!DOCTYPE html>
<html>

<head>
    <title>Laporan Penjualan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        @media print {
            table.table-bordered,
            table.table-bordered th,
            table.table-bordered td {
                border: 1px solid #000 !important;
            }
        }
    </style>
</head>

<body>

    <div class="container"><br>
        <!-- Tambahkan tombol cetak -->
        <button id="printButton">Cetak</button>

        <!-- Elemen yang akan dicetak -->
        <div id="contentToPrint">
            <center>
                <h4>Laporan Penjualan</h4>
            </center>
            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Tanggal dan Waktu</th>
                        <th scope="col" class="text-center">Total Item</th>
                        <th scope="col" class="text-center">Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penjualan as $p)
                        <tr>
                            <th scope="row" class="text-center">{{ $loop->iteration }}</th>
                            <td>{{ $p->created_at }}</td>
                            <td>{{ $p->total_item }}</td>
                            <td>Rp. {{ $p->total_harga }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
<script>
    document.getElementById('printButton').addEventListener('click', function() {
        // Panggil fungsi cetak saat tombol ditekan
        printContent();
    });

    function printContent() {
        // Cetak elemen dengan ID 'contentToPrint'
        var contentToPrint = document.getElementById('contentToPrint');
        var newWin = window.open('', '_blank');
        newWin.document.write(contentToPrint.outerHTML);
        newWin.document.close();
        newWin.print();
    }
</script>
