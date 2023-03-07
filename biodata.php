<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="biodata.css" />
    <script
      src="https://kit.fontawesome.com/9705e16c03.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@300&family=Ubuntu:wght@500&display=swap"
      rel="stylesheet"
    />
    <title>Abdurrahman Al Hakim</title>
  </head>
  <body>
    <?php 
    $nama_depan = "Abdurrahman";
    $nama_belakang="Al Hakim";
    $tanggal_lahir= new DateTime('21.8.2003');
    $sekarang=new DateTime(date('d.m.y'));
    $umur_sekarang=$sekarang->diff($tanggal_lahir);
    $program_studi="Informatika";
    $universitas="Univeritas Pembangunan Nasional “Veteran” Jawa
    Timur";
    $hobi=array("Programming Ringan", "Bermain Game", "Mendengarkan Musik");
    $riwayat_pendidikan=array("Sekolah Menengah Atas Negeri 9 Surabaya", $universitas);
    $tahun_pendidikan=array("2019-2021", "2021-Sekarang");
    $pengalaman_pencapaian=array("Anggota Divisi Acara SONIC 2021", "MC dan Anggota Divisi Acara MOSAIK 2022", "Ketua Divisi Acara FasilkomFest 2022", "Juara 3 UKM Global Languange Club Mini Competition 2022", "Sertifikasi <i>Japanese Languange Profiency Test</i> N5");
    $pengalaman_pencapaian_year=array("2021", "2022", "2022", "2022");

    ?>
    <section class="introduction">
      <div>
        <table class="intro">
          <tr>
            <td rowspan="3">
              <img
                src="Photos\fotoprofil.png"
                alt="abdurrahman al hakim"
                class="fotoprofil"
              />
            </td>
            <td><h3>Hai!! Kenalin, Aku</h3></td>
          </tr>
          <tr>
            <td><h1><?php echo "$nama_depan $nama_belakang,"  ;?></h1></td>
          </tr>
          <tr>
            <td>
              <h3>
                Panggil saja Hakim. Umurku <?php echo $umur_sekarang->format("%y") ;?> tahun.
                Saat ini saya tengah menempuh jenjang S1 program studi
                <?php echo "$program_studi di $universitas." ;?> 
              </h3>
            </td>
          </tr>
        </table>
      </div>
    </section>

    <section class="Hobbies">
      <div>
        <h2>HOBI SAYA</h2>
        <table class="hobby-outer">
          <tr>
            <td>
              <table class="card hobbies">
                <tr>
                  <td>
                    <img
                      src="Photos\programming icon.png"
                      alt="Programming Icon"
                    />
                  </td>
                </tr>
                <tr>
                  <td><h3><?php echo $hobi[0];?></h3></td>
                </tr>
              </table>
            </td>
            <td>
              <table class="card hobbies">
                <tr>
                  <td>
                    <img src="Photos\gaming icon.png" alt="Gaming Icon" />
                  </td>
                </tr>
                <tr>
                  <td><h3><?php echo $hobi[1];?></h3></td>
                </tr>
              </table>
            </td>
            <td>
              <table class="card hobbies">
                <tr>
                  <td><img src="Photos\music icon.png" alt="Music Icon" /></td>
                </tr>
                <tr>
                  <td><h3><?php echo $hobi[2];?></h3></td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </div>
    </section>
    <section class="Education">
      <div>
        <h2>RIWAYAT PENDIDIKAN</h2>
        <table class="card education">
          <tr>
            <td rowspan="2" class="logo-td">
              <img src="Photos\sman 9.png" alt="logo sman 9" class="logo" />
            </td>
            <td><h3><?php echo $riwayat_pendidikan[0];?></h3></td>
          </tr>
          <tr>
            <td class="year-desc"><h4>Kelas MIPA (<?php echo $tahun_pendidikan[0];?>)</h4></td>
          </tr>
        </table>
        <table class="card education">
          <tr>
            <td rowspan="2" class="logo-td">
              <img src="Photos\upnvjt.png" alt="logo upnvjt" class="logo" />
            </td>
            <td>
              <h3><?php echo $riwayat_pendidikan[1];?></h3>
            </td>
          </tr>
          <tr>
            <td class="year-desc">
              <h4>Program Studi Informatika (<?php echo $tahun_pendidikan[1];?>)</h4>
            </td>
          </tr>
        </table>
      </div>
    </section>

    <section class="Experience Achievement">
      <div>
        <h2>PENGALAMAN DAN PENCAPAIAN</h2>
        <table class="ExpAcv-outer">
          <tr class="ExpAcv-outer row">
            <td>
              <table class="card expacv">
                <tr>
                  <td rowspan="2" class="logo-td">
                    <img
                      src="Photos\acara icon.png"
                      alt="ikon divisi acara"
                      class="logo"
                    />
                  </td>
                  <td class="expacv-desc">
                    <h3><?php echo $pengalaman_pencapaian[0] ;?></h3>
                  </td>
                </tr>
                <tr>
                  <td class="year-desc"><h4><?php echo $pengalaman_pencapaian_year[0] ;?></h4></td>
                </tr>
              </table>
            </td>
            <td>
              <table class="card expacv">
                <tr>
                  <td rowspan="2" class="logo-td">
                    <img src="Photos\mc icon.png" alt="ikon mc" class="logo" />
                  </td>
                  <td class="expacv-desc">
                    <h3><?php echo $pengalaman_pencapaian[1] ;?></h3>
                  </td>
                </tr>
                <tr>
                  <td class="year-desc"><h4><?php echo $pengalaman_pencapaian_year[1] ;?></h4></td>
                </tr>
              </table>
            </td>
          </tr>
          <tr class="ExpAcv-outer row">
            <td>
              <table class="card expacv">
                <tr>
                  <td rowspan="2" class="logo-td">
                    <img
                      src="Photos\kadiv icon.png"
                      alt="ikon kadiv acara"
                      class="logo"
                    />
                  </td>
                  <td class="expacv-desc">
                    <h3><?php echo $pengalaman_pencapaian[2] ;?></h3>
                  </td>
                </tr>
                <tr>
                  <td class="year-desc"><h4><?php echo $pengalaman_pencapaian_year[2] ;?></h4></td>
                </tr>
              </table>
            </td>
            <td>
              <table class="card expacv">
                <tr>
                  <td rowspan="2" class="logo-td">
                    <img
                      src="Photos\3rd place icon.png"
                      alt="ikon juara 3"
                      class="logo"
                    />
                  </td>
                  <td class="expacv-desc">
                    <h3>
                    <?php echo $pengalaman_pencapaian[3] ;?>
                    </h3>
                  </td>
                </tr>
                <tr>
                  <td class="year-desc"><h4><?php echo $pengalaman_pencapaian_year[3] ;?></h4></td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <table class="card expacv last">
          <tr>
            <td rowspan="2" class="logo-td">
              <img src="Photos\japanese icon.png" alt="JLTP N5" class="logo" />
            </td>
            <td class="expacv-desc">
              <h3><?php echo $pengalaman_pencapaian[4] ;?></h3>
            </td>
          </tr>
        </table>
      </div>
    </section>

    <section class="Contacts">
      <div>
        <h2>HUBUNGI SAYA</h2>
        <table>
          <tr>
            <td>
              <a href="https://wa.me/6282139770773" target="_blank"
                ><img src="Photos\whatsapp icon.png" alt="whatsapp icon"
              /></a>
            </td>
            <td>
              <a href="mailto:abdurrahmanalhakim03@gmail.com" target="_blank"
                ><img src="Photos\gmail icon.png" alt="gmail icon"
              /></a>
            </td>
            <td>
              <a href="https://github.com/ikkehmochi" target="_blank"
                ><img src="Photos\github icon.png" alt="github icon"
              /></a>
            </td>
            <td>
              <a href="https://www.instagram.com/akimforce/" target="_blank"
                ><img src="Photos\instagram icon.png" alt="instagram icon"
              /></a>
            </td>
          </tr>
        </table>
        <h5>Icons by <a href="https://icons8.com/"> ICONS8</a></h5>
      </div>
    </section>
  </body>
</html>
