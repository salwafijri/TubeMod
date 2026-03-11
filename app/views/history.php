<?php require 'layouts/header.php'; ?>

<div class="container">
    <h2>Analysis History</h2>

    <div class="scroll-box">
        <?php foreach ($dummy_videos as $row): ?>
            <div class="comment-card">
                <div class="comment-content">
                    <h4><?= htmlspecialchars($row['title']) ?></h4>
                    
                    <p style="margin-bottom: 5px;">
                        <a href="<?= htmlspecialchars($row['youtube_url']) ?>" target="_blank" style="color: #8bb4f5; text-decoration: none;">
                            <?= htmlspecialchars($row['youtube_url']) ?>
                        </a>
                    </p>
                    
                    <p>Analyzed on: <?= htmlspecialchars($row['analyzed_at']) ?></p>
                </div>
                
                <a href="#" class="delete-text">Delete</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php require 'layouts/footer.php'; ?>