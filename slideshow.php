<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assets/animation/owl.carousel.min.css">
    <link rel="stylesheet" href="./Assets/animation/owl.theme.default.min.css">
    <link rel="stylesheet" href="./Assets/animation/animation.css">
    <link rel="stylesheet" href="slideshow.css">
</head>

<body>

    <div class="main-show owl-carousel slideshow owl-theme">

        <?php
        setlocale(LC_ALL, 'ja_JP.UTF-8');
        $handle = fopen("CSV/slide_data.csv", "r");
        $data = fgetcsv($handle, 1000, ",");
        $jsondata = [];

        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $data = mb_convert_encoding($data, 'UTF-8', 'sjis-win');
            $jsondata[] = $data;
        }
        $num = count($jsondata);
        foreach ($jsondata as &$value) {

            echo "
                        <div class='slide animate fadeIn'>
                            <div class='slide-content '>
                                <img src='./Assets/slideshow/$value[4]' alt=''>
                            </div>
                        </div>
                        ";
        }
        fclose($handle);
        ?>

    </div>
    
    <div class="main-show eventshow">

        <div class="wrapper">

            <div class="heading animate fadeDown">
                <div class="title">
                    <div class="icon">開催イベント案内</div>
                </div>
                <div class="time-date">
                    <div class="date" id="date"></div>
                    <div class="time" id="time"></div>
                </div>
            </div>

            <div class="events">

                <div class="event-list">
                    <?php
                    setlocale(LC_ALL, 'ja_JP.UTF-8');
                    $handle = fopen("CSV/event_data.csv", "r");
                    $data = fgetcsv($handle, 1000, ",");
                    $jsondata = [];

                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        $data = mb_convert_encoding($data, 'UTF-8', 'sjis-win');
                        $temp = tmpfile();
                        $meta = stream_get_meta_data($temp);
                        rewind($temp);
                        $jsondata[] = str_replace('[CRLF]', '<br>', $data);
                    }
                    $index = 0;
                    foreach ($jsondata as $keys) {
                        $index++;
                        echo "
                        <div class='event-item animate item-$index fadeIn'>
                            <div class='title-box'>
                                <div class='title'>$keys[8]</div>
                                <div class='category'>$keys[9]</div>
                            </div>
                            <div class='date-place'>
                                <div class='date'>$keys[4] ~ $keys[5]　$keys[6] ~ $keys[7]</div>
                                <div class='place'>$keys[10]</div>
                                <div class='subject'>$keys[11]</div>
                            </div>
                        </div>
                        ";
                    };
                    ?>
                </div>

                <div class="pagination six animate fadeUp">
                </div>

            </div>
        </div>
    </div>

    <script src="./Assets/animation/jquery.js"></script>
    <script src="./Assets/animation/owl.carousel.min.js"></script>
    <script src="slideshow.js"></script>
</body>

</html>