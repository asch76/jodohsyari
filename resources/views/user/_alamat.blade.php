<div class="panel panel-default">
    <div class="panel-heading">

        @if (auth()->user()->id == $user->id)
            <a href="" class="pull-right" data-toggle="modal" data-target="#alamatModal" style="color:#fff;"><i class="fa fa-edit"></i> Edit</a>
        @endif

        ALAMAT & KONTAK

    </div>
    <table class="table table-striped   table-hover table-bordered">
        <tbody>
            <tr>
                <th class="th-label">Alamat</th>
                <td>{{ $user->alamat }}</td>
            </tr>
            <tr>
                <th class="th-label">HP</th>
                <td>{{ $user->hp }}</td>
            </tr>
            <tr>
                <th class="th-label">Telepon</th>
                <td>{{ $user->telepon }}</td>
            </tr>
            <tr>
                <th class="th-label">Email</th>
                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
            </tr>
            <tr>
                <th class="th-label">Facebook</th>
                <td><a href="{{ $user->fb }}" target="_blank">{{ $user->fb }}</a></td>
            </tr>
            <tr>
                <th class="th-label">Twitter</th>
                <td><a href="{{ $user->twitter }}" target="_blank">{{ $user->twitter }}</a></td>
            </tr>
        </tbody>
    </table>
</div>
