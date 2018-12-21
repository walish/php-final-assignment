<?php
    include "classes/Article.php";
    include "helpers/utils.php";
    include "simplehtmldom_1_5/simple_html_dom.php";
    $offset = 0;
    $html = file_get_html('http://www.doisongphapluat.com/tin-tuc/', false, null, $offset);

    $articleContainer = $html->find('.delta .module-vertical-list')[0];

    echo $articleContainer;

    $articleList = $articleContainer->find('li');

    // start crawling
    foreach ($articleList as $elem) {
        $title = $elem->find('.title')[0]->plaintext;

        $url = $elem->find('a')[0]->href;

        $imageSource = $elem->find('.info')[0]->find('img')[0]->src;

        $description = sanitizeDescription($elem->find('.info')[0]->plaintext);

        $publishDate = sanitizeDateTime($elem->find('.meta')[0]->plaintext);

        // get article content
        $articleDetailPage = file_get_html($url, false, null, $offset);
        $content = "";
        foreach ($articleDetailPage->find('p') as $para) {
            $content = $content . $para;
        }

        // add article to database
        $article = new Article($title, $url, $imageSource, $publishDate, $description, $content);
        $article->addToDb();
    }
