<?php
require_once 'config/database.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$stmt = $conn->prepare("SELECT judul, ringkasan, isi, tanggal_publish FROM berita WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$news = $result->fetch_assoc();

if (!$news) {
    header("Location: news.php");
    exit;
}

$pageTitle = $news['judul'] . ' - Telkom University';
require 'includes/header.php';
?>
<section class="section">
    <div class="container container-narrow">
        <a class="back-link" href="news.php">&larr; Kembali ke Berita</a>
        <article class="article">
            <p class="meta"><?= date('d M Y', strtotime($news['tanggal_publish'])) ?></p>
            <h1><?= htmlspecialchars($news['judul']) ?></h1>
            <p class="lead"><?= htmlspecialchars($news['ringkasan']) ?></p>
            <div class="content">
                <p><?= nl2br(htmlspecialchars($news['isi'])) ?></p>
            </div>
        </article>
    </div>
</section>
<?php require 'includes/footer.php'; ?>