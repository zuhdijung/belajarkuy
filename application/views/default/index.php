<!doctype html>
<html lang="en">
  <head>
    <?php $this->load->view('default/common/header')?>
    <title>{title}</title>
  </head>
  <body>
    <?php $this->load->view('default/common/nav');?>
	<?php $this->load->view($path);?>
	<?php
		$enc = ')(*belajarkuy!@#';
		echo '<!-- pass:'.md5($enc.'asdasd'.$enc).'-->';
	?>
	<?php $this->load->view('default/common/footer')?>
    <?php $this->load->view('default/common/js');?>
  </body>
</html>