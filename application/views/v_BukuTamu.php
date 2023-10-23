<html>

<head>
    <title>input buku tamu</title>
</head>

<body>
    <center>
        <form action="<?= base_url('web/cetak'); ?>"
method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Inpu Buku Tamu
                    </th>
                </tr> 
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="email" id="email">
                    </td>
                </tr>
                <tr>
                    <th>Komentar</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="Komentar" id="komentar">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>
