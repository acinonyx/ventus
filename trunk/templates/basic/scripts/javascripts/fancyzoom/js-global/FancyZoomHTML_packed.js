function insertZoomHTML(){var k=document.getElementsByTagName("body").item(0);var G=document.createElement("div");G.setAttribute("id","ZoomSpin");G.style.position="absolute";G.style.left="10px";G.style.top="10px";G.style.visibility="hidden";G.style.zIndex="525";k.insertBefore(G,k.firstChild);var s=document.createElement("img");s.setAttribute("id","SpinImage");s.setAttribute("src",zoomImagesURI+"zoom-spin-1.png");G.appendChild(s);var j=document.createElement("div");j.setAttribute("id","ZoomBox");j.style.position="absolute";j.style.left="10px";j.style.top="10px";j.style.visibility="hidden";j.style.zIndex="499";k.insertBefore(j,G.nextSibling);var t=document.createElement("img");t.onclick=function(N){zoomOut(this,N);return false};t.setAttribute("src",zoomImagesURI+"spacer.gif");t.setAttribute("id","ZoomImage");t.setAttribute("border","0");t.setAttribute("style","-webkit-box-shadow: "+shadowSettings+"0.0)");t.style.display="block";t.style.width="10px";t.style.height="10px";t.style.cursor="pointer";j.appendChild(t);var p=document.createElement("div");p.setAttribute("id","ZoomClose");p.style.position="absolute";if(browserIsIE){p.style.left="-1px";p.style.top="0px"}else{p.style.left="-15px";p.style.top="-15px"}p.style.visibility="hidden";j.appendChild(p);var q=document.createElement("img");q.onclick=function(N){zoomOut(this,N);return false};q.setAttribute("src",zoomImagesURI+"closebox.png");q.setAttribute("width","30");q.setAttribute("height","30");q.setAttribute("border","0");q.style.cursor="pointer";p.appendChild(q);if(!document.getElementById("ZoomImage").style.webkitBoxShadow&&!browserIsIE){var o=document.createElement("div");o.setAttribute("id","ShadowBox");o.style.position="absolute";o.style.left="50px";o.style.top="50px";o.style.width="100px";o.style.height="100px";o.style.visibility="hidden";o.style.zIndex="498";k.insertBefore(o,j.nextSibling);var r=document.createElement("table");r.setAttribute("border","0");r.setAttribute("width","100%");r.setAttribute("height","100%");r.setAttribute("cellpadding","0");r.setAttribute("cellspacing","0");o.appendChild(r);var d=document.createElement("tbody");r.appendChild(d);var n=document.createElement("tr");n.style.height="25px";d.appendChild(n);var K=document.createElement("td");K.style.width="27px";n.appendChild(K);var D=document.createElement("img");D.setAttribute("src",zoomImagesURI+"zoom-shadow1.png");D.setAttribute("width","27");D.setAttribute("height","25");D.style.display="block";K.appendChild(D);var J=document.createElement("td");J.setAttribute("background",zoomImagesURI+"zoom-shadow2.png");n.appendChild(J);var c=document.createElement("img");c.setAttribute("src",zoomImagesURI+"spacer.gif");c.setAttribute("height","1");c.setAttribute("width","1");c.style.display="block";J.appendChild(c);var I=document.createElement("td");I.style.width="27px";n.appendChild(I);var A=document.createElement("img");A.setAttribute("src",zoomImagesURI+"zoom-shadow3.png");A.setAttribute("width","27");A.setAttribute("height","25");A.style.display="block";I.appendChild(A);inRow2=document.createElement("tr");d.appendChild(inRow2);var H=document.createElement("td");H.setAttribute("background",zoomImagesURI+"zoom-shadow4.png");inRow2.appendChild(H);var b=document.createElement("img");b.setAttribute("src",zoomImagesURI+"spacer.gif");b.setAttribute("height","1");b.setAttribute("width","1");b.style.display="block";H.appendChild(b);var F=document.createElement("td");F.setAttribute("bgcolor","#ffffff");inRow2.appendChild(F);var a=document.createElement("img");a.setAttribute("src",zoomImagesURI+"spacer.gif");a.setAttribute("height","1");a.setAttribute("width","1");a.style.display="block";F.appendChild(a);var E=document.createElement("td");E.setAttribute("background",zoomImagesURI+"zoom-shadow5.png");inRow2.appendChild(E);var M=document.createElement("img");M.setAttribute("src",zoomImagesURI+"spacer.gif");M.setAttribute("height","1");M.setAttribute("width","1");M.style.display="block";E.appendChild(M);var m=document.createElement("tr");m.style.height="26px";d.appendChild(m);var C=document.createElement("td");C.style.width="27px";m.appendChild(C);var y=document.createElement("img");y.setAttribute("src",zoomImagesURI+"zoom-shadow6.png");y.setAttribute("width","27");y.setAttribute("height","26");y.style.display="block";C.appendChild(y);var B=document.createElement("td");B.setAttribute("background",zoomImagesURI+"zoom-shadow7.png");m.appendChild(B);var L=document.createElement("img");L.setAttribute("src",zoomImagesURI+"spacer.gif");L.setAttribute("height","1");L.setAttribute("width","1");L.style.display="block";B.appendChild(L);var z=document.createElement("td");z.style.width="27px";m.appendChild(z);var x=document.createElement("img");x.setAttribute("src",zoomImagesURI+"zoom-shadow8.png");x.setAttribute("width","27");x.setAttribute("height","26");x.style.display="block";z.appendChild(x)}if(includeCaption){var f=document.createElement("div");f.setAttribute("id","ZoomCapDiv");f.style.position="absolute";f.style.visibility="hidden";f.style.marginLeft="auto";f.style.marginRight="auto";f.style.zIndex="501";k.insertBefore(f,j.nextSibling);var h=document.createElement("table");h.setAttribute("border","0");h.setAttribute("cellPadding","0");h.setAttribute("cellSpacing","0");f.appendChild(h);var l=document.createElement("tbody");h.appendChild(l);var i=document.createElement("tr");l.appendChild(i);var w=document.createElement("td");w.setAttribute("align","right");i.appendChild(w);var g=document.createElement("img");g.setAttribute("src",zoomImagesURI+"zoom-caption-l.png");g.setAttribute("width","13");g.setAttribute("height","26");g.style.display="block";w.appendChild(g);var v=document.createElement("td");v.setAttribute("background",zoomImagesURI+"zoom-caption-fill.png");v.setAttribute("id","ZoomCaption");v.setAttribute("valign","middle");v.style.fontSize="14px";v.style.fontFamily="Helvetica";v.style.fontWeight="bold";v.style.color="#ffffff";v.style.textShadow="0px 2px 4px #000000";v.style.whiteSpace="nowrap";i.appendChild(v);var u=document.createElement("td");i.appendChild(u);var e=document.createElement("img");e.setAttribute("src",zoomImagesURI+"zoom-caption-r.png");e.setAttribute("width","13");e.setAttribute("height","26");e.style.display="block";u.appendChild(e)}};