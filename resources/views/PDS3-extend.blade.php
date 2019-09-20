<!-- <html xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:x="urn:schemas-microsoft-com:office:excel"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard"> -->
@extends('layouts/layoutnew')
<link rel=File-List href="PDS-3_files/filelist.xml">
<style id="PDS - Copy_27828_Styles">
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}

.app-body, .app-header, .navbar{
	display:none !important;
}

input, button, select, optgroup, textarea{
	font-size: 14px !important;
}

.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}

.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}

.xl6527828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6627828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6727828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6827828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl6927828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:right;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7027828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:right;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl7127828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl7227828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl7327828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7427828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl7527828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:general;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl7627828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"Short Date";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7727828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"0\.0_\)\;\\\(0\.0\\\)";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7827828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl7927828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8027828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl8127828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8227828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl8327828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8427828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8527828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8627828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl8727828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"mm\/dd\/yyyy";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl8827828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl8927828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl9027828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl9127828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9227828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl9327828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9427828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9527828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl9627828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9727828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9827828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl9927828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl10027828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl10127828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl10227828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl10327828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl10427828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl10527828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl10627828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl10727828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl10827828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl10927828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl11027828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl11127828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl11227828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl11327828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:7.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl11427828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl11527828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl11627828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:red;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl11727828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl11827828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl11927828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12027828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12127828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12227828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12327828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl12427828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12527828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12627828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl12727828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#969696;
	mso-pattern:black none;
	white-space:normal;}
.xl12827828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:normal;}
.xl12927828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:normal;}
.xl13027828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl13127828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl13227828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl13327828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl13427828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl13527828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl13627828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl13727828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#969696;
	mso-pattern:black none;
	white-space:normal;}
.xl13827828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:normal;}
.xl13927828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:8.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:normal;}
.xl14027828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl14127828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl14227828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl14327828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl14427828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl14527828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl14627828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl14727828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl14827828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl14927828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl15027828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl15127828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl15227828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl15327828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl15427828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl15527828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl15627828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl15727828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl15827828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl15927828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl16027828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:nowrap;}
.xl16127828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:#969696;
	mso-pattern:black none;
	white-space:normal;}
.xl16227828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:normal;}
.xl16327828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:white;
	font-size:11.0pt;
	font-weight:700;
	font-style:italic;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#969696;
	mso-pattern:black none;
	white-space:normal;}
.xl16427828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl16527828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl16627828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:6.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl16727828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl16827828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl16927828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl17027828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl17127828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:normal;}
.xl17227828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl17327828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl17427828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl17527828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl17627828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl17727828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl17827828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl17927828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl18027828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl18127828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl18227828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl18327828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl18427828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl18527828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl18627828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl18727828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl18827828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl18927828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl19027828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl19127828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl19227828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl19327828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19427828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19527828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19627828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19727828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19827828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:normal;}
.xl19927828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl20027828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:nowrap;}
.xl20127828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial, sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl20227828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl20327828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl20427828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl20527828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
.xl20627828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl20727828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:9.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:unlocked visible;
	white-space:nowrap;}
.xl20827828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:10.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Arial;
	mso-generic-font-family:auto;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:none;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl20927828
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"Arial Narrow", sans-serif;
	mso-font-charset:0;
	mso-number-format:"\@";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#EAEAEA;
	mso-pattern:black none;
	white-space:normal;}
-->
</style>
</head>

<body>

<?php //var_dump($segmentID); ?>

