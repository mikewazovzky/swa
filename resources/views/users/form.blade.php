
<div class="row">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h1>User Card</h1>
        </div>
				
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 col-sm-8 separator form"> 
				
					<div class="form-horizontal">

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
<!---------------------------------- Make a password check optional via checkbox ---------------------------------------------						
						<div class="form-group" id="updatepass">
							{!! Form::label('checkbox', 'Update Password:', ['class' => 'control-label col-sm-3']) !!}
							<div class="col-sm-9">
								{!! Form::checkbox('checkbox', 'value') !!}
							</div>	
						</div>							
------------------------------------------------------------------------------------------------------------------------------->
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
								{!! Form::file('avatar', ['class' => 'form-control', 'id' => 'fileSelect']) !!}
							</div>	
						</div>		
						
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
							</div>
						</div>

					</div>	

				</div>
				
				<div class="col-xs-12 col-sm-4 photo">
					<img id="userImg" src="/media/avatar/{{ $imageSrc }}">
					<p id="info"></p>
				</div>	
				
			</div>	
		</div>		
	</div>					
</div>				
				