@extends('template.admin')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <div class="card">
            <div class="card-header">
              edit
            </div>
            <div class="card-body">
              <form action="{{ url('admin/artikel', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="" class="control-label">Judul</label>
                    <input type="text" class="form-control" name="title" value="{{ $artikel->judul }}">
                </div>
                <div class="form-group ">
                  <label for="Write" class="control-label">Nama</label>
                  <input type="text" class="form-control" name="nama" value="{{ $artikel->nama }}">
              </div>
              <div class="col-md-3">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Kategori</label>
                        <input type="text" name="kategori" id="" class="form-control" value="{{$artikel->kategori}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">Isi</label>
                    <textarea name="isi" id="" cols="30" rows="10" class="form-control"> {{ $artikel->isi }}
                    </textarea>
                </div>

                <button class="btn btn-dark float-right"><i class="fa fa-save"></i> save</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection