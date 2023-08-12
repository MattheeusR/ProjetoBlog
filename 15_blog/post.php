<?php 
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }

    }

?>    
    <main id="post-container">
        <div class="content-container" >
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium itaque nihil autem inventore voluptas deserunt mollitia, laboriosam ipsam veniam, cumque in ipsa blanditiis, quo ex facilis? Aspernatur deserunt reprehenderit quidem.
            Aperiam fugiat facilis aut ipsa perferendis dolore quis sit, impedit numquam molestiae sapiente qui, voluptates aliquam natus ullam. Cupiditate molestias dolor consectetur voluptatem, nesciunt quos. Minima mollitia nemo dolorum ullam.
            Voluptatibus minus temporibus laboriosam quia totam sed earum rerum autem illo, voluptate corporis repellendus unde pariatur? Iste quidem ipsa, repudiandae laborum consectetur, perspiciatis, aperiam fugit voluptatem recusandae dolores suscipit commodi.
            Nemo accusamus veritatis doloribus sed cupiditate temporibus, aspernatur provident omnis iure quis non deserunt beatae nesciunt alias pariatur quo facilis enim eveniet hic maiores. Quos ex excepturi commodi accusamus modi.
            Deleniti fugit ex debitis architecto sunt non quia, excepturi doloremque iure officiis maxime iusto possimus quidem similique sed doloribus! Facere consequatur possimus odio consequuntur dolorem nostrum corrupti est soluta a.</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                    <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                    <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php 
    include_once("templates/footer.php")
?>