<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include('html/meta.html'); ?>
    <title>vitagyt.tk - Don</title>
</head>
<body>
    <?php include('html/header.html'); ?>
    <section>
        <article id="crypto">
            <br>
            <h2>Pour me faire un don, cliquez sur l'icone de la cryptomonnaie dans laquelle vous souhaitez faire un don, mon adresse sera collée dans votre presse-papier.</h2>
            <h2>Alternativement, vous pouvez me faire un don en utilisant la puissance de votre processeur.</h2>
            <h2>Par Web-Mining, vous me ferez gagnez une petite somme de cryptomonnaie.</h2>
            <h2>Activez et désactivez celles de votre choix, attention il peut y avoir des publicités, enfin pour miner, désactivez votre bloqueur de publicité.</h2>
            <br>
        </article>
        <div id="dons">
            <h3>Bitcoin</h3>
            <i id="btc" class="fab fa-btc" onclick="copy('bc1qpxhtdm6lm5kxenhsdct0hlcy4sn0j7f286yw56')"></i>
            <h3>Ethereum</h3>
            <i id="eth" class="fab fa-ethereum" onclick="copy('0x92138B0936562Be00deC449865948B8767734DE0')"></i>
            <a class="btn" target="_blank" href="webminer.php"><span id="don_web">don (gratuit) par web-mining</span></a>
        </div>
    </section>
    <?php include('html/footer.html'); ?>
    <script src="js/copy.js"></script>
</body>
</html>