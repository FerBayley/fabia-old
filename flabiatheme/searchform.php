<div id=searchform>
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
<?php if (function_exists("the_search_query")) : ?>
<div><input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
<?php else : ?>
<div><input type="text" value="" name="s" id="s" />
<?php endif; ?>
<input type="submit" id="searchsubmit" value="" />
</div>
</form>
</div>
