<div class="panel panel-default">
    <div class="panel-heading">
        @if (auth()->check() && auth()->user()->id == $user->id)
            <a href="" class="pull-right" data-toggle="modal" data-target="#fisikModal" style="color:#fff;"><i class="fa fa-edit"></i> Edit</a>
        @endif

        FISIK & KESEHATAN
    </div>
    <table class="table table-striped table-hover">
        <tbody>
            <tr>
                <th class="th-label">Berat Badan</th>
                <td>{{ $user->berat_badan }} kg</td>
            </tr>
            <tr>
                <th class="th-label">Tinggi Badan</th>
                <td>{{ $user->tinggi_badan }} cm</td>
            </tr>
            <tr>
                <th class="th-label">Warna Kulit</th>
                <td>{{ $user->warna_kulit }}</td>
            </tr>
            <tr>
                <th class="th-label">Golongan Darah</th>
                <td>{{ $user->golongan_darah }}</td>
            </tr>
            <tr>
                <th class="th-label">Riwayat Penyakit</th>
                <td>{{ $user->riwayat_penyakit }}</td>
            </tr>
        </tbody>
    </table>
</div>
