<!--- Ci Field --->
<div class="form-group">
    {!! Form::label('Ci', 'Ci:',['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
    {!! Form::text('Ci', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!--- Nombres Field --->
<div class="form-group">
    {!! Form::label('Nombres', 'Nombres:',['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
    {!! Form::text('Nombres', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!--- Direccion Field --->
<div class="form-group">
    {!! Form::label('Direccion', 'Direccion:',['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
    {!! Form::text('Direccion', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!--- Cargo Field --->
<div class="form-group">
    {!! Form::label('Cargo', 'Cargo:',['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
    {!! Form::text('Cargo', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!--- Telefono Field --->
<div class="form-group">
    {!! Form::label('Telefono', 'Telefono:',['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-7">
    {!! Form::text('Telefono', null, ['class' => 'form-control']) !!}
    </div>
</div>

<!--- Idrestaurant Field 
<div class="form-group">
    {!! Form::label('idRestaurant', 'Idrestaurant:') !!}
    {!! Form::text('idRestaurant', null, ['class' => 'form-control']) !!}
</div>
--->


<!--- Submit Field --->
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
</div>