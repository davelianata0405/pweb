<html>
	 <link rel="stylesheet" hreff="mycss.css">
	 <script src="https://kit.fontawesome.com/e7c5465b8e.js" crossorigin="anonymous"></script>
	 <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
     <head>
        <title>Form Barang</title>
     </head>

     <body>
	 <a href="Tugas12.php" target="_self"><button><i class="fas fa-file-import" style="font-size:15px; color: green;"></i>Insert</button></a>
    <table border="3">
	<tr>
	    <th rowspan="2">Kode</th>
        <th rowspan="2">Nama Barang</th>
	    <th rowspan="2">Satuan</th>
	    <th colspan="2">Harga</th>	   
	    <th rowspan="2">Action</th>	
	</tr>

	<!-- ini baris 2 -->

	<tr>             
	    
	     <td>Beli</td>
	     <td>Jual</td>
	
    <!-- ini baris 3 (isian) -->
	<tr>
	     <td>M01</td>
         <td>Spidol</td>
	     <td>Biji</td>
	     <td>3000</td>
	     <td>5000</td>
	     <td>
		 <a href="latihan1.2.php" target="_self"><button><i class="fas fa-file-pen" style="font-size:15px; color: blue;"></i>UPDATE</button></a>
		 </td>
		 		
	</tr>

    <tr>
	     <td>M02</td>
         <td>Bolpoin</td>
	     <td>Biji</td>
	     <td>1000</td>
	     <td>2000</td>
		 <td>
		 <a href="Tugas11.php" target="_self"><button><i class="fas fa-file-pen" style="font-size:15px; color: blue;"></i>UPDATE</button></a>
	     </td>		
	</tr>
    </table>
     </body>
</html>