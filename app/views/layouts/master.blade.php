<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<title>Horizon Faucet</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- *** STYLE STARTS *** -->

<link href="https://horizonplatform.io/css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="https://horizonplatform.io/css/bootstrap-responsive.css" rel="stylesheet" type="text/css" />
<link href="https://horizonplatform.io/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="https://horizonplatform.io/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="https://horizonplatform.io/js/jquery.min.js"></script>
<script type="text/javascript" src="https://horizonplatform.io/wp-content/themes/horizon/js/responsivemobilemenu.js"></script>

<!-- *** STYLE ENDS *** -->
<link rel='stylesheet' id='html5blank-css'  href='https://horizonplatform.io/wp-content/themes/horizon/style.css' media='all' />
<style type="text/css" media="screen"></style><style type="text/css" media="screen"></style><script>
conditionizr.config({
assets: 'https://horizonplatform.io/wp-content/themes/horizon',
tests: {}
});
</script>

</head>

<body>

<!-- *** HEADER STARTS *** -->
<div id="header" style="margin-left: -10px">
  <div class="rmm" data-menu-style='minimal'>
    <ul>
      <li><a href="https://horizonplatform.io/">Home</a></li>
      <li><a href="https://horizonplatform.io/category/updates/">Updates</a></li>
      <li><a href="https://horizonplatform.io/wallets/">Wallets</a></li>
      <li><a href="http://nhzcrypto.org">Forum</a></li>
      <li><a href="https://faucet.horizonplatform.io">Faucet</a></li>
      <li><a href="https://explorer.horizonplatform.io">Explorer</a></li>
      <li><a href="https://horizonplatform.io/tutorial-videos/">Tutorials</a></li>
      <li><a href="https://horizonplatform.io/bounties/">Bounties</a></li>
    </ul>
  </div>
</div>
<!-- *** HEADER ENDS *** --> 

<!-- *** FAUCET START *** -->

<div style="margin-top:60px;"></div>

<div class="wrapper">

  <div class="span8">
    <main role="main">
      @yield('content')
    </main>
  </div>
  <!--span8--> 

  <div class="span4">
    @section('sidebar')
      <div class="four columns">
        <div class="sidebar" style="margin-top: 30px;">
          <div class="widget_categories">
            <input type="button" class="application_button button" style="width:100%; margin:0px; margin-bottom:40px; border:2px solid #003366; background-color:#4c7094; -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;" value="Click To Get Your Horizon ID" onclick="window.location='https://account.horizonplatform.io';">
          <center>
            <a href="http://www.coinssource.com/trust-index/Horizon-HZ/" target="_blank"><img src="https://horizonplatform.io/images/trust-index.png" width="300" height="123" alt="Horizon has been awarded a 7/7 trust rating by Coins Source" title="Horizon has been awarded a 7/7 trust rating by Coins Source" style="margin-bottom:30px;"/></a>
          </center>
          </div>
          <div class="portlet">
            <h3>How to use the faucet</h1>
            <h5 style="color: #fff; font-weight: bold;">Virtual currency faucets allow you to regularly request small amounts of the the currency in question. <a href="//horizonplatform.io/#team" target="_blank" style="color: #bbb;">The Horizon Platform team</a> are committed to maintaining fairness of distribution, and having an official faucet allows us to ensure that coins continue to be distributed in as fair a manner as possible. We have allocated 250,000 Horizon per day to be sent out via the faucet, and will continue to support it until distribution is complete.</p>
            <h5 style="color: #fff; font-weight: bold;">Just enter your Horizon address, complete the Captcha, and you'll receive some Horizon directly into your account immediately! Using the faucet even helps out forgers, by increasing transaction frequency!</p>
          </div>
        </div>
      </div>

    @show
  </div>
<!-- *** FAUCET END *** --> 

