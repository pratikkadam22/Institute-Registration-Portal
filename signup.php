<html>
<head>
<title>Registration Form</title>
<style type="text/css">
  .form-style-10{
    width:450px;
    padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
    padding: 30px;
    background: #F8F8F8;
    border-radius: 6px;
    margin-bottom: 15px;
}
.form-style-10 h1{
    background: #2A88AD;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
    display: block;
    margin-top: 2px;
    font: 13px Arial, Helvetica, sans-serif;
}

.form-style-10 input[type="text"],
.form-style-10 input[type="text"],
.form-style-10 input[type="text"],
.form-style-10 input[type="text"],
.form-style-10 input[type="text"],
.form-style-10 input[type="text"],
.form-style-10 input[type="text"],
.form-style-10 input[type="text"],
.form-style-10 input[type="password"]{
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 2px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
.form-style-10 .section span {
    background: #2A88AD;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}
 
.form-style-10 input[type="submit"]{
    background: #2A88AD;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 15px;
}

.form-style-10 input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
  </style>
  <script src="jquery-1.12.3.js"></script>
  <script src="//code.jquery.com/jquery-1.12.2.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  <script>
  $(function() {
    
	$("#sign").validate({
    
        
        rules:
		{
			roll:
			{
				required:true,
				number:true,
			    digits:true
			},
			name:
			{
				required:true,
				minlength:4,
				maxlength:13
			},
			marks:
			{
				required:true,
				number:true,
			    digits:true
			},
			batch:
			{
				required:true,
				number:true,
			    digits:true
			},
			dbms:
			{
				required:true,
				number:true,
			    digits:true
			},
			wp:
			{
				required:true,
				number:true,
			    digits:true
			},
			city:
			{
				required:true,
				minlength:4,
				maxlength:13
			},
			username:
			{
				required:true,
				minlength:4,
				maxlength:13
			},
			password:
			{
				required:true,
				minlength:4,
				maxlength:13
			}
		},
		messages:
		{
			roll:
			{
				required:"Please Enter Roll no.",
				number:"Roll no must have digits",
				digits:"Roll no is always a positive integer"
			},
			name:
			{
				required:"Please enter Name",
				minlength:"Name should have atleast 4 characters",
				maxlength:"Name should have atmost 13 characters"
			},
			marks:
			{
				required:"Please Enter Marks",
				number:"Marks must have digits",
				digits:"Marks is always a positive integer"
			},
			batch:
			{
				required:"Please Enter Batch no.",
				number:"Batch no. must have digits",
				digits:"Batch no. is always a positive integer"
			},
			dbms:
			{
				required:"Please Enter Dbms Marks",
				number:"Dbms marks must have digits",
				digits:"Dbms marks is always a positive integer"
			},
			wp:
			{
				required:"Please Enter Wp marks",
				number:"Wp marks must have digits",
				digits:"Wp marks is always a positive integer"
			},
			city:
			{
				required:"Please enter City Name",
				minlength:"City Name should have atleast 4 characters",
				maxlength:"City Name should have atmost 13 characters"
			},
			username:
			{
				required:"Please enter username",
				minlength:"Username should have atleast 4 characters",
				maxlength:"Username should have atmost 13 characters"
			},
			password:
			{
				required:"Please enter Password",
				minlength:"Password should have atleast 4 characters",
				maxlength:"Password should have atmost 13 characters"
			}
		}
    });

  });
  </script>
</head>
<body bgcolor="#99FFFF" background="city.jpg">
<div class="form-style-10">
<h1>REGISTRATION FORM<span>Sign up and Join the best Institute!</span></h1>
<form id="sign" method="post" action="show.php">

<div class="section"><span>1</span>ROLL NO</div>
<div class="inner-wrap">
<input type="text" name="roll" id="roll"></div>

<div class="section"><span>2</span>NAME</div>
<div class="inner-wrap">
<input type="text" name="name" id="name"></div>

<div class="section"><span>3</span>MARKS</div>
<div class="inner-wrap">
<input type="text" name="marks" id="marks"></div>

<div class="section"><span>4</span>BATCH</div>
<div class="inner-wrap">
<input type="text" name="batch" id="batch"></div>

<div class="section"><span>5</span>DBMS</div>
<div class="inner-wrap">
<input type="text" name="dbms" id="dbms"></div>

<div class="section"><span>6</span>WP</div>
<div class="inner-wrap">
<input type="text" name="wp" id="wp"></div>

<div class="section"><span>7</span>CITY</div>
<div class="inner-wrap">
<input type="text" name="city" id="city"></div>

<div class="section"><span>8</span>USERNAME</div>
<div class="inner-wrap">
<input type="text" name="username" id="username"></div>

<div class="section"><span>9</span>PASSWORD</div>
<div class="inner-wrap">
<input type="password" name="password" id="password"></div>
<div class="button-section">
<input type="submit" name="submit" value="Submit"></div>
</form>
</div>
</body>
</html>