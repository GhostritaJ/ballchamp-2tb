<?php
    include('simple_html_dom.php');

    //$html = new simple_html_dom();
    $url = 'https://tdedkick.com/';
    $html = file_get_html($url);
    
    $values = [];
?>
<!DOCTYPE html>
<html lang="th">
    <head>
        <!-- font Kanit -->
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
		<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
		<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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

    .tab-content22 {
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
        color: black;
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
        margin-top: 5px;
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
        <div class="matchTable">
            <?php 
                set_time_limit(300);
                $curl = curl_init();
                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://sv.tdedkick.com/index.php?day=today",
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => "",
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 30,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET",
                ]);
                $response = curl_exec($curl);
                $err = curl_error($curl);
                curl_close($curl);
                $data = json_decode($response, true);
                //print_r($data['list_team']);
            ?>
            <div class="leagueRow">
                <table>
                    <thead>
                        <?php foreach ($data as $entry): ?>
                            <tr>
                                <th><img src="<?= $entry['flag'] ?>" class="logo_league_tb3"><?= $entry['tournament_stage_name'] ?></th>
                            </tr>
                        
                    </thead>
                    <tbody>
                            <tr>
                                <td>
                                    <div>
                                        <?= $entry['starttime'] ?>
                                        <?= $entry['participant_home_name'] ?>
                                        <img src="<?= $entry['logohome'] ?>">
                                        <?php echo "-";?>
                                        <img src="<?= $entry['logoaway'] ?>">
                                        <?= $entry['participant_away_name'] ?>
                                        <?= $entry['hdp'] ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
			</div>
        </div>
    </body>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1681173548 -->
