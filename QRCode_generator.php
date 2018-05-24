<?php

require_once ("config.php");
class QrcodeTemplate
{
    public $url = "";
    public $name = "";
    public $email = "";
    public $telephone = "";
    public $address = "";
    
    public function setUrl($url)
    {
        $this->url = $url;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    public function setTelePhone($telePhone)
    {
        $this->telephone = $telePhone;
    }

    public function setAddress(Address $address)
    {
        $this->address = $address;
    }

    public function createQrCode(){
        $qrId =  uniqid("QRCode");
        $filepath = "img/$qrId.png";
        $codeContents = "name: $this->name , email: $this->email , telephone: $this->telephone , address: $this->address  , url: $this->url";
        QRcode::png($codeContents, $filepath, QR_ECLEVEL_H, 10);
        $QR = imagecreatefrompng($filepath);
        imagepng($QR, $filepath);
        return $filepath;
    }
}
