
<?php
session_start();
include"connect.php";
	if ($_SESSION['nip'] && $_SESSION['password'] && $_SESSION['jabatan'])
	{
		$sql = mysql_query("SELECT * FROM tb_user WHERE nip='".$_SESSION['nip']."' AND password='".$_SESSION['password']."' AND jabatan='".$_SESSION['jabatan']."'");
    	$hasil = mysql_fetch_assoc($sql);
		
		 $jabatan =  $hasil['jabatan'];
		  if ( $jabatan == "Admin_salesmen")
					{
						 echo "<script>alert(' Anda Bukan Admin Gudang, ');window.location.href=' index.php';</script>";
					}
		  if ( $jabatan == "Admin_penjualan")
					{
						 echo "<script>alert(' Anda Bukan Admin Gudang, ');window.location.href=' index.php';</script>";
					}			
	}
	
	else
	{
		header("location:index.php");
	}
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Administrator </title>
	<link href="css/main.css" rel="stylesheet" type="text/css" />
	

	<!-- Load Template Main Required Scripts -->
		
		
		<!-- Scripts Handlers -->
		<script type="text/javascript" src="js/custom.js"></script>
</head>

<body>

<!-- Side Navigation -->
<!-- Content Wrapper -->
<div id="content-wrapper">

    <!-- Top Bar Navigation -->
    <div class="top-navigation">
        <div class="wrapper">
      
            <div class="user-navigation">
                <ul>
                    
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    
    <!-- Responsive header -->
    <div class="resp">
        <div class="responsive-header">
            <a href="index.html" title=""><img src="images/logo_dark.png" alt="" /></a>
        </div>
        
        
        <div class="responsive-menu">
            <span class="active-menu-item"><img src="images/icons/light/home.png" alt="" />Dashboard</span>
            
                
                    
                </li>
            </ul>
        </div>
        
    </div>
    
    <!-- Title area -->
  <div class="intro-area"></div>
    
    <!-- Dashboard Controls area -->
    <div class="dash-controls">
        <div class="wrapper">
        	<div class="secondary-controller">
            	<ul>
                		<li><a href="data_kamar.php" title=""><img src="img/beranda.png" width="80" height="80" style="box-shadow:3px 3px 5px 1px #333333"><span>Beranda</span></a></li>
<li><a href="data_jasa.php" title=""><img src="img/supplier.png" width="80" height="80" style="box-shadow:3px 3px 5px 1px #333333"><span>jasa</span></a></li>					
                    <li><a href="data_kamar.php" title=""><img src="img/data_barang.png" width="80" height="80" style="box-shadow:3px 3px 5px 1px #333333"><span>kamar</span></a></li>
					<li><a href="data_admin.php" title=""><img src="img/data_barang_masuk.png" width="80" height="80" style="box-shadow:3px 3px 5px 1px #333333"><span>admin</span></a></li>
                    
                    
                </ul>
          </div>
        </div>
    </div>

    
    <!-- Main content wrapper -->
    <div class="wrapper">
    
        <!-- Note -->
        <!-- Horizontal chart -->
        <!-- Widgets -->
<div class="widgets"><!-- 2 columns widgets -->
        	<div class="clear">
				
			</div>
      </div>
    	
        <!-- Events calendar -->
        <!-- Media table -->
<div class="widget">
            <div class="title"><span class="title-icon"><input type="checkbox" id="title-checkbox" name="title-checkbox" /></span><h6>Tabel Data kamar</h6></div>
            <table cellpadding="0" cellspacing="0" width="100%" class="standard-table checkbox-enabled medium-table" id="check-all-box">
                <thead>
                    <tr>
                        
                        
                      <td width="7%" ><div>ID kamar<span></span></div></td>
                      <td width="16%" ><div>id_tamu kamar<span></span></div></td>
					  <td width="20%" ><div>tipe_kamar <span></span></div></td>
					  <td width="9%" ><div>tgl checkin<span></span></div></td>
					  					  <td width="9%" ><div>tgl checkout<span></span></div></td>
					  <td width="9%" ><div>harga<span></span></div></td>
				
					 
                        
                    </tr>
                </thead>
                <tfoot>
                    
                </tfoot>
                <tbody>
				<tr>
				<?php
	include 'connect.php';
	$query = mysql_query("SELECT * FROM kamar");
						  
	
	
	while($data = mysql_fetch_array($query))
	{
		echo "<tr align='center'>";
		echo "<td>".$data['id_kamar']."</td>";
		echo "<td>".$data['id_tamu']."</td>";
		echo "<td>".$data['tipe_kamar']."</td>";
		echo "<td>".$data['tgl_checkin']."</td>";
		echo "<td>".$data['tgl_checkout']."</td>";
		echo "<td>".$data['harga']."</td>";
	
		
		
		
		echo "<td><a href='hapus_kamar.php?id_kamar=".$data['id_kamar']."'>Hapus | </a><a href='edit_kamar.php?id_kamar=".$data['id_kamar']."'>Edit  </a></td>";
		echo "</tr>";
		
		
	}
	
	
	
?>
				    
                </tbody>
            </table>
			
			
			
      </div>
    
	
    	<!-- Dynamic table -->
  </div>
  
  
        	<div class="secondary-controller">
            	<ul>
                	<li><a href="tambah_kamar.php"title=""><img src="img/tambah_data.png" width="50" height="50" style="box-shadow:3px 3px 5px 1px #333333"><span>Tambah Data</span></a></li>
			
</ul>
</div>

    <!-- Footer line -->
  <div id="footer"></div>

</div>

<div class="clear"></div>

</body>
</html>