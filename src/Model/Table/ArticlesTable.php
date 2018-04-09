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
use Cake\Utility\Text;

class ArticlesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function beforeSave($event, $entity, $option){
        if($entity->isNew() && !$entity->slug){
            $sluggedTitle = Text::slug($entity->title);
            $entity->slug = substr($sluggedTitle, 0, 191);
        }
    }
}
