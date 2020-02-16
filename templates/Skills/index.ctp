<!-- File: src/templates/Skills/index.ctp -->

<h1>Skills</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Skill</th>
        <th>Description</th>
    </tr>

    <?php foreach ($skills as $skill): ?>
    <tr>
        <td><?= $skill->id ?></td>
        <td><?= $skill->name ?></td>
        <td><?= $skill->description ?></td>
    </tr>
    <?php endforeach; ?>
</table>