$(document).ready(function(){
  Insert_record();
  view_record();
  get_record();
  update_record();
  delete_record();
})

//Inset Data
function Insert_record()
{
  $(document).on('click', '#btn_register', function()
  {
    var User = $('#username').val();
    var Email =  $('#email').val();

    if(User =="" || Email =="")
    {
        $('#message').html('Please Fill in the Black');
    }
    else
    {
      {
        $.ajax(
          {
              url : 'insert.php',
              method: 'post',
              data: {UName:User,UEmail:Email},
              success: function(data)
              {
                $('#message').html(data);
                $('#Registration').modal('show');
                $('form').trigger('reset');
                view_record()
              }
          })
      }
    }
  })

//Clear the text
  $(document).on('click', '#btn_close', function(){

    $('form').trigger('reset');
    $('#message').html('');
  })
}

//Display Record
  function view_record()
  {
    $.ajax(
      {
          url : 'view.php',
          method: 'post',
          success: function(data)
          {
            data = $.parseJSON(data);
            if(data.status == 'success')
            {
              $('#table').html(data.html);
            }
          }
    })
}

//Get Particular user_recordf

function get_record()
{
    $(document).on('click', '#btn_edit', function()
    {
        var ID = $(this).attr('data-id');

        $.ajax(
          {
              url : 'get_data.php',
              method: 'post',
              data:{UserID:ID},
              dataType: 'JSON',
              success: function(data)
              {
                $('#Up_User_ID').val(data[0]);
                $('#Up_username').val(data[1]);
                $('#Up_email').val(data[2]);
                $('#Update').modal('show');
              }
        })
    })
}


// Update get_record

function update_record()
{
    $(document).on('click', '#btn_update', function()
    {
      var UpdateID = $('#Up_User_ID').val();
      var UpdateUser =  $('#Up_username').val();
      var UpdateEmail =  $('#Up_email').val();

      if(UpdateUser =="" || UpdateEmail =="")
      {
          $('#up-message').html('Please Fill in the Black');
          $('#Update').modal('show');
      }

      else {
        $.ajax(
          {
              url : 'update.php',
              method: 'post',
              data:{U_ID:UpdateID,U_User:UpdateUser,U_Email:UpdateEmail},
              success: function(data)
              {
                $('#up-message').html(data);
                $('#Update').modal('show');
                view_record();
              }
        })
      }
    })
}

// Delete Fuction

function delete_record()
{
    $(document).on('click', '#btn_delete', function()
    {
        var Delete_ID = $(this).attr('data-id1');
        $('#delete').modal('show');

        $(document).on('click', '#btn_delete_record', function()
        {
          $.ajax(
            {
                url : 'delete.php',
                method: 'post',
                data:{Del_ID:Delete_ID},
                success: function(data)
                {
                  $('#delete-message').html(data);
                  view_record();
                }
          })
        })


    })
}
