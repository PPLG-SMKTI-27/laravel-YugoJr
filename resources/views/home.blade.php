<?php


?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Portofolio {{ $profile->nama }}</title>
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
<h1><?php echo $profile->nama; ?></h1>
<p><?php echo $profile->profesi; ?></p>

    @if(session('success'))
        <div style="color: rgb(4, 255, 4); margin-bottom: 15px;">
            {{session('success') }}
    @endif
        </div>
  
</header>

<nav>
<a href="index.php">Home</a>
<a href="ProjectSaya">Project</a>

    @guest
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endguest

    @auth
        <a href="{{ route('admin.projects.index') }}">Dashboard</a>
    @endauth

</nav>

<img src="images/kurakura.png" alt="Photo">

<section class="about">
<h2 class="section-title">Tentang Saya</h2>
<p><?php echo $profile->tentang; ?><p>
</section>
<section>
<h2 class="section-title">Keahlian</h2>
<div class="skills">
<p>Skills: {{ $profile->skills }}</p>
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