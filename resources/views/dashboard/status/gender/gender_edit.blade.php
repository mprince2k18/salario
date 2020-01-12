@extends('dashboard.mainpage.app',['title'=> $edit_gender->name])

@section('include_css')

  @include('dashboard.status.department.department_css')

@endsection


@section('content')


<!-- // Here we put content -->


<section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Editing <i data-feather="arrow-right"></i> {{ $edit_gender->name }}</h4> </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form" action="{{ url('/app/v1/dashboard/gender/update') }}/{{ $edit_gender->id }}" method="post">
                                          @csrf
                                            <div class="form-body">
                                                <div class="row">


                                                    <div class="col-md-6 col-12">
                                                        <div class="form-label-group">
                                                            <input type="text" id="first-name-column" class="form-control" placeholder="Gender Name" name="name" value="{{ $edit_gender->name }}">
                                                            <label for="first-name-column">Gender Name</label>
                                                        </div>
                                                    </div>



                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
                                                        <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


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

  @include('dashboard.status.department.department_js')

@endsection
