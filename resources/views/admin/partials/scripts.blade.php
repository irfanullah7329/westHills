<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('admin_assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('admin_assets/vendors/chart.js/Chart.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- Plugin js for this form element page -->
<script src="{{ asset('admin_assets/vendors/typeaheadjs/typeahead.bundle.min.js') }}"></script>  
<script src="{{ asset('admin_assets/vendors/select2/select2.min.js') }}"></script>
 <!-- End plugin js form element page -->
 <!-- Plugin start for datatable-->
 
  <script src="{{ asset('admin_assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('admin_assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <!-- date picker  -->
  <script src="{{asset('admin_assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{ asset('admin_assets/vendors/summernote/dist/summernote-bs4.min.js')}}"></script>
  <!-- date picker end -->
  <!--  -->
  <!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{ asset('admin_assets/js/jq.tablesort.js') }}"></script>
<script src="{{ asset('admin_assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('admin_assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('admin_assets/js/template.js') }}"></script>
<script src="{{ asset('admin_assets/js/settings.js') }}"></script>
<script src="{{ asset('admin_assets/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for form element page page-->
<script src="{{ asset('admin_assets/js/file-upload.js') }}"></script>
<script src="{{ asset('admin_assets/js/typeahead.js') }}"></script>
<script src="{{ asset('admin_assets/js/select2.js') }}"></script>
<!-- End custom js for form element page page-->
<!-- Custom js for this page-->
<script src="{{ asset('admin_assets/js/dashboard.js') }}"></script>
<!-- Custom js for this page-->
<script src="{{ asset('admin_assets/js/data-table.js') }}"></script>
<!-- End custom js for this page-->
<!-- Custom js for this tabs-->
<script src="{{asset('admin_assets/js/tabs.js')}}"></script>
<!-- End custom js for tabs-->
<script src="{{ asset('admin_assets/vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendors/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendors/jquery-file-upload/jquery.uploadfile.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendors/jquery.repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendors/inputmask/jquery.inputmask.bundle.js') }}"></script>
<script src="{{ asset('admin_assets/vendors/dropzone/dropzone.js') }}"></script>
<script src="{{ asset('admin_assets/vendors/multiselect-lists/jquery.multi-select.js') }}"></script>
<!-- Custom js for this page-->
<script src="{{ asset('admin_assets/js/formpickers.js') }}"></script>
<script src="{{ asset('admin_assets/js/form-addons.js') }}"></script>
<script src="{{ asset('admin_assets/js/x-editable.js') }}"></script>
<script src="{{ asset('admin_assets/js/dropify.js') }}"></script>
<script src="{{ asset('admin_assets/js/dropzone.js') }}"></script>
<script src="{{ asset('admin_assets/js/jquery-file-upload.js') }}"></script>
<script src="{{ asset('admin_assets/js/formpickers.js') }}"></script>
<script src="{{ asset('admin_assets/js/form-repeater.js') }}"></script>
<script src="{{ asset('admin_assets/js/inputmask.js') }}"></script>
<script src="{{ asset('admin_assets/js/tablesorter.js')}}"></script>

<!-- FOr jquery Testing Add camera -->
<script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!}
</script>
<script src="{{ asset('admin_assets/churchescomponents/picture-add.js') }}"></script>
<script src="{{ asset('admin_assets/churchescomponents/slideshow-add.js') }}"></script>
<script src="{{ asset('admin_assets/churchescomponents/video-add.js') }}"></script>
<script src="{{ asset('admin_assets/churchescomponents/setup-add.js') }}"></script>
<script src="{{ asset('admin_assets/churchescomponents/notice-add.js') }}"></script>
<script src="{{ asset('admin_assets/churchescomponents/announcement-add.js') }}"></script>
<!-- End custom js for this page-->

<!-- To close the success and error emssages after some time after submit forms. --> 
<script>
    $(document).ready(function(){
      $('#AnnouncementId').summernote({

        height: "185px"
      });
      $('#UpdatedAnnouncementId').summernote({

        height: "185px"
      });
      $('#NoticeId').summernote({

        height: "185px"
        });
      $('#UpdatedNoticeId').summernote({

        height: "185px"
      });
      $('select.selected-churches-multipple').select2({
        placeholder: 'Select Churches to assign',
      
      });
      $('#selected-churches-multipple').multiSelect({
          selectableHeader: "<div class='custom-header'>Churches</div>",
          selectionHeader: "<div class='custom-header'>Assigned Churches</div>",
          selectableFooter: "<div class='custom-header'>Churches</div>",
          selectionFooter: "<div class='custom-header'>Assigned Churches</div>"
        });
      $(".alert-info").delay(5000).slideUp(300);
      $(".alert-success").delay(5000).slideUp(300);
     // $('table.table').DataTable();
  });
</script>

  