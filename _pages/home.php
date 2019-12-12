---
title: 'main::lang.home.title'
permalink: /
description: ''
layout: default

'[slider]':
    code: home-slider

'[localSearch]':
    hideSearch: 0
    menusPage: local/menus

'[featuredItems]':
    items: ['76', '77', '78', '79']
    limit: 3
    itemsPerRow: 3
    itemWidth: 400
    itemHeight: 300
---
<?= component('slider'); ?>

<?= component('localSearch'); ?>

<?= component('featuredItems'); ?>