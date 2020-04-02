<?php include './includes/header.php' ?>

<body id="index-page">
    <?php include './includes/navigation.php' ?>
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="https://firebasestorage.googleapis.com/v0/b/pconnex-membership.appspot.com/o/sliders%2FSlider-1-image.jpg?alt=media&token=6e5b71c1-f932-460f-ac67-21bbccb904f4" alt="idea">
                    <div class="carousel-caption top">
                        <h3 class="bannerLogo">PCONNEX</h3>
                        <p class="bannerCaption">We Support, You Act</p>
                    </div>
                    <div class="carousel-caption" id="bottomQuote">
                        <p>Lack of money is no obstacle, Lack of an idea is an obstacle</p>
                    </div>
                </div>
                <div class="item">
                    <img src="https://firebasestorage.googleapis.com/v0/b/pconnex-membership.appspot.com/o/sliders%2FSlider-2-image.jpg?alt=media&token=47db8d1c-d104-49c2-a5a0-3c6212f9e83b" alt="sponsor">
                    <div class="carousel-caption top">
                        <p class="bannerLogo">PCONNEX</p>
                        <p class="bannerCaption">Provide Sponsors</p>
                    </div>
                    <div class="carousel-caption" id="bottomQuote">
                        <p>Fast track your Education / Career with us</p>
                    </div>
                </div>
                <div class="item">
                    <img src="https://firebasestorage.googleapis.com/v0/b/pconnex-membership.appspot.com/o/sliders%2FSlider-3-image.jpg?alt=media&token=d603f985-f8bc-45bb-8202-02351578b461" alt="people">
                    <div class="carousel-caption top">
                        <p class="bannerLogo">PCONNEX</p>
                        <p class="bannerCaption">Powered by People</p>
                    </div>
                    <div class="carousel-caption" id="bottomQuote">
                        <p>Get Fund, Give Fund</p>
                    </div>
                </div>
                <div class="item">
                    <img src="https://firebasestorage.googleapis.com/v0/b/pconnex-membership.appspot.com/o/sliders%2FSlider-4-image.jpg?alt=media&token=49536bcb-5ed0-4974-bf27-f5432fbbf98e" alt="financial">
                    <div class="carousel-caption top">
                        <p class="bannerLogo">PCONNEX</p>
                        <p class="bannerCaption">Channel Financial Support</p>
                    </div>
                    <div class="carousel-caption" id="bottomQuote">
                        <p>Invest in People who Invest in You</p>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <img src="https://firebasestorage.googleapis.com/v0/b/pconnex-membership.appspot.com/o/sliders%2Farrow-left.png?alt=media&token=b0c29250-4d46-4d09-80ea-647ea97c4c59" class=" glyphicon-chevron-left" aria-hidden="true" />
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <img src="https://firebasestorage.googleapis.com/v0/b/pconnex-membership.appspot.com/o/sliders%2Farrow-right.png?alt=media&token=815f5142-38c0-4358-9585-217f5aadd8cb" class=" glyphicon-chevron-right" aria-hidden="true" />
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <div class="toolbar flexbox">
        <div class="col-md-1"></div>
        <div class="col-md-3"><img id="pclogo" src="images/pconnex_lg.png"></div>
        <div class="col-md-3"><a class="menu white" href="member/#/register">Sign Up</a></div>
        <div class="col-md-2">
            <a class="scrolldown white" href="#startJourney"><img class="" src="images/btn/scroll-down.png"></a>
        </div>
        <div class="col-md-3"> <a class="menu white" href="member/#/">Log in</a></div>
        <div class="col-md-3 media">
            <a href="https://www.facebook.com/pconnex/" target="_blank" class="svg"><object type="image/svg+xml" height="40" width="40" data="images/icons/facebook.svg"></object> 
                <a href="https://www.linkedin.com/company/pconnex" target="_blank" class="svg"><object type="image/svg+xml" height="40" width="40" data="images/icons/linkedin.svg"></object> 
                <a href="https://twitter.com/pconnexmy" target="_blank" class="svg"><object type="image/svg+xml" height="40" width="40" data="images/icons/twitter.svg"></object> </a>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div id="sticky-anchor"></div>
    <!-- Start Your Journey -->
    <section id="journeySection">
       
        <div id="startJourney" class="videoContainer">
            <video id="videoBg" autoplay loop muted controls="false" >
            </video>
            <div id="journeyVideoHeader" class="videoHeader">
                <h1>START YOUR <span class="fund">FUNDING</span> JOURNEY</h1>
                <h3>Join people in your community to support your <span class="idea">ideas / needs</span> in real time</h3>
                <div class="row">
                    <div id="xs" class="col-md-6 col-md-offset-3">
                        <!-- <img src="images/btn/create-account-icon-button.png"> -->
                        <div id="accBtn">
                            <a href="member/#/register" class="createAcc">CREATE A FREE ACCOUNT</a>
                        </div>
                    </div>
                    <div id="xs" class="col-md-12">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fpconnex%2F&tabs&width=300&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=213410295706178" width="300" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- How It Works -->
    <section id="HowItWorks">
        <div class="visible-lg-* visible-md-* hidden-sm hidden-xs">
            <div id="tabsContainer">
                <img src="images/btn/first-tab-indvl.png" width="100%" id="buttonSwitch">
                <ul id="tabs">
                    <li class="active indBtn">
                        <p id="ind">Individual</p>
                    </li>
                    <li class="startupBtn">
                        <p id="stup">Start-up</p>
                    </li>
                </ul>
            </div>
            <br>
            <ul id="tab">
                <!-- Individual -->
                <li class="active">
                    <div class="flexbox">
                        <div class="col-md-1 desktop"></div>
                        <div class="col-md-12 desktop">
                            <div class="animation-element slide-left">
                                <div class="arrowContainer col-md-3">
                                    <img src='https://firebasestorage.googleapis.com/v0/b/pconnex-membership-2.appspot.com/o/process%2Fbig-arrow.png?alt=media&token=87184fa2-9a90-4da2-b6c7-61275ea32a85'>
                                </div>

                                <div id="processContainer" class="col-md-9">
                                    <img src="https://firebasestorage.googleapis.com/v0/b/pconnex-membership-2.appspot.com/o/process%2Fstep-1-3-indvl-num.png?alt=media&token=c0c876d5-4560-4c10-8f8b-6a23abb7407d">
                                    <div id="overlay">
                                    <div class="col-md-4"><h3>1. Create Profile</h3><span>Jumpstart your discovery to make an outstanding charisma amongst you
                                    friends and supporters</span></div>
                                     <div class="col-md-4"><h3>2. Choose Campaigns</h3><span>List Your needs or ideas to gain supporters to get funded</span></div>
                                     <div class="col-md-4"><h3>3. Check Projects & People</h3><span>Keep an eye onpromising ideas while checking your own campaign on the go</span></div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="mob">
                            <div class="col-md-12" id="mobImg">
                                <img src='images/process/Individual.png'>
                            </div>
                            <div class="col-md-12" id="mobImg">
                                <img src='images/process/how_it_works_indl.png'>
                            </div>
                            <div class="campaignContainer col-md-12">
                                <a href="member/#/register"><img src='images/btn/button-for-start-a-campaign.png'></a>
                            </div>
                        </div> -->
                        <div class="col-md-1 desktop"></div>
                    </div>
                    <div class="flexbox">
                        <div class="col-md-1 desktop"></div>
                        <div class="col-md-12 desktop">
                            <div class="animation-element slide-right">
                                <div id="processContainer" class="col-md-8">
                                    <img src="https://firebasestorage.googleapis.com/v0/b/pconnex-membership-2.appspot.com/o/process%2Fstep-4-6-indvl-num.png?alt=media&token=5e07bb3f-e480-4fb9-b5c0-b3966e82d4d0">
                                    <div id="overlay">
                                    <div class="col-md-4"><h3>4. Vote for Projects</h3><span>Select a project upfront before the project gets fully funded</span></div>
                                     <div class="col-md-4"><h3>5. Chill & Have Fun</h3><span>Till you get funded, get to know your peers and inspiring projects</span></div>
                                     <div class="col-md-4"><h3>6. Redeem Your Fund</h3><span>You get funded when favorite project and campaign is successfully funded</span></div>   
                                    </div>
                                </div>
                                <div class="campaignContainer col-md-3">
                                    <a href="member/#/register"><img src='https://firebasestorage.googleapis.com/v0/b/pconnex-membership-2.appspot.com/o/process%2Fbutton-for-start-a-campaign.png?alt=media&token=c062a1f9-0eae-45c5-b5ad-74b96bf7d770'></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 desktop"></div>
                    </div>
                </li>
                <!-- Startup -->
                <li>
                    <div class="flexbox">
                        <div class="col-md-1 desktop"></div>
                        <div class="col-md-12 desktop">
                            <div class="animation-element slide-right">
                                <div id="processContainer" class="col-md-9">
                                    <img src="https://firebasestorage.googleapis.com/v0/b/pconnex-membership-2.appspot.com/o/process%2Fstep-1-3-startup-num.png?alt=media&token=4e02d0d6-f942-428c-99c8-718ce785edd2">
                                    <div id="overlay">
                                    <div class="col-md-4"><h3>1. Create Project</h3><span>List you idea, business, or start-up by creating a profile</span></div>
                                     <div class="col-md-4"><h3>2. Share & Gain Upvotes</h3><span>Pre-launch your project to learn fast about your market awareness and readiness</span></div>
                                     <div class="col-md-4"><h3>3. Launch Campaign</h3><span>Launch strong by offering rewards to supporters who backed your project with upvotes</span></div>   
                                    </div>
                                </div>
                                <div class="arrowContainer col-md-3">
                                    <img src='https://firebasestorage.googleapis.com/v0/b/pconnex-membership-2.appspot.com/o/process%2Fbig-arrow-right.png?alt=media&token=8d18d7b9-165a-4ac2-beb2-d5445f5f0694'>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 desktop"></div>
                    </div>
                    <div class="flexbox">
                        <div class="col-md-1 desktop"></div>
                        <div class="col-md-12 desktop">
                            <div class="animation-element slide-left">
                                <div class="campaignContainer col-md-3">
                                    <a href="member/#/register"><img src="https://firebasestorage.googleapis.com/v0/b/pconnex-membership-2.appspot.com/o/process%2Fbutton-for-start-a-campaign.png?alt=media&token=c062a1f9-0eae-45c5-b5ad-74b96bf7d770"></a>
                                </div>
                                <div id="processContainer" class="col-md-8">
                                    <img src="https://firebasestorage.googleapis.com/v0/b/pconnex-membership-2.appspot.com/o/process%2Fstep-4-6-startup-num.png?alt=media&token=b21fe23c-8a10-4a4d-8107-46c3bbff33c7">
                                    <div id="overlay">
                                    <div class="col-md-4"><h3>4. Interact with People</h3><span>Reach out to targeted crowd to get feedback & encourage them to inspire you</span></div>
                                     <div class="col-md-4"><h3>5. Monitor Growth</h3><span>Supporters can be an asset in funding your project by drawing more investors</span></div>
                                     <div class="col-md-4"><h3>6. Redeem Your Fund</h3><span>Your funding goal can be set "Flexible Funding" or "All or Nothing"</span></div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 desktop"></div>
                    </div>
                </li>
            </ul>
        </div>

        <!--Mobile How it works-->
        <div id="mob-howItWorks" class="visible-xs-* visible-sm-* hidden-md hidden-lg">
            <div id="tabsContainer">
                <img src="images/btn/first-tab-indvl.png" width="100" id="buttonSwitch">
                <ul id="tabs">
                    <li class="active indBtn">
                        <p id="ind"><img src="images/mobile-how-it-works/tabs/tab_individual.png" width="60%"/></p>
                    </li>
                    <li class="startupBtn">
                        <p id="stup"><img src="images/mobile-how-it-works/tabs/tab_startup.png" width="60%"/></p>
                    </li>
                </ul>
            </div>
            <br>
            <ul id="tab" class="text-center">
                <!-- Individual -->
                <li class="active">
                    <div class="flexbox">
                        <div class="text-center">
                            <div class="col-md-12" >
                                <img src='https://firebasestorage.googleapis.com/v0/b/pconnex-membership-2.appspot.com/o/process%2F0-individual.png?alt=media&token=26fbc3c2-cbd9-4897-923b-281c59424b35'>
                            </div>
                            <div class="col-md-12">
                                <img src='https://firebasestorage.googleapis.com/v0/b/pconnex-membership-2.appspot.com/o/process%2F1-individual.png?alt=media&token=d9c1897c-b602-44c4-af63-a4505133cd4d'>
                            </div>
                            <!-- <div class="col-md-12">
                                <img src='images/mobile-how-it-works/Individual/2-choose-campaigns.png'>
                            </div>
                            <div class="col-md-12">
                                <img src='images/mobile-how-it-works/Individual/3-check-project-and-people.png'>
                            </div>
                            <div class="col-md-12">
                                <img src='images/mobile-how-it-works/Individual/4-vote-for-projects.png'>
                            </div>
                            <div class="col-md-12">
                                <img src='images/mobile-how-it-works/Individual/5-chill-and-have-fun.png'>
                            </div>
                            <div class="col-md-12">
                                <img src='images/mobile-how-it-works/Individual/6-redeem-your-fund.png'>
                            </div> -->
                            
                            <div class="col-md-12">
                                <a href="member/#/register"><img src='https://firebasestorage.googleapis.com/v0/b/pconnex-membership-2.appspot.com/o/process%2F7-start-compaign-button.png?alt=media&token=af91665b-0e1c-456f-8f1f-cf786b941134'></a>
                            </div>
                        </div>
                    </div>

                </li>
                <!-- Startup -->
                <li>
                    <div class="flexbox">
                        <div class="text-center">
                            <div class="col-md-12" >
                                <img src='images/mobile-how-it-works/startup/0-startup.png'>
                            </div>
                            <div class="col-md-12">
                                <img src='images/mobile-how-it-works/startup/1-startup.png'>
                            </div>
