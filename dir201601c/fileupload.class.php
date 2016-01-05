<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/1/5
 * Time: 16:36
 */
class FileUpload{
    private $path = '../upload';
    private $allowtype = array('jpg','png','gif','txt');
    private $maxsize = '1000000';
    private $israndname = true;

    private $originName;
    private $tmpFileName;
    private $fileType;
    private $fileSize;
    private $newFileName;
    private $errorNum = 0;
    private $errorMsg = '';

    function set($key, $val){
        $key = strtolower($key);
        if(array_key_exists($key, get_class_vars(get_class($this)))){
            $this->setOption($key,$val);
        }
        return $this;
    }

    function upload($fileField){
        $return = true;
        if(!$this->checkFilePath()){
            $this->errorMsg = $this->getError();
            return false;
        }
        $name = $_FILES[$fileField]['name'];
        $tmp_name = $_FILES[$fileField]['tmp_name'];
        $size = $_FILES[$fileField]['size'];
        $error = $_FILES[$fileField]['error'];
        if(is_array($name)){
            $errors = array();
            for($i = 0; $i < count($name); $i++){
                if($this->setFiles($name[$i],$tmp_name[$i],$size[$i],$error[$i])){
                    if(!$this->checkFileSize() || !$this->checkFileType()){
                        $errors[] = $this->getError();
                        $return = false;
                    }
                }else{
                    $errors[] = $this->getError();
                    $return = false;
                }
                if(!$return){
                    $this->setFiles();
                }
            }
            if($return){
                $fileNames = array();
                for($i = 0; $i < count($name); $i++){
                    if($this->setFiles($name[$i],$tmp_name[$i],$size[$i],$error[$i])){
                        $this->setNewFileName();
                        if(!$this->copyFile()){
                            $errors[] = $this->getError();
                            $return = false;
                        }
                        $fileNames[] = $this->newFileName;
                    }
                }
                $this->newFileName = $fileNames;
            }
            $this->errorMsg = $errors;
            return $return;
        }else{
            if($this->setFiles($name,$tmp_name,$size,$error)){
                if($this->checkFileSize() && $this->checkFileType()){
                    $this->setNewFileName();
                    if($this->copyFile()){
                        return true;
                    }else{
                        $return = false;
                    }
                }else{
                    $return = false;
                }
            }else{
                $return = false;
            }
            if(!$return){
                $this->errorMsg = $this->getError();
            }
            return $return;
        }
    }

    public function getFileName(){
        return $this->newFileName;
    }

    public function getErrorMsg(){
        return $this->errorMsg;
    }

    private function getError(){
        $str = "上传文件<font color='red'>{$this->originName}</font>时出错 : ";
        switch($this->errorNum){
            case 4: $str .= '没有文件被上传';break;
            case 3: $str .= '文件只有部分被上传';break;
            case 2: $str .= '上传文件超过HTML中MAX_FILE_SIZE的值';break;
            case 1: $str .= '上传文件超过php.ini中upload_max_filesize的值';break;
            case -1: $str .= '未允许类型';break;
            case -2: $str .= "上传文件过大，不能超过{$this->maxsize}个字节";break;
            case -3: $str .= '上传失败';break;
            case -4: $str .= '建立存放上传文件的目录失败，请重新指定';break;
            case -5: $str .= '必须指定上传文件的路径';break;
            default: $str .= '未知错误';
        }
        return $str.'<br>';
    }

    private function setFiles($name='', $tmp_name='', $size=0, $error=0){
        $this->setOption('errorNum',$error);
        if($error){
            return false;
        }
        $this->setOption('originName',$name);
        $this->setOption('tmpFileName',$tmp_name);
        $anyStr = explode('.',$name);
        $this->setOption('fileType',strtolower($anyStr[count($anyStr)-1]));
        $this->setOption('fileSize',$size);
        return true;
    }

    private function setOption($key,$val){
        $this->$key = $val;
    }

    private function setNewFileName(){
        if($this->israndname){
            $this->setOption('newFileName',$this->proRandName());
        }else{
            $this->setOption('newFileName',$this->originName);
        }
    }

    private function checkFileType(){
        if(in_array(strtolower($this->fileType),$this->allowtype)){
            return true;
        }else{
            $this->setOption('errorNum',-1);
            return false;
        }
    }

    private function checkFileSize(){
        if($this->fileSize > $this->maxsize){
            $this->setOption('errorNum',-2);
            return false;
        }else{
            return true;
        }
    }

    private function checkFilePath(){
        if(empty($this->path)){
            $this->setOption('errorNum',-5);
            return false;
        }
        if(!file_exists($this->path) || !is_writable($this->path)){
            if(!@mkdir($this->path,0755)){
                $this->setOption('errorNum',-4);
                return false;
            }
        }
        return true;
    }

    private function proRandName(){
        $fileName = date('YmdHis').'_'.rand(100,999);
        return $fileName.'.'.$this->fileType;
    }

    private function copyFile(){
        if(!$this->errorNum){
            $path = rtrim($this->path,'/').'/';
            $path .= $this->newFileName;
            if(@move_uploaded_file($this->tmpFileName,$path)){
                return true;
            }else{
                $this->setOption('errorNum',-3);
                return false;
            }
        }else{
            return false;
        }
    }
}