<?php
/*
./app/vues/catagories/index.php
Variables disponibles :
    - $categories ARRAY(Categorie)
 */
?>

    <h2>Categories</h2>
<?php foreach ($categories as $categorie): ?>

    <li>
        <a href="categories/<?php echo $categorie->getId(); ?>/<?php echo $categorie->getSlug(); ?>">
            <?php echo $categorie->getTitre(); ?>
        </a>
    </li>

<?php endforeach; ?>