<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(10);
?>
<ul>
    <?php if ($pager->hasPrevious()) : ?>
        <li class="paginBtn paginFirst">
            <a href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>"></a>
        </li>
        <li class="paginBtn paginPrev"><a href="<?= $pager->getPrevious() ?>"></a></li>
    <?php endif ?>

    <?php foreach ($pager->links() as $link) : ?>
        <li>
            <a href="<?= $link['uri'] ?>" <?= $link['active'] ? 'class="active"' : '' ?>>
                <?= $link['title'] ?>
            </a>
        </li>
    <?php endforeach ?>

    <?php if ($pager->hasNext()) : ?>
        <li class="paginBtn paginNext"><a href="<?= $pager->getNext() ?>"></a></li>
        <li class="paginBtn paginLast">
            <a href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>"></a>
        </li>
    <?php endif ?>
</ul>