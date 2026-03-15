<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
define('BASEURL', '/TubeMod/public');
require_once __DIR__ . '/../app/views/layouts/header.php';
?>

<div class="container" style="display: flex; flex-direction: column; align-items: center;">
    <h2>Keyword Management</h2>

    <div style="width: 650px; max-width: 100%;">
        <div style="margin-bottom: 16px; display: flex; gap: 10px; align-items: center;">
            <div style="flex: 1; display: flex; background: #e8e4f0; border-radius: 10px; overflow: hidden;">
                <input type="text" id="word" placeholder="Keyword"
                    style="flex: 1; padding: 12px 20px; background: transparent; border: none; color: #333; font-size: 14px; outline: none;">
                <div style="width: 1px; background: #bbb; margin: 8px 0;"></div>
                <input type="text" id="category" placeholder="Category"
                    style="flex: 1; padding: 12px 20px; background: transparent; border: none; color: #333; font-size: 14px; outline: none;">
            </div>
            <button type="button" onclick="tambahKeyword()"
                style="padding: 12px 28px; border-radius: 10px; cursor: pointer; background: #5c3fb8; color: white; border: none; font-size: 14px; white-space: nowrap;">Add</button>
        </div>

        <div id="resultDisplay"
            style="width: 100%; max-height: 400px; overflow-y: auto; padding-right: 4px; box-sizing: border-box;">
            <p class="placeholder-text" style="color: #666; text-align: center; padding: 20px; font-style: italic;">
                Belum ada keyword, silakan tambahkan di atas...
            </p>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../app/views/layouts/footer.php'; ?>