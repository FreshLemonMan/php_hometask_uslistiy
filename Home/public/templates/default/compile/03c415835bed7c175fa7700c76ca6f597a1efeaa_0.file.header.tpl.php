<?php
/* Smarty version 4.3.1, created on 2023-04-02 13:20:42
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\sections\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6429812aac6b30_58818862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03c415835bed7c175fa7700c76ca6f597a1efeaa' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\sections\\header.tpl',
      1 => 1680441642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6429812aac6b30_58818862 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="/">Home</a>
<a href="/about">About</a>
<a href="/contacts">Contacts</a>
<a href="/news">News</a>
<a href="/sp">Parliament</a>
<?php if ($_smarty_tpl->tpl_vars['auth']->value) {?>
    <a href="/logout">Logout</a>
<?php } else { ?>
    <a href="/login">Login</a>
<?php }
}
}
