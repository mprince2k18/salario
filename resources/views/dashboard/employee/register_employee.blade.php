@extends('dashboard.mainpage.app', ['title' => 'Employee Register'])

@section('include_css')

  @include('dashboard.employee.register_employee_css')

@endsection

@section('custom_css')

  <style media="screen">

  .image-preview-input {
  position: relative;
  overflow: hidden;
  margin: 0px;
  color: #333;
  background-color: #fff;
  border-color: #ccc;
  padding: 0 !important;
}
.image-preview-input input[type=file] {
position: absolute;
top: 0;
right: 0;
margin: 0;
padding: 0;
font-size: 20px;
cursor: pointer;
opacity: 0;
filter: alpha(opacity=0);
}
.image-preview-input-title {
  margin-left:2px;
}

#dynamic{
  width: 100px;
}

.bs-popover-bottom{
  left: 200px !important;
}
  </style>

@endsection


@section('breadcrumb')
  <li class="breadcrumb-item"><a href="{{ Route::currentRouteNamed() }}"></a>
  </li>
@endsection


@section('content')


<!-- // Here we put content -->


<!-- // Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Employee Registration</h4> </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form" action="{{ route('create_employee') }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="fname" value="{{ old('fname') }}" required>
                                                        <label for="first-name-column">First Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="lname" value="{{ old('lname') }}" required>
                                                        <label for="last-name-column">Last Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="email" id="email-column" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                                        <label for="email-column">Email</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="number" id="nid-floating" class="form-control" name="nid" placeholder="NID" value="{{ old('nid') }}" required>
                                                        <label for="nid-floating">NID</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" name="dob" class="form-control pickadate picker__input picker__input--active" value="{{ old('dob') }}" required readonly="" id="P656780448" aria-haspopup="true" aria-readonly="false" aria-owns="P656780448_root">
                                                        <label for="email-column">Date Of Birth</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group" data-select2-id="141">
                                                        <select data-placeholder="Select a Gender..." name="gender_id" required value="{{ old('gender_id') }}" class="select2-icons form-control select2-hidden-accessible" id="select2-icons" data-select2-id="select2-icons" tabindex="-1" aria-hidden="true">
                                                            <optgroup label="Gender" data-select2-id="143">

                                                              @foreach ($genders as $gender)
                                                                <option value="{{ $gender->id }}" data-icon="{{ $gender->id === 1 ? "fa fa-mars" : "fa fa-venus" }}" selected="">{{ $gender->name }}</option>
                                                              @endforeach


                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group" data-select2-id="142">
                                                        <select class="select2 form-control select2-hidden-accessible" value="{{ old('blood') }}" required name="blood" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                                            <optgroup label="Blood Group">
                                                                <option value="A+">A+</option>
                                                                <option value="A-">A-</option>
                                                                <option value="B+">B+</option>
                                                                <option value="B-">B-</option>
                                                                <option value="O+">O+</option>
                                                                <option value="O-">O-</option>
                                                                <option value="AB+">AB+</option>
                                                                <option value="AB-">AB-</option>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group" data-select2-id="156">
                                                        <select name="designation_id" value="{{ old('designation_id') }}" required class="select2-theme form-control select2-hidden-accessible" id="select2-theme" data-select2-id="select2-theme" tabindex="-1" aria-hidden="true">
                                                            <optgroup label="Management" data-select2-id="157">
                                                              @foreach ($designations as $designation)

                                                                <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                                                              @endforeach

                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" name="joining_date" value="{{ old('joining_date') }}" required class="form-control pickadate picker__input picker__input--active" readonly="" id="P656780449" aria-haspopup="true" aria-readonly="false" aria-owns="P656780449_root">
                                                        <label for="P656780449">Joining Date</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="number" id="salary-column" class="form-control" value="{{ old('basic_salary') }}" required placeholder="Basic Salary" name="basic_salary">
                                                        <label for="salary-column">Basic Salary</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="number" id="Contact-column" class="form-control" placeholder="Contact Number" required value="{{ old('contact_number') }}" name="contact_number">
                                                        <label for="Contact-column">Contact Number</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-label-group">
                                                        <input type="text" id="Team-column" class="form-control" placeholder="Team Name (Optional)" value="{{ old('team') }}" name="team">
                                                        <label for="Team-column">Team Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-12">

                                                      {{-- <input type="file" name="photo" class="form-control"> --}}

                                                      <!-- image-preview-filename input [CUT FROM HERE]-->
                                                           <div class="input-group image-preview">
                                                               <input required type="text" value="{{ old('photo') }}" name="photo" class="form-control image-preview-filename" disabled="disabled" placeholder="Click Browse To Upload Image"> <!-- don't give a name === doesn't send on POST/GET -->
                                                               <span class="input-group-btn">
                                                                   <!-- image-preview-clear button -->
                                                                   <button type="button" class="btn btn-warning image-preview-clear">
                                                                       <span class="glyphicon glyphicon-remove"></span> Clear
                                                                   </button>
                                                                   <!-- image-preview-input -->
                                                                   <div class="btn btn-default image-preview-input">
                                                                       <span class="glyphicon glyphicon-folder-open"></span>
                                                                       <span class="image-preview-input-title btn btn-primary">Browse</span>
                                                                       <input required type="file" value="{{ old('photo') }}" accept="image/png, image/jpeg, image/gif" name="photo"/> <!-- rename it -->
                                                                   </div>
                                                               </span>
                                                           </div>
                                                           <!-- /input-group image-preview [TO HERE]-->




                                                </div>
                                                <div class="form-group col-12">
                                                    <ul class="list-unstyled mb-0">

                                                      @foreach ($activations as $activation)

                                                        <li class="d-inline-block mr-2">
                                                            <fieldset>
                                                                <div class="vs-radio-con">
                                                                    <input type="radio" required name="status_id" value="{{ $activation->id }}"> <span class="vs-radio">
                                            <span class="vs-radio--border"></span> <span class="vs-radio--circle"></span> </span> <span class="">{{ $activation->name }}</span> </div>
                                                            </fieldset>
                                                        </li>

                                                      @endforeach




                                                    </ul>
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
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
            <!-- // Basic Floating Label Form section end -->

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

  @include('dashboard.employee.register_employee_js')

@endsection

@section('custom_js')

<script type="text/javascript">
$(document).on('click', '#close-preview', function(){
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
        },
         function () {
           $('.image-preview').popover('hide');
        }
    );
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse");
    });
    // Create the preview image
    $(".image-preview-input input:file").change(function (){
        var img = $('<img/>', {
            id: 'dynamic',
            width:100,
            height:100
        });
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }
        reader.readAsDataURL(file);
    });
});
</script>

@endsection
