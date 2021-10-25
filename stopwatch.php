<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Stop watch</title>
	<script type="text/javascript">
		s=0;
		m=0;
		h=0;
		function timer(){
			timer=setInterval(startit,1000);
		}
		function startit(){
          s++;
          if(s==60){
          	m=1;
             document.getElementById('stopwatch').value=m;
          }
          m++;
         if(m==60){
          	h=1;
            document.getElementById('stopwatch').value=h:m:s;
          }
          h++;
        
		}
	</script>
</head>
<body>
    <input type="text" name="stopwatch" id="stopwatch">
    <input type="button" name="startit" value="startit" onclick="startit()">
</body>
</html>