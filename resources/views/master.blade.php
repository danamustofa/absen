<!DOCTYPE html>
<html>
<head>
	<title>Blog page</title>
</head>
<body>
 
	<header>
 
		<h2>Landing page</h2>
		<nav>
			<a href="/page">HOME</a>
			|
			<a href="/page/about">TENTANG</a>
			|
			<a href="/page/contact">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="https://filkom.ub.ac.id">FILKOM UB</a>. 2024</p>
	</footer>
 
</body>
</html>