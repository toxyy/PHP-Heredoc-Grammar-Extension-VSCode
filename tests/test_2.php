<?php

return
<<<HTML
<section id="$topic_id" class="topic">
    <h2>$content_ary[content]</h2>
    {$render("posts.php
    ")}
    <footer>
        <p>$vars[content_count] {$lang('post')}</p>
        <div>
            <a href="#" target="_top">^</a>
            <a href="#$topic_id{$lang('post')}">#</a>
        </div>
    </footer>
</section>

HTML;
