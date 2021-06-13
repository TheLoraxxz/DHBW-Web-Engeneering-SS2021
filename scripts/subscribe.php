<?php
?>
<div class="content">
    <h1>Jetzt Subscriben</h1>
    <form method="post" action="index.php" id="subscribe">
        <input placeholder="Nachname">
        <input placeholder="Vorname">
        <input type="checkbox" required>
        <details>
            <summary>Sie haben dies hier durchgelesen</summary>
            <p>Sie akzeptieren die Datenschutzbedingungen und die AGB in denen steht, dass wir so oft geld
            abbuchen wie wir wollen und dass Sie einsehen das wir die beste Webseite sind. Des weeiteren,
            blablabla</p>
        </details>
    </form>
    <button onclick="function f() {
      document.getElementById('subscribe').submit();
    }">Subscribe Now</button>
</div>
