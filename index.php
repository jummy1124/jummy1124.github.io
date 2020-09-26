<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Lin Ying Chen</title>
        <link rel="icon" type="image/x-icon" href="assets/img/img.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
        <!-- mseeage board -->
        <style type="text/css">
            *{margin:0; padding:0;}
            body,input{font-size:14px; line-height:24px; color:#333; font-family:Microsoft yahei, Song, Arial, Helvetica, Tahoma, Geneva;}
            #content #post,#comment p{zoom:1;}
            #content #post:after,#comment p:after{display:block; height:0; clear:both; visibility:hidden; overflow:hidden; content:'.';}
            .transition{-webkit-transition:all 0.5s linear; -moz-transition:all 0.5s linear; -o-transition:all 0.5s linear; -ms-transition:all 0.5s linear; transition:all 0.5s linear;}
            #content{margin:0 auto; width:960px; overflow:hidden;}
            #content #post{margin-bottom:15px; padding-bottom:15px; border-bottom:1px #d4d4d4 dashed;
                    height: 556px;
                }
            #content #post textarea{display:block; margin-bottom:10px; padding:5px; width:948px; height:390px; border:1px #d1d1d1 solid; border-radius:5px; resize:none; outline:none;}
            #content #post textarea:hover{border:1px #9bdf70 solid; background:#f0fbeb;}
            #content #post #postBt,#content #post #clearBt{margin-left:5px; padding:3px; float:right;}
            #comment{overflow:hidden;}
            #comment p{margin-bottom:10px; padding:10px; border-radius:5px;}
            #comment p:nth-child(odd){border:1px solid #e3e197; background:#ffd;}
            #comment p:nth-child(even){border:1px solid #adcd3c; background:#f2fddb;}
            /*#comment p span{display:inline; float:left;}*/
            #comment p .right{text-align:right;}
            #comment p .msg{width:738px;}
            #comment p .datetime{width:200px; color:#999; text-align:right;}
        </style>

        <!-- mseeage board -->
        <script type="text/javascript">
        var named;
             function delete1(id)
             {
                 localStorage.removeItem(id);
                 this.Storage.writeData();
             }
             function prom() {
                 var name = prompt("請輸入您的名字", "");
                 named = name;

                 if (named)
                 {
                     alert("歡迎您：" + name)
                     document.getElementById("shangtian").style.display = "none";
                     document.getElementById("ritian").value = named;

                 }
                 else {
                     document.getElementById("ritian").value = "匿名發言者";
                 }
             }
          var Storage =
          {
              saveData:function()
              {
                      var data = document.querySelector("#post textarea");
                  if(data.value != "")
                  {
                      var time = new Date().getTime() + Math.random() * 5;
                      if (named) {
                          localStorage.setItem(time, data.value + "|" + named + "|" + this.getDateTime());
                      }
                      else
                      {
                          localStorage.setItem(time, data.value + "|" + "匿名發言者" + "|" + this.getDateTime());
                      }

                      data.value = "";
                      this.writeData();
                  }
                  else
                  {
                      alert("請填寫您的留言！");
                 }
              },
              writeData:function()
              {
                 var dataHtml = "", data = "";
                  for(var i = localStorage.length-1; i >= 0; i--)
                  {
                      data = localStorage.getItem(localStorage.key(i)).split("|");
                      dataHtml += "<span style=>" + data[1] + "<span style=\"float:right\">" + data[2] + "</span><p><span class=\"msg\">" + data[0] + "<input style=\"float:right;border:none;border-radius:5px;\" id=\"clearBt\" type=\"button\" />" + "</span></p>";
                  }
                  document.getElementById("comment").innerHTML = dataHtml;
              },
              clearData:function()
              {
                  if(localStorage.length > 0)
                  {
                      if(window.confirm("清空后不可恢復，是否確認清空？"))
                      {
                          localStorage.clear();
                          this.writeData();
                      }
                  }
                  else
                 {
                     alert("沒有需要清空的數據！");
                  }
              },
              getDateTime:function()
              {
                  var isZero = function(num)
                  {
                      if(num < 10)
                     {
                          num = "0" + num;
                      }
                      return num;
                  }
                  
                  var d = new Date();
                  return d.getFullYear() + "-" + isZero(d.getMonth() + 1) + "-" + isZero(d.getDate()) + " " + isZero(d.getHours()) + ":" + isZero(d.getMinutes()) + ":" + isZero(d.getSeconds());
              }            
          }
          window.onload = function()
          {
              Storage.writeData();
              document.getElementById("postBt").onclick = function(){Storage.saveData();}
              document.getElementById("clearBt").onclick = function(){Storage.clearData();}
          }
        </script>

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"
                ><span class="d-block d-lg-none">Lin Ying Chen</span><span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="" /></span></a
            ><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li> -->
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#text">Message Board</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">Ying Chen <span class="text-primary">Lin</span></h1>
                    <!-- <div class="subheading mb-5">3542 Berry Street · Cheyenne Wells, CO 80810 · (317) 585-8468 · <a href="mailto:name@email.com">name@email.com</a></div> -->
                    <p class="lead mb-5">I studied in the Computer Science and Information Engineering of Asia University, from 2017 to 2021, majoring in machine and deep learning.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://github.com/jummy1124" target="_blank"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="https://www.kaggle.com/jummy1124" target="_blank"><i class="fab fa-kaggle"></i></a>
                        <!-- <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a> -->
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>

