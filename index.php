<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');
?>

<section class="content">
	<h2 class="ui header">Tugas Besar Sistem Pendukung Keputusan Pemilihan sepeda motor dengan Metode Analitycal Hierarchy Process (AHP)</h2>

	<p>Aplikasi ini bertujuan untuk memenuhi tugas besar dari mata kuliah Sistem Pendukung Keputusan (SPK) dimana tugas ini dikerjakan secara berkelompok. dimana kelompok kami terdiri dari 2 orang yaitu:</p>

	<p>1. Muhammad Syahid Ramadhon</p>

	<p>2. Lalu Rudi Setiawan </p>
	<p>AHP adalah metode pengambilan keputusan secara hirarki (tingkat) yang dipilih dari berbagai kriteria dan alternatif, lalu dipertimbangkan prioritas dari masing-masing alternatif tersebut, alternatif manakah yang dinilai terbaik berdasarkan tujuan yang akan dicapai.</p>
	<p>AHP membantu pengambil keputusan untuk mengetahui alternatif terbaik dari banyak elemen pilihan, menggunakan perbandingan yang berpasangan (pair wise comparison) untuk membuat suatu matriks yang menggambarkan perbandingan antara elemen yang satu dengan elemen yang lainnya. Pengambilan keputusan menjadi kompleks karena adanya pelibatan beberapa tujuan maupun kriteria.</p>
	<p>AHP sering digunakan sebagai metode pemecahan masalah dibanding dengan metode yang lain karena alasan-alasan sebagai berikut :</p>
	<ol class="ui list">
		<li>Struktur yang berhirarki, sebagai konsekuesi dari kriteria yang dipilih, sampai pada subkriteria yang paling dalam.</li>
		<li>Memperhitungkan validitas sampai dengan batas toleransi inkonsistensi berbagai kriteria dan alternatif yang dipilih oleh pengambil keputusan.</li>
		<li>Memperhitungkan daya tahan output analisis sensitivitas pengambilan keputusan.</li>
	</ol>

	<br>

	<h3 class="ui header">Tabel Tingkat Kepentingan menurut Saaty (1980)</h3>
	<table class="ui collapsing striped blue table">
		<thead>
			<tr>
				<th>Nilai Numerik</th>
				<th>Tingkat Kepentingan <em>(Preference)</em></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="center aligned">1</td>
				<td>Sama pentingnya <em>(Equal Importance)</em></td>
			</tr>
			<tr>
				<td class="center aligned">2</td>
				<td>Sama hingga sedikit lebih penting</td>
			</tr>
			<tr>
				<td class="center aligned">3</td>
				<td>Sedikit lebih penting <em>(Slightly more importance)</em></td>
			</tr>
			<tr>
				<td class="center aligned">4</td>
				<td>Sedikit lebih hingga jelas lebih penting</td>
			</tr>
			<tr>
				<td class="center aligned">5</td>
				<td>Jelas lebih penting <em>(Materially more importance)</em></td>
			</tr>
			<tr>
				<td class="center aligned">6</td>
				<td>Jelas hingga sangat jelas lebih penting</td>
			</tr>
			<tr>
				<td class="center aligned">7</td>
				<td>Sangat jelas lebih penting <em>(Significantly more importance)</em></td>
			</tr>
			<tr>
				<td class="center aligned">8</td>
				<td>Sangat jelas hingga mutlak lebih penting</td>
			</tr>
			<tr>
				<td class="center aligned">9</td>
				<td>Mutlak lebih penting <em>(Absolutely more importance)</em></td>
			</tr>
		</tbody>
	</table>

</section>

<?php include('footer.php'); ?>