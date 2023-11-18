<!DOCTYPE html>
<html lang="th">

<head>
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet" />
</head>
<style>
    .homesh {
        width: 96%;
        font-family: 'Kanit', sans-serif;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .tab_box .tab_btn {
        color: black;
        background-color: gray;
        border: none;
        padding: 4px;
        cursor: pointer;
        width: 100%;
    }

    .content_box {
        padding: 0px;
        width: 100%;
    }

    .logo_team_img {
        width: 30px;
        height: 30px;
    }

    /*@media only screen and (max-width: 600px) {
            .logo_team_img {
                width: 45px;
                height: 45px;
            }
        }*/

    body {
        font-family: Arial, sans-serif;
        width: 100%;
    }

    ul {
        width: 100%;
        list-style-type: none;
        display: flex;
        justify-content: space-between;
        padding: 0;
        margin-bottom: -0px;
    }

    ul li {
        margin-right: 0px;
    }

    /*@media only screen and (max-width: 600px) {
        ul li {
            margin-right: 26px;
        }
    }*/

    .tab-content {
        display: none;
        width: 100%;
    }

    .active {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    table {
        margin-top: 10px;
        border-collapse: collapse;
        width: 100%;
    }

    /*@media only screen and (max-width: 600px) {
        table {
            width:100%;
            ;
        }
    }*/

    /*  tablet=8px,   mobile=13px;   pc=12px;   */
    table,
    th,
    td {
        border: 1px solid black;
        color: white;
        font-size: 12px;
    }

    /* หน้าแท็บเล็ต ขนาดตัวหนังสือ 8px */
    @media (max-width: 769px) {

        table,
        th,
        td {
            font-size: 8px;
        }
    }

    /* หน้ามือถือ ขนาดตัวหนังสือ 13px */
    @media (max-width: 375px) {

        table,
        th,
        td {
            font-size: 13.5px;
        }
    }

    /* หน้า PC ขนาดตัวหนังสือ 12px */
    /*@media only screen and (max-width: 600px) {
      table,
      th,
      td {
        font-size: 10px;
      }
    }*/

    th,
    td {
        padding: 3px;
        text-align: center;
    }

    button {
        margin-top: 0px;
    }

    .leagueTable {
        background-color: black;

    }

    th {
        background-color: #232323 !important;
    }

    .tab-select {
        width: 100%;
    }

    .tab-show {
        margin-left: 0px;
        margin-top: -10px;
        width: 100%;
        height: 100%;
    }

    thead {
        height: 0px;
        width: 0px;
    }

    .logo_in_tab {
        width: 15px;
        height: 15px;
        padding-right: 5px;
    }

    @media only screen and (max-width: 600px) {
        .logo_in_tab {
            width: 25px;
            height: 25px;
            padding-right: 5px;
        }
    }
</style>

<body class="homesh">
    <div class="leagueTable">
        <div class="tab-select">
            <ul>
                <li><a href="#" onclick="openTab(event, 'tab1_1')">
                        <img src="/ballchamp-2tb/2/img/pml-england.png" alt="pml-england"
                            class="logo_team_img">
                    </a></li>
                <li><a href="#" onclick="openTab(event, 'tab1_2')">
                        <img src="/ballchamp-2tb/2/img/laliga-spain.png" alt="laliga-spain"
                            class="logo_team_img">
                    </a></li>
                <li><a href="#" onclick="openTab(event, 'tab1_3')">
                        <img src="/ballchamp-2tb/2/img/gaucho-seriea.png" alt="gaucho-seriea"
                            class="logo_team_img">
                    </a></li>
                <li><a href="#" onclick="openTab(event, 'tab1_4')">
                        <img src="/ballchamp-2tb/2/img/bundesliga-germany.png" alt="bundesliga-germany"
                            class="logo_team_img">
                    </a></li>
                <li><a href="#" onclick="openTab(event, 'tab1_5')">
                        <img src="/ballchamp-2tb/2/img/ligue-1.png" alt="ligue-1"
                            class="logo_team_img">
                    </a></li>
            </ul>
        </div>
        <div class="tab-show">
            <div id="tab1_1" class="tab-content active">
                <?php
                set_time_limit(300);
                $curl = curl_init();

                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://sv.tdedkick.com/league/index.php?id=47",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET"
                ]);

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                $data = json_decode($response, true);

                //print_r($data['list_team']);
                ?>
                <div class="content_box">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th style="text-align: left; margin-left: 3px;">Team</th>
                                <th>Point</th>
                            </tr>
                        </thead>
                        <?php
                        $count_x = 0;
                        $count_if = count($data['list_team']);
                        //echo $count_if;
                        ?>
                        <tbody>
                            <?php foreach ($data['list_team'] as $entry): ?>
                                <tr>
                                    <?php
                                    if ($count_x <= 3) {
                                        //echo "green";
                                        ?>
                                        <td style="background-color: green; color: white;">
                                            <?= $entry['rank'] ?>
                                        </td>
                                        <?php
                                    } else if ($count_x == 4) {
                                        //echo "blue";
                                        ?>
                                            <td style="background-color: blue; color: white;">
                                            <?= $entry['rank'] ?>
                                            </td>
                                        <?php
                                    } else if (($count_x >= $count_if - 15) && ($count_x <= $count_if - 4)) {
                                        //echo "black";
                                        ?>
                                                <td style="background-color: black; color: white;">
                                            <?= $entry['rank'] ?>
                                                </td>
                                        <?php
                                    } else if (($count_x >= $count_if - 3) && ($count_x <= $count_if - 1)) {
                                        //echo "red";
                                        ?>
                                                    <td style="background-color: red; color: white;">
                                            <?= $entry['rank'] ?>
                                                    </td>
                                        <?php
                                    }
                                    ?>
                                    <td style="text-align: left;"><img src="<?= $entry['logo'] ?>" class="logo_in_tab">
                                        <?= $entry['participant_name'] ?>
                                    </td>
                                    <td>
                                        <?= $entry['points'] ?>
                                    </td>
                                </tr>
                                <?php $count_x++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="tab1_2" class="tab-content">
                <?php
                set_time_limit(300);
                $curl = curl_init();

                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://sv.tdedkick.com/league/index.php?id=87",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET"
                ]);

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                $data = json_decode($response, true);

                //print_r($data['list_team']);
                ?>
                <div class="content_box">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th style="text-align: left;">Team</th>
                                <th>Point</th>
                            </tr>
                        </thead>
                        <?php
                        $count_x = 0;
                        $count_if = count($data['list_team']);
                        //echo $count_if;
                        ?>
                        <tbody>
                            <?php foreach ($data['list_team'] as $entry): ?>
                                <tr>
                                    <?php
                                    if ($count_x <= 3) {
                                        //echo "green";
                                        ?>
                                        <td style="background-color: green; color: white;">
                                            <?= $entry['rank'] ?>
                                        </td>
                                        <?php
                                    } else if ($count_x == 4) {
                                        //echo "blue";
                                        ?>
                                            <td style="background-color: blue; color: white;">
                                            <?= $entry['rank'] ?>
                                            </td>
                                        <?php
                                    } else if (($count_x >= $count_if - 15) && ($count_x <= $count_if - 4)) {
                                        //echo "black";
                                        ?>
                                                <td style="background-color: black; color: white;">
                                            <?= $entry['rank'] ?>
                                                </td>
                                        <?php
                                    } else if (($count_x >= $count_if - 3) && ($count_x <= $count_if - 1)) {
                                        //echo "red";
                                        ?>
                                                    <td style="background-color: red; color: white;">
                                            <?= $entry['rank'] ?>
                                                    </td>
                                        <?php
                                    }
                                    ?>
                                    <td style="text-align: left;"><img src="<?= $entry['logo'] ?>" class="logo_in_tab">
                                        <?= $entry['participant_name'] ?>
                                    </td>
                                    <td>
                                        <?= $entry['points'] ?>
                                    </td>
                                </tr>
                                <?php $count_x++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="tab1_3" class="tab-content">
                <?php
                set_time_limit(300);
                $curl = curl_init();

                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://sv.tdedkick.com/league/index.php?id=55",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET"
                ]);

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                $data = json_decode($response, true);

                //print_r($data['list_team']);
                ?>
                <div class="content_box">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th style="text-align: left;">Team</th>
                                <th>Point</th>
                            </tr>
                        </thead>
                        <?php
                        $count_x = 0;
                        $count_if = count($data['list_team']);
                        //echo $count_if;
                        ?>
                        <tbody>
                            <?php foreach ($data['list_team'] as $entry): ?>
                                <tr>
                                    <?php
                                    if ($count_x <= 3) {
                                        //echo "green";
                                        ?>
                                        <td style="background-color: green; color: white;">
                                            <?= $entry['rank'] ?>
                                        </td>
                                        <?php
                                    } else if ($count_x == 4) {
                                        //echo "blue";
                                        ?>
                                            <td style="background-color: blue; color: white;">
                                            <?= $entry['rank'] ?>
                                            </td>
                                        <?php
                                    } else if (($count_x >= $count_if - 15) && ($count_x <= $count_if - 4)) {
                                        //echo "black";
                                        ?>
                                                <td style="background-color: black; color: white;">
                                            <?= $entry['rank'] ?>
                                                </td>
                                        <?php
                                    } else if (($count_x >= $count_if - 3) && ($count_x <= $count_if - 1)) {
                                        //echo "red";
                                        ?>
                                                    <td style="background-color: red; color: white;">
                                            <?= $entry['rank'] ?>
                                                    </td>
                                        <?php
                                    }
                                    ?>
                                    <td style="text-align: left;"><img src="<?= $entry['logo'] ?>" class="logo_in_tab">
                                        <?= $entry['participant_name'] ?>
                                    </td>
                                    <td>
                                        <?= $entry['points'] ?>
                                    </td>
                                </tr>
                                <?php $count_x++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="tab1_4" class="tab-content">
                <?php
                set_time_limit(300);
                $curl = curl_init();

                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://sv.tdedkick.com/league/index.php?id=54",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET"
                ]);

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                $data = json_decode($response, true);

                //print_r($data['list_team']);
                ?>
                <div class="content_box">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th style="text-align: left;">Team</th>
                                <th>Point</th>
                            </tr>
                        </thead>
                        <?php
                        $count_x = 0;
                        $count_if = count($data['list_team']);
                        //echo $count_if;
                        ?>
                        <tbody>
                            <?php foreach ($data['list_team'] as $entry): ?>
                                <tr>
                                    <?php
                                    if ($count_x <= 3) {
                                        //echo "green";
                                        ?>
                                        <td style="background-color: green; color: white;">
                                            <?= $entry['rank'] ?>
                                        </td>
                                        <?php
                                    } else if ($count_x == 4) {
                                        //echo "blue";
                                        ?>
                                            <td style="background-color: blue; color: white;">
                                            <?= $entry['rank'] ?>
                                            </td>
                                        <?php
                                    } else if (($count_x >= $count_if - 15) && ($count_x <= $count_if - 4)) {
                                        //echo "black";
                                        ?>
                                                <td style="background-color: black; color: white;">
                                            <?= $entry['rank'] ?>
                                                </td>
                                        <?php
                                    } else if (($count_x >= $count_if - 3) && ($count_x <= $count_if - 1)) {
                                        //echo "red";
                                        ?>
                                                    <td style="background-color: red; color: white;">
                                            <?= $entry['rank'] ?>
                                                    </td>
                                        <?php
                                    }
                                    ?>
                                    <td style="text-align: left;"><img src="<?= $entry['logo'] ?>" class="logo_in_tab">
                                        <?= $entry['participant_name'] ?>
                                    </td>
                                    <td>
                                        <?= $entry['points'] ?>
                                    </td>
                                </tr>
                                <?php $count_x++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="tab1_5" class="tab-content">
                <?php
                set_time_limit(300);
                $curl = curl_init();

                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://sv.tdedkick.com/league/index.php?id=53",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET"
                ]);

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                $data = json_decode($response, true);

                //print_r($data['list_team']);
                ?>
                <div class="content_box">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th style="text-align: left;">Team</th>
                                <th>Point</th>
                            </tr>
                        </thead>
                        <?php
                        $count_x = 0;
                        $count_if = count($data['list_team']);
                        //echo $count_if;
                        ?>
                        <tbody>
                            <?php foreach ($data['list_team'] as $entry): ?>
                                <tr>
                                    <?php
                                    if ($count_x <= 3) {
                                        //echo "green";
                                        ?>
                                        <td style="background-color: green; color: white;">
                                            <?= $entry['rank'] ?>
                                        </td>
                                        <?php
                                    } else if ($count_x == 4) {
                                        //echo "blue";
                                        ?>
                                            <td style="background-color: blue; color: white;">
                                            <?= $entry['rank'] ?>
                                            </td>
                                        <?php
                                    } else if (($count_x >= $count_if - 15) && ($count_x <= $count_if - 4)) {
                                        //echo "black";
                                        ?>
                                                <td style="background-color: black; color: white;">
                                            <?= $entry['rank'] ?>
                                                </td>
                                        <?php
                                    } else if (($count_x >= $count_if - 3) && ($count_x <= $count_if - 1)) {
                                        //echo "red";
                                        ?>
                                                    <td style="background-color: red; color: white;">
                                            <?= $entry['rank'] ?>
                                                    </td>
                                        <?php
                                    }
                                    ?>
                                    <td style="text-align: left;"><img src="<?= $entry['logo'] ?>" class="logo_in_tab">
                                        <?= $entry['participant_name'] ?>
                                    </td>
                                    <td>
                                        <?= $entry['points'] ?>
                                    </td>
                                </tr>
                                <?php $count_x++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var currentTab = 1;

    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        document.getElementById(tabName).style.display = "flex";

        // Update currentTab variable
        currentTab = parseInt(tabName.charAt(tabName.length - 1));
    }
</script>

</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1681173548 -->