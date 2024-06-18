<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Barang</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
</head>

<body>
    <div class="card border border-primary">
        <div class="card-header bg-primary text-white">List Data Barang</div>
        <div class="card-body">
            <div class="button-container">
                <form action="<?php echo site_url('barang/search_barang'); ?>" method="post">
                    <div class="row">
                        <div class="col-md-10 col-sm-8">
                            <input class="form-control" type="text" value="<?php echo isset($keyword) ? $keyword : ''; ?>" name="keyword" placeholder="Cari Nama Barang">
                        </div>
                        <div class="col-md-1 col-sm-2">
                            <button class="btn btn-primary mt-2 btn-block" type="submit">Cari</button>
                        </div>
                        <div class="col-md-1 col-sm-2">
                            <button class="btn btn-success mt-2 btn-block" onclick="window.location.href='<?php echo base_url('barang'); ?>'" type="button">Reset</button>
                        </div>
                    </div>
                </form>
                <button class="btn btn-primary mt-2" onclick="window.location.href='<?php echo base_url('barang/create_barang'); ?>'">Tambah Barang</button>
            </div>
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success mt-3" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('error')) : ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php endif; ?>
            <div class="table-responsive">
                <table class="table table-bordered table-hover mt-3">
                    <thead>
                        <tr class="table-primary">
                            <th class="text-center">ID</th>
                            <th class="text-center">Kode Barang</th>
                            <th class="text-center">Nama Barang</th>
                            <th class="text-center">Kategori Barang</th>
                            <th class="text-center">Deskripsi Barang</th>
                            <th class="text-center">Harga Beli</th>
                            <th class="text-center">Harga Jual</th>
                            <th class="text-center">Stok Barang</th>
                            <th class="text-center">Supplier Barang</th>
                            <th class="text-center">Tanggal Masuk</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <?php foreach ($barang as $brg) { ?>
                        <tbody>
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
                                <td>
                                    <a href="<?php echo site_url('barang/edit_barang/' . $brg['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?php echo site_url('barang/delete_barang/' . $brg['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
