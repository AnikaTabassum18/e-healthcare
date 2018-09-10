
<style>
<?php

include '../style1.css';

?>
</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script>

var name1 = prompt('Are you experience any of these symptoms?\na)Fever\nb)Chronic cough\nc)Headache');
//-------------If chose b-----------------
if(name1=='b'){
var name2 = prompt('Are you experience any of these symptoms?\n-Shortness of breath\n-Chest tightness\n-Trouble sleeping caused by shortness of breath, coughing or wheezing\n-A whistling or wheezing sound when exhaling\n-Coughing or wheezing attacks that are worsened by a respiratory virus, such as a cold or the flu\n(a)Yes\n(b)No ');
if(name2=='a'){
    alert('You have Asthma!!!!\nContact with our  specialist...');
		}
		else if(name2=='b'){
		var name5= prompt('Are you experience any of these symptoms?\n-Constant Coughing & Throat Clearing.\n-Phlegm.\n-Upset Stomach, Stomach Ache or Pain.\n-Itchy Throat, Sore\n-Throat or Tickling in the Throat.\n-Breathing Problems & Difficulties or Shortness of Breath.\n-Swollen Glands.\n-Blood in Mucus.\nChest Pain.\n(a)Yes\n(b)No');
		if(name5=='a'){
		alert('You have Post nasal drip......');
			}
				else if(name5=='b'){
	alert('You are ok...');
 			}
		}
		
	}

//-------------If chose c-----------------
if(name1=='c') 
{
var name3 = prompt('Are you experience any of these symptons?\n-Increased thirst\n-increased hunger\n-Dry mouth\n-Frequent urination or urine infection\n-unexplain weight loss\n-fatigue(weak/tired feeling)\n(a)Yes\n(b)No');
if(name3=='a'){
    alert('You have Diabetes!!!!\nContact with our Diabetes specialist...');
	}
	else if(name3=='b')
	{var name4 = prompt('Are you experience any of these symptoms?\n-Vision problems\n-Chest pain\n-Blood urine\n-Difficulty breathing\n-Irregular heartbeat\n(a)Yes\n(b)No');
if(name4=='a'){
    alert('you have Blood Pressure...');
	}
	else if(name4=='b'){
	alert('You are ok...');
 		}
	}
	
}

///------- finish c----------------

</script>
doctors name;
</body>
</html>