<nav aria-label="...">
  <ul class="pagination">
    <!-- <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li> -->
    <li class="page-item  <?php if($segment=='sheet1'){ echo 'active'; } ?>"><a class="page-link" href="{{ $user->username=='admin' ? url('/edit/sheet1').'/'.$segmentID : url('pds/sheet1') }}">Sheet 1</a></li>
    <li class="page-item <?php if($segment=='sheet2'){ echo 'active'; } ?>">
      <a class="page-link" href="{{ $user->username=='admin' ? url('/edit/sheet2').'/'.$segmentID : url('pds/sheet2') }}">Sheet 2</a>
    </li>
    <li class="page-item <?php if($segment=='sheet3'){ echo 'active'; } ?>"><a class="page-link" href="{{ $user->username=='admin' ? url('/edit/sheet3').'/'.$segmentID : url('pds/sheet3') }}">Sheet 3</a></li>
    <li class="page-item <?php if($segment=='sheet4'){ echo 'active'; } ?>"><a class="page-link" href="{{ $user->username=='admin' ? url('/edit/sheet4').'/'.$segmentID : url('pds/sheet4') }}">Sheet 4</a></li>
    <li class="page-item">
      <a class="page-link" href="{{ url('/employees') }}">Home</a>
    </li> 

  </ul>
</nav>

