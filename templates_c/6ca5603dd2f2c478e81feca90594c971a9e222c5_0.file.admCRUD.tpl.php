<?php
/* Smarty version 3.1.30, created on 2017-06-28 16:31:04
  from "C:\Users\ljesc\IdeaProjects\Wellness\templates\admCRUD.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5953bda888ce81_51329503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ca5603dd2f2c478e81feca90594c971a9e222c5' => 
    array (
      0 => 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\templates\\admCRUD.tpl',
      1 => 1498568783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5953bda888ce81_51329503 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'C:\\Users\\ljesc\\IdeaProjects\\Wellness\\libs\\plugins\\function.cycle.php';
?>

    <a style="text-decoration: none; color: inherit; <?php echo $_smarty_tpl->tpl_vars['disable']->value;?>
" data-fancybox data-type="ajax" href="./admCRUDtable.php/?table=<?php echo $_smarty_tpl->tpl_vars['naslov']->value;?>
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
    </a>


<?php }
}
