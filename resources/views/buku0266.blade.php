<!DOCTYPE html>
<html>
    <head>
	    <title>Data Buku</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
        <div class-"container">
            <div class-"row">
                <h1>Data Buku</h1>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Jenis</th>
                    </tr>
		</thead>
		<tbody>
		<?php $no=1; ?>
		@foreach ($buku as $s)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$s->judul}}</td>
                        <td>{{$s->tahun_terbit}}</td>
                        <td>{{$s->jenis}}</td>
                        <td></td>
                    </tr>
		@endforeach
		</tbody>
        
	</table>
	<a style="float:right;" href="/export" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
	</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>