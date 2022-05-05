<?php
require_once("database/database.php");
$users = selectAllUser();
?>
<div class="container rounded p-4 mb-2 mt-2">
  <h3 class="mb-4 text-white">Users</h3>
  <div >
    <table class="table mt-4">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Profile</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Role</th>
          <?php if ($_SESSION['username'] == "Admin" or $_SESSION['username'] == "admin") : ?>
            <th scope="col">Action</th>
          <?php endif; ?>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user) : ?>
          <tr class="table-light">
            <th class="align-self-center" scope="row"><?= $user['user_id'] ?></th>
            <td><img src="images/user/<?= $user['profile'] ?>" class="rounded-circle" style="width: 40px; height: 40px;"></td>
            <td class="align-self-center"><?= $user['username'] ?></td>
            <td class="align-self-center"><?= $user['email'] ?></td>
            <td class="align-self-center"><?= $user['password'] ?></td>
            <td class="align-self-center"><?= $user['role'] ?></td>
            <?php if ($_SESSION['username'] == "Admin" or $_SESSION['username'] == "admin") : ?>
              <?php if ($user['role'] != "Admin") : ?>
                <td class="align-self-center">
                  <a href="deleteuser.php?id=<?= $user['user_id'] ?>"><i style="font-size:24px; color: #f72a2a" class="fa">&#xf014;</i></a>
                </td>
              <?php else : ?>
                <td class="align-self-center"></td>
              <?php endif; ?>
            <?php endif; ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>