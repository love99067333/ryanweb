@extends('layouts.app')

@section('content')

<div class="container">
    <div class="profile">
        <div class="row">

            <div class="col-sm-2">
                <img src="{{ asset('img/頭貼.jpg') }}">

            </div>
            <div class="col-sm-10">
                <h1>吳承穎 Ryan,Wu</h1>
                <p>剛起步的全端工程師，許多開發網站與實習經驗。</p>
                <div class="links">

                    <a href="https://github.com/love99067333" target="_blank" rel="nofollow noopener noreferrer"><i class="fa fa-github"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100003355624206" target="_blank" rel="nofollow noopener noreferrer"><i class="fa fa-facebook-square" aria-hidden="true"></i></i></a>

                </div>
                <p>全端工程師</p>
                <p>Tainan,TW</p>
                <a href="mailto:4a5g0082@stust.edu.tw" target="_blank" rel="nofollow noopener noreferrer">4a5g0082@stust.edu.tw</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="skills">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <h1>技能</h1>
                </div>
            </div>

        </div>
        <div class="row" title="">
            <div class="col-sm-6 item">
                <hr>
                <h1><span style="font-size: 24px;">Framework<br></span></h1>
                <p></p>
                <ul>
                    <li><span style="font-size: 16px;">Laravel</span></li>
                    <li><span style="font-size: 16px;">Ionic</span></li>
                </ul>
                <p></p>
            </div>
            <div class="col-sm-6 item">
                <hr>
                <h1><span style="font-size: 24px;">版本控管</span></h1>
                <p></p>
                <ul>
                    <li><span style="font-size: 16px;">GitHub</span></li>
                </ul>
                <p></p>
            </div>
        </div>
        <div class="row" title="">
            <div class="col-sm-6 item">
                <hr>
                <h1><span style="font-size: 24px;">Font-End<br></span></h1>
                <p></p>
                <ul>
                    <li><span style="font-size: 16px;">Html</span></li>
                    <li><span style="font-size: 16px;">Css/Sass</span></li>
                    <li><span style="font-size: 16px;">RWD</span></li>
                    <li><span style="font-size: 16px;">JavaScript</span></li>
                    <li><span style="font-size: 16px;">TypeScript</span></li>
                    <li><span style="font-size: 16px;">jQuery</span></li>
                </ul>
                <p></p>
            </div>
            <div class="col-sm-6 item">
                <hr>
                <h1><span style="font-size: 24px;">Back-End</span></h1>
                <p></p>
                <ul>
                    <li><span style="font-size: 16px;">PHP</span></li>
                    <li><span style="font-size: 16px;">MySQL、MariaDB、MongoDB</span><br></li>
                    <li><span style="font-size: 16px;">Apache、Heroku、Free Host</span><br></li>
                </ul>
                <p></p>
            </div>
        </div>
        <hr>
    </div>


    <div class="resume">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <h1>自介</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 item">
                    <p>我是吳承穎，目前是以全端工程師為目標前進，熟悉Laravel開發框架、MVC架構；</p>
                    <p>Front-end切版、UI/UX設計、JS，稍微會一些RWD..等基本前端資訊；</p>
                    <p>Back-end較常使用PHP，利用Laravel的框架撰寫Controller、(RESTful)API..等；</p>
                    <p>伺服器有Apache的經驗，經費關係沒有使用過AWS、GCP..付費主機，有使用免費主機、Heroku..等，使用過樹莓派架設Laravel專案。</p>
                    <p>資料庫使用過Mysql、MariaDB、MongoDB；</p>
                    <p>版本控管的觀念，常使用GitHub，有時推上Heroku；</p>
                    <p>對資安有基本的認識，封包擷取、資料庫密碼雜湊、交易驗證..等等，曾在Hitcon回報漏洞(<a href="https://ppt.cc/fq4Aix">查看</a>)</p>
                    <p>也會使用Ionic開發APP、Web APP，詳細的程式語言不一一列出了。</p>
                    <p></p>
                    <p>上方會提供GitHub連結，有興趣可以參考。</p>
                    <p></p>
                    <p></p>

                </div>
            </div>

        </div>

        <hr>
    </div>
    <div class="experience">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <h1>工作經驗</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 item">

                    <ul id="experience-title">
                        <li>
                        <h5><strong>工業技術研究院-服科部</strong> 【工程人才】 <span>2020-03-02~2020-08-31</span></h5>
                            <ul id="experience-content">
                                <li>使用Laravel框架開發運動激勵點數平台之後台管理介面、API。</li>
                                <li>使用Ionic開發APP串接上列之API，作為用戶端供運動者使用。</li>
                                <li>協助開發、改善科技體適能之介面。</li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </li>
                        <li>
                        <h5><strong>新南向馬來西亞實習</strong> 【實習工程師】 <span>2019-07-11~2019-09-08</span></h5>
                            <ul id="experience-content">
                                <li>使用Ionic開發Hybrid Web App，</li>
                                <li>231</li>
                                <li>231354</li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </li>


                    </ul>








                </div>
            </div>

        </div>

        <hr>
    </div>
    <div class="portfolio">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <h1>作品集</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 item">











                </div>
            </div>

        </div>

        <hr>
    </div>

</div>
<!-- <script type="text" src="{{ asset('js/app.js') }}" defer></script> -->
<!-- <div class="cards">
    <div class="container">

        <div class="row">



            <div class="card col-lg-4 col-md-6 mb-4 mb-lg-0" >
                <div class="card-body">
                    <h5 class="card-title text-center">專業技能-Skill</h5>
                    <ul>
                        <li>
                            123

                        </li>
                        <li>
                            123

                        </li>
                        <li>
                            123

                        </li>
                        <li>

                            123
                        </li>
                        <li>

                            123
                        </li>
                        <li>
                            123

                        </li>

                    </ul>
                </div>
            </div>
            <div class="card col-lg-4 col-md-6 mb-4 mb-lg-0" >
                <div class="card-body">
                    <h5 class="card-title text-center">個性-Personality</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card col-lg-4 col-md-6 mb-4 mb-lg-0" >
                <div class="card-body">
                    <h5 class="card-title text-center">興趣-Hobbies</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main_title">
                    <p class="top_text">Our Service <span></span></p>
                    <h2>What Service We <br>
                        Offer For You </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="service_item">
                    <img src="img/services/s1.png" alt="">
                    <h4>Web Development</h4>
                    <p>Fruit saw for brought fish forth had ave is man a that their Two he is dominion evening their Fruit saw for
                        brought fish forth</p>
                    <a href="#" class="primary_btn2 mt-35">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="service_item">
                    <img src="img/services/s2.png" alt="">
                    <h4>UX/UI Design</h4>
                    <p>Fruit saw for brought fish forth had ave is man a that their Two he is dominion evening their Fruit saw for
                        brought fish forth</p>
                    <a href="#" class="primary_btn2 mt-35">Learn More</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="service_item">
                    <img src="img/services/s3.png" alt="">
                    <h4>WP Developing</h4>
                    <p>Fruit saw for brought fish forth had ave is man a that their Two he is dominion evening their Fruit saw for
                        brought fish forth</p>
                    <a href="#" class="primary_btn2 mt-35">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<h5>延伸</h5>
<h5>延伸</h5>
<h5>延伸</h5>
<h5>延伸</h5>
<h5>延伸</h5>
<h5>延伸</h5>
<h5>延伸</h5>
<h5>延伸</h5>
<h5>延伸</h5>
<h5>延伸</h5>
<h5>延伸</h5>
<h5>延伸</h5> -->


@endsection