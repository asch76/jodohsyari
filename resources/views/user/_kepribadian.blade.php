<div class="panel panel-default">
    <div class="panel-heading">
        @if (auth()->user()->id == $user->id)
            <a href="" class="pull-right" data-toggle="modal" data-target="#kepribadianModal" style="color:#fff;"><i class="fa fa-edit"></i> Edit</a>
        @endif
        
        KEPRIBADIAN
    </div>
    <table class="table table-striped   table-hover table-bordered">
        <tbody>
            <tr>
                <th class="th-label">Profil Singkat</th>
                <td>{{ $user->profile }}</td>
            </tr>
            <tr>
                <th class="th-label">Karakter Positif</th>
                <td>{{ $user->karakter_positif }}</td>
            </tr>
            <tr>
                <th class="th-label">Karakter Negatif</th>
                <td>{{ $user->karakter_negatif }}</td>
            </tr>
        </tbody>
    </table>
</div>
