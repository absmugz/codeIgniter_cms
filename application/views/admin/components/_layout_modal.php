<?php $this->load->view('admin/components/page_head'); ?>

<div class="modal show" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      
<?php $this->load->view($subview); ?>
      <div class="modal-footer">
        <?php echo $meta_title; ?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php $this->load->view('admin/components/page_tail'); ?> 