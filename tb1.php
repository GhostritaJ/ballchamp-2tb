<!DOCTYPE html>
<html lang="th">
    <head>
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
                CURLOPT_CUSTOMREQUEST => "GET",
                // CURLOPT_HTTPHEADER => [
                //     "X-RapidAPI-Host: thai-lottery1.p.rapidapi.com",
                //     "X-RapidAPI-Key: be72945233msha7f60a56f8df87ep18f7bcjsn366b4116954e",
                //     "content-type: application/octet-stream"
                // ],
            ]);
        
            $response = curl_exec($curl);
            $err = curl_error($curl);
        
            curl_close($curl);

            $data = json_decode($response, true);

            //print_r($data['list_team']);
        ?>
        <!-- font Kanit -->
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"/>

        <?php

        ?>
    </head>
    <style>
        <?php   // .myDiv : color number won prize lotto
                // .myDivH : bg color number won prize lotto
                // .myBox : box for show date month selected
                // .btnsh : color button
                // .homesh : bg color title
                // .md-text : title size
                // .sm-text : small title size
        ?>
        .myDiv {
            border: 2px outset #3b3b3b;
            background: rgb(0,12,78);
            background: radial-gradient(circle, rgba(0,12,78,1) 0%, rgba(1,0,34,1) 100%);
            color: white;
            padding-top: 6px;
            padding-bottom: 6px;
            font-family: 'Kanit', sans-serif;
        }

        .myDivH {
            background: rgb(9,9,121);
            background: linear-gradient(0deg, rgba(9,9,121,1) 0%, rgba(0,43,137,1) 49%, rgba(9,9,121,1) 100%);
            padding: 10px;
            font-family: 'Kanit', sans-serif;
        }

        .myBox {
            font-size: 24px;
            color: white;
            background: rgb(0,39,255);
            background: radial-gradient(circle, rgba(0,39,255,1) 0%, rgba(1,0,34,1) 100%); 
            padding-top: 25px;
            padding-bottom: 25px;     
            font-family: 'Kanit', sans-serif;
        }

        .btnsh{
            color: white;
            background: rgb(19,56,134);
            background: linear-gradient(14deg, rgba(19,56,134,1) 0%, rgba(7,65,189,1) 52%, rgba(3,3,73,1) 94%);
            font-family: 'Kanit', sans-serif;
        }

        .homesh{
            background: rgb(224,224,224);
            background: linear-gradient(247deg, rgba(224,224,224,1) 5%, rgba(255,255,255,1) 31%, rgba(255,255,255,1) 69%, rgba(226,226,226,1) 99%);
            font-family: 'Kanit', sans-serif;
        }

        .md-text{
            font-size: 18px;
            font-family: 'Kanit', sans-serif;
        }

        .sm-text{
            font-size: 12px;
            font-family: 'Kanit', sans-serif;
        }
        select{
            font-family: 'kanit', sans-serif !important;
        }
    </style>
    
    <body class="homesh blog  wide">
        <div id="page" class="hfeed site">
            <?php
                echo "Tab_for_select_league";
            ?>
            <div id="main" class="clearfix">
                <form method="post" action="">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Team</th>
                                <th>Point</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['list_team'] as $entry): ?>
                                <tr>
                                    <td><?= $entry['rank'] ?></td>
                                    <td><?= $entry['participant_name'] ?></td>
                                    <td><?= $entry['points'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </form>      
            </div>
        </div>
    </body>    
        <?php
            //select_for_show();
           // echo count($responseYears);
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</html>
<!-- This website is like a Rocket, isn't it? Performance optimized by WP Rocket. Learn more: https://wp-rocket.me - Debug: cached@1681173548 -->
