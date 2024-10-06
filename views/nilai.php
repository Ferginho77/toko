<?php include_once'../views/layouts/header.php'; 
include_once'../controllers/c_kategori.php';
include_once'../controllers/c_peserta.php';

$tampil = new C_kategori();
$peserta = new C_peserta();
?>

<main>
<?php 
                        foreach($peserta->SelectPeserta($_GET['no_peserta']) as $tampil) :
                    ?>
                    <div class="card">
                        <div class="card-body">
                        <form method="post" action="../routers/r_nilai.php?aksi=tambah">
                            <div class="form-group">
                                <label for="timestamp">Timestamp</label>
                                <input type="text" class="form-control" id="timestamp" name="timestamp">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-select">
                                    <option value="">Finish</option>
                                    <option value="">Eliminasi</option>
                                    <option value="">Diskualifikasi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="waktu_tempuh">Waktu Tempuh</label>
                                <input type="number" step="0.01" class="form-control" id="waktu_tempuh" name="waktu_tempuh">
                            </div>
                            <div class="form-group">
                                <label for="fault">Fault</label>
                                <input type="number" class="form-control" id="fault" name="fault">
                            </div>
                            <div class="form-group">
                                <label for="refusal">Refusal</label>
                                <input type="number" class="form-control" id="refusal" name="refusal">
                            </div>
                            <div class="form-group">
                                <label for="result">Result</label>
                                <input type="number" step="0.01" class="form-control" id="result" name="result">
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" value="<?= $tampil->no_peserta ?>"  name="no_peserta">
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" value="<?= $tampil->IdKategori ?>"  name="no_peserta">
                            </div>
                            <div class="modal-footer">
                        <a href="devent.php"><button type="button" class="btn btn-secondary">Close</button></a>
                        <button type="submit" class="btn btn-primary" name="tambah" onclick="submitForm()">Save</button>
                    </div>
                        </form>
                        </div>
                        
                    </div>
                    <?php endforeach; ?>
                    
            
</main>