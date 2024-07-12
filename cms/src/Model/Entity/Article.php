<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;
use Cake\Collection\Collection;

class Article extends Entity
{
    protected array $_accessible = [
        'title' => true,
        'body' => true,
        'published' => true,
        'created' => true,
        'modified' => true,
        'users' => true,
        'tag_string' => true,
    ];

    protected function _getTagString()
    {
        if (isset($this->_fields['tag_string'])) {
            return $this->_fields['tag_string'];
        }
        if (empty($this->tags)) {
            return '';
        }
        $tags = new Collection($this->tags);
        $str = $tags->reduce(function ($string, $tag) {
            return $string . $tag->title . ', ';
        }, '');

        return trim($str, ', ');
    }
}
