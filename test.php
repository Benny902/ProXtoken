<!DOCTYPE html>
<html>
  
<head>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="css/styles.css">
<link rel="icon" href="media/prox500new.png">
<title>Project X</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});



</script>
</head>

<button onclick="topFunction()" id="myBtn" title="Go to top" style="font-size: 66px;transform:rotateZ(270deg)"><b>›</b></button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 55 || document.documentElement.scrollTop > 55) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<body  style="padding-left: 42px;">

  <span class="sidenavbutton" onclick="openNav()">☰</span>

  <div id="mySidenav" class="sidenav">
    <a  class="closebtn" onclick="closeNav()">&times;</a>
    <a class="navbar-brand" href="#HOME" onclick="closeNav()">&nbsp;&nbsp;&nbsp;<img src="media/prox500new.png" alt="icon" style="max-width: 75px; max-height: 75x">&nbsp;&nbsp;&nbsp;</img></a></a>
    <a class="navbar-brand" href="mailto: contact@proxtoken.com" onclick="closeNav()">&nbsp;&nbsp;&nbsp;<img src="media/email.png" alt="icon" style="max-width: 40px; max-height: 40x">&nbsp;&nbsp;&nbsp;</img></a></a>
    <a class="navbar-brand" href="https://t.me/ProXbsc" onclick="closeNav()">&nbsp;&nbsp;&nbsp;<img src="media/telegram.png" alt="icon" style="max-width: 40px; max-height: 40x">&nbsp;&nbsp;&nbsp;</img></a></a>
    <a class="navbar-brand" href="https://twitter.com/ProXtoken" onclick="closeNav()">&nbsp;&nbsp;&nbsp;<img src="media/twitter logo.png" alt="icon" style="max-width: 40px; max-height: 40x">&nbsp;&nbsp;&nbsp;</img></a></a>
    <a class="navbar-brand" href="https://www.youtube.com/channel/UCJnqnm0BlcJOdtFDpt3vgrg" onclick="closeNav()">&nbsp;&nbsp;&nbsp;<img src="media/youtube.png" alt="icon" style="max-width: 40px; max-height: 40x">&nbsp;&nbsp;&nbsp;</img></a></a>
    <a class="navbar-brand" href="https://discord.gg/X5FB2bXb7T" onclick="closeNav()">&nbsp;&nbsp;&nbsp;<img src="media/discord.png" alt="icon" style="max-width: 40px; max-height: 40x">&nbsp;&nbsp;&nbsp;</img></a></a>
          <a href="#HOME" onclick="closeNav()"><b>&nbsp;&nbsp;HOME&nbsp;&nbsp;</b></a>
          <a href="#TOKENOMICS" onclick="closeNav()"><b>TOKENOMICS</b></a>
          <a href="#TEAM" onclick="closeNav()"><b>TEAM</b></a>
          <a href="#ROADMAP" onclick="closeNav()"><b>ROADMAP</b></a>
          <a href="pages/nft" onclick="closeNav()"><b>&nbsp;&nbsp;NFT&nbsp;&nbsp;</b></a>
          <a href="pages/dashboard" onclick="closeNav()"><b>DASHBOARD</b></a>
          <a href="pages/calculator" onclick="closeNav()"><b>CALCULATOR</b></a>
          <a href="pages/whitepaper" onclick="closeNav()"><b>WHITEPAPER</b></a>
          <a href="pages/xclub" onclick="closeNav()"><b>X-CLUB</b></a>
          <a href="pages/xclubdrops" onclick="closeNav()"><b>X-CLUB&nbsp;DROPS</b></a>
          <a href="pages/pastamas" onclick="closeNav()"><b>PAST&nbsp;AMA'S</b></a>
          <a href="pages/wallets" onclick="closeNav()"><b>TEAM&nbsp;WALLETS</b></a>
          <a href="pages/xstarter" onclick="closeNav()"><b>X-STARTER</b></a>
  </div>
  

  <p>&nbsp;</p>


  <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script>
