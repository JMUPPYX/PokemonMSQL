
<!-- boucle for each -->
<?php foreach ($potions as $potion) : ?>
    <!-- var_dump($potions); pour afficher le tableau associatif-->
<tr>
    <th scope="row">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" checked />
        </div>
    </th>
    <td><?=$potion['name']?></td>
    <td><?=$potion['couleur']?></td>
    <td><?=$potion['prix']?></td>
    <td><?=$potion['note']?></td>
    <td><?=$potion['effect']?></td>
    <td>
        <a class="btn btn-primary" href="edit.php?=id<?= $potion['id']; ?>">Editer</a>
    </td>
    <td>
        <button type="button" class="btn btn-danger btn-sm px-3">
            <i class="fas fa-times"></i>
        </button>
    </td>
</tr>

<?php endforeach ?>
<!-- fin de la boucle -->