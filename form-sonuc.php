<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Form Bilgileri</h2>";
    echo "<p><strong>Ad Soyad:</strong> " . htmlspecialchars($_POST["adSoyad"]) . "</p>";
    echo "<p><strong>E-Posta:</strong> " . htmlspecialchars($_POST["email"]) . "</p>";
    echo "<p><strong>Telefon:</strong> " . htmlspecialchars($_POST["telefon"]) . "</p>";
    echo "<p><strong>Konu:</strong> " . htmlspecialchars($_POST["konu"]) . "</p>";
    echo "<p><strong>Mesaj:</strong> " . nl2br(htmlspecialchars($_POST["mesaj"])) . "</p>";
  } else {
    echo "<p>Form gönderilmedi.</p>";
  }
?>
