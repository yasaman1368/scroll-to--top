<?php
add_shortcode('scroll-to-top', 'add_scroll_to_top');
function add_scroll_to_top(): string
{
    return '<a id="back2Top" class="top-scroll" title="Back to top" href="#" "><i class=" ti-arrow-up"></i></a>';
}
