@extends('layout.master')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Kamar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kamars.create') }}"> Create</a>
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
            <th>Tipe Kamar</th>
            <th>Jumlah Kamar</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kamars as $kamar)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kamar->tipe_kamar }}</td>
            <td>{{ $kamar->jumlah_kamar }}</td>
            <td>
                <form action="{{ route('kamars.destroy', $kamar->id) }}" method="POST">
           
                    <a class="btn btn-primary" href="{{ route('kamars.edit',$kamar->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $kamars->links() !!}
        
@endsection