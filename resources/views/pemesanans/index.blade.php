<link href="/assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

@extends('layout.master')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Pemesan</h2>
            </div>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div>
            <form class="cari" method="get" action="{{ route('searchpemesanans') }}">
                <div class="form-group">
                    <input type="text" name="searchpemesanans" class="form-control d-inline" placeholder="Cari..." value="{{ request('searchpemesanans') }}">
                    <button type="submit" class="btn btn-primary mb-1">Search</button>
                    <a class="btn btn-danger mb-1" href="{{ route('pemesanans.index') }}">Cancel</a>
                </div>
                </form> 
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Nama Tamu</th>
            <th>Tgl CheckIn</th>
            <th>Tgl CheckOut</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemesanans as $pemesanan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pemesanan->nama_tamu }}</td>
            <td>{{ $pemesanan->tgl_checkin }}</td>
            <td>{{ $pemesanan->tgl_checkout }}</td>

            <td>
                <form action="{{ route('pemesanans.destroy', $pemesanan->id) }}" method="POST">
           
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $pemesanans->links() !!}
        
@endsection