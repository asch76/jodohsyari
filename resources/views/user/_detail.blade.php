<!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#biodata" aria-controls="biodata" role="tab" data-toggle="tab">Biodata</a></li>
    <li role="presentation"><a href="#fisik" aria-controls="fisik" role="tab" data-toggle="tab">Fisik & Kesehatan</a></li>
    <li role="presentation"><a href="#kepribadian" aria-controls="kepribadian" role="tab" data-toggle="tab">Kepribadian</a></li>
    <li role="presentation"><a href="#alamat" aria-controls="alamat" role="tab" data-toggle="tab">Alamat & Kontak</a></li>
    <li role="presentation"><a href="#keluarga" aria-controls="keluarga" role="tab" data-toggle="tab">Keluarga</a></li>
    <li role="presentation"><a href="#pendidikan" aria-controls="pendidikan" role="tab" data-toggle="tab">Pendidikan</a></li>
    <li role="presentation"><a href="#pekerjaan" aria-controls="pekerjaan" role="tab" data-toggle="tab">Pekerjaan</a></li>
  </ul>

  <br>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="biodata">
        @if (auth()->check() && auth()->user()->id == $user->id)
            @include('user._form-biodata')
        @endif

        @include('user._biodata')
    </div>
    <div role="tabpanel" class="tab-pane fade" id="fisik">
        @if (auth()->check() && auth()->user()->id == $user->id)
            @include('user._form-fisik')
        @endif

        @include('user._fisik')
    </div>
    <div role="tabpanel" class="tab-pane fade" id="kepribadian">
        @if (auth()->check() && auth()->user()->id == $user->id)
            @include('user._form-kepribadian')
        @endif

        @include('user._kepribadian')
    </div>
    <div role="tabpanel" class="tab-pane fade" id="alamat">
        @if (auth()->check() && auth()->user()->id == $user->id)
            @include('user._form-alamat')
        @endif

        @include('user._alamat')
    </div>
    <div role="tabpanel" class="tab-pane fade" id="pendidikan">
        @if (auth()->check() && auth()->user()->id == $user->id)
            @include('user._form-pendidikan')
        @endif

        @include('user._pendidikan')
    </div>
    <div role="tabpanel" class="tab-pane fade" id="pekerjaan">
        @if (auth()->check() && auth()->user()->id == $user->id)
            @include('user._form-pekerjaan')
        @endif

        @include('user._pekerjaan')
    </div>
    <div role="tabpanel" class="tab-pane fade" id="keluarga">
        @if (auth()->check() && auth()->user()->id == $user->id)
            @include('user._form-keluarga')
        @endif

        @include('user._keluarga')
    </div>
  </div>
