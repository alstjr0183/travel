<?php 
	session_start();
	if($_SESSION['username'] == null){
		echo "<script>alert('로그인 후 접속 가능합니다'); history.go(-1);</script>";
	}else{
		
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>TRAVEL</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="./travelcss.css">
    <!-- 아이콘 이미지 -->
    <script src="https://kit.fontawesome.com/c7541fc029.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- 배경이미지슬라이드 -->
    <div class="travelslide">
        <span class="travelslide3"></span>
        <span class="travelslide4"></span>
    </div>
    <div class="travelslide">
        <span class="travelslide1"></span>
        <span class="travelslide2"></span>
    </div>
    <!-- home화면 -->
    <div class="homemain">
        <div>
            <h2>TRAVEL MAGAZINE</h2>
        </div>
        <!-- 메뉴 -->
        <div class="menubar">
            <ul>
                <li style="background-color: black; color: #99ffff;; font-size: 2rem;">HOME</li>
                <li class="featurepage">Feature</li>
                <li class="staypage">Stay</li>
            </ul>
        </div>
        <!-- sns아이콘 -->
        <div class="snsbar">
            <div class="snsdiv">
                <a href="https://www.facebook.com/TravieMagazine">
                    <span>
                        <img class="colorsns1" style="position: absolute; bottom: 6vh;" src="./img/facebook2.png"
                            alt="">
                        <img class="blacksns1" src="./img/facebook1.png" alt="">
                    </span>
                </a>
                <a href="https://www.instagram.com/traviemagazine/">
                    <span>
                        <img class="colorsns2" style="position: absolute; bottom: 6vh;" src="./img/insta1.png" alt="">
                        <img class="blacksns2" src="./img/insta2.png." alt="">
                    </span>
                </a>
                <a href="https://www.youtube.com/channel/UCubmCJg6WTRPD-Pbm1x67lg">
                    <span>
                        <img class="colorsns3" style="position: absolute; bottom: 6vh;" src="./img/youtube2.png" alt="">
                        <img class="blacksns3" src="./img/youtube1.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!-- a태그 이동시 애니메이션 -->
        <div class="blindani">
            <h2 class="blindaniname">
                TRAVEL MAGAZINE
            </h2>
        </div>
        <div class="blindani2">
            <h2 class="blindaniname2">
                TRAVEL MAGAZINE
            </h2>
        </div>
    </div>
    <script>
        // home화면 백그라운드 슬라이드
        const tarvelslide = document.querySelector(".travelslide")
        const travelslide1 = document.querySelector(".travelslide1")
        const travelslide2 = document.querySelector(".travelslide2")
        const travelslide3 = document.querySelector(".travelslide3")
        const travelslide4 = document.querySelector(".travelslide4")
        const ani = 0.3
        function backslide() {
            setTimeout(() => {
                travelslide1.style.transition = `all ${ani}s linear`
                travelslide1.style.transform = `translate(0,-100vh)`
                travelslide2.style.transition = `all ${ani}s linear`
                travelslide2.style.transform = `translate(-100vw,0)`
                travelslide3.style.transition = `all ${ani}s linear`
                travelslide3.style.transform = `translate(100vw,0)`
                travelslide4.style.transition = `all ${ani}s linear`
                travelslide4.style.transform = `translate(0,100vh)`
            }, 2000);
            setTimeout(() => {
                travelslide1.style.transition = `all ${ani}s linear`
                travelslide1.style.transform = `translate(100vw,-100vh)`
                travelslide2.style.transition = `all ${ani}s linear`
                travelslide2.style.transform = `translate(-100vw,-100vh)`
                travelslide3.style.transition = `all ${ani}s linear`
                travelslide3.style.transform = `translate(100vw,100vh)`
                travelslide4.style.transition = `all ${ani}s linear`
                travelslide4.style.transform = `translate(-100vw,100vh)`
            }, 4300);
            setTimeout(() => {
                travelslide1.style.transition = `all ${ani}s linear`
                travelslide1.style.transform = `translate(100vw,0)`
                travelslide2.style.transition = `all ${ani}s linear`
                travelslide2.style.transform = `translate(0,-100vh)`
                travelslide3.style.transition = `all ${ani}s linear`
                travelslide3.style.transform = `translate(0,100vh)`
                travelslide4.style.transition = `all ${ani}s linear`
                travelslide4.style.transform = `translate(-100vw,0)`
            }, 6600);
            setTimeout(() => {
                travelslide1.style.transition = `all ${ani}s linear`
                travelslide2.style.transition = `all ${ani}s linear`
                travelslide3.style.transition = `all ${ani}s linear`
                travelslide4.style.transition = `all ${ani}s linear`
                travelslide1.style.transform = `translate(0,0)`
                travelslide2.style.transform = `translate(0,0)`
                travelslide3.style.transform = `translate(0,0)`
                travelslide4.style.transform = `translate(0,0)`
            }, 8900);
        }
        travelslide3.addEventListener("mouseover", backslide);
        // 마우스오버 sns 색 바꾸기
        const colorsns1 = document.querySelector(".colorsns1")
        const blacksns1 = document.querySelector(".blacksns1")
        const colorsns2 = document.querySelector(".colorsns2")
        const blacksns2 = document.querySelector(".blacksns2")
        const colorsns3 = document.querySelector(".colorsns3")
        const blacksns3 = document.querySelector(".blacksns3")
        const snsani = 0.15
        function snsani1() {
            colorsns1.style.transition = `all ${snsani}s linear`
            colorsns1.style.transform = "translate(0,5.21vh)"
            blacksns1.style.transition = `all ${snsani}s linear`
            blacksns1.style.transform = "translate(0,5.21vh)"
        }
        function snsani2() {
            colorsns2.style.transition = `all ${snsani}s linear`
            colorsns2.style.transform = "translate(0,5.21vh)"
            blacksns2.style.transition = `all ${snsani}s linear`
            blacksns2.style.transform = "translate(0,5.21vh)"
        }
        function snsani3() {
            colorsns3.style.transition = `all ${snsani}s linear`
            colorsns3.style.transform = "translate(0,5.21vh)"
            blacksns3.style.transition = `all ${snsani}s linear`
            blacksns3.style.transform = "translate(0,5.21vh)"
        }
        function snsani4() {
            colorsns1.style.transition = `all ${snsani}s linear`
            colorsns1.style.transform = "translate(0,0vh)"
            blacksns1.style.transition = `all ${snsani}s linear`
            blacksns1.style.transform = "translate(0,0vh)"
        }
        function snsani5() {
            colorsns2.style.transition = `all ${snsani}s linear`
            colorsns2.style.transform = "translate(0,0vh)"
            blacksns2.style.transition = `all ${snsani}s linear`
            blacksns2.style.transform = "translate(0,0vh)"
        }
        function snsani6() {
            colorsns3.style.transition = `all ${snsani}s linear`
            colorsns3.style.transform = "translate(0,0vh)"
            blacksns3.style.transition = `all ${snsani}s linear`
            blacksns3.style.transform = "translate(0,0vh)"
        }
        blacksns1.addEventListener("mouseover", snsani1)
        blacksns2.addEventListener("mouseover", snsani2)
        blacksns3.addEventListener("mouseover", snsani3)
        colorsns1.addEventListener("mouseleave", snsani4)
        colorsns2.addEventListener("mouseleave", snsani5)
        colorsns3.addEventListener("mouseleave", snsani6)
        // 페이지 이동시 애니메이션 넣기 feature
        const blindani = document.querySelector(".blindani")
        const featurepage = document.querySelector(".featurepage")
        const blindaniname = document.querySelector(".blindaniname")
        let interheight = 0
        function pageani() {
            setInterval(() => {
                blindani.style.height = `${interheight}vh`
                interheight = interheight + 1;
                blindaniname.style.transition = "all 0.7s linear"
                blindaniname.style.transform = `translate(0,40vh)`
                if (interheight === 100) {
                    featurepagejs();
                }
            }, 7);
        }
        function featurepagejs() {
            location.href = "http://webdev.iptime.org/yms/travelfeature.html"
        }
        featurepage.addEventListener("click", pageani)
        // 페이지 이동시 애니메이션 넣기 stay
        const blindani2 = document.querySelector(".blindani2")
        const staypage = document.querySelector(".staypage")
        const blindaniname2 = document.querySelector(".blindaniname2")
        let interheight2 = 0
        function pageani2() {
            setInterval(() => {
                blindani2.style.height = `${interheight2}vh`
                interheight2 = interheight2 + 1;
                blindaniname2.style.transition = "all 0.7s linear"
                blindaniname2.style.transform = `translate(0,40vh)`
                if (interheight2 === 100) {
                    featurepagejs2();
                }
            }, 7);
        }
        function featurepagejs2() {
            location.href = "http://webdev.iptime.org/yms/travelstay.html"
        }
        staypage.addEventListener("click", pageani2)
    </script>
</body>

</html>