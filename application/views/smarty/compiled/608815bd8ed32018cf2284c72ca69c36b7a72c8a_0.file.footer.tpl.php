<?php /* Smarty version 3.1.27, created on 2022-10-27 03:11:48
         compiled from "C:\xampp\htdocs\application\views\web\estructura\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20061679656359dad408a5f2_44729725%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '608815bd8ed32018cf2284c72ca69c36b7a72c8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\application\\views\\web\\estructura\\footer.tpl',
      1 => 1666833067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20061679656359dad408a5f2_44729725',
  'variables' => 
  array (
    'base_url' => 0,
    'owl_carousel' => 0,
    'light_gallery' => 0,
    'efectoletters' => 0,
    'mixitup_col3' => 0,
    'ver_mas_planes' => 0,
    'acordion_icon' => 0,
    'contador' => 0,
    'slick_slider' => 0,
    'anclaje' => 0,
    'slider' => 0,
    'redes_plugin' => 0,
    'jquery_counto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6359dad40dfa67_39211137',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6359dad40dfa67_39211137')) {
function content_6359dad40dfa67_39211137 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20061679656359dad408a5f2_44729725';
?>
</div><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootstrap/assets/js/vendor/popper.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['owl_carousel']->value)) {?><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/owlcarousel/dist/owl.carousel.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/inicializadores-plugins/owl-carousel-min.js"><?php echo '</script'; ?>
><?php }
if (isset($_smarty_tpl->tpl_vars['light_gallery']->value)) {?><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/light-gallery/dist/js/lightgallery-all.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/light-gallery/modules/lg-thumbnail.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/light-gallery/modules/lg-fullscreen.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
>
$(document).ready(function() {
    //galleria de multimedia
    $("#gallery-multimedia").lightGallery({
        selector: 'li a '
    });
});
<?php echo '</script'; ?>
>
<?php }
if (isset($_smarty_tpl->tpl_vars['efectoletters']->value)) {?><!--script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/efecto-letters.js"><?php echo '</script'; ?>
--><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/type_js/js/typed.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/type_js/js/tweenmax-min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/inicializadores-plugins/initialization_type-min.js"><?php echo '</script'; ?>
><?php }
if (isset($_smarty_tpl->tpl_vars['mixitup_col3']->value)) {?><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/mixitup/mixitup-min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/inicializadores-plugins/mixitup-min.js"><?php echo '</script'; ?>
><?php }
if (isset($_smarty_tpl->tpl_vars['ver_mas_planes']->value)) {?><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/inicializadores-plugins/ver_mas_planes-min.js"><?php echo '</script'; ?>
><?php }
if (isset($_smarty_tpl->tpl_vars['acordion_icon']->value)) {?><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/inicializadores-plugins/acordion-icon-min.js"><?php echo '</script'; ?>
><?php }
if (isset($_smarty_tpl->tpl_vars['contador']->value)) {?><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/inicializadores-plugins/contador-min.js"><?php echo '</script'; ?>
><?php }
if (isset($_smarty_tpl->tpl_vars['slick_slider']->value)) {?><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/slick/slick.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/inicializadores-plugins/slick-min.js"><?php echo '</script'; ?>
><?php }
if (isset($_smarty_tpl->tpl_vars['anclaje']->value)) {?><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/anclaje/jquery-scrollto-min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/anclaje/index-min.js"><?php echo '</script'; ?>
><?php }?><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/alertifyJS/alertify.min.js"><?php echo '</script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['slider']->value)) {?><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/inicializadores-plugins/slider-min.js"><?php echo '</script'; ?>
><?php }?><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/googlemap/mygooglemap.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUruOZGZVXOsZHNwa9UckAahh_bwnOAPM&callback=initMap" async defer><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/script-min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/process-min.js"><?php echo '</script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['redes_plugin']->value)) {?><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/inicializadores-plugins/script_redes.js"><?php echo '</script'; ?>
><?php }
if (isset($_smarty_tpl->tpl_vars['jquery_counto']->value)) {?><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/web/js/inicializadores-plugins/jquery-counto-min.js"><?php echo '</script'; ?>
><?php }?></body></html><?php }
}
?>