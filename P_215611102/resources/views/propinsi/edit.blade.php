@extends('layouts.app')
@section('content')
<h4>Ubah Propinsi</h4>
<form action="/propinsi/update/{{ $propinsi->id }}"
method="post">
{{csrf_field()}}
<div class="form-group {{ $errors->has('propinsi') ?
'has-error' : '' }}">
<label for="propinsi" class="control-label">Propinsi</label>

<input type="text" class="form-control" name="propinsi"
placeholder="Propinsi" value="{{ $propinsi->propinsi }}">

@if ($errors->has('propinsi'))
<span class="help-block">{{ $errors->first('propinsi') }}
</span>
@endif
</div>
<div class="form-group">
<button type="submit" class="btn btn-info">Simpan</button>
<a href="/propinsi/index"
class="btn btn-default">Kembali</a>
</div>
</form>
@endsection