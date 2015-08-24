
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<title>Administrator </title>
	<link href="css/main.css" rel="stylesheet" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="../script.js"></script>
<script type="text/javascript" src="jquery.validate.min.js"></script>
	<link rel="stylesheet" type="text/css" href="gaya.css">
	

	<!-- Load Template Main Required Scripts -->
		
		
		<!-- Scripts Handlers -->
		<script type="text/javascript" src="js/custom.js"></script>
		<style>

#content { background:#FFFFFF; width:950px; min-height:550px; text-align:left; padding:40px; margin-left:330px  }
#content1 { background:#FFFFFF; width:950px; min-height:550px; text-align:left; padding:20px; margin-left:640px; margin-top:-690px}
h1 {
    padding:20px 10px 20px 10px;
}
h2 {
    padding-left: 0px !important;
}
#header {
    background-color: #CA410B !important;
}
.large { font-size:22px; }
.orange { color:orange; }
.italic { font-style:italic }
.textmiddle {vertical-align:middle;}
.padout { padding-left:25px; padding-right:25px; }
.rounded-corners {
     -moz-border-radius: 40px;
    -webkit-border-radius: 40px;
    -khtml-border-radius: 40px;
    border-radius: 40px;
}
.rounded-corners-top {
     -moz-border-top-radius: 40px;
    -webkit-border-radius: 40px;
    -khtml-border-radius: 40px;
    border-radius: 40px;
}
.right {
    float: right;
}
.scrolldown { padding-left:20px; color:#EDECE8; font-size:40px; font-weight:bold; vertical-align:middle;
	text-shadow: #6374AB 2px 2px 2px;
 }
 .contentblock { margin: 0px 20px; }
 .results { border: 1px solid blue; padding:20px; margin-top:20px; min-height:50px; }
 .blue-bold { font-size:18px; font-weight:bold; color:blue; }

 /* example styles for validation form demo */
#register-form {
    background: url("form-fieldset.gif") repeat-x scroll left bottom #F8FDEF;
    border: 1px solid #DFDCDC;
    border-radius: 15px 15px 15px 15px;
    display: inline-block;
    margin-bottom: 30px;
    margin-left: 20px;
    margin-top: 10px;
    padding: 25px 50px 10px;
    width: 350px;
}

#register-form .fieldgroup {
    background: url("form-divider.gif") repeat-x scroll left top transparent;
    display: inline-block;
    padding: 8px 10px;
    width: 340px;
}

#register-form .fieldgroup label {
    float: left;
    padding: 15px 0 0;
    text-align: right;
    width: 110px;
}

#register-form .fieldgroup input, #register-form .fieldgroup textarea, #register-form .fieldgroup select {
    float: right;
    margin: 10px 0;
    height: 25px;
}

#register-form .submit {
    padding: 10px;
    width: 220px;
    height: 40px !important;
}

#register-form .fieldgroup label.error {
    color: #FB3A3A;
    display: inline-block;
    margin: 4px 0 5px 125px;
    padding: 0;
    text-align: left;
    width: 220px;
}
</style>
<script type="text/javascript">
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#register-form").validate({
                rules: {
                    firstname: "required",
                    lastname: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    agree: "required"
                },
                messages: {
                    firstname: "Silahkan Masukan id_tamu Depan Anda",
                    lastname: "Silahkan Masukan id_tamu Belakang Anda",
                    password: {
                        required: "Silahkan Masukan Password",
                        minlength: "Password Harus Lebih dari 5 Karakter"
                    },
                    email: "Silahkan Masukan Email Yang Benar",
                    agree: "Setujui dengan peraturan yang berlaku"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>
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
                	
                	<li><a href="data_tamu.php" title=""><img src="img/beranda.png" width="80" height="80" style="box-shadow:3px 3px 5px 1px #333333"><span>Beranda</span></a></li>
<li><a href="data_jasa.php" title=""><img src="img/supplier.png" width="80" height="80" style="box-shadow:3px 3px 5px 1px #333333"><span>jasa</span></a></li>					
                    <li><a href="data_kamar.php" title=""><img src="img/data_barang.png" width="80" height="80" style="box-shadow:3px 3px 5px 1px #333333"><span>kamar</span></a></li>
					<li><a href="data_admin.php" title=""><img src="img/data_barang_masuk.png" width="80" height="80" style="box-shadow:3px 3px 5px 1px #333333"><span>admin</span></a></li>
                    
                    
                </ul>
          </div>
        </div>
    </div>

    <div id="content">

<!-- HTML form validasi -->

<tr>
<td>
<?php
	$id_jasa = $_GET['id_jasa'];
	include 'connect.php';
	$query = mysql_query("SELECT * FROM jasa WHERE id_jasa = '$id_jasa'");
						  
	
	
	while($data = mysql_fetch_array($query))
	{
		
		$id_jasa = $data['id_jasa'];
		$id_tamu = $data['id_tamu'];
		$nama_jasa = $data['nama_jasa'];
		$kode_pos = $data['harga_jasa'];
		
	?>	
		<form action="update_jasa.php" method="post" id="register-form" novalidate="novalidate">

    <h2>Tambah Data jasa</h2>

    <div id="form-content">
        <fieldset>

         	<div class="fieldgroup">
                <label for="lastname">ID jasa </label>
                <input type="text" name="id_jasa" value="<?php echo $id_jasa ?>" readonly>
            </div>
            <div class="fieldgroup">
                <label for="lastname">id_tamu jasa</label>
                <input type="text" name="id_tamu" value="<?php echo $id_tamu ?>">
            </div>

            <div class="fieldgroup">
                <label for="email">nama_jasa</label>
                <textarea rows="4" cols="40" name="nama_jasa"><?php echo $nama_jasa ?>
				</textarea>
            </div>

			 <div class="fieldgroup">
                <label for="lastname">harga_jasa</label>
                <input type="text" name="harga_jasa" value="<?php  echo $harga_jasa ?>">
            </div>
			
			
			
            <div class="fieldgroup">
               
                <input type="submit" value="Ubah Data" >
				
            </div>

        </fieldset>
    </div>

	<?php	
		
	}
?>



    
    <!-- Footer line -->
  <div id="footer"></div>

</div>

<div class="clear"></div>

</body>
</html>