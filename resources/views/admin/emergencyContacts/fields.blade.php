<!-- Full Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Full Name Am Field -->
<div class="form-group col-sm-12">
    {!! Form::label('full_name_am', 'Full Name Am:') !!}
    {!! Form::text('full_name_am', null, ['class' => 'form-control']) !!}
</div>

<!-- Relationship Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('relationship_id', 'Relationship Id:') !!}
    {!! Form::text('relationship_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Mobile Field -->
<div class="form-group col-sm-12">
    {!! Form::label('mobile', 'Mobile:') !!}
    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.emergencyContacts.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
