<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Mata Kuliah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Mata Kuliah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Mata Kuliah</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url()."matakuliah/insert"; ?>" method="post">
                    <div class="form-group">
                        <label for="id">ID Mata Kuliah</label>
                        <input type="text" class="form-control" name="idmatakuliah" id="id" placeholder="Masukkan ID Mata Kuliah" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Mata Kuliah</label>
                        <input type="text" class="form-control" name="namamatakuliah" id="nama" placeholder="Masukkan Nama Mata Kuliah" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Nama Dosen</label>
                        <input type="text" class="form-control" name="namadosen" id="namadosen" placeholder="Masukkan Nama Dosen" required>
                    </div>
                    <div class="form-group">
                        <label for="sks">Jumlah SKS</label>
                        <select class="form-control" name="sks" id="sks" required>
                            <option value="">Pilih</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="<?= base_url('matakuliah'); ?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
