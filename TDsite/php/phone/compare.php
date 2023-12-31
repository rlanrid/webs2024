<?php
    include "../connect/connect.php";
    include "../connect/session.php";

   $phoneSql = "SELECT * FROM Phone WHERE pDelete = 1";
   $phoneResult = $connect -> query($phoneSql);
   $phoneInfo = $phoneResult -> fetch_all(MYSQLI_ASSOC);
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
            <div class="compare__inner container">
                <div class="compare__top">
                    <h2>제품 비교하기</h2>
                    <p>스마트폰 성능, 디자인 비교해보세요!</p>
                    <div class="compare__btn">
                        <div class="compare__plus"><p>+</p></div>
                        <div class="compare__minus blind"><p>-</p></div>
                    </div>
                </div>
                <div class="compare__bottom column2">
                    <div class="compare__left">
                        <div class="compare__left__top">
                            <select name="phone_select1" id="phone_select1">
                                <?php foreach($phoneResult as $phone){ ?>
                                    <option value="<?=$phone['pTitle']?>"><?=$phone['pTitle']?></option>
                                <?php } ?>
                            </select>
                            <div class="pImgFile1">
                                
                            </div>
                            <p class="price price1"><em>-</em></p>
                            <div class="pLink1">
                                <a href="#" class="btn__style3">바로가기</a>
                            </div>
                        </div>
                        <div class="compare__left__bottom">
                            <ul class="phoneOption">
                            <li>
                                    <img src="../../assets/img/pprocess.png" alt="프로세스">
                                    <div class="text pProcess1">
                                        <p></p>
                                        <span>PROCESS</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pcore.png" alt="코어">
                                    <div class="text pCore1">
                                        <p></p>
                                        <span>CORE</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pdisplay.png" alt="디스플레이">
                                    <div class="text pDisplaySize1">
                                        <p></p>
                                        <span>DISPLAY</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pmaterial.png" alt="소재">
                                    <div class="text pMaterial1">
                                        <p></p>
                                        <span>MATERIAL</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/psize.png" alt="사이즈">
                                    <div class="text pSize1">
                                        <p></p>
                                        <span>SIZE</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pweight.png" alt="무게">
                                    <div class="text pWeight1">
                                        <p></p>
                                        <span>WEIGHT</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pcamera.png" alt="카메라">
                                    <div class="text pCamera1">
                                        <p></p>
                                        <span>CAMERA</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pbattery.png" alt="배터리">
                                    <div class="text pBattery1">
                                        <p></p>
                                        <span>BATTERY</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pusb.png" alt="유에스비">
                                    <div class="text pUsb1">
                                        <p></p>
                                        <span>USB</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pcolor.png" alt="컬러">
                                    <div class="text pColor1">
                                        <p></p>
                                        <span>COLOR</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pvolume.png" alt="용량">
                                    <div class="text pVolume1">
                                        <p></p>
                                        <span>VOLUME</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="compare__center">
                        <div class="compare__left__top">
                            <select name="phone_select3" id="phone_select3">
                                <?php foreach($phoneResult as $phone){ ?>
                                    <option value="<?=$phone['pTitle']?>"><?=$phone['pTitle']?></option>
                                <?php } ?>
                            </select>
                            <div class="pImgFile3">
                                
                            </div>
                            <p class="price price3"><em>-</em></p>
                            <div class="pLink3">
                                <a href="#" class="btn__style3">바로가기</a>
                            </div>
                        </div>
                        <div class="compare__left__bottom">
                            <ul class="phoneOption">
                            <li>
                                    <img src="../../assets/img/pprocess.png" alt="프로세스">
                                    <div class="text pProcess3">
                                        <p></p>
                                        <span>PROCESS</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pcore.png" alt="코어">
                                    <div class="text pCore3">
                                        <p></p>
                                        <span>CORE</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pdisplay.png" alt="디스플레이">
                                    <div class="text pDisplaySize3">
                                        <p></p>
                                        <span>DISPLAY</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pmaterial.png" alt="소재">
                                    <div class="text pMaterial3">
                                        <p></p>
                                        <span>MATERIAL</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/psize.png" alt="사이즈">
                                    <div class="text pSize3">
                                        <p></p>
                                        <span>SIZE</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pweight.png" alt="무게">
                                    <div class="text pWeight3">
                                        <p></p>
                                        <span>WEIGHT</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pcamera.png" alt="카메라">
                                    <div class="text pCamera3">
                                        <p></p>
                                        <span>CAMERA</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pbattery.png" alt="배터리">
                                    <div class="text pBattery3">
                                        <p></p>
                                        <span>BATTERY</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pusb.png" alt="유에스비">
                                    <div class="text pUsb3">
                                        <p></p>
                                        <span>USB</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pcolor.png" alt="컬러">
                                    <div class="text pColor3">
                                        <p></p>
                                        <span>COLOR</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pvolume.png" alt="용량">
                                    <div class="text pVolume3">
                                        <p></p>
                                        <span>VOLUME</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="compare__center2">
                        <div class="compare__left__top">
                            <select name="phone_select4" id="phone_select4">
                                <?php foreach($phoneResult as $phone){ ?>
                                    <option value="<?=$phone['pTitle']?>"><?=$phone['pTitle']?></option>
                                <?php } ?>
                            </select>
                            <div class="pImgFile4">
                                
                            </div>
                            <p class="price price4"><em>-</em></p>
                            <div class="pLink4">
                                <a href="#" class="btn__style3">바로가기</a>
                            </div>
                        </div>
                        <div class="compare__left__bottom">
                            <ul class="phoneOption">
                            <li>
                                    <img src="../../assets/img/pprocess.png" alt="프로세스">
                                    <div class="text pProcess4">
                                        <p></p>
                                        <span>PROCESS</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pcore.png" alt="코어">
                                    <div class="text pCore4">
                                        <p></p>
                                        <span>CORE</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pdisplay.png" alt="디스플레이">
                                    <div class="text pDisplaySize4">
                                        <p></p>
                                        <span>DISPLAY</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pmaterial.png" alt="소재">
                                    <div class="text pMaterial4">
                                        <p></p>
                                        <span>MATERIAL</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/psize.png" alt="사이즈">
                                    <div class="text pSize4">
                                        <p></p>
                                        <span>SIZE</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pweight.png" alt="무게">
                                    <div class="text pWeight4">
                                        <p></p>
                                        <span>WEIGHT</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pcamera.png" alt="카메라">
                                    <div class="text pCamera4">
                                        <p></p>
                                        <span>CAMERA</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pbattery.png" alt="배터리">
                                    <div class="text pBattery4">
                                        <p></p>
                                        <span>BATTERY</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pusb.png" alt="유에스비">
                                    <div class="text pUsb4">
                                        <p></p>
                                        <span>USB</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pcolor.png" alt="컬러">
                                    <div class="text pColor4">
                                        <p></p>
                                        <span>COLOR</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pvolume.png" alt="용량">
                                    <div class="text pVolume4">
                                        <p></p>
                                        <span>VOLUME</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="compare__right">
                        <div class="compare__right__top">
                            <select name="phone_select2" id="phone_select2">
                                <?php foreach($phoneResult as $phone){ ?>
                                    <option value="<?=$phone['pTitle']?>"><?=$phone['pTitle']?></option>
                                <?php } ?>
                            </select>
                            <div class="pImgFile2">
                                
                            </div>
                            <p class="price price2"><em>-</em></p>
                            <div class="pLink2">
                                <a href="#" class="btn__style3">바로가기</a>
                            </div>
                        </div>
                        <div class="compare__right__bottom">
                            <ul class="phoneOption">
                                <li>
                                    <img src="../../assets/img/pprocess.png" alt="프로세스">
                                    <div class="text pProcess2">
                                        <p></p>
                                        <span>PROCESS</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pcore.png" alt="코어">
                                    <div class="text pCore2">
                                        <p></p>
                                        <span>CORE</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pdisplay.png" alt="디스플레이">
                                    <div class="text pDisplaySize2">
                                        <p></p>
                                        <span>DISPLAY</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pmaterial.png" alt="소재">
                                    <div class="text pMaterial2">
                                        <p></p>
                                        <span>MATERIAL</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/psize.png" alt="사이즈">
                                    <div class="text pSize2">
                                        <p></p>
                                        <span>SIZE</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pweight.png" alt="무게">
                                    <div class="text pWeight2">
                                        <p></p>
                                        <span>WEIGHT</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pcamera.png" alt="카메라">
                                    <div class="text pCamera2">
                                        <p></p>
                                        <span>CAMERA</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pbattery.png" alt="배터리">
                                    <div class="text pBattery2">
                                        <p></p>
                                        <span>BATTERY</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pusb.png" alt="유에스비">
                                    <div class="text pUsb2">
                                        <p></p>
                                        <span>USB</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pcolor.png" alt="컬러">
                                    <div class="text pColor2">
                                        <p></p>
                                        <span>COLOR</span>
                                    </div>
                                </li>
                                <li>
                                    <img src="../../assets/img/pvolume.png" alt="용량">
                                    <div class="text pVolume2">
                                        <p></p>
                                        <span>VOLUME</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- //main -->

        <?php include "../include/footer.php" ?>
        <!-- //footer -->
    </div>
    <!-- //wrap -->

    <!-- script -->
    <script>
        const plusBtn = document.querySelector(".compare__plus");
        const minusBtn = document.querySelector(".compare__minus");
        const compareCont = document.querySelector(".compare__bottom");

        function handleScreenSize() {
            const screenSize = window.innerWidth;
            const isMobile = screenSize <= 800;

            if (isMobile) {
                compareCont.classList.add("column2");
                compareCont.classList.remove("column3");
                compareCont.classList.remove("column4");
            } else {
                plusBtn.classList.remove("blind");
                minusBtn.classList.add("blind");
            }

            handleButtons(); // 버튼 상태 초기화
        }

        function handleButtons() {
            const columnList = compareCont.classList;

            plusBtn.classList.toggle("blind", !columnList.contains("column2") && !columnList.contains("column3"));
            minusBtn.classList.toggle("blind", !columnList.contains("column3") && !columnList.contains("column4"));
        }

        plusBtn.addEventListener("click", () => {
            const columnList = compareCont.classList;

            if (columnList.contains("column2")) {
                compareCont.classList.replace("column2", "column3");
            } else if (columnList.contains("column3")) {
                compareCont.classList.replace("column3", "column4");
            } else {
                alert("오류");
            }

            handleButtons();
        });

        minusBtn.addEventListener("click", () => {
            const columnList = compareCont.classList;

            if (columnList.contains("column4")) {
                compareCont.classList.replace("column4", "column3");
            } else if (columnList.contains("column3")) {
                compareCont.classList.replace("column3", "column2");
            } else {
                alert("오류");
            }

            handleButtons();
        });

        window.addEventListener("load", () => {
            handleScreenSize();
            window.addEventListener("resize", () => {
                handleScreenSize();
            });
        });
    </script>

    <!-- compare -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const select1 = document.getElementById('phone_select1');
        const select2 = document.getElementById('phone_select2');
        const select3 = document.getElementById('phone_select3');
        const select4 = document.getElementById('phone_select4');

        select1.addEventListener('change', function() {
            const selectedPhoneTitle = this.value;
            const phoneInfo = <?php echo json_encode($phoneInfo); ?>;
            console.log(phoneInfo);

            const selectedPhone = phoneInfo.find(Phone => Phone.pTitle === selectedPhoneTitle);

            const price1 = document.querySelector('.price1 em');
            const pprocess1 = document.querySelector('.pProcess1 p');
            const pcore1 = document.querySelector('.pCore1 p');
            const pdisplaysize1 = document.querySelector('.pDisplaySize1 p');
            const pmaterial1 = document.querySelector('.pMaterial1 p');
            const psize1 = document.querySelector('.pSize1 p');
            const pweight1 = document.querySelector('.pWeight1 p');
            const pcamera1 = document.querySelector('.pCamera1 p');
            const pbattery1 = document.querySelector('.pBattery1 p');
            const pusb1 = document.querySelector('.pUsb1 p');
            const pcolor1 = document.querySelector('.pColor1 p');
            const pvolume1 = document.querySelector('.pVolume1 p');

            if (selectedPhone) {
                const link = document.createElement('a');
                link.href = `${selectedPhone.pLink}`;
                link.className = 'btn__style3';
                link.innerText = '바로가기';
                
                const linkContainer = document.querySelector('.pLink1');
                linkContainer.innerHTML = '';
                linkContainer.appendChild(link);
            }

            if (selectedPhone) {
                const img = document.createElement('img');
                img.src = `../../assets/phoneimg/${selectedPhone.pImgFile}`;
                img.alt = `${selectedPhone.pTitle}`;
                
                const imageContainer = document.querySelector('.pImgFile1');
                imageContainer.innerHTML = '';
                imageContainer.appendChild(img);
            }

            if (selectedPhone) {
                price1.innerText = selectedPhone.pPrice;
            }

            if (selectedPhone) {
                pprocess1.innerText = selectedPhone.pProcess;
            }
            if (selectedPhone) {
                pcore1.innerText = selectedPhone.pCore;
            }  

            if (selectedPhone) {
                pdisplaysize1.innerText = selectedPhone.pDisplaySize;
            }

            if (selectedPhone) {
                pmaterial1.innerText = selectedPhone.pMaterial;
            }  

            if (selectedPhone) {
                psize1.innerText = selectedPhone.pSize;
            }

            if (selectedPhone) {
                pweight1.innerText = selectedPhone.pWeight;
            }

            if (selectedPhone) {
                pcamera1.innerText = selectedPhone.pCamera;
            }

            if (selectedPhone) {
                pbattery1.innerText = selectedPhone.pBattery;
            }

            if (selectedPhone) {
                pusb1.innerText = selectedPhone.pUsb;
            }

            if (selectedPhone) {
                pcolor1.innerText = selectedPhone.pColor;
            }

            if (selectedPhone) {
                pvolume1.innerText = selectedPhone.pVolume;
            }
            
        });
        // select1

        select2.addEventListener('change', function() {
            const selectedPhoneTitle = this.value;
            const phoneInfo = <?php echo json_encode($phoneInfo); ?>;
            console.log(phoneInfo);

            const selectedPhone = phoneInfo.find(Phone => Phone.pTitle === selectedPhoneTitle);

            const price2 = document.querySelector('.price2 em');
            const pprocess2 = document.querySelector('.pProcess2 p');
            const pcore2 = document.querySelector('.pCore2 p');
            const pdisplaysize2 = document.querySelector('.pDisplaySize2 p');
            const pmaterial2 = document.querySelector('.pMaterial2 p');
            const psize2 = document.querySelector('.pSize2 p');
            const pweight2 = document.querySelector('.pWeight2 p');
            const pcamera2 = document.querySelector('.pCamera2 p');
            const pbattery2 = document.querySelector('.pBattery2 p');
            const pusb2 = document.querySelector('.pUsb2 p');
            const pcolor2 = document.querySelector('.pColor2 p');
            const pvolume2 = document.querySelector('.pVolume2 p');

            if (selectedPhone) {
                const link = document.createElement('a');
                link.href = `${selectedPhone.pLink}`;
                link.className = 'btn__style3';
                link.innerText = '바로가기';
                
                const linkContainer = document.querySelector('.pLink2');
                linkContainer.innerHTML = '';
                linkContainer.appendChild(link);
            }

            if (selectedPhone) {
                const img = document.createElement('img');
                img.src = `../../assets/phoneimg/${selectedPhone.pImgFile}`;
                img.alt = `${selectedPhone.pTitle}`;
                
                const imageContainer = document.querySelector('.pImgFile2');
                imageContainer.innerHTML = '';
                imageContainer.appendChild(img);
            }

            if (selectedPhone) {
                price2.innerText = selectedPhone.pPrice;
            }

            if (selectedPhone) {
                pprocess2.innerText = selectedPhone.pProcess;
            }
            if (selectedPhone) {
                pcore2.innerText = selectedPhone.pCore;
            }  

            if (selectedPhone) {
                pdisplaysize2.innerText = selectedPhone.pDisplaySize;
            }

            if (selectedPhone) {
                pmaterial2.innerText = selectedPhone.pMaterial;
            }  

            if (selectedPhone) {
                psize2.innerText = selectedPhone.pSize;
            }

            if (selectedPhone) {
                pweight2.innerText = selectedPhone.pWeight;
            }

            if (selectedPhone) {
                pcamera2.innerText = selectedPhone.pCamera;
            }

            if (selectedPhone) {
                pbattery2.innerText = selectedPhone.pBattery;
            }

            if (selectedPhone) {
                pusb2.innerText = selectedPhone.pUsb;
            }

            if (selectedPhone) {
                pcolor2.innerText = selectedPhone.pColor;
            }

            if (selectedPhone) {
                pvolume2.innerText = selectedPhone.pVolume;
            }  
        });
        // select2

        select3.addEventListener('change', function() {
            const selectedPhoneTitle = this.value;
            const phoneInfo = <?php echo json_encode($phoneInfo); ?>;
            console.log(phoneInfo);

            const selectedPhone = phoneInfo.find(Phone => Phone.pTitle === selectedPhoneTitle);

            const price3 = document.querySelector('.price3 em');
            const pprocess3 = document.querySelector('.pProcess3 p');
            const pcore3 = document.querySelector('.pCore3 p');
            const pdisplaysize3 = document.querySelector('.pDisplaySize3 p');
            const pmaterial3 = document.querySelector('.pMaterial3 p');
            const psize3 = document.querySelector('.pSize3 p');
            const pweight3 = document.querySelector('.pWeight3 p');
            const pcamera3 = document.querySelector('.pCamera3 p');
            const pbattery3 = document.querySelector('.pBattery3 p');
            const pusb3 = document.querySelector('.pUsb3 p');
            const pcolor3 = document.querySelector('.pColor3 p');
            const pvolume3 = document.querySelector('.pVolume3 p');

            if (selectedPhone) {
                const link = document.createElement('a');
                link.href = `${selectedPhone.pLink}`;
                link.className = 'btn__style3';
                link.innerText = '바로가기';
                
                const linkContainer = document.querySelector('.pLink3');
                linkContainer.innerHTML = '';
                linkContainer.appendChild(link);
            }

            if (selectedPhone) {
                const img = document.createElement('img');
                img.src = `../../assets/phoneimg/${selectedPhone.pImgFile}`;
                img.alt = `${selectedPhone.pTitle}`;
                
                const imageContainer = document.querySelector('.pImgFile3');
                imageContainer.innerHTML = '';
                imageContainer.appendChild(img);
            }

            if (selectedPhone) {
                price3.innerText = selectedPhone.pPrice;
            }

            if (selectedPhone) {
                pprocess3.innerText = selectedPhone.pProcess;
            }
            if (selectedPhone) {
                pcore3.innerText = selectedPhone.pCore;
            }  

            if (selectedPhone) {
                pdisplaysize3.innerText = selectedPhone.pDisplaySize;
            }

            if (selectedPhone) {
                pmaterial3.innerText = selectedPhone.pMaterial;
            }  

            if (selectedPhone) {
                psize3.innerText = selectedPhone.pSize;
            }

            if (selectedPhone) {
                pweight3.innerText = selectedPhone.pWeight;
            }

            if (selectedPhone) {
                pcamera3.innerText = selectedPhone.pCamera;
            }

            if (selectedPhone) {
                pbattery3.innerText = selectedPhone.pBattery;
            }

            if (selectedPhone) {
                pusb3.innerText = selectedPhone.pUsb;
            }

            if (selectedPhone) {
                pcolor3.innerText = selectedPhone.pColor;
            }

            if (selectedPhone) {
                pvolume3.innerText = selectedPhone.pVolume;
            }  
        });
        // select3

        select4.addEventListener('change', function() {
            const selectedPhoneTitle = this.value;
            const phoneInfo = <?php echo json_encode($phoneInfo); ?>;
            console.log(phoneInfo);

            const selectedPhone = phoneInfo.find(Phone => Phone.pTitle === selectedPhoneTitle);

            const price4 = document.querySelector('.price4 em');
            const pprocess4 = document.querySelector('.pProcess4 p');
            const pcore4 = document.querySelector('.pCore4 p');
            const pdisplaysize4 = document.querySelector('.pDisplaySize4 p');
            const pmaterial4 = document.querySelector('.pMaterial4 p');
            const psize4 = document.querySelector('.pSize4 p');
            const pweight4 = document.querySelector('.pWeight4 p');
            const pcamera4 = document.querySelector('.pCamera4 p');
            const pbattery4 = document.querySelector('.pBattery4 p');
            const pusb4 = document.querySelector('.pUsb4 p');
            const pcolor4 = document.querySelector('.pColor4 p');
            const pvolume4 = document.querySelector('.pVolume4 p');

            if (selectedPhone) {
                const link = document.createElement('a');
                link.href = `${selectedPhone.pLink}`;
                link.className = 'btn__style3';
                link.innerText = '바로가기';
                
                const linkContainer = document.querySelector('.pLink4');
                linkContainer.innerHTML = '';
                linkContainer.appendChild(link);
            }

            if (selectedPhone) {
                const img = document.createElement('img');
                img.src = `../../assets/phoneimg/${selectedPhone.pImgFile}`;
                img.alt = `${selectedPhone.pTitle}`;
                
                const imageContainer = document.querySelector('.pImgFile4');
                imageContainer.innerHTML = '';
                imageContainer.appendChild(img);
            }

            if (selectedPhone) {
                price4.innerText = selectedPhone.pPrice;
            }

            if (selectedPhone) {
                pprocess4.innerText = selectedPhone.pProcess;
            }
            if (selectedPhone) {
                pcore4.innerText = selectedPhone.pCore;
            }  

            if (selectedPhone) {
                pdisplaysize4.innerText = selectedPhone.pDisplaySize;
            }

            if (selectedPhone) {
                pmaterial4.innerText = selectedPhone.pMaterial;
            }  

            if (selectedPhone) {
                psize4.innerText = selectedPhone.pSize;
            }

            if (selectedPhone) {
                pweight4.innerText = selectedPhone.pWeight;
            }

            if (selectedPhone) {
                pcamera4.innerText = selectedPhone.pCamera;
            }

            if (selectedPhone) {
                pbattery4.innerText = selectedPhone.pBattery;
            }

            if (selectedPhone) {
                pusb4.innerText = selectedPhone.pUsb;
            }

            if (selectedPhone) {
                pcolor4.innerText = selectedPhone.pColor;
            }

            if (selectedPhone) {
                pvolume4.innerText = selectedPhone.pVolume;
            }  
        });
        // select4
    });
</script>
</body>
</html>