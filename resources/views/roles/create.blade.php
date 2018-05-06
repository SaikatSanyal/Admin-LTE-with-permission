@extends('layouts.dashboard')
@section('title', 'Roles')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Roles
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Roles</a></li>
            <li class="active">List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Quick Example</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->

                    {!! Form::open(['route'=>'roles.store']) !!}

                    <div class="box-body">
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="exampleInputEmail1">Name</label>
                            {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control']) !!}
                            @if($errors->has('name'))
                            <div class="help-block">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-grou">
                            <label for="permission">Permissions</label>
                            {!! Form::select('permissions[]', $permissions, null, ['id'=>'permissions', 'class' => 'form-control', 'multiple' => true]) !!}
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
@push('scripts')
<script>
$("#permissions").select2({
    width: "100%",
    placeholder: 'Select Permissions'
})

</script>
@endpush
