<!-- Modal Register -->
<div class="modal fade" id="myModal_Register" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Register</h4>
			</div>
			<div class="modal-body">

				<form id="formRegister" class="form-horizontal" role="form"
					method="POST" action="{{ url('/register') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label class="col-md-4 control-label">Name</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="name"> <small
								class="help-block"> </small>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">E-Mail Address</label>
						<div class="col-md-6">
							<input type="email" class="form-control" name="email"> <small
								class="help-block"></small>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-4 control-label">Username</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="username"> <small
								class="help-block"></small>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">Password</label>
						<div class="col-md-6">
							<input type="password" class="form-control" name="password"> <small
								class="help-block"></small>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">Confirm Password</label>
						<div class="col-md-6">
							<input type="password" class="form-control"
								name="password_confirmation">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>

<!-- Modal Login-->
<div class="modal fade" id="myModal_Login" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Login</h4>
			</div>
			<div class="modal-body">

				<form id="formLogin" class="form-horizontal" role="form"
					method="POST" action="{{ url('/login') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label class="col-md-4 control-label">Username or Email</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="loginname"> <small
								class="help-block"></small>
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">Password</label>
						<div class="col-md-6">
							<input type="password" class="form-control" name="password"> <small
								class="help-block"> </small>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
