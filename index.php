<?php
/**
 * 基于简和的全新版本，以圆角为主，开袋即食，但没有评论功能。
 * 
 * @package Round
 * @author 安和
 * @version 2.0
 * @link http://lolicorn.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');?>
<div class="main">
<div class="article-list">
<div class="content">
<?php  $this->need('side.php'); ?>

<?php while($this->next()): ?>
<div class="card">
<time datetime="<?php $this->date('c'); ?>"><?php $this->date('y年n月j日'); ?></time>
<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
</div>
<?php endwhile; ?>
<center>
	<div class="card">
<?php $this->pageNav('&laquo;', '&raquo;', 5, '...', array('wrapTag' => 'ul', 'wrapClass' => 'page-change', 'itemTag' => 'li', 'textTag' => 'span', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
</div>
</center>
