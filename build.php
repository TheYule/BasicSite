<?php
    function items($dir, &$results = array()) {
        $files = scandir($dir);

        foreach ($files as $key => $value) {
            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path)) $results[] = ["type" => "file", "path" => $path];
            else if ($value != "." && $value != "..") {
                $results[] = ["type" => "folder", "path" => $path];
                items($path, $results);
            }
        }
    
        return $results;
    }

    function deleteAll($dir) {
        foreach(glob($dir . "/*") as $file) {
            if (is_dir($file)) deleteAll($file);
            else unlink($file);
        }
        rmdir($dir);
    }

    $items = items("src");

    deleteAll("dist");
    mkdir("dist");

    echo "Building...\n\n";

    foreach ($items as $item) {
        $type = $item["type"];
        $path = $item["path"];
        $new = str_replace("src", "dist", $path);
        
        if ($type == "file") {
            if (preg_match("/\.php$/", $new)) {
                $new = str_replace(".php", ".html", $new);

                echo "Building file $new...\n";
    
                exec("php $path > $new");
            } else {
                $contents = file_get_contents($path);

                echo "Creating file $new...\n";
    
                file_put_contents($new, $contents);
            }
        } else if ($type == "folder") {
            echo "Creating folder $new...\n";

            mkdir($new);
        }
    }

    echo "\nBuild complete.";
?>