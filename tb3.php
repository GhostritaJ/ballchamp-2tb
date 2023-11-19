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

    .logo_league_tb3 {
        width: 20px;
        height: 15px;
        padding: 3px;
        padding-right: 1%;
    }

    .logo_league_tb3_2 {
        width: 20px;
        height: 15px;
        padding: 3px;
        padding-right: 1%;
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

    th,
    td {
        padding: 3px;
        text-align: center;
    }

    .leagueTable {
        background-color: black;
    }

    th {
        background-color: #232323 !important;
    }

    td {
        background-color: black;
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

    .logo_league_tb3_ht{
        width: 15px;
        height: 15px;
        padding-left: 5%;
    }

    .logo_league_tb3_at{
        width: 15px;
        height: 15px;
        padding-right: 5%;
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
                //print_r($data);
                $count_data = count($data);
                echo $count_data."<br>";
                $stage_name = array();
                $stage_name_1;
            ?>
            <div class="leagueRow">
                <table>
                    <thead>
                        <?php for($i=0;$i<=$count_data-1;$i++){ 
                            //$entry = $data;
                            //$stage_name = $data[$i]['tournament_stage_name'];
                            //$stage_name_exp = explode(" ",$stage_name);
                            //echo $stage_name_exp[0]." -- <br>";
                            if($i==0){
                                $img_name = $data[$i]['flag'];
                                $stage_name_1 = 0;
                                $stage_name = $data[$i]['tournament_stage_name'];
                                $stage_name_exp = explode(" ",$stage_name);
                                if($stage_name != $stage_name_1){
                                    echo $stage_name_1." !== ".$stage_name_exp[0]." |||--- ".$img_name."<br><br>";
                                    ?>
                                    <tr>
                                        <th colspan="5" style="text-align: left; padding-left: 2%;">
                                            <img src="<?= $data[$i]['flag'] ?>" class="logo_league_tb3">
                                            <?= $data[$i]['tournament_template_name'] ?>
                                            <?php echo "( ";?><?= $data[$i]['tournament_stage_name'] ?><?php echo " )";?>
                                        </th>
                                    </tr>
                                    <?php
                                }
                            }else{
                                $img_name = $data[$i]['flag'];

                                $stage_name_1 = $data[$i-1]['tournament_stage_name'];
                                $stage_name_1_exp = explode(" ",$stage_name_1);
                                $stage_name = $data[$i]['tournament_stage_name'];
                                $stage_name_exp = explode(" ",$stage_name);
                                if($stage_name_exp[0] != $stage_name_1_exp[0]){
                                    echo $stage_name_1_exp[0]." !== ".$stage_name_exp[0]." |||--- ".$img_name."<br><br>";
                                    ?>
                                    <tr>
                                        <th colspan="5" style="text-align: left; padding-left: 2%;">
                                            <img src="<?= $data[$i]['flag'] ?>" class="logo_league_tb3">
                                            <?= $data[$i]['tournament_template_name'] ?>
                                            <?php echo "( ";?><?= $data[$i]['tournament_stage_name'] ?><?php echo " )";?>
                                        </th>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                            
                        
                    </thead>
                    <tbody>
                            <tr>
                                <td style="width: 15%; padding-left: 15px; text-align: right;">
                                    <span class="start-time"><?= $data[$i]['starttime'] ?></span>
                                </td>
                                <td style="width: 25%; padding-right: 20px; text-align: right;">
                                    <?= $data[$i]['participant_home_name'] ?><img src="<?= $data[$i]['logohome'] ?>" class="logo_league_tb3_ht">
                                </td>
                                <td style="width: 25%;">
                                    <?php echo "-";?>
                                </td>
                                <td style="width: 25%; padding-left: 20px; text-align: left;">
                                    <img src="<?= $data[$i]['logoaway'] ?>" class="logo_league_tb3_at"><?= $data[$i]['participant_away_name'] ?>
                                </td>
                                <td style="width: 15%; padding-right: 25px; text-align: center;">
                                    <?= $data[$i]['hdp'] ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
			</div>
        </div>
    </body>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1681173548 -->
