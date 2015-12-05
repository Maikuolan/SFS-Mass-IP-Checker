/*
 SFS MASS IP Checker v0.0.3-ALPHA
 This File: SFS MASS IP Checker Javascript File (6th December 2015).

                                     ~ ~ ~
 This document and its associated package can be downloaded for free from:
 - GitHub <https://github.com/Maikuolan/SFS-Mass-IP-Checker>.

*/

var ns4=document.layers,ie4=document.all&&!document.getElementById,ie5=document.all&&document.getElementById,ns6=!document.all&&document.getElementById,errormsg='An error occurred.';function show(b){ns4?document.layers[b].display="inline":ie4?document.all[b].style.display="inline":ie5||ns6?document.getElementById(b).style.display="inline":alert(errormsg)}function hide(b){ns4?document.layers[b].display="none":ie4?document.all[b].style.display="none":ie5||ns6?document.getElementById(b).style.display="none":alert(errormsg)}function SubmitForm(b){eval("document."+b+";")?eval("document."+b+".submit();"):alert(errormsg)}