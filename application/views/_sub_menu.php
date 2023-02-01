<p class="text-white">Manfaat untuk :</p>
<a href="<?= site_url().'product?title=my-techanic' ?>" class="btn btn-switch-user <?= $this->input->get('title') == 'my-techanic' ? 'active' : '' ?>">
    <img src="assets/img/User.png" class="img-fluid" alt="">Customer 
</a>
<a href="<?= site_url().'product?title=techanic-business' ?>" class="btn btn-switch-user <?= $this->input->get('title') == 'techanic-business' ? 'active' : '' ?>">
    <img src="assets/img/Business-Building.png" class="img-fluid" alt=""> 
    Pengusaha </a>
<a href="<?= site_url().'product?title=techanic-business' ?>" class="btn btn-switch-user">
    <img src="assets/img/Tools.png" class="img-fluid" alt=""> Teknisi </a>