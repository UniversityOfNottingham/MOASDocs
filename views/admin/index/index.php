<?php
  queue_js_file('items');
  queue_js_file('tabs');
  echo head(array('title' => __('MOAS Docs'), 'bodyclass' => 'moas-docs'));
  echo flash();
  require_once dirname(__FILE__) . '/../../../vendor/parsedown.php';
  $Parsedown = new Parsedown();
?>


<ul id="section-nav" class="navigation tabs">
  <li><a class="active" href="#moas-config">Config</a></li>
  <li><a href="#moas-content">Content</a></li>
  <li><a href="#moas-troubleshooting">Troubleshooting</a></li>
</ul>


<section class="ten columns alpha">

    <div id="moas-config">
      <h1>Config</h1>
      <?php echo $Parsedown->text(file_get_contents(dirname(__FILE__) . '/../../../docs/config.md')); ?>
    </div>
    <div id="moas-content" style="display: none;">
      <h1>Content</h1>
      <?php echo $Parsedown->text(file_get_contents(dirname(__FILE__) . '/../../../docs/content.md')); ?>
    </div>
    <div id="moas-troubleshooting" style="display: none;">
      <h1>Troubleshooting</h1>
      <?php echo $Parsedown->text(file_get_contents(dirname(__FILE__) . '/../../../docs/troubleshooting.md')); ?>
    </div>

</section>

<script>
  jQuery(document).ready(function() {
    Omeka.Tabs.initialize();
  });
</script>

<?php echo foot();
