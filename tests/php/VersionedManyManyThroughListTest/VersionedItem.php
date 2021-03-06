<?php

namespace SilverStripe\Versioned\Tests\VersionedManyManyThroughListTest;

use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\DataObject;
use SilverStripe\ORM\ManyManyThroughList;
use SilverStripe\Versioned\Versioned;

/**
 * @property string $Title
 * @method ManyManyThroughList Objects()
 * @mixin Versioned
 */
class VersionedItem extends DataObject implements TestOnly
{
    private static $table_name = 'ManyManyThroughListTest_VersionedItem';

    private static $db = [
        'Title' => 'Varchar'
    ];

    private static $extensions = [
        Versioned::class
    ];

    private static $belongs_many_many = [
        'Objects' => 'SilverStripe\\Versioned\\Tests\\VersionedManyManyThroughListTest\\VersionedObject.Items'
    ];
}