<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Excel's Publish as Web
Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id="PDS - Copy_27828" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=1034 class=xl6553527828
 style='border-collapse:collapse;table-layout:fixed;width:1100pt'>
 <col class=xl6553527828 width=26 style='mso-width-source:userset;mso-width-alt:
 950;width:20pt'>
 <col class=xl6553527828 width=214 style='mso-width-source:userset;mso-width-alt:
 7826;width:161pt'>
 <col class=xl6553527828 width=22 style='mso-width-source:userset;mso-width-alt:
 804;width:17pt'>
 <col class=xl6553527828 width=188 style='mso-width-source:userset;mso-width-alt:
 6875;width:141pt'>
 <col class=xl6553527828 width=72 style='mso-width-source:userset;mso-width-alt:
 2633;width:100pt'>
 <col class=xl6553527828 width=71 span=2 style='mso-width-source:userset;
 mso-width-alt:2596;width:100pt'>
 <col class=xl6553527828 width=79 style='mso-width-source:userset;mso-width-alt:
 2889;width:59pt'>
 <col class=xl6553527828 width=21 style='mso-width-source:userset;mso-width-alt:
 768;width:16pt'>
 <col class=xl6553527828 width=32 style='mso-width-source:userset;mso-width-alt:
 1170;width:24pt'>
 <col class=xl6553527828 width=179 style='mso-width-source:userset;mso-width-alt:
 6546;width:134pt'>
 <col class=xl6553527828 width=26 style='mso-width-source:userset;mso-width-alt:
 950;width:20pt'>
 <col class=xl6553527828 width=33 style='mso-width-source:userset;mso-width-alt:
 1206;width:25pt'>
 <tr height=4 style='mso-height-source:userset;height:3.0pt'>
  <td colspan=11 height=4 class=xl13327828 width=975 style='border-right:1.0pt solid black;
  height:3.0pt;width:732pt'>&nbsp;</td>
  <td class=xl6553527828 width=26 style='width:20pt'></td>
  <td class=xl6553527828 width=33 style='width:25pt'></td>
 </tr>
 

 <tr class=xl6553527828 height=27 style='mso-height-source:userset;height:20.25pt'>
  <td colspan=11 height=27 class=xl16127828 width=975 style='border-right:1.0pt solid black;
  height:20.25pt;width:732pt'>VII.<span style='mso-spacerun:yes'> 
  </span>LEARNING AND DEVELOPMENT (L&amp;D) INTERVENTIONS/TRAINING PROGRAMS
  ATTENDED</td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>
 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=11 height=21 class=xl13727828 width=975 style='border-right:1.0pt solid black;
  height:15.75pt;width:732pt'>(Start from the most recent L&amp;D/training
  program and include only the relevant L&amp;D/training taken for the last
  five (5) years for Division Chief/Executive/Managerial positions)</td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>
 <tr height=24 style='mso-height-source:userset;height:18.0pt'>
  <td rowspan=2 height=58 class=xl14427828 style='height:43.5pt'>30.</td>
  <td colspan=3 rowspan=3 class=xl10827828 width=424 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:319pt'>TITLE OF LEARNING AND DEVELOPMENT
  INTERVENTIONS/TRAINING PROGRAMS<span
  style='mso-spacerun:yes'>                                  </span>(Write in
  full)</td>
  <td colspan=2 rowspan=2 class=xl10827828 width=143 style='border-right:.5pt solid black;
  border-bottom:.5pt solid black;width:107pt'>INCLUSIVE DATES OF
  ATTENDANCE<span
  style='mso-spacerun:yes'>                                                                                                   
  </span>(mm/dd/yyyy)</td>
  <td rowspan=3 class=xl10627828 width=71 style='border-bottom:.5pt solid black;
  width:53pt;font-size:12px;'>NUMBER OF HOURS</td>
  <td rowspan=3 class=xl11227828 width=79 style='border-bottom:.5pt solid black;
  width:59pt; font-size: 12px;'>Type of LD<br>
    <span style='mso-spacerun:yes'> </span>( Managerial/ Supervisory/<br>
    Technical/etc)<span style='mso-spacerun:yes'> </span></td>
  <td colspan=3 rowspan=3 class=xl10727828 width=232 style='border-right:1.0pt solid black;
  border-bottom:.5pt solid black;width:174pt'><span
  style='mso-spacerun:yes'> </span>CONDUCTED/ SPONSORED BY<span
  style='mso-spacerun:yes'>                                                              
  </span>(Write in full)</td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>
 <tr height=34 style='mso-height-source:userset;height:25.5pt'>
  <td height=34 class=xl6553527828 style='height:25.5pt'></td>
  <td class=xl6553527828></td>
 </tr>
 <tr height=18 style='mso-height-source:userset;height:13.5pt'>
  <td height=18 class=xl6727828 style='height:13.5pt'>&nbsp;</td>
  <td class=xl6827828 style='border-top:none'>From</td>
  <td class=xl6627828 style='border-top:none;border-left:none'>To</td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <form class="pds-training-form" id="pds-training-form" method="POST" enctype="multipart/form-data">
 
 <input type="text" name="user_id"  value="<?php echo $user->id; ?>" style="height: 30px;border: none;">
 <input type="text" name="employee_id"  value="<?php if(isset($empID[0]->employee_no)){ echo $empID[0]->employee_no; }else{ echo 0; } ?>" style="height: 30px;border: none;">

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[0]->training_title) ? $secVII[0]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[0]->training_from) ? $secVII[0]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[0]->training_to) ? $secVII[0]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[0]->training_hours) ? $secVII[0]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[0]->training_type) ? $secVII[0]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[0]->training_sponsor) ? $secVII[0]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[1]->training_title) ? $secVII[1]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[1]->training_from) ? $secVII[1]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[1]->training_to) ? $secVII[1]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[1]->training_hours) ? $secVII[1]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[1]->training_type) ? $secVII[1]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[1]->training_sponsor) ? $secVII[1]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[2]->training_title) ? $secVII[2]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[2]->training_from) ? $secVII[2]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[2]->training_to) ? $secVII[2]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[2]->training_hours) ? $secVII[2]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[2]->training_type) ? $secVII[2]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[2]->training_sponsor) ? $secVII[2]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[3]->training_title) ? $secVII[3]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[3]->training_from) ? $secVII[3]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[3]->training_to) ? $secVII[3]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[3]->training_hours) ? $secVII[3]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[3]->training_type) ? $secVII[3]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[3]->training_sponsor) ? $secVII[3]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[4]->training_title) ? $secVII[4]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[4]->training_from) ? $secVII[4]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[4]->training_to) ? $secVII[4]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[4]->training_hours) ? $secVII[4]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[4]->training_type) ? $secVII[4]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[4]->training_sponsor) ? $secVII[4]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[5]->training_title) ? $secVII[5]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[5]->training_from) ? $secVII[5]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[5]->training_to) ? $secVII[5]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[5]->training_hours) ? $secVII[5]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[5]->training_type) ? $secVII[5]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[5]->training_sponsor) ? $secVII[5]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[6]->training_title) ? $secVII[6]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[6]->training_from) ? $secVII[6]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[6]->training_to) ? $secVII[6]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[6]->training_hours) ? $secVII[6]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[6]->training_type) ? $secVII[6]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[6]->training_sponsor) ? $secVII[6]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[7]->training_title) ? $secVII[7]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[7]->training_from) ? $secVII[7]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[7]->training_to) ? $secVII[7]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[7]->training_hours) ? $secVII[7]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[7]->training_type) ? $secVII[7]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[7]->training_sponsor) ? $secVII[7]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[8]->training_title) ? $secVII[8]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[8]->training_from) ? $secVII[8]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[8]->training_to) ? $secVII[8]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[8]->training_hours) ? $secVII[8]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[8]->training_type) ? $secVII[8]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[8]->training_sponsor) ? $secVII[8]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[9]->training_title) ? $secVII[9]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[9]->training_from) ? $secVII[9]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[9]->training_to) ? $secVII[9]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[9]->training_hours) ? $secVII[9]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[9]->training_type) ? $secVII[9]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[9]->training_sponsor) ? $secVII[9]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[10]->training_title) ? $secVII[10]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[10]->training_from) ? $secVII[10]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[10]->training_to) ? $secVII[10]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[10]->training_hours) ? $secVII[10]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[10]->training_type) ? $secVII[10]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[10]->training_sponsor) ? $secVII[10]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[11]->training_title) ? $secVII[11]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[11]->training_from) ? $secVII[11]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[11]->training_to) ? $secVII[11]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[11]->training_hours) ? $secVII[11]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[11]->training_type) ? $secVII[11]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[11]->training_sponsor) ? $secVII[11]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[12]->training_title) ? $secVII[12]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[12]->training_from) ? $secVII[12]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[12]->training_to) ? $secVII[12]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[12]->training_hours) ? $secVII[12]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[12]->training_type) ? $secVII[12]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[12]->training_sponsor) ? $secVII[12]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[13]->training_title) ? $secVII[13]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[13]->training_from) ? $secVII[13]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[13]->training_to) ? $secVII[13]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[13]->training_hours) ? $secVII[13]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[13]->training_type) ? $secVII[13]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[13]->training_sponsor) ? $secVII[13]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[14]->training_title) ? $secVII[14]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[14]->training_from) ? $secVII[14]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[14]->training_to) ? $secVII[14]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[14]->training_hours) ? $secVII[14]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[14]->training_type) ? $secVII[14]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[14]->training_sponsor) ? $secVII[14]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[15]->training_title) ? $secVII[15]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[15]->training_from) ? $secVII[15]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[15]->training_to) ? $secVII[15]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[15]->training_hours) ? $secVII[15]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[15]->training_type) ? $secVII[15]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[15]->training_sponsor) ? $secVII[15]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[16]->training_title) ? $secVII[16]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[16]->training_from) ? $secVII[16]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[16]->training_to) ? $secVII[16]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[16]->training_hours) ? $secVII[16]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[16]->training_type) ? $secVII[16]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[16]->training_sponsor) ? $secVII[16]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[17]->training_title) ? $secVII[17]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[17]->training_from) ? $secVII[17]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[17]->training_to) ? $secVII[17]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[17]->training_hours) ? $secVII[17]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[17]->training_type) ? $secVII[17]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[17]->training_sponsor) ? $secVII[17]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[18]->training_title) ? $secVII[18]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[18]->training_from) ? $secVII[18]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[18]->training_to) ? $secVII[18]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[18]->training_hours) ? $secVII[18]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[18]->training_type) ? $secVII[18]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[18]->training_sponsor) ? $secVII[18]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>

 <tr class=xl6553527828 height=31 style='mso-height-source:userset;height:23.25pt'>
  <td colspan=4 height=31 class=xl18227828 width=450 style='border-left: .5pt solid black;border-right:.5pt solid black;
  height:23.25pt;width:339pt;padding:3px;'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[19]->training_title) ? $secVII[19]->training_title : ''); ?>" style="height:30px; width:538px; border: none;border-color: transparent;"></td>
  <td class=xl9127828 ><input type="date" name="pds3[]" value="<?php echo (isset($secVII[19]->training_from) ? $secVII[19]->training_from : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl6527828 border-left:none'><input type="date" name="pds3[]" value="<?php echo (isset($secVII[19]->training_to) ? $secVII[19]->training_to : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl8027828 width=71 style='border-left:none;width:53pt'><input type="number" name="pds3[]" value="<?php echo (isset($secVII[19]->training_hours) ? $secVII[19]->training_hours : ''); ?>" style="height:30px; width:155px; border: none;border-color: transparent;"></td>
  <td class=xl7827828 style='border-top:none;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[19]->training_type) ? $secVII[19]->training_type : ''); ?>" style="height:30px; width:90px; border: none;border-color: transparent;"></td>
  <td colspan=3 class=xl17827828 style='padding:3px;border-right: .5pt solid black;border-left:none'><input type="text" name="pds3[]" value="<?php echo (isset($secVII[19]->training_sponsor) ? $secVII[19]->training_sponsor : ''); ?>" style="height:30px; width:270px; border: none;border-color: transparent;"></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>
 
 </form>

 <tr height=18 style='height:13.5pt'>
  <td colspan=11 height=18 class=xl9327828 style='border-right:1.0pt solid black;
  height:13.5pt'><a href="{{ url('sheet3/training3').'/'.$user->id }}" style="color:red;" target="_blank">(Continue on separate sheet if necessary)</a></br><button type="button" class="btn btn-success btn-submit-secVII" ><?php echo (count($secVII) > 0 ? 'Update Section VII' : 'Save Section VII' ); ?></button></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>
 
 <tr height=38 style='mso-height-source:userset;height:28.5pt'>
  <td colspan=2 height=38 class=xl9227828 width=240 style='border-right:1.0pt solid black;
  height:28.5pt;width:181pt'>SIGNATURE</td>
  <td class=xl7527828 width=22 style='width:17pt'>&nbsp;</td>
  <td class=xl7527828 width=188 style='width:141pt'>&nbsp;</td>
  <td class=xl7527828 width=72 style='width:54pt'>&nbsp;</td>
  <td class=xl7227828>DATE</td>
  <td colspan=4 class=xl9627828 style='border-right:1.0pt solid black;
  border-left:none'><?php echo date('Y-m-d'); ?></td>
  <td class=xl7427828 style='border-left:none'><span style='mso-spacerun:yes'> 
  </span>CS FORM 212 (Revised 2017), Page 3 <span style='display:none'>of 4</span></td>
  <td class=xl7327828></td>
  <td class=xl7327828></td>
 </tr>
 <tr height=10 style='mso-height-source:userset;height:7.5pt'>
  <td height=10 class=xl6553527828 style='height:7.5pt'></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>
 <tr height=4 style='mso-height-source:userset;height:3.0pt'>
  <td height=4 class=xl6553527828 style='height:3.0pt'></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
  <td class=xl6553527828></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=26 style='width:20pt'></td>
  <td width=214 style='width:161pt'></td>
  <td width=22 style='width:17pt'></td>
  <td width=188 style='width:141pt'></td>
  <td width=72 style='width:54pt'></td>
  <td width=71 style='width:53pt'></td>
  <td width=71 style='width:53pt'></td>
  <td width=79 style='width:59pt'></td>
  <td width=21 style='width:16pt'></td>
  <td width=32 style='width:24pt'></td>
  <td width=179 style='width:134pt'></td>
  <td width=26 style='width:20pt'></td>
  <td width=33 style='width:25pt'></td>
 </tr>
 <![endif]>
</table>

</div>


<!----------------------------->
<!--END OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD-->
<!----------------------------->
</body>

</html>
