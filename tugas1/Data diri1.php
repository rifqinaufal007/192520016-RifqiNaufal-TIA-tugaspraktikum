<!DOCTYPE html>
<html>
    <head>
        <title> Data_Diri</title>
    <style type="text/css">
    .padding
     { 
        border: 50px solid;
        width: 800px;
        height: 400px;
        padding: 100px 100px 100px 100px;
        text-align:center;
        border-color:indigo;
        background:cyan;
        color:black;	
    }
    </style>
    </head>

    <body>
        <?php
       
        $nama = "Rifqi naufal"; 
        $nim  = "192520016";
        $alamat = "purworejo";
        $alamat_email = "rifqinaufal007@gmail.com";
        $bidang_minat = "-";
        $universitas = "UNIVERSITAS MUHAMMADIYAH PURWOREJO";
        ?>
        
        <div class="padding">
            <h3>DATA DIRI</h3>
            <img src="foto.PNG" width="225px" height="225px">
    
                <p><b>Nama: <?php echo $nama; ?> </p>
                <p>Nim : <?php echo $nim; ?> </p>
                <p>Alamat : <?php echo $alamat; ?> </p>
                <p>Alamat email : <?php echo $alamat_email; ?> </p>
                <p>Bidang minat : <?php echo $bidang_minat; ?> </p>
                <p><?php echo $universitas; ?></b> </p>
        </div>

    </body>    
    </html>




