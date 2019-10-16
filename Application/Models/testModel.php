<?php

class testModel extends MODEL{
    public function querythis(){
        $query = array();
        $query['statement'] = 'SELECT 1 AS DB_STATUS';
        $removed_flag = 0;
        $params = array(
            ':removed_flag' => array(
                'var' => $removed_flag,
                'type' => PDO::PARAM_INT
            )
        );
        //$query['params'] = $params;
        return $this->_query($query);
    }
}