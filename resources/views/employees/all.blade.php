@extends('base')
@section('content')
  @include('modals.success')
  @include('modals.danger')
  <section class="content-header">
    <h1>
      Employees
    </h1>
    <ol class="breadcrumb">
      <li>Employees</li>
    </ol>
  </section>
  <section class="content">
    <div class="box box-primary">
      <div class="box-body">
        <a href="{{ route('add_employee') }}" class="btn btn-success" style="margin-right: 5px;">Add</a>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-body">
            @if(count($employees) > 0)
            <table id="objects" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Details</th>
                </tr>
              </thead>
              <tbody>
                @foreach($employees as $employee)
                  <tr class='clickable-row' style="cursor: pointer;" data-href="{{ URL::route('employee',array($employee->id)) }}">
                    <td>
                      <b>{{ $employee->first_name }} {{ $employee->last_name }}</b>
                    </td>
                    <td>
                        @if($employee->address)
                          {{ $employee->address }} </br>
                        @endif

                        @if($employee->contact_number)
                          {{ $employee->contact_number }} </br>
                        @endif
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            @else
              No buyers found
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
      $(function () {
        $('#objects').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
      $(".clickable-row").click(function() {
          window.document.location = $(this).data("href");
      });
    </script>
@stop