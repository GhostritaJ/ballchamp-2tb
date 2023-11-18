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

    button{
        font-size: 16px;
        border-radius: 30px;
        height: 45px;
        background-color: #232323;
        color: white;
    }
</style>
<style>
        .swiper-container {
            width: 100%;
            margin: auto;
            overflow: hidden;
            position: relative;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
        }
		.swiper-button-next{
			position: absolute;
			top: 50%;
			transform: translateY(-50%)scale(0.5);
			width: 40px;
			height: 40px;
			border: 5px;
			border-radius: 50%;
			display: flex;
			justify-content: center;
			align-items: center;
			cursor: pointer;
			margin-top: 1px;
			margin-right: -8px;
			color: white;
		}
        .swiper-button-prev {
            position: absolute;
            top: 50%;
            transform: translateY(-50%)scale(0.5);
            width: 40px;
            height: 40px;
            border: 5px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
			margin-top: 1px;
			margin-left: -7px;
			color: white;
        }

        .swiper-button-next {
            right: 0;
        }

        .swiper-button-prev {
            left: 0;
        }
</style>
    
    <body class="homesh">
        <div class="leagueTable">
			<h1 style="font-size: 16px; color: white; text-align: center; padding: 8px;">Top Goal Player</h1>
            <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><button onclick="openTab2(event, 'tab2-1')">&nbsp;&nbsp;&nbsp;พรีเมียร์ลีกอังกฤษ&nbsp;&nbsp;&nbsp;</button></div>
                <div class="swiper-slide"><button onclick="openTab2(event, 'tab2-2')">&nbsp;&nbsp;&nbsp;ลาลีกาสเปน&nbsp;&nbsp;&nbsp;</button></div>
                <div class="swiper-slide"><button onclick="openTab2(event, 'tab2-3')">&nbsp;&nbsp;&nbsp;กัลโช่ เซเรียอา อิตาลี&nbsp;&nbsp;&nbsp;</button></div>
                <div class="swiper-slide"><button onclick="openTab2(event, 'tab2-4')">&nbsp;&nbsp;&nbsp;เอิงค์ฝรั่งเศส&nbsp;&nbsp;&nbsp;</button></div>
                <div class="swiper-slide"><button onclick="openTab2(event, 'tab2-5')">&nbsp;&nbsp;&nbsp;บุนเดสลีก้าเยอรมัน&nbsp;&nbsp;&nbsp;</button></div>
            </div>
            <!-- Add Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
		
          <div class="tab-show">
			    <div id="tab2-1" class="tab-content22 active">
                <?php 
                    set_time_limit(300);
                    $curl = curl_init();
                    curl_setopt_array($curl, [
                        CURLOPT_URL => "https://sv.tdedkick.com/league/topgoalplayer/index.php?id=885640",
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
                <div class="content_box">
                    <table>
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th style="text-align: left;">Name</th>
                                <th>Goal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['list'] as $entry): ?>
                                <tr>
                                    <td><?= $entry['rank'] ?></td>
                                    <td style="text-align: left;">
                                        <img src="<?= $entry['player_logo'] ?>" class="logo_in_tab">
                                        <img src="<?= $entry['team_logo'] ?>" class="logo_in_tab">
                                        <?= $entry['participant_name'] ?>
                                    </td>
                                    <td><?= $entry['total_goals'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>   
                </div>
            </div>

            <div id="tab2-2" class="tab-content22">
                <?php 
                    set_time_limit(300);
                    $curl = curl_init();
                    curl_setopt_array($curl, [
                        CURLOPT_URL => "https://sv.tdedkick.com/league/topgoalplayer/index.php?id=886037",
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
                <div class="content_box">
                    <table>
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th style="text-align: left;">Name</th>
                                <th>Goal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['list'] as $entry): ?>
                                <tr>
                                    <td><?= $entry['rank'] ?></td>
                                    <td style="text-align: left;">
                                        <img src="<?= $entry['player_logo'] ?>" class="logo_in_tab">
                                        <img src="<?= $entry['team_logo'] ?>" class="logo_in_tab">
                                        <?= $entry['participant_name'] ?>
                                    </td>
                                    <td><?= $entry['total_goals'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>   
                </div>
            </div>

            <div id="tab2-3" class="tab-content22">
                <?php 
                    set_time_limit(300);
                    $curl = curl_init();
                    curl_setopt_array($curl, [
                        CURLOPT_URL => "https://sv.tdedkick.com/league/topgoalplayer/index.php?id=885919",
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
                <div class="content_box">
                    <table>
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th style="text-align: left;">Name</th>
                                <th>Goal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['list'] as $entry): ?>
                                <tr>
                                    <td><?= $entry['rank'] ?></td>
                                    <td style="text-align: left;">
                                        <img src="<?= $entry['player_logo'] ?>" class="logo_in_tab">
                                        <img src="<?= $entry['team_logo'] ?>" class="logo_in_tab">
                                        <?= $entry['participant_name'] ?>
                                    </td>
                                    <td><?= $entry['total_goals'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>   
                </div>
            </div>

            <div id="tab2-4" class="tab-content22">
                <?php 
                    set_time_limit(300);
                    $curl = curl_init();
                    curl_setopt_array($curl, [
                        CURLOPT_URL => "https://sv.tdedkick.com/league/topgoalplayer/index.php?id=885801",
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
                <div class="content_box">
                    <table>
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th style="text-align: left;">Name</th>
                                <th>Goal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['list'] as $entry): ?>
                                <tr>
                                    <td><?= $entry['rank'] ?></td>
                                    <td style="text-align: left;">
                                        <img src="<?= $entry['player_logo'] ?>" class="logo_in_tab">
                                        <img src="<?= $entry['team_logo'] ?>" class="logo_in_tab">
                                        <?= $entry['participant_name'] ?>
                                    </td>
                                    <td><?= $entry['total_goals'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>   
                </div>
            </div>

            <div id="tab2-5" class="tab-content22">
                <?php 
                    set_time_limit(300);
                    $curl = curl_init();
                    curl_setopt_array($curl, [
                        CURLOPT_URL => "https://sv.tdedkick.com/league/topgoalplayer/index.php?id=885904",
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
                <div class="content_box">
                    <table>
                        <thead>
                            <tr>
                                <th>Rank</th>
                                <th style="text-align: left;">Name</th>
                                <th>Goal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['list'] as $entry): ?>
                                <tr>
                                    <td><?= $entry['rank'] ?></td>
                                    <td style="text-align: left;">
                                        <img src="<?= $entry['player_logo'] ?>" class="logo_in_tab">
                                        <img src="<?= $entry['team_logo'] ?>" class="logo_in_tab">
                                        <?= $entry['participant_name'] ?>
                                    </td>
                                    <td><?= $entry['total_goals'] ?></td>
                                </tr>
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
        var currentTab2 = 1;

        function openTab2(evt, tabName2) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content22");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            document.getElementById(tabName2).style.display = "flex";

            // Update currentTab2 variable
            currentTab2 = parseInt(tabName2.charAt(tabName2.length - 1));
        }

    </script>
	<!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 5,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1681173548 -->