<section style="background-image: url(media/person.jpg);    background-attachment: fixed;
background-size:cover;background-position: center;
height: 100%;
width: 100%;">
  <div>   
     <div class="navbar">
        <a class="navbar-brand" href="#HOME"><img src="media/prox500new.png" alt="icon" style="max-width: 50px; max-height: 50x"></img></a></a>
        <div class="dropdown2">
          <a style ="text-decoration:none" href="#HOME"><button class="dropbtn2"><b>HOME&nbsp;⁝</b></a></button>
          <div class="dropdown-content2">
            <a href="#TOKENOMICS"><b>TOKENOMICS</b></a>
            <a href="#ROADMAP"><b>ROADMAP</b></a>
            <a href="#TEAM"><b>TEAM</b></a>
          </div>
        </div>
        <a noclass="blink_me" style="letter-spacing: -2.5px;font-size: 28px;" href="pages/nft"><b>&nbsp;NF&nbsp;T&nbsp;&nbsp;&nbsp;</b></a>
        <a href="pages/dashboard"><b>DASHBOARD</b></a>
        <a href="pages/calculator"><b>CALCULATOR</b></a>
        <a href="pages/whitepaper"><b>WHITEPAPER</b></a>
        <a href="pages/xclub"><b>X-CLUB</b></a>
        <div class="dropdown">
          <button class="dropbtn"><b>MORE&nbsp;⁝</b></button>
          <div class="dropdown-content">
            <a href="pages/xclubdrops"><b>X-CLUB&nbsp;DROPS</b></a>
            <a href="pages/pastamas"><b>PAST&nbsp;AMA'S</b></a>
            <a href="pages/wallets"><b>TEAM&nbsp;WALLETS</b></a>
            <a href="pages/xstarter"><b>X-STARTER</b></a>
          </div>
        </div> 
        
        <a class="navbar-brand" href="mailto: contact@proxtoken.com"><img src="media/email.png" alt="img" style="max-width: 25px; max-height: 25x"></img></a>
        <a class="navbar-brand" href="https://t.me/ProXbsc"><img src="media/telegram.png" alt="img" style="max-width: 25px; max-height: 25x"></img></a>
        <a class="navbar-brand" href="https://twitter.com/ProXtoken"><img src="media/twitter logo.png" alt="img" style="max-width: 25px; max-height: 25x"></img></a>
        <a class="navbar-brand" href="https://www.youtube.com/channel/UCJnqnm0BlcJOdtFDpt3vgrg"><img src="media/youtube.png" alt="img" style="max-width: 25px; max-height: 25x"></img></a>
        <a class="navbar-brand" href="https://discord.gg/X5FB2bXb7T"><img src="media/discord.png" alt="img" style="max-width: 25px; max-height: 25x"></img></a>
      </div>
    </div>
</section>




<a id="HOME"></a>
<!-- <span style="color:red;">THIS</span> -->
<div class="paragraph" style="padding:25px"></div>
<section data-aos="zoom-in">
<h2 noclass="blink_me" style="font-size:30px">NFT Soldout!<br></h2> 

<h2>
  <?php 
  echo "This is PHP code inside html"
  ?>
</h2>


<div class="paragraph" style="padding:10px"></div>



<div><a class="navbar-brand" href="#HOME"><img src="media/projectXgifcut2.gif" alt="icon" style="max-width: 400px; max-height: 400x"></img></a></a></div>
&nbsp;
<h2 style="font-size:30px">A BEP-20 token, created to reward loyalty. <br></h2> 
<h1 data-aos="zoom-in-down"><span style="font-size:62px;color:rgba(255, 0, 64, 0.655);-webkit-text-stroke: 0.1px rgba(134, 0, 51, 0.514);"><b>For investors, By investors.</b></span><br></h1>
  <h2 style="font-size:30px"> Pushing the boundaries of the crypto sphere to a different level by creating a higher standard.</h2>

  <div  class="paragraph" style="padding:30px;"></div>
  <h2>Partners / Listings / Featured / Clients :</h2>

  <div2 class="container">
    <div2 class="brand-wheel">
      <div2 class="brand-slide">
        <div2 class="logo-div">
        </div2>
        <div2 class="logo-div">
          <a href="https://www.pinksale.finance/launchpad/0xe56789222282a9725200ddB481dC87181049CAe1?chain=BSC"><img alt="#" src="media/partnerlogos/resized/pinksale.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="https://www.poochain.co/"><img  alt="#" src="media/partnerlogos/resized/poochain.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="http://dapp.thenovation.com/swap/other/0x9d9fA9DbAe391C3FB6866F43De62FF3B393133b2"><img style="width:240px; height: 80px;" alt="#" src="media/partnerlogos/resized/novation.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="https://earn.brewlabs.info/pools"><img style="width:240px; height: 80px;" alt="search for prox" src="media/partnerlogos/resized/brewlabs.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="https://coinpaprika.com/coin/prox-project-x/"><img alt="#" src="media/partnerlogos/resized/coinpaprika.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="https://nomics.com/assets/prox3-projectx"><img alt="#" src="media/partnerlogos/resized/nomics.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="https://www.livecoinwatch.com/price/ProjectX-PROX"><img  alt="#" src="media/partnerlogos/resized/livecoinwatch.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="https://lynxcrypto.app/"><img  alt="#" src="media/partnerlogos/resized/lynx.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="https://blockspot.io/coin/projectx-2/"><img  alt="#" src="media/partnerlogos/resized/blockspot.png"></a>
        </div2>
      </div2>
      <div2 class="brand-slide delay">
        <div2 class="logo-div">
        </div2>
        <div2 class="logo-div">
          <a href="https://www.pinksale.finance/launchpad/0xe56789222282a9725200ddB481dC87181049CAe1?chain=BSC"><img alt="#" src="media/partnerlogos/resized/pinksale.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="https://www.poochain.co/"><img  alt="#" src="media/partnerlogos/resized/poochain.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="http://dapp.thenovation.com/swap/other/0x9d9fA9DbAe391C3FB6866F43De62FF3B393133b2"><img style="width:240px; height: 80px;" alt="#" src="media/partnerlogos/resized/novation.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="https://earn.brewlabs.info/pools"><img  alt="search for prox" src="media/partnerlogos/resized/brewlabs.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="https://coinpaprika.com/coin/prox-project-x/"><img alt="#" src="media/partnerlogos/resized/coinpaprika.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="https://nomics.com/assets/prox3-projectx"><img alt="#" src="media/partnerlogos/resized/nomics.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="https://www.livecoinwatch.com/price/ProjectX-PROX"><img  alt="#" src="media/partnerlogos/resized/livecoinwatch.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="https://lynxcrypto.app/"><img  alt="#" src="media/partnerlogos/resized/lynx.png"></a>
        </div2>
        <div2 class="logo-div">
          <a href="https://blockspot.io/coin/projectx-2/"><img  alt="#" src="media/partnerlogos/resized/blockspot.png"></a>
        </div2>
      </div2>
    </div2>
    </div2>
  <div  class="paragraph" style="padding:100px;"></div>
