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

  
  if(isNaN(price)){ReportError('Price must be a number','err') ; return;}
  if(price < 1){ReportError('Price must be greater than 0','err') ; return;}

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
                'copy', 'csv', 'excel', 'print'
            ]
        } );
       }

    }
    xml.send();
}


function addstockform()
{
  var url = site + "/admin/addstockform";
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
           $('#productid').select2();
       }

    }
    xml.send();
}


function ProcessAddStock()
{
  var productid = document.getElementById('productid').value;
  if(productid == ''){ReportError('Product  is required','err') ; return;}

  
  var quantity = Number(document.getElementById('quantity').value);
  if(quantity == ''){ReportError('Price is required','err') ; return;}

  if(isNaN(quantity)){ReportError('Quantity must be a number','err') ; return;}


  if(quantity < 1){ReportError('Quantity must be greater than 0','err') ; return;}

  var url = site + "/admin/processaddstock";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);

  fd = new FormData();
  
  fd.append("productid",productid);
  fd.append("quantity",quantity);
  

   xml.setRequestHeader("X-CSRF-TOKEN", t);
   doXHREvents(xml);
   document.getElementById("bttn").style.display = "none";
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
           viewStocks();
       }

    }
    xml.send(fd);
}

function viewStocks()
{
  var url = site + "/admin/viewstocks";
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
                'copy', 'csv', 'excel', 'print'
            ]
        } );
       }

    }
    xml.send();
}

function viewstockavailable()
{
  var url = site + "/admin/viewstocksavailable";
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
                'copy', 'csv', 'excel', 'print'
            ]
        } );
       }

    }
    xml.send();
}


function makesales()
{
  var url = site + "/admin/makesales";
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
           $('#productid').select2();
       }

    }
    xml.send();
}


function showAProductDuringSale(id)
{
  var url = site + "/admin/showaproductduringsale";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);

  fd = new FormData();
  fd.append("productid",id);

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
           document.getElementById("productzone").innerHTML = xml.responseText;
           
       }

    }
    xml.send(fd);
}

function processAddTocart(id)
{
  var url = site + "/admin/processaddtocart";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);

  var qty = Number(document.getElementById("qty").value);
  var serial = document.getElementById("serial").value;

  if(isNaN(qty))
  {
    document.getElementById("err").innerHTML = "Quantity is needed";
    return;
  }

  if(qty == 0)
  {
    document.getElementById("err").innerHTML = "Quantity is needed";
    return;
  }

  fd = new FormData();
  fd.append("productid",id);
  fd.append("qty",qty);
  fd.append("serial",serial);

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
           document.getElementById("order").innerHTML = xml.responseText;
           document.getElementById("productzone").innerHTML = "";
           
       }

    }
    xml.send(fd);
}


function calculatesubtotal()
{
  var qty = Number(document.getElementById("qty").value);
  pr  = Number(document.getElementById("pr").value);

  var total = qty * pr;
  document.getElementById("sub").value = total;
  

}




function scann(events,thi)
{
  events.preventDefault(); // Prevent the form from submitting
  events.stopImmediatePropagation();
  events.stopImmediatePropagation();

  var rcode = document.getElementById("rcode").value;
  var len =  rcode.length;

  var url = site + "/admin/showaproductduringsalewithcode";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);

  fd = new FormData();
  fd.append("rcode",rcode);

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
           document.getElementById("productzone").innerHTML = xml.responseText;
           document.getElementById("rcode").value = "";
           
       }

    }
    xml.send(fd);
  

}


function processcheckout()
{
  

  var serial = document.getElementById("serial").value;
  var customer_name = document.getElementById("customer_name").value;
  var phone = document.getElementById("phone").value;
  var address = document.getElementById("address").value;
  var paymentmethod = document.getElementById("paymentmethod").value;

  if(paymentmethod == "Payment Method")
  {
    alert("Plese select payment method"); return;
  }
  

  var url = site + "/admin/processcheckout";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);

  fd = new FormData();
  fd.append("serial",serial);
  fd.append("customer_name",customer_name);
  fd.append("address",address);
  fd.append("paymentmethod",paymentmethod);
  fd.append("phone",phone);

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
           document.getElementById("productzone").innerHTML = xml.responseText;
           document.getElementById("rcode").value = "";
           window.location.href= site + "/pos/print/" + serial;
           
       }

    }
    xml.send(fd);
  
}

