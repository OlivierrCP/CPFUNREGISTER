<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | CPPS</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <meta charset="UTF-8">
    <meta name="description" content="The best theme for CPPS, ICE. Built by AmusingThrone">
    <meta name="keywords" content="cpps,ice,club penguin,free,theme, cpb">
    <meta name="author" content="AmusingThrone">
    <link rel="stylesheet" href="https://bootswatch.com/paper/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="./sweetalert-master/dist/sweetalert.css">
    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

function changeImage(imgName)
{
    image = document.getElementById('imgDisp');
    image.src = imgName;
    var colorId = imgName.replace("./colors/", "");
    colorId = colorId.replace(".png", "");
    document.getElementById("penguinColorInput").value = colorId;
    for (i = 1; i < 15; i++) {
        document.getElementById("c" + i).style.opacity = 0.5;
    }
    document.getElementById("c" + colorId).style.opacity = 1;
}
</script>

</center>
  
</section>
</html>
</center>
    <footer>
        <ul>
            <li><a href="#" target="_blank"><i class="fa fa-rss-square"></i></a></li>
            <li><a href="https://twitter.com/amusingthrone" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
            <li><a href="https://github.com/amusingthrone" target="_blank"><i class="fa fa-github-square"></i></a></li>
        </ul>
        <p>Theme by <a href="http://amusingthrone.com" target="_blank">AmusingThrone</a>.</p>
        <p>&copy; 2017 CPPS.</p>
    </footer>  
	</body>
</html>