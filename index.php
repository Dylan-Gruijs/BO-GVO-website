<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>



<body>
    <?php include 'includes/header.php'; ?>
    <div class="container">
        <div class="div2"><?php include 'includes/StroomVerbruik.php'; ?><section>Dylan</section>
        </div>
        <div class="div3"><?php include 'includes/actueleTemp.php'; ?><section>Dylan</section>
        </div>
        <div class="div4"><?php include 'includes/waterVerbruik.php'; ?><section>Dajo</section>
        </div>
        <div class="div5"><?php include 'includes/zonsopkomstOndergang.php'; ?><section>Etienne</section>
        </div>
        <div class="div6"><?php include 'includes/teruglevering.php'; ?><section>Etienne</section>
        </div>
        <div class="div7"><?php include 'includes/gemTemp.php'; ?><section>Etienne</section>
        </div>
        <div class="div8"><?php include 'includes/Weersverwachting.php'; ?><section>Dajo</section>
        </div>
        <div class="div9"><?php include 'includes/LichtenAanUit.php'; ?><section>Dajo</section>
        </div>
        <div class="div10"><?php include 'includes/dark-licht.php'; ?><section>Dajo</section>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>

<script>
const btn = document.getElementById("themeToggle");
 
btn.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");
 
    localStorage.setItem(
        "theme",
        document.body.classList.contains("dark-mode") ? "dark" : "light"
    );
});
 
window.addEventListener("load", () => {
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("dark-mode");
    }
});
</script>

</html>