<?php

 

$db['widgets'] = array(
    'columns' => array(
        'id' => array(
            'type' => 'int unsigned',
            'required' => true,
            'pkey' => true,
            'extra' => 'auto_increment',
            'editable' => false,
            'comment' => app::get('site')->_('挂件ID'),
        ),
        'app' => array (
            'type' => 'varchar(30)',
            'required' => true,
            'default' => '',
            'editable' => false,
            'comment' => app::get('site')->_('如果是系统挂件, 此字段为应用名. 如果是模板挂件此字段为空'),
        ),
        'theme' => array(
            'type' => 'varchar(30)',
            'required' => true,
            'default' => '',
            'editable' => false,
            'comment' => app::get('site')->_('如果是模板级挂件, 此字段为模板名. 如果是系统挂件此字段为空'),
        ),
        'name' => array (
            'type' => 'varchar(30)',
            'required' => true,
            'default' => '',
            'editable' => false,
            'comment' => app::get('site')->_('挂件名'),
        )
    ),
    'index' => array(
        'ind_uniq' => 
        array (
          'columns' => 
          array (
            0 => 'app',
            1 => 'theme',
            2 => 'name',
          ),
        ),
    ),
    'unbackup' => true,
    'comment' => app::get('site')->_('挂件表'),
);
