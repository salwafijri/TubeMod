document.addEventListener("DOMContentLoaded", function() {

    const searchForm = document.querySelector('.search-form');
    if (searchForm) {
        const submitBtn = searchForm.querySelector('button');
        // reset tombol setiap halaman load
        submitBtn.innerHTML = 'Start Analyze';
        submitBtn.style.opacity = '1';
        submitBtn.style.cursor = 'pointer';

        searchForm.addEventListener('submit', function(e) {

            const input = searchForm.querySelector('input[name="youtube_url"]');
            const inputUrl = input.value.trim();

            if (!searchForm.checkValidity()) {
                return;
            }

            if (!inputUrl.includes('youtube.com') && !inputUrl.includes('youtu.be')) {
                e.preventDefault();
                alert('Harap masukkan URL YouTube yang valid!');
                return;
            }

            submitBtn.innerHTML = 'Analyzing...';
            submitBtn.style.opacity = '0.7';
            submitBtn.style.cursor = 'wait';
        });
    }

    // Confirm delete data (History, Keywords)
    const deleteLinks = document.querySelectorAll('.delete-text, .btn-danger');
    deleteLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            const yakin = confirm("Apakah kamu yakin ingin menghapus data ini? Tindakan ini tidak dapat dibatalkan.");
            
            if (!yakin) {
                e.preventDefault();
            }
        });
    });

});



// tambah variabel dan fungsi
function tambahKeyword() {
    var kata = document.getElementById('word').value;
    var kat = document.getElementById('category').value;
    var area = document.getElementById('resultDisplay');

    if (kata === "" || kat === "") {
        alert("Harap isi semua kolom!");
        return;
    }

    const placeholder = area.querySelector('.placeholder-text');
    if (placeholder) placeholder.remove();

    var div = document.createElement('div');
    div.className = 'comment-card';
    div.innerHTML = `
        <div class="comment-content">
            <input type="text" class="kw-input" value="${kata}" placeholder="Keyword">
            <input type="text" class="kw-input" value="${kat}" placeholder="Category">
        </div>
        <div class="card-actions">
            <a href="#" class="update-text" onclick="updateKeyword(this); return false;">Update</a>
            <a href="#" class="delete-text" onclick="this.closest('.comment-card').remove(); return false;">Delete</a>
        </div>
    `;

    area.appendChild(div);
    document.getElementById('word').value = "";
    document.getElementById('category').value = "";
}

function updateKeyword(el) {
    const card = el.closest('.comment-card');
    const inputs = card.querySelectorAll('.kw-input');
    const kata = inputs[0].value;
    const kat = inputs[1].value;
    if (kata === "" || kat === "") {
        alert("Kolom tidak boleh kosong!");
        return;
    }
    alert(`Keyword "${kata}" (${kat}) berhasil diupdate!`);
}