
<!DOCTYPE html>
<html lang="th">
    <head>
        <!-- font Kanit -->
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"/>
    </head>
    <style>
        .homesh{
            /* width: 200px; */
            font-family: 'Kanit', sans-serif;
        }

        #main{
            width: 250px;
        }

        .tab_box .tab_btn{
            color: black;
            background-color: gray;
            border: none;
            padding: 4px;
            cursor: pointer;
        }

        .content_box{
            padding: 20px;
        }

        .v_img{
            width: 40px;
        }

        .v_img_img{
        }

        .logo_team_img{
            width: 80px;
            height: 80px;
        }

        body {
            font-family: Arial, sans-serif;
        }

        ul {
            width: 300px;
            list-style-type: none;
            display: flex;
            justify-content: space-between;
            padding: 0;
        }

        ul li {
            margin-right: 10px;
        }

        .tab-content2 {
            display: none;
        }

        .active {
            display: flex;
            flex-direction: column;
        }

        table {
            margin-top: 10px;
            border-collapse: collapse;
            width: 400px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }

        button {
            margin-top: 10px;
        }
    </style>
    
    <body class="homesh">
        <div class="leagueTable">
            <div>
                <ul>
                    <li><a href="#" onclick="openTab2(event, 'tab2-1')">
                        <img src="/showhoy/wp-content/plugins/ballchamp-2tb/img/pml-england.png" alt="pml-england" class="logo_team_img">
                    </a></li>
                    <li><a href="#" onclick="openTab2(event, 'tab2-2')">
                        <img src="/showhoy/wp-content/plugins/ballchamp-2tb/img/laliga-spain.png" alt="laliga-spain" class="logo_team_img">
                    </a></li>
                    <li><a href="#" onclick="openTab2(event, 'tab2-3')">
                        <img src="/showhoy/wp-content/plugins/ballchamp-2tb/img/gaucho-seriea.png" alt="gaucho-seriea" class="logo_team_img">
                    </a></li>
                    <li><a href="#" onclick="openTab2(event, 'tab2-4')">
                        <img src="/showhoy/wp-content/plugins/ballchamp-2tb/img/bundesliga-germany.png" alt="bundesliga-germany" class="logo_team_img">
                    </a></li>
                    <li><a href="#" onclick="openTab2(event, 'tab2-5')">
                        <img src="/showhoy/wp-content/plugins/ballchamp-2tb/img/ligue-1.png" alt="ligue-1" class="logo_team_img">
                    </a></li>
                </ul>
            </div>

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
                                        <img src="<?= $entry['player_logo'] ?>" style="width: 40px; height: 40px; padding-right: 10px;">
                                        <img src="<?= $entry['team_logo'] ?>" style="width: 40px; height: 40px; padding-right: 10px;">
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
                        CURLOPT_URL => "https://sv.tdedkick.com/league/index.php?id=55",
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
                                <th>No.</th>
                                <th style="text-align: left;">Team</th>
                                <th>Point</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['list_team'] as $entry): ?>
                                <tr>
                                    <td><?= $entry['rank'] ?></td>
                                    <td style="text-align: left;"><img src="<?= $entry['logo'] ?>" style="width: 40px; height: 40px; padding-right: 10px;"><?= $entry['participant_name'] ?></td>
                                    <td><?= $entry['points'] ?></td>
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
                        CURLOPT_URL => "https://sv.tdedkick.com/league/index.php?id=55",
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
                                <th>No.</th>
                                <th style="text-align: left;">Team</th>
                                <th>Point</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['list_team'] as $entry): ?>
                                <tr>
                                    <td><?= $entry['rank'] ?></td>
                                    <td style="text-align: left;"><img src="<?= $entry['logo'] ?>" style="width: 40px; height: 40px; padding-right: 10px;"><?= $entry['participant_name'] ?></td>
                                    <td><?= $entry['points'] ?></td>
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
                        CURLOPT_URL => "https://sv.tdedkick.com/league/index.php?id=54",
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
                                <th>No.</th>
                                <th style="text-align: left;">Team</th>
                                <th>Point</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['list_team'] as $entry): ?>
                                <tr>
                                    <td><?= $entry['rank'] ?></td>
                                    <td style="text-align: left;"><img src="<?= $entry['logo'] ?>" style="width: 40px; height: 40px; padding-right: 10px;"><?= $entry['participant_name'] ?></td>
                                    <td><?= $entry['points'] ?></td>
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
                        CURLOPT_URL => "https://sv.tdedkick.com/league/index.php?id=53",
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
                                <th>No.</th>
                                <th style="text-align: left;">Team</th>
                                <th>Point</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['list_team'] as $entry): ?>
                                <tr>
                                    <td><?= $entry['rank'] ?></td>
                                    <td style="text-align: left;">
                                        <img src="<?= $entry['logo'] ?>" style="width: 40px; height: 40px; padding-right: 10px;">
                                        
                                        <?= $entry['participant_name'] ?>
                                    </td>
                                    <td><?= $entry['points'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>   
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
</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1681173548 -->