<!-- *** FOOTER START *** -->
@section('footer')
<div id="footer" class="span12" style="color:#fff; padding:20px; margin-left:0px;">
  <div class="span3" style="margin-left:0px;">
    <ul style="list-style:none">
      <li><a href="https://horizonplatform.io/the-horizon-team/">Horizon Team</a></li>
      <li><a href="https://horizonplatform.io/development-roadmap/">Development Roadmap</a></li>
      <li><a href="https://horizonplatform.io/statement-of-intent/">Statement Of Intent</a></li>
    </ul>
  </div>
  <div class="span3" style="margin-left:0px;">
    <ul style="list-style:none">
      <li><a href="https://explorer.horizonplatform.io/?page=accounts">Accounts List</a></li>
      <li><a href="https://explorer.horizonplatform.io/?page=assets">Assets List</a></li>
      <li><a href="https://explorer.horizonplatform.io/?page=nodecheck">Node Checker</a></li>
    </ul>
  </div>
  <div class="span3" style="margin-left:0px;">
    <ul style="list-style:none">
      <li><a href="https://explorer.horizonplatform.io/?page=graphs&graph=distribution">Distribution Graph</a></li>
      <li><a href="https://explorer.horizonplatform.io/?page=graphs&graph=nodes">Node Graph</a></li>
      <li><a href="https://explorer.horizonplatform.io/?page=graphs&graph=forgers">Forging Chart</a></li>
    </ul>
  </div>
  <div class="span3" style="margin-left:0px;">
    <ul style="list-style:none">
      
      <li class="social"><a href="https://www.facebook.com/groups/NHZOfficial/" target="_blank" class="t32"><div id="Facebook"></div></a> <a href="https://twitter.com/Horizon_HZ" target="_blank" class="t32"><div id="Twitter"></div></a> <a href="https://kiwiirc.com/client/irc.freenode.net/?nick=Horizon%20User%20?&amp;theme=basic#hz" target="_blank" class="t32"><div id="RSS"></div></a></li>
      <li>Current Horizon Version: 3.2.2</li>
    </ul>
  </div>
</div>
@show
<!-- *** FOOTER END *** -->
</div>

