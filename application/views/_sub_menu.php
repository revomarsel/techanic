<?php $title_produk = $this->input->get('title',true); ?>
<p class="text-white"><?= trans('text_89') ?> </p>
<a href="<?= site_url().'product?title=my-techanic'.($lang == 'en-id' ? '&lang=en-id'  : '') ?>" class="btn btn-switch-user customer <?= $this->input->get('title') == 'my-techanic' ? 'active' : '' ?>">
    <img src="assets/img/User.png" class="img-fluid" alt=""><?= trans('text_90') ?> 
</a>
<a <?= $title_produk == 'my-techanic' ? 'href="'.site_url().'product?title=techanic-business'.($lang == 'en-id' ? '&lang=en-id'  : '').'"' : 'val="pengusaha"' ?> class="btn btn-switch-user <?= $this->input->get('title') == 'techanic-business' ? 'active' : '' ?>">
    <img src="assets/img/Business-Building.png" class="img-fluid" alt=""> 
    <?= trans('text_91') ?> </a>
<a <?= $title_produk == 'my-techanic' ? 'href="'.site_url().'product?title=techanic-business'.($lang == 'en-id' ? '&lang=en-id'  : '').'"' : 'val="teknisi"' ?> class="btn btn-switch-user">
    <img src="assets/img/Tools.png" class="img-fluid" alt=""> <?= trans('text_92') ?> </a>