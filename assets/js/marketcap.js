!function(){function t(){a=window.jQuery.noConflict(!0),e()}function e(){function t(t,e){e=Math.pow(10,e);for(var a=["K","M","B","T"],i=a.length-1;i>=0;i--){var r=Math.pow(10,3*(i+1));if(r<=t){1e3==(t=Math.round(t*e/r)/e)&&i<a.length-1&&(t=1,i++),t+=""+a[i];break}}return t}function e(t,e){return"BTC"==e?i(t):r(t)}function i(t){return t=t>=1e3?Math.round(t).toLocaleString():t>=1?t.toFixed(8):t<1e-8?t.toPrecision(4):t.toFixed(8)}function r(t){return t=t>=1?t>=1e5?Math.round(t).toLocaleString():t.toFixed(2):t<1e-6?t.toPrecision(2):t.toFixed(6)}function n(t,e,a){var i=e,r={btc:"à¸¿",usd:"$",eur:"â‚¬",cny:"Â¥",gbp:"Â£",cad:"$",rub:"<img src='/static/img/fiat/ruble.gif'/>",hkd:"$",jpy:"Â¥",aud:"$",brl:"R$",inr:"â‚¹",krw:"â‚©",mxn:"$",idr:"Rp",chf:"Fr"};return t.toLowerCase()in r&&(i=r[t.toLowerCase()]+i),a&&(i=i+'<span style="font-size:9px;letter-spacing:2px;">'+t.toUpperCase()+"</span>"),i}function o(t,e,a,i,r,o,d,s){var c=0,l=0,p="",u="",h="";if(t&&c++,e&&c++,a&&c++,0==c)return"";if(1==c&&(l=100),2==c&&(l=49.8),3==c&&(l=33),t){borderWidth=0,(a||e)&&(borderWidth=1);p='       <ul><li><div><div style="text-align:left;width:'+l+"%;font-size:15px;margin-top:0;color:white;letter-spacing:2px;padding:12px 0;border-right:"+0+'px solid #E4E6EB;line-height:20px;"><span class="coinmarketcap" style="font-size: 22px;color:#fff;letter-spacing:2px">'+o+"</span><br><br></div></div></div></li></ul>"}if(a){borderWidth=0,e&&(borderWidth=1);u='           <ul><li><div><div style="text-align:left;;width:'+l+"%;font-size:15px;margin-top:0;color:white;letter-spacing:2px;padding:12px 0 0 0;border-right:"+0+'px solid #E4E6EB;line-height:20px;"><span class="coinmarketcap" style="font-size: 22px;color:#fff;letter-spacing:2px">'+n(r,d,i)+"</span><br><br></div></div></div></li></ul>"}if(e)h='                    <ul><li><div><div style="text-align:left;width:'+l+'%;font-size:15px;margin-top:0;color:white;letter-spacing:2px;padding:12px 0 0 0;line-height:1.25em;"><span class="coinmarketcap" style="font-size: 22px;color:#fff;letter-spacing:2px">'+n(r,s,i)+"</span><br><br></div></div></div></li></ul>";return detailedHTML='<div style="border-top: 0px solid #E4E6EB;clear:both;">'+p+u+h+"</div>",detailedHTML}function d(a,i,r,n,d,s,c,l,p,u,h,f,m,v,g,x,y){var b="#093";p<0&&(b="#d14836"),valTickerHTML=m?"("+r+")":"",valPrice=s?e(s,n):"?",valPercentHTML=p?'<span style="display:none;color:'+b+';">('+p+"%)":"",valMarketCap=u?t(u,2):"?",valVolume=h?t(h,2):"?",c?(mainLineHeight=25,valPriceSecondary=l?e(l,c):"?",secondaryHTML='<br><span style="display:none;font-size: 12px; color:#fff;">'+valPriceSecondary+" "+c+" </span>"):(mainLineHeight=30,secondaryHTML="");var w="utm_medium=widget&utm_campaign=cmcwidget&utm_source="+location.hostname+"&utm_content="+a,k='<div style="min-width:185px;">    <div style="display:none;">        <div style="display:none;text-align:left;padding:5px 0px; margin-bottom:0px;line-height:'+mainLineHeight+'px;">            <span style="display:none;font-size: 18px;"><a href="http://coinmarketcap.com/currencies/'+a+"/?"+w+'" target="_blank">'+i+" "+valTickerHTML+'</a></span> <br>            <span style="display:none;font-size: 22px;color:#fff;">'+valPrice+"<span style='font-size:9px'>"+n+"</span>"+valPercentHTML+"</span></span>            "+secondaryHTML+'        </div>        <div style="text-align:center;padding:5px 0px;width:33%; display:none;"></div>    </div>';return k+=o(v,g,x,y,d,f,valMarketCap,valVolume),k+='    <div style="display:none;text-align:center;clear:both;font-size:10px;font-style:italic;padding:5px 0;">        <a href="http://coinmarketcap.com?'+w+'" target="_blank">Powered by CoinMarketCap</a>    </div></div>'}a(document).ready(function(t){t(".coinmarketcap-currency-widget").each(function(){var e=t(this).attr("data-currency"),a=t(this).attr("data-base").toUpperCase(),i=t(this).attr("data-secondary");i=i?i.toUpperCase():null,i="BTC"==i||"USD"==i?i:null;var r=t(this).attr("data-stats");r=r?r.toUpperCase():null,r=r==a?a:"USD";var n=!1!==t(this).data("ticker"),o=!1!==t(this).data("rank"),s=!1!==t(this).data("marketcap"),c=!1!==t(this).data("volume"),l=!1!==t(this).data("statsticker"),p=this;t.get({url:"https://api.coinmarketcap.com/v1/ticker/"+e+"/?ref=widget&convert="+a,success:function(u){var h="price_"+a.toLowerCase(),f=i?"price_"+i.toLowerCase():null,m="market_cap_"+r.toLowerCase(),v="24h_volume_"+r.toLowerCase(),g=parseFloat(u[0][h]),x=f?parseFloat(u[0][f]):null,y=parseInt(u[0][m]),b=parseInt(u[0][v]),w=u[0].name,k=u[0].symbol,L=Number(u[0].percent_change_24h).toFixed(2),E=u[0].rank,M=d(e,w,k,a,r,g,i,x,L,y,b,E,n,o,c,s,l);t(p).html(M),t(p).find("a").css({"text-decoration":"none",color:"#428bca"})}})})})}var a;if(void 0===window.jQuery||"1.11.1"!==window.jQuery.fn.jquery){var i=document.createElement("script");i.setAttribute("type","text/javascript"),i.setAttribute("src","https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"),i.readyState?i.onreadystatechange=function(){"complete"!=this.readyState&&"loaded"!=this.readyState||t()}:i.onload=t,(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(i)}else a=window.jQuery,e()}();


!function(){function t(){a=window.jQuery.noConflict(!0),e()}function e(){function t(t,e){e=Math.pow(10,e);for(var a=["K","M","B","T"],i=a.length-1;i>=0;i--){var r=Math.pow(10,3*(i+1));if(r<=t){1e3==(t=Math.round(t*e/r)/e)&&i<a.length-1&&(t=1,i++),t+=""+a[i];break}}return t}function e(t,e){return"BTC"==e?i(t):r(t)}function i(t){return t=t>=1e3?Math.round(t).toLocaleString():t>=1?t.toFixed(8):t<1e-8?t.toPrecision(4):t.toFixed(8)}function r(t){return t=t>=1?t>=1e5?Math.round(t).toLocaleString():t.toFixed(2):t<1e-6?t.toPrecision(2):t.toFixed(6)}function n(t,e,a){var i=e,r={btc:"à¸¿",usd:"$",eur:"â‚¬",cny:"Â¥",gbp:"Â£",cad:"$",rub:"<img src='/static/img/fiat/ruble.gif'/>",hkd:"$",jpy:"Â¥",aud:"$",brl:"R$",inr:"â‚¹",krw:"â‚©",mxn:"$",idr:"Rp",chf:"Fr"};return t.toLowerCase()in r&&(i=r[t.toLowerCase()]+i),a&&(i=i+'<span style="font-size:9px;letter-spacing:2px;">'+t.toUpperCase()+"</span>"),i}function o(t,e,a,i,r,o,d,s){var c=0,l=0,p="",u="",h="";if(t&&c++,e&&c++,a&&c++,0==c)return"";if(1==c&&(l=100),2==c&&(l=49.8),3==c&&(l=33),t){borderWidth=0,(a||e)&&(borderWidth=1);p='       <ul><li><div><div style="text-align:left;width:'+l+"%;font-size:15px; color:white;letter-spacing:2px;padding:12px 0;border-right:"+0+'px solid #E4E6EB;line-height:20px;"><span class="coinmarketcap" style="font-size: 22px;color:#fff;letter-spacing:2px">'+o+"</span><br><br></div></div></div></li></ul>"}if(a){borderWidth=0,e&&(borderWidth=1);u='           <ul><li><div><div style="text-align:left;;width:'+l+"%;font-size:15px; color:white;letter-spacing:2px;padding:10px 0 0 0;border-right:"+0+'px solid #E4E6EB;line-height:20px;"><span style="font-size: 22px;color:#fff;letter-spacing:2px">'+n(r,d,i)+"</span><br><br></div></div></div></li></ul>"}if(e)h='                    <ul><li><div><div style="text-align:left;width:'+l+'%;font-size:15px; color:white;letter-spacing:2px;padding:10px 0 0 0;line-height:12px;"><span style="font-size: 22px;color:#fff;letter-spacing:2px">'+n(r,s,i)+"</span><br><br></div></div></div></li></ul>";return detailedHTML='<div style="border-top: 0px solid #E4E6EB;clear:both;">'+p+u+h+"</div>",detailedHTML}function d(a,i,r,n,d,s,c,l,p,u,h,f,m,v,g,x,y){var b="#093";p<0&&(b="#d14836"),valTickerHTML=m?"("+r+")":"",valPrice=s?e(s,n):"?",valPercentHTML=p?'<span style="display:none;color:'+b+';">('+p+"%)":"",valMarketCap=u?t(u,2):"?",valVolume=h?t(h,2):"?",c?(mainLineHeight=25,valPriceSecondary=l?e(l,c):"?",secondaryHTML='<br><span class="btc-price" style="color:#fff;line-height: 34px;">'+valPriceSecondary+" "+c+"</span>"):(mainLineHeight=30,secondaryHTML="");var w="utm_medium=widget&utm_campaign=cmcwidget&utm_source="+location.hostname+"&utm_content="+a,k='<div style="min-width:158px;">    <div>        <div style="text-align:left;padding:3px 0px; margin-bottom:0px;line-height:12px;">            <span style="display:none;font-size: 18px;"><a href="http://coinmarketcap.com/currencies/'+a+"/?"+w+'" target="_blank">'+i+" "+valTickerHTML+'</a></span> <br>            <span class="coinmarketcap" style="font-size: 22px; color:#fff;">'+valPrice+"<span class='coinmarketcap-sm' style='font-size:9px;letter-spacing:2px; margin-left:3px'>"+n+"</span>"+valPercentHTML+"</span></span>            "+secondaryHTML+'        </div>        <div style="text-align:center;padding:5px 0px;width:33%; display:none;"></div>    </div>';return k+=o(v,g,x,y,d,f,valMarketCap,valVolume),k+='    <div style="display:none;text-align:center;clear:both;font-size:10px;font-style:italic;padding:5px 0;">        <a href="http://coinmarketcap.com?'+w+'" target="_blank">Powered by CoinMarketCap</a>    </div></div>'}a(document).ready(function(t){t(".coinmarketcap-currency-wig").each(function(){var e=t(this).attr("data-currency"),a=t(this).attr("data-base").toUpperCase(),i=t(this).attr("data-secondary");i=i?i.toUpperCase():null,i="BTC"==i||"USD"==i?i:null;var r=t(this).attr("data-stats");r=r?r.toUpperCase():null,r=r==a?a:"USD";var n=!1!==t(this).data("ticker"),o=!1!==t(this).data("rank"),s=!1!==t(this).data("marketcap"),c=!1!==t(this).data("volume"),l=!1!==t(this).data("statsticker"),p=this;t.get({url:"https://api.coinmarketcap.com/v1/ticker/"+e+"/?ref=widget&convert="+a,success:function(u){var h="price_"+a.toLowerCase(),f=i?"price_"+i.toLowerCase():null,m="market_cap_"+r.toLowerCase(),v="24h_volume_"+r.toLowerCase(),g=parseFloat(u[0][h]),x=f?parseFloat(u[0][f]):null,y=parseInt(u[0][m]),b=parseInt(u[0][v]),w=u[0].name,k=u[0].symbol,L=Number(u[0].percent_change_24h).toFixed(2),E=u[0].rank,M=d(e,w,k,a,r,g,i,x,L,y,b,E,n,o,c,s,l);t(p).html(M),t(p).find("a").css({"text-decoration":"none",color:"#428bca"})}})})})}var a;if(void 0===window.jQuery||"1.11.1"!==window.jQuery.fn.jquery){var i=document.createElement("script");i.setAttribute("type","text/javascript"),i.setAttribute("src","https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"),i.readyState?i.onreadystatechange=function(){"complete"!=this.readyState&&"loaded"!=this.readyState||t()}:i.onload=t,(document.getElementsByTagName("head")[0]||document.documentElement).appendChild(i)}else a=window.jQuery,e()}();