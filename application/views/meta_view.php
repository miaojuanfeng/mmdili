<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/mmdili.min.css')?>">
<script type="text/javascript" src="<?=base_url('assets/lib/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/mmdili.js')?>"></script>
<link rel="shortcut icon" href="<?=base_url('favicon.ico')?>" type="image/x-icon" />
<?php
	$browser = get_browser();
    if(strtolower($browser->browser) == 'safari') {
        echo '<link href="safari.css" rel="stylesheet" type="text/css" />';
    }
?>