@extends('admin/layout/main')
@section('title', 'Home')
@section('container')

<section class="content-header">
	<h1>
		Dashboard
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>


<!-- Main content -->
<section class="content">	
	<!-- Small boxes (Stat box) -->
	<div class="box box-default">
		<div class="box-body">
				<!-- Main content -->
  <section class="content">
	  <!-- Small boxes (Stat box) -->
	  <div class="row">
		<div class="col-lg-3 col-xs-6">
		  <!-- small box -->
  
		</div>

		

		<div class="col-md-12">
		  <div class="box box-success box-solid">
			<div class="box-header with-border">
			  <marquee> <h3 class="box-title" >Aplikasi Tes Kepribadian MBTI</h3></marquee>

			  <div class="box-tools pull-right">

			  </div>
			  <!-- /.box-tools -->
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  
			  <div class="callout callout-warning">
				  <center>
					  {{-- <img src="img/school.png" alt="" width="80px"> --}}
					  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						  <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
						  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
						  <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
						</ol>
						<div class="carousel-inner">
						  <div class="item">
							<img src="{{ asset('img/mbti.jpg')}}" height="300px" alt="First slide">
		
							<div class="carousel-caption">
							  First Slide
							</div>
						  </div>
						  <div class="item">
							<img src="{{ asset('img/lala.png')}}" height="300px" alt="Second slide">
		
							<div class="carousel-caption">
							  Second Slide
							</div>
						  </div>
						  <div class="item active">
							<img src="{{ asset('img/ii.png')}}" alt="Third slide">
		
							<div class="carousel-caption">
							  Third Slide
							</div>
						  </div>
						</div>
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						  <span class="fa fa-angle-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						  <span class="fa fa-angle-right"></span>
						</a>
					  </div>
				  </center>
				</div>
				
			  <div class="callout callout-info">
				  <p style="color: black"><b> Tes Kepribadian MBTI</b>
				  <br>MBTI adalah singkatan dari Myers-Birggs Type Indicator. Tes yang dirancang untuk mengkategorikan individu berdasarkan bagaimana mereka berpikir dan bertingkah laku.<br>
					 Tipe kepribadian adalah sebuah sistem yang digunakan untuk mengategorikan kecenderungan seseorang dalam berpikir dan bertindak dengan cara tertentu.
						Orang yang mengkategorikan kepribadian seseorang menjadi 16 macam adalah Isabel Briggs Myers dan ibundanya, Katharine Briggs pada tahun 1960-an. Mereka menggunakan teori dari psikolog bernama Carl Jung, kemudian mengembangkan idenya untuk menciptakan kerangka tipe kepribadian yang lebih lengkap.
					
						<br><br><b>Myers dan Briggs mengusulkan bahwa tipe kepribadian terdiri dari empat kuci sifat dasar manusia Yaitu : </b>
					<br>1. Introvert (I) vs. Esktrovert (E) – Sifat dasar seseorang untuk memusatkan perhatiannya.<br>
					 <br>2. Sensing (S) vs. Intuition (N) – Sifat dasar seseorang untuk memahami sebuah informasi.<br>
					 <br>3. Thinking (T) vs. Feeling (F) – Sifat dasar seseorang untuk menarik kesimpulan dan mengambil keputusan.<br>
					 <br>4. Judging (J) vs. Perceiving (P) – Sifat dasar tentang pola hidup seseorang.<br>
				   </p>
				</div>

			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->
		</div>
	  </div>
				</section></div>
		<!-- /.box-body -->
	  </div>
	<!-- /.row -->
	<!-- Main row -->

</section>
<!-- /.content -->
@endsection()