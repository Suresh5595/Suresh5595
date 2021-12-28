<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css"/>
    
<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Purchase</h5>
      </div>
      <div class="modal-body">
        <a href="<?php echo base_url();?>index.php/purchase" class="btn btn-primary btn-round">Direct Purchase</a>&emsp;&emsp;&emsp;
        <a href="<?php echo base_url();?>index.php/againts_purchase" class="btn btn-primary btn-round">Againts Purchase</a>
      </div>
      
  </div>
</div>
</section>
<script type="text/javascript">
    $(function() {
    $('#basicExampleModal').modal('show');
});
</script>