<nav>
  <ul class="left__nav">
  <?php
$navMenu = [
[
  'name' => 'Plan du site',
  'link' => '../php/plan_de_site.php'
],
[
  'name' => 'Mentions légales',
  'link' => '../php/mentions_legales.php'
],
[
  'name' => 'Contact',
  'link' => '../php/contact.php'
]
];

foreach ($navMenu as $key => $contentKey) : ?>

<li class="left__nav-item">

  <a href="<?php echo $navMenu[$key]['link'] ?>" class="left__nav-link"><?php echo $navMenu[$key]['name'] ?></a>

</li>

<?php endforeach; ?>
    
    </ul>
  </nav>