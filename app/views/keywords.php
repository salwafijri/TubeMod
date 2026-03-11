<?php require 'layouts/header.php'; ?>

<div class="container">
    <h2>Keyword Management</h2>

    <form method="POST" action="<?= BASEURL ?>/keywords" class="search-form" style="width: 700px; padding: 5px;">
        <input type="text" name="word" placeholder="Keyword" required style="flex:1;">
        <input type="text" name="category" placeholder="Category (judol/hate)" required style="flex:1; border-left: 1px solid #ccc;">
        <button type="submit" name="add">Add</button>
    </form>

    <div class="scroll-box">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="comment-card">
                <form method="POST" action="<?= BASEURL ?>/keywords" style="display:flex; gap:10px; align-items:center; width: 100%;">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    
                    <div class="comment-content" style="display:flex; gap: 10px; flex: 1;">
                        <input type="text" name="word" value="<?= htmlspecialchars($row['word']) ?>" style="background:transparent; border:1px solid #5a32a3; color:white; padding: 5px; border-radius: 4px;">
                        <input type="text" name="category" value="<?= htmlspecialchars($row['category']) ?>" style="background:transparent; border:1px solid #5a32a3; color:white; padding: 5px; border-radius: 4px;">
                    </div>

                    <button type="submit" name="update" style="background:var(--primary); color:white; border:none; padding:8px 15px; border-radius:6px; cursor:pointer;">Update</button>
                    <a href="<?= BASEURL ?>/keywords?delete=<?= $row['id'] ?>" class="delete-text">Delete</a>
                </form>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php require 'layouts/footer.php'; ?>