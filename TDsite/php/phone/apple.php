<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";

    $categorySql = "SELECT * FROM Phone WHERE pDelete = 1 AND pCategory = '애플' ORDER BY phoneId ASC";
    $categoryResult = $connect -> query($categorySql);
    $categoryInfo = $categoryResult -> fetch_array(MYSQLI_ASSOC);
    $categoryCount = $categoryResult -> num_rows;

    // 애플 총 상품 갯수
    $categorySql = "SELECT count(phoneId) FROM Phone WHERE pDelete = 1 AND pCategory = '애플'";
    $categoryResult2 = $connect -> query($categorySql);
    $categoryCount = $categoryResult2 -> fetch_array(MYSQLI_NUM);
    $pTotalCount = $categoryCount[0];
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trend Device</title>
    <!-- css -->
    <?php include "../include/head.php"?>
</head>
<body>
    <div id="wrap">
        <?php include "../include/header.php" ?>
        <!-- //header -->
        
        <?php include "../include/nav.php" ?>
        <!-- //nav -->

        <main id="main">
            <div class="phone__inner">
                <div class="phone__top">
                    <h2>Apple</h2>
                </div>
                <div class="phone__ad">
                    <div class="ad__text">
                        <p>한번은 꼭 봐야하는<br> 핸드폰 구매전 체크사항</p>
                        <a href="phoneView.html">바로 확인하기 ></a>
                    </div>
                    <!-- <div class="ad__img">
                        <img src="#" alt="AD 이미지">
                    </div> -->
                </div>
                <div class="phone__all">
                    <p>제품<em>(<?=$pTotalCount?>)</em></p>
                    <?php 
                        $memberID = $_SESSION['memberID'];

                        $adminSql = "SELECT memberID FROM tdMembers WHERE memberID = 0";
                        $adminResult = $connect -> query($adminSql);
                        $adminInfo = $adminResult -> fetch_array(MYSQLI_ASSOC);

                        if($memberID == $adminInfo['memberID']){
                            echo "<a href='phoneWrite.php' class='bw__btn__style'>글쓰기</a>";
                        } else {
                            echo "<span></span>";
                        }
                    ?>
                </div>
                <div class="phone__table">
                    <ul>
                        <?php foreach($categoryResult as $phone){ ?>
                            <li class="item">
                                <p class="event"><?=$phone['pEvent']?></p>
                                <a href="phoneView.php?phoneId=<?=$phone['phoneId']?>&category=상품게시판">
                                    <img class="img" src="../../assets/phoneimg/<?=$phone['pImgFile']?>" alt="<?=$phone['phoneTitle']?>">
                                </a>
                                <a href="phoneView.php?phoneId=<?=$phone['phoneId']?>&category=상품게시판">
                                    <div class="text">
                                        <p><?=$phone['pTitle']?></p>
                                        <span class="desc"><?=$phone['pDesc']?></span>
                                        <span class="price"><em><?=$phone['pPrice']?></em>원</span>
                                    </div>
                                </a>
                            </li>
                        <?php } ?>
 
                        <li class="item item__event">
                            <div class="event__text">
                                <h3>iPhone15 Pro</h3>
                                <p>티타늄. 초강력. 초경량. 초프로</p>
                                <span>10월 13일 출시</span>
                                <a href="phoneView.html">더 알아보기></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
        <!-- //main -->

        <?php include "../include/footer.php" ?>
        <!-- //footer -->
    </div>
    <!-- //wrap -->
    
    <!-- script -->
    <script src="../assets/script/script.js"></script>
</body>
</html>