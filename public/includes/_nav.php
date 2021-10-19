<header>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Home</a>
        <a href="micheladam.php">Michel Adam</a>
        <a href="kashiffkhan.php">Kashiff Khan</a>
        <a href="fashiontv.php">Fashion TV</a>
        <a href="channels.php">Channels</a>
        <a href="academy.php">Fitness Academy</a>
        <a href="courses.php">Courses</a>
        <a href="franchise.php">Franchise</a>
    </div>
    <div id="nav" class="">
        <img src="assets/media/images/logo.png" alt="logo" class="logo">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="bar">&#9776; </span>
    </div>
</header>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("nav").style.marginRight = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("nav").style.marginLeft = "0";
    }
</script>