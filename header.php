<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/jianhe5.5.css'); ?>"> 
 <?php $this->header(); ?>
</head>
<title><?php $this->archiveTitle(array( 'category' => _t('分类 %s 下的文章'), 'search' => _t('包含关键字 %s 的文章'), 'tag' => _t('标签 %s 下的文章'), 'author' => _t('%s 发布的文章') ), '', ' - '); ?><?php $this->options->title(); ?><?php if($this->is('index')): ?> - <?php $this->options->description() ?><?php endif; ?></title>


