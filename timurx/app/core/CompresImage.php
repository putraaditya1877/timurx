  <?php 
class CompresImage {
    public static function  compressImage($source, $destination, $quality)
    {
        $info = getimagesize($source);
        // var_dump($info);
        if ($info['mime'] == 'image/jpeg')
        $image = imagecreatefromjpeg($source);
        elseif ($info['mime'] == 'image/gif')
        $image = imagecreatefromgif($source);
        elseif ($info['mime'] == 'image/png')
        $image = imagecreatefrompng($source);
        imagejpeg($image, $destination, $quality);
        return $destination;
    }
}