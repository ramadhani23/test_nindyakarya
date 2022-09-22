<form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputJudul">Nama OPD</label>
            <select class="select2-single form-control" name="opd">
                <option>--Pilih OPD--</option>
                @foreach ($opds as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_opd }}</option>
                @endforeach
            </select>
            </div>
            <div class="form-group col-md-12">
                <label for="inputJudul">Judul</label>
                <input type="text" class="form-control" name="judul" id="inputJudul" placeholder="Masukkan Judul">
            </div>
            <div class="form-group col-md-12">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Masukkan Gambar Proposal</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
            </div>
            <div class="form-group col-md-12">
                <label for="inputInstansi">Instansi</label>
                <input type="text" class="form-control" name="instansi" id="inputInstansi" placeholder="Masukkan Instansi">
            </div>
            <div class="form-group col-md-12">
                <label for="inputLokasi">Maksud</label>
                <input type="text" class="form-control" name="maksud" id="editLokasi" placeholder="Masukkan Maksud">
            </div>
            <div class="form-group col-md-12">
                <label for="inputLokasi">Tujuan</label>
                <input type="text" class="form-control" name="tujuan" id="editLokasi" placeholder="Masukkan Tujuan">
            </div>
            <div class="form-group col-md-12">
                <label for="inputLokasi">Target</label>
                <input type="text" class="form-control" name="target" id="editLokasi" placeholder="Masukkan Target">
            </div>
            <div class="form-group col-md-12">
                <label for="inputLokasi">Spek</label>
                <input type="text" class="form-control" name="spek" id="editLokasi" placeholder="Masukkan Spek">
            </div>
            <div class="form-group col-md-12">
                <label for="inputLokasi">Lokasi</label>
                <input type="text" class="form-control" name="lokasi" id="inputLokasi" placeholder="Masukkan Lokasi">
            </div>
            {{-- <div class="form-group col-md-12">
                <label for="inputLokasi">Dokumen</label>
                <input type="file" class="form-control" name="dokumen" accept="application/pdf" id="inputDokumen" placeholder="Masukkan Dokumen">
            </div> --}}
        </div>
    </div>
<div class="centered">
<button type="submit" class="btn btn-primary">Simpan</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
</div>
</form>