function deleteFromcart(id,cartsession)
{

  var url = site + "/admin/deletefromcart";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);

  fd = new FormData();
  fd.append("id",id);
  fd.append("cartsession",cartsession)

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
           document.getElementById("order").innerHTML = xml.responseText;
           document.getElementById("productzone").innerHTML = "";
           
       }

    }
    xml.send(fd);
}

function saleshistory()
{
  var url = site + "/admin/saleshistory";
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
                'copy', 'csv', 'excel', 'print'
            ]
        } );
       }

    }
    xml.send();
}


function flexiblehistory()
{
  var url = site + "/admin/flexiblehistory";
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
                'copy', 'csv', 'excel', 'print'
            ]
        } );
       }

    }
    xml.send();
}


function doflexiblesearch()
{
  var enddate = document.getElementById("enddate").value;
  var startdate = document.getElementById("startdate").value

  if(enddate == "" || startdate == "")
  {
    alert("Plese provide Start date and end date"); return;
  }


  var url = site + "/admin/doflexiblesearch";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);

  fd = new FormData();
  fd.append("enddate",enddate);
  fd.append("startdate", startdate)

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
           document.getElementById("reloadd").innerHTML = xml.responseText;
           $('#myTable').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'print'
            ]
        } );
           
       }

    }
    xml.send(fd);
}


function openEdit(slug)
{
  var url = site + "/admin/openproducttoedit/" + slug;
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

function ProcessEditProduct(id)
{
  var name = document.getElementById('name').value;
  if(name == ''){ReportError('Product Name is required','err') ; return;}

 
  var price = Number(document.getElementById('price').value);
  if(price == ''){ReportError('Price is required','err') ; return;}

  
  if(isNaN(price)){ReportError('Price must be a number','err') ; return;}
  if(price < 1){ReportError('Price must be greater than 0','err') ; return;}

  var url = site + "/admin/processeditproduct";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);

  fd = new FormData();
  fd.append("name",name);
  fd.append("id",id);
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


function removestockform()
{
  var url = site + "/admin/removestockform";
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
           $('#productid').select2();
       }

    }
    xml.send();
}


function ProcessRemoveStock()
{
  var productid = document.getElementById('productid').value;
  if(productid == ''){ReportError('Product  is required','err') ; return;}

  
  var quantity = Number(document.getElementById('quantity').value);
  if(quantity == ''){ReportError('Price is required','err') ; return;}

  if(isNaN(quantity)){ReportError('Quantity must be a number','err') ; return;}


  if(quantity < 1){ReportError('Quantity must be greater than 0','err') ; return;}

  var url = site + "/admin/processremovestock";
  var xml = new XMLHttpRequest();
  var t = document.getElementById('t_').value;
  var xml = new XMLHttpRequest();
  xml.open("POST", url, true);

  fd = new FormData();
  
  fd.append("productid",productid);
  fd.append("quantity",quantity);
  

   xml.setRequestHeader("X-CSRF-TOKEN", t);
   doXHREvents(xml);
   document.getElementById("bttn").style.display = "none";
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
           //viewStocks();
       }

    }
    xml.send(fd);
}


function activitylog()
{
  var url = site + "/admin/activitylog";
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
                'copy', 'csv', 'excel', 'print'
            ]
        } );
       }

    }
    xml.send();
}


function viewitemsinsales(id)
{
  var url = site + "/admin/viewitemsinsales/" + id;
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
           document.getElementById("openzone").style.display = "block";
           document.getElementById("openzone").innerHTML = xml.responseText;
       }

    }
    xml.send();
}

function closeopenzone()
{
  document.getElementById("openzone").style.display = "none";
}

