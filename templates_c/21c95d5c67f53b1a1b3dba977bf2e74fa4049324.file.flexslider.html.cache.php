<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-07-07 08:53:23
         compiled from "D:\www\gomocart\templates\front-end\accecories\includes\flexslider.html" */ ?>
<?php /*%%SmartyHeaderCode:5003577db613ed8ca0-65137030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21c95d5c67f53b1a1b3dba977bf2e74fa4049324' => 
    array (
      0 => 'D:\\www\\gomocart\\templates\\front-end\\accecories\\includes\\flexslider.html',
      1 => 1467671369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5003577db613ed8ca0-65137030',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner' => 0,
    'homeurl' => 0,
    'entry' => 0,
    'tpl_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_577db6140871d8_19387071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577db6140871d8_19387071')) {function content_577db6140871d8_19387071($_smarty_tpl) {?><div class="flexslider ma-nivoslider">
    <div class="ma-loading"></div>
    <div id="ma-inivoslider-banner7" class="slides">
        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/banner/<?php echo $_smarty_tpl->tpl_vars['entry']->value['filename'];?>
" class="dn" alt="<?php echo $_smarty_tpl->tpl_vars['entry']->value['nama'];?>
" title="#banner7-caption<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
"  />
        <?php } ?>
    </div>
    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
        <div id="banner7-caption<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" class="banner7-caption nivo-html-caption nivo-caption">
            <div class="timethai"></div>
            <div class="banner7-content slider-<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
">
                <div class="title-container">
                    <h1 class="title1"><?php echo $_smarty_tpl->tpl_vars['entry']->value['judul'];?>
</h1>
                    <h2 class="title2" ><?php echo $_smarty_tpl->tpl_vars['entry']->value['detail'];?>
</h2>											
                </div>
                <div class="banner7-des">
                    <div class="des">
                        <h1><?php echo $_smarty_tpl->tpl_vars['entry']->value['sub_detail_1'];?>
</h1>
                        <h2><?php echo $_smarty_tpl->tpl_vars['entry']->value['sub_detail_2'];?>
</h2>
                        <!-- div class="check-box">
                            <ul class="list-unstyled">
                                <li>With all products in shop</li>
                                <li>All combos $69.96</li>
                            </ul>
                        </div -->
                    </div>
                </div>																								
                <?php if ($_smarty_tpl->tpl_vars['entry']->value['gambar']!='') {?><img class="img1" src="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
/uploads/banner/<?php echo $_smarty_tpl->tpl_vars['entry']->value['gambar'];?>
" alt="" /><?php }?>																				
            </div>
        </div>
    <?php } ?>
    
    <!-- div id="banner7-caption2" class="banner7-caption nivo-html-caption nivo-caption">
        <div class="timethai"></div>
        <div class="banner7-content slider-2">
            <div class="title-container">
                <h1 class="title1">Samsung s5</h1>
                <h2 class="title2" >Typi non habent claritatem insitam; est usus legentis</h2>											
            </div>
            <div class="banner7-des">
                <div class="des">
                    <h1>sale up to!</h1>
                    <h2>50% off</h2>
                </div>
            </div>																								
            <img class="img1" src="<?php echo $_smarty_tpl->tpl_vars['tpl_dir']->value;?>
/images/slider/img-05.png" alt="" />																					
        </div>
    </div -->
</div><!-- /.flexslider --><?php }} ?>