</section>

<section style="background-image: url(media/person.jpg);    background-attachment: fixed;
background-size:cover;background-position: center;
height: 100%;
width: 100%;">

<div  class="paragraph" style="padding:30px;"></div>


<div>
  <script defer src="https://www.livecoinwatch.com/static/lcw-widget.js"></script> <div data-aos="flip-left" class="livecoinwatch-widget-1" lcw-coin="PROX" lcw-base="USD" lcw-secondary="BNB" lcw-period="w" lcw-color-tx="#ffffff" lcw-color-pr="#0693e3" lcw-color-bg="#000000" lcw-border-w="3" ></div>
</div>
<div class="paragraph" style="padding:10px"></div>
<div>
  <div style="text-align:center">
    <a data-aos="fade-right" style="text-decoration:none;" href="https://bscscan.com/token/0x9d9fa9dbae391c3fb6866f43de62ff3b393133b2" class="button"><img alt="#" src="media/partnerlogos/resized/bscscan.png"></a>
  
    
    &nbsp;&nbsp;&nbsp;
    <a data-aos="fade-up" style="text-decoration:none;" href="https://pancakeswap.finance/swap?outputCurrency=0x9d9fA9DbAe391C3FB6866F43De62FF3B393133b2" class="button"><img alt="#" src="media/partnerlogos/resized/pancakeswap.png"></a>
    
  
    &nbsp;&nbsp;&nbsp;
 
    <a data-aos="fade-left"style ="text-decoration:none;" href="https://www.dextools.io/app/bnb/pair-explorer/0x9d9fA9DbAe391C3FB6866F43De62FF3B393133b2" class="button"><img alt="#" src="media/partnerlogos/resized/dextools.png"></a>
    &nbsp;&nbsp;&nbsp;
  </div>
</div>


<a id="BUY"></a>
  <h1 data-aos="zoom-in-up" style="word-wrap: break-word;font-size: 28px;"><a> Contract Address:  <mark>0x9d9fA9DbAe391C3FB6866F43De62FF3B393133b2</mark></a></h1>

<div >
  <iframe style="border-radius:10px" scrolling="no" src="https://pancakeswap.finance/swap?outputCurrency=0x9d9fA9DbAe391C3FB6866F43De62FF3B393133b2" frameborder="0" width="400" height="750"></iframe>
</div>
<div  class="paragraph" style="padding:60px;"></div>

