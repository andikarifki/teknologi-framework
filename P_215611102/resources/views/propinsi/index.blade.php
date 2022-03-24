@extends('layouts.app')
@section('content')
<h4>Menajemen Tabel Propinsi</h4>
<a href= "/propinsi/create" class="btn btn-info btn-sm">Propinsi Baru</a>
@if ($message = Session::get('message'))
<div class="alert alert-success martop-sm">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-responsive martop-sm">

<thead>
<th>ID</th>
<th>Propinsi</th>
<th>Action</th>
</thead>
<tbody>
@foreach ($propinsi as $p)
<tr>
<td>{{ $p->id }}</td>
<td><a href="/propinsi/show/{{$p->id}}">
{{ $p->propinsi }}</a></td>
<td>
<a href="/propinsi/edit/{{ $p->id }}">Edit</a>
<a href="/propinsi/destroy/{{ $p->id }}">Hapus</a>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
@endsection
