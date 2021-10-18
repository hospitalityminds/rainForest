<?php
echo '
    <section class="footer padding20 container-fluid text-center">
    <div class="padding5">
        <h6>ADDRESS</h6>
        <p>Gut No. 98, Village Balayduri,<br>
            500 meter before Ghoti Toll Naka,<br>
            Mumbai-Nashik National Highway 3,<br>
            Igatpuri, Maharashtra - 422403</p>
    </div>
    <div class="padding5">
        <h6>PHONE</h6>
        <div class="padding5 btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-warning"><a href="tel: 9820138840" style="color: black; text-decoration: none">+91 9820138840</a></button>
            <button type="button" class="btn btn-warning"><a href="tel: 8448449756" style="color: black; text-decoration: none">+91 8448449756</a></button>
        </div>
        <div class="padding5 btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-warning"><a href="tel: " style="color: black; text-decoration: none">+91 </a></button>
        </div>
    </div>
    <div class="padding5">
        <h6>WEDDINGS ENQUIRY</h6>
        <div class="padding5 btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-warning"><a href="tel: 8448449756" style="color: black; text-decoration: none">+91 8448449756</a></button>
            <button type="button" class="btn btn-warning"><a href="tel: 9821120232" style="color: black; text-decoration: none">+91 9821120232</a></button>
        </div>
    </div>
    <div class="padding5">
        <h6>CORPORATE & GROUP QUERY</h6>
        <div class="padding5 btn-group" role="group" aria-label="Basic example">
        
        
            <button type="button" class="btn btn-warning"><a href="tel: 8448449756" style="color: black; text-decoration: none">+91 8448449756</a></button>
            // <button type="button" class="btn btn-warning"><a href="tel: 8422880175" style="color: black; text-decoration: none">+91 8422880175</a></button>
        </div>
        <div class="padding5 btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-warning"><a href="tel: 8422880192" style="color: black; text-decoration: none">+91 8422880192</a></button>
        </div>
    </div>
    <div class="padding5">
        <h6 style="text-transform: uppercase">Instant booking and best deal on Group & Corporates</h6>
        <div class="padding5 btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-warning"><a href="tel: 8448449756" style="color: black; text-decoration: none">+91 8448449756</a></button>
        </div>
    </div>
    <div class="padding5 text-center" style="font-size: 25px">
        <a href="#" class="padding5 footer-links"><i class="fab fa-facebook"></i></a>
        <a href="#" class="padding5 footer-links"><i class="fab fa-instagram"></i></a>
        <a href="#" class="padding5 footer-links"><i class="fab fa-tripadvisor"></i></a>
    </div>
    <div class="padding5">
        2019 &copy; <a href="http://hospitalityminds.com/" target="_blank" style="color: black; text-decoration: none"> Made with <i class="fas fa-heart" style="color:red"></i> By Hospitality Minds</a>, All Rights Reserved
    </div>
</section>

<!-- chatbot code here -->
<div class="reniatnoc">
    <div class="locumns">
       <div class="first" onclick="travischatbot()" id="travis" 
style="display:block; margin-bottom: 60px">
          <img class="travis-img" 
src="https://bot.dbnix.ai/travis/web/lib/img/scotty.png" width="40%" >
       </div>
    </div>
</div>
<div id="ppp" class="reniatnoc" style="display:none">
    <div class=" wor chat-window loc-10-sm loc-4 " id="chat_window_1" 
style="margin-left:10px; margin-bottom: 90px">
       <div class=" loc-xs-12 loc-md-12">
          <div class="">
             <div class="">
                <div class="" >
                   <h3 class="" style="display:block;" 
onclick="chatbot()" id="ppp" > <i class="fa fa-times fa-2x travis-close" 
aria-hidden="true"></i> <span id="showoffer"></span> </h3>
                </div>
                <div class=" loc-md-4 loc-xs-4" style="text-align: 
right;"> <a href="#"><span id="minim_chat_window" class=""></span></a> 
<a onclick="show1();"><span class="" data-id="chat_window_1"></span></a> 
</div>
             </div>
             <div class="msg_container_base" id="displaydata"> </div>
             <div class="">
                <div class="wor">
                   <div class= "loc-10-sm loc-10-md"> <input 
id="btn-input" type="text" class="focus" placeholder="Write your message 
here..."/> </div>
                   <div class="loc-2-sm loc-2-md"> <button 
class="travis-btn" id="btn-chat" onclick="send()">Send</button> </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>
<!-- chatbot code end --> 
<input type="hidden" id="api_key" name="api_key" value="5bed61_5259c4"> <input type="hidden" id="chat_bot" name="chat_bot" value="open"> 
<script src="https://bot.dbnix.ai/travis/web/lib/js/travis.js"></script>
<link href="https://bot.dbnix.ai/travis/web/lib/css/travis.css" rel="stylesheet">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2"></script>    <!-- end footer -->

';
?>