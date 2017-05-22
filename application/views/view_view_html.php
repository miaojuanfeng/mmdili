<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> - 缪缪文档</title>
<meta name="robots" content="index,follow" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<?php require_once 'meta_view.php' ?>
<meta charset="utf-8"/>
<meta name="generator" content="pdf2htmlEX"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="<?=base_url('assets/lib/css/base.min.css')?>"/>
<link rel="stylesheet" href="<?=base_url('assets/lib/css/fancy.min.css')?>"/>
<link rel="stylesheet" href="http://view.mmdili.com/test/14591239888.css"/>
<script>
/*
 Copyright 2012 Mozilla Foundation 
 Copyright 2013 Lu Wang <coolwanglu@gmail.com>
 Apache License Version 2.0 
*/
(function(){function b(a,b,e,f){var c=(a.className||"").split(/\s+/g);""===c[0]&&c.shift();var d=c.indexOf(b);0>d&&e&&c.push(b);0<=d&&f&&c.splice(d,1);a.className=c.join(" ");return 0<=d}if(!("classList"in document.createElement("div"))){var e={add:function(a){b(this.element,a,!0,!1)},contains:function(a){return b(this.element,a,!1,!1)},remove:function(a){b(this.element,a,!1,!0)},toggle:function(a){b(this.element,a,!0,!0)}};Object.defineProperty(HTMLElement.prototype,"classList",{get:function(){if(this._classList)return this._classList;
var a=Object.create(e,{element:{value:this,writable:!1,enumerable:!0}});Object.defineProperty(this,"_classList",{value:a,writable:!1,enumerable:!1});return a},enumerable:!0})}})();
</script>
<script>
(function(){/*
 pdf2htmlEX.js: Core UI functions for pdf2htmlEX 
 Copyright 2012,2013 Lu Wang <coolwanglu@gmail.com> and other contributors 
 https://github.com/coolwanglu/pdf2htmlEX/blob/master/share/LICENSE 
*/
var q=window.pdf2htmlEX=window.pdf2htmlEX||{},r="pc",s="pi",t={container_id:"page-container",sidebar_id:"sidebar",outline_id:"outline",loading_indicator_cls:"loading-indicator",preload_pages:3,render_timeout:100,scale_step:0.9,key_handler:!0,hashchange_handler:!0,__dummy__:"no comma"};function v(a,b){return[a[0]*b[0]+a[2]*b[1]+a[4],a[1]*b[0]+a[3]*b[1]+a[5]]}function w(a){for(var b=0,c=a.length;b<c;++b)a[b].addEventListener("dragstart",function(){return!1},!1)}
function x(a){for(var b={},c=0,d=arguments.length;c<d;++c){var e=arguments[c],g;for(g in e)e.hasOwnProperty(g)&&(b[g]=e[g])}return b}
function y(a){if(a){this.g=this.loaded=!1;this.page=a;this.r=parseInt(a.getAttribute("data-page-no"),16);this.m=a.clientHeight;this.t=a.clientWidth;var b=a.getElementsByClassName(r)[0];b&&(this.h=b,this.s=this.f=this.m/b.clientHeight,this.u=JSON.parse(a.getElementsByClassName(s)[0].getAttribute("data-data")),a=this.k=this.u.ctm,b=a[0]*a[3]-a[1]*a[2],this.o=[a[3]/b,-a[1]/b,-a[2]/b,a[0]/b,(a[2]*a[5]-a[3]*a[4])/b,(a[1]*a[4]-a[0]*a[5])/b],this.loaded=!0)}}
y.prototype={show:function(){this.loaded&&!this.g&&(this.h.classList.add("opened"),this.g=!0)},d:function(a){this.f=0===a?this.s:a;this.loaded&&(a=this.h.style,a.msTransform=a.webkitTransform=a.transform="scale("+this.f.toFixed(3)+")");a=this.page.style;a.height=this.m*this.f+"px";a.width=this.t*this.f+"px"},height:function(){return this.page.clientHeight},width:function(){return this.page.clientWidth}};
function z(a){a=a.page;var b=a.parentNode;return[b.scrollLeft-a.offsetLeft-a.clientLeft,b.scrollTop-a.offsetTop-a.clientTop]}function A(a){a.loaded&&a.g&&(a.h.classList.remove("opened"),a.g=!1)}function B(a){this.b=x(t,0<arguments.length?a:{});this.i=[];C();var b=this;document.addEventListener("DOMContentLoaded",function(){E(b)},!1)}
B.prototype={scale:1,e:0,l:0,d:function(a,b,c){var d=this.scale;this.scale=a=0===a?1:b?d*a:a;c||(c=[0,0]);b=this.a;c[0]+=b.scrollLeft;c[1]+=b.scrollTop;for(var e=this.c,g=e.length,h=this.l;h<g;++h){var f=e[h].page;if(f.offsetTop+f.clientTop>=c[1])break}f=h-1;0>f&&(f=0);var f=e[f].page,k=f.clientWidth,h=f.clientHeight,l=f.offsetLeft+f.clientLeft,m=c[0]-l;0>m?m=0:m>k&&(m=k);k=f.offsetTop+f.clientTop;c=c[1]-k;0>c?c=0:c>h&&(c=h);for(h=0;h<g;++h)e[h].d(a);b.scrollLeft+=m/d*a+f.offsetLeft+f.clientLeft-
m-l;b.scrollTop+=c/d*a+f.offsetTop+f.clientTop-c-k;F(this,!0)},p:function(a){var b=a.target,c=b.getAttribute("data-dest-detail");if(c){var d=G;a:{for(;b;){if(b.nodeType===Node.ELEMENT_NODE&&b.classList.contains("pf")){var b=parseInt(b.getAttribute("data-page-no"),16),e=this.n,b=b in e?this.c[e[b]]:null;break a}b=b.parentNode}b=null}d(this,c,b);a.preventDefault()}}};
function H(a,b,c){var d=a.c;0>b||b>=d.length||(b=z(d[b]),void 0===c&&(c=[0,0]),a=a.a,a.scrollLeft+=c[0]-b[0],a.scrollTop+=c[1]-b[1])}
function G(a,b,c){try{var d=JSON.parse(b)}catch(e){return}if(d instanceof Array){b=d[0];var g=a.n;if(b in g){var h=g[b];b=a.c[h];for(var g=2,f=d.length;g<f;++g){var k=d[g];if(null!==k&&"number"!==typeof k)return}for(;6>d.length;)d.push(null);g=c||a.c[a.e];c=z(g);c=v(g.o,[c[0],g.height()-c[1]]);var g=a.scale,l=[0,0],m=!0,f=!1,k=a.scale;switch(d[1]){case "XYZ":l=[null===d[2]?c[0]:d[2]*k,null===d[3]?c[1]:d[3]*k];g=d[4];if(null===g||0===g)g=a.scale;f=!0;break;case "Fit":case "FitB":l=[0,0];f=!0;break;
case "FitH":case "FitBH":l=[0,null===d[2]?c[1]:d[2]*k];f=!0;break;case "FitV":case "FitBV":l=[null===d[2]?c[0]:d[2]*k,0];f=!0;break;case "FitR":l=[d[2]*k,d[5]*k],m=!1,f=!0}f&&(a.d(g,!1),d=function(b){l=v(b.k,l);m&&(l[1]=b.height()-l[1]);H(a,h,l)},b.loaded?d(b):(I(a,h,void 0,d),H(a,h)))}}}
function J(a){window.addEventListener("DOMMouseScroll",function(b){if(b.ctrlKey){b.preventDefault();var c=a.a,d=c.getBoundingClientRect();a.d(Math.pow(a.b.scale_step,b.detail),!0,[b.clientX-d.left-c.clientLeft,b.clientY-d.top-c.clientTop])}},!1);window.addEventListener("keydown",function(b){var c=!1,d=b.ctrlKey||b.metaKey,e=b.altKey;switch(b.keyCode){case 61:case 107:case 187:d&&(a.d(1/a.b.scale_step,!0),c=!0);break;case 173:case 109:case 189:d&&(a.d(a.b.scale_step,!0),c=!0);break;case 48:d&&(a.d(0,
!1),c=!0);break;case 33:e?H(a,a.e-1):a.a.scrollTop-=a.a.clientHeight;c=!0;break;case 34:e?H(a,a.e+1):a.a.scrollTop+=a.a.clientHeight;c=!0;break;case 35:a.a.scrollTop=a.a.scrollHeight;c=!0;break;case 36:a.a.scrollTop=0,c=!0}c&&b.preventDefault()},!1)}function F(a,b){if(void 0!==a.j){if(!b)return;clearTimeout(a.j)}a.j=setTimeout(function(){delete a.j;K(a)},a.b.render_timeout)}
function K(a){for(var b=a.a,c=b.scrollTop,d=b.clientHeight,b=c-d,c=c+d+d,d=a.c,e=0,g=d.length;e<g;++e){var h=d[e],f=h.page,k=f.offsetTop+f.clientTop,f=k+f.clientHeight;k<=c&&f>=b?h.loaded?h.show():I(a,e):A(h)}}function C(){var a="@media screen{."+r+"{display:none;}}",b=document.createElement("style");b.styleSheet?b.styleSheet.cssText=a:b.appendChild(document.createTextNode(a));document.head.appendChild(b)}
function I(a,b,c,d){var e=a.c;if(!(b>=e.length||(e=e[b],e.loaded||a.i[b]))){var e=e.page,g=e.getAttribute("data-page-url");if(g){a.i[b]=!0;var h=e.getElementsByClassName(a.b.loading_indicator_cls)[0];"undefined"===typeof h&&(h=a.q.cloneNode(!0),h.classList.add("active"),e.appendChild(h));var f=a,k=new XMLHttpRequest;k.open("GET",g,!0);k.onload=function(){if(200===k.status||0===k.status){var a=document.createElement("div");a.innerHTML=k.responseText;for(var c=null,a=a.childNodes,g=0,h=a.length;g<h;++g){var e=
a[g];if(e.nodeType===Node.ELEMENT_NODE&&e.classList.contains("pf")){c=e;break}}a=f.c[b];f.a.replaceChild(c,a.page);a=new y(c);f.c[b]=a;A(a);a.d(f.scale);w(c.getElementsByClassName("bi"));F(f,!1);d&&d(a)}delete f.i[b]};k.send(null)}void 0===c&&(c=a.b.preload_pages);0<--c&&(f=a,setTimeout(function(){I(f,b+1,c)},0))}}
function L(a){for(var b=[],c={},d=a.a.childNodes,e=0,g=d.length;e<g;++e){var h=d[e];h.nodeType===Node.ELEMENT_NODE&&h.classList.contains("pf")&&(h=new y(h),b.push(h),c[h.r]=b.length-1)}a.c=b;a.n=c}
function E(a){a.sidebar=document.getElementById(a.b.sidebar_id);a.outline=document.getElementById(a.b.outline_id);a.a=document.getElementById(a.b.container_id);a.q=document.getElementsByClassName(a.b.loading_indicator_cls)[0];for(var b=!0,c=a.outline.childNodes,d=0,e=c.length;d<e;++d)if("ul"===c[d].nodeName.toLowerCase()){b=!1;break}b||a.sidebar.classList.add("opened");L(a);0!=a.c.length&&(w(document.getElementsByClassName("bi")),a.b.key_handler&&J(a),a.b.hashchange_handler&&window.addEventListener("hashchange",
function(){G(a,document.location.hash.substring(1))},!1),a.a.addEventListener("scroll",function(){var b=a.c,c=b.length;if(!(2>c)){for(var d=a.a,e=d.scrollTop,d=e+d.clientHeight,l=-1,m=c,n=m-l;1<n;){var p=l+Math.floor(n/2),n=b[p].page;n.offsetTop+n.clientTop+n.clientHeight>=e?m=p:l=p;n=m-l}a.l=m;for(var p=l=a.e,D=0;m<c;++m){var n=b[m].page,u=n.offsetTop+n.clientTop,n=n.clientHeight;if(u>d)break;n=(Math.min(d,u+n)-Math.max(e,u))/n;if(m===l&&1E-6>=Math.abs(n-1)){p=l;break}n>D&&(D=n,p=m)}a.e=p}F(a,!0)},
!1),[a.a,a.outline].forEach(function(b){b.addEventListener("click",a.p.bind(a),!1)}),M(),K(a))}function M(){for(var a=document.getElementsByClassName("ir"),b=0;b<a.length;b++)a[b].addEventListener("click",function(){this.classList.toggle("checked")})}q.Viewer=B;})();
</script>
<script>
try{
pdf2htmlEX.defaultViewer = new pdf2htmlEX.Viewer({});
}catch(e){}
</script>
</head>
<body>
	<?php require_once 'header_view.php' ?>
	<div class="content">
		<div class="main-container">
			<div class="view-container">
				<div class="title-container">
					<div class="page-title">
						<h1>test</h1>
					</div>
					<div class="page-notice">
						<?php
							echo '提示：已对文档中包含的图片及部分文字进行压缩以加快载入，下载文档可浏览高清版本。';
						?>
					</div>
				</div>
				<div id="sidebar">
					<div id="outline"></div>
				</div>
				<div id="page-container">
					<div id="pf1" class="pf w0 h0" data-page-no="1" data-page-url="http://view.mmdili.com/test/14591239888-001.page"></div>
					<div id="pf2" class="pf w0 h0" data-page-no="2" data-page-url="http://view.mmdili.com/test/14591239888-002.page"></div>
					<div id="pf3" class="pf w0 h0" data-page-no="3" data-page-url="http://view.mmdili.com/test/14591239888-003.page"></div>
					<div id="pf4" class="pf w0 h0" data-page-no="4" data-page-url="http://view.mmdili.com/test/14591239888-004.page"></div>
					<div id="pf5" class="pf w0 h0" data-page-no="5" data-page-url="http://view.mmdili.com/test/14591239888-005.page"></div>
					<div id="pf6" class="pf w0 h0" data-page-no="6" data-page-url="http://view.mmdili.com/test/14591239888-006.page"></div>
					<div id="pf7" class="pf w0 h0" data-page-no="7" data-page-url="http://view.mmdili.com/test/14591239888-007.page"></div>
					<div id="pf8" class="pf w0 h0" data-page-no="8" data-page-url="http://view.mmdili.com/test/14591239888-008.page"></div>
					<div id="pf9" class="pf w0 h0" data-page-no="9" data-page-url="http://view.mmdili.com/test/14591239888-009.page"></div>
					<div id="pfa" class="pf w0 h0" data-page-no="a" data-page-url="http://view.mmdili.com/test/14591239888-010.page"></div>
					<div id="pfb" class="pf w0 h0" data-page-no="b" data-page-url="http://view.mmdili.com/test/14591239888-011.page"></div>
					<div id="pfc" class="pf w0 h0" data-page-no="c" data-page-url="http://view.mmdili.com/test/14591239888-012.page"></div>
					<div id="pfd" class="pf w0 h0" data-page-no="d" data-page-url="http://view.mmdili.com/test/14591239888-013.page"></div>
					<div id="pfe" class="pf w0 h0" data-page-no="e" data-page-url="http://view.mmdili.com/test/14591239888-014.page"></div>
					<div id="pff" class="pf w0 h0" data-page-no="f" data-page-url="http://view.mmdili.com/test/14591239888-015.page"></div>
					<div id="pf10" class="pf w0 h0" data-page-no="10" data-page-url="http://view.mmdili.com/test/14591239888-016.page"></div>
					<div id="pf11" class="pf w0 h0" data-page-no="11" data-page-url="http://view.mmdili.com/test/14591239888-017.page"></div>
					<div id="pf12" class="pf w0 h0" data-page-no="12" data-page-url="http://view.mmdili.com/test/14591239888-018.page"></div>
				</div>
				<div class="loading-indicator">
					<img alt="" src="pdf2htmlEX-64x64.png"/>
				</div>
			</div>
		</div>
	</div>
	<?php require_once 'footer_view.php' ?>
</body>
</html>