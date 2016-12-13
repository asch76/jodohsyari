<div class="panel panel-default">
    <div class="panel-heading">

        @if (auth()->check() && auth()->user()->id == $user->id)
            <a href="" class="pull-right" data-toggle="modal" data-target="#biodataModal" style="color:#fff;">
                <i class="fa fa-edit"></i> Edit
            </a>
        @endif

        BIODATA
    </div>
    <table class="table table-striped table-hover">
        <tbody>
            <tr>
                <th class="th-label">Nama Lengkap</th>
                <td>{{ $user->nama_lengkap }} ({{ $user->nama_panggilan }})</td>
            </tr>
            <tr>
                <th class="th-label">Nama Panggilan</th>
                <td>{{ $user->nama_panggilan }}</td>
            </tr>
            <tr>
                <th class="th-label">Nomor Identitas</th>
                <td>{{ $user->nomor_identitas }}</td>
            </tr>
            <tr>
                <th class="th-label">Suku</th>
                <td>{{ $user->suku }}</td>
            </tr>
            <tr>
                <th class="th-label">Negara Asal</th>
                <td>{{ $user->negara_asal }}</td>
            </tr>
            <tr>
                <th class="th-label">Tempat / Tanggal Lahir</th>
                <td>{{ $user->tempat_lahir }} / {{ $user->tanggal_lahir->formatLocalized('%d %B %Y') }}</td>
            </tr>
            <tr>
                <th class="th-label">Umur</th>
                <td>{{ $user->umur }} tahun</td>
            </tr>
            <tr>
                <th class="th-label">Pendidikan Terakhir</th>
                <td>{{ $user->pendidikan_terakhir }}</td>
            </tr>
            <tr>
                <th class="th-label">Pekerjaan</th>
                <td>{{ $user->pekerjaan }}</td>
            </tr>
            <tr>
                <th class="th-label">Status Pernikahan</th>
                <td>{{ $user->status_pernikahan }}</td>
            </tr>
            @if ($user->jumlah_anak > 0)
            <tr>
                <th class="th-label">Jumlah Anak</th>
                <td>{{ $user->jumlah_anak }}</td>
            </tr>
            @endif

        </tbody>
    </table>
</div>
