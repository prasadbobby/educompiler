
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
<title>Online Compiler - EDU Materials</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/ace.js"></script>
<link rel="stylesheet" href="https://res.cloudinary.com/techiedelight/raw/upload/v1562007482/compiler/embed.css">
<script src="https://res.cloudinary.com/techiedelight/raw/upload/v1587505774/compiler/embed.min.js"></script>
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>
<body>
<div style="">
<table style="width:100%;position: absolute;top: 50%; left: 50%; transform: translate(-50%,-50%);">
<tr>
<td>
<div class="pullright">
<button id="downloadSourceBtn" title="Download source code">Download</button>
<button onclick="run()" title="Run source code (F9 or Ctrl+Enter)">Run</button>
<button onclick="save()" id="saveBtn" title="Share the source code (Ctrl+S)">Share</button>
</div>
</td></tr>
<tr>
<td>
<div id="sourceEditor">
<div id="ide" class="editor"></div>
</div>
</td>
</tr>
<tr><td>
<table>
<tr>
<td style="width: 75%;">
<small id="statusLine" style="margin:5px;"></small>
<div id="outputEditor"></div>
</td>
<td style="width: 250px; vertical-align: top; padding-left:5px;">
<div class="pullright">
Powered by <a href="http://edumaterials.tech/compiler/" target="_window">&copy;EDU Materials</a>
</div>
</td>
</tr>
</table>
</td></tr>
</table>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/downloadjs/1.4.8/download.min.js"></script>
