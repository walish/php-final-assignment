<?php
namespace App\Controller;

use App\Migration\Migration;
use App\Model\NewsModel;
use Cu\Controller\Controller;

include __DIR__ . './../vendor/simplehtmldom_1_5/simple_html_dom.php';

class NewsController extends Controller
{
    public function addNewToDatabase($req, $res)
    {
        if (Migration::migrate()) {
            echo 'sucess';
        } else {
            echo 'failed';
        }
        $model = new NewsModel();
        $news_info = $this->getNews();
        foreach ($news_info as $key => $news) {
            $result = $model->add($news);
        }

        header('Location: ' . './index.php');
    }
    
    public function getNews()
    {
        $html = file_get_html("http://www.doisongphapluat.com/tin-tuc/");
        $news = $html->find('ul[class=module-vertical-list] li');

        $news_info = array();

        foreach ($news as $key => $new) {
            $sub_news = array();

            $title = $new->find('.title');
            $a = $title[0]->find('a');
            $titleText = $a[0]->innertext;
            $sub_news['title'] = $titleText;

            // echo $titleText;

            // echo "<br>";
            $linkNews = $new->find('a[title]');
            $source_link = $linkNews[0]->href;
            $sub_news['source_link'] = $source_link;
            // echo $source_link;

            // echo "<br>";

            $linkImage = $new->find('a[title] img');
            $img_link = $linkImage[0]->src;
            $sub_news['img_link'] = $img_link;

            // echo $img_link;

            // echo "<br>";
            $description = $new->find('.desc')[0]->innertext;

            $sub_news['description'] = $description;
            // echo $description;
            // echo "<br>";

            $time = $new->find('.meta')[0];
            $children = $time->children; // get an array of children
            foreach ($children as $child) {
                $child->outertext = ''; // This removes the element, but MAY NOT remove it from the original $myDiv
            }

            $update_time = $time->innertext;

            // echo $update_time;

            $sub_news['update_time'] = $update_time;

            array_push($news_info, $sub_news);
        }

        return $news_info;
    }
}
