<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>SINTAMI: Sistem Rute Inspeksi Transmisi</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  <link rel="stylesheet" href="stylesheets/style.css">

  <script src="javascripts/modernizr.foundation.js"></script>
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/function.js"></script>
</head>
<body>

  <div class="container">
	  <div class="row">
	    <div class="twelve columns header">
	      <h2>SINTAMI</h2>
	      <h5 class="subheader">Sistem Rute Inspeksi Transmisi</h6>
	      <hr />
	    </div>
	  </div>
	
	  <div class="row">
	  	<div class="two columns sidebar">
	  		<h5 class="subheader">LAPORAN</h5>
	  		<ul class="side-nav">
	  			<li><a href="#">Kondisi Tower Lattice</a></li>
	  			<li><a href="#">Kondisi Tower Daerah</a></li>
	  			<li class="active"><a href="#">Kondisi Tower 1</a></li>
	  			<li><a href="#">Jumlah Mandor</a></li>
	  		</ul>
	  		<h5 class="subheader">PENGATURAN</h5>
	  		<ul class="side-nav">
	  			<li><a href="#">Kondisi Tower Lattice</a></li>
	  			<li><a href="#">Kondisi Tower Daerah</a></li>
	  			<li><a href="#">Kondisi Tower 1</a></li>
	  			<li><a href="#">Jumlah Mandor</a></li>
	  		</ul>
	  	</div>
	    
	    <div class="ten columns">
			<h5 class="form-title">Tabel Hasil Inspeksi</h5>
			
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Asal</th>
						<th>Pekerjaan</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1.</td>
						<td>Ibrahim Musa</td>
						<td>Surabaya</td>
						<td>Pahlawan</td>
						<td></td>
					</tr>
					<tr>
						<td>2.</td>
						<td>Limpat Prananda</td>
						<td>Surabaya</td>
						<td>Seniman</td>
						<td></td>
					</tr>
					<tr>
						<td>3.</td>
						<td>Yahya Syukri</td>
						<td>Surabaya</td>
						<td>Paduka</td>
						<td></td>
					</tr>
					<tr>
						<td>4.</td>
						<td>Nur Dian Wahyu</td>
						<td>Ponorogo</td>
						<td>Androiders</td>
						<td></td>
					</tr>
					<tr>
						<td>5.</td>
						<td>Eko Wahyu</td>
						<td>Blitar</td>
						<td>Krimuds</td>
						<td></td>
					</tr>
					<tr>
						<td>6.</td>
						<td>Fahmi Saputra</td>
						<td>Ponorogo</td>
						<td>Orang tua</td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	    
	    <div class="ten columns form">
	    	<h5 class="form-title">Form Pengisian</h5>
	    	
	    	<form>
			  <div class="row" >
			    <div class="two mobile-one columns">
			      <label class="right inline">Nama:</label>
			    </div>
			    <div class="ten mobile-three columns">
			      <input type="text" placeholder="eg. John Doe" class="eight" id="form-nama"/>
			      <small class="eight error error-message">Invalid entry</small>
			    </div>
			  </div>
			  <div class="row">
			    <div class="two mobile-one columns">
			      <label class="right inline">Alamat:</label>
			    </div>
			    <div class="ten mobile-three columns">
			      <input type="text" placeholder="eg. Jalan Street" class="eight" />
			    </div>
			  </div>
			  <div class="row">
			    <div class="two mobile-one columns">
			      <label class="right inline">Kota:</label>
			    </div>
			    <div href="#" class="ten mobile-three columns">
				  <select name="" id="">
				    <option value="">Jakarta</option>
				    <option value="">Bogor</option>
				    <option value="">Bandung</option>
				    <option value="">Solo</option>
				    <option value="">Jogja</option>
				    <option value="">Semarang</option>
				    <option value="">Surabaya</option>
				    <option value="">Malang</option>
				  </select>
				</div>
			  </div>
			<div class="row">
			    <div class="two mobile-one columns">
			      <label class="right inline">Jenis Kelamin:</label>
			    </div>
			    <div class="ten mobile-three columns">
				  <label for="radio4"><input name="radio2" CHECKED type="radio" id="radio4"> Pria</label>
				  <label for="radio5"><input name="radio2" type="radio" id="radio5"> Wanita</label>
				  <label for="radio6"><input name="radio2" type="radio" id="radio6"> Keduanya</label>
				</div>
			</div>
			<div class="row" style="margin-top:10px">
				<div class="two mobile-one columns">
					<label for="" class="right inline">Checkbox:</label>
				</div>
				<div class="ten mobile-three columns">
			      <label for="checkbox1"><input type="checkbox" id="checkbox1"><span class="custom checkbox"></span> Label for Checkbox</label>
			      <label for="checkbox2"><input type="checkbox" id="checkbox2" checked><span class="custom checkbox checked"></span> Label for Checkbox</label>
			      <label for="checkbox3"><input type="checkbox" CHECKED id="checkbox3"> Label for Checkbox</label>
			    </div>
			</div>
			<div class="row" style="margin-top:10px">
			    <div class="two mobile-one columns">
			      <label class="right inline">Upload File:</label>
			    </div>
			    <div class="ten mobile-three columns">
				  <input type="file" placeholder="eg. Jalan Street" class="eight" />
				</div>
			</div>
			<div class="row">
				<div class="ten offset-by-two">
					<input type="submit" class="button"/>
				</div>
			</div>
			</form>
	    </div>
	    
	  </div>
  </div>

  
  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>

  
    <script>
    $(window).load(function(){
      $("#featured").orbit();
    });
    </script> 
  
</body>
</html>
