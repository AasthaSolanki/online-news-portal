<html>

<head>
    <link rel='stylesheet' href='navigation.css' type='text/css' />
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
            <li><a href="#home">Trending</a></li>
            <br>
            <li><a href="#home">Today's News</a></li>
            <br>
            <li><a href="#home">Last Week</a></li>
            <br>
            <li><a href="#home">Last Month</a></li>
            <br>
            <li><a href="#home">July 2017</a></li>
            <br>
            <li><a href="#home">June 2017</a></li>
            <br>
        </ul>
    </nav>
    <div class="shiftright" style="margin-left:250px;">
        <div>
            <h2><strong><i> Submit a News Story </i></strong> </h2>
        </div>
        <form onsubmit="validate()" action="proj_storysubmit.php" method="POST">
            <label for name="newstopic"> News Heading (max. 10 words): </label>
            <input type="text" name="newstopic" required/>
            <br>
            <br>
            <label for name="source"> Source:
                <input type="text" name="source" />
                <br>
                <br>
                <label for name="cate"> Category (select as many valid, applicable categories): </label>
                <select name="cate" value="Choose a category" required>
                    <option> City </option>
                    <option> India </option>
                    <option> Political </option>
                    <option> Business </option>
                </select>
                <br>
                <br>
                <label for name="sdesc"> Short Description:
                    <textarea name="sdesc" rows="10" cols="100" required> Enter Description here </textarea>
                    <br>
                    <br>
                    <label> Upload File:
                        <input type="file" name="news_file" required>
                        <br>
                        <br>
                        <input type="submit" name="submit" value="Submit" />
                        <input type="reset" name="reset" value="Reset" />
                        <label>
        </form>
        <script>
        function validate() {
            var newstopic1 = document.forms[0].newstopic.value;
            var source1=document.forms[0].source.value;
            var letters = /^[A-Za-z]+$/; 
            var link=/(https?:\/\/[^\s]+)/g;
                
                if(!source1.match(link))  
                {  
                    alert("ENter a valid link");  
                }
                var str=newstopic1.split(" ");
                if(str.length>10)
                {
                    alert("ENter only 10 words");
                } 
                 

        }
    </script>
</div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "iwp";
        if(isset($_POST["newstopic"]) && isset($_POST["source"]) && isset($_POST["cate"]) && isset($_POST["sdesc"]))
        {   
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn) 
            {
                    die("Connection failed: " . mysqli_connect_error());
            }
            $sql="insert into submit_story values('".$_POST["newstopic"]."','".$_POST["source"]."','".$_POST["cate"]."','".$_POST["sdesc"]."');";
            if (mysqli_query($conn, $sql)) 
            {
                    echo "<script>alert('New record created successfully')</script>";
            } 
            else 
            {
                      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

mysqli_close($conn);
}

?>









</body>

</html>