<!DOCTYPE html>
<html>

<head>
    <title>Borrow Details Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        < !DOCTYPE html><html><head><title>Borrow Details Report</title><style>body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            margin: 0 auto;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin-top: 40px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Borrow Details Report</h1>
        <table>
            <thead>
                <tr>
                    <th>Borrow Code</th>
                    <th>Borrower Name</th>
                    <th>Book Name</th>
                    <th>Return Date</th>
                    <th>Denda</th>
                    <th>Return Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($borrows as $borrow)
                    <tr>
                        <td>{{ $borrow->id }}</td>
                        <td>{{ $borrow->user->nama }}</td>
                        <td>{{ $borrow->book->buku_judul }}</td>
                        <td>{{ $borrow->peminjaman_tgl }}</td>
                        <td>Rp. {{ $borrow->detail_denda }}</td>
                        <td>
                            @if ($borrow->detail_status_kembali == 1)
                                Returned
                            @else
                                Not Returned
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        window.onload = function() {
            window.print();
        }
    </script>
</body>

</html>
