<?php

namespace Weiwenhao\TreeQL\Tests\Stubs;

use Weiwenhao\TreeQL\Resource;

class ExampleResource extends Resource
{
    protected $baseColumns = ['id',  'description'];

    // 自动处理
    protected $includeColumns = ['content'];

    protected $includeRelations = [
        'article' => [
            'resource' => ArticleResource::class,
        ],
        'tags' => [
            'resource' => TagResource::class
        ],
        'user'
    ];

    // 手动处理
    protected $includeMeta = [];
    protected $includeOther = ['liked'];

    public function getLiked()
    {

    }
}