<!--                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">-->
<!--                        <div class="flex-grow-1">-->
<!--                            <h3 class="mb-0">Senior Web Developer</h3>-->
<!--                            <div class="subheading mb-3">Intelitec Solutions</div>-->
<!--                            <p>Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.</p>-->
<!--                        </div>-->
<!--                        <div class="flex-shrink-0"><span class="text-primary">March 2013 - Present</span></div>-->
<!--                    </div>-->

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <div class="subheading mb-2">Approved by the Ministry of Science and Technology 109-year College Students Program.<br>
                                Program name : Food accurate recommendation information system based on review trends and contextual awareness services.
                                <h2 style="font-size:20px">通過科技部109大專生計畫<br>計畫名稱 : 基於評論趨勢及情境感知服務之美食精準推薦資訊系統</h2>
                            </div>
                            <a href="https://wsts.most.gov.tw/STSWeb/Award/AwardMultiQuery.aspx" target="_blank">link</a>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2020.06</span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <div class="subheading mb-2">Teacher assistant of Asia University.<br>
                                <h2 style="font-size:20px">亞洲大學教學助教</h2>
                            </div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2020.03-2020.06</span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <div class="subheading mb-2">Teaching Assistant for Deep Learning Courses.<br>
                                <h2 style="font-size:20px">亞洲大學深度學習課程教學助教</h2>
                            </div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2019.11-2020.02</span></div>
                    </div>


                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <div class="subheading mb-2">Teacher assistant of Asia University summer program.<br>
                                <h2 style="font-size:20px">亞洲大學暑期計畫助教</h2>
                            </div>
                            <a href="./IMG_005.jpg" target="_blank">img</a>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2019.07</span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <div class="subheading mb-2">Honors Student of Taichung City in 2019.<br>
                                <h2 style="font-size:20px">2019台中市模範生</h2>
                            </div>
                            <a href="./Honors.pdf" target="_blank">proof</a>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2019.03</span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <div class="subheading mb-2">A simple game programming.<br>
                                <h2 style="font-size:20px">一個簡單的小遊戲(記憶翻牌)</h2>
                            </div>
                            <a href="https://github.com/jummy1124/Remember_Card_Game" target="_blank">code</a>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2019.01</span></div>
                    </div>

                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <div class="subheading mb-2">Pass the license exam of HTML5 Application Development Fundamentals.<br>
                                <h2 style="font-size:20px">通過HTML5基礎開發應用證照</h2>
                            </div>
                            <a href="./HTML5.pdf" target="_blank">proof</a></h2>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2018.05</span></div>
                    </div>
