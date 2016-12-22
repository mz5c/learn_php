<?php
# 留言本控制器
require_once 'leaveModel.php';
require_once 'message.php';

class authorControl
{
    public function message(leaveModel $l, gbookModel $gb, message $data)
    {
        return $l->write($gb, $data);
    }

    public function view(gbookModel $gb)
    {
        return $gb->read();
    }

    public function delete(gbookModel $gb)
    {
        $gb->delete();
        return $this->view($gb);
    }
}