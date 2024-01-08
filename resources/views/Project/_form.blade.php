<div class="form-group">
	{!! Form::label('pjid', 'ID:') !!}
	{!! Form::text('pjid', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('pjname', 'Name:') !!}
	{!! Form::text('pjname', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('pjtype', 'type:') !!}
	{!! Form::text('pjtype', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('pjinfo', 'Info:') !!}
	{!! Form::textarea('pjinfo', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('created_at', 'Created:') !!}
	{!! Form::text('created_at', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('updated_at', 'Updated:') !!}
	{!! Form::text('updated_at', NULL, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
	{!! Form::submit($SubmitButtonText, ['class' => 'fbtn, btn-primary form-control' ]) !!}
</div>