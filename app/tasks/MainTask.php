<?php

class MainTask extends \Phalcon\Cli\Task {

    public function mainAction() {

        // Example HTML
        $html = '<html><body><p>Hi</p></body></html>';

        // Load HTML
        $dom = \Sunra\PhpSimple\HtmlDomParser::str_get_html($html);

        // Select Paragraph
        $paragraph = $dom->find('p', 0);

        // Say Hi
        echo $paragraph->innertext;


    }

}
