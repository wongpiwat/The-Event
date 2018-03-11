<?php //ใส่ทุกอัน
    include 'header.php';
    // echo date("h:i:s");
    // echo "ID Event: ".$_GET["idEvent"];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/event.css">
	<link rel="stylesheet" href="css/jq-carousel-plugin.css">
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script> -->
    <script src="js/jq-csrousel-plugin.js"></script><!--JS image slice -->
    <style rel="stylesheet" type="text/css">
        html,body{
            width: 100%;
            height: 100%;
        }
        #box{
        	margin-top: 2.5%;
        	margin-left: 15.5%;
            position: relative;  
            width: 69%;
            height: 64%;
            overflow: hidden; 
            display: inline-flex;
            float:left;


            /*display: flex;
            justify-content: center;  */
            
    		      
        }
        .str{
            border: 1px solid #999;
            font-size: 25px;
            text-align: center;
            padding: 2% 8% 2%;
            

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

	<!-- <div class="head">
		<div class="inbox">Name</div>
		<div class="inbox">All event>category>Name</div>

	</div> -->
	
	<!--image slice -->

    <script>
        
        $(function(){
            $("#box").jqCarouselImg({
                imgLen:5,
                imgUrl:['https://p-u.popcdn.net/hero_images/desktop_images/000/000/122/medium/e1228a197abf1b71d33afdf758f606380a1a25b8.jpg?1520001031','https://picsum.photos/1800/888/?random','https://picsum.photos/1900/850/?random','https://picsum.photos/1800/960/?random','https://picsum.photos/1800/850/?random',],
                speed:6000,
                direction:false,
            })
        });
    </script>

   
    <div id="box">

    </div>
    <div class="content"></div>
    <!-- </div> -->
    
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script><!--End image slice -->

	<center><div class="testbox">
 
    <div  style="color:#1e7998;">
        <div class="eventTitle" style="margin-left:3%;"><h3><b id="tNameEvent">Tao Kae Noi Presents BNK48</b></h3></div><br>
        <button name="idEvent" type="submit" class="btn btn-defualt buttonTicketE" style="width:22%;margin-right:3%;margin-top:-1.5%"  id="EbtnT" >Buy Tickets</button><br>
        <div style="text-align: left;margin-left:3%;margin-bottom:1%;" >
        <i class="fa fa-clock-o fa-fw"></i><span id="dTEvent">2018-03-08 | 08:27</span><br>
        <i class="fa fa-map-marker fa-fw"></i><span id="locaEvent">kasetsart</span>
        </div>
   
</div>
</div><center>



<div class="wrapper">

    
        
<section class="columns">
    
    <div class="column3">
        <h3  style="color:#1e7998;"><b>Event Detail</b></h3>
        <div>
  <input type="checkbox" class="read-more-state" id="post-1" />

  <p class="read-more-wrap">Tao Kae Noi Presents BNK48 1st Concert “STARTO”
↵
↵พบกับคอนเสิร์ตเต็มรูปแบบครั้งแรกของ BNK48 ในวันเสาร์ที่ 31 มีนาคม พ.ศ. 2561 
↵ณ BITEC BANGNA Hall 106
↵คอนเสิร์ตเริ่มเวลา 18:00น. (ประตูเปิด 16:00น.)
↵
↵บัตรยืน ราคา 2000 บาท (มีการแบ่งพื้นที่ Lady Zone ทั้งสองฝั่ง)
↵และบัตรนั่ง ราคา 1500/1000/800 บาท
↵
↵เริ่มจำหน่ายบัตร วันพฤหัสบดีที่ 1 มีนาคม พ.ศ. 2561 เวลา 13:48น. 
↵ทาง www.eventpop.me
↵<span class="read-more-target">
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
        <object width='870' height='500'>
<param name='movie' value='https://www.youtube.com/v/mNqMY2bNWfk'></param>
<param name='wmode' value='transparent'></param>
<embed src='https://www.youtube.com/v/=m3DYNLg9q74' type='application/x-shockwave-flash' wmode='transparent' width='800' height='400'>
</embed>
</object>
    </div>
  
  
    
</section>  
<section class="columns">
    
    <div class="column" style="color:#1e7998;line-height: 30px;">
        <h3 ><b>Other Information</b></h3>
        
        <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Category: Food</b><br>
        <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Type: Free</b><br>
        <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Price: none</b><br>
        <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Pre-Condition: none</b><br>
        <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Post-Condition: none</b>
        
    </div>
    
    <div class="column" style="line-height: 35px;">
        <h3  style="color:#1e7998;" ><b>Contact</b></h3>
        <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Organizer Name: BNK48</b><br>
        <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Contact Name: Sun</b><br>
        <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•E-Mail: Vasupol.ch@ku.th</b><br>
        <b style="color: #000000;">&nbsp;&nbsp;&nbsp;•Phone: 0812345678</b><br>
        
    </div>
  
  
    
</section>  
    
    

</div>

<footer class="footer nav navbar-inverse">
        <center>
        <br>
        <p style="color:white;"><b>&copy; Designed by Kiticha Garden</b></p>
        <br>
        </center>
</footer>


<script>
        var idE = "<?php echo $_GET['idEvent'];?>";
        var arrayE = null
        console.log(idE);
        $.ajax({  
                    type: "GET",  
                    url: "src/indexPHP.php", 
                    data: { idEvent: idE},
                    success: function(response) {
                        
                        console.log(response);
                        arrayE = response.split("๏");
                        console.log(arrayE);
                        
    
                    }
                });
        
        

</script>


</body>

</html>