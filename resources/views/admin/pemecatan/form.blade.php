<div class="form-group {{ $errors->has('nama_lengkap') ? 'has-error' : ''}}">
    <label for="nama_lengkap" class="control-label">{{ 'Nama Lengkap' }}</label>
    <input class="form-control" name="nama_lengkap" type="text" id="nama_lengkap" value="{{ isset($pemecatan->nama_lengkap) ? $pemecatan->nama_lengkap : ''}}" >
    {!! $errors->first('nama_lengkap', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('employees_id') ? 'has-error' : ''}}">
    <label for="employees_id" class="control-label">{{ 'Employees Id' }}</label>
    <input class="form-control" name="employees_id" type="number" id="employees_id" value="{{ isset($pemecatan->employees_id) ? $pemecatan->employees_id : ''}}" >
    {!! $errors->first('employees_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('tanggal') ? 'has-error' : ''}}">
    <label for="tanggal" class="control-label">{{ 'Tanggal' }}</label>
    <input class="form-control" name="tanggal" type="date" id="tanggal" value="{{ isset($pemecatan->tanggal) ? $pemecatan->tanggal : ''}}" >
    {!! $errors->first('tanggal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alasan_pemecatan') ? 'has-error' : ''}}">
    <label for="alasan_pemecatan" class="control-label">{{ 'Alasan Pemecatan' }}</label>
    <input class="form-control" name="alasan_pemecatan" type="text" id="alasan_pemecatan" value="{{ isset($pemecatan->alasan_pemecatan) ? $pemecatan->alasan_pemecatan : ''}}" >
    {!! $errors->first('alasan_pemecatan', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
