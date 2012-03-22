<!DOCTYPE html>
<html>
<head>

  <title>What Would Molydeux? Molyjam 2012<?= isset($page_title) ? (' > ' . $page_title) : '' ?></title>

  <link href="css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="css/bootstrap-responsive.min.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="css/style.css" media="screen" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="img/favicon.ico" />
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon.png"/>

  <!--This is a link to Google's Web Fonts for Open Sans -->  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>  
  
  <meta name="viewport" content="width=device-width" />
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-6928584-3']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <SCRIPT TYPE="text/javascript" LANGUAGE="JavaScript">
<!--

dateFuture = new Date(2012,2,30,18,00,00); // Uses base 0 data, unless days uses base 1

function GetCount(){

        dateNow = new Date();                                                                        //grab current date
        amount = dateFuture.getTime() - dateNow.getTime();                //calc milliseconds between dates
        delete dateNow;

        // time is already past
        if(amount < 0){
                document.getElementById('countbox').innerHTML="Now!";
        }
        // date is still good
        else{
                days=0;hours=0;mins=0;secs=0;out="";

                amount = Math.floor(amount/1000);//kill the "milliseconds" so just secs

                days=Math.floor(amount/86400);//days
                amount=amount%86400;

                hours=Math.floor(amount/3600);//hours
                amount=amount%3600;

                mins=Math.floor(amount/60);//minutes
                amount=amount%60;

                secs=Math.floor(amount);//seconds

                if(days != 0){out += days +" day"+((days!=1)?"s":"")+", ";}
                if(days != 0 || hours != 0){out += hours +" hour"+((hours!=1)?"s":"")+", ";}
                if(days != 0 || hours != 0 || mins != 0){out += mins +" minute"+((mins!=1)?"s":"")+", ";}
                out += secs +" seconds";
                document.getElementById('countbox').innerHTML=out;

                setTimeout("GetCount()", 1000);
        }
}

window.onload=function(){GetCount();}//call when everything has loaded

//-->
</script>
</head>
<body class="page">

