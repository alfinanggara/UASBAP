<?php
    use App\Models\pemecatan;
?>


@section('content')
    
    <title>Laporan Pemecatan</title>
    <style>
        row {
            margin: 100px;
            padding-left: 50px;
        }
    </style>

    <head>
        <h1 style="text-align: center;">UAS Business Application Programming</h1><br>
        
    </head>
    <body>
        <img src="{{ asset("template/dist/img/Logo_UPH.jpg") }}" alt="" style="margin: 0 0 0 40%; width:20%">
        <br>
        <br>
        <div style="text-align: center">
            <b style="font-size: 150%;">NIM: 03081200018<br>
            <b>Nama: Alfin Anggara<br>
            <b>Kelas: 20SI2<br>
        </div>
        <br>
        <hr>

        <table class="table-dark">
            <thead class="table-dark">
              <tr>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">employees_id</th>
                <th scope="col">alasan_pemecatan</th>
              </tr>
            </thead>
            <tbody>
                <?php
          $rows = DB::select('select name, alasan_pemecatan, employees_id , employees.name from pemecatans');
          foreach($rows as $row) {
            echo "<tr>";
            // echo "<td>".$no."</td>";
            echo "<td>".$row->name."</td>";
            echo "<td>".$row->employees_id."</td>";
            echo "<td>".$row->alasan_pemecatan."</td>";
            echo "<tr>";
            // $no+=1;
            }
                
              ?>
            </tbody>
          </table>
          <a href="pemecatan/pdf" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cetak PDF</a>
    </body>
</html>