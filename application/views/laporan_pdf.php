<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LAPORAN PDF</title>
</head><body>
                  <table id="table1" class="table table-bordered">
                    <thead>
                      <tr align="center">
                        <th>Id User</th>
                        <th>NIS</th>
                        <th>Pass</th>
                        <th>IMEI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr align="center">
                        <?php
                        $no = 1;
                        foreach ($data->result_array() as $i) {
                          $id_user = $i['id_user'];
                          $nis = $i['nis'];
                          $pass = $i['pass'];
                          $imei = $i['imei']; ?>
                      <tr align="center">
                        <td><?php echo $id_user; ?></td>
                        <td><?php echo $nis; ?></td>
                        <td><?php echo $pass; ?></td>
                        <td><?php echo $imei; ?></td>
                        <!-- <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="<?php echo base_url('index.php/user/edituser'); ?>/<?php echo $id_user ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="<?php echo base_url('index.php/user/delete'); ?>/<?php echo $id_user ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td> -->
                      </tr>

                    <?php } ?>
                    </tbody>

                  </table>
</body>
</html>