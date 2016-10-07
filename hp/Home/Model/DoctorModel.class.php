<?php


namespace Home\Model;
use Think\Model\RelationModel;

class DoctorModel extends RelationModel{
    protected $_link = array(
        'curetime' => array(
            'mapping_type' => self::HAS_ONE,
            'class_name' => 'dict_curetime',
            'mapping_name' => 'curetimes',
            'foreign_key' => 'id',
            'as_fields' => 'title:curetime'

            // 定义更多的关联属性
        ),
        'title' => array(
            'mapping_type' => self::HAS_ONE,
            'class_name' => 'dict_title',
            'mapping_name' => 'titles',
            'foreign_key' => 'id',
            'as_fields' => 'title:title'

            // 定义更多的关联属性
        ),
    );
}