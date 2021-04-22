<?php
	session_start();
	if (!isset($_SESSION['access_token'])) {
		header('Location: login.php');
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
<meta name="Description" content="Compile and execute code online in C, C++, Java, Python, PHP, Javascript, C#, Go, Pascal, Ruby, Rust, Bash, Haskell, etc with our online compiler and powerful IDE.">
<meta name="keywords" content="online compiler, online ide, run code online, execute code online">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:image" content="" />
<meta property="og:title" content="EDU Compiler - Online Compiler - C/C++, Java, Python..  | Prasad Bobby"/>
    <meta property="og:image" content="images/admin.jpg"/>
    <meta property="og:description" content="Compile and execute code online in C, C++, Java, Python, PHP, Javascript, C#, Go, Pascal, Ruby, Rust, Bash, Haskell, etc with our online compiler and powerful IDE."/>
<title>EDU Compiler - Online Compiler - C/C++, Java, Python.. | Prasad Bobby</title>
<link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/ace.js"></script>
<link rel="stylesheet" href="css/style.min.css">

<!-- <link href="./edu-2.min.css" rel="stylesheet"> -->

<script src="./js/app.min.js"></script>
<link rel="shortcut icon" href="../images/logo-trans.png" type="image/x-icon">
<link rel="icon" href="../images/logo-trans.png" type="image/x-icon">
 <script type="text/javascript">(function(){var bsa_optimize=document.createElement('script');bsa_optimize.type='text/javascript';bsa_optimize.async=true;bsa_optimize.src='https://cdn-s2s.buysellads.net/pub/techiedelight.js?'+(new Date()-new Date()%3600000);(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa_optimize);})();</script>
<!-- <script src="https://m.servedby-buysellads.com/monetization.js" type="text/javascript"></script> -->
<script>
	let JUDGE0_URL = "https://judge0.p.rapidapi.com/";

	if (window.document.documentMode) {
		alert("Internet Explorer is not supported. Consider upgrading to Chrome for best experience.");
	}
	</script> 
	<style type="text/css">
		body{
			font-family: Nunito, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
		}
	
	</style>
</head>
<body background="#f8f9fc">
<div id="loader"></div>
<nav class="navbar navbar-default navbar-static-top" style="background-image: radial-gradient(circle at bottom left,#00bfff,#14072e); border: none;outline: none;">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#">
<img src="./images/header.png">
</a>
</div>
<div class="navbar-form navbar-right" style="border: none;outline: none;">
<div class="input-group button">
<div class="input-group-btn">
<button id="insertTemplateBtn" type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Insert template">
<i class="fa fa-code" aria-hidden="true"></i>
</button>
</div>
<select class="form-control select-radius" id="selectLanguageBtn">
<option value="50" mode="c_cpp">C (GCC 9.2.0)</option>
<option value="49" mode="c_cpp">C (GCC 8.3.0)</option>
<option value="48" mode="c_cpp">C (GCC 7.4.0)</option>
<option selected value="54" mode="c_cpp">C++ (GCC 9.2.0)</option>
<option value="53" mode="c_cpp">C++ (GCC 8.3.0)</option>
<option value="52" mode="c_cpp">C++ (GCC 7.4.0)</option>
<option value="62" mode="java">Java (OpenJDK 13.0.1)</option>
<option value="71" mode="python">Python (3.8.1)</option>
<option value="70" mode="python">Python (2.7.17)</option>
<option value="68" mode="php">PHP (7.4.1)</option>
<option value="63" mode="javascript">JavaScript (Node.js 12.14.0)</option>
<option value="74" mode="typescript">TypeScript (3.7.4)</option>
<option value="51" mode="csharp">C# (Mono 6.6.0.161)</option>
<option value="45" mode="assembly_x86">Assembly (NASM 2.14.02)</option>
<option value="46" mode="sh">Bash (5.0.0)</option>
<option value="47" mode="pascal">Basic (FBC 1.07.1)</option>
<option value="55" mode="lisp">Common Lisp (SBCL 2.0.0)</option>
<option value="56" mode="d">D (DMD 2.089.1)</option>
<option value="57" mode="elixir">Elixir (1.9.4)</option>
<option value="58" mode="erlang">Erlang (OTP 22.2)</option>
<option value="44" mode="plain_text">Executable</option>
<option value="59" mode="fortran">Fortran (GFortran 9.2.0)</option>
<option value="60" mode="golang">Go (1.13.5)</option>
<option value="61" mode="haskell">Haskell (GHC 8.8.1)</option>
<option value="64" mode="lua">Lua (5.3.5)</option>
<option value="65" mode="ocaml">OCaml (4.09.0)</option>
<option value="66" mode="plain_text">Octave (5.1.0)</option>
<option value="67" mode="pascal">Pascal (FPC 3.0.4)</option>
<option value="69" mode="prolog">Prolog (GNU Prolog 1.4.5)</option>
<option value="72" mode="ruby">Ruby (2.7.0)</option>
<option value="73" mode="rust">Rust (1.40.0)</option>
<option value="43" mode="plain_text">Plain Text</option>
</select>
<div class="input-group-btn" style="padding-left: 4px;">
<input class="form-control args" id="command-line-arguments" type="text" placeholder="Command line arguments"></input>
</div>
</div>
<span class="dropdown">
<button id="controller" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary button" data-loading-text="Saving..." style="background: #36b9cc;">
<i class="fa fa-share-square-o" aria-hidden="true"></i> Share (Ctrl+S)
</button>
<div class="dropdown-menu" aria-labelledby="controller">
<label for="basic-url">Your unique URL</label>
<div class="input-group">
<span class="input-group-addon" id="basic-addon3">https://educompiler.herokuapp.com?~</span>
<input type="text" class="form-control" id="basic-url" placeholder="custom label" aria-describedby="basic-addon3">
</div>
<div style="height: 7px;"></div>
<button type="submit" id="saveBtnCustom" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Save the source code using a custom URL">Save</button>
<button type="submit" id="saveBtn" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Save the source code using a random URL">Generate Random Label</button>
</div>
</span>
<button class="btn btn-success button" id="runBtn" data-loading-text="Running..." data-toggle="tooltip" data-placement="bottom" title="Run source code (Press F9 or Ctrl+Enter)">
<i class="fa fa-play" aria-hidden="true"></i> Run (F9)
</button>

<!-- <button class="btn btn-light button" id="embedSourceCode" data-toggle="tooltip" data-placement="bottom" title="Embed the source code in your website"><i class="fa fa-share" aria-hidden="true"></i> Embed</button> -->
<button class="btn btn-light button" id="toggleEditorOptions" data-toggle="tooltip" data-placement="bottom" title="Customize the editor to suit your preferences"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> Customize</button>
<!-- Nav Item - User Information -->
<span class="nav-item dropdown no-arrow">
	<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	
	<img class="img-profile rounded-circle" src="<?php echo $_SESSION['picture'] ?>" width="40px" style="border-radius:50%; border:2px solid #fff;">
	</a>
	<!-- Dropdown - User Information -->
	<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown" style="width: 50px;">
	<a class="dropdown-item" href="profile.php">&nbsp;&nbsp;&nbsp;&nbsp;
		<i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;&nbsp;
		Profile
	</a>
	
	<!-- <div class="dropdown-divider"></div> -->
	<hr>
	
	<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">&nbsp;&nbsp;&nbsp;&nbsp;
		<i class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;&nbsp;
		Logout
	</a>
	
	</div>
 </span>
</div>
</div>
</nav>
<div id="controller">
<table id="content">
<tr>
<td class="main-content" style="vertical-align: top">
<div class="container-fluid">
<div class="row">
<div id="editorOptions" class="container-fluid">
<br>
<div class="row">
<div class="col-xs-2 pad"><input type="checkbox" id="showLines" checked data-toggle="toggle" data-on="Line Numbers" data-size="small" data-off="Line Numbers" data-onstyle="success" data-width="140"></div>
<div class="col-xs-2 pad"><input type="checkbox" id="autoComplete" checked data-toggle="toggle" data-on="Auto Complete" data-size="small" data-off="Auto Complete" data-onstyle="success" data-width="145"></div>
<div class="col-xs-2 pad"><input type="checkbox" id="wrap" checked data-toggle="toggle" data-on="Line Wrap" data-size="small" data-off="Line Wrap" data-onstyle="success" data-width="120"></div>
<div class="col-xs-2 pad" id="multi_tab"><input type="checkbox" id="multitab" checked data-toggle="toggle" data-on="Multi Tab" data-size="small" data-off="Multi Tabs" data-onstyle="success" data-width="120"></div>
<div class="col-xs-2 pad">
<table style="margin-top: -1px;"><tr style="height: 34px;">
<td style="padding: -2px 10px 0px 0px;">
<input type="checkbox" id="tabs" data-toggle="toggle" data-on="Soft Tabs" data-off="Soft Tabs" data-size="small" data-onstyle="success" data-width="120">
</td>
<td>&nbsp;&nbsp;</td>
<td><input type="number" class="form-control" id="spaces" min="1" max="8" value="4"></td>
</tr>
</table>
</div>
</div>
<br />
<div class="row">
<table>
<tr>
<td class="pad15"><label>Select Editor Theme: </label></td>
<td><select id="themes" class="form-control">
<optgroup label="Bright">
<option value="chrome">Chrome</option>
<option value="clouds">Clouds</option>
<option value="crimson_editor">Crimson Editor</option>
<option value="dawn">Dawn</option>
<option value="dreamweaver">Dreamweaver</option>
<option value="eclipse">Eclipse</option>
<option value="github">GitHub</option>
<option value="iplastic">IPlastic</option>
<option value="solarized_light">Solarized Light</option>
<option selected value="textmate">TextMate</option>
<option value="tomorrow">Tomorrow</option>
<option value="xcode">XCode</option>
<option value="kuroir">Kuroir</option>
<option value="katzenmilch">KatzenMilch</option>
<option value="sqlserver">SQL Server</option>
</optgroup>
<optgroup label="Dark">
<option value="ambiance">Ambiance</option>
<option value="chaos">Chaos</option>
<option value="clouds_midnight">Clouds Midnight</option>
<option value="dracula">Dracula</option>
<option value="cobalt">Cobalt</option>
<option value="gruvbox">Gruvbox</option>
<option value="gob">Green on Black</option>
<option value="idle_fingers">idle Fingers</option>
<option value="kr_theme">krTheme</option>
<option value="merbivore">Merbivore</option>
<option value="merbivore_soft">Merbivore Soft</option>
<option value="mono_industrial">Mono Industrial</option>
<option value="monokai">Monokai</option>
<option value="pastel_on_dark">Pastel on dark</option>
<option value="solarized_dark">Solarized Dark</option>
<option value="terminal">Terminal</option>
<option value="tomorrow_night">Tomorrow Night</option>
<option value="tomorrow_night_blue">Tomorrow Night Blue</option>
<option value="tomorrow_night_bright">Tomorrow Night Bright</option>
<option value="tomorrow_night_eighties">Tomorrow Night 80s</option>
<option value="twilight">Twilight</option>
<option value="vibrant_ink">Vibrant Ink</option>
</optgroup>
</select></td>
</tr>
</table>
<table>
<tr>
<td class="pad15"><label>Font Size: </label></td>
<td><input type="number" id="font_size" class="form-control" min="12" max="24" value="14"></td>
</tr>
</table>
<label class="btn btn-success btn-sm" id="showSettingsMenu">Show all editor options</label>
</div>
</div>
</div>
<div class="row">
<div>
<ul class="nav nav-tabs">
<li role="presentation" id="0" class="active multitabs"><a onclick="swichEditor(0)" href="#"><span id="span0"><strong>Code</strong></span></a></li>
<li id="addTabIcon" class="multitabs" role="presentation" onclick="Editor.addNewTab()"><a href="#"><i class="fa fa-plus-square" aria-hidden="true"></i>
</a></li>
<div id="options" class="pull-right" style="margin-right: 8px;">
<label class="btn btn-default transparent" data-toggle="tooltip" data-placement="bottom" title="Upload source code"><input type="file" id="file-upload" name="file" onchange="loadFromDisk(this, 'editor')" /><i class="fa fa-upload" aria-hidden="true"></i></label>
<button class="btn btn-default transparent" id="indent" data-toggle="tooltip" data-placement="bottom" title="Indent source code"><i class="fa fa-indent" aria-hidden="true"></i></button>
<button class="btn btn-default transparent" onclick="copyToClipboard('input')" data-toggle="tooltip" data-placement="bottom" title="Copy source code"><i class="fa fa-clone" aria-hidden="true"></i></button>
<button class="btn btn-default transparent" id="downloadSourceBtn" data-toggle="tooltip" data-placement="bottom" title="Download source code"><i class="fa fa-download" aria-hidden="true"></i></button>
<button class="btn btn-default transparent" id="showKeyboardShortcuts" data-toggle="tooltip" data-placement="bottom" title="Show all keyboard shortcuts"><i class="fa fa-keyboard-o" aria-hidden="true"></i></button>
<button id="expand" data-toggle="tooltip" data-placement="bottom" title="Maximize editor" onclick="fullScreen();" class="btn btn-default transparent fa fa-arrows-alt"></button>
</div>
</ul>
</div>
</div>
<div id="sourceEditor" class="row" style="box-shadow: 0px 3px 10px rgba(0,0,0,.4);">
<div id="ide_0" class="editor"></div>
</div>
<div class="row labels">
<div id="inputLabel" class="col-xs-5">
<h4>
<i class="fa fa-sign-in" aria-hidden="true"></i> Input <small>optional</small>
<div id="btn-group" class="pull-right">
<label class="btn btn-default transparent" data-toggle="tooltip" data-placement="bottom" title="Upload input file" style="padding: 0px"><input type="file" id="input-upload" name="file" onchange="loadFromDisk(this, 'input')" /><i class="fa fa-upload" aria-hidden="true"></i></label>
</div>
</h4>
</div>
<div id="outputLabel" class="col-xs-7">
<h4>
<i class="fa fa-sign-out" aria-hidden="true"></i> Output
<div id="btn-group" class="pull-right">
<button class="btn btn-default transparent" onclick="copyToClipboard('output')" data-toggle="tooltip" data-placement="bottom" title="Copy output"><i class="fa fa-clone" aria-hidden="true"></i></button>
<button class="btn btn-default transparent" id="downloadOutputBtn" data-toggle="tooltip" data-placement="bottom" title="Download output"><i class="fa fa-download" aria-hidden="true"></i></button>
<button class="btn btn-default transparent fa fa-arrows-alt" id="hideInputBtn" data-toggle="tooltip" data-placement="bottom" title="Maximize output"></button>
</div>
<small id="emptyIndicator">empty</small>
<small class="pull-right" id="statusLine"></small>
</h4>
</div>
</div>
<div id="ioEditor" class="row"  style="box-shadow: 0px 4px 10px rgba(0,0,0,.4);">
<div id="iEditor">
<div id="inputEditor_0" class="col-xs-5 inputEditor"></div>
</div>
<div id="oEditor">
<div id="outputEditor_0" class="col-xs-7 outputEditor"></div>
</div>
</div>
</td>
<td style="vertical-align: top">
<div id="sidebar-primary" class="hidden-xs hidden-sm widget sidebar">
<br /><br />
<div class="ads">

<div id=bsa-zone_1571848001298-1_123456></div>
<br />


</div>
<div hidden class="adblock">

</div>
</div>
</td>
</tr>
</table>
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header" style="border-bottom: 0px;">
<h5 class="modal-title">Are you sure? Your current changes will be lost.</h5>
</div>
<div class="modal-footer" style="border-top: 0px;">
<button type="button" class="btn btn-success" id="modal-btn-yes" data-dismiss="modal">Yes</button>
<button type="button" class="btn btn-primary" id="modal-btn-no" data-dismiss="modal">No</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="alert" role="dialog" tabindex='-1'>
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<div id="model-content"></div>
</div>
<div class="modal-footer modal-footer-style">
<input type="submit" class="btn btn-md btn-link" value="Close" data-dismiss="modal">
</div>
</div>
</div>
</div>
</div>
</div>
<br><br>

  <!-- Logout Modal-->
  <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="logoutModal">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header" style="border-bottom: 0px;">
<h5 class="modal-title">Ready to Leave?</h5>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer" style="border-top: 0px; display:flex !important;">
<a href="./logout.php" class="btn btn-danger" style="margin: 10px !important">Logout</a>

<button type="button" class="btn btn-secondary" style="margin: 10px !important" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>
</div>

<footer class="sticky-footer bg-white">
<div class="container my-auto">
	<div class="copyright text-center my-auto">
	<span style="line-height: 20px; letter-spacing: 2px;">Copyright &copy; Prasad Bobby 2021. <br> All Rights Reserved.</span>
	</div>
</div>

</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/downloadjs/1.4.8/download.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="./js/beautify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.1/ext-language_tools.js"></script>

