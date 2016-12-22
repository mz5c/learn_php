<?php
# 留言本模型
class gbookModel
{
    private $bookPath;
    private $data;

    public function setBookPath($bookPath)
    {
        $this->bookPath = $bookPath;
    }

    public function getBookPath()
    {
        return $this->bookPath;
    }

    public function open(){}

    public function close(){}

    public function read()
    {
        return file_get_contents($this->bookPath);
    }

    public function write($data)
    {
        $res = self::safe($data);
        $this->data = $res->name . '&' . $res->email . "\r\nsaid: \r\n" . $res->content;
        return file_put_contents($this->bookPath, $this->data, FILE_APPEND);
    }

    public static function safe($data)
    {
        $reflect = new ReflectionObject($data);
        $props = $reflect->getProperties();
        $messageBox = new stdClass();
        foreach ($props as $prop) {
            $ivar = $prop->getName();
            $messageBox->$ivar = trim($prop->getValue($data));
        }
        return $messageBox;
    }

    public function delete()
    {
        return file_put_contents($this->bookPath, "it's empty now");
    }
}