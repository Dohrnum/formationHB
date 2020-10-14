<h2 class="right__title"><?php echo $content['title'] ?></h2>
        <article class="postArticle">
            <a href="" class="post__category post__category--color-team"><?php echo $content['cat'] ?></a>
            <div class="post__meta">
                <img class="post__author-icon" src="<?php echo $content['picture'] ?>" alt="">
                <strong class="post__author"><?php echo $content['author'] ?></strong>
                <time datetime="2018-02-10"><?php echo $content['date'] ?></time>
            </div>
            <p><?php echo $content['text'] ?></p>
            <a href="../php/index.php" class="post__link">Back to Home</a>
        </article>