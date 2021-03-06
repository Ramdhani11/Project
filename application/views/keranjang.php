<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
        </tr>

        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) : ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $items['name']; ?></td>
                <td><?= $items['qty']; ?></td>
                <td align="right">Rp <?= number_format($items['price'], 0, ',', '.'); ?></td>
                <td align="right">Rp <?= number_format($items['subtotal'], 0, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td align="right" colspan="5">Rp <?= number_format($this->cart->total(), 0, ',', '.'); ?></td>
        </tr>


    </table>
    <div align="right">
        <a href="<?= base_url('Dashboard/hapus_keranjang'); ?>" class="btn btn-sm btn-danger">Hapus</a>
        <a href="<?= base_url('Dashboard/index'); ?>" class="btn btn-sm btn-primary">Lanjutkan Belanja</a>
        <a href="<?= base_url('Dashboard/pembayaran'); ?>" class="btn btn-sm btn-success">Checkout</a>
    </div>
</div>