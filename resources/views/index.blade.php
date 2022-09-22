<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">

<form method="POST" action="{{ route('pegawai.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputJudul">Tabel Pegawai</label>
            
            </div>
            <div class="form-group col-md-12">
                <label for="inputJudul">NIK</label>
                <input type="text" class="form-control" name="nik" id="inputJudul" placeholder="Masukkan Nik">
            </div>
            <div class="form-group col-md-12">
                <label for="inputInstansi">Name</label>
                <input type="text" class="form-control" name="name" id="inputInstansi" placeholder="Masukkan Nama">
            </div>
      
            <div class="form-group col-md-12">
                <label for="inputLokasi">Email</label>
                <input type="text" class="form-control" name="email"  placeholder="Masukkan Email">
            </div>
            <div class="form-group col-md-12">
                <label for="inputLokasi">Address</label>
                <input type="text" class="form-control" name="address" placeholder="Masukkan Addreess">
            </div>
          
        </div>
    </div>
<div class="centered">
<button type="submit" class="btn btn-primary">Simpan</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
</div>
</form>

@foreach ($pegawais as $item)
<td>
    <tr>
        Nama
        <td>{{ $item->name }}</td>
    </tr>
</td>
<td>
    <tr>
        email
        <td>{{ $item->email }}</td>
                
    </tr>
</td>
<td>
    <tr>
        address
        <td>{{ $item->address }}</td>
                
    </tr>
</td>
    

    
@endforeach