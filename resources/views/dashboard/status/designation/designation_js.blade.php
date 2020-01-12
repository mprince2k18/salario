   <!-- BEGIN: Vendor JS-->
   <script src="{{ asset('dashboard/app-assets/vendors/js/vendors.min.js') }}"></script>
   <!-- BEGIN Vendor JS-->

   <!-- BEGIN: Page Vendor JS-->
   <script src="{{ asset('dashboard/app-assets/vendors/js/extensions/dropzone.min.js') }}"></script>
   <script src="{{ asset('dashboard/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
   <script src="{{ asset('dashboard/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
   <script src="{{ asset('dashboard/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
   <script src="{{ asset('dashboard/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
   <script src="{{ asset('dashboard/app-assets/vendors/js/tables/datatable/dataTables.select.min.js') }}"></script>
   <script src="{{ asset('dashboard/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js') }}"></script>
   <!-- END: Page Vendor JS-->

   <!-- BEGIN: Theme JS-->
   <script src="{{ asset('dashboard/app-assets/js/core/app-menu.min.js') }}"></script>
   <script src="{{ asset('dashboard/app-assets/js/core/app.min.js') }}"></script>
   <script src="{{ asset('dashboard/app-assets/js/scripts/components.min.js') }}"></script>
   <script src="{{ asset('dashboard/app-assets/js/scripts/customizer.min.js') }}"></script>
   <script src="{{ asset('dashboard/app-assets/js/scripts/footer.min.j') }}s"></script>
   <!-- END: Theme JS-->

   <!-- BEGIN: Page JS-->
   <script src="{{ asset('dashboard/app-assets/js/scripts/ui/data-list-view.min.js') }}"></script>
   <!-- END: Page JS-->

{{-- custom js --}}

    {{-- <script type="text/javascript">

      @foreach ($activations as $activation)

        function get{{ $activation->id }}()
        {
          var x = $("span#{{ $activation->name }}").data().value;
          document.getElementById("name").value=(x);
        }

      @endforeach

    </script> --}}