</section>



  <div class="paragraph" style="padding:20px"></div>

  <section>
  <h1 data-aos="zoom-in-up"><span style="color:rgba(255, 0, 0, 0.7);">Project X</span> is a token that includes within it a set of utilities:</h1>
  <p>&nbsp;</p><p>&nbsp;</p>
  
  <h2><div>
      
      <a href="pages/nft"style="text-decoration:none;">
        <table data-aos="fade-up" class="table1">
          <tr>
            <td id="td1" class="textCenter">
              <p><span style="color:rgb(255, 0, 98, 0.655);">NFT&nbsp;&nbsp;Collections&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span style="color:rgba(255, 255, 255, 0.9);">that&nbsp;will&nbsp;Be&nbsp;integrated with our P2E-Game called "X-CAPE Rooms".</span></p>
                <p><span style="color:rgba(255, 255, 255, 0.9);">Our first collection will be related to the horror / mystery genre. creeeepy.</span></p>
            </td>
        </tr>
    </table></a>
   
    <a href="pages/xstarter"style="text-decoration:none;">
      <table data-aos="fade-up" class="table1">
          <tr>
            <td id="td1" class="textCenter"> 
              <p><span style="color:rgb(255, 0, 98, 0.655);">X&nbsp;-&nbsp;STARTER&nbsp;&nbsp;Platform&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span style="color:rgba(255, 255, 255, 0.9);">Where you can raise funds through crypto for your own project.</span></p>
                <p><span style="color:rgba(255, 255, 255, 0.9);">Investors will be able to invest into those projects & Share profits.</span></p>
            </td>
        </tr>
    </table></a>
   
    <a href="pages/xclub"style="text-decoration:none;">
      <table data-aos="fade-up" class="table1">
      <tr>
        <td id="td1" class="textCenter">
         <p><span style="color:rgb(255, 0, 98, 0.655);">X&nbsp;-&nbsp;CLUB&nbsp;&nbsp;</span><span style="color:rgba(255, 255, 255, 0.9);">an&nbsp;&nbsp;exclusive&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; club which will be&nbsp; divided&nbsp; into three different levels,</span></p>
          <p><span style="color:rgba(255, 255, 255, 0.9);">in the following order: Silver, Gold, Platinum. More info; XCLUB Section.</span></p>
         </td>
    </tr>
    </table></a>
  
    </div></h2>

    <h2>
      <div>
      <a href="pages/xproductions"style="text-decoration:none;">
        <table data-aos="fade-up" class="table1">
            <tr>
              <td id="td1" class="textCenter"> 
                <p><span style="color:rgb(255, 0, 98, 0.655);">X&nbsp;-&nbsp;Productions&nbsp;&nbsp;</span><span style="color:rgba(255, 255, 255, 0.9);">Our&nbsp;own&nbsp;&nbsp;&nbsp;&nbsp; Produced documentary movie about our project and crypto in general.</span></p>
                  <p><span style="color:rgba(255, 255, 255, 0.9);">it can be sold to netflix / prime, etc, which will give exposure to Project X.</span></p>
              </td>
          </tr>
      </table></a>
    <a href="pages/xgiving"style="text-decoration:none;">
      <table data-aos="fade-up" class="table1">
          <tr>
            <td id="td1" class="textCenter"> 
              <p><span style="color:rgb(255, 0, 98, 0.655);">X&nbsp;-&nbsp;GIVING&nbsp;</span><span style="color:rgba(255, 255, 255, 0.9);">We&nbsp;will&nbsp;be&nbsp;using the rewards collected in this wallet to donate to charities!</span></p>
                <p><span style="color:rgba(255, 255, 255, 0.9);">Our goal is to change the perspective of crypto from greed to giving! </span></p>
            </td>
        </tr>
    </table></a>
    <a href="pages/p2egame"style="text-decoration:none;">
      <table data-aos="fade-up" class="table1">
          <tr>
            <td id="td1" class="textCenter"> 
              <p><span style="color:rgb(255, 0, 98, 0.655);">P2E&nbsp;-&nbsp;GAME&nbsp;&nbsp;</span><span style="color:rgba(255, 255, 255, 0.9);">The&nbsp;game&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; will implement our NFTS and will be based on the Escape rooms genre.</span></p>
                <p><span style="color:rgba(255, 255, 255, 0.9);">We will have competitions between the players for substantial prizes.</span></p>
            </td>
        </tr>
    </table></a>
 
  </div>
</h2>
  </section>

  <div class="paragraph" style="padding:80px"></div>

  <section style="background-image: url(media/person.jpg);    background-attachment: fixed;
  background-size:cover;background-position: center;
  height: 100%;
  width: 100%;">

