@extends('dashboard.mainpage.app', ['title' => 'Employee List'])

@section('include_css')

  @include('dashboard.employee.employee_list.employee_list_css')

@endsection

@section('custom_css')


<style media="screen">
  .dt-buttons{
    display: none;
  }
</style>


@endsection


@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{ Route::currentRouteNamed() }}"></a>
  </li>
@endsection


@section('content')


<!-- // Here we put content -->


<!-- Data list view starts -->
<section id="data-thumb-view" class="data-thumb-view-header">
  <div class="action-btns d-none">
    <div class="btn-dropdown mr-1 mb-1">
      <div class="btn-group dropdown actions-dropodown">
        <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Actions
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
        </div>
      </div>
    </div>
  </div>
  <!-- dataTable starts -->
  <div class="table-responsive">
    <table class="table data-thumb-view">
      <thead>
        <tr>
          <th></th>
          <th>Image</th>
          <th>NAME</th>
          <th>DESIGNATION</th>
          <th>PHONE</th>
          <th>STATUS</th>
          <th>JOINED</th>
          <th>ACTION</th>
        </tr>
      </thead>
      <tbody>



        @foreach ($employees as $employee)

          <tr>
            <td></td>
            <td class="product-img"><img src="{{ asset('uploads/employee') }}/{{ $employee->photo }}" alt="{{ $employee->fname }} {{ $employee->lname }}">
            </td>
            <td class="product-name">{{ $employee->fname }} {{ $employee->lname }}</td>
            <td class="product-category">{{ $employee->relationBetweenDesignation->name }}</td>
            <td class="product-category">{{ $employee->contact_number }}</td>
            <td class="product-category">{{ $employee->relationBetweenStatus->name }}</td>

            <td class="product-price">{{ Carbon\Carbon::parse($employee->joining_date)->diffForHumans() }}</td>
            <td class="product-action">
              <span class="action-edit"><i class="feather icon-edit"></i></span>
              <span class="action-delete"><i class="feather icon-trash"></i></span>
            </td>
          </tr>

        @endforeach



      </tbody>
    </table>
  </div>
  <!-- dataTable ends -->

</section>
<!-- Data list view end -->


<!-- // Here we End content -->


    <!-- END: Content-->

@endsection

@section('customizer')

  @include('dashboard.mainpage.widgets.customizer')

@endsection

@section('footer')

  @include('dashboard.mainpage.widgets.footer')

@endsection

@section('include_js')

  @include('dashboard.employee.employee_list.employee_list_js')

@endsection

@section('custom_js')



@endsection
