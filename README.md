<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<h1>Project Webtech (The Event)</h1>
	<p>by Kittichai Garden</p>
	====================================================
	<h3>โครงสร้าง Directory ของ Project</h3>
	--------------------------------------------------
	<p>Directory ของ Project แบ่งออกเป็น 9 โฟล์เดอร์โดยจะแบ่งออกมาเป็นและใน โฟร์เดอร์หลัก เก็บไฟล์ php ที่เกียวข้องกับโปรเจค</p>
	<p>1. Folder Certificates โดย Certificates จะเป็นที่ๆเก็บใบ Certificates เป็น pdf โดยแยกโฟร์เดอร์ตาม ID Event ต่างๆ</p>
	<p>2. Folder css เป็นที่เก็บของ jquery ต่างๆ และรวมไฟล์ css ที่เอาไว้ตกแต่งความสวยงามของ Project ไว้อยู่ที่เดียวกัน</p>
	<p>3. Folder Database เป็นที่เก็บไฟล์ Databases เป็น .sql ที่เอาไว้ลงใน phpMyadmin หากจะใช้งานเว็บไซต์ต้องมาเอา File นี้ไปลงก่อนที่จะทำการใช้งาน </p>
	<p>4. Folder email จะเก็บCodeการทำงานของ E-mail </p>
	<p>5. Folder js ที่เก็บ File javaScript </p>
	<p>6. Folder src เก็บ Folder Controller Database และ Models</p>
	<p>7. Folder tcpdf เกี่ยวกับการใช้งาน Pdf ใน php</p>
	<p>8. Folder upload-files เป็นที่เก็บรูป Profile และ Event ต่างๆ</p>
	<p>9. Folder vendor จะเป็นส่วนของ Composer</p>
	<h3>ขั้นตอนการติดตั้งและเริ่มการทำงาน</h3>
	--------------------------------------------------
	<h4>ขั้นตอนการติดตั้ง</h4>
	<p>1. หลังจากที่ Download file มาจาก github แล้ว ให้ทำการแยก file ไปวางไว้ที่ /xampp/htdocs โดยให้แยกไฟล์ออกมาเป็น Folder ชื่อ ProjectWebtech_1 เท่านั้น</p>
	<p>2. ทำการเปิดโปรแกรม xampp โดย Start Apache และ MySQL
	<p>3. ให้สร้าง Database ที่ชื่อ kittichai_garden แล้วเลือก Collation เป็น UTF-8-general-ci</p>
	<p>5. ทำการ Import Database ชื่อ kittichai_garden.sql ใน ProjectWebtect_1/database ในตารางที่เพิ่งสร้าง </p>
	<p>6. เมื่อทำการติดตั้งเสร้จสิ้นให้ทำการเข้าไปในตารางที่ชื่อ kittichai_garden แล้วทำการกดไปที่ Privileges แล้วกด Add user account เพื่อสร้าง user ขึ้นมา 3 ผู้ใช้โดยแต่ละคนจะมี ID Password และ การอนุญาติ ดังนี้</p>
	<p>6.1 Admin สามารถทำได้ทุกอย่างในระบบ ให้ทำการสร้าง Admin โดยมี ID และ Password คือ <b>ID: admin และ Password: password</b>
	เลือก Hostname เป็น localhost และทำการ Grant ให้มีสามารถทำได้ทุกอย่างในระบบ</p>
	<p>6.2 User เป็นผู้ใช้งานในระบบ ให้ทำการสร้าง User โดยให้มี ID และ Password คือ <b>ID: user1 และ Password: user1</b> เลือก Hostname เป็น localhost และทำการ Grant ให้มีความสามารถคือ SELECT, INSERT, UPDATE และ DELETE คือสามารถดูข้อมูลอีเว้นท์ต่างๆ ทำการสร้างอีเว้นท์ เข้าร่วมอีเว้นท์ และตั้งกระทู้ต่างๆได้ รวมถึงสามารถดูว่าตนเองสร้างกิจกรรมอะไร และมีใครเข้ามาร่วมกิจกรรมที่สร้างขึ้น</p>
	<p>6.3 Guest เป็นผู้ใช้งานที่ไม่อยู่ในระบบ หรือในฐานข้อมููล ให้ทำการสร้าง Guest โดยให้มี ID และ Password คือ <b>ID: guest และ Password: ไม่ต้องใส่</b> เลือก Hostname เป็น localhost และทำการ Grant ให้มีความสามารถคือ SELECT และ INSERT คือสามารถดูข้อมูลอีเว้นท์ต่างๆ ได้และสมัครสมาชิกเพื่อทำการเข้าสู่ระบบได้</p>
	<h4>เริ่มการทำงาน</h4>
	<p>1. ทำการเปิดโปรแกรม XAMPP ทำการ start Apache และะ MySQL</p>
	<p>2. ทำการเปิดเว็บไปที่ localhost/ProjectWebtech_1/</p>
	<p>3. สามารถใช้งานหน้าเว็บได้เลย</p>
	<h3>ความสามารถของระบบ</h3>
	--------------------------------------------------
	<p>1. สร้างอีเว้นท์</p>
	<p>2. สร้างกระทู้ของเว็บบอร์ด</p>
	<p>3. ซื้อตั๋วเข้าร่วมงาน</p>
	<p>4. แสดงอีเว้นท์ที่ใกล้จะถึง</p>
	<p>5. แสดงอีเว้นท์ที่มียอดดูมากที่สุด</p>
	<p>6. ค้นหาอีเว้นท์</p>
	<p>7. ส่ง E-mail และสร้าง PDF</p>
	====================================================


</body>
</html>
