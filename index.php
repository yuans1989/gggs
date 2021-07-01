<?php $IP = $_SERVER['SERVER_ADDR'];?>
<?php $URL = $_SERVER['HTTP_HOST'];?>
<meta name="referrer" content="never">
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="renderer" content="webkit">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<title>个人云服务器</title>
	</head>
	<body>
		<div id="wrap">
				<div id="logo">
					<img class="logo" src="img/logo.png">
					<!-- <h1>个人云服务器</h1> -->
					<div id="kg-btn" class="">
						<input class='tgl tgl-flip' id='qieh' type='checkbox' />
						<label class='tgl-btn' data-tg-off='内网' data-tg-on='外网' for='qieh'></label>
				</div>
			</div>
			<div id="main">
			<!-- 外网访问地址 -->
				<div id="app" class="app animated fadeInLeft">
					<ul>
						<li>
							<a href="http://192.168.2.251:5000" target="_blank"><img class="shake" src="img/png/synology.png" /><strong>群晖控制台</strong></a>
						</li>
						<li>
							<a href="http://192.168.2.251:8096" target="_blank"><img class="shake" src="img/png/emby.png" /><strong>电影电视剧</strong></a>
						</li>
						<li>
							<a href="http://myss.myds.me:8080" target="_blank"><img class="shake" src="img/png/qb.png" /><strong>qBittorrent</strong></a>
						</li>
						<li>
							<a href="/photo/" target="_blank"><img class="shake" src="img/png/Photos.png" /><strong>相册</strong></a>
						</li>
						<li>
							<a href="https://myss.myds.me:8920" target="_blank"><img class="shake" src="img/png/jellyfin.png" /><strong>视频</strong></a>
						</li>
						<li>
							<a href="http://myss.myds.me:81" target="_blank"><img class="shake" src="img/png/tz.png" /><strong>探针</strong></a>
						</li>
						<li>
							<a href="/ariang/" target="_blank"><img class="shake" src="img/png/Downloads.png" /><strong>AriaNg</strong></a>
						</li>

						<li>
							<a href="/office/" target="_blank"><img class="shake" src="img/png/office.png" /><strong>OFFICE</strong></a>
						</li>
						<li>
							<a href="http://myss.myds.me:9091" target="_blank"><img class="shake" src="img/png/Transmission.png" /><strong>Transmission</strong></a>
						</li> 
						
						<li>
							<a href="http://myss.myds.me:8081" target="_blank"><img class="shake" src="img/png/fb.png" /><strong>FileBrowser</strong></a>
						</li>
						  <li>
							<a href="/phpmyadmin/" target="_blank"><img class="shake" src="img/png/phpmyadmin.png" /><strong>phpMyAdmin</strong></a>
						</li>
						<li>
							<a href="/h5ai/" target="_blank"><img class="shake" src="img/png/FontExplorer-X.png" /><strong>H5ai</strong></a>
						</li>
						<li>
							<a href="https://cn.bing.com/" target="_blank"><img class="shake" src="img/png/bing.png" /><strong>Bing搜索</strong></a>
						</li> 
						<li>
							<a href="https://www.baidu.com/" target="_blank"><img class="shake" src="img/png/Baidu.png" /><strong>百度搜索</strong></a>
						</li> 
						<li>
							<a href="/nextcloud/" target="_blank"><img class="shake" src="img/png/nextcloud.png" /><strong>NextCloud</strong></a>
						</li> 
						<li>
							<a href="http://<?php echo $IP;?>:4200" target="_blank"><img class="shake" src="img/png/ttyd.png" /><strong>超级终端</strong></a>
						</li> 
						<li>
							<a href="http://<?php echo $IP;?>:8000" target="_blank"><img class="shake" src="img/png/seafile.png" /><strong>文件同步</strong></a>
						</li> 
						<li>
							<a href="http://myss.myds.me:9000" target="_blank"><img class="shake" src="img/png/wind.png" /><strong>容器管理</strong></a>
						</li> 
					</ul>
				</div>
				<!-- 内网网访问地址 -->
				<div id="app1" class="app animated fadeInRight">
					<ul>
						<li>
							<a href="https://myss.myds.me:5001" target="_blank"><img class="shake" src="img/png/synology.png" /><strong>群晖控制台</strong></a>
						</li>
						<li>
							<a href="https://myss.myds.me:8920" target="_blank"><img class="shake" src="img/png/emby.png" /><strong>电影电视剧</strong></a>
						</li>
						<li>
							<a href="http://192.168.123.251:8080" target="_blank"><img class="shake" src="img/png/qb.png" /><strong>qBittorrent</strong></a>
						</li>
						<li>
							<a href="https://myss.myds.me/photo/" target="_blank"><img class="shake" src="img/png/Photos.png" /><strong>相册</strong></a>
						</li>
						<li>
							<a href="http://192.168.123.251:8384" target="_blank"><img class="shake" src="img/png/syn.png" /><strong>群晖Sync</strong></a>
						</li>
						<li>
							<a href="http://192.168.123.1:8384" target="_blank"><img class="shake" src="img/png/syn.png" /><strong>路由器Sync</strong></a>
						</li>
						<li>
							<a href="/ariang/" target="_blank"><img class="shake" src="img/png/Downloads.png" /><strong>AriaNg</strong></a>
						</li>

						<li>
							<a href="http://192.168.123.251:3339" target="_blank"><img class="shake" src="img/png/Podcats.png" /><strong>Adguard</strong></a>
						</li>
						<li>
							<a href="http://192.168.123.251:9091" target="_blank"><img class="shake" src="img/png/Transmission.png" /><strong>Transmission</strong></a>
						</li> 
						
						<li>
							<a href="http://<?php echo $IP;?>:8088" target="_blank"><img class="shake" src="img/png/fb.png" /><strong>FileBrowser</strong></a>
						</li>
						  <li>
							<a href="/phpmyadmin/" target="_blank"><img class="shake" src="img/png/phpmyadmin.png" /><strong>phpMyAdmin</strong></a>
						</li>
						<li>
							<a href="/h5ai/" target="_blank"><img class="shake" src="img/png/FontExplorer-X.png" /><strong>H5ai</strong></a>
						</li>
						<li>
							<a href="https://cn.bing.com/" target="_blank"><img class="shake" src="img/png/bing.png" /><strong>Bing搜索</strong></a>
						</li> 
						<li>
							<a href="https://www.baidu.com/" target="_blank"><img class="shake" src="img/png/Baidu.png" /><strong>百度搜索</strong></a>
						</li> 
						<li>
							<a href="/nextcloud/" target="_blank"><img class="shake" src="img/png/nextcloud.png" /><strong>NextCloud</strong></a>
						</li> 
						<li>
							<a href="http://<?php echo $IP;?>:4200" target="_blank"><img class="shake" src="img/png/ttyd.png" /><strong>超级终端</strong></a>
						</li> 
						<li>
							<a href="http://<?php echo $IP;?>:8000" target="_blank"><img class="shake" src="img/png/seafile.png" /><strong>文件同步</strong></a>
						</li> 
						<li>
							<a href="http://192.168.123.251:9000" target="_blank"><img class="shake" src="img/png/wind.png" /><strong>容器管理</strong></a>
						</li> 
					</ul>
				</div>
				<div style="clear: both;"></div>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
	</body>
</html>