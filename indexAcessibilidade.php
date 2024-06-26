<?php
    include_once('templates/header.php');
?>
    <a href="./index.php" alt="Desabilitar leitura da página" tabindex="1" onfocus="speakText(this.getAttribute('alt'))">
        <img src="img/acessibilidade.jpg" alt="Desabilitar leitura da página" id="acessibilidade_cegos">
    </a>
    <main>
        <div id="title-container">
            <h1><a href="" onfocus="speakText(this.textContent)">Blog Codar</a></h1>
            <p><a href="" onfocus="speakText(this.textContent)">O seu blog de programação</a></p>
        </div>
        <div id="posts-container">
            <?php foreach($posts as $post): ?>

                <div class="post-box">
                    <a href="" onfocus="speakText(this.getAttribute('alt'))" alt="<?= $post['descImg']?>"><img src="<?= $BASE_URL ?>/img/<?= $post['img']?>" alt="<?= $post['title']?>"></a>
                    <h2 class="post-title" >
                        <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id']?>" onfocus="speakText(this.textContent)"><?= $post['title']?></a>
                    </h2>
                    <p class="post-description"><a href="" onfocus="speakText(this.textContent)"><?= $post['description']?></a></p>
                    <div class="tags-container">
                        <?php foreach($post['tags'] as $tag): ?>
                            <a href="#" onfocus="speakText(this.textContent)"><?= $tag?></a>
                        <?php endforeach; ?>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </main>
<?php
    include_once('templates/footer.php');
?>
