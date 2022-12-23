$(function () {


    
    var bar = '';
    bar += '<div>'; 
    bar += '<nav class="navbar navbar-default" role="navigation">';

    bar += '<div class="navbar">';
       bar += '<a class="navbar-brand" href="#HOME"><img src="media/prox500new.png" alt="icon" style="max-width: 50px; max-height: 50x"></img></a></a>';
       bar += '<div class="dropdown2">';
         bar += '<a style ="text-decoration:none" href="#HOME"><button class="dropbtn2"><b>HOME&nbsp;⁝</b></a></button>';
         bar += '<div class="dropdown-content2">';
         bar += '<a href="#BUY"><b>BUY PROX</b></a>';
           bar += '<a href="#UTILITIES"><b>UTILITIES</b></a>';
           bar += '<a href="#TOKENOMICS"><b>TOKENOMICS</b></a>';
           bar += '<a href="#TEAM"><b>TEAM</b></a>';
           bar += '<a href="#ROADMAP"><b>ROADMAP</b></a>';
           bar += '</div>';
         bar += '</div>';
       bar += '<a href="pages/nft"><b>NFT</b></a>';
       bar += ' <a href="pages/dashboard"><b>DASHBOARD</b></a>';
       bar += '<a href="pages/whitepaper"><b>WHITEPAPER</b></a>';
       bar += '<a href="pages/xclub"><b>X-CLUB</b></a>';
       bar += '<div class="dropdown">';
         bar += '<button class="dropbtn"><b>MORE&nbsp;⁝</b></button>';
         bar += '<div class="dropdown-content">';
         bar += '<a href="pages/xclubdrops"><b>XCLUB&nbsp;DROPS</b></a>';
           bar += '<a href="pages/pastamas"><b>PAST&nbsp;AMAS</b></a>';
           bar += '<a href="pages/calculator"><b>CALCULATOR</b></a>';
           bar += '</div>';
         bar += '</div> ';
       
       bar += '<a class="navbar-brand" href="mailto: contact@proxtoken.com"><img src="media/email.png" alt="img" style="max-width: 25px; max-height: 25x"></img></a>';
       bar += '<a class="navbar-brand" href="https://t.me/proxtoken"><img src="media/telegram.png" alt="img" style="max-width: 25px; max-height: 25x"></img></a>';
       bar += '<a class="navbar-brand" href="https://twitter.com/ProXtoken"><img src="media/twitter logo.png" alt="img" style="max-width: 25px; max-height: 25x"></img></a>';
       bar += '<a class="navbar-brand" href="https://www.youtube.com/channel/UCJnqnm0BlcJOdtFDpt3vgrg"><img src="media/youtube.png" alt="img" style="max-width: 25px; max-height: 25x"></img></a>';
       bar += '<a class="navbar-brand" href="https://discord.gg/X5FB2bXb7T"><img src="media/discord.png" alt="img" style="max-width: 25px; max-height: 25x"></img></a>';
       bar += '</div>';


    bar += '</nav>';
 
    $("#main-bar").html(bar);
 
    var id = getValueByName("id");
    $("#" + id).addClass("active");
});
 
function getValueByName(name) {
    var url = document.getElementById('nav-bar').getAttribute('src');
    var param = new Array();
    if (url.indexOf("?") != -1) {
        var source = url.split("?")[1];
        items = source.split("&");
        for (var i = 0; i < items.length; i++) {
            var item = items[i];
            var parameters = item.split("=");
            if (parameters[0] == "id") {
                return parameters[1];
            }
        }
    }
}