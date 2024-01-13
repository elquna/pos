function sessionchecker(message)
{
	if(message == 'expired session, please log in again')
  {
      window.location.href = site;
  }
}


function doXHREvents(xmls)
{

      xmls.onloadstart = function (e)
      {
        document.getElementById("loader").style.display = 'block';

      }
      xmls.onloadend = function (e)
      {
          document.getElementById("loader").style.display = 'none';

      }
      xmls.onerror = function() {
      alert("The Network is Bad and Request failed, Sorry about that");
        document.getElementById("loader").style.display = 'none';
      }
}



function ReportError(msg, area)
{
		document.getElementById(area).innerHTML = msg;
		setTimeout(function (){ document.getElementById(area).innerHTML = ''}, 4000);
    return;
}


function formforproduct()
{
  
  /*var zone = document.getElementById('zone').value;
  if(zone == ''){ReportError('zone is required','errorformobile') ; return;}*/

  var url = site + "/admin/formforproduct";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("GET", url, true);

  /*fd = new FormData();
  fd.append("name",zone);*/

   xml.setRequestHeader("X-CSRF-TOKEN", t);
    xml.onreadystatechange = function()
    {
        if(xml.status == 419)
        {
          location.reload();
        }
       if(xml.readyState == 4 && xml.status == 200)
       {
           document.getElementById("contents").innerHTML = xml.responseText;
       }

    }
    xml.send();
}






