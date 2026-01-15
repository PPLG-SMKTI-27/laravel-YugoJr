<?php
// =============================
// PROJECT PAGE - PORTFOLIO PHP
// ORANGE THEME
// =============================


$name = "Nama Anda";


$projects = [
[
"title" => "Aplikasi Perizinan Siswa",
"desc" => "Aplikasi berbasis PHP & MySQL untuk mengelola izin siswa keluar kelas.",
"tech" => "PHP, MySQL, Bootstrap"
],
[
"title" => "Website Portofolio",
"desc" => "Website portofolio pribadi dengan desain modern dan responsif.",
"tech" => "PHP, HTML, CSS"
],
[
"title" => "Sistem Login & Register",
"desc" => "Sistem autentikasi pengguna dengan validasi dan session.",
"tech" => "PHP, MySQL"
],
[
"title" => "CRUD Data Siswa",
"desc" => "Aplikasi CRUD sederhana untuk mengelola data siswa.",
"tech" => "PHP, MySQL, JavaScript"
]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Project - <?php echo $name; ?></title>
<style>
body {
margin: 0;
font-family: Arial, Helvetica, sans-serif;
background: #fff7f0;
color: #333;
}
header {
background: linear-gradient(135deg, #ff7a18, #ff9f43);
color: white;
padding: 50px 20px;
text-align: center;
}
header h1 {
margin: 0;
font-size: 36px;
}
nav {
background: #ff7a18;
padding: 10px;
text-align: center;
}
nav a {
color: white;
margin: 0 15px;
text-decoration: none;
font-weight: bold;
}
nav a:hover {
text-decoration: underline;
}
section {
padding: 50px 20px;
max-width: 1100px;
margin: auto;
}
.projects {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
gap: 20px;
}
.project-card {
background: white;
border-radius: 14px;
box-shadow: 0 6px 18px rgba(0,0,0,0.12);
padding: 25px;
transition: transform 0.3s, box-shadow 0.3s;
}
.project-card:hover {
transform: translateY(-6px);
box-shadow: 0 10px 25px rgba(0,0,0,0.18);
}
.project-card h3 {
color: #ff7a18;
margin-top: 0;
}
.tech {
margin-top: 15px;
font-size: 14px;
color: #fff;
background: #ff9f43;
display: inline-block;
padding: 6px 12px;
border-radius: 20px;
}
footer {
background: #ff7a18;
color: white;
text-align: center;
padding: 20px;
margin-top: 40px;
}
</style>
</head>
<body>


<header>
<h1>My Projects</h1>
<p>Kumpulan project yang pernah saya kerjakan</p>
</header>


<nav>
<a href="index.php">Home</a>
<a href="project.php">Project</a>
</nav>


<section>
<div class="projects">
<?php foreach ($projects as $project): ?>
<div class="project-card">
<h3><?php echo $project['title']; ?></h3>
<p><?php echo $project['desc']; ?></p>
<span class="tech"><?php echo $project['tech']; ?></span>
</div>
<?php endforeach; ?>
</div>
</section>


<footer>
<p>© <?php echo date('Y'); ?> <?php echo $name; ?> | Project Page</p>
</footer>


</body>
</html>