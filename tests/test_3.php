<?php return
<<<HTML
{$render("head")}
<section id="page">
    <header>$vars[page]</header>
    {$render("nav
    ", $vars)}
    <aside id="leftbar"></aside>
    <aside id="rightbar"></aside>
    <main>
    {$render("topic.php
    ", $vars)}
    </main>
    <footer>$vars[load_time] {$async_vars("load_time")}</footer>
</section>
{$render("foot")}
HTML;