<div class="paragraph" style="padding:30px"></div>
  <div>
    <h1 data-aos="zoom-in-up"> WHY&nbsp; <span style="color:rgba(255, 0, 0, 0.603);">PROJECT X ?</span> </h1>
       
    </div>
 
    <div>
        <div>
            <div class="item">
              <div class="column" style="width:400px">
                <img data-aos="fade-up" class="circular--square" style="border-radius: 5%;" src="media/1t.png" />
                <h2 style="width:250px"><span style="color:rgba(255, 0, 0, 0.603);">PASSIVE INCOME</span><br><br>
                    Holders will earn
                    a 7% reward from
                    every Buy/Transfer/Sell
                    Transaction in
                    pegged ETH tokens.<br>
                    <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                    <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                    <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                    <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                </div>
                </div>
            </div>
            <div>
              <div class="item">
                <div class="column" style="width:400px">
                    <img data-aos="fade-up" class="circular--square" style="border-radius: 5%;" src="media/2t.png" />
                    <h2 style="width:250px"><span style="color:rgba(255, 0, 0, 0.603);">REWARDS LOYALTY</span><br><br>
                        There is a wallet that holds
                        20% of the total supply.
                        This wallet also earns Pegged Eth
                        rewards (7%) as every wallet does. 
                        These rewards will be used for 
                        buybacks that are later distributed
                        to loyal members of the X-CLUB.<br>
                    </div>
              </div>
            </div>
            <div>
              <div class="item">
                <div class="column" style="width:400px">
                    <img data-aos="fade-up" class="circular--square" style="border-radius: 5%;" src="media/3t.png" />
                    <h2 style="width:250px"><span style="color:rgba(255, 0, 0, 0.603);">DOXXED TEAM</span><br><br>
                        The Project X team is
                        100% doxxed, which
                        means that each
                        member is open with
                        their identities and
                        often appears in
                        front of the camera.<br>
                        <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                        <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                        <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                        <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                    </div>
              </div>
            </div>
            <div>
              <div class="item">
                <div class="column" style="width:400px">
                    <img data-aos="fade-up" class="circular--square" style="border-radius: 5%;" src="media/4t.png" />
                    <h2 style="width:250px"><span style="color:rgba(255, 0, 0, 0.603);"> UTILITIES</span><br><br>
                        Several utilities are
                        under development
                        such as P2E game,
                        Crypto fundraising
                        platform and NFT
                        Collections.<br>
                        <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                        <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                        <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                        <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                    </div>
              </div>
            </div>
            <div>
              <div class="item">
                <div class="column" style="width:400px">
                    <img data-aos="fade-up" class="circular--square" style="border-radius: 5%;" src="media/5t.png" />
                    <h2 style="width:250px"><span style="color:rgba(255, 0, 0, 0.603);">TRANSPARENCY</span><br><br>
                        Each team member's
                        wallet address is
                        published on the website
                        with full transparency of
                        the number of tokens
                        each team member holds.<br>
                        <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                        <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                    </div>
              </div>
            </div>
            <div>
              <div class="item">
                <div class="column" style="width:400px">
                  <img data-aos="fade-up" class="circular--square" style="border-radius: 5%;" src="media/6t.png" />
                  <h2 style="width:250px"><span style="color:rgba(255, 0, 0, 0.603);">DASHBOARD</span><br><br>
                    On the website there is
                    a dashboard where
                    you can see your own
                    rewards statistics.
                    You can also claim
                    your rewards manually.<br>
                    <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                    <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                    <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                </div>
              </div>
            </div>
          </div>
          <div class="paragraph" style="padding:20px"></div>
        </section>
    

    <div class="paragraph" style="padding:30px"></div>
    <section>
    <a id="TOKENOMICS"></a>
  
    <h1 data-aos="zoom-in-up"><span style="color:rgba(255, 0, 0, 0.61);">TOKENOMICS:</span></h1>

  

    <div data-aos="zoom-in-down">
    <p><h2 style="text-align:left"><span style="color:rgba(255, 0, 98, 0.855);">BUY (5%) / SELL (6%) TAX DISTRIBUTION:</span></h2>
    </div>
      <div data-aos="zoom-in-down"><h3>
      <p><span style="color:rgb(255, 0, 149, 0.899);">MARKETING & DEVELOPMENT:</span> 1% BUY/SELL</p>
      <p><span style="color:rgb(255, 0, 149, 0.899);">LIQUIDITY POOL:</span> 1% BUY/SELL</p>
      <p><span style="color:rgba(255, 0, 149, 0.899);">ETH (PEGGED) REFLECTIONS:</span> 3% BUY , 4% SELL</p>
    </h3>
    </div>

<div>
  <h4>
    <div>
      <table data-aos="fade-right" class="table2" style="max-width: 400px; max-height: 400px">
          <tr>
            <td id="td2" class="textCenter">
                <h2 style="text-align:left"><span style="color:rgba(255, 0, 98, 0.855);">TOTAL INITIAL SUPPLY: 1,000,000,000</span></h2>
                <p> <span style="color:rgb(255, 0, 149, 0.899);">PANCAKESWAP LIQUIDITY (+BNB):</span> 15% - LOCKED FOR 1 YEAR.</p>
                <p> <span style="color:rgb(255, 0, 149, 0.899);">PRESALE:</span> 15% - SOLDOUT TO HOLDERS.</p>
            <hr>
                <p><span style="color:rgba(255, 0, 98, 0.855);">ALL THE TOKENS BELOW ARE LOCKED ON PINKSALE LOCK (AND DO NOT GET ETH REWARDS).
                  ONCE THOSE TOKENS ARE UNLOCKED - WILL BE RELOCKED ON BREWLABS LOCKER.:</span></p>
                <p><span style="color:rgb(255, 0, 149, 0.899);">X-GIVING:</span> 5% - LOCKED UNTILL 01/11/2022 .</p>
                <p><span style="color:rgb(255, 0, 149, 0.899);">CEX LISTING:</span> 10% - LOCKED UNTILL 01/12/2022 .</p>
                <p><span style="color:rgb(255, 0, 149, 0.899);">STRATEGIC PARTNERSHIPS:</span> 5% - LOCKED UNTILL 01/03/2023 .</p>
                <p><span style="color:rgb(255, 0, 149, 0.899);">P2E GAME:</span> 5% - LOCKED UNTILL 01/03/2023 .</p>
                <hr>
                <p><span style="color:rgba(255, 0, 98, 0.855);">ALL THE TOKENS BELOW ARE LOCKED ON BREWLABS LOCKER (AND HARVESTING ETH REWARDS):</span></p>
                <p><span style="color:rgb(255, 0, 149, 0.899);">Staking Pool:</span> 5% - LOCKED UNTILL 25/10/2023 .</p>
                <p><span style="color:rgb(255, 0, 149, 0.899);">X-CLUB:</span> 20% - LOCKED UNTILL 25/10/2023 .</p>
                <p><span style="color:rgb(255, 0, 149, 0.899);">MARKETING:</span> 10% - LOCKED UNTILL 25/10/2023 .</p>
                <p><span style="color:rgb(255, 0, 149, 0.899);">DEV / TEAM:</span> 10% - LOCKED UNTILL 25/10/2023 .</p>



            </td>
        </tr>
    </table>
    &nbsp;&nbsp;&nbsp;
      <table data-aos="zoom-in"class="table2">
          <tr>
            <td id="td2" class="textCenter">
              <div><table class="table3"><tr></td></tr></table> </div>
              <div><table class="table3"><tr></td></tr></table> </div>
              <a href="#TOKENOMICS"><img src="media/distribution2.gif" alt="img" style="padding-left: 10px;max-width: 400px; max-height: 400px"></img></a>
            </td>
        </tr>
    </table>
    </div>
    </h4>
 
  <p> </p>
