<?php

        require_once('connection.php');

        // Insert Data Funtion

        function InsertRecord()
        {
            global $con;

            $UserName = $_POST['UName'];
            $UserEmail = $_POST['UEmail'];

            $query = "INSERT INTO user_record(UserName, UserEmail) VALUES ('$UserName','$UserEmail') ";
            $result = mysqli_query($con,$query);

            if($result)
            {
              echo 'You Record Has Been Saved';
            }
            else
            {
              echo 'Please Check Your Input';
            }
        }

        // Display Data Funtion

        function display_record()
        {
          global $con;
          $value = "";
          $value = '<table class="table table-bordered">
                      <tr>
                        <td> User ID </td>
                        <td> User Name </td>
                        <td> User Email </td>
                        <td> Edit </td>
                        <td> Delete </td>
                      </tr>';

          $query = "SELECT * FROM user_record";
          $result = mysqli_query($con, $query);

          while($row = mysqli_fetch_assoc($result))
          {
            $value.= '<tr>
                          <td> '.$row['ID'].' </td>
                          <td> '.$row['UserName'].' </td>
                          <td> '.$row['UserEmail'].' </td>
                          <td> <button class="btn btn-success" id="btn_edit" data-id='.$row['ID'].'>Edit</button> </td>
                          <td> <button class="btn btn-danger" id="btn_delete" data-id1='.$row['ID'].'>Delete</button> </td>
                        </tr>';
          }
          $value.= '</table>';

          $json = json_encode(array('html' => $value,'status'=> 'success'));

          echo $json;

        }

  // Get Particular dns_check_record
  function get_record()
  {
    global $con;
    $UserID = $_POST['UserID'];
    $query = "SELECT * FROM user_record WHERE ID='$UserID'";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($result))
    {
        $User_data = "";
        $User_data[0] = $row['ID'];
        $User_data[1] = $row['UserName'];
        $User_data[2] = $row['UserEmail'];
    }
    echo json_encode($User_data);
  }

// Update Fuction
    function update_value()
    {
      global $con;
      $Update_ID = $_POST['U_ID'];
      $Update_User = $_POST['U_User'];
      $Update_Email = $_POST['U_Email'];

      $query = "Update user_record set UserName='$Update_User', UserEmail='$Update_Email' WHERE ID = '$Update_ID'";
      $result = mysqli_query($con,$query);

      if($result)
      {
        echo 'You Record Has Been Update';
      }
      else
      {
        echo 'Please Check Your Input';
      }
    }


    //Delete functio

    function delete_record()
    {
      global $con;
      $Del_Id = $_POST['Del_ID'];
      $query = "DELETE FROM user_record WHERE ID = '$Del_Id'";
      $result = mysqli_query($con,$query);

      if($result)
      {
        echo 'You Record Has Been Delete';
      }
      else
      {
        echo 'Please Check Your Input';
      }
    }

 ?>
