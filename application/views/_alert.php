<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php 
    $alert = $this->session->flashdata('alert');
    if (!empty($alert)){ ?>
		<div class="alert <?php echo $alert['type'] ?> alert-dismissible fade show" role="alert">
		  <?php echo $alert['text'] ?>
		</div>
<?php } ?>