       <!DOCTYPE html>
       <html lang="en">
       <head>
           <meta charset="UTF-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta http-equiv="X-UA-Compatible" content="ie=edge">
           <title>Tambah Penerbit</title>
       </head>
       <body>
        <form action="/penerbit/store" method="post">
        {{csrf_field()}}
        <div class="form-group {{ $errors->has('penerbit') ?
        'has-error' : '' }}">
        <label for="penerbit" class="control-label">Penerbit</label>
        <input type="text" class="form-control" name="penerbit"
        placeholder="penerbit">
        @if ($errors->has('penerbit'))
        <span class="help-block">{{ $errors->first('penerbit') }}
        </span>
        @endif
        </div>
        <div class="form-group">
            <div class="form-group {{ $errors->has('alamat') ?
                'has-error' : '' }}">
                <label for="alamat" class="control-label">Alamat</label>
                <input type="text" class="form-control" name="alamat"
                placeholder="alamat">
                @if ($errors->has('alamat'))
                <span class="help-block">{{ $errors->first('alamat') }}
                </span>
                @endif
                </div>
                <div class="form-group">
                    <div class="form-group {{ $errors->has('telepon') ?
                        'has-error' : '' }}">
                        <label for="telepon" class="control-label">Telepon</label>
                        <input type="text" class="form-control" name="telepon"
                        placeholder="telepon">
                        @if ($errors->has('telepon'))
                        <span class="help-block">{{ $errors->first('telepon') }}
                        </span>
                        @endif
                        </div>
                        <div class="form-group">
                            <div class="form-group {{ $errors->has('e_mail') ?
                                'has-error' : '' }}">
                                <label for="e_mail" class="control-label">Email</label>
                                <input type="text" class="form-control" name="e_mail"
                                placeholder="e_mail">
                                @if ($errors->has('e_mail'))
                                <span class="help-block">{{ $errors->first('e_mail') }}
                                </span>
                                @endif
                                </div>
                                <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="/penerbit"
        class="btn btn-default">Kembali</a>
        </div>
        </form>    
       </body>
       </html>