<html>
<head>
  <title>Cv</title>
</head>
<body bgcolor="#87CEFA" width="800px">
  <div align="center">
    <center>
      <h1>Cv</h1>
    </center>
    <?php
     $name = "Muhammad Reyhan Amal";
     $ttl = "Makassar, 7 Juli 2002";
     $alamat = "Makassar";
     $email = "reyhanamal01@gmail.com";
     $kuliah = "Jurusan Sistem Informasi, UIN Alauddin Makassar";
     $sma = "SMK kartika";
     $smp = "SMP 20 MKS";
     $sd = "SD inpres perumnas antang";
     ?>
    <hr />
    <h2>
      BIODATA</h2>
    <table width="800px">
      <tr>
        <td width="25%">Nama Lengkap</td>
        <td width="1%">:</td>
        <td><b> <?php echo $name; ?> </b></td>
        <td rowspan="5"><img src="123.jpg" alt="Foto " title="Foto " height="130px" width="100px">
        </td>
      </tr>
      <tr>
        <td>Tanggal lahir </td>
        <td>:</td>
        <td> <?php echo $ttl; ?> </td>
      </tr>
      <tr>
        <td>Address</td>
        <td>:</td>
        <td> <?php echo $alamat; ?> </td>
      </tr>
      <tr>
        <td>E-mail</td>
        <td>:</td>
        <td> <?php echo $email; ?> </td>
      </tr>
      </tbody>
    </table>
    <h2>
      Educational Background</h2>
    <table width="800px">
      <tbody>
        <tr>
          <td width="25%">2020-Sekarang</td>
          <td width="1%">:</td>
          <td> <?php echo $kuliah; ?> </td>
        </tr>
        <tr>
          <td>2017-2020</td>
          <td>:</td>
          <td> <?php echo $sma; ?> </td>
        </tr>
        <tr>
          <td>2014-2017</td>
          <td>:</td>
          <td><?php echo $smp; ?></td>
        <tr>
          <td>2008-2014</td>
          <td>:</td>
          <td><?php echo $sd; ?></td>
        </tr>
        </tr>
    </table>
    <br>
    <a href="achievements.html" title="achievements">
      <h2>
        Achievements >> </h2>
    </a> <!-- Pergi ke file achievements.html  -->
  </div>
</body>

</html>