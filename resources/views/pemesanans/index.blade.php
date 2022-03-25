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