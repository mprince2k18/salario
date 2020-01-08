@extends('dashboard.mainpage.app')

@section('include_css')

  @include('dashboard.status.activation.activation_css')

@endsection


@section('content')


<!-- // Here we put content -->

<!-- Data list view starts -->
<section id="data-list-view" class="data-list-view-header">
  <div class="action-btns d-none">
    <div class="btn-dropdown mr-1 mb-1">
      <div class="btn-group dropdown actions-dropodown">
        <button type="button" class="btn btn-white px-1 py-1 dropdown-toggle waves-effect waves-light"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Actions
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#"><i class="feather icon-trash"></i>Delete</a>
          <a class="dropdown-item" href="#"><i class="feather icon-archive"></i>Archive</a>
          <a class="dropdown-item" href="#"><i class="feather icon-file"></i>Print</a>
          <a class="dropdown-item" href="#"><i class="feather icon-save"></i>Another Action</a>
        </div>
      </div>
    </div>
  </div>

  <!-- DataTable starts -->
  <div class="table-responsive">
    <table class="table data-list-view">
      <thead>
        <tr>
          <th></th>
          <th>COMMENTS</th>
          <th>ID</th>

          <th>ACTION</th>
        </tr>
      </thead>
      <tbody>


        <tr>
          <td></td>
          <td class="product-name">Active</td>
          <td class="product-category">1</td>
          <td class="product-action">
            <span class="action-edit" id="insurance" data-value="Insurance" onclick="getInsurance()"><i data-feather="edit"></i></span>
            <span class="action-delete"><i data-feather="trash"></i></span>
          </td>
        </tr>


        <tr>
          <td></td>
          <td class="product-name">Deactive</td>
          <td class="product-category">2</td>
          <td class="product-action">
            <span class="action-edit" id="insurance" data-value="Insurance" onclick="getInsurance()"><i data-feather="edit"></i></span>
            <span class="action-delete"><i data-feather="trash"></i></span>
          </td>
        </tr>


        <tr>
          <td></td>
          <td class="product-name">Blocked</td>
          <td class="product-category">3</td>
          <td class="product-action">
            <span class="action-edit" id="insurance" data-value="Insurance" onclick="getInsurance()"><i data-feather="edit"></i></span>
            <span class="action-delete"><i data-feather="trash"></i></span>
          </td>
        </tr>

        <tr>
          <td></td>
          <td class="product-name">Outsiders</td>
          <td class="product-category">3</td>
          <td class="product-action">
            <span class="action-edit" id="insurance" data-value="Insurance" onclick="getInsurance()"><i data-feather="edit"></i></span>
            <span class="action-delete"><i data-feather="trash"></i></span>
          </td>
        </tr>



      </tbody>
    </table>
  </div>
  <!-- DataTable ends -->

  <!-- add new sidebar starts -->
  <div class="add-new-data-sidebar">
    <div class="overlay-bg"></div>
    <div class="add-new-data">
      <div class="div mt-2 px-2 d-flex new-data-title justify-content-between">
        <div>
          <h4 class="text-uppercase">List View Data</h4>
        </div>
        <div class="hide-data-sidebar">
          <i class="feather icon-x"></i>
        </div>
      </div>
      <div class="data-items pb-3">

        <form action="{{ route('activation_create') }}" method="post">

          @csrf

          <div class="data-fields px-2 mt-3">
            <div class="row">

              <div class="col-sm-12 data-field-col">
                <label for="name">Add Activation</label>
                <input type="text" name="name" class="form-control" id="name">
              </div>


            </div>
          </div>

          <div class="add-data-footer d-flex justify-content-around px-3 mt-2">
            <div class="add-data-btn">
              <button class="btn btn-primary" type="submit">Add Data</button>
            </div>
            <div class="cancel-data-btn">
              <button class="btn btn-outline-danger">Cancel</button>
            </div>
          </div>


        </form>

      </div>

    </div>
  </div>
  <!-- add new sidebar ends -->
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

  @include('dashboard.status.activation.activation_js')

@endsection
