@extends('layout.master')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Fasilitas Umum</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('fasilitasumums.create') }}"> Create</a>
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
            <th>Nama Fasilitas Umum</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($fasilitasumums as $fasilitasumum)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $fasilitasumum->nama_umum }}</td>
            <td>{{ $fasilitasumum->ket }}</td>
            <td>
                <form action="{{ route('fasilitasumums.destroy', $fasilitasumum->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('fasilitasumums.edit',$fasilitasumum->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $fasilitasumums->links() !!}
        
@endsection