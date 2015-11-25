/* - - - - - - - - - - - - - - - - - - - - -

 Title : PHP Quick Profiler CSS
 Author : Designed by Kevin Hale.
 URL : http://particletree.com/features/php-quick-profiler/

 Last Updated : April 21, 2009

- - - - - - - - - - - - - - - - - - - - - */

.pQp{
	width:100%;
	text-align:center;
	position:fixed;
	bottom:0;
}
* html .pQp{
	position:absolute;
}
.pQp *{
	margin:0;
	padding:0;
	border:none;
}
#pQp{
	margin:0 auto;
	width:85%;
	min-width:860px;
	background-color:#222;
	border:12px solid #000;
	border-bottom:none;
	font-family:"Lucida Grande", Tahoma, Arial, sans-serif;
	-webkit-border-top-left-radius:15px;
	-webkit-border-top-right-radius:15px;
	-moz-border-radius-topleft:15px;
	-moz-border-radius-topright:15px;
}
#pQp .pqp-box h3{
	font-weight:normal;
	line-height:200px;
	padding:0 15px;
	color:#fff;
}
.pQp, .pQp td{
	color:#444;
}

/* ----- IDS ----- */

#pqp-metrics{
	background:#000;
	width:100%;
}
#pqp-console, #pqp-speed, #pqp-queries, #pqp-memory, #pqp-files{
	background:url(../images/overlay.gif);
	border-top:1px solid #ccc;
	height:200px;
	overflow:auto;
}

/* ----- Colors ----- */

.pQp .green{color:#588E13 !important;}
.pQp .blue{color:#3769A0 !important;}
.pQp .purple{color:#953FA1 !important;}
.pQp .orange{color:#D28C00 !important;}
.pQp .red{color:#B72F09 !important;}

/* ----- Logic ----- */

#pQp, #pqp-console, #pqp-speed, #pqp-queries, #pqp-memory, #pqp-files{
	display:none;
}
.pQp .console, .pQp .speed, .pQp .queries, .pQp .memory, .pQp .files{
	display:block !important;
}
.pQp .console #pqp-console, .pQp .speed #pqp-speed, .pQp .queries #pqp-queries, 
.pQp .memory #pqp-memory, .pQp .files #pqp-files{
	display:block;
}
.console td.green, .speed td.blue, .queries td.purple, .memory td.orange, .files td.red{
	background:#222 !important;
	border-bottom:6px solid #fff !important;
	cursor:default !important;
}

.tallDetails #pQp .pqp-box{
	height:500px;
}
.tallDetails #pQp .pqp-box h3{
	line-height:500px;
}
.hideDetails #pQp .pqp-box{
	display:none !important;
}
.hideDetails #pqp-footer{
	border-top:1px dotted #444;
}
.hideDetails #pQp #pqp-metrics td{
	height:50px;
	background:#000 !important;
	border-bottom:none !important;
	cursor:default !important;
}
.hideDetails #pQp var{
	font-size:18px;
	margin:0 0 2px 0;
}
.hideDetails #pQp h4{
	font-size:10px;
}
.hideDetails .heightToggle{
	visibility:hidden;
}

/* ----- Metrics ----- */

#pqp-metrics td{
	height:80px;
	width:20%;
	text-align:center;
	cursor:pointer;
	border:1px solid #000;
	border-bottom:6px solid #444;
	-webkit-border-top-left-radius:10px;
	-moz-border-radius-topleft:10px;
	-webkit-border-top-right-radius:10px;
	-moz-border-radius-topright:10px;
}
#pqp-metrics td:hover{
	background:#222;
	border-bottom:6px solid #777;
}
#pqp-metrics .green{
	border-left:none;
}
#pqp-metrics .red{
	border-right:none;
}

#pqp-metrics h4{
	text-shadow:#000 1px 1px 1px;
}
.side var{
	text-shadow:#444 1px 1px 1px;
}

.pQp var{
	font-size:23px;
	font-weight:bold;
	font-style:normal;
	margin:0 0 3px 0;
	display:block;
}
.pQp h4{
	font-size:12px;
	color:#fff;
	margin:0 0 4px 0;
}

/* ----- Main ----- */

.pQp .main{
	width:80%;
}
*+html .pQp .main{
	width:78%;
}
* html .pQp .main{
	width:77%;
}
.pQp .main td{
	padding:7px 15px;
	text-align:left;
	background:#151515;
	border-left:1px solid #333;
	border-right:1px solid #333;
	border-bottom:1px dotted #323232;
	color:#FFF;
}
.pQp .main td, pre{
	font-family:Monaco, "Consolas", "Lucida Console", "Courier New", monospace;
	font-size:11px;
}
.pQp .main td.alt{
	background:#111;
}
.pQp .main tr.alt td{
	background:#2E2E2E;
	border-top:1px dotted #4E4E4E;
}
.pQp .main tr.alt td.alt{
	background:#333;
}
.pQp .main td b{
	float:right;
	font-weight:normal;
	color:#E6F387;
}
.pQp .main td:hover{
	background:#2E2E2E;
}

