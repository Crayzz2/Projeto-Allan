<?php
    include_once('templates/header.php');

    if(isset($_GET['id'])){
        $postId = $_GET['id'];

        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p id="post-description"><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title']?>">
                <p><?= $currentPost['descImg']; ?></p>
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nisi repellat dignissimos, maiores quae obcaecati, quis perspiciatis iste praesentium officia tempore magni velit nemo ex earum magnam at dolorem! Earum.
            Eveniet dolorem cumque, ratione eos fugit tempore fugiat vel. Deleniti itaque porro, quaerat dolorum quis suscipit natus fugit omnis earum magni iste, fugiat repudiandae molestias eligendi impedit voluptatem rem laudantium?
            Voluptas maxime, est culpa incidunt quam repudiandae voluptate optio illo tempore deserunt voluptates corrupti nulla laboriosam. Iusto dignissimos consequuntur voluptatum ut inventore voluptate illo, ab blanditiis quidem, quis odit recusandae.
            Qui earum nisi officia animi omnis rem quia sequi culpa, odio eum labore quis non nam possimus assumenda est enim esse. Dicta, sint voluptatem repellat expedita ut pariatur nihil voluptas.
            Et, iusto beatae. Consectetur adipisci eaque nostrum quo aspernatur laboriosam ex eveniet officiis modi vel, quisquam eius deleniti sapiente nam distinctio atque. Consectetur aliquid velit provident qui nostrum earum exercitationem?</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nisi repellat dignissimos, maiores quae obcaecati, quis perspiciatis iste praesentium officia tempore magni velit nemo ex earum magnam at dolorem! Earum.
            Eveniet dolorem cumque, ratione eos fugit tempore fugiat vel. Deleniti itaque porro, quaerat dolorum quis suscipit natus fugit omnis earum magni iste, fugiat repudiandae molestias eligendi impedit voluptatem rem laudantium?
            Voluptas maxime, est culpa incidunt quam repudiandae voluptate optio illo tempore deserunt voluptates corrupti nulla laboriosam. Iusto dignissimos consequuntur voluptatum ut inventore voluptate illo, ab blanditiis quidem, quis odit recusandae.
            Qui earum nisi officia animi omnis rem quia sequi culpa, odio eum labore quis non nam possimus assumenda est enim esse. Dicta, sint voluptatem repellat expedita ut pariatur nihil voluptas.
            Et, iusto beatae. Consectetur adipisci eaque nostrum quo aspernatur laboriosam ex eveniet officiis modi vel, quisquam eius deleniti sapiente nam distinctio atque. Consectetur aliquid velit provident qui nostrum earum exercitationem?</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tags-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag; ?></a></li>
                 <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $categorie): ?>
                    <li><a href="#"><?= $categorie; ?></a></li>
                 <?php endforeach; ?>
            </ul>
        </aside>
    </main>

<?php
    include_once('templates/footer.php');
?>