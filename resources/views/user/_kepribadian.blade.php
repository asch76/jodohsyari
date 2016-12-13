<div class="panel panel-default">
    <div class="panel-heading">
        @if (auth()->check() && auth()->user()->id == $user->id)
            <a href="" class="pull-right" data-toggle="modal" data-target="#kepribadianModal" style="color:#fff;"><i class="fa fa-edit"></i> Edit</a>
        @endif

        KEPRIBADIAN
    </div>
    <div class="panel-body">
        <h4>Profil Singkat</h4>
        <p> {{ $user->profile }} </p>
        <h4>Karakter Positif</h4>
        <p> {{ $user->karakter_positif }} </p>
        <h4>Karakter Negatif</h4>
        <p> {{ $user->karakter_negatif }} </p>
    </div>
    <!-- <table class="table table-striped table-hover">
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
    </table> -->
</div>
