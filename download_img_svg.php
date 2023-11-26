<?php
set_time_limit(1200); 

$targetDirectory = 'C:/xampp/htdocs/ballchamp-2tb/img/img2/';

// Download SVG files
for ($i = 1; $i <= 300; $i++) {
    $url = "https://sv.tdedkick.com/imgtded/flag/{$i}.svg";
    $fileName = $targetDirectory . sprintf('%d', $i) . '.svg';
    if (fileExistsOnWeb($url) && !file_exists($fileName)) {
        downloadFile($url, $fileName);
    } else {
        echo "File {$fileName} already exists or does not exist on the web.<br>";
    }
}

// // Download PNG files
// for ($i = 1; $i <= 100000; $i++) {
//     $url = "https://sv.tdedkick.com/imgtded/logo/{$i}.png";
//     $fileName = $targetDirectory . sprintf('%d', $i) . '.png';
//     if (fileExistsOnWeb($url) && !file_exists($fileName)) {
//         downloadFile($url, $fileName);
//     } else {
//         echo "File {$fileName} already exists or does not exist on the web.<br>";
//     }
// }

function fileExistsOnWeb($url) {
    $headers = get_headers($url);
    return stripos($headers[0], '200 OK') !== false;
}

function downloadFile($url, $fileName) {
    if (file_exists($fileName)) {
        echo "File {$fileName} is already exist.<br>";
        return;
    }

    $ch = curl_init($url);
    $fp = fopen($fileName, 'w');

    if ($fp === false) {
        mkdir(dirname($fileName), 0755, true);
        $fp = fopen($fileName, 'w');
    }

    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, 0);

    $result = curl_exec($ch);

    curl_close($ch);
    fclose($fp);

    if ($result) {
        echo "File {$fileName} downloaded successfully.<br>";
    } else {
        echo "Failed to download the file {$fileName}.<br>";
    }
}
?>