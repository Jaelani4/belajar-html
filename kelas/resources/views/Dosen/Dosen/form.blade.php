<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nip') }}
            {{ Form::text('nip', $dosen->nip, ['class' => 'form-control' . ($errors->has('nip') ? ' is-invalid' : ''), 'placeholder' => 'Nip']) }}
            {!! $errors->first('nip', '<div class="invalidfeedback">:message</p>
            </div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('nama') }}
            {{ Form::text('nama', $dosen->nama, ['class' => 'form-control' . ($errors->has('nama') ? ' is-invalid' : ''), 'placeholder' => 'Nama']) }}
            {!! $errors->first('nama', '<div class="invalidfeedback">:message</p>
            </div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('tanggal lahir') }}
            {{ Form::date('tgl_lahir', $dosen->tgl_lahir, ['class' => 'form-control' . ($errors->has('tgl_lahir') ? ' is-invalid' : ''), 'placeholder' => 'Tanggal Lahir']) }}
            {!! $errors->first('tgl_lahir', '<div class="invalidfeedback">:message</p>
            </div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('alamat') }}
            {{ Form::text('alamat', $dosen->alamat, ['class' => 'form-control' . ($errors->has('alamat') ? ' is-invalid' : ''), 'placeholder' => 'Alamat']) }}
            {!! $errors->first('alamat', '<div class="invalidfeedback">:message</p>
            </div>') !!}
        </div>

        <div class="form-group">
            {!! Form::label('jk','Jenis Kelamin') !!}<br>
            <div class="col-lg-10">
                {!! Form::label('L', 'Laki-Laki') !!}
                {!! Form::radio('jk', 'L', true, ['id' => 'L']) !!}
                {!! Form::label('P', 'Perempuan') !!}
                {!! Form::radio('jk', 'P', false, ['id' => 'P']) !!}
            </div>
        </div>

        <br>

        <div class="form-group">
            {!! Form::label('golongan', 'Golongan', ['class' => 'col-lg-2 control-label'] ) !!}<br>
            {!! Form::select('golongan', ['III/a' => 'III/a', 'III/b' => 'III/b', 'III/c' => 'III/c', 'III/d' => 'III/d'], 'III/a', ['class' => 'form-control' ]) !!}
        </div>

        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $dosen->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalidfeedback">:message</p>
            </div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
</div>
