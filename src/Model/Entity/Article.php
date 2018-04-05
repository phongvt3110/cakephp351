<?php
/**
 * Created by PhpStorm.
 * User: pvt
 * Date: 4/5/18
 * Time: 11:47 PM
 */

// src/Model/Entity/Article.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Article extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];
}