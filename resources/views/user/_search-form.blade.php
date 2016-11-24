<div class="panel panel-default">
    <div class="panel-heading">
        KRITERIA JODOH
    </div>
    <div class="panel-body">
        {!! Form::open(['method' => 'GET', 'class' => 'form-vertical']) !!}
            <div class="form-group">
                <label>Status</label><br>
                @foreach (\App\User::statusPernikahan('Ikhwan') as $k => $v)
                <input type="checkbox" name="status_pernikahan" value="{{ $k }}"> {{ $v }} <br>
                @endforeach
            </div>
            <div class="form-group">
                <label>Golongan Darah</label><br>
                <input type="checkbox" name="golongan_darah" value="A"> A
                <input type="checkbox" name="golongan_darah" value="B"> B
                <input type="checkbox" name="golongan_darah" value="AB"> AB
                <input type="checkbox" name="golongan_darah" value="O"> O
            </div>
        {!! Form::close() !!}
    </div>
</div>
