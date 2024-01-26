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


function formforuser()
{
  var url = site + "/admin/formforuser";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("GET", url, true);

  doXHREvents(xml)
   xml.setRequestHeader("X-CSRF-TOKEN", t);
    xml.onreadystatechange = function()
    {
        if(xml.status == 419)
        {
          location.reload();
        }
       if(xml.readyState == 4 && xml.status == 200)
       {
            sessionchecker(xml.responseText);
           document.getElementById("contents").innerHTML = xml.responseText;
       }

    }
    xml.send();
}



function processAddNewUser()
{
 
  var firstname = document.getElementById('firstname').value;
  if(firstname == ''){ReportError('firstname is required','err') ; return;}

  var lastname = document.getElementById('lastname').value;
  if(lastname == ''){ReportError('lastname is required','err') ; return;}

  var email = document.getElementById('email').value;
  if(email == ''){ReportError('email is required','err') ; return;}

  var password = document.getElementById('password').value;
  if(password == ''){ReportError('firstname is required','err') ; return;}

  var phone = document.getElementById('phone').value;
  if(phone == ''){ReportError('phone is required','err') ; return;}

  var address = document.getElementById('address').value;

  var password2 = document.getElementById('password2').value;
  if(password != password2){ReportError('passwords do not match','err') ; return;}


  var url = site + "/admin/processaddnewuser";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);

  fd = new FormData();
  fd.append("firstname",firstname);
  fd.append("lastname",lastname);
  fd.append("password",password);
  fd.append("address",address);
  fd.append("phone",phone);
  fd.append("email",email);

   xml.setRequestHeader("X-CSRF-TOKEN", t);
   doXHREvents(xml);
    xml.onreadystatechange = function()
    {
        if(xml.status == 419)
        {
          location.reload();
        }
       if(xml.readyState == 4 && xml.status == 200)
       {
        sessionchecker(xml.responseText);
           //document.getElementById("contents").innerHTML = xml.responseText;
           viewusers()
       }

    }
    xml.send(fd);
}


function viewusers()
{
  var url = site + "/admin/viewusers";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("GET", url, true);

  doXHREvents(xml)
   xml.setRequestHeader("X-CSRF-TOKEN", t);
    xml.onreadystatechange = function()
    {
        if(xml.status == 419)
        {
          location.reload();
        }
       if(xml.readyState == 4 && xml.status == 200)
       {
           sessionchecker(xml.responseText);
           document.getElementById("contents").innerHTML = xml.responseText;
       }

    }
    xml.send();
}


function addCat()
{
  var url = site + "/admin/addcat";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("GET", url, true);

  doXHREvents(xml)
   xml.setRequestHeader("X-CSRF-TOKEN", t);
    xml.onreadystatechange = function()
    {
        if(xml.status == 419)
        {
          location.reload();
        }
       if(xml.readyState == 4 && xml.status == 200)
       {
           sessionchecker(xml.responseText);
           document.getElementById("contents").innerHTML = xml.responseText;
       }

    }
    xml.send();
}


function processAddcategory()
{
  var cat = document.getElementById('cat').value;
  if(cat == ''){ReportError('category is required','err') ; return;}

  var url = site + "/admin/processaddcategory";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);

  fd = new FormData();
  fd.append("cat",cat);

   xml.setRequestHeader("X-CSRF-TOKEN", t);
   doXHREvents(xml);
    xml.onreadystatechange = function()
    {
        if(xml.status == 419)
        {
          location.reload();
        }
       if(xml.readyState == 4 && xml.status == 200)
       {
        sessionchecker(xml.responseText);
           //document.getElementById("contents").innerHTML = xml.responseText;
           viewCat();
       }

    }
    xml.send(fd);
}


function viewCat()
{
  var url = site + "/admin/viewcat";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("GET", url, true);

  doXHREvents(xml)
   xml.setRequestHeader("X-CSRF-TOKEN", t);
    xml.onreadystatechange = function()
    {
        if(xml.status == 419)
        {
          location.reload();
        }
       if(xml.readyState == 4 && xml.status == 200)
       {
           sessionchecker(xml.responseText);
           document.getElementById("contents").innerHTML = xml.responseText;
       }

    }
    xml.send();
}


function addProductForm()
{
  var url = site + "/admin/addproductform";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("GET", url, true);

  doXHREvents(xml)
   xml.setRequestHeader("X-CSRF-TOKEN", t);
    xml.onreadystatechange = function()
    {
        if(xml.status == 419)
        {
          location.reload();
        }
       if(xml.readyState == 4 && xml.status == 200)
       {
           sessionchecker(xml.responseText);
           document.getElementById("contents").innerHTML = xml.responseText;
       }

    }
    xml.send();
}


function ProcessAddProduct()
{
  var name = document.getElementById('name').value;
  if(name == ''){ReportError('Product Name is required','err') ; return;}

  var catid = document.getElementById('catid').value;
  if(catid == ''){ReportError('Category is required','err') ; return;}


  var price = Number(document.getElementById('price').value);
  if(price == ''){ReportError('Price is required','err') ; return;}

  var price = Number(document.getElementById('price').value);
  if(isNaN(price)){ReportError('Price must be a number','err') ; return;}

  var url = site + "/admin/processaddproduct";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);

  fd = new FormData();
  fd.append("name",name);
  fd.append("catid",catid);
  fd.append("price",price);
  

   xml.setRequestHeader("X-CSRF-TOKEN", t);
   doXHREvents(xml);
    xml.onreadystatechange = function()
    {
        if(xml.status == 419)
        {
          location.reload();
        }
       if(xml.readyState == 4 && xml.status == 200)
       {
        sessionchecker(xml.responseText);
           //document.getElementById("contents").innerHTML = xml.responseText;
           viewProducts();
       }

    }
    xml.send(fd);
}


function  viewProducts()
{
  var url = site + "/admin/viewproducts";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("GET", url, true);

  doXHREvents(xml)
   xml.setRequestHeader("X-CSRF-TOKEN", t);
    xml.onreadystatechange = function()
    {
        if(xml.status == 419)
        {
          location.reload();
        }
       if(xml.readyState == 4 && xml.status == 200)
       {
           sessionchecker(xml.responseText);
           document.getElementById("contents").innerHTML = xml.responseText;
           $('#myTable').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
       }

    }
    xml.send();
}