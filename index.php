<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>Desain Webku</title>
<style type="text/css">
body{
	font-family: arial;
	font-size: 14px;
}
#canvas{
	width: 960px;
	margin: 0 auto;
	border: 1px solid silver;
	
}

#header{
	font-size: 20px;
	padding: 20px;
	background-color: #ccc;
}


#menu{
	background-color: #0066ff;
	
}

#menu ul{
	list-style: none;
	margin: 0;
	padding: 0;
}

#menu ul li.utama{
	display: inline-table;

}

#menu ul li:hover{
	background-color: #0033cc;
}

#menu ul li a{
	display: block;
	text-decoration: none;
	line-height: 40px;
	padding: 0 10px;
	color: #fff;
}
.utama ul{
	display: none;
	position: absolute;
	z-index: 2;
}
.utama:hover ul{
	display: block;
}
.utama ul li{
	display: block;
	background-color: #6cf;
	width: 140px;
}


#isi{
	min-height: 400px;
	padding: 20px;
}

#footer{
	text-align: center;
	padding: 20px;
	background-color: #ccc;
}
.box1 ul{
	display: none;
	position: absolute;
	z-index: 2;
}
.box1:hover ul{
	display: block;
}
.box1 ul li{
	display: block;
	background-color: #6cf;
	width: 140px;
}
}
.element {
        position: relative;
        top: 100px;
        border: 1px solid #000;
    }

</style>
</head>
<body>

<div id="canvas">
	<div id="header">
	Penjualan Handphone
	</div>

	<div id="menu">
	<ul>
		<li class="utama"><a href="">Beranda</a></li>
		<li class="utama"><a href="">Profil</a>
		<ul>
			<li><a href="">Lihat Data</a></li>
			<li><a href="">Tambah Data</a></li>
		</ul>
		</li>
		<li class="utama"><a href="">Galeri</a></li>
	</ul>
	</div>

	<div id="isi">
	
	<ul>
		<img width="150 px" height="200 px"  src="hp1.png" />
		<img width="150 px" height="200 px"  src="hp2.png" />
		<img width="150 px" height="200 px"  src="hp3.png" />
		<img width="150 px" height="200 px"  src="hp4.png" />
		<img width="150 px" height="200 px"  src="hp5.png" />
		
		<li class="box1"><a href="">Belanja</a></li>
		
	</ul>
	</div>

	<div id="footer">
	copyright 2022 - Ian Mulyana-Ane Novianti
	</div>

</body>
</html>