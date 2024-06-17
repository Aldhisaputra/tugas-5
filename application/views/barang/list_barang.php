<!DOCTYPE html>
<html lang="en">


<body>
    <h2 align="center">Data Barang</h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form action="<?php echo site_url('barang/search_barang'); ?>" method="post" class="d-flex justify-content-center">
                    <input type="text" name="keyword" placeholder="Cari Nama Barang" class="form-control me-2">
                    <button type="submit" class="btn btn-primary">Cari</button>
                    <button onclick="window.location.href='<?php echo base_url('barang'); ?>'" type="button"
                        class="btn btn-secondary">Reset</button>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Kategori Barang</th>
                            <th>Deskripsi Barang</th>
                            <th>Harga Beli</th>
                            <th>Harga Jual</th>
                            <th>Stok Barang</th>
                            <th>Supplier Barang</th>
                            <th>Tanggal Masuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($barang as $brg) { ?>
                        <tr>
                            <td><?php echo $brg['id']; ?></td>
                            <td><?php echo $brg['kode_barang']; ?></td>
                            <td><?php echo $brg['nama_barang']; ?></td>
                            <td><?php echo $brg['kategori_barang']; ?></td>
                            <td><?php echo $brg['deskripsi_barang']; ?></td>
                            <td><?php echo $brg['harga_beli']; ?></td>
                            <td><?php echo $brg['harga_jual']; ?></td>
                            <td><?php echo $brg['stok_barang']; ?></td>
                            <td><?php echo $brg['supplier_barang']; ?></td>
                            <td><?php echo $brg['tanggal_masuk']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
