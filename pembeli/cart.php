<?php
require 'item.php';

if(isset($_GET['id']) && !isset($_POST['update']))  { 
	$sql = "SELECT * FROM barang WHERE id=".$_GET['id'];
	$result = mysqli_query($con, $sql);
	$product = mysqli_fetch_object($result); 
	$item = new Item();
	$item->id = $product->id;
	$item->nama = $product->nama;
	$item->kategori = $product->kategori;
	$item->fungsi = $product->fungsi;
	$item->harga = $product->harga;
	$item->idpenjual = $product->id_user;
	$iteminstock = $product->stok;
	$item->quantity = 1;
	//Periksa produk dalam keranjang
	$index = -1;
	$cart = unserialize(serialize($_SESSION['cart']));
	for($i=0; $i<count($cart);$i++)
		if ($cart[$i]->id == $_GET['id']){
			$index = $i;
			break;
		}
		if($index == -1) 
			$_SESSION['cart'][] = $item; //$ _SESSION ['cart']: set $ cart sebagai variabel _session
		else {
			
			if (($cart[$index]->quantity) < $iteminstock)
				$cart[$index]->quantity ++;
			$_SESSION['cart'] = $cart;
		}
	}
//Menghapus produk dalam keranjang
	if(isset($_GET['index']) && !isset($_POST['update'])) {
		$cart = unserialize(serialize($_SESSION['cart']));
		unset($cart[$_GET['index']]);
		$cart = array_values($cart);
		$_SESSION['cart'] = $cart;
	}
// Perbarui jumlah dalam keranjang
	if(isset($_POST['update'])) {
		$arrQuantity = $_POST['quantity'];
		$cart = unserialize(serialize($_SESSION['cart']));
		for($i=0; $i<count($cart);$i++) {
			$cart[$i]->quantity = $arrQuantity[$i];
		}
		$_SESSION['cart'] = $cart;
	}
    if(isset($_GET["id"]) || isset($_GET["index"])){
        header('Location: pembeli_daftarPembelian.php');
    } 

	?>