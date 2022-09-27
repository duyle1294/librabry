<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./Assets/animation/owl.carousel.min.css">
    <link rel="stylesheet" href="./Assets/animation/owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./Assets/animation/animation.css">
</head>

<body>

    <div class="wrapper">

        <div class="contents">

            <div class="switch news active animate five fadeIn">

                <div class="owl-carousel newslide owl-theme">

                    <?php
                    setlocale(LC_ALL, 'ja_JP.UTF-8');
                    $handle = fopen("CSV/slide_data1.csv", "r");
                    $data = fgetcsv($handle, 1000, ",");
                    $jsondata = [];

                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        $data = mb_convert_encoding($data, 'UTF-8', 'sjis-win');
                        $jsondata[] = $data;
                    }
                    $num = count($jsondata);
                    $index = 5;
                    foreach ($jsondata as &$value) {
                        $index++;
                        if ($index = 5) {
                            $index = 'six';
                        }
                        echo "
                        <div class='slide animate $index fadeRight'>
                            <div class='slide-content '>
                                <img src='./Assets/slideshow1/$value[4]' alt=''>
                            </div>
                        </div>
                        ";
                    }
                    fclose($handle);
                    ?>

                </div>

            </div>

            <div class="switch floor-map animate one fadeIn">

                <div class="map-container">

                    <div class="contain">

                        <div class="map map-1 active">

                            <div class="bubbles">
                                <div class="fukidashi studio">
                                    創作スタジオ1[工房]
                                </div>
                                <div class="fukidashi kitchen">
                                    キッチンスタジオ
                                </div>
                                <div class="fukidashi studio-2">
                                    創作スタジオ2[陶芸出]
                                </div>
                                <div class="fukidashi project">
                                    市民展示室[企画展示室]
                                </div>
                                <div class="fukidashi meeting">
                                    会議室・研究室
                                </div>
                                <div class="fukidashi galary">
                                    オープンギャラリー
                                </div>
                                <div class="fukidashi non-fiction">
                                    閲覧室[ﾉﾝﾌｨｸｼｮﾝｱﾘｱ]
                                </div>
                                <div class="fukidashi hall">
                                    ホワイエ
                                </div>
                                <div class="fukidashi children">
                                    閲覧室[児童アリア]
                                </div>
                                <div class="fukidashi music">
                                    音楽スタジオ
                                </div>
                                <div class="fukidashi fiction">
                                    閲覧室[ﾌｨｸｼｮﾝｱﾘｱ]
                                </div>
                                <div class="fukidashi space">
                                    市民活動支援スペース
                                </div>
                            </div>


                            <div class="icon-areas">
                                <div class="area icon-1"></div>
                                <div class="area icon-1-2"></div>
                                <div class="area icon-3"></div>
                                <div class="area icon-4"></div>
                                <div class="area icon-5"></div>
                                <div class="area icon-6"></div>
                                <div class="area icon-7"></div>
                                <div class="area icon-8"></div>
                                <div class="area icon-9"></div>
                                <div class="area icon-10"></div>
                                <div class="area icon-10-2"></div>
                                <div class="area icon-10-3"></div>
                                <div class="area icon-11"></div>
                                <div class="area icon-12"></div>
                                <div class="area icon-12-2"></div>
                                <div class="area icon-13"></div>
                                <div class="area icon-14"></div>
                                <div class="area icon-15"></div>
                            </div>

                        </div>

                        <div class="map map-2">

                            <div class="bubbles">
                                <div class="fukidashi study">
                                    学習室
                                </div>
                                <div class="fukidashi group">
                                    グループ学習室
                                </div>
                                <div class="fukidashi meet">
                                    小会議室
                                </div>
                                <div class="fukidashi gen">
                                    閲覧室[ヤングスペース]
                                </div>
                            </div>

                            <div class="icon-areas">
                                <div class="area floor-2"></div>
                                <div class="area floor-8"></div>
                                <div class="area floor-10"></div>
                            </div>

                        </div>

                        <div class="details">

                            <?php
                            setlocale(LC_ALL, 'ja_JP.UTF-8');
                            $handle = fopen("CSV/floor_map.csv", "r");
                            $data = fgetcsv($handle, 1000, ",");
                            $jsondata = [];

                            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                $data = mb_convert_encoding($data, 'UTF-8', 'sjis-win');
                                $jsondata[] = str_replace('[CRLF]', '<br>', $data);
                            }
                            $num = count($jsondata);
                            $index = 0;
                            foreach ($jsondata as &$value) {
                                $index++;
                                echo "
                            <div class='modal modal-$index'>

                            <div class='container'>
                                <div class='bg'></div>
                                <div class='heading'>
                                    <div class='number'>$value[1]</div>
                                    <span class='title'>$value[4]</span>
                                </div>
                                <div class='subject'>$value[9]</div>
                                <div class='image'></div>
                                <div class='close-modal'><button>閉じる</button></div>
                            </div>

                            </div>
                            ";
                            }
                            fclose($handle);
                            ?>
                        </div>

                    </div>

                    <div class="floor">
                        <div class="num num-2"></div>
                        <div class="num num-1 active"></div>
                    </div>

                    <div class="footer-icon">
                        <div class="footer footer-1 active">
                            <div class="icon icon-1"></div>
                            <div class="icon icon-3"></div>
                            <div class="icon icon-4"></div>
                            <div class="icon icon-5"></div>
                            <div class="icon icon-6"></div>
                            <div class="icon floor-1 icon-7"></div>
                            <div class="icon icon-8"></div>
                            <div class="icon floor-1 icon-9"></div>
                            <div class="icon icon-10"></div>
                            <div class="icon icon-11"></div>
                            <div class="icon icon-12"></div>
                            <div class="icon icon-13"></div>
                            <div class="icon icon-14"></div>
                            <div class="icon icon-15"></div>
                        </div>
                        <div class="footer footer2">
                            <div class="icon floor-2 icon-2"></div>
                            <div class="icon floor-2 icon-8"></div>
                            <div class="icon floor-2 icon-10"></div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="switch books animate one fadeIn">
                <div class="owl-carousel booksslide owl-theme">

                    <?php
                    setlocale(LC_ALL, 'ja_JP.UTF-8');
                    $handle = fopen("CSV/slide_data2.csv", "r");
                    $data = fgetcsv($handle, 1000, ",");
                    $jsondata = [];

                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        $data = mb_convert_encoding($data, 'UTF-8', 'sjis-win');
                        $jsondata[] = $data;
                    }
                    $num = count($jsondata);
                    $index = 5;
                    foreach ($jsondata as &$value) {
                        $index++;
                        if ($index = 5) {
                            $index = 'six';
                        }
                        echo "
                        <div class='slide animate $index fadeRight'>
                            <div class='slide-content '>
                                <img src='./Assets/slideshow2/$value[4]' alt=''>
                            </div>
                        </div>
                        ";
                    }
                    fclose($handle);
                    ?>

                </div>
            </div>

            <div class="switch events">

                <div class="heading animate one fadeDown">
                    <div class="title">
                        インベント案内
                    </div>
                    <div class="sub">
                        今後の開催イベントのご案内
                    </div>
                </div>

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
                        if (!$keys[12]) {
                            echo "
                            <div class='event-item animate item-$index fadeLeft'>
                                <div class='title-box'>
                                    <div class='title'>$keys[8]</div>
                                    <div class='category'>$keys[9]</div>
                                </div>
                                <div class='date-place'><span class='date'>$keys[4] ~ $keys[5]　$keys[6] ~ $keys[7]</span><span class='place'>$keys[10]</span></div>
                                <div class='subject'>$keys[11]</div>
                            </div>";
                        } else {
                            echo "
                            <div class='event-item animate item-$index fadeLeft'>
                                <div class='title-box'>
                                    <div class='title'>$keys[8]</div>
                                    <div class='category'>$keys[9]</div>
                                </div>
                                <div class='date-place'><span class='date'>$keys[4] ~ $keys[5]　$keys[6] ~ $keys[7]</span><span class='place'>$keys[10]</span></div>
                                <div class='subject'>$keys[11]</div>
                                <div class='detail'></div>
                            </div>";
                        };
                    };


                    fclose($handle);
                    ?>
                </div>
                <div class="pagination animate six fadeUp">
                </div>

                <div class="modals-wrapper">
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
                        if ($keys[12]) {
                            echo "
                            <div class='modal modal-$index'>
                                <div class='container'>
                                    <div class='bg'><img src='./Assets/events/Event_Popup_icon.png' alt=''></div>
                                    <div class='title-box'>
                                        <div class='contain'>
                                            <div class='title'>$keys[8]</div>
                                            <div class='category'>$keys[9]</div>
                                        </div>
                                        <div class='image'></div>
                                    </div>
                                    <div class='time-place'>
                                        <div class='time'>
                                            <span>開催日時</span> $keys[4]~$keys[5]　$keys[6] ~ $keys[7]
                                        </div>
                                        <div class='place'>
                                            <span>開催場所</span>$keys[10]
                                        </div>
                                    </div>
                                    <div class='note'>
                                        <div class='box subject'>$keys[11]</div>
                                        <div class='box ps'>$keys[12]</div>
                                    </div>
                                    <div class='close-modal'><button>閉じる</button></div>
                                </div>
                            </div>";
                        }
                    };
                    fclose($handle);
                    ?>
                </div>

            </div>

            <div class="switch time-table">

                <div class="heading animate one fadeDown">
                    <div class="qrcode">
                        <img src="./Assets/bus_timetable/QR-CODE_90x90.png" alt="">
                    </div>
                    <div class="time" id="time">

                    </div>
                </div>

                <div class="container animate three fadeIn">

                    <div class="table table-1">

                        <?php
                        setlocale(LC_ALL, 'ja_JP.UTF-8');
                        $handle = fopen("CSV/timetable_data.csv", "r");
                        $data = fgetcsv($handle, 1000, ",");
                        $jsondata = [];

                        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                            $data = mb_convert_encoding($data, 'UTF-8', 'sjis-win');
                            $jsondata[] = $data;
                        }
                        $index = 0;
                        foreach ($jsondata as $keys) {
                            $index++;
                            if ($keys[0] == 1) {
                                if ($keys[4]) {
                                    echo "
                                <div class='row'>
                                    <div class='hour'>$keys[1]</div>
                                    <div class='time'>
                                        <div class='bus'><span>$keys[2]</span>$keys[3]</div>
                                        <div class='bus'><span>$keys[4]</span>$keys[5]</div>
                                    </div>
                                </div>";
                                } else {
                                    echo "
                                <div class='row'>
                                    <div class='hour'>$keys[1]</div>
                                    <div class='time'>
                                        <div class='bus'><span>$keys[2]</span>$keys[3]</div>
                                    </div>
                                </div>";
                                }
                            }
                        };
                        fclose($handle);
                        ?>

                        <div class="footer">
                            <?php
                            setlocale(LC_ALL, 'ja_JP.UTF-8');
                            $handle = fopen("CSV/timetable_data.csv", "r");
                            $data = fgetcsv($handle, 1000, ",");
                            $jsondata = [];

                            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                $data = mb_convert_encoding($data, 'UTF-8', 'sjis-win');
                                $jsondata[] = str_replace('[CRLF]', '<br>', $data);
                            }
                            $num = count($jsondata);
                            date_default_timezone_set('Asia/Tokyo');
                            $runningTime = date('H:i') . "<br>";
                            $hour = (int)date('H');
                            foreach ($jsondata as $keys) {
                                if ($keys[3] > $runningTime && $keys[0] == 1 && $keys[3] > $hour) {
                                    $newdata[] = [$keys[3]];
                                }
                                if ($keys[5] > $runningTime && $keys[0] == 1 && $keys[5] > $hour) {
                                    $newdata[] = [$keys[5]];
                                }
                            }
                            echo "<div class='box'>" . $newdata[0][0] . "</div>";
                            echo "<div class='box'>" . $newdata[1][0] . "</div>";
                            echo "<div class='box'>" . $newdata[2][0] . "</div>";

                        ?>
                        </div>
                    </div>

                    <div class="table table-2">
                        <?php
                        setlocale(LC_ALL, 'ja_JP.UTF-8');
                        $handle = fopen("CSV/timetable_data.csv", "r");
                        $data = fgetcsv($handle, 1000, ",");
                        $jsondata = [];

                        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                            $data = mb_convert_encoding($data, 'UTF-8', 'sjis-win');
                            $jsondata[] = $data;
                        }
                        foreach ($jsondata as $keys) {
                            $index++;
                            if ($keys[0] == 2) {
                                if ($keys[4]) {
                                    echo "
                                <div class='row'>
                                    <div class='hour'>$keys[1]</div>
                                    <div class='time'>
                                        <div class='bus'><span>$keys[2]</span>$keys[3]</div>
                                        <div class='bus'><span>$keys[4]</span>$keys[5]</div>
                                    </div>
                                </div>";
                                } else {
                                    echo "
                                <div class='row'>
                                    <div class='hour'>$keys[1]</div>
                                    <div class='time'>
                                        <div class='bus'><span>$keys[2]</span>$keys[3]</div>
                                    </div>
                                </div>";
                                }
                            }
                        };
                        fclose($handle);
                        ?>

                        <div class="footer">
                            <?php
                            setlocale(LC_ALL, 'ja_JP.UTF-8');
                            $handle = fopen("CSV/timetable_data.csv", "r");
                            $data = fgetcsv($handle, 1000, ",");
                            $jsondata = [];

                            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                                $data = mb_convert_encoding($data, 'UTF-8', 'sjis-win');
                                $jsondata[] = str_replace('[CRLF]', '<br>', $data);
                            }
                            date_default_timezone_set('Asia/Tokyo');
                            $runningTime = date('H:i') . "<br>";
                            $hour = (int)date('H');
                            foreach ($jsondata as $keys) {
                                if ($keys[3] > $runningTime && $keys[0] == 2 && $keys[3] > $hour) {
                                    $newdata2[] = [$keys[3]];
                                }
                                if ($keys[5] > $runningTime && $keys[0] == 2 && $keys[5] > $hour) {
                                    $newdata2[] = [$keys[5]];
                                }
                            }

                            echo "<div class='box'>". $newdata2[0][0]."</div>";
                            echo "<div class='box'>". $newdata2[1][0]."</div>";
                            echo "<div class='box'>". $newdata2[2][0]."</div>";
                            ?>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="menu">

            <div class="top animate one fadeRight">

                <div class="date">
                    <div class="now">
                        <div class="month">
                            <?php
                            date_default_timezone_set('Asia/Tokyo');
                            echo $runningTime = date('m');
                            ?>
                        </div>
                        <div class="day">
                            <?php
                            date_default_timezone_set('Asia/Tokyo');
                            echo $runningTime = date('d');
                            ?>
                        </div>
                    </div>
                    <div class="return">
                        <?php
                        setlocale(LC_ALL, 'ja_JP.UTF-8');
                        $handle = fopen("CSV/return_calendar.csv", "r");
                        $data = fgetcsv($handle, 1000, ",");
                        $jsondata = [];

                        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                            $data = mb_convert_encoding($data, 'UTF-8', 'sjis-win');
                            $temp = tmpfile();
                            $meta = stream_get_meta_data($temp);
                            rewind($temp);
                            $jsondata[] = str_replace('[CRLF]', '<br>', $data);
                        }
                        $num = count($jsondata);
                        $today = date("Y/m/d");
                        foreach ($jsondata as $keys) {
                            if ($keys[0] == $today) {
                                echo "<div class='month'>" . $keys[1][-5] . $keys[1][-4] . "</div>";
                                echo "<div class='day'>" . $keys[1][-2] . $keys[1][-1] . "</div>";
                            }
                        }
                        ?>
                        <!-- <div class='month'></div>
                        <div class='day'></div> -->
                    </div>
                </div>

                <!-- <div class="status">
                    <div class="box"></div>
                    <div class="box"></div>
                    <div class="box"></div>
                </div> -->

            </div>

            <div class="navbar">
                <div class="nav-item news active animate two fadeRight"></div>
                <div class="nav-item floor-map animate two fadeRight"></div>
                <div class="nav-item books animate three fadeRight"></div>
                <div class="nav-item events animate four fadeRight"></div>
                <div class="nav-item time-table animate five fadeRight"></div>
            </div>

        </div>

    </div>

    <script src="./Assets/animation/jquery.js"></script>
    <script src="./Assets/animation/owl.carousel.min.js"></script>
    <script src="main.js"></script>

</body>

</html>