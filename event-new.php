<?php

include 'header.php';

    $idES = $_GET["idEvent"];
    $controller->getDatabase()->updateAttend($idES);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/eventNew.css">
	<link rel="stylesheet" href="css/jq-carousel-plugin.css">
    <link rel="stylesheet" href="css/styleMap.css">
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script> -->
    <script src="js/jq-csrousel-plugin.js"></script><!--JS image slice -->
    <style rel="stylesheet" type="text/css">
        html,body{
            width: 100%;
            height: 100%;
        }
        #myCarousel{
        	margin-top: 1.5%;
        	margin-left: 25%;
            position: relative;  
            width: 69%;
            height: 64%;
            overflow: hidden; 
            display: inline-flex;
            /* float:right; */


            /*display: flex;
            justify-content: center;  */
            
    		      
        }img{
            display:block;
            width:100%; 
            height:100%;
            object-fit: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .str{
            border: 1px solid #999;
            font-size: 25px;
            text-align: center;
            padding: 2% 8% 2%;
            

        }.ava{
            
            padding: 5px;
            border-radius: 7px;
            background-color: #4CAF50;
            color:white;
            font-size: 11px;
            margin-top:-20px;
            margin-left:5px;
            
        }.unava{
           
            padding: 5px;
            border-radius: 7px;
            background-color: #f44336;
            color:white;
            font-size: 11px;
            margin-top:-20px;
            margin-left:5px;
        }
        
        .clear{clear:both; line-height:0; height:0; font-size: 1px}
        body { 
  /* font-family: 'Open Sans', sans-serif; */
  /* color: #666; */

}

/* STRUCTURE */

.wrapper {
    padding: 5px;
    max-width: 960px;
    width: 95%;
    margin: 20px auto;
}
header {
    padding: 0 15px;
}

.columns {
    
    display: flex;
    flex-flow: row wrap;
    justify-content: center;
    margin: 5px 0;
}

.column {
    text-align: justify;
    background-color: white;
    flex: 1;
    /* border: 1px solid gray; */
    margin: 10px;
    padding: 20px 30px;
    &:first-child { margin-left: 10; }
    &:last-child { margin-right: 0; }
    
    
}
.column3 {
    text-align: justify;
    background-color: white;
    flex: 3.5;
    /* border: 1px solid gray; */
    margin: 10px;
    padding: 20px 30px;
    &:first-child { margin-left: 0; }
    &:last-child { margin-right: 0; }
    
}
		
		
    </style>



    <style>
        
        #slider { width: 500px; }
        #slider li { width: 250px; }
    </style>
    <div class="bt_1" onmouseout="this.className='bt_1'" onmouseover="this.className='bt_2'"></div>
</head>
<body>


<div class="alert alert-success alert-dismissible" style="display:none" id="showSuc">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" >&times;</a>
            <strong>Successful!</strong><span id="susUser">This alert box could indicate a successful or positive action.</span>
        </div>

        <div class="alert alert-danger alert-dismissible"  style="display:none" id="showWg">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> This alert box could indicate a successful or positive action.
        </div>
        </div>
    <div class="container-fluid" style="color:#fff;">
   
    <!-- <h3>Fixed (sticky) vertical sidenav on scroll</h3>
    <p>Scroll this page to see how the left navigation menu behaves with data-spy="affix".</p>
    <p><strong>The left menu sticks to the page when you have scrolled a specified amount of pixels.</strong></p> -->
    </div>
    <br>

 



<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
  <!-- </ol> 
  
  <div class="carousel-inner"> -->

  <?php echo $controller->getDatabase()->imageEventCover($idES);?>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





<div class="testbox" style="height:150px;float:right;margin-top:-5px;margin-right:6%;width: 69%;">
 
 <div  style="color:#1e7998;">
     <div class="eventTitle" style="margin-left:3%;"><h3><b id="tNameEvent" >Tao Kae Noi Presents BNK48</b></h3></div><br>
     <button name="idEvent" type="submit" class="btn btn-defualt buttonTicketE" style="width:22%;margin-right:3%;margin-top:-1.5%"  id="EbtnT" onclick="document.getElementById('buyTicket').style.display='block';setTicketV();" >Buy Tickets</button><br>
     <div style="text-align: left;margin-left:3%;margin-bottom:1%;" >
     <i class="fa fa-clock-o fa-fw"></i><span id="dTEvent">2018-03-08 | 08:27 </span><span id="EndTimeS"></span>&nbsp;<span class="ava" stlye="margin-top:-10px;" id="aval">Avaliable</span><br>
     <i class="fa fa-map-marker fa-fw"></i><span id="locaEvent">kasetsart</span>
     </div>
    
</div>
</div>


<div id="buyTicket" class="signUp" >
<form class="login-content animate" id="buyTicketForm" method="POST" style="width:40%;margin-top:10%;" action="buyTicket.php">
  <div style="padding: 16px;" >
        <center><h2><b><span id="bTs">Buy Tickets</span></b></h2></center><br>
        <hr style="    display: block;
                            height: 1px;
                            border: 0;
                            border-top: 3px solid #f44336;
                            margin-top: 0px;
                            margin-bottom:25px;
                            padding: 0;
                            /* background-color: black;
                            color: black; */">
        <h4 style="margin-left:4%;"><b>Ticket Price: <span id="priceTicket" style="margin-left:7%;">0.00</span>&nbsp;&nbsp;&nbsp;<span style="margin-left:4%">Baht.</span></b>
        
        <button class"btn btn-dufault" type="button" style="width:30px;margin-left:45px;"  onclick="ticketE(-1)">-</button>
        <span id="numTicket" style="margin-left:5%;margin-right:5%;">1</span>
        <input type="hidden" name="price" id="hPrice">
        <input type="hidden" name="numTicket" id="hNumTicket">
        <input type="hidden" name="idEvent" id="hIdEvent">
        <button class"btn btn-dufault" type="button" style="width:30px;" onclick="ticketE(1)">+</button>
        </h4>
        <hr style="    display: block;
                            height: 1px;
                            border: 0;
                            border-top: 3px solid #f44336;
                            margin-top: 20px;
                            margin-bottom:20px;
                            padding: 0;
                            /* background-color: black;
                            color: black; */">
                        
        <h4 style="text-align:right;margin-right:15px;margin-bottom:25px;"><b>Total Price: <span id="totalPrice"> 0.00 </span>&nbsp;Baht</b></h4>
        <center><button id="Ticbtn"  style="margin-right:20px;width:120px;" type="button" onclick="buy()" name="SignUp"  class="btn btn-success" >Buy Tickets</button>
        <button   style="width:120px;" type="button" class="btn btn-danger"  onclick="resetValue();" class="cancelbtn">Cancel</button></center>
        
        <div style="height:10px;"></div>
  </div>
  </form>
</div>

    <div class="container" >
        <div class="row">
            <nav class="col-sm-3">
            <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205" style="width:200px;margin-top:-575px;float:left;margin-left:-50px;text-align:left;">
                <li id="mGeneral" class="active"><a class="nav-link scroll"  href="#tNameEvent" onclick="
                document.getElementById('mGeneral').className='active';
                document.getElementById('mUser').className='';
                document.getElementById('mEvent').className='';
                "><span class="glyphicon glyphicon-list" ></span> &nbsp;Event Detail</a></li>

                <li id="mUser" ><a id="mUserE" href="#section2"  onclick="document.getElementById('mGeneral').className='';
                document.getElementById('mUser').className='active';
                document.getElementById('mEvent').className='';document.getElementById('buyTicket').style.display='block';setTicketV();"><span class="glyphicon glyphicon-tags" ></span>&nbsp;<span id="ByT"> Buy Tickets</span></a></li>

                <li id="mEvent" ><a  href="#" id="webBoard" onclick="document.getElementById('mGeneral').className='';
                document.getElementById('mUser').className='';
                document.getElementById('mEvent').className='active';webBoard();" ><span class="glyphicon glyphicon-comment" ></span>&nbsp;Webboard</a></li>
            </ul>
            </nav>
            <div class="col-sm-9">   
            <div class="wrapper" >

    
        
            <section class="columns" >
                
                <div class="column3" >
                    <h3  style="color:#1e7998;"><b>Event Detail</b></h3>
                    <div>
              <input type="checkbox" class="read-more-state" id="post-1" />
            
              <p class="read-more-wrap"><span id="deE">Tao Kae Noi Presents BNK48 1st Concert “STARTO”
            ↵
            ↵พบกับคอนเสิร์ตเต็มรูปแบบครั้งแรกของ BNK48 ในวันเสาร์ที่ 31 มีนาคม พ.ศ. 2561 
            ↵ณ BITEC BANGNA Hall 106
            ↵คอนเสิร์ตเริ่มเวลา 18:00น. (ประตูเปิด 16:00น.)
            ↵
            ↵บัตรยืน ราคา 2000 บาท (มีการแบ่งพื้นที่ Lady Zone ทั้งสองฝั่ง)
            ↵และบัตรนั่ง ราคา 1500/1000/800 บาท
            ↵
            ↵เริ่มจำหน่ายบัตร วันพฤหัสบดีที่ 1 มีนาคม พ.ศ. 2561 เวลา 13:48น. 
            ↵ทาง www.eventpop.me</span>
            ↵<span class="read-more-target" id="readMoreE">
            ↵เงื่อนไขการซื้อบัตร และ การเข้าชมในวันงาน
            ↵- การซื้อบัตร สามารถซื้อได้ไม่เกิน 4 ที่นั่ง
            ↵- ทุกที่นั่ง ต้องลงทะเบียนชื่อและนามสกุลของผู้ที่จะเข้าชมบนในระบบขณะสั่งซื้อ และชื่อของท่านจะถูกพิมพ์ลงบนบัตรทุกใบ ไม่สามารถมอบสิทธิ์ให้ผู้อื่นเข้าชมแทนได้ รวมถึงในกรณีที่ท่านไม่สามารถมารับชมได้ จะไม่สามารถคืนบัตร หรือแลกเปลี่ยนใด ๆ ได้ทั้งสิ้น
            ↵- ในกรณีที่พิมพ์ชื่อ หรือนามสกุลผิดพลาดขณะสั่งซื้อ ท่านสามารถแก้ไขชื่อ หรือนามสกุลของท่านได้ไม่เกิน 3 ตัวอักษรเท่านั้น เพื่อป้องกันการมอบสิทธิ์ให้ผู้อื่น โดยสามารถแจ้งความจำนงขอแก้ไขได้ที่ Call Center ของ eventpop ภายใน 24 ชั่วโมงหลังการสั่งซื้อ
            ↵- ในวันงาน กรุณานำบัตรประชาชนตัวจริง หรือเอกสารที่ออกโดยราชการ ที่มีรูปของท่านอยู่ เพื่อยืนยันตัวตนกับทางเจ้าหน้าที่บริเวณทางเข้าสู่คอนเสิร์ต
            ↵- บัตร Lady Zone จะมีการขายแยกประเภทจากบัตรยืนปกติ และในวันงาน จะอนุญาตให้เฉพาะสุภาพสตรีเท่านั้น ที่สามารถเข้าชมในพื้นที่นี้ได้ (ในกรณีที่ผู้ซื้อเป็นสุภาพสตรี แต่ผู้ติดตามที่ซื้อบัตรด้วยกันเป็นสุภาพบุรุษ ก็จะอนุญาตให้เฉพาะสุภาพสตรีเข้าชมเท่านั้น บัตรของท่านสุภาพบุรุษ จะถือว่าเป็นโมฆะทันที)
            ↵- บัตรยืน จะมีหมายเลขลำดับการเข้าชม ตามลำดับการซื้อ เมื่อถึงวันงาน จะมีการเรียกให้เข้าแถวในช่วงเวลา 13:00-15:30น. ตามหมายเลขลำดับการเข้าชม หากท่านไม่มาเข้าแถวในช่วงเวลาดังกล่าว จะต้องรอเข้าสู่ภายในคอนเสิร์ตหลังจากผู้ที่มาเข้าแถวตามเวลา เข้าสู่ภายในเป็นที่เรียบร้อย
            ↵- ไม่อนุญาตให้นำกล้องถ่ายภาพ กล้องถ่ายวีดีโอ และเครื่องบันทึกเสียงเข้าสู่ภายในคอนเสิร์ต และภายใน ไม่อนุญาตให้บันทึกภาพ วีดีโอ หรือเสียงตลอดการแสดง
            ↵- ขนาดของสัมภาระที่จะนำเข้าสู่ภายใน ต้องมีขนาด กว้าง+ยาว+สูง ไม่เกิน 90 เซนติเมตร 
            ↵- ไม่อนุญาตให้นำอาหาร เข้าสู่ภายในฮอลล์คอนเสิร์ต สำหรับเครื่องดื่มที่นำเข้าได้ จะต้องเป็นเครื่องดื่มที่มีฝาปิดได้เท่านั้น
            ↵- ในวันงาน ไม่มีจุดรับฝากจดหมาย หรือของขวัญให้แก่สมาชิก BNK48
            ↵- สินค้า จำหน่ายที่หน้างาน ไม่จำเป็นต้องมีบัตรคอนเสิร์ตในการซื้อ
            ↵- มีความเป็นไปได้ ที่จะมีผู้ซื้อสินค้าเป็นจำนวนมาก กรุณาบริการเวลาระหว่างการต่อแถว และเวลาในการเข้าชมคอนเสิร์ตด้วยตัวท่านเอง ทางเราจะไม่รับผิดชอบในกรณีที่ท่านไม่สามารถเข้าชมคอนเสิร์ตได้ทันเวลา (เวลาเริ่มจำหน่ายสินค้า จะทำการประกาศในภายหลัง)
            </span></p>
              
              <label for="post-1" class="read-more-trigger" style="float:right;"></label>
              <div style="100%"></div>
            </div>
                </div>
                
            <div class="column">
                    <h3 style="margin-bottom:2%;"><b>Teaser Video</b></h3>
                    <!-- <object width='870' height='500'>
            <param name='movie' value='https://www.youtube.com/v/mNqMY2bNWfk' id="paramE"></param>
            <param name='wmode' value='transparent'></param> -->
            <!-- <embed id="embedE" src='https://www.youtube.com/v/=m3DYNLg9q74' type='application/x-shockwave-flash' wmode='transparent' width='800' height='400'> 
            </embed>
            </object>  -->
            <!-- <iframe width="870" height="500" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen></iframe> -->
                <?php
                    $path =  $controller->getDatabase()->getLinkYoutube($_GET["idEvent"]);
                    // echo $path;
                    // echo strlen($path);
                    $pVDO = substr($path,32);
                    // echo $pVDO;
                    $text = "[clip]https://www.youtube.com/embed/".$pVDO."[/clip]";
                    echo preg_replace("/\[clip\](.+?)\[\/clip\]/is",'<iframe width="870" height="500" src="\1"></iframe>', $text);
                    ?>
                </div>
              
              
                
            </section>  
 


            <section class="columns">
            <div class="column">
        <h3 style="margin-bottom:2%;"><b>Google Map</b></h3>
        <!-- google map api key: AIzaSyB8JpS1CAsU4Ky0si4uUeYigHEwOu22LpU -->
        <div id="map1"></div>
        </div>
        </section> 

                







            <section class="columns">
                
                <div class="column" style="color:#1e7998;line-height: 30px;">
                    <h3 ><b>Other Information</b></h3>
                    
                    <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Category:&nbsp;&nbsp;<span id="categoryE"> Food</span></b><br>
                    <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Type:&nbsp;&nbsp;<span id="typeE"> Free</span></b><br>
                    <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Price:&nbsp;&nbsp;<span id="priceE"> none</span></b><br>
                    <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Pre-Condition:&nbsp;&nbsp;<span id="preConE"> none</span></b><br>
                    <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Post-Condition:&nbsp;&nbsp;<span id="postConE"> none</span></b>
                    
                </div>
                
                <div class="column" style="line-height: 35px;">
                    <h3  style="color:#1e7998;" ><b>Contact</b></h3>
                    <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Organizer Name:&nbsp;&nbsp;<span id="organE"> BNK48</span></b><br>
                    <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Contact Name:&nbsp;&nbsp;<span id="contactE"> Sun</span></b><br>
                    <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•E-Mail:&nbsp;&nbsp;<span id="eMailE"> Vasupol.ch@ku.th</span></b><br>
                    <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Phone:&nbsp;&nbsp;<span id="phoneE"> 0812345678</span></b><br>
                    
                </div>
              
              
                
            </section>  
                
                
            
            </div>
          </div>
        </div>
    </div>

    <footer class="footer nav navbar-inverse">
        <center>
        <br>
        <p style="color:white;"><b>&copy; Designed by Kiticha Garden</b></p>
        <br>
        </center>
</footer>
<script>
$(document).ready(function() {
  var scrollLink = $('.scroll');
  // Smooth scrolling
  scrollLink.click(function(e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000 );
  });
  
  // Active link switching
  $(window).scroll(function() {
    var scrollbarLocation = $(this).scrollTop();
    scrollLink.each(function() {
      var sectionOffset = $(this.hash).offset().top - 20;
      if ( sectionOffset <= scrollbarLocation ) {
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
      }
    }) 
  })
})
        var idE = "<?php echo $_GET['idEvent'];?>";
        var sun = idE.split("\n");
        var arrayE = null;
        var lsit = 0;
        console.log(idE);
        setEventNew();
        function setEventNew(){
            $.ajax({  
                type: "GET",  
                url: "src/indexPHP.php", 
                data: { idEvent: idE},
                success: function(response) {                        
                    arrayE = response.split("๏");
                        console.log(arrayE);
                        setElement(arrayE);
                        setDetailEvent(arrayE);
                        checkSit(arrayE);
                        setTicketV(arrayE);
                        setMap(arrayE);
    
                    }
            });
        }
        
        function setElement(array){
            document.getElementById("tNameEvent").innerHTML =array[2];
            if(array[9] == "free"){
                document.getElementById("EbtnT").innerHTML = "Get Tickets";
                document.getElementById("ByT").innerHTML = " Get Tickets";
                
                document.getElementById("priceE").innerHTML ="free";
                // $("ByT").text('Get Tickets');/
            }else{
                document.getElementById("priceE").innerHTML =array[9];
            }
            // var d = array[4].split('-');
            document.getElementById("dTEvent").innerHTML ="&nbsp;"+array[4]+" | "+array[5];
            document.getElementById("locaEvent").innerHTML =array[3];
            document.getElementById("categoryE").innerHTML =array[8];
            document.getElementById("typeE").innerHTML =array[9];
       
            document.getElementById("preConE").innerHTML =array[13];
            document.getElementById("postConE").innerHTML =array[14];
            document.getElementById("organE").innerHTML =array[15];
            document.getElementById("contactE").innerHTML =array[16];
            document.getElementById("eMailE").innerHTML =array[17];
            document.getElementById("phoneE").innerHTML =array[18];
            document.getElementById("EndTimeS").innerHTML = " - "+array[6];
 
        }

        function setDetailEvent(array){
           
            if(array[11].length >= 750){
            document.getElementById("deE").innerHTML = array[11].substr(0,584);
            document.getElementById("readMoreE").innerHTML = array[11].substr(584,array[11].length) ;
            }else{
                var half = array[11].length / 2;
                document.getElementById("deE").innerHTML = array[11].substr(0,half);
                document.getElementById("readMoreE").innerHTML = array[11].substr(half,array[11].length) ;
            }
            console.log(array[11].substr(0,550));

        }
        var numTicket = 1;
        var price = 0.00;
        
        function setTicketV(arrayT){

            if(arrayT['9'] == "free"){
                document.getElementById("bTs").innerHTML = " Get Tickets";
                document.getElementById("Ticbtn").innerHTML = " Get Tickets";
            }else{
                price = arrayT['10'];
                $('#priceTicket').text(array['10']+'.00');
                $('#totalPrice').text(price+'.00');
                
            }
            
            
        }

        

        function ticketE(i){
            var num = arrayE[7]-lsit;
            // alert(num);
            if(numTicket + i >= 1 && numTicket + i <= num){
                numTicket += i;
                $('#numTicket').text(numTicket);
                
                $('#totalPrice').text(numTicket*price+'.00');
            }

        }

        function sendM(){
            var personal = ""
            $.post("src/indexPHP.php",{editAccount:true,username:username},
            function(data){
                console.log(data);
                var personal = data.split('๏');
                
                sendEmail(username,personal[2],personal[3],"The Event Ticket","You are buy ticket from Event: "+arrayE[2]+" hope you enjoys, Thankyou.");
            });
        }
        
        function buy(){
            console.log(arrayE['0']);
            var idEv = arrayE['0'];
            console.log(idEv);
            $.post("src/indexPHP.php",{attendant:true,idEvent:idE,username:username,amount:numTicket},
            function(data){
                console.log(data);
                sendM();
            });

            if(price == 0){
                if (typeAccount != "guest") /*Gu edit*/
                {
                    if (status == "activate") {
                        successTell(" Get Tickets.");     
                    }else{
                        alert("Please activate your email!");
                    }

                }else{
                    alert("Please Login!");
                }
            }else{
                if (typeAccount != "guest") {
                    if (status == "activate") {
                        document.getElementById('hPrice').value = price*numTicket;
                        document.getElementById('hNumTicket').value =numTicket;
                        document.getElementById('hIdEvent').value = idEv ;
                        document.getElementById('Ticbtn').type = "submit" ;
                        document.getElementById('Ticbtn').toggle().click() ;     
                    }else{
                        alert("Please activate your email!");
                    }
                }else{
                    alert("Please Login!")
                }
            }
                setEventNew();
                
            

        }

        function successTell(message){
            document.getElementById('susUser').innerHTML = message;
            document.getElementById('showSuc').style.display='block'; 
        }

        function resetValue(){
            document.getElementById('buyTicket').style.display='none';
            document.getElementById('buyTicketForm').reset();
            numTicket = 1;
            $('#numTicket').text(numTicket);
            $('#totalPrice').text(price+'.00');
        }

        function webBoard(){
            // alert("webboard.php?idEvent="+idE);
            window.location = "webboard.php?idEvent="+idE;
        }
        
        
        var lats = 13.75398;
        var lngs = 100.50144;
        function initMap() {
            var location = {lat: lats, lng: lngs};
            var map = new google.maps.Map(document.getElementById('map1'), {
            zoom: 17,
            center: location,
        });
        }
        function setMap(arrayE) {
            var location = {lat: parseFloat(arrayE[19]), lng: parseFloat(arrayE[20])};
            var map = new google.maps.Map(document.getElementById('map1'), {
            zoom: 17,
            center: location,
            });
            var marker = new google.maps.Marker({position: location,map: map});
        }
     
        function checkSit(array){
        
          var sits = array[7];
            $.post("src/indexPHP.php",{checkSit:true,idEvent:array[0],sits:array[7]},
            function(data){
                console.log(data);
                var sun = data.split("\n");
                console.log(sun);
                // siting(response);
                lsit = sun[1];
                if(sun[1] == "-1"){
                    document.getElementById('aval').innerHTML = "Unavaliable";
                    document.getElementById('aval').className = "unava";
                    document.getElementById('EbtnT').disabled = true;
                    document.getElementById('mUserE').onclick = "";
                }
            });
        }

</script>
</body>
</html>


