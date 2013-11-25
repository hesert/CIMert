<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Destek Menkul Chart Contest</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

            <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
               
                <script type="text/javascript" src="//www.google.com/jsapi"></script>
                <script type="text/javascript">
                    google.load('visualization', '1', {packages: ['corechart']});

                    function drawVisualization() {
                        // Populate the data table.
                        var dataTable = google.visualization.arrayToDataTable([
                            <?php
                                $i = 1;
                                foreach($data as $row):
                                $siralama   =   "";
                                $open   =   $row->open;
                                $high   =   $row->high;
                                $low    =   $row->low;
                                $close  =   $row->close;
                                
                                $tooltip    =   "Open: ".$open;
                                
                                if($open < $close) {
                                    $siralama   =   $low.",".$open.",".$close.",".$high;
                                }
                                else if ($open > $close) {
                                    $siralama   =   $high.",".$open.",".$close.",".$low;
                                }
                                else {
                                    $siralama   =   $low.",".$open.",".$close.",".$high;
                                }
                                
                                if($i == 1)
                                    echo '["'.$i.'", '.$siralama.']'."\n";
                                else
                                    echo ',["'.$i.'", '.$siralama.']'."\n";
                                
                                $i++;
                                endforeach;
                                
                                echo ',["2193", 1.01385,1.01385,1.01385,1.01385]'."\n";
                                echo ',["2193", 1.01385,1.01385,1.01385,1.01385]'."\n";
                                echo ',["2193", 1.01385,1.01385,1.01385,1.01385]'."\n";
                                echo ',["2193", 1.01385,1.01385,1.01385,1.01385]'."\n";
                                echo ',["2193", 1.01385,1.01385,1.01385,1.01385]'."\n";
                                echo ',["2193", 1.01385,1.01385,1.01385,1.01385]'."\n";
                                echo ',["2193", 1.01385,1.01385,1.01385,1.01385]'."\n";
                            ?>
                                    // Treat first row as data as well.
                        ], true);

                        // Draw the chart.
                        
                        var chart = new google.visualization.CandlestickChart(document.getElementById('visualization'));
                        chart.draw(dataTable, {
                            legend: 'none', 
                            width: 1100, 
                            height: 700, 
                            candlestick: { 
                                risingColor: {
                                    strokeWidth: 2
                                }
                            },
                            chartArea:{left:50,top:20,width:"90%",height:"75%"}
                        
                        });
                    }


                    google.setOnLoadCallback(drawVisualization);
                </script>
                </head>

                <body>
                    <div id="wrapper">
                        <?php
                            //var_dump($data);
                        ?>
                        <div id="header">
                            <!-- HEADER -->

                            <div class="UstCerceve">

                                <div class="UstMenuCerceve">
                                    <div class="UstMenu1">
                                        <div class="UstMenu1_saga" style="font-size:10px;color:#373636">




                                            <div class="diller">
                                                <a href="#">TÜRKÇE</a>
                                                <a href="http://www.destekfx.com/En">ENGLISH</a>
                                                <!-- <a href="http://arapca.destekfx.com">العربيّة</a> -->
                                            </div>

                                            <div class="UstIkonlar">
                                                <!-- <a href="#" class="i" style="background:url(/i.png) -570px -854px"></a>
                                                <a href="#" class="i" style="background:url(/i.png) -602px -854px"></a> -->
                                                <a href="http://facebook.com/DestekFX" class="i" style="background:url(/i.png) -633px -854px" target="_blank"></a>
                                                <a href="http://twitter.com/Destekmenkul" class="i" style="background:url(/i.png) -664px -854px" target="_blank"></a>
                                            </div>

                                            <div class="IslemIkonlari">
                                                <div class="i" style="background:url(/i.png) -726px -854px"></div>
                                                <div class="e"><a href="/piyasaTakip">DESTEK MENKUL PİYASA TAKİP</a></div>
                                                <div class="i" style="background:url(/i.png) -695px -854px"></div>
                                                <div class="e"><a href="#" onclick="openLiveHelp();">CANLI DESTEK</a></div>
                                                <div class="i" style="background:url(/i.png) -757px -854px"></div>
                                                <div class="e"><a href="/hakkimizda/iletisim">İLETİŞİM</a></div>
                                            </div>
                                            <!--
                                            <div style="background:url(/i.png) -1075px -30px no-repeat;"><a href="/piyasaTakip">DestekFX Piyasa Takip</a></div>
                                            <div style="background:url(/i.png) -1075px -51px no-repeat;"><a href="/livehelp/index.php" onclick="openLiveHelp(); return false;">Canlı Destek</a></div>
                                            <div style="background:url(/i.png) -1075px -72px no-repeat;"><a href="http://www.facebook.com/DestekFX" target="_blank">/DestekFX</a></div>
                                            <div style="background:url(/i.png) -1075px -93px no-repeat;padding-right:0px"><a href="http://twitter.com/DestekFX" target="_blank">/DestekFX</a></div>
                                            -->
                                        </div>
                                    </div>
                                    <div class="UstMenu2">
                                        <?php if (1 == 2) { ?>
                                            <div class="UstMenu2_sola" style="float:left;font-size:10px;line-height:21px;margin-left:5px">
                                                <a href="/">ANA SAYFA</a>
                                            </div>
                                        <?php } ?>
                                        <div class="UstMenu2_saga">


                                            <div class="b" style="width:79px;float:right"><a href="/musteriPaneli">MÜŞTERİ PANELİ</a></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="LogoCerceve">
                                    <a href="/" class="logo"></a>
                                    <a href="/" class="spk"></a>
                                    <div style="clear:both"></div>
                                </div>

                            </div>


                        </div>



                            <div style="width:230px;height:130px; float: right; position: relative; top: -101px; right: 21px;">
                                <a href="demo/gercek-hesap" class="GercekHesapAc"></a>
                                <a href="/Demo" class="DemoHesapAc"></a>
                            </div>
                        <!-- HEADER -->
