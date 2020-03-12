<html>

<head>
    <title>Export Data Ke Excel Dengan PHP - www.malasngoding.com</title>
</head>

<body>
    <style type="text/css">
        /* body {
            font-family: sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        } */
    </style>

    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Leads_database.xls");
    ?>

    <table border="1">
        <tr>
            <th>id_mapping_leads</th>
            <th>nama_konsumen</th>
            <th>telepon</th>
            <th>soa</th>
            <th>produk</th>
            <th>detail_produk</th>
            <th>nama_event</th>
            <th>nama_partner</th>
            <th>nama_agent</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>nik_egc</th>
            <th>posisi_egc</th>
            <th>cabang_egc</th>
            <th>nomor_kontrak</th>
            <th>referral_konsumen</th>
            <th>foto_usaha</th>
            <th>id_mapping</th>
            <th>id_agent</th>
            <th>id_user</th>
            <th>id_branch</th>
        </tr>
    </table>
</body>

</html>