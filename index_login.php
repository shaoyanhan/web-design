<?php include "header_login.php";?>


    <div id="bannner" class="main_center_bannar" style="margin-top: 10%">
        <a href="./movie/index_login.php">
        <img  src="img/bk1.jpg"/>
        <img  src="img/bk2.jpg"  style="display:none" />
        <img  src="img/bk3.jpg"  style="display:none" />
        <img  src="img/bk4.jpg"  style="display:none" />
        </a>
        <ul id="ulli" style="margin-top: 8%;left: 17%">
            <li class="selected">1</li>
            <li class="selected">2</li>
            <li class="selected">3</li>
            <li class="selected">4</li> 
        </ul>
        <p style="text-align: center;font-size: 1.6em"><a href="./movie/index_login.php" style="color: black">今日推荐电影《盗梦空间》：精美绝伦的梦境六重奏</a></p>
    </div>

    <div id="bannner2" class="main_center_bannar" style="margin-top: 5%">
        <a href="./TV/index_login.php">
        <img  src="img/bk5.jpg"/>
        <img  src="img/bk6.jpg"  style="display:none" />
        <img  src="img/bk7.jpg"  style="display:none" />
        <img  src="img/bk8.jpg"  style="display:none" />
        </a>
        <ul id="ulli2" style="margin-top: 18%">
            <li class="selected">1</li>
            <li class="selected">2</li>
            <li class="selected">3</li>
            <li class="selected">4</li> 
        </ul>
        <p style="text-align: center;font-size: 1.6em"><a href="./TV/index_login.php" style="color: black">今日推荐电视剧《爱，死亡和机器人》：奈飞2019年度巨献</a></p>
    </div>


    <div id="bannner3" class="main_center_bannar" style="margin-top: 5%;margin-bottom: 5%">
        <a href="./music/index_login.php">
        <img  src="img/bk9.jpg"/>
        <img  src="img/bk10.gif"  style="display:none" />
        <img  src="img/bk11.jpg"  style="display:none" />
        <img  src="img/bk12.gif"  style="display:none" />
        </a>
        <ul id="ulli3" style="margin-top: 8%;left: 17%">
            <li class="selected">1</li>
            <li class="selected">2</li>
            <li class="selected">3</li>
            <li class="selected">4</li> 
        </ul>
        <p style="text-align: center;font-size: 1.6em"><a href="./music/index_login.php" style="color: black">今日推荐音乐专辑《lover》：第47届全美音乐奖“最受欢迎流行摇滚专辑”</a></p>
    </div>

    <div class="page">
        <div class="nav">
            <div class="nav-li">
                 <div class="tit"><a href="#bannner" target="_self">今日推荐电影</a></div>
                 
            </div>
            <div class="nav-li">
                 <div class="tit"><a href="#bannner2" target="_self">今日推荐电视剧</a></div>
                 
            </div>
            <div class="nav-li">
                 <div class="tit"><a href="#bannner3" target="_self">今日推荐音乐</a></div>
                   
            </div>
            <div class="nav-li">
                 <div class="tit"><a href="#top" target="_self">TOP</a></div>
                 
            </div>                                    
        </div>
    </div>
	
	
<?php include "tail.php";?>


<script type="text/javascript">
	var bannner = document.getElementById("bannner");
            var pic = bannner.getElementsByTagName("img");
            var dot = document.getElementById("ulli").getElementsByTagName("li");
           
            var index = 0;
            var timer = null;
            /*定义图片切换函数*/
            function changePic(curIndex) {
                for (var i = 0; i < pic.length; ++i) {
                    pic[i].style.display = "none";
                  
                }
                pic[curIndex].style.display = "block";
              
            }
            /*index超出图片总量时归零*/
            function autoPlay() {
                if (+index >= pic.length) {
                    index = 0;
                }
                changePic(index);
                index++;
            }
            /*定义并调用自动播放函数*/
            timer = setInterval(autoPlay, 1500);
            /*鼠标划过整个容器时停止自动播放*/
            bannner.onmouseover = function () {
                clearInterval(timer);
            }
            /*鼠标离开整个容器时继续播放下一张*/
            bannner.onmouseout = function () {
                timer = setInterval(autoPlay, 2500);
            }
            /*遍历所有数字导航实现划过切换至对应的图片*/
            for (var i = 0; i < dot.length; i++) {
                dot[i].onmouseover = function () {
                    clearInterval(timer);
                    index = this.innerText - 1;
                    changePic(index)
                }
            }
    var bannner2 = document.getElementById("bannner2");
            var pic2 = bannner2.getElementsByTagName("img");
            var dot2 = document.getElementById("ulli2").getElementsByTagName("li");
           
            var index2 = 0;
            var timer2 = null;
            /*定义图片切换函数*/
            function changePic2(curIndex) {
                for (var i = 0; i < pic2.length; ++i) {
                    pic2[i].style.display = "none";
                  
                }
                pic2[curIndex].style.display = "block";
              
            }
            /*index超出图片总量时归零*/
            function autoPlay2() {
                if (+index2 >= pic2.length) {
                    index2 = 0;
                }
                changePic2(index2);
                index2++;
            }
            /*定义并调用自动播放函数*/
            timer2 = setInterval(autoPlay2, 1500);
            /*鼠标划过整个容器时停止自动播放*/
            bannner2.onmouseover = function () {
                clearInterval(timer2);
            }
            /*鼠标离开整个容器时继续播放下一张*/
            bannner2.onmouseout = function () {
                timer2 = setInterval(autoPlay2, 2500);
            }
            /*遍历所有数字导航实现划过切换至对应的图片*/
            for (var i = 0; i < dot2.length; i++) {
                dot2[i].onmouseover = function () {
                    clearInterval(timer2);
                    index2 = this.innerText - 1;
                    changePic2(index2)
                }
            }
    var bannner3 = document.getElementById("bannner3");
            var pic3 = bannner3.getElementsByTagName("img");
            var dot3 = document.getElementById("ulli3").getElementsByTagName("li");
           
            var index3 = 0;
            var timer3 = null;
            /*定义图片切换函数*/
            function changePic3(curIndex) {
                for (var i = 0; i < pic3.length; ++i) {
                    pic3[i].style.display = "none";
                  
                }
                pic3[curIndex].style.display = "block";
              
            }
            /*index超出图片总量时归零*/
            function autoPlay3() {
                if (+index3 >= pic3.length) {
                    index3 = 0;
                }
                changePic3(index3);
                index3++;
            }
            /*定义并调用自动播放函数*/
            timer3 = setInterval(autoPlay3, 1500);
            /*鼠标划过整个容器时停止自动播放*/
            bannner3.onmouseover = function () {
                clearInterval(timer3);
            }
            /*鼠标离开整个容器时继续播放下一张*/
            bannner3.onmouseout = function () {
                timer3 = setInterval(autoPlay3, 2500);
            }
            /*遍历所有数字导航实现划过切换至对应的图片*/
            for (var i = 0; i < dot3.length; i++) {
                dot3[i].onmouseover = function () {
                    clearInterval(timer3);
                    index3 = this.innerText - 1;
                    changePic3(index3)
                }
            }


</script>


