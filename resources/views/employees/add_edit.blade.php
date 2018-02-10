<div class="box box-primary" >
  <div class="row">
    <div class="col-md-4 col-xs-12">
      <div class="box-body">
        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
          {!! Form::label('first_name', 'First Name*'); !!}
          {!! Form::text('first_name', old('first_name',$employee->first_name), ['class' => 'form-control']) !!}
          {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group">
          {!! Form::label('middle_name', 'Middle Name'); !!}
          {!! Form::text('middle_name', old('middle_name',$employee->middle_name), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
          {!! Form::label('last_name', 'Last Name*'); !!}
          {!! Form::text('last_name', old('last_name',$employee->last_name), ['class' => 'form-control']) !!}
          {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group">
          {!! Form::label('employee_type', 'Employee Type'); !!}
          {!! Form::select('employee_type', $employee_types, $employee->employee_type_id, ['class' => 'form-control']) !!}
        </div>
      </div> 
    </div>
    <div class="col-md-4 col-xs-12">
      <div class="box-body">
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <label>Email</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
            {!! Form::email('email', old('email',$employee->email), ['class' => 'form-control'])!!}
          </div>  
          {!! $errors->first('email', '<span class="help-block">:message</span>') !!} 
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          {!! Form::label('password', 'Password'); !!}
          {!! Form::password('password', ['class'=>'form-control']) !!}
          {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          {!! Form::label('password_confirmation', 'Confirm Password'); !!}
          {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
          {!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group">
          {!! Form::label('sex', 'Sex'); !!}
          {!! Form::select('sex', array('Male' => 'Male', 'Female' => 'Female'), $employee->sex, ['class' => 'form-control']); !!}
        </div>
        
      </div> 
    </div>
    <div class="col-md-4 col-xs-12">
      <div class="box-body">
        <!-- Date mm/dd/yyyy -->
        <div class="form-group {{ $errors->has('birthdate') ? ' has-error' : '' }}">
          {!! Form::label('birthdate', 'Birthdate (yyyy-mm-dd)*'); !!}
          {!! Form::text('birthdate', old('birthdate',$employee->birthdate), ['class' => 'form-control pull-right', 'style' => 'margin-bottom:10px;']) !!}
          {!! $errors->first('birthdate', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
          {!! Form::label('address', 'Address*'); !!}
          {!! Form::text('address', old('address',$employee->address), ['class' => 'form-control']) !!}
          {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group{{ $errors->has('contact_number') ? ' has-error' : '' }}">
          <label>Contact Number*</label>
          <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-phone"></i>
              </div>
              <input type="text" class="form-control" name="contact_number" value="{!! old('contact_number',$employee->contact_number) !!}" data-inputmask='"mask": "09999999999"' data-mask>
          </div>
          {!! $errors->first('contact_number', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group{{ $errors->has('salary_rate') ? ' has-error' : '' }}">
          {!! Form::label('salary_rate', 'Salary Rate'); !!}
          {!! Form::text('salary_rate', old('salary_rate',$employee->salary_rate), ['class' => 'form-control']) !!}
          {!! $errors->first('salary_rate', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="icheck">
            {!! Form::checkbox('is_active', 'on', true); !!}&nbsp;&nbsp;Is Active
        </div>
      </div> 
    </div>
  </div>
</div>
<script type="text/javascript">
  $(function(){
    $('#birthdate').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
  });
</script>