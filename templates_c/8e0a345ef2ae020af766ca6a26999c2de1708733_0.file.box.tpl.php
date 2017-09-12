<?php
/* Smarty version 3.1.30, created on 2017-06-16 04:21:38
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\box.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_594340b2d74fa4_81686503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e0a345ef2ae020af766ca6a26999c2de1708733' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\box.tpl',
      1 => 1497579614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594340b2d74fa4_81686503 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\libs\\plugins\\function.cycle.php';
?>
<a style="text-decoration: none; color: inherit; <?php echo $_smarty_tpl->tpl_vars['disable']->value;?>
"  data-fancybox data-type="ajax" href="./kategorijaIndex.php/?kate=<?php echo $_smarty_tpl->tpl_vars['naslov']->value;?>
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
        </div>

    </article>
</a><?php }
}
