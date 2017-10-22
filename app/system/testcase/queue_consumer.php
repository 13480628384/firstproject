<?php
/**
 * ecclub licence
 *
 * @copyright  Copyright (c) 2005-2012 ecclub Technologies Inc. (http://www.ecclub.cn)
 * @license  http://www.ecclub.cn/ baidu
 */
 
class queue_consumer extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        ob_implicit_flush(1);
        $this->obj_queue = system_queue::instance();
    }


    public function testConsume(){
        $n = 20000;
        for($i=0; $i<$n; $i++){
            if ($queue_messgage = $this->obj_queue->get('other')) {
                $this->obj_queue->run_task($queue_messgage);
                echo '-'.$queue_messgage->get_id()."\n";
                $this->obj_queue->ack($queue_messgage);
            }
        }
    }
}



