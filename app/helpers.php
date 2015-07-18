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
    if (!$parser) {
        $parser = new Markdown();
    }

    return $parser->parse($markdown);
}

/**
 * Returns a list of the experience types that are valid
 * @return array
 */
function experience_types()
{
    return [
        '' => null,
        'Education' => 'Education',
        'Work' => 'Work',
        'Open-source' => 'Open-source',
        'Projects' => 'Projects'
    ];
}
