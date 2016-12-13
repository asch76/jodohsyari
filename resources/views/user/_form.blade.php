{!! Form::model($user, ['url' => $url, 'method' => $method, 'files' => true, 'class' => 'form-horizontal']) !!}

	<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		<label for="name" class="control-label col-sm-4">Name</label>
		<div class="col-sm-4">
			{{ Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name']) }}

			@if ($errors->has('name'))
			<span class="help-block">
				<strong>{{ $errors->first('name') }}</strong>
			</span>
			@endif
		</div>
	</div>

	<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
		<label for="email" class="control-label col-sm-4">Email</label>
		<div class="col-sm-4">
			{{ Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email']) }}

			@if ($errors->has('email'))
			<span class="help-block">
				<strong>{{ $errors->first('email') }}</strong>
			</span>
			@endif
		</div>
	</div>

	<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
		<label for="role" class="control-label col-sm-4">Role</label>
		<div class="col-sm-4">
			{{ Form::select('role', ['member' => 'Member', 'admin' => 'Admin'], $user->role, ['class' => 'form-control', 'placeholder' => '-- Select Role --']) }}

			@if ($errors->has('role'))
			<span class="help-block">
				<strong>{{ $errors->first('role') }}</strong>
			</span>
			@endif
		</div>
	</div>

	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
		<label for="password" class="control-label col-sm-4">Password</label>
		<div class="col-sm-4">
			{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}

			@if ($errors->has('password'))
			<span class="help-block">
				<strong>{{ $errors->first('password') }}</strong>
			</span>
			@endif
		</div>
	</div>

	<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
		<label for="password_confirmation" class="control-label col-sm-4">Password Confirmation</label>
		<div class="col-sm-4">
			{{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password Confirmation']) }}

			@if ($errors->has('password_confirmation'))
			<span class="help-block">
				<strong>{{ $errors->first('password_confirmation') }}</strong>
			</span>
			@endif
		</div>
	</div>

	<div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
		<label for="foto" class="control-label col-sm-4">Foto</label>
		<div class="col-sm-4">
			<input type="file" name="foto" class="note-image-input form-control" placeholder="Foto">
			@if ($errors->has('foto'))
			<span class="help-block">
				<strong>{{ $errors->first('foto') }}</strong>
			</span>
			@endif

			@if ($user->foto)
			<br>
			<img src="{{ $user->foto }}" alt="" class="img-responsive" style="width:200px;" />
			@endif
		</div>
	</div>

	<div class="form-group">
		<label for="verified" class="control-label col-sm-4">Verified</label>
		<div class="col-sm-4">
			<input type="checkbox" name="verified" value="1" @if($user->verified) checked @endif> Yes
		</div>
	</div>

	<div class="form-group">
		<label for="active" class="control-label col-sm-4">Active</label>
		<div class="col-sm-4">
			<input type="checkbox" name="active" value="1" @if($user->active) checked @endif> Yes
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-4">
			<button type="sumbit" name="save" class="btn btn-primary">
				<i class="fa fa-save"></i> SAVE
			</button>
		</div>
	</div>
{!! Form::close() !!}
