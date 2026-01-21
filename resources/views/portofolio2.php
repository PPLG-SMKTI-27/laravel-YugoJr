<?php
$name = "Glenn Marcellino Oktaviyanto";
$title = "Web/Game Developer | UI/UX Designer";
$about = "Saya adalah seorang web developer yang berfokus pada pengembangan aplikasi berbasis web menggunakan PHP, MySQL, dan JavaScript dan gim menggunakan Unreal Engine dan Unity.";


$skills = ["Unreal Engine", "Unity", "PHP", "Laravel", "MySQL", "HTML & CSS", "JavaScript"];


$projects = [
["title" => "Aplikasi Perizinan Siswa", "desc" => "Aplikasi berbasis PHP untuk mengelola izin siswa."],
["title" => "Website Portofolio", "desc" => "Website portofolio pribadi dengan desain modern."],
["title" => "Sistem Login", "desc" => "Sistem autentikasi login dan register menggunakan PHP & MySQL."]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Portofolio <?php echo $name; ?></title>
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
padding: 60px 20px;
text-align: center;
}
header h1 {
margin: 0;
font-size: 40px;
}
header p {
font-size: 18px;
margin-top: 10px;
}
section {
padding: 50px 20px;
max-width: 1000px;
margin: auto;
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
.section-title {
color: #ff7a18;
font-size: 28px;
margin-bottom: 20px;
border-bottom: 3px solid #ff9f43;
display: inline-block;
padding-bottom: 5px;
}
.about {
line-height: 1.8;
}
.skills {
display: flex;
flex-wrap: wrap;
gap: 15px;
}
.skill {
background: #ff9f43;
color: white;
padding: 10px 18px;
border-radius: 25px;
font-size: 14px;
}
.projects {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
gap: 20px;
}
</style>
</head>
<body>
<header>
<h1><?php echo $name; ?></h1>
<p><?php echo $title; ?></p>
</header>

<nav>
<a href="index.php">Home</a>
<a href="ProjectSaya">Project</a>
</nav>

<img src="images/kurakura.png" alt="Photo">

<section class="about">
<h2 class="section-title">Tentang Saya</h2>
<p><?php echo $about; ?></p>
</section>
<section>
<h2 class="section-title">Keahlian</h2>
<div class="skills">
<?php foreach ($skills as $skill): ?>
<div class="skill"><?php echo $skill; ?></div>
<?php endforeach; ?>
</div>
</section>
<section>
<h2 class="section-title">Proyek</h2>
<div class="projects">
<?php foreach ($projects as $project): ?>
<div class="project">
<h3><?php echo $project['title']; ?></h3>
<p><?php echo $project['desc']; ?></p>
</div>
<?php endforeach; ?>
</div>
</section>
</body>
</html>