</div>
</section>



<div class="paragraph" style="padding:80px"></div>

<section style="background-image: url(media/person.jpg);    background-attachment: fixed;
background-size:cover;background-position: center;
height: 100%;
width: 100%;">
    <div class="paragraph" style="padding:30px"></div>

<a id="TEAM"></a>


<div>
  <h1 data-aos="zoom-in-up" style ="text-align:center;"><span style="color:rgba(255, 0, 0, 0.705);">MEET THE TEAM:</span> </h1>
</div>
  

<div>
  <div class="item">
    <div class="column">
      <img data-aos="fade-up" class="circular--square" src="media/team/nart.png" />
      <h2>Nart<br>
      Founder<br>
      <a href="https://twitter.com/nart92"><img src="media/twitter logo.png" alt="img" style="max-width: 50px; max-height: 30x"></img></a></h2>
    </div>
  </div>
</div>

<div>
  <div class="item">
    <div class="column">
      <img data-aos="fade-up" class="circular--square" src="media/team/mario.png" />
        <h2>Mario<br>
        Spokesman<br>
        <a href="https://twitter.com/march_i_won"><img src="media/twitter logo.png" alt="img" style="max-width: 50px; max-height: 30x"></img></a></h2>
      </div>
  </div>
  <div>
    <div class="item">
      <div class="column">
        <img data-aos="fade-up" class="circular--square" src="media/team/michael.png" />
        <h2><br>Mike<br>
        Social&nbsp;Media&nbsp;Manager<br><br>
        <a href="https://twitter.com/mccolgan87"><img src="media/twitter logo.png" alt="img" style="max-width: 50px; max-height: 30x"></img></a></h2>
      </div>
    </div>
  </div>
  <div>
    <div class="item">
      <div class="column">
        <img data-aos="fade-up" class="circular--square" src="media/team/andre.png" />
        <h2>André<br><br>
        <br>Market Analyst<br>
        <a href="https://twitter.com/Miithra2"><img src="media/twitter logo.png" alt="img" style="max-width: 50px; max-height: 30x"></img></a></h2>
      </div>
    </div>
  </div>
  <div>
    <div class="item">
      <div class="column">
        <img data-aos="fade-up" class="circular--square" src="media/team/chris.png" />
        <h2>Chris<br><br>
          Lead Moderator<br><br>
        <a href="https://twitter.com/finnacryptire"><img src="media/twitter logo.png" alt="img" style="max-width: 50px; max-height: 30x"></img></a></h2>
      </div>
    </div>
  </div>



  <div>
    <div class="item">
      <div class="column">
        <img data-aos="fade-up" class="circular--square" src="media/team/olu.png" />
        <h2>Olu<br><br>
        Public Relations<br><br>
        <a href="https://twitter.com/CryptFins"><img src="media/twitter logo.png" alt="img" style="max-width: 50px; max-height: 30x"></img></a></h2>
      </div>
    </div>
  </div>
  <div>
    <div class="item">
      <div class="column">
        <img data-aos="fade-up" class="circular--square" src="media/team/benjamin.png" />
        <h2>Benjamin<br><br>
        Software&nbsp;Engineer<br><br>
        <a href="https://twitter.com/kartwalley1"><img src="media/twitter logo.png" alt="img" style="max-width: 50px; max-height: 30x"></img></a></h2>
      </div>
    </div>
  </div>
  <div>
    <div class="item">
      <div class="column">
        <img data-aos="fade-up" class="circular--square" src="media/team/gal.png" />
        <h2>Gal<br><br>
        Data Analyst<br><br>
        <a href="https://twitter.com/DeepiCrypt"><img src="media/twitter logo.png" alt="img" style="max-width: 50px; max-height: 30x"></img></a></h2>
      </div>
    </div>
  </div>
  <div>
    <div class="item">
      <div class="column">
        <img data-aos="fade-up" class="circular--square" src="media/team/don.png" />
        <h2>Don<br><br>
          Social&nbsp;Media/Discord<br><br>
        <a href="https://twitter.com/donwonfosho20"><img src="media/twitter logo.png" alt="img" style="max-width: 50px; max-height: 30x"></img></a></h2>
      </div>
    </div>
  </div>
</div>
<div class="paragraph" style="padding:40px"></div>
</section>

<section >
  <div class="paragraph" style="padding:30px"></div>
<div data-aos="zoom-in"
data-aos-duration="3000">
  <span style="color:rgba(167, 164, 164, 0.753);"> <h2>#P2E_GAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    #NFT_COLLECTION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     #ESCAPE_ROOM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      #MOVIE_INDUSTRY</h2><br></span>
 </div>
 <div class="paragraph" style="padding:30px"></div>
