function sendFunction() {
  var x = document.getElementById("send");
  x.className = "show";
  document.getElementById("msg").disabled = true;
  document.getElementById("msgbtn").disabled = true;
  setTimeout(function()
  { 
      x.className = x.className.replace("show", "");
      document.getElementById("msg").disabled = false;
      document.getElementById("msgbtn").disabled = false; 
      document.getElementById("msg").value = "";}, 3000);

}
function unsendFunction() {
  var x = document.getElementById("senderror");
  x.className = "show";
  document.getElementById("msg").disabled = true;
  document.getElementById("msgbtn").disabled = true;
  setTimeout(function()
  { 
      x.className = x.className.replace("show", "");
      document.getElementById("msg").disabled = false;
      document.getElementById("msgbtn").disabled = false; }, 3000);
}


