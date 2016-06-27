<?php


namespace Home\Model;
use Think\Model\RelationModel;

class PatientModel extends RelationModel{
    protected $_link = array(
        'Patient' => array(
            'mapping_type' => self::HAS_ONE,
            'class_name' => 'Patient',
            'mapping_name' => 'Patients',
            'foreign_key' => 'userId',
            // 定义更多的关联属性
        ),
    );


}