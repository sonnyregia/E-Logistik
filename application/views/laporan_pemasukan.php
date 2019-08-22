<?php
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=document_name.doc");
?>
<html>
  <head>
<style>
body{
    font-family:Arial,"times new roman",arial;
    color:black;
    background-color:white;
    margin-left:24px;
    margin-right:20px;
    font-size:14px;
    line-height:20px;
}
hr{
  border-bottom: 4px solid #000000;
  height:0px;
}
table, tr, td{
  background-color:white;
  line-height:1.3;
  vertical-align: top;
}

.page {
  margin:18px;
}

.kop {
  font-size:24px; 
  text-align: center; 
  line-height:0.1;
  margin:22px;
  padding-top: 10px;
}

.kop3 {
  font-size:18px; 
  text-align: center; 
  line-height:0.1;
  margin:22px;
}

.kop2 {
    font-size: 14px;
    font-weight: normal;
    text-align: center;
    line-height: 0.1;
    margin-top: 20px;
}

.header {
  padding-top:1px;
  text-align: center;
  height:110px;
}

.logo {
  float: left;
  margin-top: 8px;
  margin-left: 25px;
  width: 130px;
  height: 130px;
}

#isi {
  line-height:0.1;
  vertical-align: top;
}

#isi2 {
  line-height:0.8;
  vertical-align: top;
}
#isi3 {
  line-height:1;
  vertical-align: top;
}

#isi3 td{
  line-height:1.2;
  vertical-align: top;
  text-align:justify;
}

.indentasi{
  text-indent:40px;
  line-height:1.2;
  text-align:justify;
}
.tittle{
  font-size: 14px;
  margin-left: 5%;
}
.nomor{
  margin-left: 10%;
  margin-top: 10px;
  width: 50%;
}
}
.clear {clear: both;}
*{
    margin:0;
    padding:0;
}