<!--                    <div class="d-flex flex-column flex-md-row justify-content-between">-->
<!--                        <div class="flex-grow-1">-->
<!--                            <h3 class="mb-0">Web Design Intern</h3>-->
<!--                            <div class="subheading mb-3">Shout! Media Productions</div>-->
<!--                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>-->
<!--                        </div>-->
<!--                        <div class="flex-shrink-0"><span class="text-primary">September 2008 - June 2010</span></div>-->
<!--                    </div>-->
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">University of Asia</h3>
                            <div class="subheading mb-3">Computer Science and Information Engineering</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2017.09-2021.06</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i>HTML</li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i>CSS</li>
                        <li class="list-inline-item"><i class="fab fa-js"></i>JAVASCRIPT</li>
                        <li class="list-inline-item"><i class="fab fa-php"></i>PHP</li>
                        <li class="list-inline-item"><i class="fab fa-python"></i>PYTHON</li>
                        <li class="list-inline-item"><i class="fab fa-java"></i>JAVA</li>
                    </ul>
                    <div class="subheading mb-3">Major & Research field</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>Python、Java
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>M/D learning
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <!-- <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
                    <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
                </div>
            </section> -->
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <h2 style="font-size:20px">2020.06 : AIDEA-Taiwan COVID-19 confirmed case forecast TOP.3
                                <a href="https://aidea-web.tw/covid-19" target="_blank">&ensp; link</a></h2></h2>
                            <h2 style="font-size:20px">2020.06 : AIDEA-台灣COVID-19確診人數案例預測 第二名</h2>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <h2 style="font-size:20px">2020.05 : AIDEA-Analysis of the characteristics of the people in the exhibition hall TOP.3
                                <a href="https://github.com/jummy1124/AIDEA_marathon" target="_blank">&ensp; code</a> 
                                <a href="https://aidea-web.tw/topic/3956bf8c-0fba-4fd1-bce7-734fcf0028f7" target="_blank">&ensp; link</a></h2>
                            <h2 style="font-size:20px">2020.05 : AIDEA-展場民眾特徵分析 第三名</h2>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <h2 style="font-size:20px">2020.03 : AIDEA-Taiwan Marine Debris Forecast.Rank : 5/103.
                                <a href="https://aidea-web.tw/topic/031e2daa-cba0-4d2b-974b-019d429348a7" target="_blank">&ensp; link</a>
                            <h2 style="font-size:20px">2020.03 : AIDEA-臺灣海洋廢棄物預測 排名 : 5/103</h2>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <h2 style="font-size:20px">2020.04 : AI CUP 2019 News Position Search Technical Prize Contest Prize Contest-Honorable Mention.
                                <a href="https://aidea-web.tw/topic/b6abbf14-2d60-456c-8cbe-34fdfcd58967" target="_blank">&ensp; link</a>
                                <a href="./新聞立場檢索應用獎金賽.pdf" target="_blank">&ensp; proof</a></h2></h2>
                            <h2 style="font-size:20px">2020.04 : AI CUP 2019 新聞立場檢索技術獎金賽 佳作</h2>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <h2 style="font-size:20px">2019.12 : AIDEA-Taiwan Dairy Farm Milk Forecast TOP.3
                                <a href="https://github.com/jummy1124/AIDEA_Web_Milk_volume_predict" target="_blank">&ensp; code</a> 
                                <a href="https://aidea-web.tw/topic/a7cead35-c5ee-460d-b5cc-b92b46739fff" target="_blank">&ensp; link</a></h2></h2>
                            <h2 style="font-size:20px">2019.12 : AIDEA-台灣牧場乳量預測 第三名</h2>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <h2 style="font-size:20px">2019.12 : AIDEA Passenger Hotspot Forecast Competition TOP.2 
                                <a href="https://github.com/jummy1124/Taxi_Hotspot_prediction" target="_blank">&ensp; code</a> 
                                <a href="https://aidea-web.tw/topic/76f9ec46-cb90-4aa8-82f2-ebfed54cecfb" target="_blank">&ensp; link</a>
                                <a href="./Passenger_Hotspot.pdf" target="_blank">&ensp; proof</a></h2>
                            <h2 style="font-size:20px">2019.12 : AIDEA 專題競賽-載客熱點第二名</h2>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <h2 style="font-size:20px">2019.12 : 2020 AI FUN CUP TOP.2 <a href="https://github.com/jummy1124/2020_AI_FUN_CUP" target="_blank">&ensp; code</a> 
                                <a href="https://fgc.stpi.narl.org.tw/news/newsDetail?id=4b1141306ec5a5d8016ee9afe569000a">&ensp; link</a>
                                <a href="./FUNCUP.pdf" target="_blank">&ensp; proof</a></h2>
                            <h2 style="font-size:20px">2019.12 : 2020「科技大擂台與AI對話」(Fun Cup) 第二名</h2>
                          
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <h2 style="font-size:20px">2019.11 : Yushan Bank Artificial Intelligence Open Challenge-Autumn 2019 (Credit card fraud detection). Rank : 232/785.
                                <a href="https://github.com/jummy1124/Credit_card" target="_blank">&ensp; code</a> 
                                <a href="https://tbrain.trendmicro.com.tw/Competitions/Details/10" target="_blank">&ensp; link</a>
                                <a href="./Credit_card.pdf" target="_blank">&ensp; proof</a></h2>
                            <h2 style="font-size:20px">2019.11 : 玉山人工智慧公開挑戰賽2019秋季賽 排名 : 232/785</h2>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <h2 style="font-size:20px">2019.10 : 2019 Bicycle Industry Digital Transformation AI Application Competition First Prize.
                                <a href="./IMG_006.JPG" target="_blank">&ensp; img</a></h2>
                            <h2 style="font-size:20px">2019.10 : 2019自行車產業數位轉型AI應用競賽 首獎</h2>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <h2 style="font-size:20px">2019.10 : 2019 Cathay Pacific Big Data Competition. Rank : 25/176.
                                <a href="https://github.com/jummy1124/Tbrain_2019_Cathay_Pacific_Big_Data_Competition" target="_blank">&ensp; code</a>
                                <a href="https://tbrain.trendmicro.com.tw/Competitions/Details/7" target="_blank">&ensp; link</a></h2>
                            <h2 style="font-size:20px">2019.10 : 2019 國泰大數據競賽 排名 : 25/176</h2>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <h2 style="font-size:20px">2019.09 : AI CUP 2019 Biomedical Paper Automatic Analysis Official Competition top 25%.
                                <a href="https://moeaincu.wixsite.com/aicup/post/%E3%80%90%E7%94%9F%E9%86%AB%E8%AB%96%E6%96%87%E8%87%AA%E5%8B%95%E5%88%86%E6%9E%90%E6%AD%A3%E5%BC%8F%E8%B3%BD%E3%80%91%E5%BE%97%E7%8D%8E%E5%90%8D%E5%96%AE" target="_blank">link</a></h2>
                            <h2 style="font-size:20px">2019.09 : AI CUP 2019 生醫論文自動分析正式賽 前標</h2>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <h2 style="font-size:20px">2019.09 : Enter the finals of 2019 IMBD.<a href="https://github.com/jummy1124/2019IMBD_TW" target="_blank">code</a>
                                <a href="https://imbd2019.thu.edu.tw/" target="_blank">&ensp; link</a></h2>
                            <h2 style="font-size:20px">2019.09 : 2019 IMBD 進入決賽</h2>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <h2 style="font-size:20px">2019.06 : AIDEA AOI(Automated Optical Inspection)thematic competition TOP.1 
                                <a href="https://github.com/jummy1124/AIDEA_AOI" target="_blank">&ensp; code</a>
                                <a href="https://aidea-web.tw/topic/77687b74-211d-4e71-832a-416f9e99f611" target="_blank">&ensp; link</a>
                                <a href="./AOI.pdf" target="_blank">&ensp; proof</a></h2>
                            <h2 style="font-size:20px">2019.06 : AIDEA AOI 專題競賽第一名</h2>
                        </li>
                        <!-- <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>3<sup>rd </sup>Place - James Buchanan High School - Hackathon 2005
                        </li> -->
                    </ul>
                </div>
            </section>

             <!-- mseeage board -->
            <section class="resume-section" id="text">
                <div class="resume-section-content">
                    <h2 class="mb-5">Message Board</h2>
                    <div id="content">
                        <div id="post">
                            <div style="background:#3EADC5 ;height:30px;">
                                Nickname：<input type="submit" id="shangtian" name="Submit3" style="border:none; background-color:#3EADC5; color:white;" value="Default user click to change" onclick="prom()" />
                                <input type="text" id="ritian" style="border:none; background-color:#3EADC5; color:white;"   onclick="prom()"/>
                                <!--disabled="disabled"-->
                            </div>
                            <div>
                            <textarea class="transition"></textarea>
                                </div>
                            <input id="postBt" type="button" style="border:none; background-color:#3EADC5; color:white;border-radius:5px; width:150px; height:30px;" value="Leave a message"/>
                            </div>
                       <div id="comment"></div>
                    </div>
                </div>
            </section>

        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
