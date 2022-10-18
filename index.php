<?php $title_name ="Главная страница" ?>
<?php require ($_SERVER[DOCUMENT_ROOT]."/core/header.php");?>

<main>
      <div id="main_open">
      <a class="padding_" href="/c/"><img src= "<?php echo $images; ?>c.png" width="125" height="120" alt="c#"></a>
      <a class="padding_" href="/python/"><img src= "<?php echo $images; ?>python.png" width="150" height="120" alt="PYTHON"></a>
      <a class="padding_" href="/php/"><img src= "<?php echo $images; ?>php.png" width="170" height="120" alt="PHP"></a>
      <?php require ($_SERVER[DOCUMENT_ROOT]."/core/chat.php");?>
    </div>
</main>

<?php require($_SERVER[DOCUMENT_ROOT]."/core/footer.php");?>
