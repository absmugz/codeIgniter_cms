<?php $this->load->view('admin/components/page_head'); ?>

<div class="modal show" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p> <?php echo $this->load->view($subview); ?></p>
      </div>
      <div class="modal-footer">
        <?php echo $meta_title; ?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php $this->load->view('admin/components/page_tail'); ?> 