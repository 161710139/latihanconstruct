<?php
require_once 'pc.php';

$pc= new pc('Windows','Lenovo','Intel',2,'Nvidia');
echo 'Operasi System...'.$pc->get_os(). '<br>';
echo 'Merk...'.$pc->get_merk(). '<br>';
echo 'Processor...'.$pc->get_processor(). '<br>';
echo 'Ram...'.$pc->get_ram(). '<br>';
echo 'VGA...'.$pc->get_vga(). '<br>';
?>