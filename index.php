<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eylexander - Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Homebase for many projects">
    <meta name="author" content="Eylexander">
    <meta name="theme-color" content="#161623">
    <meta name="Access-Control-Allow-Origin" content="*">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://eylexander.xyz/">
    <meta property="og:title" content="Eylexander - Home">
    <meta property="og:description" content="Homebase for many projects">
    <meta property="og:image" content="https://eylexander.xyz/images/backgroundOGImage.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@eylexander">
    <meta name="twitter:title" content="Eylexander - Home">
    <meta name="twitter:description" content="Homebase for many projects">
    <meta name="twitter:image" content="https://eylexander.xyz/images/backgroundOGImage.png">
    <meta name="twitter:creator" content="@eylexander">

    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="./tools/style.css" rel="stylesheet">
    <script defer src="./tools/scripts.js"></script>
</head>

<body>
    
    <div id="circle"></div>
    
    <div class="backdrop"></div>


    <span class="headertitle hidden">Eylexander's WebHub</span>

        <?php 
        
        $json = file_get_contents('./tools/projects.json');
        $json_data = json_decode($json,true);

        $i = 0;
        foreach ($json_data as $key => $value) {

            if ($i % 2 == 0) {
                echo "<div class=\"container\">\n";
            }

            echo "<div class=\"card hidden\">\n";
                echo "<a href=\"" . $value['options']['url'] . "\" target=\"_blank\">\n";
                echo "<div class=\"content\">\n";
                    echo "<div class=\"img\">\n";
                        echo "<img width=\"64\" src=\"./images/" . $value['image'] . "\" alt=\"" . $value['name'] . "\">\n";
                    echo "</div>\n";
                    echo "<div class=\"cardContent\">\n";
                        echo "<h3>" . $value['name'] . "<br><span>" . $value['description'] . "</span></h3>\n";
                    echo "</div>\n";
                echo "</div>\n";
                echo "</a>\n";

                $j = 1;
                // Loop through options array
                echo "<ul class=\"sci\">\n";
                foreach ($value['options'] as $key => $option) {
                    echo "<li style=\"--i:" . $j . "\">\n";
                        echo "<a href=\"" . $option . "\" target=\"_blank\" class=\"imageDescription\">\n";
                            switch ($option) {
                                case $value['options']['readme']:
                                    echo "<img width=\"24\" src=\"./images/readme-mark.svg\" alt=\"Readme\">\n";
                                    echo "<span>Data</span>\n";
                                    break;
                                case $value['options']['url']:
                                    echo "<img width=\"24\" src=\"./images/link_mark_white.svg\" alt=\"URL\">\n";
                                    echo "<span>URL</span>\n";
                                    break;
                                case $value['options']['github']:
                                    echo "<img width=\"24\" src=\"./images/github-mark-white.svg\" alt=\"GitHub\">\n";
                                    echo "<span>GitHub</span>\n";
                                    break;
                                default:
                                    echo "<img width=\"24\" src=\"./images/github-mark-white.svg\" alt=\"GitHub\">\n";
                                    echo "<span>GitHub</span>\n";
                                    break;
                            }
                        echo "</a>\n";
                    echo "</li>\n";
                    $j++;
                }
                echo "</ul>\n";

            echo "</div>\n";

            if ($i % 2 == 1) {
                echo "</div>\n";
            }

            $i++;
        }
        
        ?>

    </div>

    <footer class="hidden">
        <?php 
        
        // Reproduce the footer but calculate the year
        $year = date("Y");
        echo "<div><p>\n";
            echo "<a href=\"/LICENSE\" target=\"_blank\" style=\"color: #ffffff\">\n";
                echo "Copyright ©";
            echo "</a>\n";
            echo "<a href=\"https://github.com/Eylexander\" target=\"_blank\" style=\"color: #ffffff\">\n";
                echo "Eylexander";
            echo "</a>\n";
            echo "<a href=\"/LICENSE\" target=\"_blank\" style=\"color: #ffffff\">\n";
                echo "MIT " . $year;
            echo "</a>\n";
        echo "</p></div>\n";

        ?>
    </footer>

</body>

</html>