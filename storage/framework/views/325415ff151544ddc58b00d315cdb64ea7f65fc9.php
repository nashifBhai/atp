<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HOME</title>
</head>
<body>
  <h1 align="center">Welcome User <?php echo e(session('user')); ?></h1>
  <table border="1" align="center">
    <?php echo csrf_field(); ?>
    <tr>
      <td>
        <a href="/MyProfile">MY PROFILE</a>
      </td>
    </tr>
  </table><br>
  <table border="1" align="center">
    <tr></tr>
      <td>
        <a href="/addService">Add Service</a>
      </td>
    </tr>
  </table><br>
  <table border="1" align="center">
    <tr></tr>
      <td>
        <a href="/report_status_customer">Customer Report Status</a>
      </td>
    </tr>
  </table><br>
  <table border="1" align="center">
    <tr></tr>
      <td>
        <a href="/report_status_emp">Employee Report Status</a>
      </td>
    </tr>
  </table><br>
  <table border="1" align="center">
    <tr></tr>
      <td>
        <a href="/salary_status">Salary Request</a>
      </td>
    </tr>
  </table><br>
  <table border="1" align="center">
    <tr></tr>
      <td>
        <a href="/forgettable">Forget Pasword Request</a>
      </td>
    </tr>
  </table><br>
  <table border="1" align="center">
    <tr></tr>
      <td>
        <a href="/show_ratings_emp">Employee Ratings Status</a>
      </td>
    </tr>
  </table><br>
  <table border="1" align="center">
    <tr></tr>
      <td>
        <a href="/show_ratings_customer">Customer Ratings Status</a>
      </td>
    </tr>
  </table><br>
    <table border="1" align="center">
    <tr>
      <td>
        <a href="/empWork">Employee Worklist</a>
      </td>
    </tr>
    </table><br>
    <table border="1" align="center">
    <tr>
      <td>
        <a href="/customer_hire">Customer Hire History</a>
      </td>
    </tr>
  </table><br>
  <table border="1" align="center">
    <tr>
      <td>
        <a href="/show_emp_list">Employee List</a>
      </td>
    </tr>
  </table><br>
  <table border="1" align="center">
    <tr>
      <td>
        <a href="/export_excel">Customer List</a>
      </td>
    </tr>
    </table><br>
    <table border="1" align="center">
    <tr>
      <td>
        <a href="/message">Message List</a>
      </td>
    </tr>
    </table><br>
  <table border="1" align="center">
    <tr>
      <td>
        <a href="/logout">LOG OUT</a>
      </td>
    </tr>
  </table>

</form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\project\resources\views/home/index.blade.php ENDPATH**/ ?>