<style type="text/css">
    .social div{
        display: inline-block;
        cursor: pointer;
        margin-right: 5px;
    }
    .social #Facebook,
    .social #Twitter,
    .social #RSS,
    .social #YouTube,
    .social #Vimeo,
    .social #LinkedIn,
    .social #GooglePlus,
    .social #Pintrest,
    .social #Flickr,
    .social #Skype,
    .social #Dribble{
        height: 30px;
        width: 30px;
        background: url(https://horizonplatform.io/wp-content/plugins/social-space/social.png) no-repeat;
        background-size: 330px 90px;
    }
    /* Icon Type 1 */
    .social .t11 #Facebook, .social .t12 #Facebook, .social .t13 #Facebook,
    .social .t11 #Facebook:hover, .social .t21 #Facebook:hover, .social .t31 #Facebook:hover{
        background-position: 0 0;
    }
    .social .t11 #Flickr, .social .t12 #Flickr, .social .t13 #Flickr,
    .social .t11 #Flickr:hover, .social .t21 #Flickr:hover, .social .t31 #Flickr:hover{
        background-position: -30px 0;
    }
    .social .t11 #Dribble, .social .t12 #Dribble, .social .t13 #Dribble,
    .social .t11 #Dribble:hover, .social .t21 #Dribble:hover, .social .t31 #Dribble:hover{
        background-position: -60px 0;
    }
    .social .t11 #GooglePlus, .social .t12 #GooglePlus, .social .t13 #GooglePlus,
    .social .t11 #GooglePlus:hover, .social .t21 #GooglePlus:hover, .social .t31 #GooglePlus:hover{
        background-position: -90px 0;
    }
    .social .t11 #LinkedIn, .social .t12 #LinkedIn, .social .t13 #LinkedIn,
    .social .t11 #LinkedIn:hover, .social .t21 #LinkedIn:hover, .social .t31 #LinkedIn:hover{
        background-position: -120px 0;
    }
    .social .t11 #Pintrest, .social .t12 #Pintrest, .social .t13 #Pintrest,
    .social .t11 #Pintrest:hover, .social .t21 #Pintrest:hover, .social .t31 #Pintrest:hover{
        background-position: -150px 0;
    }
    .social .t11 #RSS, .social .t12 #RSS, .social .t13 #RSS,
    .social .t11 #RSS:hover, .social .t21 #RSS:hover, .social .t31 #RSS:hover{
        background-position: -180px 0;
    }
    .social .t11 #Skype, .social .t12 #Skype, .social .t13 #Skype,
    .social .t11 #Skype:hover, .social .t21 #Skype:hover, .social .t31 #Skype:hover{
        background-position: -210px 0;
    }
    .social .t11 #Twitter, .social .t12 #Twitter, .social .t13 #Twitter,
    .social .t11 #Twitter:hover, .social .t21 #Twitter:hover, .social .t31 #Twitter:hover{
        background-position: -240px 0;
    }
    .social .t11 #Vimeo, .social .t12 #Vimeo, .social .t13 #Vimeo,
    .social .t11 #Vimeo:hover, .social .t21 #Vimeo:hover, .social .t31 #Vimeo:hover{
        background-position: -270px 0;
    }
    .social .t11 #YouTube, .social .t12 #YouTube, .social .t13 #YouTube,
    .social .t11 #YouTube:hover, .social .t21 #YouTube:hover, .social .t31 #YouTube:hover{
        background-position: -300px 0;
    }
    /* Icon Type 2 */
    .social .t21 #Facebook, .social .t22 #Facebook, .social .t23 #Facebook,
    .social .t12 #Facebook:hover, .social .t22 #Facebook:hover, .social .t32 #Facebook:hover{
        background-position: 0 -30px;
    }
    .social .t21 #Flickr, .social .t22 #Flickr, .social .t23 #Flickr,
    .social .t12 #Flickr:hover, .social .t22 #Flickr:hover, .social .t32 #Flickr:hover{
        background-position: -30px -30px;
    }
    .social .t21 #Dribble, .social .t22 #Dribble, .social .t23 #Dribble,
    .social .t12 #Dribble:hover, .social .t22 #Dribble:hover, .social .t32 #Dribble:hover{
        background-position: -60px -30px;
    }
    .social .t21 #GooglePlus, .social .t22 #GooglePlus, .social .t23 #GooglePlus,
    .social .t12 #GooglePlus:hover, .social .t22 #GooglePlus:hover, .social .t32 #GooglePlus:hover{
        background-position: -90px -30px;
    }
    .social .t21 #LinkedIn, .social .t22 #LinkedIn, .social .t23 #LinkedIn,
    .social .t12 #LinkedIn:hover, .social .t22 #LinkedIn:hover, .social .t32 #LinkedIn:hover{
        background-position: -120px -30px;
    }
    .social .t21 #Pintrest, .social .t22 #Pintrest, .social .t23 #Pintrest,
    .social .t12 #Pintrest:hover, .social .t22 #Pintrest:hover, .social .t32 #Pintrest:hover{
        background-position: -150px -30px;
    }
    .social .t21 #RSS, .social .t22 #RSS, .social .t23 #RSS,
    .social .t12 #RSS:hover, .social .t22 #RSS:hover, .social .t32 #RSS:hover{
        background-position: -180px -30px;
    }
    .social .t21 #Skype, .social .t22 #Skype, .social .t23 #Skype,
    .social .t12 #Skype:hover, .social .t22 #Skype:hover, .social .t32 #Skype:hover{
        background-position: -210px -30px;
    }
    .social .t21 #Twitter, .social .t22 #Twitter, .social .t23 #Twitter,
    .social .t12 #Twitter:hover, .social .t22 #Twitter:hover, .social .t32 #Twitter:hover{
        background-position: -240px -30px;
    }
    .social .t21 #Vimeo, .social .t22 #Vimeo, .social .t23 #Vimeo,
    .social .t12 #Vimeo:hover, .social .t22 #Vimeo:hover, .social .t32 #Vimeo:hover{
        background-position: -270px -30px;
    }
    .social .t21 #YouTube, .social .t22 #YouTube, .social .t23 #YouTube,
    .social .t12 #YouTube:hover, .social .t22 #YouTube:hover, .social .t32 #YouTube:hover{
        background-position: -300px -30px;
    }
    /* Icon Type 3 */
    .social .t31 #Facebook, .social .t32 #Facebook, .social .t33 #Facebook,
    .social .t13 #Facebook:hover, .social .t23 #Facebook:hover, .social .t33 #Facebook:hover{
        background-position: 0 -60px;
    }
    .social .t31 #Flickr, .social .t32 #Flickr, .social .t33 #Flickr,
    .social .t13 #Flickr:hover, .social .t23 #Flickr:hover, .social .t33 #Flickr:hover{
        background-position: -30px -60px;
    }
    .social .t31 #Dribble, .social .t32 #Dribble, .social .t33 #Dribble,
    .social .t13 #Dribble:hover, .social .t23 #Dribble:hover, .social .t33 #Dribble:hover{
        background-position: -60px -60px;
    }
    .social .t31 #GooglePlus, .social .t32 #GooglePlus, .social .t33 #GooglePlus,
    .social .t13 #GooglePlus:hover, .social .t23 #GooglePlus:hover, .social .t33 #GooglePlus:hover{
        background-position: -90px -60px;
    }
    .social .t31 #LinkedIn, .social .t32 #LinkedIn, .social .t33 #LinkedIn,
    .social .t13 #LinkedIn:hover, .social .t23 #LinkedIn:hover, .social .t33 #LinkedIn:hover{
        background-position: -120px -60px;
    }
    .social .t31 #Pintrest, .social .t32 #Pintrest, .social .t33 #Pintrest,
    .social .t13 #Pintrest:hover, .social .t23 #Pintrest:hover, .social .t33 #Pintrest:hover{
        background-position: -150px -60px;
    }
    .social .t31 #RSS, .social .t32 #RSS, .social .t33 #RSS,
    .social .t13 #RSS:hover, .social .t23 #RSS:hover, .social .t33 #RSS:hover{
        background-position: -180px -60px;
    }
    .social .t31 #Skype, .social .t32 #Skype, .social .t33 #Skype,
    .social .t13 #Skype:hover, .social .t23 #Skype:hover, .social .t33 #Skype:hover{
        background-position: -210px -60px;
    }
    .social .t31 #Twitter, .social .t32 #Twitter, .social .t33 #Twitter,
    .social .t13 #Twitter:hover, .social .t23 #Twitter:hover, .social .t33 #Twitter:hover{
        background-position: -240px -60px;
    }
    .social .t31 #Vimeo, .social .t32 #Vimeo, .social .t33 #Vimeo,
    .social .t13 #Vimeo:hover, .social .t23 #Vimeo:hover, .social .t33 #Vimeo:hover{
        background-position: -270px -60px;
    }
    .social .t31 #YouTube, .social .t32 #YouTube, .social .t33 #YouTube,
    .social .t13 #YouTube:hover, .social .t23 #YouTube:hover, .social .t33 #YouTube:hover{
        background-position: -300px -60px;
    }
</style>

<div class="loading_icon"></div>

<!-- *** JAVASCRIPTS START *** -->
<script type="text/javascript">
  $(document).ready(function () {
      var allBoxes = $(".alert-container").find('.alert');

      if(allBoxes.length > 1)
        transitionBox(null, allBoxes.first());
      else if(allBoxes.length = 1)
        allBoxes.first().show();
  });

  function transitionBox(from, to) {
      function next() {
          var nextTo;
          if (to.is(":last-child")) {
              nextTo = to.closest(".alert-container").find(".alert").first();
          } else {
              nextTo = to.next();
          }
          to.fadeIn(500, function () {
              setTimeout(function () {
                  transitionBox(to, nextTo);
              }, 5000);
          });
      }
      
      if (from) {
          from.fadeOut(500, next);
      } else {
          next();
      }
  }
</script>

<link rel='stylesheet' id='easy_faqs_style-css'  href='https://horizonplatform.io/wp-content/plugins/easy-faqs/include/css/style.css' media='all' />
<link rel='stylesheet' id='team-manager-style-css'  href='https://horizonplatform.io/wp-content/plugins/wp-team-manager/css/tm-style.css' media='' />

</body>
</html>
