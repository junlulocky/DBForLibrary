<table  align="center">
  <tr>
    <td width="600" background="images/dh_back.gif"><div align="center">Today is: &nbsp;<script language=JavaScript>
   today=new Date();
   function initArray(){
   this.length=initArray.arguments.length
   for(var i=0;i<this.length;i++)
   this[i+1]=initArray.arguments[i]  }
   var d=new initArray(
     "Sunday",
     "Monday",
     "Tuesday",
     "Wednesday",
     "Thursday",
     "Friday",
     "Saturday");
document.write(
     "<font color=#000000 style='font-size:9pt;font-family: ËÎÌו'> ",
     today.getYear()+1900,"/",
     today.getMonth()+1,"/",
     today.getDate(),"",
	  "&nbsp;&nbsp;",
     d[today.getDay()+1],
	"</font>" ); 
</script></div></td>
</table>
