<h4 class="mb-4">Tambah persyaratan pengajuan surat</h4>
<form action="<?= base_url("admin/persyaratan/submit") ?>" method="POST">
    <textarea id="persyaratan" name="persyaratan">
        <p>Masukkan Persyaratan</p>
    </textarea>
    <input type="hidden" name="jenis" value=<?= $jenis; ?>>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>