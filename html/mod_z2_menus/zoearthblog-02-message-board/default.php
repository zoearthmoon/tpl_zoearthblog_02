<?php
defined('_JEXEC') or die;
?>
<?php $i=0;?>
<?php foreach ($menus as $menu):?>
<section id="contact" class="comments main style3 secondary thumbnail " style="padding: 0 25px 0 25px">
    
        <header>
            <h2><?php echo $menu['name'];?></h2>
            <?php echo $menu['description'];?>
        </header>
        
<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'zoearthmoon'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

        
    
</section>
<?php endforeach; ?>