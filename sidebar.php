<aside id="sideLeft" class="widget-area">
    <h1 class="hidden">左サイド</h1>
    <div class="column-inner">
        <aside id="widget-profile" class="widget-container">
        <h3 class="widget-title">
            <div>
                <span class="eutemia ft32">k</span><span class="eutemia ft25">iwii</span>是谁
            </div>
        </h3>
        <div class="text-widget widget-content">
        <p><img class="avatar-pic" src="<?php bloginfo('template_url'); ?>/images/180.jpg" alt="profilephoto"></p>
            <p>
                駄目人間一枚<br>
                公主病大小姐病患者<br>
                明天能做的事，今天就不要做了………………<br>
                ピカピカだ 
            </p>
        </div>
        </aside>

		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar') ) : ?>
		<?php endif; ?>
    </div>
</aside>

<aside id="sideRight" class="widget-area">
    <h1 class="hidden">右サイド</h1>
    <div class="column-inner">

		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar') ) : ?>
		<?php endif; ?>

    </div>
</aside>
