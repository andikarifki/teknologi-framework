<!DOCTYPE html>
       <html lang="en">
       <head>
           <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta http-equiv="X-UA-Compatible" content="ie=edge">
           <title>Tambah Buku</title>
       </head>
       <body>
        <title>Tambah Buku</title>
        <form action="/buku/store" method="post">
        {{csrf_field()}}
        <div class="form-group {{ $errors->has('judul') ?
        'has-error' : '' }}">
        <label for="judul" class="control-label">Judul Buku</label>
        <input type="text" class="form-control" name="judul"
        placeholder="judul">
        @if ($errors->has('judul'))
        <span class="help-block">{{ $errors->first('judul') }}
        </span>
        @endif
        </div>
        <div class="form-group">
            <div class="form-group {{ $errors->has('tahun_terbit') ?
                'has-error' : '' }}">
                <label for="tahun_terbit" class="control-label">Tahun Terbit</label>
                <input type="text" class="form-control" name="tahun_terbit"
                placeholder="tahun_terbit">
                @if ($errors->has('tahun_terbit'))
                <span class="help-block">{{ $errors->first('tahun_terbit') }}
                </span>
                @endif
                </div>
                <div class="form-group">
                    <div class="form-group {{ $errors->has('id_penerbit') ?
                        'has-error' : '' }}">
                    <label for="id_penerbit" class="control-label">Penerbit</label>
                        <select id="penerbit"
                        name="id_penerbit" class="form-control">
                        @foreach($brs as $stat)
                        <option value="{{$stat->id}}">{{$stat->penerbit}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('id_penerbit'))
                    <span class="help-block">{{ $errors->first('id_penerbit') }}
                    </span>
                    @endif
                <div class="form-group">
                    <div class="form-group {{ $errors->has('pengarang') ?
                        'has-error' : '' }}">
                        <label for="pengarang" class="control-label">Pengarang</label>
                        <input type="text" class="form-control" name="pengarang"
                        placeholder="pengarang">
                        @if ($errors->has('pengarang'))
                        <span class="help-block">{{ $errors->first('pengarang') }}
                        </span>
                        @endif
                        </div>
                        
                        <div class="form-group">
                            <div class="form-group {{ $errors->has('jumlah_hal') ?
                                'has-error' : '' }}">
                                <label for="jumlah_hal" class="control-label">Jumlah Halaman</label>
                                <input type="text" class="form-control" name="jumlah_hal"
                                placeholder="jumlah_hal">
                                @if ($errors->has('jumlah_hal'))
                                <span class="help-block">{{ $errors->first('jumlah_hal') }}
                                </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <div class="form-group {{ $errors->has('sampul') ?
                                        'has-error' : '' }}">
                                        <label for="sampul" class="control-label">Sampul</label>
                                        <input type="text" class="form-control" name="sampul"
                                        placeholder="sampul">
                                        @if ($errors->has('sampul'))
                                        <span class="help-block">{{ $errors->first('sampul') }}
                                        </span>
                                        @endif
                                        </div>
                                <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="/buku"
        class="btn btn-default">Kembali</a>
        </div>
        </form>    
       </body>
       </html>