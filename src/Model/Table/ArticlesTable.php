<?php
/**
 * Created by PhpStorm.
 * User: pvt
 * Date: 4/5/18
 * Time: 11:43 PM
 */

// src/Model/Table/ArticlesTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class ArticlesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
}
