<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cliente') }}
            {{ Form::text('cliente', $contribution->cliente, ['class' => 'form-control' . ($errors->has('cliente') ? ' is-invalid' : ''), 'placeholder' => 'Cliente']) }}
            {!! $errors->first('cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deleted_mail') }}
            {{ Form::text('deleted_mail', $contribution->deleted_mail, ['class' => 'form-control' . ($errors->has('deleted_mail') ? ' is-invalid' : ''), 'placeholder' => 'Deleted Mail']) }}
            {!! $errors->first('deleted_mail', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('free_mb') }}
            {{ Form::text('free_mb', $contribution->free_mb, ['class' => 'form-control' . ($errors->has('free_mb') ? ' is-invalid' : ''), 'placeholder' => 'Free Mb']) }}
            {!! $errors->first('free_mb', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>