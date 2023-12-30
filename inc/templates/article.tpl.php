<p><a id="go_back" href="index.php">Revenir à l'accueil</a></p>


<section class="body_text">
    <h1 id="article_title">
        <?php echo $title ?>
    </h1>

    <p class="article_P">
        <?php echo $description ?>
    </p>
</section>
<section id="img_section">
    <img id="article_img" src="<?php echo $coverImg ?>" alt="<?php echo $altImg === "" ? "Image de l'article " . $title : $altImg; ?>
            " />
</section>

<section class="body_text">
    <h2 class="body_title">Introduction</h2>
    <p class="article_P">
        <?php echo $introduction ?>
    </p>

    <h2 class="body_title">Le détail</h2>
    <p class="article_P">
        <?php echo $detail ?>
    </p>
</section>

<a href="about_us.tpl.php" id="author_section">
    <aside id="left_author">
        <img id="author_img" src="assets/img/authors/<?php echo $authorImg ?>" alt="Photo de l'auteur <?php echo $authorFirstName . " " . $authorLastName ?>" />
        <h3 id="author_name"><?php echo $authorFirstName . " " . $authorLastName ?></h3>
    </aside>
    <article id="right_author">
        <h3 id="author_title_desc">A propos de l'auteur :</h3>
        <?php echo $authorShortDescription ?>
    </article>
</a>