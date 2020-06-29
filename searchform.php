<form method="get" id="searchform"

action="<?php bloginfo('url'); ?>/">

<br>

 <div align="right">
   <input type="text" class="search" value="<?php the_search_query(); ?>" placeholder="Search this blog"

onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search this blog'" /

name="s" id="s" />

 </div>

</form>
