<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>D2H Hotel - CONTACT</title>
  <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center ">CONTACT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Bản thân khách sạn là 1 khách sạn rất thành công . 
      Đôi khi có những vị khách khó tính, kết quả họ không cần sự thuận tiện,<br>
      và những điều tương tự, nghiêm trọng hơn.
    </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 mb-5 px-4">

        <div class="bg-white rounded shadow p-4">
          <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/d/embed?mid=1IPp8JEozOseXcZ42sTJnOFhuxhs&hl=en_US&ehbc=2E312F" width="640" ></iframe>
          <h5>Address</h5>
          <a href="https://maps.app.goo.gl/JajDUeJnsubAMWJu5" target="_blank" class="d-blank-block text-decoration-none text-dark mb-2">
            <i class="bi bi-geo-alt-fill"></i> 701, Quan1, TP.HCM, Viet Nam
          </a>

          <h5 class="mt-4">Call us</h5>
          <a helf="tel: +84961232976" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+84961232976
          </a>
          <br>
          <a helf="tel: +84961232976" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i>+84961232976
          </a>

          <h5 class="mt-4">Email</h5>
          <a helf="mailto: ask.tjwebdev@gmail.com" class="d-inline-block text-decoration-none text-dark">
            <i class="bi bi-envelope-fill"></i> ask.tjwebdev@gmail.com
          </a>

          <h5 class="mt-4">Follow us</h5>
          <a helf="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
          </a>
          <a helf="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
          </a>
          <a helf="#" class="d-inline-block text-dark fs-5">
            <i class="bi bi-instagram me-1"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 px-4">
        <div class="bg-white rounded shadow p-4">
          <form>
            <h5>Send a message</h5>
            <div class="mb-3">
              <label  class="form-label" style="font-weight: 500;">Name</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mb-3">
              <label  class="form-label" style="font-weight: 500;">Email</label>
              <input type="email" class="form-control shadow-none">
            </div>
            <div class="mb-3">
              <label  class="form-label" style="font-weight: 500;">Subject</label>
              <input type="text" class="form-control shadow-none">
            </div>
            <div class="mb-3">
              <label  class="form-label" style="font-weight: 500;">Message</label>
              <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
            </div>        
              <button type="submit" class="btn text-dark custom-bg mt-3">SEND</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php require('inc/footer.php'); ?>




</body>
</html>
