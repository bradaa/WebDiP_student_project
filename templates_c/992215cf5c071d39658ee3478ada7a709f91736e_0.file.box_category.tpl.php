<?php
/* Smarty version 3.1.30, created on 2017-06-17 03:37:18
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\box_category.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594487ce068e05_18318930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '992215cf5c071d39658ee3478ada7a709f91736e' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\box_category.tpl',
      1 => 1497663369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594487ce068e05_18318930 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\libs\\plugins\\function.cycle.php';
?>
<a style="text-decoration: none; color: inherit; <?php echo $_smarty_tpl->tpl_vars['disable']->value;?>
" data-fancybox data-type="ajax" href="./rezervacija.php/?kate=<?php echo $_smarty_tpl->tpl_vars['naslov']->value;?>
" >
    <article class="indexKartica">

        <figure>
            <p class="boxTpl" style="background-color: <?php echo smarty_function_cycle(array('values'=>'#F44336, #E91E63, #673AB7, #2196F3, #009688, #FFEB3B'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['firstNaslov']->value;?>
 </p>
        </figure>

        <div style="text-decoration: none;">
            <h2><?php echo $_smarty_tpl->tpl_vars['naslov']->value;?>
</h2>
            <p><?php echo $_smarty_tpl->tpl_vars['opis']->value;?>
</p>

            <iframe onclick="share()" src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fbarka.foi.hr%2FWebDiP%2F2016_projekti%2FWebDiP2016x068%2Findex.php&layout=button&size=small&mobile_iframe=true&appId=136332639737214&width=59&height=20" width="59" height="20" style="position: relative; top: 0; left: 0; border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>

    </article>
</a><?php }
}
