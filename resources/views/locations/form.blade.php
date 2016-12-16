<div class="row">
	<div class="col-sm-8">
	
		<div class="form-group">
			{!! Form::label('title', 'Title:', ['class' => 'control-label col-sm-3']) !!}
			<div class="col-sm-9">
				{!! Form::text('title', null, ['class' => 'form-control']) !!}
			</div>	
		</div>	
		
		<div class="form-group">
			{!! Form::label('published_at', 'Published:',  ['class' => 'control-label col-sm-3']) !!}
			<div class="col-sm-9">			
				{!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
			</div>				
		</div>	
		
		{!! Form::file('image', ['class' => 'form-control', 'id' => 'locationImageFile']) !!}
		
		<div class="form-group">		
			{!! Form::label('page', 'Page:', ['class' => 'control-label col-sm-3']) !!}
			<div class="col-sm-9">		
				{!! Form::file('page', ['class' => 'form-control', 'id' => 'locationPageFile']) !!}
				{!! Form::button('Select File to Upload', ['class' => 'btn btn-primary form-control', 'id' => 'locationPageButton']) !!}
			</div>	
		</div>
		
		<div class="form-group">		
			{!! Form::label('label', 'Selected:', ['class' => 'control-label col-sm-3']) !!}
			<div class="col-sm-9">	
				{!! Form::label('label', $page, ['class' => 'form-control', 'id' => 'locationPageLabel']) !!}
			</div>					
		</div>
		
	</div>
	
	<div class="col-sm-4">
	
		<img id="locationImage" src="/media/{{ $image }}" class="center-block" style="max-height:200px;">
		<p id="locationInfo" style="text-align: center"></p>
		
	</div>	
</div>
		
<div class="row">
	<div class="col-sm-12">	
	
		<div class="form-group">
			{!! Form::label('description', 'Description:', ['class' => 'control-label col-sm-2']) !!}
			<div class="col-sm-10">		
				{!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '2']) !!}
			</div>			
		</div>	
		
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
			</div>
		</div>	
		
	</div>
</div>

<hr>
<div id="locationPageContent" class="container">
	{!! $contents !!}
</div>