/* ----- Side ----- */

.pQp .side{
	float:left;
	width:20%;
	background:#000;
	color:#fff;
	-webkit-border-bottom-left-radius:30px;
	-moz-border-radius-bottomleft:30px;
	text-align:center;
}
.pQp .side td{
	padding:10px 0 5px 0;
	background:url(../images/side.png) repeat-y right;
}
.pQp .side var{
	color:#fff;
	font-size:15px;
}
.pQp .side h4{
	font-weight:normal;
	color:#F4FCCA;
	font-size:11px;
}

/* ----- Console ----- */

#pqp-console .side td{
	padding:12px 0;
}
#pqp-console .side td.alt1{
	background:#588E13;
	width:51%;
}
#pqp-console .side td.alt2{
	background-color:#B72F09;
}
#pqp-console .side td.alt3{
	background:#D28C00;
	border-bottom:1px solid #9C6800;
	border-left:1px solid #9C6800;
	-webkit-border-bottom-left-radius:30px;
	-moz-border-radius-bottomleft:30px;
}
#pqp-console .side td.alt4{
	background-color:#3769A0;
	border-bottom:1px solid #274B74;
}

#pqp-console .main table{
	width:100%;
}
#pqp-console td div{
	width:100%;
	overflow:hidden;
}
#pqp-console td.type{
	font-family:"Lucida Grande", Tahoma, Arial, sans-serif;
	text-align:center;
	text-transform: uppercase;
	font-size:9px;
	padding-top:9px;
	color:#F4FCCA;
	vertical-align:top;
	width:40px;
}
.pQp .log-log td.type{
	background:#47740D !important;
}
.pQp .log-error td.type{
	background:#9B2700 !important;
}
.pQp .log-memory td.type{
	background:#D28C00 !important;
}
.pQp .log-speed td.type{
	background:#2B5481 !important;
}

.pQp .log-log pre{
	color:#999;
}
.pQp .log-log td:hover pre{
	color:#fff;
}

.pQp .log-memory em, .pQp .log-speed em{
	float:left;
	font-style:normal;
	display:block;
	color:#fff;
}
.pQp .log-memory pre, .pQp .log-speed pre{
	float:right;
	white-space: normal;
	display:block;
	color:#FFFD70;
}

/* ----- Speed ----- */

#pqp-speed .side td{
	padding:12px 0;
}
#pqp-speed .side{
	background-color:#3769A0;
}
#pqp-speed .side td.alt{
	background-color:#2B5481;
	border-bottom:1px solid #1E3C5C;
	border-left:1px solid #1E3C5C;
	-webkit-border-bottom-left-radius:30px;
	-moz-border-radius-bottomleft:30px;
}

/* ----- Queries ----- */

#pqp-queries .side{
	background-color:#953FA1;
	border-bottom:1px solid #662A6E;
	border-left:1px solid #662A6E;
}
#pqp-queries .side td.alt{
	background-color:#7B3384;
}
#pqp-queries .main b{
	float:none;
}
#pqp-queries .main em{
	display:block;
	padding:2px 0 0 0;
	font-style:normal;
	color:#aaa;
}

/* ----- Memory ----- */

#pqp-memory .side td{
	padding:12px 0;
}
#pqp-memory .side{
	background-color:#C48200;
}
#pqp-memory .side td.alt{
	background-color:#AC7200;
	border-bottom:1px solid #865900;
	border-left:1px solid #865900;
	-webkit-border-bottom-left-radius:30px;
	-moz-border-radius-bottomleft:30px;
}

/* ----- Files ----- */

#pqp-files .side{
	background-color:#B72F09;
	border-bottom:1px solid #7C1F00;
	border-left:1px solid #7C1F00;
}
#pqp-files .side td.alt{
	background-color:#9B2700;
}

/* ----- Footer ----- */

#pqp-footer{
	width:100%;
	background:#000;
	font-size:11px;
	border-top:1px solid #ccc;
}
#pqp-footer td{
	padding:0 !important;
	border:none !important;
}
#pqp-footer strong{
	color:#fff;
}
#pqp-footer a{
	color:#999;
	padding:5px 10px;
	text-decoration:none;
}
#pqp-footer .credit{
	width:20%;
	text-align:left;
}
#pqp-footer .actions{
	width:80%;
	text-align:right;
}
#pqp-footer .actions a{
	float:right;
	width:auto;
}
#pqp-footer a:hover, #pqp-footer a:hover strong, #pqp-footer a:hover b{
	background:#fff;
	color:blue !important;
	text-decoration:underline;
}
#pqp-footer a:active, #pqp-footer a:active strong, #pqp-footer a:active b{
	background:#ECF488;
	color:green !important;
}