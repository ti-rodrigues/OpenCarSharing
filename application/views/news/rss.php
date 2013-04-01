<?php
$this->load->helper('xml');
$dom = xml_dom();
$items = xml_add_child($dom, 'items');
foreach ($news as $news_item):
$item = xml_add_child($items, 'item');
    xml_add_child($item, 'title', $news_item['title']);
	xml_add_child($item, 'content', $news_item['text']);
	xml_add_child($item, 'link', 'news/'.$news_item['slug']);

endforeach;

xml_print($dom);
?>