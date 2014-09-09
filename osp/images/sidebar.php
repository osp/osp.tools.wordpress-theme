<ul>
  <li id="rss-442037522" class="widget widget_rss">
    <h2 class="widgettitle">
      <a class='rsswidget' href='http://ospublish.constantvzw.org/works/' title='What we&#39;ve made'>New at
      OSP-works</a>
    </h2>
    <ul>
      <li><a href="/portfolio/balsamine.html"><img src="/portfolio/banner_balsamine.png" style="width:420px;height:220px;"/><br/>Théatre Balsamine</a></li>
      <li><a href="/portfolio/balsamine.html"><img src="/portfolio/banner_osp.work.panik.png" style="width:420px;height:220px;"/><br/>Radio Panik</a></li>
      <li><a href="/portfolio/balsamine.html"><img src="/portfolio/banner_osp.work.gallait.png" style="width:420px;height:220px;"/><br/>Constant Variable</a></li>
    </ul>
  </li>
  <li id="rss-442037526" class="widget widget_rss">
    <h2 class="widgettitle">
     <a class='rsswidget' href='http://ospublish.constantvzw.org/foundry' title=''>New at OSP-foundry</a>
    </h2>
    <ul>
      <li>
        <a href="http://ospublish.constantvzw.org/foundry/reglo/" rel="bookmark" title="Reglo"><img src="http://ospublish.constantvzw.org/foundry/wp-content/uploads/reglo-2.png" style="width:420px;height:148px"></a>
      <a href="http://ospublish.constantvzw.org/foundry/reglo/" rel="bookmark" title="Download Reglo">Reglo</a>
      
      </li>
      <li>
        <a href="http://ospublish.constantvzw.org/foundry/crickx/" rel="bookmark" title="Crickx"><img src ="http://ospublish.constantvzw.org/foundry/wp-content/uploads/crickx_header-600x251.png" style="width:420px;height:176px"></a>
<a href="http://ospublish.constantvzw.org/foundry/crickx/" rel="bookmark" title="Download Crickx">Crickx</a>
      </li>
      <li>
        <a href="http://ospublish.constantvzw.org/foundry/sans-guilt/" rel="bookmark" title="Sans Guilt"><img src ="http://ospublish.constantvzw.org/foundry/wp-content/uploads/SANS_GUILT-page001SAMPLE1.png" style="width:420px;height:171px"></a>
        <a href="http://ospublish.constantvzw.org/foundry/sans-guilt/" rel="bookmark" title="Download Sans Guilt">Sans Guilt</a>
      </li>
    </ul>
  </li>

	<li>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		<?php endif; ?>
	</li>

  <li class="widget">
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  </li>

  <li class="widget"><h2><?php _e('Admin'); ?></h2>
    <ul>
      <?php wp_register(); ?>
      <li><?php wp_loginout(); ?></li>
      <?php wp_meta(); ?>
    </ul>
  </li>
</ul>

