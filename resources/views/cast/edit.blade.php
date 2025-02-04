@extends('template.master')
@section('content')


            <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Cast</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('cast.update', $casts->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label for="nama">nama Cast</label>
                      <input name="nama" type="text" class="form-control @error('nama') {{ 'is-invalid' }} @enderror" id="nama"  placeholder="Masukan nama" value="{{ $casts->nama }}">
                    </div>
                    @error('nama')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="umur">Umur</label>
                      <input name="umur" type="text" class="form-control @error('umur') {{ 'is-invalid' }} @enderror" id="umur"  placeholder="Masukan umur" value="{{ $casts->umur }}">
                    </div>
                    @error('umur')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="card-body">
                    <div class="form-group">
                      <label for="bio"> Bio</label>
                      <input name="bio" type="text" class="form-control @error('bio') {{ 'is-invalid' }} @enderror" id="bio"  placeholder="Masukan bio" value="{{ $casts->bio }}">
                    </div>
                    @error('bio')
                      <span id="terms-error" class="error invalid-feedback" style="display: inline;">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="px-3 d-flex justify-content-between align-items-center">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
    
    <!-- /.container-fluid -->
  </section>
<!-- /.content -->

@endsection