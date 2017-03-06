<?php

$age = 28;
$email = "viktor_88@ukr";
$tel = "+308 (97) 125-88-82";
$prof = "Designer";
$name = "Victor";
$surname = " Zagraychuk";

?>


<!DOCTYPE html>
<html>
<head>
  <title>
  Resume - Victor Zagraychuk
  </title>
  <meta charset='utf-8'/>
  <meta name='keywords' content='Resume, Designer, 3D designer'/>
  <meta name='description' content='Resume Victor Zagraychuk'/>
  <meta name='author' content='goodok'/>
  <link href='Resume.css' rel='stylesheet' type='text/css'>
</head>

<body>
<div class='container'>

  <div class='my_photo'><img class='my_photo' src='img/My photo.jpg' title='This is My photo'/></div>
  
    <h1><?= $name . $surname ?></h1>
	
	<h3><?= $prof ?></h3>
	
	<hr>
	
	<h4>Contacts</h4>
	
	<div class='contact'>
	
	<table>
	  <tr>
	    <td><span class='gray'>Date of Birth: &nbsp</span></td>
	    <td>21.05.1988 (<?= "{$age} years old" ?>)</td>
	  </tr>
	  
	  <tr>
	    <td><span class='gray'>City:</span></td>
	    <td>Kiev</td>
	  </tr>
	  
	  <tr>
	    <td><span class='gray'>Telephone:</span></td>
	    <td><?= $tel ?></td>
	  </tr>
	  
	  <tr>
	    <td><span class='gray'>E-mail:</span></td>
	    <td>viktor_88@ukr.net</td>
	  </tr>
	</table>
	
	</div>
	
  <br>
	
  <hr>
  
  <h4>Education</h4>
  
  <div class='education'>
	
	<table>
	  <tr>
	    <td><span class='gray'>University: &nbsp</span></td>
		<td>National Technical University "Kyiv Polytechnic Institute"</td>
	  </tr>
	  
	  <tr>
	    <td><span class='gray'>Departament:</span></td>
	    <td>Publishing and printing business</td>
	  </tr>
	  
	  <tr>
	    <td><span class='gray'>Diploma:</span></td>
	    <td>Specialist</td>
	  </tr>
	  </table>
  </div>
  
  <br>
  
  <hr>
  
  <h4>Social NetWorks</h4>
  
  <div class='networks'>
    <a href='https://vk.com/id9341975' title='My VK' target='_blank'> <img src='img/VK.jpg' alt='jpg' height='30'/></a>
    <a href='https://www.drive2.ru/r/chevrolet/958481' title='My Drive3' target='_blank'> <img src='img/Drive2.jpg' alt='jpg' height='30'/></a>
    <a href='https://www.facebook.com/478929125485733' title='My FaceBook' target='_blank'> <img src='img/FaceBook.jpg' alt='jpg' height='30'/></a>
  </div>
  
  <br>
  
  <hr>
  
  <h4>Experience</h4>
  
  <div class='skill'>

    <table border='0' cellspacing='5'>
	  <tr>
	    <td> <a href='http://lexp.com.ua' target='_blank'>Lombard Expert</a> </td>
	    <td>
		  <tr>
		    <td><span class='gray'>Position:</span></td>
			<td>Head of marketing department</td>
		  <tr>
		</td>
	  </tr>
	  
	  <tr>
	    <td> <a href='https://www.work.ua/jobs/by-company/644861/' target='_blank'>advertising company "GT-ad"</a> </td>
	    <td>
		  <tr>
		    <td><span class='gray'>Position:</span></td>
			<td>3D designer</td>
		  <tr>
		</td>
	  </tr>
	  
	  <tr>
	    <td> <a href='http://kuz.ua' target='_blank'>Kyiv Jewelry Factory</a> </td>
	    <td>
		  <tr>
		    <td><span class='gray'>Position:</span></td>
			<td>Designer</td>
		  <tr>
		</td>
	  </tr>
	  
	  <tr>
	    <td> <a href='https://wolf.ua/?yagla=9680697&gclid=Cj0KEQiA5bvEBRCM6vypnc7QgMkBEiQAUZftQLoJxsqn_8b1bMZTxZyniHky0QhsyjRIIJQhwdyUpJIaAmFh8P8HAQ' target='_blank'>Typography "Wolf"</a> </td>
	    <td>
		  <tr>
		    <td><span class='gray'>Position:</span></td>
			<td>DTP Designer</td>
		  <tr>
		</td>
	  </tr>
	  
	  <tr>
	    <td>  <a href='http://www.pc-zorya.com.ua/' target='_blank'>Printing plant "Zorya"</a> </td>
	    <td>
		  <tr>
		    <td><span class='gray'>Position:</span></td>
			<td>DTP Specialist</td>
		  <tr>
		</td>
	  </tr>
	</table>
  </div>
  
  <br>
  
  <hr>
  
  <h4>Professional skills</h4>

  <div class='Programs_skill'>  
	
	<ul> 
	  <li>HTML, CSS, Git</li>
      <li> Adobe
	    <ul>
          <li> Photoshop </li> 
          <li> Illustrator </li> 
          <li> InDezign </li> 
          <li> Premiere Pro </li> 
          <li> Audition </li> 
          <li> Adobe Acrobat Pro (PitStop, Enfocus Prinect)</li> 
		</ul>  
	  </li> 
      <li> 3DsMax (V-ray, Corona)</li> 
      <li> Corel Draw </li> 
    </ul>
  </div>
  
  <br>

</div>	
</body>

</html>
