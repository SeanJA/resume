<?php
use cebe\markdown\Markdown;

/**
 * Helper for parsing markdown into html
 * @param $markdown
 * @return string
 */
function markdown($markdown)
{
    static $parser;
    if(!$parser){
        $parser = new Markdown();
    }
    return $parser->parse($markdown);
}
