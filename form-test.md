## HTML
```
<form action="https://youtube.o-namae.com/form-test.php" method="post">
    <input type="text" name="name" placeholder="お名前">
    <button type="submit">送信</button>
</form>
```

## PHP
```
<?php
  echo '--- form test start ---';
  $name = $_POST['name'];
  //echo $name."\n";
  echo htmlspecialchars($name);
  echo gettype($name);
?>
```
