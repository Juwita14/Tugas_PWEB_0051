<?php
include "koneksi.php";

$base64_string = $_POST['image'];
$username = $_POST['username'];
$password = $_POST['passwordid'];
$image_name = "C:\\xampp\\htdocs\\kuisdadak\\upload\\".$username;

echo $username . "-" . $password . "=" . $base64_string;
echo $_FILES["image"]["name"];

if (!file_exists($image_name)) {
    if (!mkdir($image_name)) {
        $m=array('msg' => "REJECTED, cant create folder");
        echo json_encode($m);
        return;
    }
}

$fi = new FilesystemIterator($image_name, FilesystemIterator::SKIP_DOTS);
$fileCount = iterator_count($fi)+1;
$data = explode(',', $base64_string);
$fullName = $image_name."/X__".$fileCount."_". date("YmdHis") .".png";

$ifp = fopen($fullName, "wb");
fwrite($ifp, base64_decode($data[1]));
fclose($ifp);
if (!$ifp){
    $m=array('msg' => "REJECTED, ".$fullName."not saved");
    echo json_encode($m);
    return;}

$fi = new FilesystemIterator($image_name, FilesystemIterator::SKIP_DOTS);
$fileCount = iterator_count($fi);
$m = array('msg' => "Berhasil Mengirim"." total(".$fileCount.")");
echo json_encode($m);

$query = mysqli_query($koneksi, "insert into log (username) values ('$username')");

?><script language="javascript"> window.location="upload.php";</script>
