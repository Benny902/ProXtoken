function toggleDiv(divid)
  {
 
    var1 = divid + '1';
    var2 = divid + '2';
    var3 = divid + '3';
    var4 = divid + '4';
 
    if(document.getElementById(var1).style.display == 'block') {
        document.getElementById(var1).style.display = 'none';
        document.getElementById(var2).style.display = 'block';
        document.getElementById(var3).style.display = 'none';
        document.getElementById(var4).style.display = 'none';
      }
   
    else if(document.getElementById(var2).style.display == 'block') {
        document.getElementById(var1).style.display = 'none';
        document.getElementById(var2).style.display = 'none';
        document.getElementById(var3).style.display = 'block';
        document.getElementById(var4).style.display = 'none';
      }
    else if(document.getElementById(var3).style.display == 'block') {
      document.getElementById(var1).style.display = 'none';
      document.getElementById(var2).style.display = 'none';
      document.getElementById(var3).style.display = 'none';
      document.getElementById(var4).style.display = 'block';
    }
    
    else
    {  
      document.getElementById(var1).style.display = 'block';
      document.getElementById(var2).style.display = 'none';
      document.getElementById(var3).style.display = 'none';
      document.getElementById(var4).style.display = 'none';
    }
} 

function toggleDiv2(divid)
  {
 
    varon = divid + 'on';
    varoff = divid + 'off';
 
    if(document.getElementById(varon).style.display == 'block')
    {
    document.getElementById(varon).style.display = 'none';
    document.getElementById(varoff).style.display = 'block';
    }
   
    else
    {  
    document.getElementById(varoff).style.display = 'none';
    document.getElementById(varon).style.display = 'block'
    }
} 