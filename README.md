<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Project Webtext(The Event)</h1>
	<p>by Kittichai_garden</p>
	====================================================
	<h3>โครงสร้าง Directory ของ Project</h3>
	--------------------------------------------------
	<p>Directory ของ Project 9ที่ โดยจะแบ่งออกมาเป็น Certificates โดย Certificates จะเป็นที่ๆเก็บการทำงานของใบ Certificates เป็น pdf เพื่อเอาไว้ส่งตอนที่ผู้ใช้แต่ละคนสำเร็จ event แล้วโดยจะเรียกและส่งผ่านอีเมลล์ </p>
	<p>Folder Css เป็นที่เก็บของ jqueryต่างๆ และรวมไฟล์ css ที่เอาไว้ตกแต่งความสวยงามของ WebProject ไว้อยู่ที่เดียวกัน</p>
	<p>Folder Database เป็นที่เก็บไฟล์Databasesที่เอาไว้ลงใน localhost ใน phpMyadmin หากทำการติดตั้งจะต้องมาเอา File นี้ไปลงก่อนที่จะทำการใช้งาน WebProject</p>
	<p>Folder email จะเก็บCodeการทำงานของEmailที่ใช้รูปแบบของ SMTP</p>
	<p>Folder js ที่เก็บ File javaScript ไว้ทำงานเวลาส่งพวก Parameter ไปหา Server php </p>
	<p>Folder src เก็บ Folder Controller Database และ Models ที่จะเอาไว้ควบคุมการทำงานระหว่างผุ้ใช้และDatabases เอาไว้ส่งและรับข้อมุล</p>
	<p>Folder tcpdf เอาไว้สร้าง Pdf</p>
	<p>Folder upload-files มี code ที่ช่วยให้ upload fileรูป และ file รูปจะถูกเก็บอยุ่ใน Folder ข้างใน ส่วน Folder upload จะเป็นรูป event ที่ผู้ใช้ uploadเข้าไป และ Folder profile จะเป็นรูป Profile ของผู้ใช้ที่ upload เข้าไป  </p>
	<p>Folder vendor จะเป็นส่วนของการautoload</p>








	<h3>ขั้นตอนการติดตั้งและเริ่มการทำงาน</h3>
	--------------------------------------------------
	<p>ขั้นตอนการติดตั้ง</p>
	<p>1.หลังจากที่ Download file มาจาก github แล้ว ให้ทำการแยก file ไปวางไว้ที่ :C-->xampp-->htdocs โดยให้แยกไฟล์ออกมาเป็น Folder ชื่อ ProjectWebtech_1 เท่านั้น</p>
	<p>2.หลังจากที่ทำการเอา File ProjectWebtech_1 ไปวางไว้ใน Folder xampp แล้ว ให้นำ File ที่อยู่ใน Folder ProjectWebtech_1-->database-->kittichai_garden.sql ไปใส่ไว้ใน localhost/phpMyadmin โดยต้องทำการเปิดตัว xampp แล้วให้เลือก start mysql ถึงจะเข้าไปในหน้า localhost/phpMyadmin ได้</p>
	<p>3.ให้สร้าง Database ที่ชื่อ kittichai_garden แล้วเลือก Collation เป็น UTF-8-heneral-ci</p>
	<p>4.หลังจากนั้นให้กด import file kittichai_garden.sql มาลงใน kittichai_garden ใน localhost/phpMyadmin</p>
	<br>
	<p>เริ่มการทำงาน</p>
	<p>1.เริ่มการทำงานของคุณโดยทำการเปิด Web browser ขึ้นมา</p>
	<p>2.หลังจากเปิด Web browser ขึ้นมาแล้วให้ลิ้งในช่อง url เป็น localhost/ProjectWebtech_1 ||| หรือใส่แค่ localhost แล้วคลิกเลือก Folder ที่คุณต้องการ</p>
	<p>3.หลังจากที่เลือกไปแล้วหน้าเว็บ The Event จะแเสดงขึ้นมาอยู่บน Web browser ของคุณแล้วเริ่มการใช้งานได้อย่างปกติ</p>
	<br>
	<h3>การใช้งาน The Event</h3>
	--------------------------------------------------
	<p>1.หลังจากที่คุณเข้ามาหน้าแรกของ The Event ให้คุณทำการ SignUp มา 2 User โดยให้ทั้ง 2 User มีการทำงานที่แตกต่างกันโดยให้ตั้ง User ตามนี้ 1.Username: Users Password: user 2. Username: admin Password: password</p>
	<p>2.ในการทำงานจะมี3รูปแบบ รูปแบบ1.การทำงานในหน้า Admin 2.การทำงานในหน้า User 3.การทำงานในหน้า Guest (ในรูปแบบของ Guest คือเป็นผู้ใช้ปกติทั่วไปที่ไม่ต้อง SignUp และ SignIn เข้ามา)</p>
	<p>3.ในรูปแบบแรกเป็นของ User โดย User จะสามารถทำงานได้ดังนี้ 1.สามารถสร้าง eventและดูeventทั่วไปได้ และสามารถเข้าร่วม event อื่นได้ด้วย สามารถสร้างหรือตอบ Webboard ได้</p>
	<p>4.ในรูปแบบสองเป็รของ Admin โดย Admin จะสามารถทำงานได้โดยสามารถควบคุมทุกอย่างได้หมด โดยจะสามารถลบตารางหรือสร้างตารางที่ไม่ถูกต้องตามกฎได้ สามารถจัดการกับ Username ที่อยุ่ในระบบได้</p>
	<p>5.ในรูปแบบสามเป็นของ Guest โดย Guest จะมาสามารถดูและค้นหา Event ได้เพียงอย่างเดียวเท่านั้นไม่สามารถสร้างหรือลบ event และ webboard ได้</p>
</body>
</html>
