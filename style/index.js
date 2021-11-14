
$(document).ready(function (){
    $('.edit-icon').on('click', function() {
        $('#editEmployeeModal').modal('show');
  
        $tr = $(this).closest('tr');
  
        var data = $tr.children("td").map(function() {
            return $(this).text();
            }).get();
  
        console.log(data);
  
  
        $('#employee_Name').val(data[0]);
        $('#employee_Salary').val(data[1]);
        $('#employee_dateOfEmployment').val(data[2]);
                
    });
    }); 
  
    $('.close-modal-button').on('click',function() {
        $('#editEmployeeModal').modal('hide');
    })
  
          