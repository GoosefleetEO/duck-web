<div class="mb-3">
<span style="color:red;background:rgba(255,255,255,128);">IF THIS SHOWS UP PING CORGSKI</span>
</div>

@push('javascript')
 <script>
      $(document).ready(function () {
          $('.dt-filters')
              .on('click', function () {
                  $(this).hasClass('active') ? $(this).removeClass('active') : $(this).addClass('active');
                  window.LaravelDataTables['dataTableBuilder'].ajax.reload();
              });
      });
  </script>
@endpush
