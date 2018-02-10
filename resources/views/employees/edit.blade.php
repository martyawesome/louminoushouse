@extends('base')
@section('content')
  <section class="content-header">
    <h1>
      Employee
      <small>Employees</small>
    </h1>
    <ol class="breadcrumb">
      <li><i class="fa fa-user" style="margin-right:5px;"></i>Employees</li>
      <li class="active">Employee</li>
    </ol>
  </section>
  <section class="content">
    {!! Form::model($employee) !!}
      @include('employees.add_edit')
      <div class="box-footer">
        {!! Form::submit('Save', ['class' => 'btn btn-primary'])!!}
      </div>
    {!! Form::close() !!}
  </section>
@stop