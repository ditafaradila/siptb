<!DOCTYPE html>
<head>
    <title>UTS Jadwal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <?php require 'navbar_konsumen.php'; ?>

    <div>
        <h1 align="center">JADWAL PELAJARAN</h1>
        <table border="1" align="center" class="jadwal" id="jadwal">
            <tr style="background-color: grey;">
                <th width="100px"></th>
                <th>SENIN</th>
                <th>SELASA</th>
                <th>RABU</th>
                <th>KAMIS</th>
                <th>JUM'AT</th>
            </tr>
            <tr>
                <th style="background-color: grey;">07.30 - 09.10</th>
                <th>TEORI INFORMASI</th>
                <th>PEMROGRAMAN WEB</th>
                <th></th>
                <th>ANALISIS & DESAIN SI</th>
                <th></th>
            </tr>
            <tr>
                <th style="background-color: grey;">09.20 - 11.00</th>
                <th>MACHINE LEARNING</th>
                <th>ANALISIS & DESAIN SI</th>
                <th>KECERDASAN BUATAN</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <th style="background-color: grey;">11.10 - 12.50</th>
                <th></th>
                <th></th>
                <th>MACHINE LEARNING</th>
                <th>TEKNOLOGI & APLIKASI MOBILE</th>
                <th></th>
            </tr>
            <tr>
                <th style="background-color: grey;">13.30 - 15.20</th>
                <th>KECERDASAN BUATAN</th>
                <th>TEKNOLOGI & APLIKASI MOBILE</th>
                <th>PEMROSESAN DATA TERDISTRIBUSI</th>
                <th>ASDOS (SISTEM OPERASI)</th>
                <th>PEMROSESAN DATA TERDISTRIBUSI</th>
            </tr>
            <tr>
                <th style="background-color: grey;">15.30 - 17.00</th>
                <th>MANAJEMEN PENGETAHUAN</th>
                <th></th>
                <th></th>
                <th></th>
                <th>PEMROGRAMAN WEB</th>
            </tr>
        </table>
    </div>

    <br><br>
    <h4 align="center">Link Vclass & GoogleMeet</h4>

    <div>
        <table class="detail" id="detail" border="1" align="center">
            <tr align="center" style="background-color: grey;">
                <th>Vclass</th>
                <th>Gmeet</th>
            </tr>
            <tr>
                <th><a href="https://vclass.unila.ac.id/course/view.php?id=13775">Teori Informasi</a></th>
                <th><a href="meet.google.com/uvx-cprq-jdd">Pak Ridho</a></th>
            </tr>
            <tr>
                <th><a href="https://vclass.unila.ac.id/course/view.php?id=13829">Machine Learning</a></th>
                <th><a href="meet.google.com/ouf-nzpx-yvs">Pak Akmal</a></th>
            </tr>
            <tr>
                <th><a href="https://vclass.unila.ac.id/course/view.php?id=13827">Kecerdasan Buatan</a></th>
                <th><a href="meet.google.com/vta-tctb-qdb">Pak Admi</a></th>
            </tr>
            <tr>
                <th>Manajemen Pengetahuan</th>
                <th><a href="meet.google.com/ntd-qobt-wrc">Pak Irwan</a></th>
            </tr>
            <tr>
                <th><a href="https://vclass.unila.ac.id/course/view.php?id=13777">Pemrograman Web</a></th>
                <th><a href="s.id/dwisakethi">Pak Dwi Sakethi</a></th>
            </tr>
            <tr>
                <th><a href="https://vclass.unila.ac.id/course/view.php?id=13824">Analisis & Desain SI</a></th>
                <th><a href="meet.google.com/jji-jwqz-vfp">Bu Sofi</a></th>
            </tr>
            <tr>
                <th><a href="https://vclass.unila.ac.id/course/view.php?id=13773">Teknologi & Aplikasi Mobile</a></th>
                <th><a href="meet.google.com/wub-qhyz-sxf">Pak Ardiansyah</a></th>
            </tr>
            <tr>
                <th><a href="https://vclass.unila.ac.id/course/view.php?id=13853">Pemrosesan Data Terdistribusi</a></th>
                <th><a href="bit.ly/KuliahAristoteles">Pak Aristoteles</a></th>
            </tr>
        </table>
    </div>
</body>
</html>