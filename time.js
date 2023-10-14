var d = new Date();
	var time = d.getHours();
	if (time <12)
	{
		document.write("Good Morning..");
		}
		else if (time>=12&&time<18)
		{
document.write("Good Afternoon..");
}
else {
	document.write("Good Evening..");
	}
	
var d = new Date ();
theDay =d.getDay ();
switch (theDay)
{
case 0:
document.write("It's Sunday");
break;
case 1:
document.write("It's Monday");
break;
case 2:
document.write("It's Tuesday");
break;
case 3:
document.write("It's Wednesday");
break;
case 4:
document.write("It's Thursday");
break;
case 5:
document.write("It's Friday");
break;
case 6:
document.write("It's Saturday");
break;
}


		
