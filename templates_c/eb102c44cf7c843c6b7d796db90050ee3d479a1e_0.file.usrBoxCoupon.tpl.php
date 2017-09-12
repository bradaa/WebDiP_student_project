<?php
/* Smarty version 3.1.30, created on 2017-07-01 18:08:06
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\usrBoxCoupon.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5957c8e68f8da7_52998559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb102c44cf7c843c6b7d796db90050ee3d479a1e' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\usrBoxCoupon.tpl',
      1 => 1498925283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5957c8e68f8da7_52998559 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\libs\\plugins\\function.cycle.php';
?>

    <article class="indexKartica">

        <figure>
            <p class="boxTpl" style="background-color: <?php echo smarty_function_cycle(array('values'=>'#F44336, #E91E63, #673AB7, #2196F3, #009688, #FFEB3B'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['firstNaslov']->value;?>
 </p>
        </figure>

        <div style="text-decoration: none;">
            <h2><?php echo $_smarty_tpl->tpl_vars['naslov']->value;?>
</h2>
            <p>Vrijednost: <?php echo $_smarty_tpl->tpl_vars['opis']->value;?>
</p>

            <a class="materialButton fancybox"  data-fancybox href="<?php echo $_smarty_tpl->tpl_vars['pdf']->value;?>
">OPIS</a>
            <a class="materialButton" data-fancybox href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
">SLIKA</a>
        </div>

    </article>
<?php }
}
