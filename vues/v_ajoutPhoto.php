<html>
<form action="../controleur/c_ajoutPhoto.php" method="POST" enctype="multipart/form-data">
  <table border="0">
    <tr>
      <label for="file">Fichier</label>
      <input type="file" name="file">
    </tr>
    <tr>
      <td width="108">description photo</td>
      <td width="105">
        <input type="text" name="descPhoto" size="30" maxlength="30">
      </td>
    </tr>
  </table>
  <button type="submit">Enregistrer</button>
</form>
