<div class="panel panel-default">
    <div class="panel-heading">

        @if (auth()->user()->id == $user->id)
            <a href="#" class="pull-right" data-toggle="modal" data-target="#keluargaModal" style="color:#fff;"><i class="fa fa-edit"></i> Edit</a>
        @endif

        KELUARGA
    </div>
    <table class="table table-striped   table-hover table-bordered">
        <tbody>
            <tr>
                <th class="th-label">Nama Ayah</th>
                <td>{{ $user->nama_ayah }}</td>
            </tr>
            <tr>
                <th class="th-label">Nama Ibu</th>
                <td>{{ $user->nama_ibu }}</td>
            </tr>
            <tr>
                <th class="th-label">Jumlah Saudara</th>
                <td>{{ $user->jumlah_saudara }}</td>
            </tr>
            <tr>
                <th class="th-label">Anak Ke</th>
                <td>{{ $user->anak_ke }}</td>
            </tr>
        </tbody>
    </table>
</div>
