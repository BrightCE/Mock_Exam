/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function starttest()
{
    var subj = getSubject();
    if(subj == "")
        { alert('Please select a test subject.')
            return false
        }
    display_title(subj);
    document.getElementById('testbox').innerHTML= "<img src= 'images/loader.gif' alt=''>"
    handle = setTimeout("test('No','No','Yes')", 300000)
    params  = "start="+"Yes"+"&subject="+subj
    request = new ajaxRequest()
    request.open("POST", "demo.php", true)
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    request.setRequestHeader("Content-length", params.length)
    request.setRequestHeader("Connection", "close")

    request.onreadystatechange = function()
    {
        if (this.readyState == 4)
            if (this.status == 200)
                if (this.responseText != null)
                    result= this.responseText
              dynamiccontentNS6('testbox',result)

    }
    request.send(params)
}

function test(next,back,end)
{
      var option = getAnswerValue()
      document.getElementById('testbox').innerHTML= "<img src= 'images/loader.gif' alt=''>"
    params  = "next="+next+"&back="+back+"&end="+end+"&option="+option
    request = new ajaxRequest()
    request.open("POST", "demo.php", true)
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
    request.setRequestHeader("Content-length", params.length)
    request.setRequestHeader("Connection", "close")

    request.onreadystatechange = function()
    {
        if (this.readyState == 4)
            if (this.status == 200)
                if (this.responseText != null)
                   result= this.responseText
              dynamiccontentNS6('testbox',result)
    }
    request.send(params)
}

function ajaxRequest()
{
    try { var request = new XMLHttpRequest() }
    catch(e1) {
        try { request = new ActiveXObject("Msxml2.XMLHTTP") }
        catch(e2) {
            try { request = new ActiveXObject("Microsoft.XMLHTTP") }
            catch(e3) {
                request = false
    }   }   }
    return request
}

function getAnswerValue()
    {
        var option = document.getElementsByName("answer")
        for(var i =0; i<option.length; ++i)
            {
                if(option[i].checked)
                    {
                        var result = option[i].value ;
                        return result;
                    }
            }
            return '';
    }

function getSubject()
    {
        var option = document.getElementsByName("subject")
        for(var i =0; i<option.length; ++i)
            {
                if(option[i].checked)
                    {
                        var result = option[i].value ;
                        return result;
                    }
            }
            return '';
    }

function dynamiccontentNS6(elementid,content)
    {

        if (document.getElementById && !document.all)
            {
                rng = document.createRange();
                el = document.getElementById(elementid);
                rng.setStartBefore(el);
                htmlFrag = rng.createContextualFragment(content);
                while (el.hasChildNodes())
                el.removeChild(el.lastChild);
                el.appendChild(htmlFrag);
            }
    }

function display_title(subject)
    {
        var tsubj = subject.toUpperCase();
        var mesg = "<h2>Demo test on: "+tsubj+" </h2><div class='clear30'></div>"
        document.getElementById('t_name').innerHTML = mesg;
    }

function clear_name()
    {
        document.getElementById('t_name').innerHTML ="";
    }