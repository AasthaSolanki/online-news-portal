<html>

<head>


    <script src="java.js"></script>
    <style>
        div.topbar {
            width: auto;
            height: 40px;
            margin: auto;
        }
        
        li.topbar {
            float: right;
        }
        
        .whitesmoke {
            background-color: #F5F5F5;
        }
        
        #Newshead {
            background-color: #F5F5F5;
            height: 50px;
            padding-top=20px;
            width: auto;
            text-align: center;
            z-index=-1;
            position: relative;
        }
        
        #NewsHeading {
            color: black;
            font-size: 200%;
            font-weight: bold;
            font-family: Times New Roman;
        }
        
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        
        .left {
            float: left;
        }
        
        .search {
            float: right;
            border: 10px solid #DCDCDC;
        }
        
        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        li a:hover:not(.active) {
            background-color: #F0F8FF;
        }
        
        a:link {
            color: black;
        }
        
        a:visited {
            color: black;
        }
        
        a:hover {
            color: green;
        }
        
        a:active {
            color: blue;
        }
        
        .black {
            background-color: #DCDCDC;
        }
        
        nav.vertical ul {
            list-style-type: circle;
            margin: 0;
            padding-top: 20px;
            width: 25%;
            background-color: black;
            position: relative;
            height: 300%;
            overflow: auto;
            position: absolute;
        }
        
        nav.vertical li a {
            color: #ffffff;
            padding: 8px 16px;
        }
        
        body {
            background-color: #F8F8FF;
            padding: 0px;
            margin: 0px;
        }
        
        div.gallery {
            margin-left: 200px;
            margin-top: 20px;
            border: 1px solid #ccc;
            width: 180px;
            float: left;
            overflow: auto;
        }
        
        div.gallery img {
            width: 100%;
            height: 100px;
        }
        
        div.desc {
            padding: 15px;
            text-align: center;
        }
        
        .hori_line {
            clear: both;
            display: block;
            margin-top: 20px;
            margin-bottom: 5px;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            border-width: 3px;
        }
        
        .trending {
            clear: both;
            margin-top: 60px;
            margin-left: 200px;
            display: inline-block;
        }
        
        .latestnews {
            clear: both;
            margin-left: 200px;
            display: inline-block;
        }
    </style>

</head>


<body>
    <div class="topbar">
        <ul class="whitesmoke">

            <li class="topbar"><a href="#">Support</a></li>
            <li class="topbar"><a href="proj_feedback.html">Feedback</a></li>
            <li class="topbar"><a href="proj_storysubmit.html">Submit a Story</a></li>
            <li class="topbar"><a href="proj_about.html">About</a></li>
            <li class="topbar"><a href="proj_home.html">Home</a></li>
        </ul>
    </div>
    <div id="Newshead"><span id="NewsHeading">24 HOURS</span></div>

    <div>
        <ul class="black">
            <li class="left"><a href="#city">City</a></li>
            <li class="left"><a href="#india">India</a></li>
            <li class="left"><a href="#business">Business</a></li>
            <li class="left"><a href="#political">Political</a></li>
            <li class="left"><a href="#sports">Sports</a></li>
            <li class="left"><a href="#lifestyle">Lifestyle</a></li>
           <li class="search" style="width:400px;">
                
                <script>
  (function() {
    var cx = '008524308836461421381:sihzrskpims';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
            </li>
        </ul>
    </div>

    <nav class="vertical">
        <ul style="width:175px">
            <li><a href="#home">Trending</a></li><br>
            <li><a href="#home">Today's News</a></li><br>
            <li><a href="#home">Last Week</a></li><br>
            <li><a href="#home">Last Month</a></li><br>
            <li><a href="#home">July 2017</a></li><br>
            <li><a href="#home">June 2017</a></li><br>
        </ul>
    </nav>
    <form name="about" onsubmit="validate()" action="proj_about.php" method="POST">
        <div class="about">
            <h1 style="text-align:center;"> ABOUT </h1>
            <ul style="margin-left: 250px;">
                <li>
                    <label for="name">Name:</label>
                </li>
                <li>
                    <input type="text" name="name" size="50" />
                </li>
                <li>
                    <label for="mobile">Mobile Number:</label>
                </li>
                <li>
                    <input type="text" name="mobile" maxlength="10" minlength="10" />
                </li>
                <li>
                    <label for="email">Email:</label>
                </li>
                <li>
                    <input type="text" name="email" size="50" />
                </li>
                <li>
                    <label for="desc">Comment:</label>
                </li>
                <li>
                    <textarea name="desc" id="desc" required rows="10" cols="100"></textarea>
                </li>
                <li>
                    <input type="submit" name="submit" value="submit" />
                </li>
            </ul>
    </form>
    <script>
        function validate() {
            console.log("aman");
            var name1 = document.forms[1].name.value;
            var mobile1=document.forms[1].mobile.value;
            var email1=document.forms[1].email.value;
            var desc1=document.forms[1].desc.value;
            var letters = /^[A-Za-z]+$/; 
                if(!name1.match(letters))  
                {  
                    alert("ENter the alphabets in the name field");
                    name1.value="";  
                } 
                if(!mobile1.match (/^[0-9]+$/))
                {
                  alert("ENter the numeric in the mobile field");
                  mobile1.value="";  
                } 
                if (!email1.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))  
                {  
                  alert("Enter a  valid email address");
                  email1.value="";  
                } 

        }
    </script>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwp";
if(isset($_POST["name"]) && isset($_POST["desc"]) && isset($_POST["mobile"]) && isset($_POST["email"]))
{
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// $sql = "INSERT INTO about VALUES (".$_POST["name"].','.$_POST["mobile"].','.$_POST["email"].','.$_POST["desc"].")";
$sql="insert into about values('".$_POST["name"]."','".$_POST["mobile"]."','".$_POST["email"]."','".$_POST["desc"]."');";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('New record created successfully')</script>";

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
</body>

</html>