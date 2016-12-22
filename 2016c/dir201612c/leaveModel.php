<?php
# 留言板业务逻辑处理
require_once 'gbookModel.php';

class leaveModel
{
    public function write(gbookModel $gb, $data)
    {
        return $gb->write($data);
    }
}