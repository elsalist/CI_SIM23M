<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Mata Kuliah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Mata Kuliah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Mata Kuliah</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('matakuliah/update/'. $matakuliah['idmatakuliah']); ?>" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="id">ID Mata Kuliah</label>
                            <input type="text" class="form-control" name="idmatakuliah" value="<?= $matakuliah['idmatakuliah']; ?>" id="id" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" name="namamatakuliah" value="<?= $matakuliah['namamatakuliah']; ?>" id="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Nama Dosen</label>
                            <input type="text" class="form-control" name="namadosen" value="<?= $matakuliah['namadosen']; ?>" id="namadosen" required>
                        </div>
                        <div class="form-group">
                            <label for="sks">Jumlah SKS</label>
                            <select class="form-control" name="sks" id="sks" required>
                                <option value="1" <?= ($matakuliah['sks'] == '1') ? 'selected' : ''; ?>>1</option>
                                <option value="2" <?= ($matakuliah['sks'] == '2') ? 'selected' : ''; ?>>2</option>
                                <option value="3" <?= ($matakuliah['sks'] == '2') ? 'selected' : ''; ?>>3</option>
                                <option value="4" <?= ($matakuliah['sks'] == '2') ? 'selected' : ''; ?>>4</option>
                                <option value="5" <?= ($matakuliah['sks'] == '2') ? 'selected' : ''; ?>>5</option>
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?= base_url('matakuliah'); ?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
