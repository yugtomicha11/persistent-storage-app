<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 16px;
            margin: 20px;
        }
        .image-grid img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }
        .image-grid img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<div class="image-grid">
    <?php
    $dir = 'galleries/';
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    if (is_dir($dir)) {
        $files = scandir($dir);
        foreach ($files as $file) {
            $file_parts = pathinfo($file);
            if (in_array(strtolower($file_parts['extension']), $allowedTypes)) {
                echo '<div><img src="' . $dir . $file . '" alt="Gallery Image"></div>';
            }
        }
    }
    ?>
</div>

</body>
</html>
