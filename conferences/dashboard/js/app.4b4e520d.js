(function(e){function t(t){for(var r,o,i=t[0],c=t[1],l=t[2],d=0,p=[];d<i.length;d++)o=i[d],Object.prototype.hasOwnProperty.call(s,o)&&s[o]&&p.push(s[o][0]),s[o]=0;for(r in c)Object.prototype.hasOwnProperty.call(c,r)&&(e[r]=c[r]);u&&u(t);while(p.length)p.shift()();return a.push.apply(a,l||[]),n()}function n(){for(var e,t=0;t<a.length;t++){for(var n=a[t],r=!0,i=1;i<n.length;i++){var c=n[i];0!==s[c]&&(r=!1)}r&&(a.splice(t--,1),e=o(o.s=n[0]))}return e}var r={},s={app:0},a=[];function o(t){if(r[t])return r[t].exports;var n=r[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,o),n.l=!0,n.exports}o.m=e,o.c=r,o.d=function(e,t,n){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},o.r=function(e){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"===typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)o.d(n,r,function(t){return e[t]}.bind(null,r));return n},o.n=function(e){var t=e&&e.__esModule?function(){return e["default"]}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="";var i=window["webpackJsonp"]=window["webpackJsonp"]||[],c=i.push.bind(i);i.push=t,i=i.slice();for(var l=0;l<i.length;l++)t(i[l]);var u=c;a.push([0,"chunk-vendors"]),n()})({0:function(e,t,n){e.exports=n("56d7")},1:function(e,t){},"24eb":function(e,t,n){},"56d7":function(e,t,n){"use strict";n.r(t);n("cadf"),n("551c"),n("f751"),n("097d");var r=n("2b0e"),s=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{attrs:{id:"app"}},[n("router-view")],1)},a=[],o=(n("7c55"),n("2877")),i={},c=Object(o["a"])(i,s,a,!1,null,null,null),l=c.exports,u=n("8c4f"),d=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"home"},[n("Explorer",{attrs:{node:this.$route.query.node,es:this.$route.query.es}})],1)},p=[],h=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"stats"},[n("div",{staticClass:"top"},[e._m(0),n("div",{staticClass:"numbers"},[n("table",[n("tr",[e._m(1),n("td",{attrs:{align:"left"}},[n("span",{staticClass:"changed",attrs:{id:"blockNumber"}},[e._v(e._s(e.blockNo))])])]),n("tr",[e._m(2),n("td",{attrs:{align:"left"}},[n("span",{staticClass:"changed",attrs:{id:"txNumber"}},[e._v(e._s(e.txs))])])]),n("tr",[e._m(3),n("td",{attrs:{align:"left"}},[n("span",{staticClass:"changed",attrs:{id:"opNumber"}},[e._v(e._s(e.ops))])])]),n("tr",[e._m(4),n("td",{attrs:{align:"left"}},[n("span",{staticClass:"changed",attrs:{id:"tx24Number"}},[e._v(e._s(e.txs24))]),e._v(" ("+e._s(e.txs24total)+" total)\n                    ")]),n("td",{staticClass:"numbers--gray"},[e._v("7-day average")])]),n("tr",[e._m(5),n("td",{attrs:{align:"left"}},[n("span",{staticClass:"changed",attrs:{id:"op24Number"}},[e._v(e._s(e.ops24))]),e._v(" ("+e._s(e.ops24total)+" total)\n                    ")]),n("td",{staticClass:"numbers--gray"},[e._v("7-day average")])]),n("tr",[e._m(6),n("td",{attrs:{align:"left"}},[n("span",{staticClass:"changed",attrs:{id:"uniqueNumber"}},[e._v(e._s(e.unique))])])])])])]),n("table",{staticClass:"operationList",on:{click:e.toggleUpdates}},e._l(e.reverseOps,(function(t){return n("tr",{key:t[2]},[n("td",{style:"text-align:center; width:170px;font-size:12px; font-weight:bold;color:white;background: #"+e.operationReadable(t[0]).color},[e._v(e._s(e.operationReadable(t[0]).name))]),n("td",[n("code",[e._v(e._s(e.operationReadableContent(t[1])))])])])})),0)])},m=[function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"logo"},[n("img",{attrs:{src:"img/logo.png"}})])},function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("td",{attrs:{align:"right"}},[n("label",[e._v("Block No:")])])},function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("td",{attrs:{align:"right"}},[n("label",[e._v("Txs in block:")])])},function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("td",{attrs:{align:"right"}},[n("label",[e._v("Ops in block:")])])},function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("td",{attrs:{align:"right"}},[n("label",[e._v("Txs/s (24h):")])])},function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("td",{attrs:{align:"right"}},[n("label",[e._v("Ops/s (24h):")])])},function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("td",{attrs:{align:"right"}},[n("label",[e._v("Unique Users (7 days):")])])}],f=(n("5df3"),n("4f7f"),n("ac6a"),n("96cf"),n("3b8d")),b=n("d225"),g=n("b0b4"),E=n("308d"),_=n("6bb5"),v=n("4e2b"),A=n("06c1"),F=n("faa1"),S=n.n(F),T=function(e){function t(e){var n;return Object(b["a"])(this,t),n=Object(E["a"])(this,Object(_["a"])(t).call(this)),n.node=e,n}return Object(v["a"])(t,e),Object(g["a"])(t,[{key:"connect",value:function(){var e=Object(f["a"])(regeneratorRuntime.mark((function e(){var t=this;return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.next=2,A["Apis"].instance(this.node,!0).init_promise.then((function(e){console.log("connected to:",e[0].network),t.api=A["Apis"].instance();var n=t;t.api.db_api().exec("set_subscribe_callback",[function(e){n.updateListener(e,n)},!1]),t.api.db_api().exec("get_objects",[["2.1.0"]])}));case 2:return this.subscription=e.sent,e.abrupt("return",this.subscription);case 4:case"end":return e.stop()}}),e,this)})));function t(){return e.apply(this,arguments)}return t}()},{key:"getBlock",value:function(){var e=Object(f["a"])(regeneratorRuntime.mark((function e(t){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.abrupt("return",this.api.db_api().exec("get_block",[t]));case 1:case"end":return e.stop()}}),e,this)})));function t(t){return e.apply(this,arguments)}return t}()},{key:"updateListener",value:function(){var e=Object(f["a"])(regeneratorRuntime.mark((function e(t,n){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:n.emit("block",t);case 1:case"end":return e.stop()}}),e)})));function t(t,n){return e.apply(this,arguments)}return t}()}]),t}(S.a),y=T,R=function(){function e(){Object(b["a"])(this,e),this.items=[]}return Object(g["a"])(e,[{key:"enqueue",value:function(e){this.items.unshift(e)}},{key:"dequeue",value:function(){return this.items.pop()}},{key:"head",value:function(){return this.items[this.items.length-1]}},{key:"tail",value:function(){return this.items[0]}},{key:"isEmpty",value:function(){return 0==this.items.length}},{key:"advanceQueue",value:function(e){this.items.push(e)}},{key:"size",value:function(){return this.items.length}}]),e}(),k=n("f94d"),C=n.n(k),I={name:"Explorer",props:{es:{type:String,default:"https://BitShares:Infrastructure@eu.elasticsearch.bitshares.ws"},node:{type:String,default:"wss://bts-seoul.clockwork.gr"}},data:function(){return{bitshares:{},queue:null,blockNo:"",txs:0,ops:0,txs24:0,ops24:0,txs24total:0,ops24total:0,unique:0,client:null,operations:[],toadd:[],interval:null,stopped:!1,displayops:[]}},computed:{reverseOps:function(){return this.displayops.slice().reverse()}},mounted:function(){var e=this;console.log("[Node] Instance: ",this.node),this.bitshares=new y(this.node),this.bitshares.connect(),console.log("[Node] Connected"),this.queue=new R,console.log("[ElasticSearch] Instance: ",this.es),this.client=new C.a.Client({host:this.es}),console.log("[ElasticSearch] Connected");var t=!1,n=7;this.bitshares.on("block",function(){var r=Object(f["a"])(regeneratorRuntime.mark((function r(s){var a,o,i,c,l,u,d,p,h,m,f,b,g,E,_,v,A;return regeneratorRuntime.wrap((function(r){while(1)switch(r.prev=r.next){case 0:if(t||e.queue.enqueue(e.getDataFromES(s[0][0].head_block_number-2,n).catch((function(e){console.error("failed",e)}))),console.log("[Node] Received block: ",s[0][0].head_block_number),t&&e.bitshares.getBlock(s[0][0].head_block_number-2).then((function(t){e.blockNo=s[0][0].head_block_number-2,e.txs=t.transactions.length;var n=0;t.transactions.forEach((function(e){n+=e.operations.length})),e.ops=n})),"pending"==e.queue.head().PromiseStatus){r.next=45;break}return r.next=6,e.queue.dequeue();case 6:if(a=r.sent,a){r.next=9;break}return r.abrupt("return");case 9:for(console.log("[ElasticSearch] Received block: ",s[0][0].head_block_number-2),t||(o=a.responses[0].hits.total,o.value&&(o=o.value),e.ops=o),i=new Set,c=[],l=0;l<a.responses[0].hits.hits.length;l++){if(u=a.responses[0].hits.hits[l],d=u._source.block_data.trx_id,i.add(d),p=u._source.operation_type,h=u._source.operation_history.op_object,!h)try{h=JSON.parse(u._source.operation_history.op)[1]}catch(F){}m=u._id,c.push([p,h,m])}e.txs=i.size,document.getElementById("txNumber").classList.remove("changed"),document.getElementById("opNumber").classList.remove("changed"),document.getElementById("txNumber").offsetWidth,document.getElementById("opNumber").offsetWidth,document.getElementById("txNumber").classList.add("changed"),document.getElementById("opNumber").classList.add("changed"),e.toadd=e.toadd.concat(c),clearInterval(e.interval),e.interval=setInterval((function(){e.toadd.length>0&&(e.operations.push(e.toadd.pop()),e.operations.length>100&&e.operations.shift(),e.stopped||(e.displayops=e.operations.slice()))}),3e3/e.ops),t||(e.blockNo=s[0][0].head_block_number-2),document.getElementById("blockNumber").classList.remove("changed"),document.getElementById("blockNumber").offsetWidth,document.getElementById("blockNumber").classList.add("changed"),f=a.responses[1],e.txs24total=(1*f.aggregations["2"].buckets[0]["1"].value/n).toLocaleString(),b=(1*f.aggregations["2"].buckets[0]["1"].value/(86400*n)).toFixed(2),g=!(e.txs24===b),e.txs24=b,E=a.responses[2],e.ops24total=(1*E.aggregations["3"].buckets[0].doc_count/n).toLocaleString(),b=(1*E.aggregations["3"].buckets[0].doc_count/(86400*n)).toFixed(2),_=!(e.ops24===b),e.ops24=b,v=a.responses[3],g&&(document.getElementById("tx24Number").classList.remove("changed"),document.getElementById("tx24Number").offsetWidth,document.getElementById("tx24Number").classList.add("changed")),_&&(document.getElementById("op24Number").classList.remove("changed"),document.getElementById("op24Number").offsetWidth,document.getElementById("op24Number").classList.add("changed")),b=(1*v.aggregations["4"].buckets[0]["1"].value).toLocaleString(),A=!(b===e.unique),e.unique=b,A&&(document.getElementById("uniqueNumber").classList.remove("changed"),document.getElementById("uniqueNumber").offsetWidth,document.getElementById("uniqueNumber").classList.add("changed"));case 45:case"end":return r.stop()}}),r)})));return function(e){return r.apply(this,arguments)}}())},methods:{toggleUpdates:function(){this.stopped?this.stopped=!1:this.stopped=!0},getDataFromES:function(e,t){var n=24*t,r=1e3*t*60*60*24;return this.client.msearch({body:[{},{query:{bool:{filter:{term:{"block_data.block_num":e}}}},size:1e4},{},{aggs:{2:{date_range:{field:"block_data.block_time",ranges:[{from:"now-"+n+"h",to:"now"}]},aggs:{1:{cardinality:{field:"block_data.trx_id.keyword"}}}}},size:0,_source:!1,stored_fields:["*"],script_fields:{},query:{bool:{must:[{match_all:{}},{range:{"block_data.block_time":{gte:Date.now()-r,lte:Date.now(),format:"epoch_millis"}}}]}}},{},{aggs:{3:{date_range:{field:"block_data.block_time",ranges:[{from:"now-"+n+"h",to:"now"}]}}},size:0,_source:{excludes:[]},stored_fields:["*"],script_fields:{},query:{bool:{must:[{match_all:{}},{range:{"block_data.block_time":{gte:Date.now()-r,lte:Date.now(),format:"epoch_millis"}}}],filter:[],should:[],must_not:[]}}},{},{aggs:{4:{date_range:{field:"block_data.block_time",ranges:[{from:"now-"+n+"h",to:"now"}]},aggs:{1:{cardinality:{field:"account_history.account.keyword"}}}}},size:0,_source:{excludes:[]},stored_fields:["*"],script_fields:{},query:{bool:{must:[{match_all:{}},{range:{"block_data.block_time":{gte:Date.now()-r,lte:Date.now(),format:"epoch_millis"}}}],filter:[],should:[],must_not:[]}}}]})},operationReadableContent:function(e){return e},operationReadable:function(e){var t,n;return 0===e?(t="TRANSFER",n="81CA80"):1===e?(t="LIMIT ORDER CREATE",n="6BBCD7"):2===e?(t="LIMIT ORDER CANCEL",n="E9C842"):3===e?(t="CALL ORDER UPDATE",n="E96562"):4===e?(t="FILL ORDER (VIRTUAL)",n="008000"):5===e?(t="ACCOUNT CREATE",n="CCCCCC"):6===e?(t="ACCOUNT UPDATE",n="FF007F"):7===e?(t="ACCOUNT WHIELIST",n="FB8817"):8===e?(t="ACCOUNT UPGRADE",n="552AFF"):9===e?(t="ACCOUNT TRANSFER",n="AA2AFF"):10===e?(t="ASSET CREATE",n="D400FF"):11===e?(t="ASSET UPDATE",n="0000FF"):12===e?(t="ASSET UPDATE BITASSET",n="AA7FFF"):13===e?(t="ASSET UPDATE FEED PRODUCERS",n="2A7FFF"):14===e?(t="ASSET ISSUE",n="7FAAFF"):15===e?(t="ASSET RESERVE",n="55FF7F"):16===e?(t="ASSET FUND FEE POOL",n="55FF7F"):17===e?(t="ASSET SETTLE",n="FFFFAA"):18===e?(t="ASSET GLOBAL SETTLE",n="FFFF7F"):19===e?(t="ASSET PUBLISH FEED",n="FF2A55"):20===e?(t="WITNESS CREATE",n="FFAA7F"):21===e?(t="WITNESS UPDATE",n="F1AA2A"):22===e?(t="PROPOSAL CREATE",n="FFAA55"):23===e?(t="PROPOSAL UPDATE",n="FF7F55"):24===e?(t="PROPOSAL DELETE",n="FF552A"):25===e?(t="WITHDRAW PERMISSION CREATE",n="FF00AA"):26===e?(t="WITHDRAW PERMISSION",n="FF00FF"):27===e?(t="WITHDRAW PERMISSION CLAIM",n="FF0055"):28===e?(t="WITHDRAW PERMISSION DELETE",n="37B68Cc"):29===e?(t="COMMITTEE MEMBER CREATE",n="37B68C"):30===e?(t="COMMITTEE MEMBER UPDATE",n="6712E7"):31===e?(t="COMMITTEE MEMBER UPDATE GLOBAL PARAMETERS",n="B637B6"):32===e?(t="VESTING BALANCE CREATE",n="A5A5A5"):33===e?(t="VESTING BALANCE WITHDRAW",n="696969"):34===e?(t="WORKER CREATE",n="0F0F0F"):35===e?(t="CUSTOM",n="0DB762"):36===e?(t="ASSERT",n="FFFFFF"):37===e?(t="BALANCE CLAIM",n="939314"):38===e?(t="OVERRIDE TRANSFER",n="8D0DB7"):39===e?(t="TRANSFER TO BLIND",n="C4EFC4"):40===e?(t="BLIND TRANSFER",n="F29DF2"):41===e?(t="TRANSFER FROM BLIND",n="9D9DF2"):42===e?(t="ASSET SETTLE CANCEL",n="4ECEF8"):43===e?(t="ASSET CLAIM FEES",n="F8794E"):44===e?(t="FBA DISTRIBUTE",n="8808B2"):(t="UNKOWN",n="8808B2"),{name:t,color:n}}}},N=I,O=(n("fbd8"),Object(o["a"])(N,h,m,!1,null,"38575b86",null)),x=O.exports,w={name:"Home",components:{Explorer:x}},L=w,B=Object(o["a"])(L,d,p,!1,null,null,null),D=B.exports;r["a"].use(u["a"]);var P=new u["a"]({routes:[{path:"/",name:"home",component:D}]}),M=n("2f62");r["a"].use(M["a"]);var U=new M["a"].Store({state:{},mutations:{},actions:{}});r["a"].config.productionTip=!1,new r["a"]({router:P,store:U,render:function(e){return e(l)}}).$mount("#app")},"5c48":function(e,t,n){},"7c55":function(e,t,n){"use strict";var r=n("5c48"),s=n.n(r);s.a},fbd8:function(e,t,n){"use strict";var r=n("24eb"),s=n.n(r);s.a}});
//# sourceMappingURL=app.4b4e520d.js.map