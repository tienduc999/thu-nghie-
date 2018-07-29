<html>
<h1> List All Course</h1>

<table>
    <thead>
    <tr>
        <td>CourseID</td>
        <td>Course Name</td>
        <td>View detail</td>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($data as $value) {
        ?>
        <tr>
            <td><?= $value->getCourseId() ?></td>
            <td><?= $value->getName() ?></td>
            <td><a href="index.php?action=laydanhsachStudent&id=<?= $value->getCourseId() ?>">View detail</a></td>

        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
</html>