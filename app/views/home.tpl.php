<h1>Sonic</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Mon nom</th>
      <th scope="col">Ma photo</th>
      <th scope="col">Qui je suis ?</th>
      <th scope="col">Je suis gentil ou méchant</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($viewVars['charactersList'] as $currentCharacterModel) : ?>
    <tr>
      <td class="font-weight-bold"><?= $currentCharacterModel->getName() ?></td>
      <td><img class="character-pic" src="<?= $viewVars['baseURL'] ?>/assets/img/<?= $currentCharacterModel->getPicture() ?>" alt="<?= $currentCharacterModel->getName() ?>"></td>
      <td><?= $currentCharacterModel->getDescription() ?></td>
      <td><?= $viewVars['typesList'][$currentCharacterModel->getTypeId()]->getName() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>