<?php 

function codificarURL(string $textEncript){
    $enctrypter = service('encrypter');
    $chiperText = $enctrypter->encrypt($textEncript);
    // echo $chiperText.'<br><br>';
    // echo rtrim(strtr(base64_encode($chiperText), '+/', '-_'), '=').'<br><br>';
    // echo $enctrypter->decrypt($chiperText);
    return rtrim(strtr(base64_encode($chiperText), '+/', '-_'), '=');
    // return base64_encode($chiperText);
}

function decodificarURL(string $textDecript) : string {
    $enctrypter = service('encrypter');
    $data = strtr($textDecript,'-_', '+/');
    $padding = strlen($data) % 4;
    if ($padding > 0) {
        $data .= str_repeat('=', 4 - $padding);
    }
    $decryp = base64_decode($data);
    return $enctrypter->decrypt($decryp);
    // return $enctrypter->decrypt(base64_decode($textDecript));
}

function todayBD() : string{
    return date('Y-m-d H:i:s');
}