</section>

 <section style="background-image: url(media/person.jpg);    background-attachment: fixed;
 background-size:cover;background-position: center;
 height: 100%;
 width: 100%;">
 <a id="ROADMAP"></a>
 <div class="paragraph" style="padding:50px"></div>
 
 <div>
   <h1 data-aos="zoom-in-up" style ="text-align:center;"><span style="color:rgba(255, 0, 0, 0.6);">ROADMAP:</span> </h1>
 </div>



 
 <div>
  <div>
      <div data-aos="flip-right" class="item">
        <div class="column" style="width:400px">
          <img class="circular--square" style="border-radius: 5%;"  />
          <h2 style="width:250px"><span style="color:rgba(255, 0, 98, 0.855);">CHAPTER ONE</span><br><br>
          <h5>• WHITEPAPER V1<br>
            <div class="wrapper">
              <div class="progress-bar">
                <span class="progress-bar-fill" style="width: 100%;"></span>
              </div>
            </div>
              • 1,000 HOLDERS<br>
              <div class="wrapper">
                <div class="progress-bar">
                  <span class="progress-bar-fill" style="width: 100%;"></span>
                </div>
              </div>
              • 1,500 TELEGRAM MEMBERS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
              <div class="wrapper">
                <div class="progress-bar">
                  <span class="progress-bar-fill" style="width: 90%;"></span>
                </div>
              </div>
              • COINMARKETCAP LISTING<br>
              <div class="wrapper">
                <div class="progress-bar">
                  <span class="progress-bar-fill" style="width: 50%;"></span>
                </div>
              </div>
              • COINGECKO LISTING<br>
              <div class="wrapper">
                <div class="progress-bar">
                  <span class="progress-bar-fill" style="width: 50%;"></span>
                </div>
              </div>
              • 1,000,000$ MARKETCAP<br>
              <div class="wrapper">
                <div class="progress-bar">
                  <span class="progress-bar-fill" style="width: 90%;"></span>
                </div>
              </div>
              • PROJECTX NFT CREATION<br>
              <div class="wrapper">
                <div class="progress-bar">
                  <span class="progress-bar-fill" style="width: 100%;"></span>
                </div>
              </div>
              • STRATEGIC PARTNERSHIPS<br>
              <div class="wrapper">
                <div class="progress-bar">
                  <span class="progress-bar-fill" style="width: 100%;"></span>
                </div>
              </div>
              • MARKETING <br>
              <div class="wrapper">
                <div class="progress-bar">
                  <span class="progress-bar-fill" style="width: 80%;"></span>
                </div>
              </div>
              <span style="color:rgba(255, 0, 0, 0);">.</span><br>
          </div></h5>
          </div>
      </div>
      <div>
        <div data-aos="flip-right" class="item">
          <div class="column" style="width:400px">
              <img class="circular--square" style="border-radius: 5%;"  />
              <h2 style="width:250px"><span style="color:rgba(255, 0, 98, 0.855);">CHAPTER TWO</span><br><br>
              <h5>• WHITEPAPER V2<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 80%;"></span>
                  </div>
                </div>
                • 10,000 HOLDERS<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 10%;"></span>
                  </div>
                </div>
                • 15,000 TELEGRAM MEMBERS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 20%;"></span>
                  </div>
                </div>
                • PROJECTX NFT RELEASE<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 100%;"></span>
                  </div>
                </div>
                • MARKETING CAMPAIGN<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 50%;"></span>
                  </div>
                </div>
                • MORE STRATEGIC PARTNERSHIPS<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 50%;"></span>
                  </div>
                </div>
                • TOP 20 CEX<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 25%;"></span>
                  </div>
                </div>
                • P2E GAME DEVELOPMENT<br> 
                &nbsp;&nbsp;&nbsp;&nbsp;[XCAPE ROOMS]<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 10%;"></span>
                  </div>
                </div>
                • 30,000,000$ MARKETCAP
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 1%;"></span>
                  </div>
                </div>
                <span style="color:rgba(255, 0, 0, 0);">.</span><br>
              </h5>
              </div>
        </div>
      </div>
      <div>
        <div data-aos="flip-right" class="item">
          <div class="column" style="width:400px">
              <img class="circular--square" style="border-radius: 5%;"  />
              <h2 style="width:250px"><span style="color:rgba(255, 0, 98, 0.855);">CHAPTER THREE</span><br><br>
            <h5>• 30,000 HOLDERS<br>
              <div class="wrapper">
                <div class="progress-bar">
                  <span class="progress-bar-fill" style="width: 4%;"></span>
                </div>
              </div>
                • MORE MARKETING CAMPAIGN<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 25%;"></span>
                  </div>
                </div>
                • TOP 10 CEX<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 1%;"></span>
                  </div>
                </div>
                • P2E GAME TRAILER REVEALANCE<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 1%;"></span>
                  </div>
                </div>
                • 100,000,000$ MARKETCAP<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 1%;"></span>
                  </div>
                </div>
                • INFLUENCER COLLABORATION<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 30%;"></span>
                  </div>
                </div>
                  <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                  <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                  <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                  <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                  <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                  <span style="color:rgba(255, 0, 0, 0);">.</span><br>
              </div></h5>
        </div>
      </div>
      <div>
        <div data-aos="flip-right" class="item">
          <div class="column" style="width:400px">
              <img class="circular--square" style="border-radius: 5%;"  />
              <h2 style="width:250px"><span style="color:rgba(255, 0, 98, 0.855);"> CHAPTER FOUR</span><br><br>
            <h5>• 100,000 HOLDERS<br>
              <div class="wrapper">
                <div class="progress-bar">
                  <span class="progress-bar-fill" style="width: 5%;"></span>
                </div>
              </div>
              • 500,000,000$ MARKETCAP<br>
              <div class="wrapper">
                <div class="progress-bar">
                  <span class="progress-bar-fill" style="width: 1%;"></span>
                </div>
              </div>
                • ONLINE STORE/MERCH<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 1%;"></span>
                  </div>
                </div>
                • P2E Game Release<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 1%;"></span>
                  </div>
                </div>
                • Metaverse X-City Development<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 1%;"></span>
                  </div>
                </div>
                • X-Productions<br>
                <div class="wrapper">
                  <div class="progress-bar">
                    <span class="progress-bar-fill" style="width: 30%;"></span>
                  </div>
                </div>

                <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                <span style="color:rgba(255, 0, 0, 0);">.</span><br>
                <span style="color:rgba(255, 0, 0, 0);">.</span><br>
              </div></h5>
        </div>
      </div>
    </div>
    <div class="paragraph" style="padding:30px"></div>
