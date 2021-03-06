<!--css--> 
<style type="text/css"> 
.form-style{ 
max-width: 500px; 
padding: 10px 20px; 
background: #f4f7f8; 
margin: 10px auto; 
padding: 20px; 
background: #f4f7f8; 
border-radius: 8px; 
font-family: Georgia, "Times New Roman", Times, serif; 
} 
.form-style fieldset{ 
border: none; 
} 
.form-style legend { 
font-size: 1.4em; 
margin-bottom: 10px; 
} 
.form-style label { 
display: block; 
margin-bottom: 8px; 
} 
.form-style input[type="text"], 
.form-style input[type="date"], 
.form-style input[type="datetime"], 
.form-style input[type="email"], 
.form-style input[type="number"], 
.form-style input[type="search"], 
.form-style input[type="time"], 
.form-style input[type="url"], 
.form-style select { 
font-family: Georgia, "Times New Roman", Times, serif; 
background: rgba(255,255,255,.1); 
border: none; 
border-radius: 4px; 
font-size: 16px; 
margin: 0; 
outline: 0; 
padding: 7px; 
width: 100%; 
box-sizing: border-box; 
-webkit-box-sizing: border-box; 
-moz-box-sizing: border-box; 
background-color: #e8eeef; 
color:#8a97a0; 
-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset; 
box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset; 
margin-bottom: 30px; 
} 
.form-style input[type="text"]:focus, 
.form-style input[type="date"]:focus, 
.form-style input[type="datetime"]:focus, 
.form-style input[type="email"]:focus, 
.form-style input[type="number"]:focus, 
.form-style input[type="search"]:focus, 
.form-style input[type="time"]:focus, 
.form-style input[type="url"]:focus, 
.form-style select:focus{ 
background: #d2d9dd; 
} 
.form-style select{ 
-webkit-appearance: menulist-button; 
height:35px; 
} 
.form-style .number { 
background: #1abc9c; 
color: #fff; 
height: 30px; 
width: 30px; 
display: inline-block; 
font-size: 0.8em; 
margin-right: 4px; 
line-height: 30px; 
text-align: center; 
text-shadow: 0 1px 0 rgba(255,255,255,0.2); 
border-radius: 15px 15px 15px 0px; 
} 
.form-style input[type="submit"], 
.form-style input[type="button"] 
{ 
position: relative; 
display: block; 
padding: 19px 39px 18px 39px; 
color: #FFF; 
margin: 0 auto; 
background: #1abc9c; 
font-size: 18px; 
text-align: center; 
font-style: normal; 
width: 100%; 
border: 1px solid #16a085; 
border-width: 1px 1px 3px; 
margin-bottom: 10px; 
} 
.form-style input[type="submit"]:hover, 
.form-style input[type="button"]:hover 
{ 
background: #109177; 
} 
</style> 
<!--css--> 
<!--htmlcode--> 
<div class="form-style"> 
<form id="form"> 
<fieldset> 
<legend><span class="number">1</span> Candidate Info</legend> 
<input type="text" name="field1" placeholder="Your Name *"> 
<input type="text" name="field2" placeholder="Your Roll No. *"> 
<label for="job">Select Course:</label> 
<select id="job" name="field4"> 
<optgroup label="Courses"> 
<option value="BCA">BCA</option> 
<option value="BBA">BBA</option> 
<option value="MCA">MCA</option> 
<option value="MBA">MBA</option> 
</optgroup> 
</select> 
</fieldset> 
<fieldset> 
<input type="submit" value="Apply" /> 
</form> 