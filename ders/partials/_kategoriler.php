<div class="list-group">
    <?php for($i = 0; $i < count($kategoriler); $i++): ?>
        <a href="#" class="list-group-item list-group-item-action">
            <?php echo $kategoriler[$i]["kategori_adı"]; ?>
        </a>
    <?php endfor; ?>
</div>