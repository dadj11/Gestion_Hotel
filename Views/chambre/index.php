<h2><i class="fa-solid fa-bed" style="font-size: 40px"></i> Chambres</h2>
<div>
    <a href="/chambres/createForm"> <button>new room</button></a>
    
<table>
    <thead>
        <tr>
            <th>N </th>
            <th> etat</th>
            <th> tarif</th>
            <th> Categorie</th>
        </tr>

    </thead>
    <tbody>
        <?php foreach ($chambres as $chambre) : ?>
        <tr>
            <td><?= $chambre["numero"] ?></td>
            <td><?= $chambre["etat"] ?></td>
            <td><?= $chambre["tarif_par_nuit"] ?></td>
            <td><?= $chambre["id_categorie"] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>  
</div>