<!--                             <div class="col-md-12">
                                <img src='images/mobile-how-it-works/startup/2-share-and-gain-upvotes.png'>
                            </div>
                            <div class="col-md-12">
                                <img src='images/mobile-how-it-works/startup/3-launch-campaign.png'>
                            </div>
                            <div class="col-md-12">
                                <img src='images/mobile-how-it-works/startup/4-interact-with-people.png'>
                            </div>
                            <div class="col-md-12">
                                <img src='images/mobile-how-it-works/startup/5-monitor-growth.png'>
                            </div>
                            <div class="col-md-12">
                                <img src='images/mobile-how-it-works/startup/6-redeem-your-fund.png'>
                            </div> -->
                            <div class="col-md-12">
                                <a href="member/#/register"><img src='images/mobile-how-it-works/startup/button-start-a-project.png'></a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Watching Video -->
    <section id="watchVideo">
        <div id="">
            <div class="videoHeader" id="videoSection">
                <p id="videoTitle">TO KNOW WHAT FUNDS YOU CAN APPLY &amp; RAISE ON PCONNEX</p>
                <a href="http://www.youtube.com/watch?v=PfG9aiH1mh4" class="svg" role="button">
                    <!-- <img src="images/btn/play-button.svg"> -->
                    <object
                   type="image/svg+xml"
                   height="112"
                   width="112"
                   data="images/btn/play-button.svg">
                    </object>
                    </a>
              <!--   <a id="mobilePlay" href="http://www.youtube.com/watch?v=6w4FI0Jq0lI" role="button">
                    <img src="images/btn/play-button.png"></a> -->
                <p id="videoTitle" class="subtitle">WATCH OUR VIDEO</p>
            </div>
        </div>
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
            <div id="dialog" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <div>
                            <iframe width="100" height="480" src=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Raising Fund -->
    <section id="raisingFund">
        <div>
            <div class="fundHeader">
                <p id="fundTitle"><b>I'm RAISING FUND AS :</b></p>
                <div class="col-md-1"></div>
                <!-- <div class="col-md-5">
                    <div class=" contentBox">
                        <p class="contentBtn">Individual</p>
                        <p class="contentSub"><b>Pconnex helps you to gain sponsors for your campaigns</b></p>
                        <p class="contentCaption"><b>Powered By PCONNEX</b></p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class=" contentBox">
                        <p class="contentBtn">Start-up</p>
                        <p class="contentSub"><b>Get funds &amp; market validation through upvotes</b> </p>
                        <p class="contentCaption"><b>Powered By People</b></p>
                    </div>
                </div> -->
                <div class="container col-md-5 fundingContainer">
                        <a href="member/#/register" id="contentBtn">Individual</a>
                        <p class="contentSub"><b>Pconnex helps you to gain sponsors for your campaigns</b></p>
                        <p class="contentCaption"><b>Powered By PCONNEX</b></p>
                </div>
                <div class="container col-md-5 fundingContainer">
                        <a href="member/#/register" id="contentBtn">Startup</a>
                        <p class="contentSub"><b>Get funds &amp; market validation through upvotes</b> </p>
                        <p class="contentCaption"><b>Powered By People</b></p>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="quote">
            <div>If You can <span>THINK</span> it,</div>
            <div class="secondQuote">You can <span>DO</span> it. </div>
        </div>
    </section>

    <div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="buttonContainer">
            <button class="btn btn-danger" id="closeVideo">Close</button>
        </div>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- content dynamically inserted -->
                </div>
            </div>
        </div>
    </div>  
        <?php include './includes/footer.php'; ?>
    
        <!--<script src="scripts/landingScript.js"></script>-->
    
     <script>function sticky_relocate(){var e=$(window).scrollTop(),t=$("#sticky-anchor").offset().top;$("header").hide(),e>t?$("header").show():$("header").hide()}$(function(){function e(){var e=o.height(),i=o.scrollTop(),a=i+e;$.each(t,function(){var e=$(this),t=$(e).outerHeight(),o=$(e).offset().top,n=o+t;n>=i&&a>=o?e.addClass("in-view"):e.removeClass("in-view")})}$(window).scroll(sticky_relocate),sticky_relocate();var t=$.find(".animation-element"),o=$(window);$(window).on("scroll resize",function(){e()}),$(window).trigger("scroll"),$(".show-modal").on("click",function(){$.showYtVideo({videoId:"uVdV-lxRPFo"})})}),$(".show-modal").on("click",function(){$.showYtVideo({videoId:"uVdV-lxRPFo"})}),$("ul#tabs li").click(function(e){if(!$(this).hasClass("active")){var t=$(this).index(),o=t+1;$("ul#tabs li.active").removeClass("active"),$(this).addClass("active"),$("ul#tab li.active").removeClass("active"),$("ul#tab li:nth-child("+o+")").addClass("active"),1==o?($("#buttonSwitch").attr("src","images/btn/first-tab-indvl.png"),$("#ind").css("font-weight","bold"),$("#stup").removeAttr("style")):2==o&&($("#buttonSwitch").attr("src","images/btn/second-tab-startup.png"),$("#stup").css("font-weight","bold"),$("#ind").removeAttr("style"))}}),$(function(){$("#ind").css("font-weight","bold")}),function(e){var t=/\+/g,o=/([^&=]+)=+([^&]*)/g,i=/([^&=]+)=?([^&]*)/g,a=function(e){return decodeURIComponent(e.replace(t," "))};e.parseQuery=function(e,t){var n,s={},r=t||{},d=r.tolerant?i:o;for("?"===e.substring(0,1)&&(e=e.substring(1));n=d.exec(e);)s[a(n[1])]=a(n[2]);return s},e.getQuery=function(t){return e.parseQuery(window.location.search,t)},e.fn.parseQuery=function(t){return e.parseQuery(e(this).serialize(),t)}}(jQuery),$(document).ready(function(){var e=$("html, body");$("a.menu").click(function(){return e.animate({scrollTop:$($.attr(this,"href")).offset().top},500),$(".navbar-collapse.in").collapse("hide"),!1}),$("a.scrolldown").click(function(){return e.animate({scrollTop:$($.attr(this,"href")).offset().top+110},500),$(".navbar-collapse.in").collapse("hide"),!1}),$('a[href^="http://www.youtube.com"]').on("click",function(e){var t=$(this).attr("href").slice($(this).attr("href").indexOf("?")+1),o=$.parseQuery(t);if("v"in o){e.preventDefault();var i=768,a=576;$(this).attr("data-width")&&(i=parseInt($(this).attr("data-width"))),$(this).attr("data-height")&&(a=parseInt($(this).attr("data-height")));var n='<iframe width="'+i+'" height="'+a+'" id="videoIframe" scrolling="no" allowtransparency="true" allowfullscreen="true" src="http://www.youtube.com/embed/'+o.v+'?rel=0&wmode=transparent&showinfo=0" frameborder="0"></iframe>';$("#mediaModal .modal-body").html(n),$("#mediaModal").on("show.bs.modal",function(){var e=$(this).find(".modal-body"),t=$(this).find(".modal-dialog"),o=i+parseInt(e.css("padding-left"))+parseInt(e.css("padding-right"));o+=parseInt(t.css("padding-left"))+parseInt(t.css("padding-right")),o+="px",$(this).find(".modal-dialog").css("width",o)}),$("#mediaModal").modal()}}),$("#closeVideo").on("click",function(e){$("#mediaModal").modal("toggle"),e.preventDefault}),$("#mediaModal").on("hidden.bs.modal",function(){$("#mediaModal .modal-body").html("")})}),window.onload=function(){var e=$(window).width();e>=768?($("#videoBg").append('<source src="images/home_page_video_x264_opt.mp4" type="video/mp4">'),$("#videoBg").append('<source src="images/home_page_video_opt.ogv" type="video/ogg">'),$("#videoBg").append('<source src="images/home_page_video_opt.webm" type="video/webm">'),$("#videoBg").load(),$("#videoBg").attr("autoplay",!0),1280>=e&&$("#journeyVideoHeader").css({top:"15%"})):$("#videoBg").css({display:"none"})};</script>
</body>
</html>
