<?php
    $files = glob("src/*.php");

    echo "Building...\n\n";

    foreach ($files as $file) {
        $output = str_replace("src/", "dist/", $file);
        $output = str_replace(".php", ".html", $output);

        exec("php $file > $output");

        echo "Building $file...\n\n";
    }

    echo "Build complete.";
?>