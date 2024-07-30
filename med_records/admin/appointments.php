<?php
session_start();
if (isset($_SESSION['Login'])) {
} else {
  header('Location:login.php');
}
require '../includes/header.php';
require '../includes/adminDashNav.php';
require '../processors/appointments.php';

$counter = 1;
$counter2 = 1;
$counter3 = 1;
$counter4 = 1;
$counter5 = 1;

?>

<body style="overflow-x: hidden;">
  <div class="main-dash mt-5">
    <div class="d-flex mt-4 mx-2">
      <i class="fa-solid fa-bars fa-2xl  mt-3 text-dark"></i>
      <h3 class="text-dark mx-3">Appointments</h3>
    </div>

    <div class="text-center mt-5">
      <h2>Appointment List</h2>
    </div>
    <div class="status" id="status">
      <button class="tab current p-btn">Processing</button>
      <button class="tab c-btn">Completed</button>
      <button class="tab b-btn">booked</button>
      <button class="tab m-btn">Missed</button>
      <button class="tab ca-btn">Cancelled</button>
      <button class="tab r-btn">Rescheduling</button>
    </div>
    <!-- processing appointements -->
    <div id="processing" class="table-responsive process">
      <table id="example" class="w-100 table display">
        <thead>
          <tr class="border border-dark">
            <th scope="col" class="text-center">S/N</th>
            <th scope="col" class="text-center">Full Name</th>
            <th scope="col" class="text-center">doctor </th>
            <th scope="col" class="text-center">Status</th>
            <th scope="col" class="text-center">Actions </th>

          </tr>
        </thead>
        <tbody>
          <?php
          if ($resultApp->num_rows > 0) {
            while ($rowApp = $resultApp->fetch_assoc()) {
              ?>
              <tr class="border-bottom border-top border-dark">
                <th scope="row" class="text-center"><?php echo $counter++ ?></th>
                <td class="text-center"><?php echo $rowApp['PatientFname'] ?>     <?php echo $rowApp['PatientLname'] ?> </td>
                <td class="text-center"> Dr. <?php echo $rowApp['doctorFname'] ?>     <?php echo $rowApp['doctorLname'] ?></td>

                <td class="text-center"><?php echo $rowApp['appointmentStatus'] ?></td>

                <td class="text-center"><a
                    href="UpdateAppointments.php?appointmentId=<?php echo $rowApp['appointmentId'] ?>"
                    class="btn btn-success"><Button class="btn btn-success">Edit</Button></a></td>
              </tr>
              <?php
            }
          }
          ?>
        </tbody>
      </table>
    </div>
    <!-- Completed appointements -->
    <div id="Completed" class="table-responsive com hide">
      <table id="" class="w-100 table display">
        <thead>
          <tr>
            <th scope="col" class="text-center">S/N</th>
            <th scope="col" class="text-center">Full Name</th>
            <th scope="col" class="text-center">doctor </th>
            <th scope="col" class="text-center">Appointment day</th>
            <th scope="col" class="text-center">Appointment Time</th>
            <th scope="col" class="text-center">Status</th>
            <!-- <th scope="col" class="text-center">Actions </th> -->
          </tr>
        </thead>
        <tbody>
          <?php
          if ($cApp->num_rows > 0) {
            while ($rowcApp = $cApp->fetch_assoc()) {
              ?>
              <tr>
                <th scope="row"><?php echo $counter2++ ?></th>
                <td><?php echo $rowcApp['PatientFname'] ?>     <?php echo $rowcApp['PatientLname'] ?> </td>
                <td> Dr. <?php echo $rowcApp['doctorFname'] ?>     <?php echo $rowcApp['doctorLname'] ?></td>
                <td class="text-center"><?php echo $rowcApp['appointmentDate'] ?></td>
                <td class="text-center"><?php echo $rowcApp['appointmentTime'] ?></td>
                <td class="text-center"><?php echo $rowcApp['appointmentStatus'] ?></td>
              </tr>
              <?php
            }
          }
          ?>
        </tbody>
      </table>
    </div>
    <!-- booked appointements -->
    <div id="booked" class="table-responsive boo hide">
      <table id="" class="table w-100 display">
        <thead>
          <th scope="col" class="text-center">S/N</th>
          <th scope="col" class="text-center">Full Name</th>
          <th scope="col" class="text-center">doctor </th>
          <th scope="col" class="text-center">Appointment day</th>
          <th scope="col" class="text-center">Appointment Time</th>
          <th scope="col" class="text-center">Status</th>
          <th scope="col" class="text-center">Actions </th>

          </tr>
        </thead>
        <tbody>
          <?php
          if ($bApp->num_rows > 0) {
            while ($rowbApp = $bApp->fetch_assoc()) {
              ?>
              <tr>
                <th scope="row"><?php echo $counter3++ ?></th>
                <td><?php echo $rowbApp['PatientFname'] ?>     <?php echo $rowbApp['PatientLname'] ?> </td>
                <td> Dr. <?php echo $rowbApp['doctorFname'] ?>     <?php echo $rowbApp['doctorLname'] ?></td>
                <td class="text-center"><?php echo $rowbApp['appointmentDate'] ?></td>
                <td class="text-center"><?php echo $rowbApp['appointmentTime'] ?></td>
                <td class="text-center"><?php echo $rowbApp['appointmentStatus'] ?></td>
                <td><a href="UpdateAppointments.php?appointmentId=<?php echo $rowApp['appointmentId'] ?>"
                    class="btn btn-success"><Button class="btn btn-success">Edit</Button></a></td>
              </tr>
              <?php
            }
          }
          ?>
        </tbody>
      </table>
    </div>
    <!-- missed Appointments -->
    <div id="missed" class="table-responsive miss hide">
      <table id="" class="table w-100 display">
        <thead>
          <th scope="col" class="text-center">S/N</th>
          <th scope="col" class="text-center">Full Name</th>
          <th scope="col" class="text-center">doctor </th>
          <th scope="col" class="text-center">Appointment day</th>
          <th scope="col" class="text-center">Appointment Time</th>
          <th scope="col" class="text-center">Status</th>

          </tr>
        </thead>
        <tbody>
          <?php
          if ($mApp->num_rows > 0) {
            while ($rowmApp = $mApp->fetch_assoc()) {
              ?>
              <tr>
                <th scope="row"><?php echo $counter4++ ?></th>
                <td><?php echo $rowmApp['PatientFname'] ?>     <?php echo $rowmApp['PatientLname'] ?> </td>
                <td> Dr. <?php echo $rowmApp['doctorFname'] ?>     <?php echo $rowmApp['doctorLname'] ?></td>
                <td class="text-center"><?php echo $rowmApp['appointmentDate'] ?></td>
                <td class="text-center"><?php echo $rowmApp['appointmentTime'] ?></td>
                <td class="text-center"><?php echo $rowmApp['appointmentStatus'] ?></td>
              </tr>
              <?php
            }
          }
          ?>
        </tbody>
      </table>
    </div>
    <!-- Cancelled Appointments -->
    <div id="Cancelled" class="table-responsive can hide ">
      <table id="" class="table w-100 display">
        <thead>
          <th scope="col" class="text-center">S/N</th>
          <th scope="col" class="text-center">Full Name</th>
          <th scope="col" class="text-center">doctor </th>
          <th scope="col" class="text-center">Appointment day</th>
          <th scope="col" class="text-center">Appointment Time</th>
          <th scope="col" class="text-center">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($cAapp->num_rows > 0) {
            while ($rowcAapp = $cAapp->fetch_assoc()) {
              ?>
              <tr>
                <th scope="row"><?php echo $counter5++ ?></th>
                <td><?php echo $rowcAapp['PatientFname'] ?>     <?php echo $rowcAapp['PatientLname'] ?> </td>
                <td> Dr. <?php echo $rowcAapp['doctorFname'] ?>     <?php echo $rowcAapp['doctorLname'] ?></td>
                <td class="text-center"><?php echo $rowcAapp['appointmentDate'] ?></td>
                <td class="text-center"><?php echo $rowcAapp['appointmentTime'] ?></td>
                <td class="text-center"><?php echo $rowcAapp['appointmentStatus'] ?></td>
              </tr>
              <?php
            }
          }
          ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <!-- data tables stuff -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <!-- initalising the table-->
    <script>
      new DataTable('table.display');
    </script>
    <!-- data table end -->
    <script src="../assets/js/script.js"></script>
</body>