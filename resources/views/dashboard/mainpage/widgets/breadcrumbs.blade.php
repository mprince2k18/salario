@if (!Route::currentRouteNamed('dashboard'))

  <div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
      <div class="row breadcrumbs-top">
        <div class="col-12">
          <h2 class="content-header-title float-left mb-0">List View</h2>
          <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a>
              </li>



              <li class="breadcrumb-item active">
                @isset($title)
                  {{ $title }}
                @endisset

              </li>





            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>

@endif
