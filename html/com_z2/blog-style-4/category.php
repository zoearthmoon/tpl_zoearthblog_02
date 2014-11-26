<?php
defined('_JEXEC') or die;
?>
<script language="Javascript">
jQuery(document).ready(function() {
    jQuery(".pageC").removeClass('span4').addClass('span3');
    jQuery(".pageM").removeClass('span8').addClass('span9');
});
</script>
<div class="row clearfix">
    <ul class="blog-post-grid">

<?php if(isset($this->items) && count($this->items) > 0): ?>
<?php foreach ($this->items as $item):?>
    <li class="span3 blog-post-item">
        <div class="blog-post-hover">
            <p>
                <a href="<?php echo $item->link;?>" class="clearfix" >
                <?php echo $item->title;?>
                </a>
                posted on <?php echo JHtml::_('date',$item->created,'Y/m/d') ?><br />
            </p>
        </div>
        <a href="<?php echo $item->link;?>">
            <img src="<?php echo Z2HelperImage::_($item->image,270,220,'FC')?>" alt="<?php echo $item->title;?>">
        </a>
    </li>
<?php endforeach;?>
    </ul>
</div>

<div class="pagination">
    <?php echo $this->pagination->getPagesLinks(); ?>
</div>
<?php endif;?>