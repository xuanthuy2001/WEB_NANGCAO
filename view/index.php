<h1>danh sach sinh vien </h1>

<a href="?action=create">them sinh vien</a>
<table border="1" width="100%">
      <tr>
            <th>ma</th>
            <th>ten</th>
            <th>sua</th>
            <th>xoa</th>
      </tr>
      <?php
      foreach ($result as $each) { ?>
      <tr>
            <td><?php echo $each['ma'] ?></td>
            <td><?php echo $each['ten'] ?></td>
            <td>
                  <a href="?action=edit&ma=<?php echo $each['ma'] ?>">update</a>
            </td>
            <td>
                  <a href="?action=delete&ma=<?php echo $each['ma'] ?>">delete</a>
            </td>
      </tr>
      <?php } ?>


</table>