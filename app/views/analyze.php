<?php require 'layouts/header.php'; ?>

<div class="container">
    <h2>Analysis Result</h2>

    <?php if (!empty($comments)): ?>
        <div class="scroll-box">
            <?php foreach ($comments as $c): ?>
                <div class="comment-card">
                    <div class="comment-content">
                        <h4><?= htmlspecialchars($c['author']); ?></h4>
                        <p><?= htmlspecialchars($c['text']); ?></p>
                    </div>
                    <span class="delete-text">Delete</span>
                </div>
            <?php endforeach; ?>
        </div>

        <button class="btn-danger">Delete all sensitive comments</button>
    <?php else: ?>
        <p>No comments found or invalid video.</p>
    <?php endif; ?>
</div>

<?php require 'layouts/footer.php'; ?>