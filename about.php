<?php include 'header.php'; ?>
<main>
    <h1>About Us</h1>
    <img src="Myy.jpeg" alt="Profile" width= "200" height= "200">
    <p> This is my About us page</p>
 
    <?php
        $team = ["Suzal - Developer","Searean - Designer","Dazy- Project Manager",
        "Keeran - Designer","Neha - Admin"];
    ?>
 
    <ul>
        <?php foreach($team as $member) : ?>
            <li><?php echo $member; ?></li>
        <?php endforeach; ?>
    </ul>
    <ul>
        <li>
        <img src="Suzal.jpeg" alt="Profile" width= "200" height= "200">
            <h3>Suzal - Developer</h3>
            <p>Suzal is an innovative thinker from New Foundland, currently studying Interactive Media Design
               at Algonquin College. With a passion for visual storytelling, she excels in graphic design
               and video production. In her spare time, she enjoys exploring the latest trends in digital
               art and finding inspiration in nature.</p>
        </li>
    
        <li>
        <img src="Searean.jpeg" alt="Profile" width= "200" height= "200">
            <h3>Searean - Designer</h3>
            <p>Searean is a dedicated student specializing in web development. With a keen eye for detail and a 
               passion for coding, she strives to create user-friendly applications. In her free time, she enjoys 
               reading about emerging technologies and working on personal projects that challenge her skills.</p>
        </li>
        <li>
        <img src="Dazy.jpeg" alt="Profile" width= "200" height= "200">
            <h3>Dazy- Project Manager</h3>
            <p>Dazy is a dedicated student specializing in web development. With a keen eye for detail and a 
               passion for coding, she strives to create user-friendly applications. In her free time, she enjoys 
               reading about emerging technologies and working on personal projects that challenge her skills.</p>
        </li>
        <li>
        <img src="Keeran.jpg" alt="Profile" width= "200" height= "200">
            <h3>Keeran - Designer</h3>
            <p>Keeran is a dedicated student specializing in web development. With a keen eye for detail and a 
               passion for coding, she strives to create user-friendly applications. In her free time, she enjoys 
               reading about emerging technologies and working on personal projects that challenge her skills.</p>
        </li>
        <li>
        <img src="Neha.png" alt="Profile" width= "200" height= "200">
            <h3>Neha - Admin</h3>
            <p>Neha is a dedicated student specializing in web development. With a keen eye for detail and a 
               passion for coding, she strives to create user-friendly applications. In her free time, she enjoys 
               reading about emerging technologies and working on personal projects that challenge her skills.</p>
        </li>
    </ul>
</main>
<?php include 'footer.php'; ?>