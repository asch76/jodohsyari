<div class="panel panel-default">
    <div class="panel-heading">
        @if (auth()->check() && auth()->user()->id == $user->id)
            <a href="#" class="pull-right" data-toggle="modal" data-target="#pendidikanModal" style="color:#fff;"><i class="fa fa-plus"></i> Tambah</a>
        @endif

        RIWAYAT PENDIDIKAN
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Nama Sekolah</th>
                <th>Jurusan</th>
                <th>Tahun Lulus</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($user->pendidikans as $p)
            <tr>
                <td>{{ $p->nama_sekolah }}</th>
                <td>{{ $p->jurusan }}</th>
                <td>{{ $p->tahun_lulus }}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
