@extends('layout/aplikasi')

@section('konten')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

   <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->email}}</td>
                </tr>
            @endforeach
        </tbody>
   </table>
@endsection