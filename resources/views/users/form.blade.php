{{-- Form User Create/Edit --}}
<div class="row">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>User Card</h1>
        </div><!-- panel-heading -->
				
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 col-sm-8"> 

					<div class="form-group">
						{!! Form::label('name', 'Name:', ['class' => 'control-label col-sm-3']) !!}
						<div class="col-sm-9">
							{!! Form::text('name', null, ['class' => 'form-control']) !!}
						</div>
					</div>

					<div class="form-group">
						{!! Form::label('email', 'Email:', ['class' => 'control-label col-sm-3']) !!}
						<div class="col-sm-9">
							{!! Form::email('email', null, ['class' => 'form-control']) !!}
						</div>	
					</div>	

					<div id="pass">	
						<div class="form-group">
							{!! Form::label('password', 'Password:', ['class' => 'control-label col-sm-3']) !!}
							<div class="col-sm-9">
								{!! Form::input('password', 'password', null, ['class' => 'form-control']) !!}
							</div>	
						</div>	
						
						<div class="form-group">
							{!! Form::label('password2', 'Confirm Password:', ['class' => 'control-label col-sm-3']) !!}
							<div class="col-sm-9">
								{!! Form::input('password', 'password2', null, ['class' => 'form-control']) !!}
							</div>	
						</div>	
					</div>
					
					<div class="form-group">
						<div class="col-sm-9">
							{!! Form::file('avatar', ['class' => 'form-control', 'id' => 'userFile']) !!}
						</div>	
					</div>		
					
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-9">
							{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
						</div>
					</div>

				</div>
				
				<div class="col-xs-12 col-sm-4 userPhoto">
					<img id="userImage" src="/media/avatar/{{ $imageSrc }}">
					<p id="userInfo"></p>
				</div>	
				
			</div>	
		</div><!-- panel-body -->		
	</div>					
</div>				
				