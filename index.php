<?php	if ($_SERVER['REQUEST_METHOD'] == 'POST') {     	header('Location:index.php');	$handle = fopen('YemekListesi.txt', 'a');	fwrite($handle, '----------------------------------------------------------------------------'."\n");  	foreach($_POST as $variable => $value) {	fwrite($handle, $variable.': '.$value."\n");}   	fclose($handle);	exit;	} ?><html lang="en">	<head>		<title>Yemek Tarifi</title>		<meta charset="utf-8">		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">	</head>	<body>	<h5 class="information mt-4" align="center">Yaptığın Lezzetli yemeklerin tarifini  bizimle paylaşmak ister misin?</h5>	<div class="container mt-5 mb-5 d-flex justify-content-center">    <div class="card px-1 py-4">	<form action="index.php" method="post">        <div class="card-body">            <h6 class="information mt-2">Aşağıdaki alanları doldurarak yemeğini bizimle paylaşabilirsin :)</h6>            <div class="row mt-5">                <div class="col-sm-12">                    <div class="form-group">                        <!-- <label for="name">Name</label> --> <input name="adSoyad" class="form-control" type="text" placeholder="Adınız & Soyadınız" required> </div>                </div>            </div>            <div class="row">                <div class="col-sm-12">                    <div class="form-group">                        <div class="input-group"> <input name="telefonNo" class="form-control" type="text" placeholder="Telefon Numaranız" required> </div>                    </div>                </div>            </div>            <div class="row">                <div class="col-sm-12">                    <div class="form-group">                        <div class="input-group"> <input name="eMail" class="form-control" type="text" placeholder="E-Posta Adresiniz" required> </div>                    </div>                </div>            </div>			<div class="row">                <div class="col-sm-12">                    <div class="form-group">                        <div class="input-group"> <input name="yemekAdi" class="form-control" type="text" placeholder="Yemeğin Adı" required> </div>                    </div>                </div>            </div>			<div class="row">                <div class="col-sm-12">                    <div class="form-group">                        <div class="input-group"> <textarea name="gerekliMalzemeler" class="form-control" type="text" placeholder="Gerekli Malzemeler ve Ölçeklerini Giriniz" required></textarea></div>                    </div>                </div>            </div>			<div class="row">                <div class="col-sm-12">                    <div class="form-group">                        <div class="input-group"> <textarea name="tarif" class="form-control" type="text" placeholder="Yemeğinizin Yapılışını Tarif Ediniz" required></textarea></div>                    </div>                </div>            </div>            <button class="btn btn-primary btn-block confirm-button">Gönder</button>        </div>	</form>    </div></div>	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>	</body></html>