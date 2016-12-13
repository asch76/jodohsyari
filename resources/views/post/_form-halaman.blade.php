{!! Form::model($post, ['url' => $url, 'method' => $method, 'files' => true, 'class' => 'form-vertical']) !!}

<div class="row">
	<div class="col-md-9">
		<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
			{{ Form::text('title', $post->title, ['class' => 'form-control input-lg', 'placeholder' => 'Title', 'required' => 'required']) }}

			@if ($errors->has('title'))
			<span class="help-block">
				<strong>{{ $errors->first('title') }}</strong>
			</span>
			@endif
		</div>

		<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
			{{ Form::textarea('content', $post->content, ['class' => 'form-control summernote', 'placeholder' => 'Content', 'rows' => 20]) }}

			@if ($errors->has('content'))
			<span class="help-block">
				<strong>{{ $errors->first('content') }}</strong>
			</span>
			@endif
		</div>
	</div>

	<div class="col-md-3">
		<div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
			@if ($post->img)
				<img src="{{ $post->img }}" alt="" class="img-responsive thumbnail" />
			@endif

			<input type="file" name="img" class="note-image-input form-control" placeholder="Thumbnail">
			@if ($errors->has('img'))
			<span class="help-block">
				<strong>{{ $errors->first('img') }}</strong>
			</span>
			@endif
		</div>

		<div class="form-group{{ $errors->has('kategori') ? ' has-error' : '' }}">
			{{ Form::text('kategori', $post->kategori, ['class' => 'form-control', 'placeholder' => 'Kategori', 'required' => 'required']) }}

			@if ($errors->has('kategori'))
			<span class="help-block">
				<strong>{{ $errors->first('kategori') }}</strong>
			</span>
			@endif
		</div>

		<input type="hidden" name="type" value="halaman">

		<div class="form-group{{ $errors->has('slide') ? ' has-error' : '' }}">
			{{ Form::select('slide', [0 => 'Tampilkan di Slider [Tidak]', 1 => 'Tampilkan di Slider [Ya]'], $post->slide, ['class' => 'form-control']) }}

			@if ($errors->has('slide'))
			<span class="help-block">
				<strong>{{ $errors->first('slide') }}</strong>
			</span>
			@endif
		</div>

		<div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
			{{ Form::select('status', [0 => 'Draft', 1 => 'Published', 2 => 'Archived'], $post->status, ['class' => 'form-control', 'placeholder' => '-- Select Status --']) }}

			@if ($errors->has('status'))
			<span class="help-block">
				<strong>{{ $errors->first('status') }}</strong>
			</span>
			@endif
		</div>

		<button type="sumbit" name="save" class="btn btn-primary">SAVE</button>
	</div>
</div>

{!! Form::close() !!}
