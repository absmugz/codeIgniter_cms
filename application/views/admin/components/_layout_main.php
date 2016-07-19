<?php $this->load->view('admin/components/page_head');?>

      <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>admin/dashboard"><?php echo $meta_title; ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a></li>
            <li><?php echo anchor('admin/page','pages'); ?></li>
            <li><?php echo anchor('admin/user','users'); ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
      <div class="container">
    <div class="row">
  <div class="col-md-8">.col-md-8</div>
  <div class="col-md-4">
      <?php echo mailto('absmugz09@gmail.com', '<span class="glyphicon glyphicon-user" aria-hidden="true"></span> absmugz09@gmail.com')?><br>
      <?php echo anchor('admin/user/logout', '<span class="glyphicon glyphicon-off" aria-hidden="true"></span> logout')?>
      
  </div>
</div>
      </div>

  <?php $this->load->view('admin/components/page_tail');?> 