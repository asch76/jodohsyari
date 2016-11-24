<div class="panel panel-default">
    <div class="panel-heading">
        @if (auth()->user()->id == $user->id)
            <a href="#" class="pull-right" data-toggle="modal" data-target="#pekerjaanModal" style="color:#fff;"><i class="fa fa-plus"></i> Tambah</a>
        @endif

        RIWAYAT PEKERJAAN
    </div>
    <table class="table table-striped   table-hover table-bordered">
        <thead>
            <tr>
                <th>Perusahaan</th>
                <th>Jabatan</th>
                <th>Tahun</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user->pekerjaans as $p)
            <tr>
                <td>{{ $p->perusahaan }}</th>
                <td>{{ $p->jabatan }}</th>
                <td>{{ $p->dari_tahun }} - {{ $p->sampai_tahun }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