</section>
    <div class="paragraph" style="padding:30px"></div>
  <div data-aos="flip-up">
    <h3><span style="color:rgba(255, 0, 140, 0.493);">#ETH_REWARDS&nbsp;&nbsp;&nbsp;&nbsp; 
      #ESCAPE_ROOM_P2E_GAME&nbsp;&nbsp;&nbsp;&nbsp; 
      #MOVIE_INDUSRTY&nbsp;&nbsp;&nbsp;&nbsp; 
      #NFT_COLLECTION&nbsp;&nbsp;&nbsp;&nbsp; 
      #METAVERSE&nbsp;&nbsp;&nbsp;&nbsp; 
      #STAKING&nbsp;&nbsp;&nbsp;&nbsp; 
      #COMMUNITY_REWARDS&nbsp;&nbsp;&nbsp;&nbsp; 
      #STARTUP_PLATFORM&nbsp;&nbsp;&nbsp;&nbsp; </span> <br></p></h5></h3><br>
  </div>

<div>
  <h4 data-aos="fade-up">Contact us: contact@proxtoken.com</h4><br>
</div>

  <div><table class="table4"><tr></td></tr></table> </div>
  <div><table class="table4"><tr></td></tr></table> </div>
  <div data-aos="fade-up">
    <a style="text-decoration:none"  class="navbar-brand" href="mailto: contact@proxtoken.com"><img src="media/email.png" alt="img" style="max-width: 50px; max-height: 50px">&nbsp;&nbsp;&nbsp;&nbsp;</img></a>
    <a style="text-decoration:none"  class="navbar-brand" href="https://t.me/ProXbsc"><img src="media/telegram.png" alt="img" style="max-width: 50px; max-height: 50px">&nbsp;&nbsp;&nbsp;&nbsp;</img></a>
    <a style="text-decoration:none"  class="navbar-brand" href="https://twitter.com/ProXtoken"><img src="media/twitter logo.png" alt="img" style="max-width: 50px; max-height: 50px">&nbsp;&nbsp;&nbsp;&nbsp;</img></a>
    <a style="text-decoration:none"  class="navbar-brand" href="https://www.youtube.com/channel/UCJnqnm0BlcJOdtFDpt3vgrg"><img src="media/youtube.png" alt="img" style="max-width: 50px; max-height: 50px">&nbsp;&nbsp;&nbsp;&nbsp;</img></a>
    <a style="text-decoration:none" class="navbar-brand" href="https://discord.gg/X5FB2bXb7T"><img src="media/discord.png" alt="img" style="max-width: 50px; max-height: 50px">&nbsp;&nbsp;</img></a>
    
  </div>
   <div>
    <h4 data-aos="fade-up" >Copyright © 2022 ProjectX</h4><br>
  </div>
   <div><table class="table4"><tr></td></tr></table> </div>
   <div data-aos="fade-right">
      <p>The content shared on this website is for information purpose only and, thus, should not be considered as financial advice.<br>
         Trading/Investing (Including Cryptocurrencies) is risky and you should never invest more than you can afford to lose.<br>
          You alone assume the sole responsibility of evaluating the merits and risks associated with the use of any information<br>
           or other content on the site before making any decisions based on such information or other content. </p>

          </div>

          <div class="paragraph" style="padding:40px"></div>

          







<div class="paragraph" style="padding:130px"></div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>
