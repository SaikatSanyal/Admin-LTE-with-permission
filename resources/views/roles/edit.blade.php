<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Role</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            {!! Form::open(['route'=>'roles.edit']) !!}

            <div class="box-body">
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="exampleInputEmail1">Name</label>
                    {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control']) !!}
                    @if($errors->has('name'))
                    <div class="help-block">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="permission">Permissions</label>
                    {!! Form::text('name', null, ['$id'=>'id','class'=>'form-group']) !!}

                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
