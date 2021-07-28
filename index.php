<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>점심 장소 정해 드립니다</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143196260-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-143196260-1');
    </script>

    <link rel="stylesheet" href="main.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Song+Myung:400" rel="stylesheet">

</head>

<body>

    <?php
        include "dbconnect.php";
        include "random.php";
    ?>

    <main>
        <h1>점심 정해 드립니다.</h1>

        <!-- 버튼 -->
        <button class="trigger">점심 장소 정해 주세요!</button>

        <!-- 팝업 레이어 -->
        <div class="modal">
            <div class="modal-content">
                <span class="close-button">&times;</span>
                <br><br>
                <p>
                    오늘은 <? echo $menu; ?>로 가세요!</p>
            </div>

        </div>
        <br>
        <button class="menulink" onclick = "location.href ='http://www.seohey.co.kr/rand/'">
            점심 메뉴 정해 주세요!
        </button>

    </main>

    <script src="main.js"></script>
</body>

</html>