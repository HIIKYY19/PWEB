<html>
<script language="javascript" src="jquery.js"></script> 
<script>
$(document).ready(function() {

    $('#cek_kategori').click function() { // Jika Tombol no kk diklik 
        var id = $('#id').val();
        $.ajax({
            type: 'POST', // Metode pengiriman data menggunakan POST 
            url: 'searchkategori.php', // File yang akan memproses data 
            data: 'id='+id, // Data yang akan dikirim ke file pemroses 
            success: function (response) { // Jika berhasil
                $('#kategori').val(response);
            }
        });

    });

});
</script>
<body>
    <form method="post">
        <table border="1">
            <tr>
            <td>Cari Kategori</td>
            <td>
            <input type="text" name="id" id="id" class="form-control" required>
                    <button name="cek_kategori" id="cek_kategori" type="button" class="btn bg-gradient-info text-white">
                         <i class="fas fa-search"></i>
                         <span>Cari</span>
                    </button>
            </td>
        </tr> 
        <tr>
            <td>Kategori</td>
            <td><input type="text" name="kategori" id="kategori"></td>
        </tr>
    </table>
</form>
</body>
</html>