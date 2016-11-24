<div class="col-md-3">
    <a href="/user/{{ $u->id }}">
        <div class="thumbnail text-center">
            <div style="height:180px;">
                <img src="{{ $u->foto }}" class="cover" />
            </div>
            <div class="caption" style="background:#fff;">
                <strong>{{ $u->nama_lengkap }}</strong><br>
                {{ $u->pekerjaan }}<br>
                <small>
                    {{ $u->suku }} / {{ $u->umur }} / {{ $u->status_pernikahan }}
                    @if ($u->jumlah_anak > 0)
                        / {{ $u->jumlah_anak }} anak
                    @endif
                </small>
            </div>
        </div>
    </a>
</div>
