<? $i = 0; ?>
<section class="breadcrumbs">
    <div class="c">
        <ul  itemscope itemtype="https://schema.org/BreadcrumbList">
            <li class="" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="https://benefits.com/" itemprop="item">
                    <span itemprop="name">Home</span>
                </a>
                <span style="display:none;" itemprop="position" content="<?= $i; $i++; ?>"></span>
            </li>

            <!-- for Posts -->
            <? if (is_single()): ?>
                <? if (has_category()): ?>
                    <li class="" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="<?= get_category_link(get_the_category()[0]); ?>" itemprop="item">
                            <span itemprop="name"><?= get_the_category()[0]->name; ?></span>
                        </a>
                        <span style="display:none;" itemprop="position" content="<?= $i; $i++; ?>"></span>
                    </li>
                <? endif; ?>
            <? endif; ?>

            <!-- for Pages -->
            <? if (is_page()): ?>
                <!-- Parents -->
                <? $ancestors = array_reverse(get_post_ancestors(get_the_ID())); ?>
                <? foreach ($ancestors as $ancestor): ?>
                    <li class="" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a href="<?= get_permalink($ancestor); ?>" itemprop="item">
                            <span itemprop="name"><?= get_the_title($ancestor); ?></span>
                        </a>
                        <span style="display:none;" itemprop="position" content="<?= $i; $i++; ?>"></span>
                    </li>
                <? endforeach; ?>
            <? endif; ?>

            <? if (is_category()): ?>
                <li><a href="<? $_SERVER['REQUEST_URI']; ?>"><? single_term_title(); ?></a></li>
            <? else: ?>
                <li><a href="<? the_permalink(); ?>"><? the_title(); ?></a></li>
            <? endif; ?>
        </ul>
    </div><!-- c -->
</section><!-- breadcrumbs -->