h1{
    font-size:18px;
}
h3{
    font-size:18px;
}
h4{
    font-size:14px;
}
h5{
    font-size:13px;
}
label{
    display:inline-block;
}
.nowrap{
    white-space:nowrap;
}
#body{
    padding:0px;
}
#ktp{
    width:500px;
	margin: 0px;
    border:2px solid #000;
    padding:5px;
}
.header{
    border-bottom:2px solid #000;
    padding-bottom: 40px;
    margin:-5px auto;
}
    </style>
  </head>
  </head>
  <body>
    <div id="content" class="container_12 clearfix">
      <div id="content-main" class="grid_7">
      <div>
      <table width="100%">
        <tr> <img src="<?php echo base_url(); ?>assets/logo.png" alt=""  class="logo"></tr>
        <div class="header">
          <h4 class="kop">KEMENTERIAN LINGKUNGAN HIDUP DAN KEHUTANAN</h4>
          <h4 class="kop">PUSAT PEMBIAYAAN PEMBANGUNAN HUTAN</h4>
          <p class="kop2">
            Alamat : Gedung Manggala Wanabakti, Blok IV Lantai 10 Jalan Gatot Subroto, Jakarta 10270. 
          </p>
          <p class="kop2">
              Telepon/Fax. 021-5720225 Ext. 796
          </p>
          <div style="text-align: center; margin-top: 2.5%"><hr /></div>
        </div>
        <div align="center">
            <h4 class="kop">
              BERITA ACARA PINJAM PAKAI
            </h4>
          </div>
          <div align="center">
            <h4 class="kop3">
              NOMOR : BA.     /P2H/KU/SET.1/02/201915  
            </h4>
          </div>
      </table>
      <table class="nomor" width="100%">
         <div class="tittle">Pada hari Selasa tanggal 12 Februari 2019, kami yang bertandatangan dibawah ini : </div>
          <tr>
            <td width="10%">I.</td>
            <td width="30%">Nama </td>
            <td width="2%">:</td>
            <td width="64%">M. Zakat Anugrah, S.Hut.,M.Si.</td></tr>
          <tr>
            <td></td>
            <td>NIP	</td>
            <td>:</td>
            <td width="20%">19820427 200801 1 002</td>
          </tr>
          <tr>
            <td></td>
            <td>Jabatan	 </td>
            <td>:</td>
            <td width="20%">Kepala Sub Bagian Umum</td>
          </tr>
          <tr>
            <td></td>
            <td>Alamat	</td>
            <td>:</td>
            <td width="35%">Gd. Manggala Wanabakti Blok IV Lt.10
                Jl. Gatot Subroto, Jakarta Pusat 10270.</td>
          </tr>
        </div>
        </table>
        <table class="nomor" width="100%">
          <p style="margin-left: 5%;">
              bertindak dan untuk atas nama Kuasa Pengguna Barang satker Pusat Pembiayaan Pembangunan Hutan Kementerian Lingkungan Hidup dan 
              Kehutanan selanjutnya disebut PIHAK PERTAMA (yang meminjamkan)
          </p>
          <tr>
              <td width="10%">II.</td>
              <td width="20%">Nama </td>
              <td width="2%">:</td>
              <td width="64%">Yugo Septo Ameido, S.Hut</td></tr>
            <tr>
              <td></td>
              <td  width="30%">Tempat & tanggal  lahir	</td>
              <td>:</td>
              <td>Tangerang, 17 September 1990</td>
            </tr>
            <tr>
              <td></td>
              <td>Jabatan	 </td>
              <td>:</td>
              <td width="20%">Petugas Lapangan BLU Pusat P2H</td>
            </tr>
            <tr>
              <td></td>
              <td>Wilayah Kerja</td>
              <td>:</td>
              <td width="35%">Temanggung dan Magelang</td>
            </tr>
        </table>
          <div class="tittle">
                selanjutnya disebut <b>PIHAK KEDUA</b> (yang menerima pinjaman). 
          </div>
          <div class="tittle">
                  PIHAK PERTAMA telah meminjamkan Barang Milik Negara (BMN) kepada PIHAK KEDUA berupa : 
          </div>
        <div align="center">
            <p class="kop3">
               <i style="background-color: yellow;">1 unit GPS merk Oregon type 650 + kabel data+gantungan </i> 
            </p>
          </div>
          <div align="center">
            <p class="kop3">
                <i> Nilai Aset </i>  <i style="background-color: yellow;">Rp.8.400.000,- </i> 
            </p>
          </div>
          <div align="center">
              <p class="kop3">
                  Nomor Asset   <u> 029.01.01.447852.000.2016 </u>
              </p>
            </div>
            <div align="center">
              <p class="kop3">
                  <i style="background-color: yellow; margin-left: 5%;"> 3.06.01.05.038    &nbsp;          142  </i> 
              </p>
            </div>
        <table  width="90%"  style="margin-left: 5%;">
          <div class="tittle">dan PIHAK KEDUA telah menerima pinjaman BMN tersebut dalam keadaan baik dengan ketentuan sebagai berikut :
              </div>
             <tr>
               <td width="2%"> 1.</td>
               <td width="90%">
                  BMN tersebut adalah milik Satker Pusat Pembiayaan Pembangunan Hutan dan dicatat 
                  sebagai aset tetap pada daftar aset Pusat Pembiayaan Pembangunan Hutan;
               </td>
              </tr>
              <tr>
                  <td width="2%"> 2.</td>
                  <td width="100%">
                      BMN tersebut digunakan oleh PIHAK KEDUA untuk mendukung kegiatan operasional di lapangan;
                  </td>
              </tr>
              <tr>
                  <td width="2%"> 3.</td>
                  <td width="100%">
                      PIHAK KEDUA bertanggung jawab atas penggunaan dan pemeliharaan BMN tersebut;
                  </td>
              </tr>
              <tr>
                  <td width="2%"> 4.</td>
                  <td width="100%">
                      PIHAK KEDUA tidak berhak memindahtangankan dan meminjamkan  GPS tersebut diatas kepada pihak lain;
                  </td>
              </tr>
              <tr>
                  <td width="2%"> 5.</td>
                  <td width="100%">
                      Apabila terjadi kerusakan ringan pada GPS tersebut maka PIHAK KEDUA wajib memperbaikinya;
                  </td>
              </tr>
              <tr>
                  <td width="2%"> 6.</td>
                  <td width="100%">
                      Apabila GPS tersebut hilang, PIHAK KEDUA bertanggung jawab atas barang tersebut dan wajib mengganti dengan barang yang sejenis 
                      (merk, type dan spesifikasi yang sama);
                  </td>
              </tr>
              <tr>
                  <td width="2%"> 7.</td>
                  <td width="100%">
                      Peminjaman BMN ini berlaku selama masa Kontrak Kerja antara PIHAK KEDUA dengan 
                      BLU Pusat Pembiayaan Pembangunan Hutan (BLU Pusat P2H);
                  </td>
              </tr>
              <tr>
                  <td width="2%"> 8.</td>
                  <td width="100%">
                      PIHAK KEDUA wajib mengembalikan BMN yang dipinjamkan dalam kondisi baik dan dapat digunakan apabila 
                      Kontrak Kerja antara PIHAK KEDUA dengan BLU Pusat P2H telah berakhir/selesai.
                  </td>
              </tr>
           </div>
           </table>
        <table width="100%">
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr>
            <td  class="indentasi">
              Demikian Berita Acara Peminjaman BMN ini dibuat, untuk dipergunakan sebagaimana mestinya dan penuh tanggung jawab. 
            </td>
          </tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
        </table>
      </td>
    </tr>
  </div>
  <table width="100%">
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr>
      <td></td>
      <td width="30%"  style="padding-left:7.2%">PIHAK KEDUA</td>
      <td  align="center" style="padding-left:20%" >PIHAK PERTAMA</td>
    </tr>
    <tr>
      <td>
      </td>
      <td align="center" width="30%"  style="padding-left:6%">Penyelia Operasional BLU Pusat P2H	</td>
      <td align="center"  style="padding-left:25%">	Kepala Sub Bagian Umum</td>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr>
      <td>
        <td align="center" style="background-color: yellow; ">
          Yugo Septo Ameido, S.Hut
        </td> 
        <td align="center"  style="padding-left:28%">
            M. Zakat Anugrah, S.Hut.,M.Si.
        </td>
    </tr>
    <tr>
        <td>
          <td align="center">
          </td> 
          <td align="center" style="padding-left:27%">
              NIP 19820427 200801 1 002
          </td>
      </tr>
  </table>
       
  </body>
</html>